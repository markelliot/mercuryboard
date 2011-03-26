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
 * $Id: perms.php,v 1.17 2005/04/25 23:05:29 jason Exp $
 **/
 /*

/**
 * Permissions class
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 4.0
 **/
class permissions
{
	var $cube = array();
	var $group;
	var $user;
	var $db;
	var $pre;
	var $is_guest;
	var $standard = array(
		'board_view' => false,
		'board_view_closed' => false,
		'do_anything' => false,
		'email_use' => false,
		'is_admin' => false,
		'topic_global' => false,
		'forum_view' => false,
		'pm_noflood' => false,
		'poll_create' => false,
		'poll_vote' => false,
		'post_attach' => false,
		'post_attach_download' => false,
		'post_create' => false,
		'post_delete' => false,
		'post_delete_own' => false,
		'post_edit' => false,
		'post_edit_own' => false,
		'post_noflood' => false,
		'post_viewip' => false,
		'search_noflood' => false,
		'topic_create' => false,
		'topic_delete' => false,
		'topic_delete_own' => false,
		'topic_edit' => false,
		'topic_edit_own' => false,
		'topic_lock' => false,
		'topic_lock_own' => false,
		'topic_move' => false,
		'topic_move_own' => false,
		'topic_pin' => false,
		'topic_pin_own' => false,
		'topic_split' => false,
		'topic_split_own' => false,
		'topic_unlock' => false,
		'topic_unlock_mod' => false,
		'topic_unlock_own' => false,
		'topic_unpin' => false,
		'topic_unpin_own' => false,
		'topic_view' => false
	);

	var $globals = array(
		'board_view' => true,
		'board_view_closed' => true,
		'do_anything' => true,
		'email_use' => true,
		'is_admin' => true,
		'pm_noflood' => true,
		'search_noflood' => true,
		'topic_global' => true
	);

	function get_perms($group, $user, $perms = false)
	{
		if (!$perms) {
			if ($group != -1) {
				$data  = $this->db->fetch("SELECT group_perms FROM {$this->pre}groups WHERE group_id={$group}");
				$perms = $data['group_perms'];
			} else {
				$data  = $this->db->fetch("SELECT user_perms, user_group FROM {$this->pre}users WHERE user_id={$user}");
				$perms = $data['user_perms'];
				$group = $data['user_group'];
			}
		}

		$this->cube = unserialize($perms);
		if (!$this->cube) {
			$this->cube = $this->standard;
		}

		$this->is_guest = (($user == USER_GUEST_UID) || ($group == USER_GUEST));
		$this->group = $group;
		$this->user  = $user;
	}

	function auth($y, $z = false)
	{
		if (!isset($this->cube[$y])) {
			return false;
		}

		if ($z === false) {
			return !is_array($this->cube[$y]) ? $this->cube[$y] : !in_array(false, $this->cube[$y]);
		} else {
			return is_array($this->cube[$y]) ? (isset($this->cube[$y][$z]) && $this->cube[$y][$z]) : $this->cube[$y];
		}
	}

	function reset_cube($bool)
	{
		$cube = $this->standard;
		$forums = array();

		$query = $this->db->query("SELECT forum_id FROM {$this->pre}forums ORDER BY forum_id");
		while ($forum = $this->db->nqfetch($query))
		{
			$forums[$forum['forum_id']] = $bool;
		}

		foreach ($cube as $y => $z)
		{
			if (!isset($this->globals[$y]) && $forums) {
				$cube[$y] = $forums;
			} else {
				$cube[$y] = $bool;
			}
		}

		$this->cube = $cube;
	}

	function set_xy($y, $bool)
	{
		if (!isset($this->cube[$y])) {
			if (!isset($this->globals[$y])) {
				// Create an array of all the forums
				$z = $this->cube[reset(array_diff(array_keys($this->standard), array_keys($this->globals)))];

				if (is_array($z)) { // We have forums
					$z = array_keys($array);

					$this->cube[$y] = array();

					foreach ($z as $zkey)
					{
						$this->cube[$y][$zkey] = $bool;
					}
				} else { // No forums
					$this->cube[$y] = $bool;
				}
			} else {
				$this->cube[$y] = $bool;
			}
		} else {
			if (isset($this->globals[$y]) || is_bool($this->cube[$y])) {
				$this->cube[$y] = $bool;
			} else {
				foreach ($this->cube[$y] as $zkey => $zval)
				{
					$this->cube[$y][$zkey] = $bool;
				}
			}
		}
	}

	function set_xyz($y, $z, $bool)
	{
		// Only allow z modifications on non-global permissions if there are forums
		if (!isset($this->globals[$y]) && is_array($this->cube[$y])) {
			$this->cube[$y][$z] = $bool;
		}
	}

	function add_z($z, $bool = -1)
	{
		foreach ($this->cube as $y => $zval)
		{
			if (isset($this->globals[$y])) {
				continue;
			}

			if (!is_bool($this->cube[$y])) {
				$this->cube[$y][$z] = $bool;
			} else {
				if ($bool === -1) {
					$this->cube[$y] = array($z => $this->cube[$y]);
				} else {
					$this->cube[$y] = array($z => $bool);
				}
			}
		}
	}

	function remove_z($z)
	{
		foreach ($this->cube as $y => $zval)
		{
			if (isset($this->globals[$y])) {
				continue;
			}

			// Removing the last forum?
			if (count($this->cube[$y]) == 1) {
				$this->cube[$y] = $this->cube[$y][$z];
			} else {
				unset($this->cube[$y][$z]);
			}
		}
	}

	/**
	 * This will load a new group for each while iteration
	 *
	 * while ($perms->get_group())
	 * {
	 *     $perms->set_xy();
	 *     $perms->update();
	 * }
	 */
	function get_group($users = false)
	{
		static $start = true;
		static $groups = array();
		static $p = 0;

		if ($start) {
			$start = false;

			if ($users) {
				$query = $this->db->query("SELECT user_id, user_perms FROM {$this->pre}users WHERE user_perms != ''");
			} else {
				$query = $this->db->query("SELECT group_id, group_perms FROM {$this->pre}groups");
			}

			while ($group = $this->db->nqfetch($query))
			{
				$groups[] = $group;
			}
		}

		if ($p < count($groups)) {
			if ($users) {
				$this->get_perms(-1, $groups[$p]['user_id'], $groups[$p]['user_perms']);
			} else {
				$this->get_perms($groups[$p]['group_id'], -1, $groups[$p]['group_perms']);
			}

			$p++;

			return true;
		} else {
			$start = true;
			$groups = array();
			$p = 0;

			return false;
		}
	}

	function update()
	{
		if ($this->cube) {
			ksort($this->cube);
			$serialized = addslashes(serialize($this->cube));
		} else {
			$serialized = '';
		}

		if ($this->user == -1) {
			$this->db->query("UPDATE {$this->pre}groups SET group_perms='$serialized' WHERE group_id={$this->group}");
		} else {
			$this->db->query("UPDATE {$this->pre}users SET user_perms='$serialized' WHERE user_id={$this->user}");
		}
	}
}
?>