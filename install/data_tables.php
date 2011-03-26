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
 * $Id: data_tables.php,v 1.38 2006/07/27 19:30:20 jon Exp $
 **/

if (!defined('INSTALLER')) {
	exit('Use index.php to install.');
}

$queries[] = "DROP TABLE IF EXISTS {$pre}active";
$queries[] = "CREATE TABLE {$pre}active (
  active_id int(10) unsigned NOT NULL default '0',
  active_ip varchar(15) NOT NULL default 'Unknown',
  active_user_agent varchar(100) NOT NULL default 'Unknown',
  active_action varchar(32) NOT NULL default '',
  active_item int(10) unsigned NOT NULL default '0',
  active_time int(10) unsigned NOT NULL default '0',
  active_session varchar(32) NOT NULL default '',
  UNIQUE KEY active_session (active_session),
  UNIQUE KEY active_ip (active_ip)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}attach";
$queries[] = "CREATE TABLE {$pre}attach (
  attach_id int(12) unsigned NOT NULL auto_increment,
  attach_file varchar(32) NOT NULL default '',
  attach_name varchar(255) NOT NULL default '',
  attach_post int(12) unsigned NOT NULL default '0',
  attach_downloads int(10) unsigned NOT NULL default '0',
  attach_size int(8) unsigned NOT NULL default '0',
  PRIMARY KEY  (attach_id),
  KEY attach_post (attach_post)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}buddies";
$queries[] = "CREATE TABLE {$pre}buddies (
  buddy_id int(12) unsigned NOT NULL auto_increment,
  buddy_user int(12) unsigned NOT NULL default '0',
  buddy_friend int(12) unsigned NOT NULL default '0',
  PRIMARY KEY  (buddy_id)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}forums";
$queries[] = "CREATE TABLE {$pre}forums (
  forum_id smallint(4) unsigned NOT NULL auto_increment,
  forum_parent smallint(4) unsigned NOT NULL default '0',
  forum_tree varchar(255) NOT NULL default '',
  forum_name varchar(255) NOT NULL default '',
  forum_position smallint(4) unsigned NOT NULL default '0',
  forum_description varchar(255) NOT NULL default '',
  forum_topics int(10) unsigned NOT NULL default '0',
  forum_replies int(12) unsigned NOT NULL default '0',
  forum_lastpost int(12) unsigned NOT NULL default '0',
  PRIMARY KEY  (forum_id),
  KEY Parent (forum_parent)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}groups";
$queries[] = "CREATE TABLE {$pre}groups (
  group_id tinyint(3) unsigned NOT NULL auto_increment,
  group_name varchar(255) NOT NULL default '',
  group_type varchar(20) NOT NULL default '',
  group_format varchar(255) NOT NULL default '%s',
  group_perms text NOT NULL,
  PRIMARY KEY  (group_id)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}help";
$queries[] = "CREATE TABLE {$pre}help (
  help_id smallint(3) NOT NULL auto_increment,
  help_title varchar(255) NOT NULL default '',
  help_article text NOT NULL,
  PRIMARY KEY  (help_id)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}logs";
$queries[] = "CREATE TABLE {$pre}logs (
  log_id int(10) unsigned NOT NULL auto_increment,
  log_user int(10) unsigned NOT NULL default '0',
  log_time int(10) unsigned NOT NULL default '0',
  log_action varchar(20) NOT NULL default '',
  log_data1 int(12) unsigned NOT NULL default '0',
  log_data2 smallint(4) unsigned NOT NULL default '0',
  log_data3 smallint(4) unsigned NOT NULL default '0',
  PRIMARY KEY  (log_id)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}membertitles";
$queries[] = "CREATE TABLE {$pre}membertitles (
  membertitle_id tinyint(3) unsigned NOT NULL auto_increment,
  membertitle_title varchar(50) NOT NULL default '',
  membertitle_posts int(10) unsigned NOT NULL default '0',
  membertitle_icon varchar(25) NOT NULL default '',
  PRIMARY KEY  (membertitle_id),
  KEY Posts (membertitle_posts)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}pmsystem";
$queries[] = "CREATE TABLE {$pre}pmsystem (
  pm_id int(10) unsigned NOT NULL auto_increment,
  pm_to int(10) unsigned NOT NULL default '0',
  pm_from int(10) unsigned NOT NULL default '0',
  pm_bcc text NOT NULL,
  pm_title varchar(255) NOT NULL default '[No Title]',
  pm_time int(10) unsigned NOT NULL default '0',
  pm_message text NOT NULL,
  pm_read tinyint(1) unsigned NOT NULL default '0',
  pm_folder tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (pm_id),
  KEY NewPMs (pm_to,pm_read,pm_folder)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}posts";
$queries[] = "CREATE TABLE {$pre}posts (
  post_id int(12) unsigned NOT NULL auto_increment,
  post_topic int(10) unsigned NOT NULL default '0',
  post_author int(10) unsigned NOT NULL default '0',
  post_emoticons tinyint(1) unsigned NOT NULL default '1',
  post_mbcode tinyint(1) unsigned NOT NULL default '1',
  post_text text NOT NULL,
  post_time int(10) unsigned NOT NULL default '0',
  post_icon varchar(32) NOT NULL default '',
  post_ip varchar(15) NOT NULL default 'Unknown',
  post_edited_by varchar(32) NOT NULL default '',
  post_edited_time int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (post_id),
  KEY Topic (post_topic),
  FULLTEXT KEY post_text (post_text)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}replacements";
$queries[] = "CREATE TABLE {$pre}replacements (
  replacement_id smallint(3) unsigned NOT NULL auto_increment,
  replacement_search varchar(50) NOT NULL default '',
  replacement_replace varchar(50) NOT NULL default '',
  replacement_type varchar(15) NOT NULL default '',
  replacement_clickable tinyint(1) unsigned NOT NULL default '0',
  PRIMARY KEY  (replacement_id),
  KEY `Type` (replacement_type)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}settings";
$queries[] = "CREATE TABLE {$pre}settings (
  settings_id tinyint(2) unsigned NOT NULL auto_increment,
  settings_data text NOT NULL,
  PRIMARY KEY  (settings_id)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}skins";
$queries[] = "CREATE TABLE {$pre}skins (
  skin_name varchar(32) NOT NULL default '',
  skin_dir varchar(32) NOT NULL default '',
  PRIMARY KEY  (skin_dir)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}subscriptions";
$queries[] = "CREATE TABLE {$pre}subscriptions (
  subscription_id int(12) unsigned NOT NULL auto_increment,
  subscription_user int(10) unsigned NOT NULL default '0',
  subscription_type varchar(10) NOT NULL default '',
  subscription_item int(10) unsigned NOT NULL default '0',
  subscription_expire int(10) unsigned NOT NULL default '0',
  PRIMARY KEY  (subscription_id),
  KEY subscription_item (subscription_item)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}templates";
$queries[] = "CREATE TABLE {$pre}templates (
  template_skin varchar(32) NOT NULL default 'default',
  template_set varchar(20) NOT NULL default '',
  template_name varchar(36) NOT NULL default '',
  template_html text NOT NULL,
  template_displayname varchar(255) NOT NULL default '',
  template_description varchar(255) NOT NULL default '',
  template_position tinyint(2) unsigned NOT NULL default '0',
  UNIQUE KEY Piece (template_name,template_skin),
  KEY Section (template_set,template_skin)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}topics";
$queries[] = "CREATE TABLE {$pre}topics (
  topic_id int(10) unsigned NOT NULL auto_increment,
  topic_forum smallint(3) unsigned NOT NULL default '0',
  topic_title varchar(75) NOT NULL default '0',
  topic_description varchar(35) NOT NULL default '',
  topic_starter int(10) unsigned NOT NULL default '0',
  topic_last_poster int(10) unsigned NOT NULL default '0',
  topic_icon varchar(32) NOT NULL default '',
  topic_edited int(10) unsigned NOT NULL default '0',
  topic_replies smallint(5) unsigned NOT NULL default '0',
  topic_views smallint(5) unsigned NOT NULL default '0',
  topic_modes int(10) unsigned NOT NULL default '0',
  topic_moved smallint(3) unsigned NOT NULL default '0',
  topic_poll_options text NOT NULL,
  PRIMARY KEY  (topic_id),
  KEY Forum (topic_forum)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}users";
$queries[] = "CREATE TABLE {$pre}users (
  user_id int(10) unsigned NOT NULL auto_increment,
  user_name varchar(255) NOT NULL default '',
  user_password varchar(32) NOT NULL default '',
  user_joined int(10) unsigned NOT NULL default '0',
  user_level tinyint(3) unsigned NOT NULL default '1',
  user_title varchar(100) NOT NULL default '',
  user_title_custom tinyint(1) unsigned NOT NULL default '0',
  user_group tinyint(3) unsigned NOT NULL default '2',
  user_skin varchar(32) NOT NULL default 'default',
  user_language varchar(6) NOT NULL default 'en',
  user_avatar varchar(150) NOT NULL default '',
  user_avatar_type enum('local','url','uploaded','none') NOT NULL default 'none',
  user_avatar_width smallint(3) unsigned NOT NULL default '0',
  user_avatar_height smallint(3) unsigned NOT NULL default '0',
  user_email varchar(100) NOT NULL default '',
  user_email_show tinyint(1) unsigned NOT NULL default '1',
  user_email_form tinyint(1) unsigned NOT NULL default '1',
  user_birthday date NOT NULL default '0000-00-00',
  user_timezone float(3,1) NOT NULL default '0.0',
  user_homepage varchar(255) NOT NULL default '',
  user_posts int(10) unsigned NOT NULL default '0',
  user_location varchar(100) NOT NULL default '',
  user_icq int(16) unsigned NOT NULL default '0',
  user_msn varchar(32) NOT NULL default '',
  user_aim varchar(16) NOT NULL default '',
  user_pm tinyint(1) unsigned NOT NULL default '1',
  user_active tinyint(1) unsigned NOT NULL default '1',
  user_yahoo varchar(100) NOT NULL default '',
  user_interests varchar(255) NOT NULL default '',
  user_signature text NOT NULL,
  user_lastvisit int(10) unsigned NOT NULL default '0',
  user_lastpost int(10) unsigned NOT NULL default '0',
  user_lastpm int(10) unsigned NOT NULL default '0',
  user_lastsearch int(10) unsigned NOT NULL default '0',
  user_view_avatars tinyint(1) unsigned NOT NULL default '1',
  user_view_signatures tinyint(1) unsigned NOT NULL default '1',
  user_view_emoticons tinyint(1) unsigned NOT NULL default '1',
  user_perms text NOT NULL,
  PRIMARY KEY  (user_id)
) TYPE=MyISAM";

$queries[] = "DROP TABLE IF EXISTS {$pre}votes";
$queries[] = "CREATE TABLE {$pre}votes (
  vote_user int(10) unsigned NOT NULL default '0',
  vote_topic int(10) unsigned NOT NULL default '0',
  vote_option smallint(4) NOT NULL default '-1',
  PRIMARY KEY  (vote_user,vote_topic)
) TYPE=MyISAM";

$queries[] = "INSERT INTO {$pre}groups (group_id, group_name, group_type, group_format, group_perms) VALUES (1, 'Administrators', 'ADMIN', '<b>%s</b>', 'a:39:{s:10:\"board_view\";b:1;s:17:\"board_view_closed\";b:1;s:11:\"do_anything\";b:1;s:9:\"email_use\";b:1;s:10:\"forum_view\";b:1;s:8:\"is_admin\";b:1;s:10:\"pm_noflood\";b:1;s:11:\"poll_create\";b:1;s:9:\"poll_vote\";b:1;s:11:\"post_attach\";b:1;s:20:\"post_attach_download\";b:1;s:11:\"post_create\";b:1;s:11:\"post_delete\";b:1;s:15:\"post_delete_own\";b:1;s:9:\"post_edit\";b:1;s:13:\"post_edit_own\";b:1;s:12:\"post_noflood\";b:1;s:11:\"post_viewip\";b:1;s:14:\"search_noflood\";b:1;s:12:\"topic_create\";b:1;s:12:\"topic_delete\";b:1;s:16:\"topic_delete_own\";b:1;s:10:\"topic_edit\";b:1;s:14:\"topic_edit_own\";b:1;s:12:\"topic_global\";b:1;s:10:\"topic_lock\";b:1;s:14:\"topic_lock_own\";b:1;s:10:\"topic_move\";b:1;s:14:\"topic_move_own\";b:1;s:9:\"topic_pin\";b:1;s:13:\"topic_pin_own\";b:1;s:11:\"topic_split\";b:1;s:15:\"topic_split_own\";b:1;s:12:\"topic_unlock\";b:1;s:16:\"topic_unlock_mod\";b:1;s:16:\"topic_unlock_own\";b:1;s:11:\"topic_unpin\";b:1;s:15:\"topic_unpin_own\";b:1;s:10:\"topic_view\";b:1;}')";
$queries[] = "INSERT INTO {$pre}groups (group_id, group_name, group_type, group_format, group_perms) VALUES (2, 'Members', 'MEMBER', '%s', 'a:39:{s:10:\"board_view\";b:1;s:17:\"board_view_closed\";b:0;s:11:\"do_anything\";b:1;s:9:\"email_use\";b:1;s:10:\"forum_view\";b:1;s:8:\"is_admin\";b:0;s:10:\"pm_noflood\";b:0;s:11:\"poll_create\";b:1;s:9:\"poll_vote\";b:1;s:11:\"post_attach\";b:1;s:20:\"post_attach_download\";b:1;s:11:\"post_create\";b:1;s:11:\"post_delete\";b:0;s:15:\"post_delete_own\";b:1;s:9:\"post_edit\";b:0;s:13:\"post_edit_own\";b:1;s:12:\"post_noflood\";b:0;s:11:\"post_viewip\";b:0;s:14:\"search_noflood\";b:0;s:12:\"topic_create\";b:1;s:12:\"topic_delete\";b:0;s:16:\"topic_delete_own\";b:1;s:10:\"topic_edit\";b:0;s:14:\"topic_edit_own\";b:1;s:12:\"topic_global\";b:0;s:10:\"topic_lock\";b:0;s:14:\"topic_lock_own\";b:1;s:10:\"topic_move\";b:0;s:14:\"topic_move_own\";b:1;s:9:\"topic_pin\";b:0;s:13:\"topic_pin_own\";b:0;s:11:\"topic_split\";b:0;s:15:\"topic_split_own\";b:1;s:12:\"topic_unlock\";b:0;s:16:\"topic_unlock_mod\";b:0;s:16:\"topic_unlock_own\";b:1;s:11:\"topic_unpin\";b:0;s:15:\"topic_unpin_own\";b:1;s:10:\"topic_view\";b:1;}')";
$queries[] = "INSERT INTO {$pre}groups (group_id, group_name, group_type, group_format, group_perms) VALUES (3, 'Guests', 'GUEST', '%s', 'a:39:{s:10:\"board_view\";b:1;s:17:\"board_view_closed\";b:0;s:11:\"do_anything\";b:1;s:9:\"email_use\";b:0;s:10:\"forum_view\";b:1;s:8:\"is_admin\";b:0;s:10:\"pm_noflood\";b:0;s:11:\"poll_create\";b:0;s:9:\"poll_vote\";b:1;s:11:\"post_attach\";b:0;s:20:\"post_attach_download\";b:0;s:11:\"post_create\";b:0;s:11:\"post_delete\";b:0;s:15:\"post_delete_own\";b:0;s:9:\"post_edit\";b:0;s:13:\"post_edit_own\";b:0;s:12:\"post_noflood\";b:0;s:11:\"post_viewip\";b:0;s:14:\"search_noflood\";b:0;s:12:\"topic_create\";b:0;s:12:\"topic_delete\";b:0;s:16:\"topic_delete_own\";b:0;s:10:\"topic_edit\";b:0;s:14:\"topic_edit_own\";b:0;s:12:\"topic_global\";b:0;s:10:\"topic_lock\";b:0;s:14:\"topic_lock_own\";b:0;s:10:\"topic_move\";b:0;s:14:\"topic_move_own\";b:0;s:9:\"topic_pin\";b:0;s:13:\"topic_pin_own\";b:0;s:11:\"topic_split\";b:0;s:15:\"topic_split_own\";b:0;s:12:\"topic_unlock\";b:0;s:16:\"topic_unlock_mod\";b:0;s:16:\"topic_unlock_own\";b:0;s:11:\"topic_unpin\";b:0;s:15:\"topic_unpin_own\";b:0;s:10:\"topic_view\";b:1;}')";
$queries[] = "INSERT INTO {$pre}groups (group_id, group_name, group_type, group_format, group_perms) VALUES (4, 'Banned', 'BANNED', '%s', 'a:39:{s:10:\"board_view\";b:0;s:17:\"board_view_closed\";b:0;s:11:\"do_anything\";b:0;s:9:\"email_use\";b:0;s:10:\"forum_view\";b:0;s:8:\"is_admin\";b:0;s:10:\"pm_noflood\";b:0;s:11:\"poll_create\";b:0;s:9:\"poll_vote\";b:0;s:11:\"post_attach\";b:0;s:20:\"post_attach_download\";b:0;s:11:\"post_create\";b:0;s:11:\"post_delete\";b:0;s:15:\"post_delete_own\";b:0;s:9:\"post_edit\";b:0;s:13:\"post_edit_own\";b:0;s:12:\"post_noflood\";b:0;s:11:\"post_viewip\";b:0;s:14:\"search_noflood\";b:0;s:12:\"topic_create\";b:0;s:12:\"topic_delete\";b:0;s:16:\"topic_delete_own\";b:0;s:10:\"topic_edit\";b:0;s:14:\"topic_edit_own\";b:0;s:12:\"topic_global\";b:0;s:10:\"topic_lock\";b:0;s:14:\"topic_lock_own\";b:0;s:10:\"topic_move\";b:0;s:14:\"topic_move_own\";b:0;s:9:\"topic_pin\";b:0;s:13:\"topic_pin_own\";b:0;s:11:\"topic_split\";b:0;s:15:\"topic_split_own\";b:0;s:12:\"topic_unlock\";b:0;s:16:\"topic_unlock_mod\";b:0;s:16:\"topic_unlock_own\";b:0;s:11:\"topic_unpin\";b:0;s:15:\"topic_unpin_own\";b:0;s:10:\"topic_view\";b:0;}')";
$queries[] = "INSERT INTO {$pre}groups (group_id, group_name, group_type, group_format, group_perms) VALUES (5, 'Awaiting Activation', 'AWAIT', '%s', 'a:39:{s:10:\"board_view\";b:1;s:17:\"board_view_closed\";b:0;s:11:\"do_anything\";b:1;s:9:\"email_use\";b:0;s:10:\"forum_view\";b:1;s:8:\"is_admin\";b:0;s:10:\"pm_noflood\";b:0;s:11:\"poll_create\";b:0;s:9:\"poll_vote\";b:1;s:11:\"post_attach\";b:0;s:20:\"post_attach_download\";b:0;s:11:\"post_create\";b:1;s:11:\"post_delete\";b:0;s:15:\"post_delete_own\";b:0;s:9:\"post_edit\";b:0;s:13:\"post_edit_own\";b:0;s:12:\"post_noflood\";b:0;s:11:\"post_viewip\";b:0;s:14:\"search_noflood\";b:0;s:12:\"topic_create\";b:0;s:12:\"topic_delete\";b:0;s:16:\"topic_delete_own\";b:0;s:10:\"topic_edit\";b:0;s:14:\"topic_edit_own\";b:0;s:12:\"topic_global\";b:0;s:10:\"topic_lock\";b:0;s:14:\"topic_lock_own\";b:0;s:10:\"topic_move\";b:0;s:14:\"topic_move_own\";b:0;s:9:\"topic_pin\";b:0;s:13:\"topic_pin_own\";b:0;s:11:\"topic_split\";b:0;s:15:\"topic_split_own\";b:0;s:12:\"topic_unlock\";b:0;s:16:\"topic_unlock_mod\";b:0;s:16:\"topic_unlock_own\";b:0;s:11:\"topic_unpin\";b:0;s:15:\"topic_unpin_own\";b:0;s:10:\"topic_view\";b:1;}')";
$queries[] = "INSERT INTO {$pre}groups (group_id, group_name, group_type, group_format, group_perms) VALUES (6, 'Moderators', 'MODS', '<i>%s<i/>', 'a:39:{s:10:\"board_view\";b:1;s:17:\"board_view_closed\";b:0;s:11:\"do_anything\";b:1;s:9:\"email_use\";b:1;s:10:\"forum_view\";b:1;s:8:\"is_admin\";b:0;s:10:\"pm_noflood\";b:0;s:11:\"poll_create\";b:1;s:9:\"poll_vote\";b:1;s:11:\"post_attach\";b:1;s:20:\"post_attach_download\";b:1;s:11:\"post_create\";b:1;s:11:\"post_delete\";b:1;s:15:\"post_delete_own\";b:1;s:9:\"post_edit\";b:1;s:13:\"post_edit_own\";b:1;s:12:\"post_noflood\";b:0;s:11:\"post_viewip\";b:1;s:14:\"search_noflood\";b:0;s:12:\"topic_create\";b:1;s:12:\"topic_delete\";b:1;s:16:\"topic_delete_own\";b:1;s:10:\"topic_edit\";b:1;s:14:\"topic_edit_own\";b:1;s:12:\"topic_global\";b:1;s:10:\"topic_lock\";b:1;s:14:\"topic_lock_own\";b:1;s:10:\"topic_move\";b:1;s:14:\"topic_move_own\";b:0;s:9:\"topic_pin\";b:1;s:13:\"topic_pin_own\";b:1;s:11:\"topic_split\";b:1;s:15:\"topic_split_own\";b:1;s:12:\"topic_unlock\";b:1;s:16:\"topic_unlock_mod\";b:1;s:16:\"topic_unlock_own\";b:1;s:11:\"topic_unpin\";b:1;s:15:\"topic_unpin_own\";b:1;s:10:\"topic_view\";b:1;}')";
$queries[] = "INSERT INTO {$pre}help (help_id, help_title, help_article) VALUES (1, 'What is MbCode and how do I use it?', 'MbCode is a way to format your posts without HTML.  You can use MbCode by pressing the buttons above the message text area, but here is a short help guide.\r\n<hr />\r\n\r\n<b>Bold</b><br />\r\n[b]This text will be bold.[/b]<br />\r\nText enclosed in these tags will be <b>bold</b>.<br />\r\n<hr />\r\n\r\n<b>Italics</b><br />\r\n[i]This text will be italicized.[/i]<br />\r\nText enclosed in these tags will be <i>italicized</i>.<br />\r\n<hr />\r\n\r\n<b>Underline</b><br />\r\n[u]This text will be underlined.[/u]<br />\r\nText enclosed in these tags will be <span style=\'text-decoration:underline\'>underlined</span>.<br />\r\n<hr />\r\n\r\n<b>Strikethrough</b><br />\r\n[s]This text will have a strike through it.[/s]<br />\r\nText enclosed in these tags will be <span style=\'text-decoration:line-through\'>crossed out</span>.<br />\r\n<hr />\r\n\r\n<b>PHP</b><br />\r\n[php]Code here.[/php]<br />\r\nThe PHP tag allows you to add PHP code to your post. The code will show up with line numbers and syntax highlighting.<br />\r\n<hr />\r\n\r\n<b>Code</b><br />\r\n[code]Code here.[/code]<br />\r\nA more generic code tag than the PHP tag. You can add any type of code (such as HTML) or text into the tag and it will display exactly as you entered it.<br />\r\n<hr />\r\n\r\n<b>Quote</b><br />\r\n[quote]Quote here.[/quote]<br />\r\nAllows you to insert quoted text into a post.<br />\r\n<hr />\r\n\r\n<b>URL</b><br />[url=http://www.mercuryboard.com]MercuryBoard[/url]<br />\r\nAllows you to insert a link into a post. All you normally need to do to use this tag is add a URL and description into two popup prompts.<br />\r\n<hr />\r\n\r\n<b>Email</b><br />\r\n[email=mb@example.com]Email me![/email]<br />\r\nThis allows you to insert a link to an email address into a post.<br />\r\n<hr />\r\n\r\n<b>Image</b><br />\r\n[img]http://forums.mercuryboard.com.com/skins/default/logo.gif[/img]<br />\r\nThis tag allows you to add an image into your post.<br />\r\n<hr />\r\n\r\n<b>Color</b><br />\r\n[color=red]This text will be <span style=\'color:#ff0000\'>red</span>.[/color]<br />\r\nText enclosed in the color tag will be a color you specify. You can select the color using the drop-down list at the post screen.<br />\r\n<hr />\r\n\r\n<b>Size</b><br />\r\n[size=3]This text will be <span style=\'font-size:16px\'>large</span>.[/size]<br />\r\nThis tag changes the font size of the text enclosed in this tag to a specified size.<br />\r\n<hr />\r\n\r\n<b>Font</b><br />\r\n[font=Tahoma]This text will be <span style=\'font-family:Tahoma\'>Tahoma</span>.[/font]<br />\r\nThis allows you to change the font of text enclosed in this tag to a specified font.')";
$queries[] = "INSERT INTO {$pre}help (help_id, help_title, help_article) VALUES (2, 'Why should I register?', 'Registration will allow you to use all of the features on this board.  Registration will allow you to customize your account, edit your profile, use the private messenger to contact other users, and may open up new posting rights and forums.<br /><br />\r\n\r\nRegistration is completely free and very fast.  Sometimes the administrator may require you to verify your account in an email, so be sure you provide a correct email address! <br /><br />\r\n\r\nOnce you are registered, you can start using the full features of the board.')";
$queries[] = "INSERT INTO {$pre}membertitles (membertitle_id, membertitle_title, membertitle_posts, membertitle_icon) VALUES (1, 'Newbie', 0, '1.gif')";
$queries[] = "INSERT INTO {$pre}membertitles (membertitle_id, membertitle_title, membertitle_posts, membertitle_icon) VALUES (2, 'Member', 25, '2.gif')";
$queries[] = "INSERT INTO {$pre}membertitles (membertitle_id, membertitle_title, membertitle_posts, membertitle_icon) VALUES (3, 'MercuryBoarder', 100, '3.gif')";
$queries[] = "INSERT INTO {$pre}membertitles (membertitle_id, membertitle_title, membertitle_posts, membertitle_icon) VALUES (4, 'Full Member', 250, '4.gif')";
$queries[] = "INSERT INTO {$pre}membertitles (membertitle_id, membertitle_title, membertitle_posts, membertitle_icon) VALUES (5, 'Mercury Guru', 500, '5.gif')";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (1, 'shit', '', 'censor', 0)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (2, 'fuck', '', 'censor', 0)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (3, ';)', 'wink.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (4, ':thinking:', 'thinking.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (5, ':p', 'tongue.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (6, ':rolleyes:', 'rolleyes.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (7, ':(', 'sad.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (8, ':D', 'smile.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (9, ':)', 'smirk.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (10, ':stare:', 'stare.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (11, ':o', 'surprised.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (12, ':mad:', 'mad.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (13, 'B)', 'cool.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (replacement_id, replacement_search, replacement_replace, replacement_type, replacement_clickable) VALUES (14, ':cyclops:', 'cyclops.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}settings (settings_id, settings_data) VALUES (1, 'a:48:{s:14:\"admin_incoming\";s:22:\"jason@mercuryboard.com\";s:14:\"admin_outgoing\";s:22:\"jason@mercuryboard.com\";s:12:\"attach_types\";a:8:{i:0;s:3:\"jpg\";i:1;s:3:\"gif\";i:2;s:3:\"png\";i:3;s:3:\"bmp\";i:4;s:3:\"zip\";i:5;s:3:\"tgz\";i:6;s:2:\"gz\";i:7;s:3:\"rar\";}s:18:\"attach_upload_size\";i:25600;s:13:\"avatar_height\";i:75;s:18:\"avatar_upload_size\";i:5120;s:12:\"avatar_width\";i:75;s:10:\"banned_ips\";a:0:{}s:17:\"clickable_per_row\";i:3;s:6:\"closed\";i:0;s:10:\"closedtext\";s:80:\"We are upgrading to the latest version of MercuryBoard. Please check back later.\";s:11:\"cookie_path\";s:1:\"/\";s:13:\"cookie_prefix\";s:8:\"mercury_\";s:15:\"emailactivation\";i:0;s:9:\"flash_avs\";i:1;s:10:\"flood_time\";i:30;s:10:\"forum_name\";s:12:\"MercuryBoard\";s:9:\"hot_limit\";i:20;s:12:\"loc_of_board\";s:0:\"\";s:11:\"last_member\";s:6:\"nobody\";s:14:\"last_member_id\";i:2;s:11:\"link_target\";s:6:\"_blank\";s:9:\"logintime\";i:31536000;s:10:\"mailserver\";s:9:\"localhost\";s:8:\"max_load\";d:0;s:7:\"members\";i:0;s:10:\"mostonline\";i:0;s:14:\"mostonlinetime\";i:1111884232;s:13:\"output_buffer\";i:1;s:5:\"posts\";i:0;s:14:\"posts_per_page\";i:15;s:14:\"register_image\";i:0;s:10:\"servertime\";d:-5;s:6:\"topics\";i:0;s:15:\"topics_per_page\";i:20;s:18:\"vote_after_results\";i:0;s:12:\"default_skin\";s:7:\"default\";s:19:\"default_email_shown\";i:1;s:12:\"default_lang\";s:2:\"en\";s:13:\"default_group\";i:2;s:16:\"default_timezone\";d:0;s:10:\"default_pm\";i:1;s:20:\"default_view_avatars\";i:1;s:17:\"default_view_sigs\";i:1;s:18:\"default_view_emots\";i:1;s:13:\"flood_time_pm\";i:30;s:17:\"flood_time_search\";i:10;s:13:\"html_comments\";i:1;}')";
$queries[] = "INSERT INTO {$pre}skins (skin_name, skin_dir) VALUES ('Candy Corn', 'default')";
$queries[] = "INSERT INTO {$pre}users (user_id, user_name, user_password, user_joined, user_level, user_title, user_group, user_skin, user_language, user_avatar, user_avatar_type, user_avatar_width, user_avatar_height, user_email, user_email_show, user_email_form, user_birthday, user_timezone, user_homepage, user_posts, user_location, user_icq, user_msn, user_aim, user_pm, user_active, user_yahoo, user_interests, user_signature, user_lastvisit, user_lastpost, user_view_avatars, user_view_signatures, user_view_emoticons, user_perms) VALUES (1, 'Guest', '', 0, 0, '', 3, 'default', 'en', '', 'none', 0, 0, '', 0, 1, '0000-00-00', '0.0', '', 0, '', 0, '', '', 0, 1, '', '', '', 0, 0, 1, 1, 1, '')";
?>