<?php
/**
 * MercuryBoard
 * Copyright (c) 2001-2005 The Mercury Development Team
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * $Id: error.php,v 1.12 2005/04/17 14:16:02 jason Exp $
 **/

$error_version = '2.0';

function error_fatal($type, $message, $file, $line = 0)
{
	switch($type)
	{
	case E_USER_ERROR:
		$type_str = 'Error';
		break;

	case E_WARNING:
	case E_USER_WARNING:
		$type_str = 'Warning';
		break;

	case E_NOTICE:
	case E_USER_NOTICE:
		$type_str = 'Notice';
		break;

	case MERCURY_QUERY_ERROR:
		$type_str = 'Query Error';
		break;

	default:
		$type_str = 'Unknown Error';
	}

	if (strstr($file, 'eval()')) {
		$split    = preg_split('/[\(\)]/', $file);
		$file     = $split[0];
		$line     = $split[1];
		$message .= ' (in evaluated code)';
	}

	$details = null;

	if ($type != MERCURY_QUERY_ERROR) {
		if (strpos($message, 'mysql_fetch_array(): supplied argument') === false) {
			$lines = null;
			$details2 = null;

			if (function_exists('debug_backtrace')) {
				$backtrace = debug_backtrace();

				if (strpos($message, 'Template not found') !== false) {
					$file = $backtrace[2]['file'];
					$line = $backtrace[2]['line'];
				}
			}

			if (file_exists($file)) {
				$lines = file($file);
			}

			if ($lines) {
				$details2 = "
				<span class='header'>Code:</span><br />
				<span class='code'>" . error_getlines($lines, $line) . '</span>';
			}
		} else {
			$details2 = "
			<span class='header'>MySQL Said:</span><br />" . mysql_error() . '<br />';
		}

		$details .= "
		<span class='header'>$type_str [$type]:</span><br />
		The error was reported on line <b>$line</b> of <b>$file</b><br /><br />$details2";
	} else {
		$details .= "
		<span class='header'>$type_str [$line]:</span><br />
		This type of error is reported by MySQL.
		<br /><br /><span class='header'>Query:</span><br />$file<br />";
	}

	$checkbug = error_report($type, $message, $file, $line);

	$temp_querystring = str_replace("&","&amp;", $_SERVER['QUERY_STRING']);

	return "
	<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">
	<html>
	<head>
	<title>MercuryBoard Error</title>
	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">

	<style type='text/css'>
	body {font-size:12px; font-family: verdana, arial, helvetica, sans-serif; color:#000000; background-color:#ffffff}
	hr {height:1px}
	.large  {font-weight:bold; font-size:18px; color:#660000; background-color:transparent}
	.header {font-weight:bold; font-size:12px; color:#660000; background-color:transparent}
	.error  {font-weight:bold; font-size:12px; color:#ff0000; background-color:transparent}
	.small  {font-weight:bold; font-size:10px; color:#000000; background-color:transparent}
	.code   {font-weight:normal; font-size:12px; font-family:courier new, fixedsys, serif}
	</style>
	</head>

	<body>
	<span class='large'>mercuryboard has exited with an error</span><br /><br />

	<hr>
	<span class='error'>$message</span>
	<hr><br />

	$details

	<br /><hr><br />
	<a href='http://www.mercuryboard.com/remote/checkbug.php?$checkbug' class='small'>Check status of problem (recommended)</a><br />
	<a href='{$_SERVER['PHP_SELF']}?{$temp_querystring}&amp;debug=1' class='small'>View debug information (advanced)</a>
	</body>
	</html>";
}

function error_getlines($lines, $line)
{
	$code    = null;
	$padding = ' ';
	$previ   = $line-2;
	$total_lines = count($lines);

	for ($i = $line - 2; $i <= $line + 2; $i++)
	{
		if ((strlen($previ) < strlen($i)) && ($padding == ' ')) {
			$padding = null;
		}

		if (($i < 1) || ($i > $total_lines)) {
			continue;
		}

		$codeline = rtrim(htmlentities($lines[$i-1]));
		$codeline = str_replace("\t", '&nbsp;&nbsp;&nbsp;&nbsp;', $codeline);
		$codeline = str_replace(' ', '&nbsp;', $codeline);

		if ($i != $line) {
			$code .= $i . $padding . $codeline . "<br />\n";
		} else {
			$code .= '<font color="#FF0000">' . $i . $padding . $codeline . "</font><br />\n";
		}

		$previ = $i;
	}
	return $code;
}

function error_report($type, $message, $file, $line)
{
	global $error_version;

	if (stristr($message, 'mysql_fetch_array(): supplied argument is not a valid MySQL result resource')) {
		$message .= '; ' . mysql_error();
	}

	if (!isset($GLOBALS['mercury']) && class_exists('mercuryboard')) {
		$mercury = new mercuryboard;
	} elseif (isset($GLOBALS['mercury'])) {
		$mercury = $GLOBALS['mercury'];
	}

	if ($type != MERCURY_QUERY_ERROR) {
		$fp = @fopen($file, 'r');

		if ($fp) {
			$contents = fread($fp, 4096);
			fclose($fp);

			preg_match('/\$Id.+?\$/', $contents, $file_version);
			$file_version = $file_version[0];
		} else {
			$file_version = $file;
		}
	} else {
		$file_version = $file;
	}

	$mysql_version   = mysql_result(mysql_query('SELECT VERSION() as version'), 0, 0);
	$server_software = isset($_SERVER['SERVER_SOFTWARE']) ? $_SERVER['SERVER_SOFTWARE'] : 0;
	$safe_mode       = get_cfg_var('safe_mode') ? 1 : 0;

	$str = serialize(array($error_version, $mercury->version, PHP_VERSION, $mysql_version, $file_version, $message, $server_software, PHP_OS, $safe_mode, $line));
	return urlencode(base64_encode(md5($str) . $str));
}

function error_warning($message, $file, $line)
{
	return $message;
}

function error_notice($message)
{
	return $message;
}
?>