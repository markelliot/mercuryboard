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
 * $Id: index.php,v 1.72 2006/07/17 19:42:12 jon Exp $
 **/

$time_now   = explode(' ', microtime());
$time_start = $time_now[1] + $time_now[0];

srand((double)microtime() * 1234567);

require './settings.php';
require './func/constants.php';
require './lib/' . $set['dbtype'] . '.php';
require './global.php';
require './lib/perms.php';
require './lib/user.php';

if (!$set['installed']) {
	header('Location: ./install/index.php');
}

set_error_handler('error');

error_reporting(E_ALL);
set_magic_quotes_runtime(0);

$modules = array(
	'active',
	'cp',
	'email',
	'forum',
	'help',
	'login',
	'members',
	'mod',
	'pm',
	'post',
	'printer',
	'profile',
	'register',
	'search',
	'topic',
	'new_posts'
);

if (!isset($_GET['a']) || !in_array($_GET['a'], $modules)) {
	$module = 'board';
} else {
	$module = $_GET['a'];
}

require './func/' . $module . '.php';

$mercury = new $module;
$mercury->pre = $set['prefix'];

if (!get_magic_quotes_gpc()) {
	$mercury->set_magic_quotes_gpc($mercury->get);
	$mercury->set_magic_quotes_gpc($mercury->post);
	$mercury->set_magic_quotes_gpc($mercury->cookie);
}

$mercury->db = new database($set['db_host'], $set['db_user'], $set['db_pass'], $set['db_name'], $set['db_port'], $set['db_socket']);

if (!$mercury->db->connection) {
	error(MERCURY_ERROR, 'A connection to the database could not be established and/or the specified database could not be found.', __FILE__, __LINE__);
}

$mercury->get['a'] = $module;
$mercury->sets     = $mercury->get_settings($set);

if ($mercury->sets['output_buffer'] && isset($mercury->server['HTTP_ACCEPT_ENCODING']) && stristr($mercury->server['HTTP_ACCEPT_ENCODING'], 'gzip')) {
	ob_start('ob_gzhandler');
}

header( 'P3P: CP="CAO PSA OUR"' );
session_start();

$mercury->user_cl = new user($mercury);
$mercury->user    = $mercury->user_cl->login();
$mercury->lang    = $mercury->get_lang($mercury->user['user_language'], $mercury->get['a']);
$mercury->session['id'] = session_id();

if (!isset($mercury->get['skin'])) {
	$mercury->skin = $mercury->user['skin_dir'];
} else {
	$mercury->skin = $mercury->get['skin'];
}

$mercury->perms = new permissions;
$mercury->perms->db  = &$mercury->db;
$mercury->perms->pre = &$mercury->pre;
$mercury->perms->get_perms($mercury->user['user_group'], $mercury->user['user_id'], ($mercury->user['user_perms'] ? $mercury->user['user_perms'] : $mercury->user['group_perms']));

$mercury->temps = $mercury->get_templates($mercury->get['a']);

$mercury->table  = eval($mercury->template('MAIN_TABLE'));
$mercury->etable = eval($mercury->template('MAIN_ETABLE'));

$server_load = $mercury->get_load();

$mercury->tree($mercury->sets['forum_name'], $mercury->self);

if ($mercury->is_banned()) {
	error(MERCURY_NOTICE, $mercury->lang->main_banned);
}

$reminder = null;
$reminder_text = null;

if ($mercury->sets['closed']) {
	if (!$mercury->perms->auth('board_view_closed')) {
		if ($mercury->get['a'] != 'login') {
			error(MERCURY_NOTICE, $mercury->sets['closedtext'] . "<br /><hr />If you are an administrator, <a href='$mercury->self?a=login&amp;s=on'>click here</a> to login.");
		}
	} else {
		$reminder_text = $mercury->lang->main_reminder_closed . '<br />&quot;' . $mercury->sets['closedtext'] . '&quot;';
	}
}

if ($mercury->user['user_group'] == USER_AWAIT) {
	$reminder_text = "{$mercury->lang->main_activate}<br /><a href='{$mercury->self}?a=register&amp;s=resend'>{$mercury->lang->main_activate_resend}</a>";
}

if ($reminder_text) {
	$reminder = eval($mercury->template('MAIN_REMINDER'));
}

if ($mercury->sets['max_load'] && ($server_load > $mercury->sets['max_load'])) {
	error(MERCURY_NOTICE, sprintf($mercury->lang->main_max_load, $mercury->sets['forum_name']));
}

switch($mercury->get['a'])
{
case 'forum': $item = isset($mercury->get['f']) ? intval($mercury->get['f']) : 0; break;
case 'topic': $item = isset($mercury->get['t']) ? intval($mercury->get['t']) : 0; break;
case 'printer': $item = isset($mercury->get['t']) ? intval($mercury->get['t']) : 0; break;
case 'profile': $item = isset($mercury->get['w']) ? intval($mercury->get['w']) : 0; break;
default: $item = 0;
}

if (!$mercury->perms->is_guest) {
	$mercury->db->query("REPLACE INTO {$mercury->pre}active (active_id, active_action, active_item, active_time, active_ip, active_user_agent, active_session) VALUES ({$mercury->user['user_id']}, '{$mercury->get['a']}', $item, $mercury->time, '$mercury->ip', '". addslashes($mercury->agent) ."', '{$mercury->session['id']}')");

	$NewMessages = $mercury->get_messages();

	if (!$NewMessages) {
		$MessageLink = '';
		$messageclass = 'nav';
	} else {
		$MessageLink = " ($NewMessages {$mercury->lang->main_new})";
		$messageclass = 'navbold';
	}
} else {
	$mercury->db->query("REPLACE INTO {$mercury->pre}active (active_id, active_action, active_item, active_time, active_ip, active_user_agent, active_session) VALUES (" . USER_GUEST_UID . ", '{$mercury->get['a']}', $item, $mercury->time, '$mercury->ip', '". addslashes($mercury->agent) ."', '{$mercury->session['id']}')");
}

$output = $mercury->execute();

if (($mercury->get['a'] == 'forum') && isset($mercury->get['f'])) {
	$searchlink = '&amp;f=' . intval($mercury->get['f']);
} else {
	$searchlink = null;
}

$userheader = eval($mercury->template('MAIN_HEADER_' . ($mercury->perms->is_guest ? 'GUEST' : 'MEMBER')));

$title = isset($mercury->title) ? $mercury->title : $mercury->sets['forum_name'];

$time_now  = explode(' ', microtime());
$time_exec = round($time_now[1] + $time_now[0] - $time_start, 4);

if (isset($mercury->get['debug'])) {
	$output = $mercury->show_debug($server_load, $time_exec);
}

if (!$mercury->nohtml) {
	$mercuryboard = $output . eval($mercury->template('MAIN_COPYRIGHT'));
	echo eval($mercury->template('MAIN'));
} else {
	echo $output;
}
?>