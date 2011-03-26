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
 * $Id: register.php,v 1.33 2006/10/01 10:10:56 jon Exp $
 **/

/**
 * Creates a member account
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.0
 **/
class register extends mercuryboard
{
	function execute()
	{
		$this->set_title($this->lang->register_reging);
		$this->tree($this->lang->register_reging);

		if (!isset($this->get['s'])) {
			$this->get['s'] = null;
		}

		switch($this->get['s'])
		{
		case 'activate':
			return $this->activateUser();
			break;

		case 'resend':
			return $this->send_activation_email($this->user['user_email'], $this->user['user_name'], $this->user['user_password'], $this->user['user_joined']);
			break;

		default:
			return $this->registration();
		}
	}

	function registration()
	{
		if (!isset($this->post['submit'])) {
			if ($this->sets['register_image']) {
				$imagesrc = $this->create_image();
				$image = eval($this->template('REGISTER_IMAGE'));
			} else {
				$image = null;
			}

			return eval($this->template('REGISTER_MAIN'));
		} else {
			$username = $this->post['desuser'];
			$email    = $this->post['email'];
			$pass     = $this->post['passA'];
			$pass2    = $this->post['passB'];

			if ($this->sets['register_image']) {
				$image = $this->post['imagetext'];
			} else {
				$image = '-';
			}

			if ((trim($username) == '')
			|| (trim($email) == '')
			|| (trim($pass) == '')
			|| (trim($pass2) == '')
			|| (trim($image) == '')) {
				return $this->message($this->lang->register_reging, $this->lang->register_fields);
			}

			if (strlen($username) > 20) {
				return $this->message($this->lang->register_reging, $this->lang->register_name_invalid);
			}

			if ($this->sets['register_image']) {
				if (md5("{$this->sets['db_pass']}{$this->sets['mostonlinetime']}$image") != $this->post['imagestring']) {
					return $this->message($this->lang->register_reging, $this->lang->register_image_invalid);
				}
			}

			$username = str_replace('\\', '&#092;', $this->format(stripslashes($username), FORMAT_HTMLCHARS | FORMAT_CENSOR));

			$exists = $this->db->fetch("SELECT user_id FROM {$this->pre}users WHERE REPLACE(LOWER(user_name), ' ', '')='" . str_replace(' ', '', strtolower($username)) . "'");
			if ($exists) {
				return $this->message($this->lang->register_reging, $this->lang->register_name_taken);
			}

			if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*$/i", $email)) {
				return $this->message($this->lang->register_reging, $this->lang->register_email_invalid);
			}

			if (!preg_match("/^[a-z0-9_\- ]{5,}$/i", $pass)) {
				return $this->message($this->lang->register_reging, $this->lang->register_pass_invalid);
			}

			$eexists = $this->db->fetch("SELECT user_email FROM {$this->pre}users WHERE user_email='$email'");
			if ($eexists) {
				return $this->message($this->lang->register_reging, $this->lang->register_email_used);
			}

			if ($pass != $pass2) {
				return $this->message($this->lang->register_reging, $this->lang->register_pass_match);
			}

			$pass = md5($pass);
			$level = $this->get_level(0);

			if ($this->sets['emailactivation']) {
				$group_id = USER_AWAIT;
			} else {
				$group_id = $this->sets['default_group'];
			}

			$this->db->query("INSERT INTO {$this->pre}users (user_name, user_password, user_group, user_title, user_joined, user_email, user_skin, user_view_avatars, user_view_emoticons, user_view_signatures, user_language, user_email_show, user_pm, user_timezone)
			VALUES ('$username', '$pass', $group_id, '{$level['user_title']}', $this->time, '$email', '{$this->sets['default_skin']}', {$this->sets['default_view_avatars']}, {$this->sets['default_view_emots']}, {$this->sets['default_view_sigs']}, '{$this->sets['default_lang']}', {$this->sets['default_email_shown']}, {$this->sets['default_pm']}, {$this->sets['default_timezone']})");

			$this->sets['last_member'] = $username;
			$this->sets['last_member_id'] = $this->db->insert_id();
			$this->sets['members']++;
			$this->write_sets();

			if ($this->sets['emailactivation']) {
				return $this->send_activation_email($email, $username, $pass, $this->time);
			}

			return $this->message($this->lang->register_reging, sprintf($this->lang->register_done, $this->self));
		}
	}

	function send_activation_email($email, $username, $pass, $jointime)
	{
		include './lib/mailer.php';

		$mailer = new mailer($this->sets['admin_incoming'], $this->sets['admin_outgoing'], $this->sets['forum_name'], false);

		$message  = "This is an automated email generated by MercuryBoard, and sent to you in order\n";
		$message .= "for you to activate your account with {$this->sets['forum_name']}.\n\n";
		$message .= "Please click the following link, or paste it in to your web browser:\n";
		$message .= "{$this->sets['loc_of_board']}$this->self?a=register&s=activate&e=" . md5($email . $username . $pass . $jointime);

		$mailer->setSubject("{$this->sets['forum_name']} - Activating Your Account");
		$mailer->setMessage($message);
		$mailer->setRecipient($email);
		$mailer->setServer($this->sets['mailserver']);
		$mailer->doSend();

		return $this->message($this->lang->register_reging, sprintf($this->lang->register_must_activate, $email));
	}

	function activateUser()
	{
		if (isset($this->get['e'])) {
			$member = $this->db->fetch("SELECT user_id, user_group FROM {$this->pre}users WHERE MD5(CONCAT(user_email, user_name, user_password, user_joined))='{$this->get['e']}' LIMIT 1");

			if (isset($member['user_id']) && USER_GUEST_UID != $member['user_id'] && USER_AWAIT == $member['user_group']) {
				$this->db->query("UPDATE {$this->pre}users SET user_group=" . $this->sets['default_group'] . " WHERE user_id={$member['user_id']}");
				return $this->message($this->lang->register_activating, $this->lang->register_activated);
			}
		}

		return $this->message($this->lang->register_activating, $this->lang->register_activation_error);
	}

	function create_image()
	{
		include './lib/jpgraph/jpgraph.php';
		include './lib/jpgraph/jpgraph_polar.php';
		
		if (!function_exists('imagejpeg')) {		
			JpGraphError::Raise("This PHP installation is not configured with JPEG support meaning that anti-robot registration cannnot be run at this current time. Please recompile PHP with GD and JPEG support to run JpGraph and that will allow anti-robot registration to fully function. (Function imagejpeg() does not exist)");
		}

		$graph = new PolarGraph(250, 250);
		$graph->SetScale('lin');
		$graph->SetMargin(0, 1, 0, 1);
		$graph->axis->ShowAngleLabel(false);
		$graph->axis->HideTicks();
		$graph->axis->HideLabels();
		$graph->axis->HideLine();

		$fonts  = array(FF_ARIAL, FF_VERDANA, FF_TREBUCHE, FF_GEORGIA, FF_COMIC, FF_COURIER, FF_TIMES);
		$styles = array(FS_NORMAL, FS_BOLD, FS_ITALIC);

		$text  = $this->generate_pass(6);
		$font  = $fonts[rand(0, count($fonts) - 1)];
		$style = $styles[rand(0, count($styles) - 1)];

		if (($font == FF_COMIC) && ($style == FS_ITALIC)) {
			$style = FS_NORMAL;
		}

		$txt = new Text($text);
		$txt->Pos(rand(10, 140), rand(10, 140));
		$txt->SetFont($font, $style, rand(20, 26));
		$txt->SetColor('black');
		$txt->SetAngle(rand(-45, 45));

		$graph->AddText($txt);
		$graph->Stroke('./register.png');

		return array(md5("{$this->sets['db_pass']}{$this->sets['mostonlinetime']}$text"), './register.png');
	}
}
?>