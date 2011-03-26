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
 * $Id: members.php,v 1.32 2006/06/23 19:34:34 jon Exp $
 **/

/**
 * Displays a list of registered members
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.0
 **/
class members extends mercuryboard
{
	function execute()
	{
		$this->set_title($this->lang->members_list);
		$this->tree($this->lang->members_list);

		$this->get['min'] = isset($this->get['min']) ? intval($this->get['min']) : 0;
		$this->get['num'] = isset($this->get['num']) ? intval($this->get['num']) : 10;
		$asc = 0;

		if (isset($this->get['order'], $this->get['asc'])) {
			$order = $this->get['order'];

			switch($this->get['order'])
			{
			case 'posts':
				$sortby = 'm.user_posts';
				break;

			case 'group':
				$sortby = 'm.user_group';
				break;

			case 'joined':
				$sortby = 'm.user_joined';
				break;

			default:
				$order = 'member';
				$sortby = 'm.user_name';
				break;
			}

			if (!$this->get['asc']) {
				$sortby .= ' DESC';
			}

			$asc  = ($this->get['asc'] == 0) ? 1 : 0;
			$lasc = ($this->get['asc'] == 0) ? 0 : 1;

		} else {
			$lasc = 1;
			$order = 'member';
			$sortby = 'm.user_name ASC';
		}

		if (!isset($this->get['l'])) {
			$l = null;
		} else {
			$l = strtoupper(preg_replace('/[^A-Za-z]/', '', $this->get['l']));
		}

		$PageNums = $this->get_pages("
		SELECT
			user_id
		FROM
			({$this->pre}users m,
			{$this->pre}groups g)
		WHERE
			m.user_group = g.group_id AND
			m.user_id != " . USER_GUEST_UID .
			($l ? " AND UPPER(LEFT(LTRIM(m.user_name), 1)) = '{$l}'" : ''), "a=members&amp;l={$l}&amp;order=$order&amp;asc=$lasc", $this->get['min'], $this->get['num']);

		$result = $this->db->query("
		SELECT
			m.user_joined, m.user_email_show, m.user_email_form, m.user_email, m.user_pm, m.user_name, m.user_id, m.user_posts, m.user_title, m.user_homepage,
			g.group_name
		FROM
			({$this->pre}users m,
			{$this->pre}groups g)
		WHERE
			m.user_group = g.group_id AND
			m.user_id != " . USER_GUEST_UID .
			($l ? " AND UPPER(LEFT(LTRIM(m.user_name), 1)) = '{$l}'" : '') . "
		ORDER BY
			{$sortby}
		LIMIT
			{$this->get['min']}, {$this->get['num']}");

		$Members = null;
		$i = 0;

		while ($member = $this->db->nqfetch($result))
		{
			if ($i % 2 == 0) {
				$class = 'tablelight';
			} else {
				$class = 'tabledark';
			}

			$member['user_joined'] = $this->mbdate(DATE_ONLY_LONG, $member['user_joined']);

			if (!$member['user_email_show']) {
				if ($member['user_email_form']) {
					$member['user_email'] = "<a href='{$this->self}?a=email&amp;to={$member['user_id']}'><img src='./skins/$this->skin/images/email.gif' alt=\"{$this->lang->members_email_member}\" /></a>";
				} else {
					$member['user_email'] = '';
				}
			} else {
				$member['user_email'] = "<a href='mailto:{$member['user_email']}'><img src='./skins/$this->skin/images/email.gif' alt=\"{$this->lang->members_email_member}\" /></a>";
			}

			if (!empty($member['user_homepage'])) {
				$member['user_homepage'] = "<a href=\"{$member['user_homepage']}\" onclick=\"window.open(this.href,'{$this->sets['link_target']}');return false;\"><img src='./skins/$this->skin/images/www.gif' alt=\"{$this->lang->members_vist_www}\" /></a>";
			}

			if (!$member['user_pm']) {
				$member['user_pm'] = null;
			} else {
				$member['user_pm'] = "<a href='$this->self?a=pm&amp;s=send&amp;to={$member['user_id']}'><img src='./skins/$this->skin/images/pm.gif' alt=\"{$this->lang->members_send_pm}\" /></a>";
			}

			$Members .= eval($this->template('MEMBERS_MEMBER'));
			$i++;
		}

		return eval($this->template('MEMBERS_MAIN'));
	}
}
?>