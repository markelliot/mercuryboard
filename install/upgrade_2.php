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
 * $Id: upgrade_2.php,v 1.4 2004/01/26 21:50:35 jason Exp $
 **/

if (!defined('INSTALLER')) {
	exit('Use index.php to upgrade.');
}

$need_templates = true;

/* {$pre}active */
$queries[] = "ALTER TABLE {$pre}active
CHANGE ID id int(10) unsigned NOT NULL default '0',
CHANGE Name name varchar(32) NOT NULL default '',
CHANGE IP ip varchar(15) NOT NULL default 'Unknown',
CHANGE UserAgent user_agent varchar(100) NOT NULL default 'Unknown',
CHANGE Member is_member tinyint(1) unsigned NOT NULL default '1',
CHANGE Action action varchar(32) NOT NULL default '',
CHANGE Time time int(10) unsigned NOT NULL default '0',
DROP INDEX ID,
ADD UNIQUE ID (id)";

/* {$pre}forums */
$queries[] = "ALTER TABLE {$pre}forums
DROP LastTime,
DROP LastPost,
DROP LastPoster,
DROP LastPosterID,
ADD VisibleTo varchar(255) NOT NULL default '*' AFTER LastPostID,
ADD allow_reply varchar(255) NOT NULL default '*' AFTER VisibleTo,
ADD allow_create varchar(255) NOT NULL default '*' AFTER allow_reply,
ADD allow_poll varchar(255) NOT NULL default '*' AFTER allow_create";

/* {$pre}help */
$queries[] = "DROP TABLE IF EXISTS {$pre}help";
$queries[] = "CREATE TABLE {$pre}help (
  hid int(11) NOT NULL auto_increment,
  title varchar(255) NOT NULL default '',
  article tinytext NOT NULL,
  PRIMARY KEY  (hid)
)";

/* {$pre}members */
$queries[] = "ALTER TABLE {$pre}members
ADD language varchar(6) NOT NULL default 'en' AFTER Skin,
ADD avatar_type enum('local','url','uploaded','none') NOT NULL default 'none' AFTER Avatar";
$queries[] = "UPDATE {$pre}members SET avatar_type='url' WHERE Avatar != ''";

/* {$pre}replacements */
$queries[] = "DELETE FROM {$pre}replacements WHERE Type='emoticon'";
$queries[] = "INSERT INTO {$pre}replacements (Search, Replacement, Type, Clickable) VALUES (';)', 'wink.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (Search, Replacement, Type, Clickable) VALUES (':thinking:', 'thinking.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (Search, Replacement, Type, Clickable) VALUES (':p', 'tongue.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (Search, Replacement, Type, Clickable) VALUES (':rolleyes:', 'rolleyes.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (Search, Replacement, Type, Clickable) VALUES (':(', 'sad.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (Search, Replacement, Type, Clickable) VALUES (':D', 'smile.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (Search, Replacement, Type, Clickable) VALUES (':)', 'smirk.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (Search, Replacement, Type, Clickable) VALUES (':stare:', 'stare.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (Search, Replacement, Type, Clickable) VALUES (':o', 'surprised.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (Search, Replacement, Type, Clickable) VALUES (':mad:', 'mad.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (Search, Replacement, Type, Clickable) VALUES ('B)', 'cool.gif', 'emoticon', 1)";
$queries[] = "INSERT INTO {$pre}replacements (Search, Replacement, Type, Clickable) VALUES (':cyclops:', 'cyclops.gif', 'emoticon', 1)";

/* {$pre}searchwords */
$queries[] = "DROP TABLE IF EXISTS {$pre}searchwords";
$queries[] = "CREATE TABLE {$pre}searchwords (
  post int(12) unsigned NOT NULL default '0',
  word varchar(50) NOT NULL default '',
  KEY word (word)
)";

/* {$pre}skins */
$queries[] = "UPDATE {$pre}skins SET SkinName='Candy Corn' WHERE SkinDir='default'";

/* {$pre}templates */
$queries[] = "ALTER TABLE {$pre}templates MODIFY Template varchar(32) NOT NULL default 'default'";

/* {$pre}topics */
$queries[] = "ALTER TABLE {$pre}topics
DROP Starter,
DROP TLastPoster,
DROP TLastPosterID,
ADD last_poster int(10) unsigned NOT NULL default '0' AFTER StarterID";
?>