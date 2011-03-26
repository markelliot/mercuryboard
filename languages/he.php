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
 * $Id: he.php,v 1.20 2006/07/26 17:56:19 jon Exp $
 **/

/**
 * Hebrew language module
 *
 * @author Anonymous
 * @since 1.1.0
 **/
class he
{
	function active()
	{
		$this->active_last_action = '������ ������';
		$this->active_modules_active = '���� ������ ������� ������';
		$this->active_modules_board = '������� ��������';
		$this->active_modules_cp = '����� ���� ���� ����';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = '����� �����';
		$this->active_modules_login = '�����\�����';
		$this->active_modules_members = '���� ������ ���� ������';
		$this->active_modules_mod = '���� �������';
		$this->active_modules_pm = '����� �����\'� ����';
		$this->active_modules_post = '����� �����';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_search = '����';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = '���';
		$this->active_user = '�����';
		$this->active_users = '������� ������';
	}

	function board()
	{
		$this->board_active_users = '������� ������';
		$this->board_birthdays = '��� ����� ����:';
		$this->board_can_post = '��� ���� ����� ������ ���.';
		$this->board_can_topics = '��� ���� ����� ������ �� �� ����� ������ �����.';
		$this->board_cant_post = '���� ���� ����� ������ ���';
		$this->board_cant_topics = '���� ����� ����� �� ����� ������ ������ ���.';
		$this->board_forum = '�����';
		$this->board_guests = '������';
		$this->board_last_post = '����� ������';
		$this->board_mark = '��� �� ������� ������';
		$this->board_mark1 = '�� ������� ������� ����� ������.';
		$this->board_members = '�������';
		$this->board_message = '%s �����';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = '��� ��� ����� ����.';
		$this->board_nobody = '��� ���� ����� �������.';
		$this->board_nopost = '��� ������';
		$this->board_noview = '��� �� ������ ����� �����.';
		$this->board_regfirst = '��� �� ������ ����� �����. �� ��� ����, ��� ���� ����� �����.';
		$this->board_replies = '������';
		$this->board_stats = '����������';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_topics = '������';
		$this->board_topics_new = '�� ������ ����� ������ ���.';
		$this->board_topics_old = '��� ������ ����� ������ ���.';
		$this->board_users = '�������';
		$this->board_write_topics = '���� ���� ����� ������ ������ ���.';
	}

	function cp()
	{
		$this->cp_aim = '�� ����� �� AIM';
		$this->cp_already_member = '���� �������� ����� ��� ������ �� ��� ����� ���.';
		$this->cp_apr = '�����';
		$this->cp_aug = '������';
		$this->cp_avatar_current = '����� ���';
		$this->cp_avatar_error = '����� ������';
		$this->cp_avatar_must_select = '��� ���� ����� �����.';
		$this->cp_avatar_none = '��� ����� ������';
		$this->cp_avatar_pixels = '�������';
		$this->cp_avatar_select = '��� �����';
		$this->cp_avatar_size_height = '���� ������ ��� ���� ����� ����� 1 �';
		$this->cp_avatar_size_width = '���� ������ ��� ���� ����� ����� 1 �';
		$this->cp_avatar_upload = '���� ����� ����� ���';
		$this->cp_avatar_upload_failed = '���� �� ����� �����. ����� �� ����.';
		$this->cp_avatar_upload_not_image = '��� ���� ���� �� ������ ������� ��� ������.';
		$this->cp_avatar_upload_too_large = '����� ���� ���� ����� ���� ����. ���� �������� ��� %d ��������.';
		$this->cp_avatar_url = '���� URL �� ������';
		$this->cp_avatar_use = '����� ������ �����';
		$this->cp_bday = '��� �����';
		$this->cp_been_updated = '������ ��� �����.';
		$this->cp_been_updated1 = '����� ��� �����.';
		$this->cp_been_updated_prefs = '������ ��� ������.';
		$this->cp_changing_pass = '����� �����';
		$this->cp_contact_pm = '���� ������ ����� �� ������ ������?';
		$this->cp_cp = '��� ����';
		$this->cp_current_avatar = '�����';
		$this->cp_current_time = '���� ����� %s.';
		$this->cp_dec = '�����';
		$this->cp_editing_avatar = '����� �����';
		$this->cp_editing_profile = '����� ������';
		$this->cp_email = '���� ��������';
		$this->cp_email_form = 'Allow others to contact you via the email form?'; //Translate
		$this->cp_email_invaid = '���� �������� ������ �����.';
		$this->cp_err_avatar = '����� ����� �����';
		$this->cp_err_updating = '����� ������� ������';
		$this->cp_feb = '������';
		$this->cp_file_type = '����� ������ ����� ����. ����� �� ������ ������ ����, ���� ���� �� ����� ��� gif, jpg, �� png.';
		$this->cp_format = '�� �����';
		$this->cp_gmt = '[GMT] ���� ��� ���� ��������\'';
		$this->cp_gmt_nev1 = '[GMT-1:00] �����, ��� �����';
		$this->cp_gmt_nev10 = '[GMT-10:00] �����';
		$this->cp_gmt_nev11 = '[GMT-11:00] �� �������, �����';
		$this->cp_gmt_nev12 = '[GMT-12:00] �� ����� �� ����� ��������';
		$this->cp_gmt_nev2 = '[GMT-2:00] ���-�������';
		$this->cp_gmt_nev3 = '[GMT-3:00] ������ �����, ��������';
		$this->cp_gmt_nev35 = '[GMT-3:30] �����������';
		$this->cp_gmt_nev4 = '[GMT-4:00] ���� ������ ����';
		$this->cp_gmt_nev5 = '[GMT-5:00] ���� ����� ���"� & ����';
		$this->cp_gmt_nev6 = '[GMT-6:00] ��� ����� ���"� & ����';
		$this->cp_gmt_nev7 = '[GMT-7:00] ���� ���� ���"� & ����';
		$this->cp_gmt_nev8 = '[GMT-8:00] ���� ����� ���"� & ����';
		$this->cp_gmt_nev9 = '[GMT-9:00] ������';
		$this->cp_gmt_pos1 = '[GMT+1:00] �������, �����, ����, ����';
		$this->cp_gmt_pos10 = '[GMT+10:00] ��������, �����, ����';
		$this->cp_gmt_pos11 = '[GMT+11:00] ����, ��� �������';
		$this->cp_gmt_pos12 = '[GMT+12:00] �������, ���\'�';
		$this->cp_gmt_pos2 = '[GMT+2:00] �����, ����, �������';
		$this->cp_gmt_pos3 = '[GMT+3:00] ����, ������, �������';
		$this->cp_gmt_pos35 = '[GMT+3:30] �����';
		$this->cp_gmt_pos4 = '[GMT+4:00] ��� �����, ������, ��������';
		$this->cp_gmt_pos45 = '[GMT+4:30] �����';
		$this->cp_gmt_pos5 = '[GMT+5:00] ���������, �����\'�';
		$this->cp_gmt_pos55 = '[GMT+5:30] ������, ��������, ��� ����';
		$this->cp_gmt_pos6 = '[GMT+6:00] ������, �����';
		$this->cp_gmt_pos7 = '[GMT+7:00] ������, �\'������';
		$this->cp_gmt_pos8 = '[GMT+8:00] ����\'���, ���� ����, �������';
		$this->cp_gmt_pos9 = '[GMT+9:00] �����, ����';
		$this->cp_gmt_pos95 = '[GMT+9:30] ������, �������';
		$this->cp_header = '��� ���� ����';
		$this->cp_height = '����';
		$this->cp_icq = '���� ICQ';
		$this->cp_interest = '����� �����';
		$this->cp_jan = '�����';
		$this->cp_july = '����';
		$this->cp_june = '����';
		$this->cp_label_edit_avatar = '����� �����';
		$this->cp_label_edit_pass = '����� �����';
		$this->cp_label_edit_prefs = '����� ������';
		$this->cp_label_edit_profile = '����� ������';
		$this->cp_label_edit_subs = '����� ������';
		$this->cp_language = '���';
		$this->cp_less_charac = '�� ��� ���� ����� 32 �������.';
		$this->cp_location = '�����';
		$this->cp_login_first = '���� ���� ����� ����� ��� ���� ���� ����.';
		$this->cp_mar = '���';
		$this->cp_may = '���';
		$this->cp_msn = 'MSN ����\'�';
		$this->cp_must_orig = 'Your name must be identical to the original. You may only change the letter case and spacing.'; //Translate
		$this->cp_new_notmatch = 'The new passwords you entered do not match.'; //Translate
		$this->cp_new_pass = '����� ����';
		$this->cp_no_flash = 'Flash avatars are not allowed on this board.'; //Translate
		$this->cp_not_exist = 'The date you specified (%s) does not exist!'; //Translate
		$this->cp_nov = '������';
		$this->cp_oct = '�������';
		$this->cp_old_notmatch = 'The old password you entered does not match the one in our database.'; //Translate
		$this->cp_old_pass = '����� ����';
		$this->cp_pass_notvaid = 'Your password is not valid. Make sure it uses only valid characters such as letters, numbers, dashes, underscores, or spaces.'; //Translate
		$this->cp_preferences = '���� ������';
		$this->cp_privacy = 'Privacy Options'; //Translate
		$this->cp_repeat_pass = '���� �� ������ �����';
		$this->cp_sept = '������';
		$this->cp_show_active = 'Show your activities when you are using the board?'; //Translate
		$this->cp_show_email = 'Show email address in profile?'; //Translate
		$this->cp_signature = '�����';
		$this->cp_size_max = 'The avatar size you entered is too large. The maximum size allowed is %s by %s pixels.'; //Translate
		$this->cp_skin = '���� �� �����';
		$this->cp_sub_change = 'Changing Subscriptions'; //Translate
		$this->cp_sub_delete = 'Delete'; //Translate
		$this->cp_sub_expire = 'Expiration Date'; //Translate
		$this->cp_sub_name = 'Subscription Name'; //Translate
		$this->cp_sub_no_params = 'No parameters were given.'; //Translate
		$this->cp_sub_success = 'You are now subscribed to this %s.'; //Translate
		$this->cp_sub_type = 'Subscription Type'; //Translate
		$this->cp_sub_updated = 'Selected subscriptions have been deleted.'; //Translate
		$this->cp_topic_option = '�������� ������';
		$this->cp_updated = '������ �����';
		$this->cp_updated1 = '����� �����';
		$this->cp_updated_prefs = '������ ������';
		$this->cp_user_exists = 'A user with that name formatting already exists.'; //Translate
		$this->cp_valided = 'Your password was validated and changed.'; //Translate
		$this->cp_view_avatar = '���� �������?';
		$this->cp_view_emoticon = '���� �������?';
		$this->cp_view_signature = '���� ������?';
		$this->cp_welcome = '������ ����� ���� ���� ����. ��� ���� ���� ����� ������ �������� ������ ���� ��. ��� ���� ��������� ��� ��� �����.';
		$this->cp_width = '����';
		$this->cp_www = '�� ����';
		$this->cp_yahoo = 'Yahoo ����\'�';
		$this->cp_zone = '����� ����';
	}

	function email()
	{
		$this->email_blocked = 'That member is not accepting email through this form.'; //Translate
		$this->email_email = '���� ��������';
		$this->email_msgtext = 'Email Body:'; //Translate
		$this->email_no_fields = 'Go back and make sure that all fields are filled in.'; //Translate
		$this->email_no_member = 'No member was found by that name'; //Translate
		$this->email_no_perm = 'You do not have permission to send email through the board.'; //Translate
		$this->email_sent = '����� �����.';
		$this->email_subject = '����:';
		$this->email_to = '��:';
	}

	function forum()
	{
		$this->forum_by = '�� ���';
		$this->forum_can_post = '��� ���� ����� ������ ���.';
		$this->forum_can_topics = '��� ���� ����� ������ ������ ���.';
		$this->forum_cant_post = '��� �� ���� ����� ������ ���.';
		$this->forum_cant_topics = '��� �� ���� ����� ������ ������ ���.';
		$this->forum_dot = '�����';
		$this->forum_dot_detail = 'shows that you have posted in the topic'; //Translate
		$this->forum_forum = '�����';
		$this->forum_guest = '����';
		$this->forum_hot = '��';
		$this->forum_icon = '������ �� ����';
		$this->forum_jump = '���� ������ ������ �����';
		$this->forum_last = '����� ������';
		$this->forum_locked = '����';
		$this->forum_moved = '�����';
		$this->forum_msg = '%s �����';
		$this->forum_new = '���';
		$this->forum_new_poll = '���� ��� ���';
		$this->forum_new_topic = '���� ���� ���';
		$this->forum_no_topics = 'There are no topics to display for this forum.'; //Translate
		$this->forum_noexist = 'The specified forum does not exist.'; //Translate
		$this->forum_nopost = '��� ������';
		$this->forum_not = '��';
		$this->forum_noview = '��� �� ������ ����� �������� ����.';
		$this->forum_pages = '������';
		$this->forum_pinned = '����';
		$this->forum_pinned_topic = '���� ����';
		$this->forum_poll = '���';
		$this->forum_regfirst = 'You do not have permission to view forums. If you register, you may be able to.'; //Translate
		$this->forum_replies = '������';
		$this->forum_starter = '�����';
		$this->forum_sub = '��-�����';
		$this->forum_sub_last_post = '����� ������';
		$this->forum_sub_replies = '������';
		$this->forum_sub_topics = '������';
		$this->forum_subscribe = 'E-mail me when posts are made in this forum'; //Translate
		$this->forum_topic = '����';
		$this->forum_topics_new = 'There are new posts in this forum.'; //Translate
		$this->forum_topics_old = 'There are no new posts in this forum.'; //Translate
		$this->forum_views = '�����';
		$this->forum_write_topics = 'You can create topics in this forum.'; //Translate
	}

	function help()
	{
		$this->help_available_files = '����';
		$this->help_none = '��� ���� ���� ���� ������';
	}

	function login()
	{
		$this->login_cant_logged = 'You could not be logged in. Check to see that your user name and password are correct.<br /><br />They are case sensitive, so \'UsErNaMe\' is different from \'Username\'. Also, check to see that cookies are enabled in your browser.'; //Translate
		$this->login_cookies = 'Cookies must be enabled to login.'; //Translate
		$this->login_forgot_pass = 'Forgot your password?'; //Translate
		$this->login_header = '�����';
		$this->login_logged = '���� ����� �����\�.';
		$this->login_now_out = '���� ����� �����\�.';
		$this->login_out = '�����';
		$this->login_pass = '�����';
		$this->login_pass_no_id = 'There is no member with the user name you entered.'; //Translate
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Reset Password'; //Translate
		$this->login_pass_sent = 'Your password has been reset. The new password has been sent to the email address associated with your account.'; //Translate
		$this->login_sure = '��� ���� ���� ���� ������ � \'%s\'?';
		$this->login_user = '�� �����';
	}

	function main()
	{
		$this->board_by = '�� ���';
		$this->charset = 'windows-1255';
		$this->direction = 'rtl';
		$this->main_activate = 'Your account has not yet been activated.'; //Translate
		$this->main_activate_resend = 'Resend Activation Email'; //Translate
		$this->main_admincp = '��� ���� �� ����';
		$this->main_banned = 'You have been banned from viewing any portion of this board.'; //Translate
		$this->main_code = '���';
		$this->main_continue = '����';
		$this->main_cp = '��� ����';
		$this->main_full = '���';
		$this->main_help = '����';
		$this->main_load = '����';
		$this->main_login = '�����';
		$this->main_logout = '�����';
		$this->main_max_load = 'We are sorry, but %s is currently unavailable, due to a massive amount of connected users.'; //Translate
		$this->main_members = '�������';
		$this->main_messenger = '������ ������';
		$this->main_new = '���';
		$this->main_next = '���';
		$this->main_posts_new = '���';
		$this->main_powered = '����� �� ���';
		$this->main_prev = '�����';
		$this->main_queries = '�������';
		$this->main_quote = '�����';
		$this->main_register = '�����';
		$this->main_reminder = 'Reminder: The board is closed, and only viewable to admins.';
		$this->main_reminder_closed = 'The board is closed and only viewable to admins.'; //Translate
		$this->main_said = 'said'; //Translate
		$this->main_search = '�����';
		$this->main_seconds = '�����';
		$this->main_welcome = '���� ���';
		$this->main_welcome_guest = '���� ���!';
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = ','; //Translate
		$this->submit = '�����';
		$this->today = 'Today'; //Translate
		$this->yesterday = 'Yesterday'; //Translate
	}

	function members()
	{
		$this->members_all = '���';
		$this->members_email = '���� ��������';
		$this->members_email_member = '��� ���� �������� ������';
		$this->members_group = '�����';
		$this->members_joined = '����� �������';
		$this->members_list = '����� �������';
		$this->members_member = '�����';
		$this->members_pm = '����� �����';
		$this->members_posts = '������';
		$this->members_send_pm = '��� ����� ����� ������';
		$this->members_title = '�����';
		$this->members_vist_www = '��� ���� ���� �� �����';
		$this->members_www = '��� ����';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Are you sure you want to delete this post?'; //Translate
		$this->mod_confirm_topic_delete = 'Are you sure you want to delete the topic?'; //Translate
		$this->mod_error_first_post = 'You can not delete the first post in a topic.';
		$this->mod_error_move_category = 'You can not move a topic to a category.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'You can not move a topic to a forum that does not exist.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'You can not move a topic to the forum it is already in.';
		$this->mod_label_controls = 'Moderator Controls'; //Translate
		$this->mod_label_description = 'Description'; //Translate
		$this->mod_label_emoticon = 'Convert emoticons into images?'; //Translate
		$this->mod_label_global = 'Global Topic'; //Translate
		$this->mod_label_mbcode = 'Format MbCode?'; //Translate
		$this->mod_label_move_to = 'Move to'; //Translate
		$this->mod_label_options = 'Options'; //Translate
		$this->mod_label_post_delete = 'Delete Post'; //Translate
		$this->mod_label_post_edit = 'Edit Post'; //Translate
		$this->mod_label_title = 'Title'; //Translate
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Split Title'; //Translate
		$this->mod_label_topic_delete = 'Delete Topic'; //Translate
		$this->mod_label_topic_edit = 'Edit Topic'; //Translate
		$this->mod_label_topic_lock = 'Lock Topic'; //Translate
		$this->mod_label_topic_move = 'Move Topic'; //Translate
		$this->mod_label_topic_move_complete = 'Completely transfer the topic to the new forum'; //Translate
		$this->mod_label_topic_move_link = 'Transfer the topic to the new forum, and leave a link to its new location in the old forum.'; //Translate
		$this->mod_label_topic_pin = 'Pin Topic'; //Translate
		$this->mod_label_topic_split = 'Split Topic'; //Translate
		$this->mod_missing_post = 'The specified post does not exist.'; //Translate
		$this->mod_missing_topic = 'The specified topic does not exist.'; //Translate
		$this->mod_no_action = 'You must specify an action.'; //Translate
		$this->mod_no_post = 'You must specify a post.'; //Translate
		$this->mod_no_topic = 'You must specify a topic.'; //Translate
		$this->mod_perm_post_delete = 'You do not have permission to delete this post.'; //Translate
		$this->mod_perm_post_edit = 'You do not have permission to edit this post.'; //Translate
		$this->mod_perm_topic_delete = 'You do not have permission to delete this topic.'; //Translate
		$this->mod_perm_topic_edit = 'You do not have permission to edit this topic.'; //Translate
		$this->mod_perm_topic_lock = 'You do not have permission to lock this topic.'; //Translate
		$this->mod_perm_topic_move = 'You do not have permission to move this topic.'; //Translate
		$this->mod_perm_topic_pin = 'You do not have permission to pin this topic.'; //Translate
		$this->mod_perm_topic_split = 'You do not have permission to split this topic.'; //Translate
		$this->mod_perm_topic_unlock = 'You do not have permission to unlock this topic.'; //Translate
		$this->mod_perm_topic_unpin = 'You do not have permission to unpin this topic.'; //Translate
		$this->mod_success_post_delete = 'The post was successfully deleted.'; //Translate
		$this->mod_success_post_edit = 'The post was successfully edited.'; //Translate
		$this->mod_success_split = 'The topic was successfully split.'; //Translate
		$this->mod_success_topic_delete = 'The topic was successfully deleted.'; //Translate
		$this->mod_success_topic_edit = 'The topic was successfully edited.'; //Translate
		$this->mod_success_topic_move = 'The topic was successfully moved to a new forum.'; //Translate
	}

	function new_posts()
	{
		$this->new_posts_dot = '�����';
		$this->new_posts_dot_detail = 'shows that you have posted in the topic'; //Translate
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = '�����';
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = '��';
		$this->new_posts_last = '����� ������';
		$this->new_posts_locked = '����';
		$this->new_posts_moved = '�����';
		$this->new_posts_new = '���';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = '��';
		$this->new_posts_pinned = '����';
		$this->new_posts_poll = '���';
		$this->new_posts_topic = '����';
	}

	function pm()
	{
		$this->pm_avatar = 'Avatar'; //Translate
		$this->pm_buddy = 'Buddy'; //Translate
		$this->pm_buddy_added = 'This user has been addded to your buddies list'; //Translate
		$this->pm_buddy_already_added = 'This user has already been added to your buddy list'; //Translate
		$this->pm_buddy_drop = 'use the drop down menu to select a Buddy'; //Translate
		$this->pm_buddy_email_member = 'Email this buddy'; //Translate
		$this->pm_buddy_error_id = 'There is no member with that user id. The account may have been deleted.'; //Translate
		$this->pm_buddy_list = 'Buddy List'; //Translate
		$this->pm_buddy_none = 'There are currently no members in your buddy list'; //Translate
		$this->pm_buddy_select = 'Select a Buddy'; //Translate
		$this->pm_buddy_send_pm = 'Send this buddy a personal message'; //Translate
		$this->pm_cant_del = '��� �� ����� ���� ����� ��.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = '��� �� �������';
		$this->pm_delete = '���';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = '����� �����.';
		$this->pm_deleted_all = '������ �����.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Your message could not be send. Make sure all required fields are filled in.'; //Translate
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = '���� ����';
		$this->pm_folder_new = '%s ���';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = '�';
		$this->pm_group = '�����';
		$this->pm_guest = 'As a guest, you can not use the messenger. Please login or register.';
		$this->pm_joined = '�����';
		$this->pm_messenger = '����\'� ����';
		$this->pm_msgtext = '���� �����';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'You must specify a folder.'; //Translate
		$this->pm_no_member = 'No member was found with that id.'; //Translate
		$this->pm_no_number = 'No message was found with that number.'; //Translate
		$this->pm_no_title = '��� ����';
		$this->pm_nomsg = 'There are no messages in this folder.'; //Translate
		$this->pm_noview = 'You do not have permission to view this message.'; //Translate
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = '����\'� ����';
		$this->pm_personal_msging = '���� �����';
		$this->pm_pm = '����� �����';
		$this->pm_posts = '������';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Reply'; //Translate
		$this->pm_send = ' ��� ';
		$this->pm_sendamsg = '��� ����� �����';
		$this->pm_sendingpm = '���� ����� �����';
		$this->pm_sendon = '���� �';
		$this->pm_success = '����� ��� ���� ������.';
		$this->pm_sure_del = '���� ����\� ������� ����� ����� ��?';
		$this->pm_sure_delall = '���� ���� ������� ����� �� �������?';
		$this->pm_title = '�����';
		$this->pm_to = '��';
	}

	function post()
	{
		$this->post_attach = 'Attachments'; //Translate
		$this->post_attach_add = 'Add Attachment'; //Translate
		$this->post_attach_disrupt = 'Adding or removing attachments will not disrupt your post.'; //Translate
		$this->post_attach_failed = 'The attachment upload failed. The file you specified may not exist.'; //Translate
		$this->post_attach_not_allowed = 'You cannot attach files of that type.'; //Translate
		$this->post_attach_remove = 'Remove Attachment'; //Translate
		$this->post_attach_too_large = 'The attachment you specified to upload is too large. The maximum size is %d kilobytes.';
		$this->post_cant_create = 'As a guest, you do not have permission to create topics. If you register, you may be able to create topics.'; //Translate
		$this->post_cant_create1 = 'You do not have permission to create topics.'; //Translate
		$this->post_cant_enter = 'Your vote could not be entered. Either you have already voted in this poll, or you do not have permission to vote.'; //Translate
		$this->post_cant_poll = 'As a guest, you do not have permission to create polls. If you register, you may be able to create them.'; //Translate
		$this->post_cant_poll1 = 'You do not have permission to create polls.'; //Translate
		$this->post_cant_reply = 'You do not have permission to reply to topics in this forum.'; //Translate
		$this->post_cant_reply1 = 'As a guest, you do not have permission to reply to topics. If you register, you may be able to post.'; //Translate
		$this->post_cant_reply2 = 'You do not have permission to reply to topics.'; //Translate
		$this->post_closed = 'This topic has been closed.'; //Translate
		$this->post_create_poll = 'Create Poll'; //Translate
		$this->post_create_topic = 'Create Topic'; //Translate
		$this->post_creating = 'Creating Topic'; //Translate
		$this->post_creating_poll = 'Creating Poll'; //Translate
		$this->post_flood = 'You have posted in the past %s seconds, and you may not post right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->post_guest = 'Guest'; //Translate
		$this->post_icon = 'Post Icon'; //Translate
		$this->post_last_five = 'Last Five Posts In Reverse Order'; //Translate
		$this->post_length = 'Check Length'; //Translate
		$this->post_mbcode_address = 'Enter an address'; //Translate
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Blue'; //Translate
		$this->post_mbcode_bold = 'Bold'; //Translate
		$this->post_mbcode_bold1 = 'B'; //Translate
		$this->post_mbcode_chocolate = 'Chocolate'; //Translate
		$this->post_mbcode_code = 'Code'; //Translate
		$this->post_mbcode_color = 'Color'; //Translate
		$this->post_mbcode_coral = 'Coral'; //Translate
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Crimson'; //Translate
		$this->post_mbcode_darkblue = 'Dark Blue'; //Translate
		$this->post_mbcode_darkred = 'Dark Red'; //Translate
		$this->post_mbcode_deepink = 'Deep Pink'; //Translate
		$this->post_mbcode_detail = 'Enter a description'; //Translate
		$this->post_mbcode_email = 'Email'; //Translate
		$this->post_mbcode_firered = 'Firebrick Red'; //Translate
		$this->post_mbcode_font = 'Font'; //Translate
		$this->post_mbcode_green = 'Green'; //Translate
		$this->post_mbcode_huge = 'Huge'; //Translate
		$this->post_mbcode_image = 'Image'; //Translate
		$this->post_mbcode_image1 = 'IMG'; //Translate
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Italic'; //Translate
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Large'; //Translate
		$this->post_mbcode_length = 'Your post is "+length+" characters.'; //Translate
		$this->post_mbcode_limegreen = 'Lime Green'; //Translate
		$this->post_mbcode_medium = 'Medium'; //Translate
		$this->post_mbcode_orange = 'Orange'; //Translate
		$this->post_mbcode_orangered = 'Orange Red'; //Translate
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Purple'; //Translate
		$this->post_mbcode_quote = 'Quote'; //Translate
		$this->post_mbcode_red = 'Red'; //Translate
		$this->post_mbcode_royalblue = 'Royal Blue'; //Translate
		$this->post_mbcode_sandybrown = 'Sandy Brown'; //Translate
		$this->post_mbcode_seagreen = 'Sea Green'; //Translate
		$this->post_mbcode_sienna = 'Sienna'; //Translate
		$this->post_mbcode_silver = 'Silver'; //Translate
		$this->post_mbcode_size = 'Size'; //Translate
		$this->post_mbcode_skyblue = 'Sky Blue'; //Translate
		$this->post_mbcode_small = 'Small'; //Translate
		$this->post_mbcode_strike = 'Strikethrough'; //Translate
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Teal'; //Translate
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Tiny'; //Translate
		$this->post_mbcode_tomato = 'Tomato'; //Translate
		$this->post_mbcode_underline = 'Underline'; //Translate
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Burly Wood'; //Translate
		$this->post_msg = 'Message'; //Translate
		$this->post_must_msg = 'You must include a message when posting.'; //Translate
		$this->post_must_options = 'You must include options when creating a new poll.'; //Translate
		$this->post_must_title = 'You must include a title when creating a new topic.'; //Translate
		$this->post_new_poll = 'New poll'; //Translate
		$this->post_new_topic = 'New topic'; //Translate
		$this->post_no_forum = 'That forum was not found.'; //Translate
		$this->post_no_topic = 'No topic was specified.'; //Translate
		$this->post_no_vote = 'You must choose an option to vote for.'; //Translate
		$this->post_option_emoticons = 'Convert emoticons into images?'; //Translate
		$this->post_option_global = 'Make this topic global?'; //Translate
		$this->post_option_mbcode = 'Format MbCode?'; //Translate
		$this->post_optional = 'optional'; //Translate
		$this->post_options = 'Options'; //Translate
		$this->post_poll_options = 'Poll Options'; //Translate
		$this->post_poll_row = 'One per line'; //Translate
		$this->post_posted = 'Posted on';
		$this->post_posting = 'Posting'; //Translate
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Reply'; //Translate
		$this->post_reply_topic = 'Reply to topic'; //Translate
		$this->post_replying = 'Replying To Topic'; //Translate
		$this->post_replying1 = 'Replying'; //Translate
		$this->post_smiles = 'Clickable Smilies'; //Translate
		$this->post_too_many_options = 'You must have between 2 and %d options to a poll.'; //Translate
		$this->post_topic_detail = 'Topic Description'; //Translate
		$this->post_topic_title = 'Topic Title'; //Translate
		$this->post_view_topic = 'View Entire Topic'; //Translate
		$this->post_voting = 'Voting'; //Translate
	}

	function printer()
	{
		$this->printer_back = 'Back'; //Translate
		$this->printer_not_found = 'The topic could not be found. It may have been deleted, moved, or may have never existed.'; //Translate
		$this->printer_not_found_title = 'Topic Not Found'; //Translate
		$this->printer_perm_topics = 'You do not have permission to view topics.'; //Translate
		$this->printer_perm_topics_guest = 'You do not have permission to view topics. If you register, you may be able to.'; //Translate
		$this->printer_posted_on = 'Posted on';
		$this->printer_send = 'Send to printer'; //Translate
	}

	function profile()
	{
		$this->profile_aim_sn = '�� ����� �� AIM';
		$this->profile_av_sign = '����� ������';
		$this->profile_avatar = '�����';
		$this->profile_bday = '��� �����';
		$this->profile_contact = '����� ���';
		$this->profile_email_address = '����� ���� ��������';
		$this->profile_fav = 'Favorite Forum'; //Translate
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_icq_uin = '���� ICQ';
		$this->profile_info = '����';
		$this->profile_interest = '����� ����������';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = '����� ������';
		$this->profile_list = 'Member List'; //Translate
		$this->profile_location = '�����';
		$this->profile_member = '����� �����';
		$this->profile_member_title = '�����';
		$this->profile_msn = 'MSN ����\'�';
		$this->profile_must_user = 'You must enter a user to view a profile.'; //Translate
		$this->profile_no_member = 'There is no member with that user id. The account may have been deleted.'; //Translate
		$this->profile_none = '[ ��� ]';
		$this->profile_not_post = '�� ��� ������.';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Private Messages'; //Translate
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = '������';
		$this->profile_private = '[ ���� ]';
		$this->profile_profile = '������';
		$this->profile_signature = '�����';
		$this->profile_unkown = '[ �� ���� ]';
		$this->profile_view_profile = '���� ������� ��';
		$this->profile_www = '��� ����';
		$this->profile_yahoo = '���� ����\'�';
	}

	function register()
	{
		$this->register_activated = 'Your account has been activated!'; //Translate
		$this->register_activating = 'Account Activation'; //Translate
		$this->register_activation_error = 'There was an error while activating your account. Check to see if your browser contains the full url in the activation email. If the problem persists, contact the board administrator to have your email resent.'; //Translate
		$this->register_confirm_passwd = 'Confirm Password'; //Translate
		$this->register_done = 'You have been registered! You can now login.'; //Translate
		$this->register_email = 'Email Address'; //Translate
		$this->register_email_invalid = 'The email address you entered is invalid.'; //Translate
		$this->register_email_used = 'The email address you entered is already assigned to a member.'; //Translate
		$this->register_fields = 'Not all fields are filled in.'; //Translate
		$this->register_image = 'Please type the text shown in the image.'; //Translate
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.'; //Translate
		$this->register_must_activate = 'You have been registered. An email has been sent to %s with information on how to activate your account. Your account will be limited until you activate it.'; //Translate
		$this->register_name_invalid = 'The name you entered is too long.'; //Translate
		$this->register_name_taken = 'That member name is already taken.'; //Translate
		$this->register_new_user = 'Desired User Name'; //Translate
		$this->register_pass_invalid = 'The password you entered is not valid. Make sure it uses only valid characters such as letters, numbers, dashes, underscores, or spaces, and is at least 5 characters.'; //Translate
		$this->register_pass_match = 'The passwords you entered do not match.'; //Translate
		$this->register_passwd = 'Password'; //Translate
		$this->register_reg = 'Register'; //Translate
		$this->register_reging = 'Registering'; //Translate
	}

	function search()
	{
		$this->search_advanced = '�������� �������';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = '����� �����';
		$this->search_characters = 'characters of a post'; //Translate
		$this->search_day = '���';
		$this->search_days = '����';
		$this->search_exact_name = 'exact name'; //Translate
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = '��� ���';
		$this->search_forum = '�����';
		$this->search_group = 'Group'; //Translate
		$this->search_guest = '����';
		$this->search_in = '��� �';
		$this->search_in_posts = 'Only search in posts'; //Translate
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Joined'; //Translate
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'Search by matching'; //Translate
		$this->search_matches = 'Matches'; //Translate
		$this->search_month = '����';
		$this->search_months = '������';
		$this->search_mysqldoc = 'MySQL Documentation'; //Translate
		$this->search_newer = 'newer'; //Translate
		$this->search_no_results = 'Your search returned no results.'; //Translate
		$this->search_no_words = 'You must specify some search terms.<br /><br />Each term must be longer than 3 characters, including letters, numbers, apostrophes, and underscores.'; //Translate
		$this->search_older = 'older'; //Translate
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Only display first'; //Translate
		$this->search_partial_name = 'partial name'; //Translate
		$this->search_post_icon = 'Post Icon'; //Translate
		$this->search_posted_on = 'Posted on';
		$this->search_posts = '������';
		$this->search_posts_by = 'Only in posts by'; //Translate
		$this->search_regex = 'Search by regular expression'; //Translate
		$this->search_regex_failed = 'Your regular expression failed. Please see the MySQL documentation for regular expression help.'; //Translate
		$this->search_relevance = 'Post Relevance: %d%%'; //Translate
		$this->search_replies = '������';
		$this->search_result = 'Search Results'; //Translate
		$this->search_search = ' ��� ';
		$this->search_select_all = '��� ���';
		$this->search_show_posts = 'Show matched posts'; //Translate
		$this->search_sound = 'Search by sound'; //Translate
		$this->search_starter = 'Starter'; //Translate
		$this->search_than = 'than'; //Translate
		$this->search_topic = '����';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = '����';
		$this->search_weeks = '������';
		$this->search_year = '���';
	}

	function topic()
	{
		$this->topic_attached = 'Attached file:'; //Translate
		$this->topic_attached_downloads = '������';
		$this->topic_attached_perm = 'You do not have permission to download this file.'; //Translate
		$this->topic_attached_title = 'Attached File'; //Translate
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Create New Poll'; //Translate
		$this->topic_create_topic = 'Create New Topic'; //Translate
		$this->topic_delete = '���';
		$this->topic_delete_post = 'Delete this post'; //Translate
		$this->topic_edit = '�����';
		$this->topic_edit_post = 'Edit this post'; //Translate
		$this->topic_edited = 'Last edited on %s by %s';
		$this->topic_error = '�����';
		$this->topic_group = '�����';
		$this->topic_guest = '����';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = '����� �������';
		$this->topic_level = '��� �� �����';
		$this->topic_links_aim = 'Send an AIM message to %s'; //Translate
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Send an email to %s'; //Translate
		$this->topic_links_icq = 'Send an ICQ messsage to %s'; //Translate
		$this->topic_links_msn = 'View %s\'s MSN profile'; //Translate
		$this->topic_links_pm = 'Send a personal messsage to %s'; //Translate
		$this->topic_links_web = 'Visit %s\'s web site'; //Translate
		$this->topic_links_yahoo = 'Send a message to %s with Yahoo! Messenger'; //Translate
		$this->topic_lock = '���';
		$this->topic_locked = '���� ����';
		$this->topic_move = '����';
		$this->topic_no_votes = 'There are no votes for this poll.'; //Translate
		$this->topic_not_found = '����� �� ����';
		$this->topic_not_found_message = 'The topic could not be found. It may have been deleted, moved, perhaps never existed.'; //Translate
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = '�������� ����';
		$this->topic_pages = '������';
		$this->topic_perm_view = 'You do not have permission to view topics.'; //Translate
		$this->topic_perm_view_guest = 'You do not have permission to view topics. If you register, you may be able to.'; //Translate
		$this->topic_pin = '���';
		$this->topic_posted = 'Posted'; //Translate
		$this->topic_posts = '������';
		$this->topic_print = 'View Printable'; //Translate
		$this->topic_quote = 'Reply with a quote from this post'; //Translate
		$this->topic_reply = 'Reply to Topic'; //Translate
		$this->topic_split = 'Split'; //Translate
		$this->topic_split_finish = 'Finish All Splitting'; //Translate
		$this->topic_split_keep = 'Do not move this post'; //Translate
		$this->topic_split_move = 'Move this post'; //Translate
		$this->topic_subscribe = 'E-mail me when replies are made to this topic'; //Translate
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = '��� �����';
		$this->topic_unpin = '��� �����';
		$this->topic_unreg = '�� ����';
		$this->topic_view = '���� ������';
		$this->topic_viewing = 'Viewing Topic'; //Translate
		$this->topic_vote = '�����';
		$this->topic_vote_count_plur = '%d ������';
		$this->topic_vote_count_sing = '%d �����';
		$this->topic_votes = '������';
	}
}
?>