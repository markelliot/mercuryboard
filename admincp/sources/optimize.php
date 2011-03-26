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
 * $Id: optimize.php,v 1.10 2006/08/13 13:12:38 jon Exp $
 **/

require './common.php';

class optimize extends admin
{
	function execute()
	{
		$this->set_title('Optimize the Database');
		$this->tree('Optimize the Database');

		$this->opt_tables();

		return $this->message('Optimize the Database', 'The tables in the database have been optimized for maximum performance.');
	}

	function opt_tables()
	{
		$tables = array(
			$this->pre . 'active',
			$this->pre . 'attach',
			$this->pre . 'buddies',
			$this->pre . 'forums',
			$this->pre . 'groups',
			$this->pre . 'help',
			$this->pre . 'logs',
			$this->pre . 'membertitles',
			$this->pre . 'pmsystem',
			$this->pre . 'posts',
			$this->pre . 'replacements',
			$this->pre . 'settings',
			$this->pre . 'skins',
			$this->pre . 'subscriptions',
			$this->pre . 'templates',
			$this->pre . 'topics',
			$this->pre . 'users',
			$this->pre . 'votes'
		);

		$tables = implode(', ', $tables);

		$this->db->query('OPTIMIZE TABLE ' . $tables);
	}
}
?>