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
 * $Id: index.php,v 1.58 2006/08/14 19:31:43 jon Exp $
 **/

$time_now   = explode(' ', microtime());
$time_start = $time_now[1] + $time_now[0];

require '../settings.php';

if (!$set['installed']) {
	header('Location: ../install/index.php');
}

ob_start();
session_start();

require '../func/constants.php';
require '../lib/' . $set['dbtype'] . '.php';
require '../global.php';
require '../lib/perms.php';
require '../lib/user.php';
require './admin.php';

set_error_handler('error');

error_reporting(E_ALL);
set_magic_quotes_runtime(0);

header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

$modules = array(
	'backup',
	'ban',
	'censoring',
	'emot_control',
	'forums',
	'groups',
	'help',
	'home',
	'logs',
	'mass_mail',
	'membercount',
	'members',
	'optimize',
	'perms',
	'php_info',
	'query',
	'settings',
	'stats',
	'templates',
	'titles'
);

if (!isset($_GET['a']) || !in_array($_GET['a'], $modules)) {
	$module = 'home';
} else {
	$module = $_GET['a'];
}

require './sources/' . $module . '.php';

$admin = new $module;

if (!get_magic_quotes_gpc()) {
	$admin->set_magic_quotes_gpc($admin->get);
	$admin->set_magic_quotes_gpc($admin->post);
	$admin->set_magic_quotes_gpc($admin->cookie);
}

$database = new database($set['db_host'], $set['db_user'], $set['db_pass'], $set['db_name'], $set['db_port'], $set['db_socket']);

if (!$database->connection) {
	exit('<center><font face="verdana" size="4" color="#000000"><b>Can\'t connect to database</b><br /><br />If you need to edit the database connection settings, you may<br />need to modify them manually in settings.php.</font></center>');
}

$admin->get['a'] = $module;
$admin->db       = $database;
$admin->pre      = $set['prefix'];
$admin->sets     = $admin->get_settings($set);
$admin->user_cl  = new user($admin);
$admin->user     = $admin->user_cl->login();
$admin->lang     = $admin->get_lang($admin->user['user_language'], null, $path='../');
$server_load     = $admin->get_load();

if (!isset($admin->get['skin'])) {
	$admin->skin = $admin->user['skin_dir'];
} else {
	$admin->skin = $admin->get['skin'];
}

$admin->perms = new permissions;
$admin->perms->db  = &$admin->db;
$admin->perms->pre = &$admin->pre;
$admin->perms->get_perms($admin->user['user_group'], $admin->user['user_id'], $admin->user['group_perms']);

if (!$admin->perms->auth('is_admin') || $admin->is_banned()) {
	exit('<center><font face="verdana" size="4" color="#000000"><b>Access Denied</b></font></center>');
}

if (@file_exists('../install/index.php') && !@file_exists('../tools')) {
	exit('<center><font face="verdana" size="4" color="#000000">The Admin CP is disabled until you delete your <b>install</b> directory, as it poses a serious security risk.</font></center>');
}

$admin->table  = "<table width='80%' align='center' bgcolor='#454545' cellpadding='0' cellspacing='0' border='0'><tr><td><table width='100%' cellpadding='5' cellspacing='1' border='0'>";
$admin->etable = '</table></td></tr></table>';

$output = $admin->execute();

$title = isset($mercury->title) ? $mercury->title : 'MercuryBoard Admin CP';

$time_now  = explode(' ', microtime());
$time_exec = round(($time_now[1] + $time_now[0]) - $time_start, 4);

if (!$admin->nohtml) {
	echo "
	<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\">
	<html>
	<head>
	<title>$title</title>

	<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">
	<link rel='stylesheet' type='text/css' href='./images/styles.css' />
	</head>

	<body bgcolor='#FFFFFF' text='#000000'>

	<center><img src='./images/adminlogo.gif' border='0' alt='MercuryBoard Admin CP'></center><br />

	$admin->table
		<tr>
			<td class='headerbw'><div class='admin_tree'><a href='$admin->self'>Admin CP</a>$admin->tree</div>
			<div class='admin_help'><a href='../docs/html/admin_help.html' target='_blank'>Admin CP Help</a></div></td>
		</tr>
	$admin->etable<br /><br />

	$output<br /><br />

	$admin->table
		<tr style='font-weight:bold; background-color:#eeeeee; border:1px solid #666666; width:60%; padding:8px'>
			<td
			onmouseover='this.style.backgroundColor=\"#dddddd\"; this.style.cursor=\"pointer\"'
			onmouseout='this.style.backgroundColor=\"#eeeeee\"; this.style.cursor=\"default\"'
			onclick='location.href=\"..\"'
			align='center'
			width='50%'><a href='..'>Your Board</a></td>

			<td
			onmouseover='this.style.backgroundColor=\"#dddddd\"; this.style.cursor=\"pointer\"'
			onmouseout='this.style.backgroundColor=\"#eeeeee\"; this.style.cursor=\"default\"'
			onclick='location.href=\"http://www.mercuryboard.com\"'
			align='center'><a href='http://www.mercuryboard.com'>MercuryBoard.com</a></td>
		</tr>
	$admin->etable<br /><br />

	<center>
	<span class='small'>
		Powered by <a href='http://www.mercuryboard.com'><font color='#000000'><b><u>MercuryBoard</u></b></font></a> [$admin->version]<br />
		&copy; 2001-2006 The Mercury Development Team<br /><br />
		<b>$time_exec</b> seconds - <b>{$admin->db->querycount}</b> queries - <b>$server_load</b> load
	</span>
	</center>
	</body>
	</html>";
} else {
	echo $output;
}
?>