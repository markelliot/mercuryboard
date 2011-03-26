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
 * $Id: backup.php,v 1.5 2005/05/21 14:55:16 jason Exp $
 **/

require './common.php';

/**
 * Database backup
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since 1.0.2
 **/
class backup extends admin
{
	var $tables = array(
		'active' => '*',
		'attach' => '*',
		'forums' => '*',
		'groups' => '*',
		'help' => '*',
		'logs' => '*',
		'membertitles' => '*',
		'pmsystem' => '*',
		'posts' => '*',
		'replacements' => '*',
		'settings' => '*',
		'skins' => '*',
		'subscriptions' => '*',
		'templates' => '*',
		'topics' => '*',
		'users' => '*',
		'votes' => '*'
	);

	/**
	 * Database backup
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.0.2
	 * @return string HTML
	 **/
	function execute()
	{
		if (!isset($this->get['s'])) {
			$this->get['s'] = '';
		}

		switch($this->get['s'])
		{
		case 'create':
			$this->set_title('Backup the Database');
			$this->tree('Backup the Database');

			return $this->create_backup();
			break;

		case 'restore':
			$this->set_title('Restore a Backup');
			$this->tree('Restore a Backup');

			return $this->restore_backup();
			break;
		}
	}

	/**
	 * Generate a backup
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.0.2
	 * @return string HTML
	 **/
	function create_backup()
	{
		$data = $this->dump_database($this->tables);
		$name = 'mb-' . date('y-m-d-H-i-s') . '.mbb';

		$this->chmod('..', 0777);

		$fp = fopen("../$name", 'w');
		fwrite($fp, $data);
		fclose($fp);

		return $this->message('Backup the Database', 'The database has been backed up to the main MercuryBoard directory.', $name, "../$name");
	}

	/**
	 * Restore a backup
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.0.2
	 * @return string HTML
	 **/
	function restore_backup()
	{
		if (!isset($this->post['submit'])) {
			$box = '';

			$dp = opendir('../');
			while (($file = readdir($dp)) !== false)
			{
				$ext = strtolower(substr($file, -4));

				if ($ext == '.mbb') {
					$box .= "<option value='../$file'>" . substr($file, 0, -4) . "</option>\n";
				}
			}
			closedir($dp);

			if ($box) {
				return $this->message('Restore a Backup', "
				<form action='$this->self?a=backup&amp;s=restore' method='post'>
					The following backups were found in the MercuryBoard directory:<br /><br />
					<select name='restore'>
						$box
					</select>
					<input type='submit' name='submit' value='Restore Backup'><br /><br />

					<b>Warning: This will overwrite all existing data used by MercuryBoard.</b>
				</form>");
			} else {
				return $this->message('Restore a Backup', 'No backups were found in the MercuryBoard directory.');
			}
		} else {
			$queries = array();
			$pre = $this->pre;

			include $this->post['restore'];

			if (!$queries) {
				return $this->message('Restore a Backup', 'The backup does not appear to be valid. No changes were made to your database.');
			}

			foreach ($this->tables as $table => $where)
			{
				$this->db->query("DELETE FROM {$pre}$table");
			}

			$this->execute_queries($queries);

			return $this->message('Restore a Backup', 'The database has been restored successfully.');
		}
	}
}