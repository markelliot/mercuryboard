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
 * $Id: upgrade_14.php,v 1.8 2006/07/29 12:26:25 jon Exp $
 **/

if (!defined('INSTALLER')) {
	exit('Use index.php to upgrade.');
}

$need_templates = array(
	'PM_FOLDER', // Edited
	'POST_POSTER_MEMBER',
	'PM_SEND',
	'POST_BOX_PLAIN',
	'MAIN_HEADER_MEMBER',
	'PM_VIEW',
	'PM_PREVIEW', // New
	'NEW_POSTS',
	'NEW_POSTS_CONTENT',
	'NO_NEW_POSTS',
	'PM_VIEW_BUDDIES',
	'PM_BUDDY_ROW',
	'PM_NO_BUDDY_ROW'
);

$mb->sets['html_comments'] = 1;

$queries[] = "ALTER TABLE {$pre}users ADD user_title_custom TINYINT(1) UNSIGNED NOT NULL AFTER user_title";

$queries[] = "DROP TABLE IF EXISTS {$pre}buddies";
$queries[] = "CREATE TABLE {$pre}buddies (
  buddy_id int(12) unsigned NOT NULL auto_increment,
  buddy_user int(12) unsigned NOT NULL default '0',
  buddy_friend int(12) unsigned NOT NULL default '0',
  PRIMARY KEY  (buddy_id)
) TYPE=MyISAM";
?>