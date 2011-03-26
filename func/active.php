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
 * $Id: active.php,v 1.26 2006/06/23 19:34:34 jon Exp $
 **/

/**
 * Active Users Viewer
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.0
 **/
class active extends mercuryboard
{
	/**
	 * Sets up title, tree, and HTML
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function execute()
	{
		$this->set_title($this->lang->active_users);
		$this->tree($this->lang->active_users);

		$ActiveList = $this->listActive();
		return eval($this->template('ACTIVE_MAIN'));
	}

	/**
	 * Formats list of active users and filters out inactive ones
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return string HTML: Active users
	 **/
	function listActive()
	{
		$allusers  = null;
		$oldtime   = $this->time - 900;
		$oldusers  = array();

		$act = array(
			'board'   => $this->lang->active_modules_board,
			'topic'   => $this->lang->active_modules_topic,
			'forum'   => $this->lang->active_modules_forum,
			'login'   => $this->lang->active_modules_login,
			'cp'      => $this->lang->active_modules_cp,
			'mod'     => $this->lang->active_modules_mod,
			'search'  => $this->lang->active_modules_search,
			'members' => $this->lang->active_modules_members,
			'help'    => $this->lang->active_modules_help,
			'printer' => $this->lang->active_modules_printer,
			'profile' => $this->lang->active_modules_profile,
			'pm'      => $this->lang->active_modules_pm,
			'active'  => $this->lang->active_modules_active,
			'post'    => $this->lang->active_modules_post
		);

		$query = $this->db->query("
		SELECT
		  a.*, u.user_name, u.user_active, g.group_format, f.forum_name, t.topic_title, t.topic_forum, u2.user_name AS profile_name
		FROM
		  ({$this->pre}active a, {$this->pre}groups g, {$this->pre}users u)
		LEFT JOIN {$this->pre}forums f ON f.forum_id=a.active_item
		LEFT JOIN {$this->pre}topics t ON t.topic_id=a.active_item
		LEFT JOIN {$this->pre}users u2 ON u2.user_id=a.active_item
		WHERE
		  a.active_id = u.user_id AND
		  u.user_group = g.group_id
		ORDER BY
		  a.active_time DESC");

		$botformat = '<i>%s</i>';
		$bots = array(
			array(0, 'Yahoo', 'Yahoo! Slurp'),
			array(0, 'Googlebot', 'Googlebot'),
			array(0, 'Alexa', 'Alexa Archiver'),
			array(0, 'ArchitextSpider', 'Excite-Bot'),
			array(0, 'msnbot', 'MSNBot'),
			array(0, 'WISENutbot', 'Looksmart'),
			array(0, 'Jeeves', 'Jeeves')
		);

		while ($user = $this->db->nqfetch($query))
		{
			if ($user['active_time'] < $oldtime) {
				$oldusers[] = 'user_id=' . $user['active_id'];
			} elseif ($user['user_active']) {
				if ($user['active_id'] != USER_GUEST_UID) {
					$username = '<a href="' . $this->self . '?a=profile&amp;w=' . $user['active_id'] . '">' . sprintf($user['group_format'], $user['user_name']) . '</a>';
				} else {
					$username = $user['user_name'];

					foreach ($bots as $id => $bot)
					{
						if (strpos($user['active_user_agent'], $bot[1]) !== false) {
							if ($bot[0]) { //We've matched a bot which has already been displayed
								continue 2;
							}

							$bots[$id][0] = 1;
							$username = sprintf($botformat, $bot[2]);
							break;
						}
					}
				}

				if (isset($act[$user['active_action']])) {
					$action = $act[$user['active_action']];

					switch ($user['active_action'])
					{
					case 'topic':
						if ($this->perms->auth('topic_view', $user['topic_forum']) || $this->perms->auth('forum_view', $user['topic_forum'])) {
							$action = sprintf($action, "<a href='{$this->self}?a=topic&amp;t={$user['active_item']}'>" . $this->format($user['topic_title'], FORMAT_CENSOR | FORMAT_HTMLCHARS) . '</a>');
						} else {
							$action = $act['board'];
						}
						break;

					case 'forum':
						if ($this->perms->auth('forum_view', $user['topic_forum'])) {
							$action = sprintf($action, "<a href='{$this->self}?a=forum&amp;f={$user['active_item']}'>{$user['forum_name']}</a>");
						} else {
							$action = $act['board'];
						}
						break;

					case 'printer':
						if ($this->perms->auth('topic_view', $user['topic_forum']) || $this->perms->auth('forum_view', $user['topic_forum'])) {
							$action = sprintf($action, "<a href='{$this->self}?a=topic&amp;t={$user['active_item']}'>" . $this->format($user['topic_title'], FORMAT_CENSOR | FORMAT_HTMLCHARS) . '</a>');
						} else {
							$action = $act['board'];
						}
						break;

					case 'profile':
						$action = sprintf($action, "<a href='{$this->self}?a=profile&amp;w={$user['active_item']}'>{$user['profile_name']}</a>");
						break;
					}
				} else {
					$action = $act['board'];
				}

				$time = $this->mbdate(DATE_SHORT, $user['active_time']);
				$allusers .= eval($this->template('ACTIVE_USER'));
			}
		}

		if ($oldusers) {
			$oldusers = implode(' OR ', $oldusers);
			$this->db->query('UPDATE ' . $this->pre . 'users SET user_lastvisit=' . $oldtime . ' WHERE ' . $oldusers);
			$this->db->query('DELETE FROM ' . $this->pre . 'active WHERE active_time < ' . $oldtime);
		}

		return $allusers;
	}
}
?>