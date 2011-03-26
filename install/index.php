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
 * $Id: index.php,v 1.39 2006/07/29 12:24:43 jon Exp $
 **/

/**
 * Executes an array of queries
 *
 * @param array $queries Queries to execute
 * @param object $db Database connection
 * @return void
 **/
function execute_queries($queries, $db)
{
	foreach ($queries as $query)
	{
		$db->query($query);
	}
}

ob_start();
error_reporting(E_ALL);

require '../settings.php';
require '../func/constants.php';
require '../global.php';
require '../lib/mysql.php';
require '../lib/perms.php';

$mb = new mercuryboard;

$path_tbl = './data_tables.php';
$path_tpl = './data_templates.php';

define('LATEST', 14);   // ID of most recent upgrade script
define('INSTALLER', 1); // Used in query files

$self   = isset($_SERVER['PHP_SELF']) ? $_SERVER['PHP_SELF'] : 'index.php';
$failed = false;

if (!isset($_GET['mode'])) {
	$_GET['mode'] = null;
}

if (!isset($_GET['step'])) {
	$_GET['step'] = 1;
}

echo "
<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.1//EN\" \"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd\">
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' dir='ltr'>
<head>

<title>MercuryBoard</title>
<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />

<style type='text/css'>
 <!--
  body        {background-color:#ffffff; color:#000000; font-size:10px; font-family:Verdana, Arial, Helvetica, sans-serif; margin-left:0px; margin-right:0px; margin-top:0px; margin-bottom:0px; cursor:default;}
  .normal, td {font-size:11px; font-family:Verdana, Arial, Helvetica, sans-serif; font-weight:normal;}
  .input      {font-size:11px; background-color:#FFFFFF; color:#000000; font-family:Verdana, Arial, Helvetica, sans-serif; border:1px solid #555555; padding:1px;}
  .select     {font-size:11px; background-color:#FFFFFF; color:#000000; font-family:Verdana, Arial, Helvetica, sans-serif;}
  a           {background-color:transparent; color:#000000;}
  a:hover     {background-color:transparent; color:#FF0000;}
  .main       {font-size:17px; background-color:#EEEEEE; color:#000000; font-weight:bold;}
  .left       {font-size:10px; background-color:#DDDDDD; color:#000000; width:30%;}
  .copyright  {font-size:10px; text-align:center; line-height:14px;}
  .grey       {background-color:transparent; color:#888888;}
  .tiny       {font-size:9px;}
  hr          {height:1px; border:0px; border-top:1px solid; border-color:#666666;}
  img         {border:0px;}
  form        {margin:0px;}
 //-->
</style>

</head>
<body>

<table width='100%' border='0' cellspacing='0' cellpadding='0'>
<tr>
<td align='center'>
<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
<table width='75%' style='background-color:#454545' cellpadding='0' cellspacing='0' border='0'>
<tr>
<td align='left'>
<table width='100%' cellpadding='8' cellspacing='1' border='0'>
<tr>
	<td colspan='2' style='padding:0px'>
		<table width='100%' cellpadding='0' cellspacing='0' border='0'>
			<tr>
				<td style='margin:0px; background-image:url(../skins/default/images/mbbg.gif); padding-left:10px;'><img src='../skins/default/images/mb.gif' alt='MercuryBoard' /></td>
				<td class='main' align='right' style='background-image:url(../skins/default/images/mbbg.gif); padding-right:10px'>{$mb->version}</td>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td class='left' align='left' valign='top'>
		<b>PHP Version:</b> ". PHP_VERSION ."<hr />
		<b>Operating System:</b> ". (defined('PHP_OS') ? PHP_OS : 'unknown') ."<hr />
		<b>Safe mode:</b> ". (get_cfg_var('safe_mode') ? 'on' : 'off') ."<hr />
		<b>Register globals:</b> ". (get_cfg_var('register_globals') ? 'on' : 'off') ."<hr />
		<b>Magic Quotes:</b> gpc ". (get_cfg_var('magic_quotes_gpc') ? 'on' : 'off') . ', runtime ' . (get_cfg_var('magic_quotes_runtime') ? 'on' : 'off') ."<hr />
		<b>Server Software:</b> " . (isset($_SERVER['SERVER_SOFTWARE']) ? $_SERVER['SERVER_SOFTWARE'] : 'unknown') ."
	</td>
	<td class='main'>";

if (substr(PHP_VERSION, 0, 1) == '3') {
	echo 'Your PHP version is ' . PHP_VERSION . '.<br />Currently only PHP4 is supported.';
	$failed = true;
}

if (!extension_loaded('mysql')) {
	if ($failed) { // If we have already shown a message, show the next one two lines down
		echo '<br /><br />';
	}

	echo 'Your PHP installation does not support MySQL.<br />Currently only MySQL is supported.';
	$failed = true;
}

if (isset($_SERVER['SERVER_SOFTWARE'])) {
	if ((strstr(PHP_VERSION, '4.2.0')
	|| strstr(PHP_VERSION, '4.2.1'))
	&& stristr($_SERVER['SERVER_SOFTWARE'], 'Apache/2.0.')) {
		if ($failed) {
			echo '<br /><br />';
		}

		echo 'There is a serious cookie bug in PHP 4.2 running on Apache 2.0.<br />Because it is a bug in PHP itself, MercuryBoard can not solve the problem.';
		$failed = true;
	}
}

if ($failed) {
	echo "<br /><br /><b>To run MercuryBoard and other advanced PHP software, the above error(s) must be fixed by your web host.</b>";
} else {
	switch($_GET['mode']) {
	case '':
		echo "
		What kind of installation will this be?<br /><br />
		<form action='$self' method='get'>
		<table border='0' cellpadding='4' cellspacing='0'>
		<tr>
			<td><input id='install' type='radio' name='mode' value='install' checked='checked' /></td>
			<td><label for='install'>New installation</label></td>
		</tr>
		<tr>
			<td><input id='upgrade' type='radio' name='mode' value='upgrade' /></td>
			<td><label for='upgrade'>Upgrade from a previous MercuryBoard version</label></td>
		</tr>
		<tr>
			<td><input id='convert' type='radio' name='mode' value='convert' /></td>
			<td class='grey'><label for='convert'>Conversion from another board</label></td>
		</tr>
		<tr>
			<td colspan='2' align='center'><br /><input type='submit' value='Continue' /></td>
		</tr>
		</table>
		</form>";
		break;

	case 'install':
		switch($_GET['step']) {
		default:
			echo "
			Install to what MySQL database?<br /><br />
			<form action='$self?mode=install&amp;step=2' method='post'>
			<table border='0' cellpadding='4' cellspacing='0'>
			<tr>
				<td><b>Host Server</b></td>
				<td><input class='input' type='text' name='db_host' value='{$set['db_host']}' /></td>
			</tr>
			<tr>
				<td><b>Database Name</b></td>
				<td><input class='input' type='text' name='db_name' value='{$set['db_name']}' /></td>
			</tr>
			<tr>
				<td><b>Database Username</b></td>
				<td><input class='input' type='text' name='db_user' value='{$set['db_user']}' /></td>
			</tr>
			<tr>
				<td><b>Database Password</b></td>
				<td><input class='input' type='text' name='db_pass' value='{$set['db_pass']}' /></td>
			</tr>
			<tr>
				<td><b>Database Port</b></td>
				<td><input class='input' type='text' name='db_port' value='{$set['db_port']}' /></td>
			</tr>
			<tr>
				<td><b>Database Socket</b><br /><span class='tiny'>Blank for none</span></td>
				<td><input class='input' type='text' name='db_socket' value='{$set['db_socket']}' /></td>
			</tr>
			<tr>
				<td colspan='2' class='tiny' align='center'><br /><br />The following should only be changed if you need to<br />install multiple MercuryBoards on the same database.</td>
			</tr>
			<tr>
				<td><b>Table Prefix</b></td>
				<td><input class='input' type='text' name='prefix' value='{$set['prefix']}' /></td>
			</tr>
			<tr>
				<td colspan='2' align='center'><br /><input type='submit' value='Continue' /></td>
			</tr>
			</table>
			</form>";
			break;

		case 2:
			$mb = new mercuryboard;
			$db = new database($_POST['db_host'], $_POST['db_user'], $_POST['db_pass'], $_POST['db_name'], $_POST['db_port'], $_POST['db_socket']);

			if (!$db->connection) {
				echo "Couldn't connect to a database using the specified information.";
				break;
			}

			$mb->sets = $set;
			$mb->sets['db_host']   = $_POST['db_host'];
			$mb->sets['db_user']   = $_POST['db_user'];
			$mb->sets['db_pass']   = $_POST['db_pass'];
			$mb->sets['db_name']   = $_POST['db_name'];
			$mb->sets['db_port']   = $_POST['db_port'];
			$mb->sets['db_socket'] = $_POST['db_socket'];
			$mb->sets['prefix']    = trim(preg_replace('/[^a-zA-Z0-9_]/', '', $_POST['prefix']));

			if (!$mb->write_db_sets('../settings.php')) {
				echo 'The database connection was ok, but settings.php could not be updated.<br /><br />CHMOD settings.php to 777.';
				break;
			}

			if (!is_readable($path_tbl)) {
				echo 'Database connected, settings written, but no data could be loaded from ' . $path_tbl;
				break;
			}

			if (!is_readable($path_tpl)) {
				echo 'Database connected, settings written, but no templates could be loaded from ' . $path_tpl;
				break;
			}

			$queries = array();
			$pre = $mb->sets['prefix'];

			include $path_tbl;
			include $path_tpl;

			execute_queries($queries, $db);

			echo "The operations were successful.<br /><br />
			<a href='$self?mode=install&amp;step=3'>Continue to step 3</a>";
			break;

		case 3:
    		echo "
    		Admin Account Setup<br /><br />
			<form action='$self?mode=install&amp;step=4' method='post'>
			<table border='0' cellpadding='4' cellspacing='0'>
			<tr>
				<td><input class='input' type='text' name='admin_name' /></td>
				<td>User Name</td>
			</tr>
			<tr>
				<td><input class='input' type='password' name='admin_pass' /></td>
				<td>Password</td>
			</tr>
			<tr>
				<td><input class='input' type='password' name='admin_pass2' /></td>
				<td>Password (confirmation)</td>
			</tr>
			<tr>
				<td><input class='input' type='text' name='admin_email' /></td>
				<td>Email</td>
			</tr>
			<tr>
				<td colspan='2' align='center'><br /><input type='submit' value='Continue' /></td>
			</tr>
			</table>
			</form>";
			break;

		case 4:
			if ((trim($_POST['admin_name']) == '')
			|| (trim($_POST['admin_pass']) == '')
			|| (trim($_POST['admin_email']) == '')) {
				echo 'Go back and check to see that you filled in all required information.';
				break;
			}

			if ($_POST['admin_pass'] != $_POST['admin_pass2']) {
				echo 'Your passwords do not match. Please go back and correct this error.';
				break;
			}

			$_POST['admin_pass'] = md5($_POST['admin_pass']);

			$mb       = new mercuryboard;
			$mb->pre  = $set['prefix'];
			$mb->db   = new database($set['db_host'], $set['db_user'], $set['db_pass'], $set['db_name'], $set['db_port'], $set['db_socket']);

			if (!get_magic_quotes_gpc()) {
				$mb->set_magic_quotes_gpc($mb->get);
				$mb->set_magic_quotes_gpc($mb->post);
				$mb->set_magic_quotes_gpc($mb->cookie);
			}

			$_POST['admin_name'] = str_replace(
				array('&amp;#', '\''),
				array('&#', '&#39;'),
				htmlspecialchars(stripslashes($_POST['admin_name']))
			);

			$mb->db->query("INSERT INTO {$mb->pre}users (user_name, user_password, user_group, user_title, user_title_custom, user_joined, user_email) VALUES ('{$_POST['admin_name']}', '{$_POST['admin_pass']}', " . USER_ADMIN .  ", 'Administrator', 1, {$mb->time}, '{$_POST['admin_email']}')");
			$admin_uid = $mb->db->insert_id();

			$mb->sets = $mb->get_settings($set);
			$mb->sets['last_member'] = $_POST['admin_name'];
			$mb->sets['last_member_id'] = $admin_uid;
			$mb->sets['admin_incoming'] = $_POST['admin_email'];
			$mb->sets['admin_outgoing'] = $_POST['admin_email'];
			$mb->sets['members']++;
			$mb->sets['installed'] = 1;

			$mb->write_db_sets('../settings.php');
			$mb->write_sets();

			setcookie($mb->sets['cookie_prefix'] . 'user', $admin_uid, $mb->time + $mb->sets['logintime'], $mb->sets['cookie_path']);
			setcookie($mb->sets['cookie_prefix'] . 'pass', $_POST['admin_pass'], $mb->time + $mb->sets['logintime'], $mb->sets['cookie_path']);

			echo "An administrator account was registered.<br />
			REMEMBER TO DELETE THE INSTALL DIRECTORY!<br /><br />
			<a href='../index.php'>To the board</a>";
			break;
		}
		break;

	case 'upgrade':
		switch($_GET['step']) {
		default:
			echo "
			Upgrade from what version?<br /><br />
			<form action='$self' method='get'>
			<input type='hidden' name='mode' value='upgrade' />
			<input type='hidden' name='step' value='2' />
			<table border='0' cellpadding='4' cellspacing='0'>
			<tr>
				<td><input type='radio' name='from' value='14' id='upgrade14' checked='checked' /></td>
				<td><label for='upgrade14'>MercuryBoard v1.1.4</label></td>
			</tr>
			<tr>
				<td><input type='radio' name='from' value='13' id='upgrade13' /></td>
				<td><label for='upgrade13'>MercuryBoard v1.1.3</label></td>
			</tr>
			<tr>
				<td><input type='radio' name='from' value='12' id='upgrade12' /></td>
				<td><label for='upgrade12'>MercuryBoard v1.1.2</label></td>
			</tr>
			<tr>
				<td><input type='radio' name='from' value='11' id='upgrade11' /></td>
				<td><label for='upgrade11'>MercuryBoard v1.1.1</label></td>
			</tr>
			<tr>
				<td><input type='radio' name='from' value='10' id='upgrade10' /></td>
				<td><label for='upgrade10'>MercuryBoard v1.1.0</label></td>
			</tr>
			<tr>
				<td><input type='radio' name='from' value='9' id='upgrade9' /></td>
				<td><label for='upgrade9'>MercuryBoard v1.0.2</label></td>
			</tr>
			<tr>
				<td><input type='radio' name='from' value='8' id='upgrade8' /></td>
				<td><label for='upgrade8'>MercuryBoard v1.0.1</label></td>
			</tr>
			<tr>
				<td><input type='radio' name='from' value='7' id='upgrade7' /></td>
				<td><label for='upgrade7'>MercuryBoard v1.0.0</label></td>
			</tr>
			<tr>
				<td colspan='2' align='center'><br /><input type='submit' value='Continue' /></td>
			</tr>
			</table>
			</form>";
			break;

		// Step 1.5 simply updates the database info
		case 15:
			$set['db_host']   = $_POST['db_host'];
			$set['db_name']   = $_POST['db_name'];
			$set['db_user']   = $_POST['db_user'];
			$set['db_pass']   = $_POST['db_pass'];
			$set['db_port']   = $_POST['db_port'];
			$set['db_socket'] = $_POST['db_socket'];
			$set['prefix']    = trim(preg_replace('/[^a-zA-Z0-9_]/', '', $_POST['prefix']));

			$mb->sets = $set;

			if (!$mb->write_db_sets('../settings.php')) {
				echo 'settings.php could not be updated.<br /><br />CHMOD settings.php to 777.';
				break;
			}
			// Fall through to the next case

		case 2:
			@set_time_limit(300);

			// Check to see if all upgrade files are intact
			$check = $_GET['from'];
			while ($check <= LATEST)
			{
				if (!is_readable("./upgrade_$check.php")) {
					echo "A file required for upgrading was not found: upgrade_$check.php";
					break 2;
				}
				$check++;
			}

			$db = new database($set['db_host'], $set['db_user'], $set['db_pass'], $set['db_name']);

			if (!$db->connection) {
				if ($_GET['step'] == 15) {
					$sets_error = '<br />Could not connect with the specified information.';
				} else {
					$sets_error = null;
				}

				echo "
				Upgrade what MySQL database?$sets_error<br /><br />
				<form action='$self?mode=upgrade&amp;from={$_GET['from']}&amp;step=15' method='post'>
				<table border='0' cellpadding='4' cellspacing='0'>
				<tr>
					<td><b>Host Server</b></td>
					<td><input class='input' type='text' name='db_host' value='{$set['db_host']}' /></td>
				</tr>
				<tr>
					<td><b>Database Name</b></td>
					<td><input class='input' type='text' name='db_name' value='{$set['db_name']}' /></td>
				</tr>
				<tr>
					<td><b>Database Username</b></td>
					<td><input class='input' type='text' name='db_user' value='{$set['db_user']}' /></td>
				</tr>
				<tr>
					<td><b>Database Password</b></td>
					<td><input class='input' type='text' name='db_pass' value='{$set['db_pass']}' /></td>
				</tr>
				<tr>
					<td><b>Database Port</b></td>
					<td><input class='input' type='text' name='db_port' value='{$set['db_port']}' /></td>
				</tr>
				<tr>
					<td><b>Database Socket</b><br /><span class='tiny'>Blank for none</span></td>
					<td><input class='input' type='text' name='db_socket' value='{$set['db_socket']}' /></td>
				</tr>
				<tr>
					<td colspan='2' class='tiny' align='center'><br /><br />The following should only be changed if you have multiple MercuryBoards installed on the same database.</td>
				</tr>
				<tr>
					<td><b>Table Prefix</b></td>
					<td><input class='input' type='text' name='prefix' value='{$set['prefix']}' /></td>
				</tr>
				<tr>
					<td colspan='2' align='center'><br /><input type='submit' value='Continue' /></td>
				</tr>
				</table>
				</form>";
				break;
			}

			$queries = array();
			$pre = $set['prefix'];
			$template_list = false;

			$set['installed'] = 1;

			$mb->sets = $set;
			$mb->pre  = $set['prefix'];
			$mb->db   = $db;

			// We can't get settings from the database unless we're already running >= 1.1.0
			if ($_GET['from'] >= 10) {
				$mb->sets = $mb->get_settings($mb->sets);
			}

			$mb->perms = new permissions;
			$mb->perms->db  = &$mb->db;
			$mb->perms->pre = &$mb->pre;

			while ($_GET['from'] <= LATEST)
			{
				include "./upgrade_{$_GET['from']}.php";
				$_GET['from']++;

				// This gets really complicated so be careful
				if (is_bool($need_templates)) {
					if ($need_templates) {
						$template_list = true;
					}
				} else {
					if (is_bool($template_list)) {
						if (!$template_list) {
							$template_list = $need_templates;
						}
					} else {
						$template_list = array_unique(array_merge($template_list, $need_templates));
					}
				}
			}

			if (!$mb->write_db_sets('../settings.php')) {
				echo 'settings.php could not be updated.<br /><br />CHMOD settings.php to 777.';
				break;
			}

			/**
			 * The order this next block executes is important.
			 * 1. Verify we can upgrade templates
			 * 2. Upgrade board
			 * 3. Upgrade templates
			 *
			 * Because the query used to upgrade templates is for
			 * the most recent version of the board, we must run
			 * it after the board is fully upgraded.
			 **/

			if ($need_templates && !is_readable($path_tpl)) {
				echo 'No templates could be loaded from ' . $path_tpl;
				break;
			}

			execute_queries($queries, $mb->db);

			if ($need_templates) {
				$queries = array();
				include $path_tpl;

				if (is_bool($need_templates)) {
					$mb->db->query("DELETE FROM {$pre}templates WHERE template_skin='default'");
					execute_queries($queries, $mb->db);
				} else {
					foreach ($queries as $template => $insert)
					{
						if (in_array($template, $need_templates)) {
							$mb->db->query("DELETE FROM {$pre}templates WHERE template_name='$template' AND template_skin='default'");
							$mb->db->query($insert);
						}
					}
				}
			}

			$mb->write_sets();

			echo "Upgrade successful.<br />REMEMBER TO DELETE THE INSTALL DIRECTORY!<br /><br />
			<a href='../index.php'>To the board</a>";
			break;
		}
		break;

	case 'convert':
		echo "There are no conversions<br />available at this time.<br /><br /><a href='$self'>Back</a>";
		break;
	}
}
?>

</td>
</tr>
</table>
</td>
</tr>
</table>
</td>
</tr>
</table>
</body>
</html>