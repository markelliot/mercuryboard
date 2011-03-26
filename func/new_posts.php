<?php
 /**
  * MercuryBoard
  * Copyright (c) 2001-2003 The Mercury Development Team
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
  * $Id: new_posts.php,v 1.2 2006/08/10 18:50:17 jon Exp $
  **/
 /**
  * Creates a list of topics which contain new posts since your last visit
  * - based off forum.php -
  *
  * @author Jonathan West <jon@quicksilverforums.com>
  * @since 1.1.5
  **/
 class new_posts extends mercuryboard
 {
 	function execute()
	{
		if ($this->user['user_group'] == USER_GUEST) {
			return $this->message($this->lang->new_posts_error, $this->lang->new_posts_guest);
		}
		
		$n   = isset($this->get['num']) ? intval($this->get['num']) : $this->sets['topics_per_page'];
		$min = isset($this->get['min']) ? intval($this->get['min']) : 0;
		
		$new_topics = $this->check_new_posts($n, $min);
		$topicCount = $this->countTopics();
		$pagelinks  = $this->get_pages($topicCount, 'a=recent', $min, $n);
		$forumjump  = $this->select_forums($this->forum_grab(), 0, 0, null, true);

		if (!$new_topics) {
			$new_topics = eval($this->template('NO_NEW_POSTS'));
		}
		return eval($this->template('NEW_POSTS'));
	}
	/**
	 * Show new topics - based of topics.php
	 *
	 * @param int $min First entry to display
	 * @param int $n Number of entries to display
	 * @since 1.1.5
	 * @return string html output in template form
	 **/
	function check_new_posts($n, $min)
	{
		$return = null;
		
		$query = $this->db->query("
		SELECT DISTINCT(t.topic_id), 
			t.topic_modes, t.topic_starter, t.topic_replies,
			t.topic_edited, t.topic_description, t.topic_moved, t.topic_forum, t.topic_last_poster,
			t.topic_icon, t.topic_title,
			f.forum_id, f.forum_name,
			g.group_format,
			p.post_author as dot,
			s.user_name AS topic_starter_name,
			m.user_name AS topic_last_poster_name
		FROM 
			({$this->pre}topics t, 
			{$this->pre}users m,
			{$this->pre}users s, 
			{$this->pre}groups g, 
			{$this->pre}forums f)
		LEFT JOIN {$this->pre}posts p ON (t.topic_id = p.post_topic AND p.post_author = {$this->user['user_id']})
		WHERE 
			t.topic_edited >= {$this->user['user_lastvisit']}
			AND m.user_id = t.topic_last_poster 
			AND s.user_id = t.topic_starter
			AND m.user_group = g.group_id
			AND f.forum_id = t.topic_forum
		ORDER BY
			(t.topic_modes & " . TOPIC_PINNED . ") DESC,
		    t.topic_edited DESC
		LIMIT
		    $min, $n");
			
			while ($new_post = $this->db->nqfetch($query))
			{ 
				$icon = null;
				$state = null;
				$Pages = $this->get_pages_topic($new_post['topic_replies'], 'a=topic&amp;t=' . $new_post['topic_id'], ', ', 0, $this->sets['posts_per_page']);

				if ($new_post['topic_last_poster'] != USER_GUEST_UID) {
					$new_post['topic_starter']  = "<a href='$this->self?a=profile&amp;w={$new_post['topic_last_poster']}'>" .sprintf($new_post['group_format'], $new_post['topic_last_poster_name'])."</a>";
				} else {
					$new_post['topic_starter']  = 'Guest';
				}

				if ($new_post['topic_modes'] & TOPIC_MOVED) {
					$state = 'moved';
					$new_post['topic_id'] = $new_post['topic_moved'];
	
				} elseif ($new_post['topic_modes'] & TOPIC_LOCKED) {
					$state .= 'locked';
				} elseif ($new_post['topic_modes'] & TOPIC_PINNED) {
					$state .= 'pinned';
				}else{
					$state .= 'new';
					if (($this->user['user_id'] != USER_GUEST_UID) && $new_post['dot']) {
						$state .= 'dot';
					}
	
					if ($new_post['topic_replies'] < $this->sets['hot_limit']) {
						$state .= 'open';
					} else {
						$state .= 'hot';
					}
				}
				$icon = "<img src='./skins/{$this->skin}/images/{$state}.gif'>";
				
				if ($new_post['topic_icon']) {
					$new_post['topic_icon'] = '<img src="./skins/' . $this->skin . '/mbicons/' . $new_post['topic_icon'] . '" alt="" />';
				}
				
				$new_post['topic_title'] = $this->format($new_post['topic_title'], FORMAT_CENSOR | FORMAT_HTMLCHARS);
				
				if ($new_post['topic_modes'] & TOPIC_PINNED) {
					$new_post['topic_title'] = "<b><a href='$this->self?a=topic&amp;t={$new_post['topic_id']}&amp;z={$new_post['forum_id']}'>{$new_post['topic_title']}</a></b>";
				}else{
					$new_post['topic_title'] = "<a href='$this->self?a=topic&amp;t={$new_post['topic_id']}&amp;z={$new_post['forum_id']}'>{$new_post['topic_title']}</a>";
				}
				
				if ($new_post['topic_replies'] >= $this->sets['posts_per_page']) {
					$min = floor($new_post['topic_replies'] / $this->sets['posts_per_page']) * $this->sets['posts_per_page'];
					$jump = "&amp;min=$min#p" . ($new_post['topic_replies'] - $min);
				} else {
					$jump = '#p' . $new_post['topic_replies'];
				}
				
				if (!empty($new_post['topic_description'])) {
					$new_post['topic_description'] = $this->format($new_post['topic_description'], FORMAT_CENSOR | FORMAT_HTMLCHARS);
				}
				
				$new_post['topic_starter'] .= '<br/>' . $this->mbdate('g:i a, M j, Y', $new_post['topic_edited']);
				
				if ($this->perms->auth('forum_view', $new_post['forum_id'])) {
					$return .= eval($this->template('NEW_POSTS_CONTENT'));
				}
			}
		return $return;
	}
	/**
	 * Get a count of all the topics available since the user's last visit
	 *
	 * @author Geoffrey Dunn <geoff@warmage.com>
	 * @since 1.1.5
	 * @return int count of topics
	 **/
	function countTopics()
	{
		$query = $this->db->fetch("
		
		SELECT COUNT(topic_id) AS count
		FROM {$this->pre}topics
		WHERE
		    topic_edited >= {$this->user['user_lastvisit']}");

		return $query['count'];
	}
 }
?>