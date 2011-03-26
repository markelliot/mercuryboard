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
 * $Id: ban.php,v 1.13 2005/04/24 03:52:49 jason Exp $
 **/

require './common.php';

/**
 * User banning controls
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 3.0
 **/
class ban extends admin
{
	/**
	 * Recounts the number of members
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 3.0
	 * @return string HTML form or message
	 **/
	function execute()
	{
		$this->set_title('Ban IP Addresses');
		$this->tree('Ban IP Addresses');

		if (!isset($this->post['submit'])) {
			$ips = implode("\n", $this->sets['banned_ips']);
			$ips = stripslashes($ips);

			$banned_group = $this->db->fetch("SELECT group_name FROM {$this->pre}groups WHERE group_id=" . USER_BANNED);
			$banned_group = $this->format($banned_group['group_name'], FORMAT_HTMLCHARS);

			$banned = null;

			$banned_query = $this->db->query("SELECT user_name FROM {$this->pre}users WHERE user_group=" . USER_BANNED . ' ORDER BY user_name ASC');
			while ($user = $this->db->nqfetch($banned_query))
			{
				$banned .= "{$user['user_name']}<br />";
			}

			if (!$banned) {
				$banned = 'There are currently no banned members.<br />';
			}

			return "
			$this->table
			<form action='$this->self?a=ban' method='post'>
			<tr>
				<td class='header'>Ban Settings</td>
			</tr>
			<tr>
				<td class='tablelight'>
					<span class='med'>Ban Members</span><br /><br />
					To ban users, change their user group to <b>$banned_group</b> in the member controls.<br /><br />
					<b>Banned Members:</b><br />
					$banned<br />
				</td>
			</tr>
			<tr>
				<td class='tabledark'>
					<span class='med'>Ban IP Addresses</span><br /><br />
					One address per line.<br />
					Regular expressions are allowed. You can use a single * as a wildcard for one or more digits.<br /><br />
					<textarea name='banned_ips' rows='12' cols='70' class='input'>$ips</textarea>
				</td>
			</tr>
			<tr>
				<td class='footer' align='center'><input type='submit' name='submit' value='Ban'></td>
			</tr>
			</form>
			$this->etable";
		} else {
			$banned_ips = trim($this->post['banned_ips']);

			if ($banned_ips) {
				$banned_ips = preg_quote($banned_ips, '/');
				$banned_ips = explode("\n", $banned_ips);

				$count = count($banned_ips);
				for($i=0; $i<$count; $i++)
				{
					$banned_ips[$i] = trim($banned_ips[$i]);
					$banned_ips[$i] = str_replace('\\*', '*', $banned_ips[$i]);

					if (!$banned_ips[$i] || (@preg_match("/{$banned_ips[$i]}/", 'anything') === false)) {
						unset($banned_ips[$i]);
					}
				}
			} else {
				$banned_ips = array();
			}

			$this->sets['banned_ips'] = $banned_ips;
			$this->write_sets();

			return $this->message('Banning', 'Users banned.');
		}
	}
}
?>