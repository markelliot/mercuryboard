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
 * $Id: board.php,v 1.62 2006/06/23 19:34:34 jon Exp $
 **/

/**
 * Main board view
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.0
 **/
class board extends mercuryboard
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
		if (!$this->perms->auth('board_view')) {
			return $this->message(
				sprintf($this->lang->board_message, $this->sets['forum_name']),
				($this->perms->is_guest) ? sprintf($this->lang->board_regfirst, $this->self) : $this->lang->board_noview
			);
		}

		if (!isset($this->get['c'])) {
			$this->get['c'] = 0;
		} else {
			$this->tree_forums($this->get['c']);
		}

		if (isset($this->get['s'])) {
			if ($this->get['s'] == 'mark') {
				$this->setuser_lastvisit();
				return $this->message($this->lang->board_mark, $this->lang->board_mark1, $this->lang->main_continue, $this->self, $this->self);
			} else {
				$this->get['s'] = null;
			}
		}

		$query = $this->db->query("
		SELECT
		    f.forum_id, f.forum_parent, f.forum_name, f.forum_position, f.forum_description, f.forum_topics, f.forum_replies, f.forum_lastpost,
		    t.topic_id as LastTopicID, t.topic_title as user_lastpost, t.topic_edited as LastTime, t.topic_replies,
			m.user_name as user_lastposter, m.user_id as user_lastposterID
		FROM {$this->pre}forums f
		LEFT JOIN {$this->pre}posts p ON p.post_id = f.forum_lastpost
		LEFT JOIN {$this->pre}topics t ON t.topic_id = p.post_topic
		LEFT JOIN {$this->pre}users m ON m.user_id = p.post_author
		ORDER BY f.forum_parent, f.forum_position");

		$_forums = array();

		while ($f = $this->db->nqfetch($query))
		{
			if ($this->perms->auth('forum_view', $f['forum_id'])) {
				$_forums[$f['forum_parent']][$f['forum_position']][$f['forum_id']] = $f;
			}
		}

		$forums    = $this->getForums($_forums, $this->get['c']);
		$birthdays = $this->getuser_birthdays();
		$stats     = $this->getStats();
		$active    = $this->doActive();

		$this->lang->board_stats_string = sprintf($this->lang->board_stats_string,
		    $stats['MEMBERS'], "<a href='$this->self?a=profile&amp;w={$stats['LASTMEMBERID']}'>{$stats['LASTMEMBER']}</a>",
		    $stats['TOPICS'], $stats['REPLIES'], $stats['POSTS']);

		$this->lang->board_most_online = sprintf($this->lang->board_most_online, $stats['MOSTONLINE'], $stats['MOSTONLINETIME']);

		return eval($this->template('BOARD_MAIN'));
	}

	/**
	 * Creates a list of forums
	 *
	 * @param array $forums Forums
	 * @param int $c Category to retrieve
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return string HTML: list of forums
	 **/
	function getForums($forums, $c)
	{
		if (!isset($forums[$c])) {
			return false;
		}

		$return = null;

		foreach ($forums[$c] as $category)
		{
			foreach ($category as $forum)
			{
				if ($forum['forum_parent'] == 0) {
					$return .= eval($this->template('BOARD_CATEGORY'));

					if (isset($forums[$forum['forum_id']])) {
						$return .= $this->getForums($forums, $forum['forum_id']);
					}
				} else {
					if ($forum['forum_description']) {
						$forum['forum_description'] = '<br />' . $forum['forum_description'];
					}

					$forum['forum_topics'] = number_format($forum['forum_topics'], 0, null, $this->lang->sep_thousands);
					$forum['forum_replies'] = number_format($forum['forum_replies'], 0, null, $this->lang->sep_thousands);

					if ($this->perms->auth('topic_view', $forum['forum_id'])) {
						if ($this->perms->auth('topic_create', $forum['forum_id'])) {
							$topic_perms = "<a href='$this->self?a=post&amp;s=topic&amp;f={$forum['forum_id']}'><img src='./skins/{$this->skin}/images/topic_write.gif' alt='{$this->lang->board_write_topics}' title='{$this->lang->board_write_topics}' /></a>";
						} else {
							$topic_perms = "<img src='./skins/{$this->skin}/images/topic_read.gif' alt='{$this->lang->board_can_topics}' title='{$this->lang->board_can_topics}' />";
						}

						if ($this->perms->auth('post_create', $forum['forum_id'])) {
							$post_perms = "<img src='./skins/{$this->skin}/images/post_write.gif' alt='{$this->lang->board_can_post}' title='{$this->lang->board_can_post}' />";
						} else {
							$post_perms = "<img src='./skins/{$this->skin}/images/post_read.gif' alt='{$this->lang->board_cant_post}' title='{$this->lang->board_cant_post}' />";
						}
					} else {
						$topic_perms = "<img src='./skins/{$this->skin}/images/topic_none.gif' alt='{$this->lang->board_cant_topics}' title='{$this->lang->board_cant_topics}' />";
						$post_perms = "<img src='./skins/{$this->skin}/images/post_read.gif' alt='{$this->lang->board_cant_post}' title='{$this->lang->board_cant_post}' />";
					}

					if ($forum['forum_lastpost']) {
						if ($forum['LastTime'] > $this->user['user_lastvisit']) {
    						$topic_new = "<a href='$this->self?s=mark&amp;f={$forum['forum_id']}'><img src='./skins/{$this->skin}/images/topic_new.gif' alt='{$this->lang->board_topics_new}' title='{$this->lang->board_topics_new}' /></a>";
    					} else {
							$topic_new = "<img src='./skins/{$this->skin}/images/topic_old.gif' alt='{$this->lang->board_topics_old}' title='{$this->lang->board_topics_old}' />";
    					}

						$forum['LastTime'] = $this->mbdate(DATE_LONG, $forum['LastTime']);

						if ($forum['user_lastposterID'] != USER_GUEST_UID) {
							$forum['user_lastposter'] = "<a href='$this->self?a=profile&amp;w={$forum['user_lastposterID']}' class='small'>{$forum['user_lastposter']}</a>";
						}

						$full_title = $forum['user_lastpost'];
						if (strlen($forum['user_lastpost']) > 19) {
							$forum['user_lastpost'] = substr($forum['user_lastpost'], 0, 19) . '...';
						}

						$full_title = $this->format($full_title, FORMAT_CENSOR | FORMAT_HTMLCHARS);
						$forum['user_lastpost'] = $this->format($forum['user_lastpost'], FORMAT_CENSOR | FORMAT_HTMLCHARS);

						if ($forum['topic_replies'] >= $this->sets['posts_per_page']) {
							$min = floor($forum['topic_replies'] / $this->sets['posts_per_page']) * $this->sets['posts_per_page'];
							$forum['LastTopicID'] .= "&amp;min=$min#p" . ($forum['topic_replies'] - $min);
						} else {
							$forum['LastTopicID'] .= '#p' . $forum['topic_replies'];
						}

						$user_lastpostBox = eval($this->template('BOARD_LAST_POST_BOX'));
					} else {
						$topic_new = "<img src='./skins/{$this->skin}/images/topic_old.gif' alt='{$this->lang->board_topics_old}' title='{$this->lang->board_topics_old}' />";

						$user_lastpostBox = $this->lang->board_nopost;
					}

					$return .= eval($this->template('BOARD_FORUM'));
				}
			}
		}
		return $return;
	}

	/**
	 * Gets common board stats
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return array Board stats: LASTMEMBEreplacement_id, LASTMEMBER, MEMBERS, TOPICS, POSTS, REPLIES, MOSTONLINE, MOSTONLINETIME
	 **/
	function getStats()
	{
		return array(
			'LASTMEMBERID'   => $this->sets['last_member_id'],
			'LASTMEMBER'     => $this->sets['last_member'],
			'MEMBERS'        => number_format($this->sets['members'], 0, null, $this->lang->sep_thousands),
			'TOPICS'         => number_format($this->sets['topics'], 0, null, $this->lang->sep_thousands),
			'POSTS'          => number_format($this->sets['posts'], 0, null, $this->lang->sep_thousands),
			'REPLIES'        => number_format($this->sets['posts'] - $this->sets['topics'], 0, null, $this->lang->sep_thousands),
			'MOSTONLINE'     => $this->sets['mostonline'],
			'MOSTONLINETIME' => $this->mbdate(DATE_LONG, $this->sets['mostonlinetime'])
		);
	}

	/**
	 * Makes a list of people whose birthday is today
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string List of members and their ages
	 **/
	function getuser_birthdays()
	{
		$return   = null;
		$members  = $this->db->query("SELECT user_id, user_name, user_birthday FROM {$this->pre}users WHERE user_birthday LIKE '" . $this->mbdate('%-m-d') . "'");
		$count    = $this->db->num_rows($members);
		$i        = 1;

		if (!$count) {
			return $this->lang->board_nobday;
		}

		while ($m = $this->db->nqfetch($members))
		{
			$temp = explode('-', $m['user_birthday']);
			$day = $this->mbdate('Y') - reset($temp);
			$comma = ($i < $count) ? ', ' : null;
			$return .= "<a href='$this->self?a=profile&amp;w={$m['user_id']}' class='small'>{$m['user_name']}</a> ($day)$comma";
			$i++;
		}
		return $return;
	}

	/**
	 * Formats list of active users
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return array Active users: USERS, MEMBERCOUNT, GUESTCOUNT, TOTALCOUNT
	 **/
	function doActive()
	{
		global $OnTotal, $OnMembers;

		/**
		 * If it exists, perhaps do something like UPDATE ... SELECT
		 */

		$Active = $this->getActive();
		if ($Active) {
			$Active = implode(', ', $Active);
		} else {
			$Active = $this->lang->board_nobody;
		}

		if ($OnTotal > $this->sets['mostonline']) {
			$this->sets['mostonline']     = $OnTotal;
			$this->sets['mostonlinetime'] = $this->time;
			$this->write_sets();
		}

		$OnGuests = $OnTotal - $OnMembers;

		return array(
			'USERS'       => $Active,
			'MEMBERCOUNT' => $OnMembers,
			'GUESTCOUNT'  => $OnGuests,
			'TOTALCOUNT'  => $OnTotal
		);
	}

	/**
	 * Sets a user's last visit time
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return void
	 **/
	function setuser_lastvisit()
	{
		$this->db->query('UPDATE ' . $this->pre . 'users SET user_lastvisit=' . $this->time . ' WHERE user_id=' . $this->user['user_id']);
	}

	/**
	 * Makes list of active users and filters out inactive ones - see doActive()
	 *
	 * @access protected
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return array Array of active members
	 **/
	function getActive()
	{
		global $OnMembers, $OnTotal;

		$OnMembers = 0;
		$OnTotal   = 0;
		$time      = $this->time - 900;
		$oldusers  = array();
		$allusers  = array();

		$query = $this->db->query("
		SELECT
		  a.*, u.user_name, u.user_active, g.group_format
		FROM
		  ({$this->pre}active a, {$this->pre}groups g, {$this->pre}users u)
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
			if ($user['active_time'] < $time) {
				$oldusers[] = 'user_id=' . $user['active_id'];
			} elseif ($user['user_active']) {
				$OnTotal++;
				if ($user['active_id'] != USER_GUEST_UID) {
                    if (!isset($allusers[$user['active_id']])) {
                        $allusers[$user['active_id']] = "<a href='$this->self?a=profile&amp;w={$user['active_id']}' class='small' title=\"" . (!$this->perms->auth('post_viewip') ? null : $user['active_ip'] . ' --- ') .  "{$user['active_user_agent']}\">" . sprintf($user['group_format'], $user['user_name']) . '</a>';
                        $OnMembers++;
                    } else {
                        $OnTotal--;
                    }
				} else {
					foreach ($bots as $id => $bot)
					{
						if (strpos($user['active_user_agent'], $bot[1]) !== false) {
							if ($bot[0]) { //We've matched a bot which has already been displayed
								$OnTotal--;
								continue 2;
							}

							$bots[$id][0] = 1;
							$allusers[] = sprintf($botformat, $bot[2]);
							$OnTotal--;
							break;
						}
					}
				}
			}
		}

		if ($oldusers) {
			$oldusers = implode(' OR ', $oldusers);
			$this->db->query('UPDATE ' . $this->pre . 'users SET user_lastvisit=' . $time . ' WHERE ' . $oldusers);
			$this->db->query('DELETE FROM ' . $this->pre . 'active WHERE active_time < ' . $time);
		}
		return $allusers;
	}
}
?>