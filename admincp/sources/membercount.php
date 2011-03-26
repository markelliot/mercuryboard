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
 * $Id: membercount.php,v 1.9 2004/02/20 00:10:08 jason Exp $
 **/

require './common.php';

/**
 * Member maintenance
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 3.0
 **/
class membercount extends admin
{
	/**
	 * Recounts the number of members
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 3.0
	 * @version 1.0.0
	 * @return string Message
	 **/
	function execute()
	{
		$this->set_title('Fix Member Statistics');
		$this->tree('Fix Member Statistics');

		$member = $this->db->fetch("SELECT user_id, user_name FROM {$this->pre}users ORDER BY user_id DESC LIMIT 1");
		$counts = $this->db->fetch("SELECT COUNT(user_id) AS count FROM {$this->pre}users");

		$this->sets['last_member'] = $member['user_name'];
		$this->sets['last_member_id'] = $member['user_id'];
		$this->sets['members'] = $counts['count']-1; // Subtract el guesto
		$this->write_sets();

		return $this->message('Updated', 'Members updated.');
	}
}