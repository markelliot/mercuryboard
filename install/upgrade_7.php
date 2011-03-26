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
 * $Id: upgrade_7.php,v 1.2 2004/01/26 21:50:35 jason Exp $
 **/

if (!defined('INSTALLER')) {
	exit('Use index.php to upgrade.');
}

$need_templates = true;

$queries[] = "ALTER TABLE {$pre}subscriptions
ADD subscription_id int(12) unsigned NOT NULL auto_increment,
ADD PRIMARY KEY (subscription_id)";

$queries[] = "ALTER TABLE {$pre}users
ADD user_email_form tinyint(1) unsigned NOT NULL default '1'";
?>