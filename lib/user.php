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
 * $Id: user.php,v 1.7 2006/06/21 19:20:40 jon Exp $
 **/

/**
 * User class
 *
 * @author Mark Elliot <mark.elliot@mercuryboard.com>
 * @since 1.0.1
 **/
class user
{

	function user(&$mercury)
	{
		$this->db  = &$mercury->db;
		$this->pre = &$mercury->pre;
		$this->session = &$mercury->session;
		$this->server  = &$mercury->server;
		$this->cookie  = &$mercury->cookie;
		$this->sets    = &$mercury->sets;
		$this->time    = &$mercury->time;
	}

	function login()
	{
		if(isset($this->cookie[$this->sets['cookie_prefix'] . 'user']) && isset($this->cookie[$this->sets['cookie_prefix'] . 'pass'])){
			$cookie_user = intval($this->cookie[$this->sets['cookie_prefix'] . 'user']);
			$cookie_pass = addslashes($this->cookie[$this->sets['cookie_prefix'] . 'pass']);
			$user = $this->db->fetch("SELECT m.*, s.skin_dir, g.group_perms, g.group_name, t.membertitle_icon FROM {$this->pre}users m, {$this->pre}skins s, {$this->pre}groups g, {$this->pre}membertitles t WHERE m.user_id='{$cookie_user}' AND m.user_password='{$cookie_pass}' AND s.skin_dir=m.user_skin AND g.group_id=m.user_group AND t.membertitle_id=m.user_level LIMIT 1");

		}else if(isset($this->session['user']) && isset($this->session['pass'])){
			$session_user = intval($this->session['user']);
			$session_pass = addslashes($this->session['pass']);
			$user = $this->db->fetch("SELECT m.*, s.skin_dir, g.group_perms, g.group_name, t.membertitle_icon FROM {$this->pre}users m, {$this->pre}skins s, {$this->pre}groups g, {$this->pre}membertitles t WHERE m.user_id='{$session_user}' AND m.user_password='{$session_pass}' AND s.skin_dir=m.user_skin AND g.group_id=m.user_group AND t.membertitle_id=m.user_level LIMIT 1");

		}else{
			$user = $this->db->fetch("SELECT m.*, s.skin_dir, g.group_perms, g.group_name FROM {$this->pre}users m, {$this->pre}skins s, {$this->pre}groups g WHERE m.user_id=" . USER_GUEST_UID . " AND s.skin_dir=m.user_skin AND g.group_id=m.user_group LIMIT 1");
		}

		if (!isset($user['user_id'])) {
			$user = $this->db->fetch("SELECT m.*, s.skin_dir, g.group_perms, g.group_name FROM {$this->pre}users m, {$this->pre}skins s, {$this->pre}groups g WHERE m.user_id=" . USER_GUEST_UID . " AND s.skin_dir=m.user_skin AND g.group_id=m.user_group LIMIT 1");
			setcookie($this->sets['cookie_prefix'] . 'user', '', $this->time - 9000, $this->sets['cookie_path']);
			setcookie($this->sets['cookie_prefix'] . 'pass', '', $this->time - 9000, $this->sets['cookie_path']);
		}

		return $user;
	}
}
?>