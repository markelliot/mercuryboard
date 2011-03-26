<?php
/**
 * MercuryBoard
 * Copyright (c) 2001-2004 The Mercury Development Team
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
 * $Id: upgrade_9.php,v 1.1 2004/04/12 16:09:02 jason Exp $
 **/

if (!defined('INSTALLER')) {
	exit('Use index.php to upgrade.');
}

$need_templates = true;

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

$queries[] = "CREATE TABLE {$pre}settings (
settings_id tinyint(2) unsigned NOT NULL auto_increment,
settings_data text NOT NULL,
PRIMARY KEY  (settings_id)
) TYPE=MyISAM";

$queries[] = "INSERT INTO {$pre}settings (settings_id, settings_data) VALUES (1, 'a:37:{s:14:\"admin_incoming\";s:0:\"\";s:14:\"admin_outgoing\";s:0:\"\";s:12:\"attach_types\";a:8:{i:0;s:3:\"jpg\";i:1;s:3:\"gif\";i:2;s:3:\"png\";i:3;s:3:\"bmp\";i:4;s:3:\"zip\";i:5;s:3:\"tgz\";i:6;s:2:\"gz\";i:7;s:3:\"rar\";}s:18:\"attach_upload_size\";i:25600;s:13:\"avatar_height\";i:75;s:18:\"avatar_upload_size\";i:5120;s:12:\"avatar_width\";i:75;s:10:\"banned_ips\";s:0:\"\";s:17:\"clickable_per_row\";i:3;s:6:\"closed\";b:0;s:10:\"closedtext\";s:80:\"We are upgrading to the latest version of MercuryBoard. Please check back later.\";s:11:\"cookie_path\";s:1:\"/\";s:13:\"cookie_prefix\";s:8:\"mercury_\";s:15:\"emailactivation\";b:0;s:9:\"flash_avs\";b:1;s:10:\"flood_time\";i:30;s:10:\"forum_name\";s:12:\"MercuryBoard\";s:9:\"hot_limit\";i:20;s:12:\"loc_of_board\";s:0:\"\";s:11:\"last_member\";s:0:\"\";s:14:\"last_member_id\";i:0;s:11:\"link_target\";s:6:\"_blank\";s:9:\"logintime\";i:31536000;s:10:\"mailserver\";s:9:\"localhost\";s:8:\"max_load\";d:0;s:7:\"members\";i:0;s:10:\"mostonline\";i:0;s:14:\"mostonlinetime\";i:0;s:13:\"output_buffer\";b:1;s:5:\"posts\";i:0;s:14:\"posts_per_page\";i:15;s:14:\"register_image\";b:0;s:10:\"servertime\";d:-5;s:6:\"topics\";i:0;s:15:\"topics_per_page\";i:20;s:18:\"vote_after_results\";b:0;s:12:\"default_skin\";s:7:\"default\";}')";

$queries[] = "ALTER TABLE {$pre}users
ADD user_active tinyint(1) unsigned NOT NULL default '1'";
?>