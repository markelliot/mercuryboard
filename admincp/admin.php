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
 * $Id: admin.php,v 1.26 2005/02/21 15:08:15 jason Exp $
 **/

/**
 * Miscellaneous functions specific to the admin center
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.1
 */
class admin extends mercuryboard
{
	var $iterator = 0;              // The current number of iterations @var int @access protected
	var $iterator_values = array(); // Values to be iterated @var array @access protected
	var $iterator_last;             // Last selected value @var mixed @access protected

	/**
	 * Formats a message (admin cp version)
	 *
	 * @param string $title Title of the message
	 * @param string $message Text of the message
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string HTML
	 */
	function message($title, $message, $link_text = null, $link = null, $redirect = null)
	{
		if ($link_text) {
			$message .= "<br /><br /><a href='$link'>$link_text</a>";
		}

		if ($redirect) {
			@header('Refresh: 4;url=' . $redirect);
		}

		return "
		<table width='60%' align='center' bgcolor='#000000' border='0' cellpadding='0' cellspacing='0'>
			<tr>
				<td>
					<table width='100%' cellpadding='5' cellspacing='1' border='0'>
						<tr>
							<td class='header'>$title</td>
						</tr>
						<tr>
							<td bgcolor='#EEEEEE' valign='middle' align='center' style='padding:20px'>$message</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>";
	}

	/**
	 * Starts the iterator. Parameters (unlimited) specify the values to cycle
	 *
	 * @author Jason Warner <jason@mercuryboard.com
	 * @since Beta 3.0
	 * @return void
	 */
	function iterator_init()
	{
		$this->iterator_values = func_get_args();
	}

	/**
	 * Returns the last selected value
	 *
	 * @author Jason Warner <jason@mercuryboard.com
	 * @since Beta 3.0
	 * @return mixed Last selected value
	 */
	function lastValue()
	{
		return $this->iterator_last;
	}

	/**
	 * Advances the position in the array by one
	 *
	 * @author Jason Warner <jason@mercuryboard.com
	 * @since Beta 3.0
	 * @return mixed Current value in the array
	 */
	function iterate()
	{
		if ($this->iterator >= count($this->iterator_values)) {
			$this->iterator = 0;
		}

		$ret = $this->iterator_values[$this->iterator];

		$this->iterator++;
		$this->iterator_last = $ret;
		return $ret;
	}

	/**
	 * Copies a directory and its files, recursively
	 *
	 * @param $from_path Source directory
	 * @param $to_path Destination directory
	 * @author See http://www.php.net/copy
	 * @since Beta 3.0
	 * @return bool True on success, false on failure
	 */
	function dir_copy($from_path, $to_path)
	{
		if (!file_exists($to_path)) {
			$ret = @mkdir($to_path, 0777);

			if (!$ret) {
				return false;
			}
		}

		if (file_exists($from_path) && is_dir($from_path)) {
			$handle = opendir($from_path);

			while (($file = readdir($handle)) !== false)
			{
				if (($file != '.') && ($file != '..') && ($file != 'CVS')) {
					if (is_dir($from_path . $file)) {
						$this->dir_copy($from_path . $file . '/', $to_path . $file . '/');
					}

					if (is_file($from_path . $file)) {
						copy($from_path . $file, $to_path . $file);
					}
				}
			}
			closedir($handle);
		}

		return true;
	}

	/**
	 * Creates a heirarchial HTML list of all forums
	 *
	 * @param array $array Array of forums
	 * @param string $link Link to plug into list
	 * @param int $parent Used to degredate down through the recursive loop
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string A heirarchial HTML list of all the forums
	 **/
	function Text($array, $link = "", $parent = 0)
	{
		$arr = $this->forum_array($array, $parent);

		if ($arr) {
			$return = null;
			foreach ($arr as $val) {
				$return .= '<ul>' . "
				<li><a href='{$link}{$val['forum_id']}'>{$val['forum_name']}</a></li>" .
				$this->Text($array, $link, $val['forum_id']) . '</ul>';
			}
			return $return;
		}
	}

	/**
	 * Creates a heirarchial list of all HTML forums with an input box in front with id _$forum_id
	 *
	 * @param array $array Array of forums
	 * @param int $parent Used to degredate down through the recursive loop
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string A heirarchial HTML list of all the forums with an input box in front with id _$forum_id
	 **/
	function InputBox($array, $parent = 0)
	{
		$arr = $this->forum_array($array, $parent);

		if ($arr) {
			$return = null;
			foreach ($arr as $val) {
				$return .= '<ul>' . "
				<li><input class='input' name='_{$val['forum_id']}' value='{$val['forum_position']}' size='2'> {$val['forum_name']}</a></li>" .
				$this->InputBox($array, $val['forum_id']) . '</ul>';
			}
			return $return;
		}
	}

	/**
	 * A list of checkboxes (all forums in correct order)
	 *
	 * @param array $array Array of forums
	 * @param int $select Checkbox to check
	 * @param int $parent Used to degredate down through the recursive loop
	 * @param string $space Used to increment the spacing before the text in the box
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 4.0
	 * @return string Options for an HTML select box (all forums in correct order)
	 **/
	function CheckBox($array, $select = 0, $parent = 0, $space = '')
	{
		$arr = $this->forum_array($array, $parent);

		if ($arr) {
			$return = null;
			foreach ($arr as $val) {
				if ($val['forum_id'] == $select) {
					$selected = ' checked';
				} else {
					$selected = null;
				}
				$return .= "<input type='checkbox' id='forum_{$val['forum_id']}' name='forums[{$val['forum_id']}]'{$selected}>{$space}<label for='forum_{$val['forum_id']}'>{$val['forum_name']}</label><br />\n" .
				$this->CheckBox($array, $select, $val['forum_id'], $space . '&nbsp; &nbsp; &nbsp;');
			}
			return $return;
		}
	}

	function list_groups($val, $select = 'user_group', $custom_only = false)
	{
		$out = "<select name='$select'>";

		if ($custom_only) {
			$groups = $this->db->query('SELECT group_name, group_id FROM ' . $this->pre . 'groups WHERE group_type="" ORDER BY group_name');
		} else {
			$groups = $this->db->query('SELECT group_name, group_id FROM ' . $this->pre . 'groups ORDER BY group_name');
		}

		while ($group = $this->db->nqfetch($groups))
		{
			$out .= "<option value='{$group['group_id']}'" . (($val == $group['group_id']) ? ' selected' : '') . ">{$group['group_name']}</option>";
		}

		return $out . '</select>';
	}

	/**
	 * Dumps a database
	 *
	 * @param array $tables Array of table names => where clauses
	 * @param bool $drop Drop tables
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.0.2
	 * @return string PHP script
	 **/
	function dump_database($tables, $drop = false)
	{
		$templates = "<?php\r\n";

		foreach ($tables as $table => $where)
		{
			if ($drop) {
				$templates .= '$queries[] = "DROP TABLE IF EXISTS {$pre}' . $table . "\";\r\n";
			}

			$insert = '$queries[] = "INSERT INTO {$pre}' . $table . ' (';

			$query = $this->db->query("SELECT * FROM {$this->pre}$table" . (($where == '*') ? '' : " WHERE $where"));
			while ($temp = $this->db->nqfetch($query))
			{
				if (!isset($firstrow)) {
					$firstrow = true;

					foreach ($temp as $key => $val)
					{
						$insert .= "$key, ";
					}

					$insert = substr($insert, 0, -2) . ') VALUES (';
				}

				$templates .= $insert;

				$temp = array_values($temp);

				$count = count($temp);
				for ($i=0; $i<$count; $i++)
				{
					if (is_numeric($temp[$i])) {
						$templates .= $temp[$i];
					} else {
						$templates .= '\'' . str_replace('$', '\$', addslashes($temp[$i])) . '\'';
					}

					if (isset($temp[$i+1])) {
						$templates .= ', ';
					}
				}

				$templates .= ")\";\r\n";
			}

			unset($firstrow);
			$templates .= "\r\n";
		}

		return $templates . '?>';
	}

	/**
	 * Executes an array of queries
	 *
	 * @param $queries
	 * @param $db
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.0.2
	 * @return void
	 **/
	function execute_queries($queries)
	{
		foreach ($queries as $query)
		{
			$this->db->query($query);
		}
	}
}
?>