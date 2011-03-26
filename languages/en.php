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
 * $Id: en.php,v 1.110 2006/07/26 17:56:18 jon Exp $
 **/

/**
 * English language module
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since 1.0.0 Beta 3.0
 **/
class en
{
	function active()
	{
		$this->active_last_action = 'Last Action';
		$this->active_modules_active = 'Viewing the active users';
		$this->active_modules_board = 'Viewing the board index';
		$this->active_modules_cp = 'Using the control panel';
		$this->active_modules_forum = 'Viewing a forum: %s';
		$this->active_modules_help = 'Viewing a help topic';
		$this->active_modules_login = 'Logging in or out';
		$this->active_modules_members = 'Viewing the member list';
		$this->active_modules_mod = 'Moderating';
		$this->active_modules_pm = 'Using the messenger';
		$this->active_modules_post = 'Posting';
		$this->active_modules_printer = 'Printing a topic: %s';
		$this->active_modules_profile = 'Viewing a profile: %s';
		$this->active_modules_search = 'Searching';
		$this->active_modules_topic = 'Viewing a topic: %s';
		$this->active_time = 'Time';
		$this->active_user = 'User';
		$this->active_users = 'Active Users';
	}

	function board()
	{
		$this->board_active_users = 'Active Users';
		$this->board_birthdays = 'Today\'s Birthdays';
		$this->board_can_post = 'You can reply in this forum.';
		$this->board_can_topics = 'You can view but not create topics in this forum.';
		$this->board_cant_post = 'You cannot reply in this forum.';
		$this->board_cant_topics = 'You cannot view or create topics in this forum.';
		$this->board_forum = 'Forum';
		$this->board_guests = 'guests';
		$this->board_last_post = 'Last Post';
		$this->board_mark = 'Marking Posts As Read';
		$this->board_mark1 = 'All posts and forums have been marked as read.';
		$this->board_members = 'members';
		$this->board_message = '%s Message';
		$this->board_most_online = 'The most users ever online was %d on %s.';
		$this->board_nobday = 'There are no member birthdays today.';
		$this->board_nobody = 'There are currently no members online.';
		$this->board_nopost = 'No Posts';
		$this->board_noview = 'You do not have permission to view the board.';
		$this->board_regfirst = 'You do not have permission to view the board. If you register, you may be able to.';
		$this->board_replies = 'Replies';
		$this->board_stats = 'Statistics';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.';
		$this->board_topics = 'Topics';
		$this->board_topics_new = 'There are new posts in this forum.';
		$this->board_topics_old = 'There are no new posts in this forum.';
		$this->board_users = 'users';
		$this->board_write_topics = 'You can view and create topics in this forum.';
	}

	function cp()
	{
		$this->cp_aim = 'AIM Screen Name';
		$this->cp_already_member = 'The email address you entered is already assigned to a member.';
		$this->cp_apr = 'April';
		$this->cp_aug = 'August';
		$this->cp_avatar_current = 'Your current avatar';
		$this->cp_avatar_error = 'Avatar Error';
		$this->cp_avatar_must_select = 'You must select an avatar.';
		$this->cp_avatar_none = 'Do not use an avatar';
		$this->cp_avatar_pixels = 'pixels';
		$this->cp_avatar_select = 'Select an avatar';
		$this->cp_avatar_size_height = 'Your avatar height must be between 1 and';
		$this->cp_avatar_size_width = 'Your avatar width must be between 1 and';
		$this->cp_avatar_upload = 'Upload an avatar from your hard drive';
		$this->cp_avatar_upload_failed = 'The avatar upload failed. The file you specified may not exist.';
		$this->cp_avatar_upload_not_image = 'You can only upload images to be used for your avatar.';
		$this->cp_avatar_upload_too_large = 'The avatar you specified to upload is too large. The maximum size is %d kilobytes.';
		$this->cp_avatar_url = 'Specify a URL for your avatar';
		$this->cp_avatar_use = 'Use your uploaded avatar';
		$this->cp_bday = 'Birthday';
		$this->cp_been_updated = 'Your profile has been updated.';
		$this->cp_been_updated1 = 'Your avatar has been updated.';
		$this->cp_been_updated_prefs = 'Your preferences have been updated.';
		$this->cp_changing_pass = 'Editing Password';
		$this->cp_contact_pm = 'Allow others to contact you via the messenger?';
		$this->cp_cp = 'Control Panel';
		$this->cp_current_avatar = 'Current Avatar';
		$this->cp_current_time = 'It is currently %s.';
		$this->cp_dec = 'December';
		$this->cp_editing_avatar = 'Editing Avatar';
		$this->cp_editing_profile = 'Editing Profile';
		$this->cp_email = 'Email';
		$this->cp_email_form = 'Allow others to contact you via the email form?';
		$this->cp_email_invaid = 'The email address you entered is invalid.';
		$this->cp_err_avatar = 'Error Updating Avatar';
		$this->cp_err_updating = 'Error Updating Profile';
		$this->cp_feb = 'February';
		$this->cp_file_type = 'The avatar you entered is not valid. Make sure the url is correctly formatted, and the file type is either gif, jpg, or png.';
		$this->cp_format = 'Name Formatting';
		$this->cp_gmt = '[GMT] Greenwich Mean Time';
		$this->cp_gmt_nev1 = '[GMT-1:00] Azores, Cape Verde';
		$this->cp_gmt_nev10 = '[GMT-10:00] Hawaii';
		$this->cp_gmt_nev11 = '[GMT-11:00] Midway Island, Samoa';
		$this->cp_gmt_nev12 = '[GMT-12:00] International Date Line West';
		$this->cp_gmt_nev2 = '[GMT-2:00] Mid-Atlantic';
		$this->cp_gmt_nev3 = '[GMT-3:00] Buenos Aires, Greenland';
		$this->cp_gmt_nev35 = '[GMT-3:30] Newfoundland';
		$this->cp_gmt_nev4 = '[GMT-4:00] Atlantic Time Canada';
		$this->cp_gmt_nev5 = '[GMT-5:00] Eastern Time US & Canada';
		$this->cp_gmt_nev6 = '[GMT-6:00] Central Time US & Canada';
		$this->cp_gmt_nev7 = '[GMT-7:00] Mountain Time US & Canada';
		$this->cp_gmt_nev8 = '[GMT-8:00] Pacific Time US & Canada';
		$this->cp_gmt_nev9 = '[GMT-9:00] Alaska';
		$this->cp_gmt_pos1 = '[GMT+1:00] Amsterdam, Berlin, Rome, Paris';
		$this->cp_gmt_pos10 = '[GMT+10:00] Melbourne, Sydney, Guam';
		$this->cp_gmt_pos11 = '[GMT+11:00] Magadan, New Caledonia';
		$this->cp_gmt_pos12 = '[GMT+12:00] Auckland, Fiji';
		$this->cp_gmt_pos2 = '[GMT+2:00] Athens, Cairo, Jerusalem';
		$this->cp_gmt_pos3 = '[GMT+3:00] Baghdad, Moscow, Nairobi';
		$this->cp_gmt_pos35 = '[GMT+3:30] Tehran';
		$this->cp_gmt_pos4 = '[GMT+4:00] Abu Dhabi, Muscat, Tbilisi';
		$this->cp_gmt_pos45 = '[GMT+4:30] Kabul';
		$this->cp_gmt_pos5 = '[GMT+5:00] Islamabad, Karachi';
		$this->cp_gmt_pos55 = '[GMT+5:30] Bombay, Calcutta, New Delhi';
		$this->cp_gmt_pos6 = '[GMT+6:00] Almaty, Dhaka';
		$this->cp_gmt_pos7 = '[GMT+7:00] Bangkok, Jakarta';
		$this->cp_gmt_pos8 = '[GMT+8:00] Beijing, Hong Kong, Singapore';
		$this->cp_gmt_pos9 = '[GMT+9:00] Tokyo, Seoul';
		$this->cp_gmt_pos95 = '[GMT+9:30] Adelaide, Darwin';
		$this->cp_header = 'User Control Panel';
		$this->cp_height = 'Height';
		$this->cp_icq = 'ICQ Number';
		$this->cp_interest = 'Interests';
		$this->cp_jan = 'January';
		$this->cp_july = 'July';
		$this->cp_june = 'June';
		$this->cp_label_edit_avatar = 'Edit Avatar';
		$this->cp_label_edit_pass = 'Edit Password';
		$this->cp_label_edit_prefs = 'Edit Preferences';
		$this->cp_label_edit_profile = 'Edit Profile';
		$this->cp_label_edit_subs = 'Edit Subscriptions';
		$this->cp_language = 'Language';
		$this->cp_less_charac = 'Your name must be less than 32 characters.';
		$this->cp_location = 'Location';
		$this->cp_login_first = 'You must be logged in to access your control panel.';
		$this->cp_mar = 'March';
		$this->cp_may = 'May';
		$this->cp_msn = 'MSN Identity';
		$this->cp_must_orig = 'Your name must be identical to the original. You may only change the letter case and spacing.';
		$this->cp_new_notmatch = 'The new passwords you entered do not match.';
		$this->cp_new_pass = 'New Password';
		$this->cp_no_flash = 'Flash avatars are not allowed on this board.';
		$this->cp_not_exist = 'The date you specified (%s) does not exist!';
		$this->cp_nov = 'November';
		$this->cp_oct = 'October';
		$this->cp_old_notmatch = 'The old password you entered does not match the one in our database.';
		$this->cp_old_pass = 'Old Password';
		$this->cp_pass_notvaid = 'Your password is not valid. Make sure it uses only valid characters such as letters, numbers, dashes, underscores, or spaces.';
		$this->cp_preferences = 'Changing Preferences';
		$this->cp_privacy = 'Privacy Options';
		$this->cp_repeat_pass = 'Repeat New Password';
		$this->cp_sept = 'September';
		$this->cp_show_active = 'Show your activities when you are using the board?';
		$this->cp_show_email = 'Show email address in profile?';
		$this->cp_signature = 'Signature';
		$this->cp_size_max = 'The avatar size you entered is too large. The maximum size allowed is %s by %s pixels.';
		$this->cp_skin = 'Board Skin';
		$this->cp_sub_change = 'Changing Subscriptions';
		$this->cp_sub_delete = 'Delete';
		$this->cp_sub_expire = 'Expiration Date';
		$this->cp_sub_name = 'Subscription Name';
		$this->cp_sub_no_params = 'No parameters were given.';
		$this->cp_sub_success = 'You are now subscribed to this %s.';
		$this->cp_sub_type = 'Subscription Type';
		$this->cp_sub_updated = 'Selected subscriptions have been deleted.';
		$this->cp_topic_option = 'Topic Options';
		$this->cp_updated = 'Profile Updated';
		$this->cp_updated1 = 'Avatar Updated';
		$this->cp_updated_prefs = 'Preferences Updated';
		$this->cp_user_exists = 'A user with that name formatting already exists.';
		$this->cp_valided = 'Your password was validated and changed.';
		$this->cp_view_avatar = 'View Avatars?';
		$this->cp_view_emoticon = 'View Emoticons?';
		$this->cp_view_signature = 'View Signatures?';
		$this->cp_welcome = 'Welcome to the user control panel. From here, you can configure your account. Please choose from the options above.';
		$this->cp_width = 'Width';
		$this->cp_www = 'Homepage';
		$this->cp_yahoo = 'Yahoo Identity';
		$this->cp_zone = 'Time Zone';
	}

	function email()
	{
		$this->email_blocked = 'That member is not accepting email through this form.';
		$this->email_email = 'Email';
		$this->email_msgtext = 'Email Body:';
		$this->email_no_fields = 'Go back and make sure that all fields are filled in.';
		$this->email_no_member = 'No member was found by that name';
		$this->email_no_perm = 'You do not have permission to send email through the board.';
		$this->email_sent = 'Your email has been sent.';
		$this->email_subject = 'Subject:';
		$this->email_to = 'To:';
	}

	function forum()
	{
		$this->forum_by = 'By';
		$this->forum_can_post = 'You can reply in this forum.';
		$this->forum_can_topics = 'You can view topics in this forum.';
		$this->forum_cant_post = 'You cannot reply in this forum.';
		$this->forum_cant_topics = 'You cannot view topics in this forum.';
		$this->forum_dot = 'dot';
		$this->forum_dot_detail = 'shows that you have posted in the topic';
		$this->forum_forum = 'Forum';
		$this->forum_guest = 'Guest';
		$this->forum_hot = 'Hot';
		$this->forum_icon = 'Message Icon';
		$this->forum_jump = 'Jump to newest post in topic';
		$this->forum_last = 'Last Post';
		$this->forum_locked = 'Locked';
		$this->forum_moved = 'Moved';
		$this->forum_msg = '%s Message';
		$this->forum_new = 'New';
		$this->forum_new_poll = 'Create New Poll';
		$this->forum_new_topic = 'Create New Topic';
		$this->forum_no_topics = 'There are no topics to display for this forum.';
		$this->forum_noexist = 'The specified forum does not exist.';
		$this->forum_nopost = 'No posts';
		$this->forum_not = 'Not';
		$this->forum_noview = 'You do not have permission to view forums.';
		$this->forum_pages = 'Pages';
		$this->forum_pinned = 'Pinned';
		$this->forum_pinned_topic = 'Pinned Topic';
		$this->forum_poll = 'Poll';
		$this->forum_regfirst = 'You do not have permission to view forums. If you register, you may be able to.';
		$this->forum_replies = 'Replies';
		$this->forum_starter = 'Starter';
		$this->forum_sub = 'Sub-Forum';
		$this->forum_sub_last_post = 'Last Post';
		$this->forum_sub_replies = 'Replies';
		$this->forum_sub_topics = 'Topics';
		$this->forum_subscribe = 'E-mail me when posts are made in this forum';
		$this->forum_topic = 'Topic';
		$this->forum_topics_new = 'There are new posts in this forum.';
		$this->forum_topics_old = 'There are no new posts in this forum.';
		$this->forum_views = 'Views';
		$this->forum_write_topics = 'You can create topics in this forum.';
	}

	function help()
	{
		$this->help_available_files = 'Help';
		$this->help_none = 'There are no help files in the database.';
	}

	function login()
	{
		$this->login_cant_logged = 'You could not be logged in. Check to see that your user name and password are correct.<br /><br />They are case sensitive, so \'UsErNaMe\' is different from \'Username\'. Also, check to see that cookies are enabled in your browser.';
		$this->login_cookies = 'Cookies must be enabled to login.';
		$this->login_forgot_pass = 'Forgot your password?';
		$this->login_header = 'Logging In';
		$this->login_logged = 'You are now logged in.';
		$this->login_now_out = 'You are now logged out.';
		$this->login_out = 'Logging Out';
		$this->login_pass = 'Password';
		$this->login_pass_no_id = 'There is no member with the user name you entered.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.';
		$this->login_pass_reset = 'Reset Password';
		$this->login_pass_sent = 'Your password has been reset. The new password has been sent to the email address associated with your account.';
		$this->login_sure = 'Are you sure you wish to logoff from \'%s\'?';
		$this->login_user = 'User Name';
	}

	function main()
	{
		$this->board_by = 'By';
		$this->charset = 'iso-8859-1';
		$this->direction = 'ltr';
		$this->main_activate = 'Your account has not yet been activated.';
		$this->main_activate_resend = 'Resend Activation Email';
		$this->main_admincp = 'admin cp';
		$this->main_banned = 'You have been banned from viewing any portion of this board.';
		$this->main_code = 'Code';
		$this->main_continue = 'Continue';
		$this->main_cp = 'control panel';
		$this->main_full = 'Full';
		$this->main_help = 'help';
		$this->main_load = 'load';
		$this->main_login = 'login';
		$this->main_logout = 'logout';
		$this->main_max_load = 'We are sorry, but %s is currently unavailable, due to a massive amount of connected users.';
		$this->main_members = 'members';
		$this->main_messenger = 'messenger';
		$this->main_new = 'new';
		$this->main_next = 'next';
		$this->main_posts_new = 'new posts';
		$this->main_powered = 'Powered by';
		$this->main_prev = 'prev';
		$this->main_queries = 'queries';
		$this->main_quote = 'Quote';
		$this->main_register = 'register';
		$this->main_reminder = 'Reminder';
		$this->main_reminder_closed = 'The board is closed and only viewable to admins.';
		$this->main_said = 'said';
		$this->main_search = 'search';
		$this->main_seconds = 'seconds';
		$this->main_welcome = 'Welcome';
		$this->main_welcome_guest = 'Welcome!';
		$this->sep_decimals = '.';
		$this->sep_thousands = ',';
		$this->submit = 'Submit';
		$this->today = 'Today';
		$this->yesterday = 'Yesterday';
	}

	function members()
	{
		$this->members_all = 'all';
		$this->members_email = 'Email';
		$this->members_email_member = 'Email this member';
		$this->members_group = 'Group';
		$this->members_joined = 'Joined';
		$this->members_list = 'Member List';
		$this->members_member = 'Member';
		$this->members_pm = 'PM';
		$this->members_posts = 'Posts';
		$this->members_send_pm = 'Send this user a personal message';
		$this->members_title = 'Title';
		$this->members_vist_www = 'Visit this member\'s web site';
		$this->members_www = 'Web Site';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Are you sure you want to delete this post?';
		$this->mod_confirm_topic_delete = 'Are you sure you want to delete the topic?';
		$this->mod_error_first_post = 'You cannot delete the first post in a topic.';
		$this->mod_error_move_category = 'You cannot move a topic to a category.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.';
		$this->mod_error_move_forum = 'You cannot move a topic to a forum that does not exist.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.';
		$this->mod_error_move_same = 'You cannot move a topic to the forum it is already in.';
		$this->mod_label_controls = 'Moderator Controls';
		$this->mod_label_description = 'Description';
		$this->mod_label_emoticon = 'Convert emoticons into images?';
		$this->mod_label_global = 'Global Topic';
		$this->mod_label_mbcode = 'Format MbCode?';
		$this->mod_label_move_to = 'Move to';
		$this->mod_label_options = 'Options';
		$this->mod_label_post_delete = 'Delete Post';
		$this->mod_label_post_edit = 'Edit Post';
		$this->mod_label_title = 'Title';
		$this->mod_label_title_original = 'Original Title';
		$this->mod_label_title_split = 'Split Title';
		$this->mod_label_topic_delete = 'Delete Topic';
		$this->mod_label_topic_edit = 'Edit Topic';
		$this->mod_label_topic_lock = 'Lock Topic';
		$this->mod_label_topic_move = 'Move Topic';
		$this->mod_label_topic_move_complete = 'Completely transfer the topic to the new forum';
		$this->mod_label_topic_move_link = 'Transfer the topic to the new forum, and leave a link to its new location in the old forum.';
		$this->mod_label_topic_pin = 'Pin Topic';
		$this->mod_label_topic_split = 'Split Topic';
		$this->mod_missing_post = 'The specified post does not exist.';
		$this->mod_missing_topic = 'The specified topic does not exist.';
		$this->mod_no_action = 'You must specify an action.';
		$this->mod_no_post = 'You must specify a post.';
		$this->mod_no_topic = 'You must specify a topic.';
		$this->mod_perm_post_delete = 'You do not have permission to delete this post.';
		$this->mod_perm_post_edit = 'You do not have permission to edit this post.';
		$this->mod_perm_topic_delete = 'You do not have permission to delete this topic.';
		$this->mod_perm_topic_edit = 'You do not have permission to edit this topic.';
		$this->mod_perm_topic_lock = 'You do not have permission to lock this topic.';
		$this->mod_perm_topic_move = 'You do not have permission to move this topic.';
		$this->mod_perm_topic_pin = 'You do not have permission to pin this topic.';
		$this->mod_perm_topic_split = 'You do not have permission to split this topic.';
		$this->mod_perm_topic_unlock = 'You do not have permission to unlock this topic.';
		$this->mod_perm_topic_unpin = 'You do not have permission to unpin this topic.';
		$this->mod_success_post_delete = 'The post was successfully deleted.';
		$this->mod_success_post_edit = 'The post was successfully edited.';
		$this->mod_success_split = 'The topic was successfully split.';
		$this->mod_success_topic_delete = 'The topic was successfully deleted.';
		$this->mod_success_topic_edit = 'The topic was successfully edited.';
		$this->mod_success_topic_move = 'The topic was successfully moved to a new forum.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'dot';
		$this->new_posts_dot_detail = 'shows that you have posted in the topic';
		$this->new_posts_error = 'Searching for New Posts';
		$this->new_posts_forum = 'Forum';
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login';
		$this->new_posts_hot = 'Hot';
		$this->new_posts_last = 'Last Post';
		$this->new_posts_locked = 'Locked';
		$this->new_posts_moved = 'Moved';
		$this->new_posts_new = 'New';
		$this->new_posts_none = 'No new posts since you last visited';
		$this->new_posts_not = 'Not';
		$this->new_posts_pinned = 'Pinned';
		$this->new_posts_poll = 'Poll';
		$this->new_posts_topic = 'Topic';
	}

	function pm()
	{
		$this->pm_avatar = 'Avatar';
		$this->pm_buddy = 'Buddy';
		$this->pm_buddy_added = 'This user has been addded to your buddies list';
		$this->pm_buddy_already_added = 'This user has already been added to your buddy list';
		$this->pm_buddy_drop = 'use the drop down menu to select a Buddy';
		$this->pm_buddy_email_member = 'Email this buddy';
		$this->pm_buddy_error_id = 'There is no member with that user id. The account may have been deleted.';
		$this->pm_buddy_list = 'Buddy List';
		$this->pm_buddy_none = 'There are currently no members in your buddy list';
		$this->pm_buddy_select = 'Select a Buddy';
		$this->pm_buddy_send_pm = 'Send this buddy a personal message';
		$this->pm_cant_del = 'You do not have permission to delete this message.';
		$this->pm_continue = 'Continue';
		$this->pm_delallmsg = 'Delete All Messages';
		$this->pm_delete = 'Delete';
		$this->pm_delete_selected = 'Delete Selected';
		$this->pm_deleted = 'Message deleted.';
		$this->pm_deleted_all = 'Messages deleted.';
		$this->pm_deleted_buddy = 'Your selection was deleted';
		$this->pm_email = 'Email';
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s';
		$this->pm_fields = 'Your message could not be send. Make sure all required fields are filled in.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.';
		$this->pm_folder_inbox = 'Inbox';
		$this->pm_folder_new = '%s new';
		$this->pm_folder_sentbox = 'Outbox';
		$this->pm_from = 'From';
		$this->pm_group = 'Group';
		$this->pm_guest = 'As a guest, you cannot use the messenger. Please login or register.';
		$this->pm_joined = 'Joined';
		$this->pm_messenger = 'Messenger';
		$this->pm_msgtext = 'Message Text';
		$this->pm_multiple = 'Separate multiple recipients with ;';
		$this->pm_no_folder = 'You must specify a folder.';
		$this->pm_no_member = 'No member was found with that id.';
		$this->pm_no_number = 'No message was found with that number.';
		$this->pm_no_title = 'No Subject';
		$this->pm_nomsg = 'There are no messages in this folder.';
		$this->pm_noview = 'You do not have permission to view this message.';
		$this->pm_online = 'This member is currently online';
		$this->pm_or = 'Or';
		$this->pm_personal = 'Personal Messenger';
		$this->pm_personal_msging = 'Personal Messaging';
		$this->pm_pm = 'PM';
		$this->pm_posts = 'Posts';
		$this->pm_preview = 'Preview';
		$this->pm_recipients = 'Recipients';
		$this->pm_reply = 'Reply';
		$this->pm_send = 'Send';
		$this->pm_sendamsg = 'Send A Message';
		$this->pm_sendingpm = 'Sending A PM';
		$this->pm_sendon = 'Sent';
		$this->pm_success = 'Your message was sent successfully.';
		$this->pm_sure_del = 'Are you sure you want to delete this message?';
		$this->pm_sure_delall = 'Are you sure you want to delete all messages from this folder?';
		$this->pm_title = 'Title';
		$this->pm_to = 'To';
	}

	function post()
	{
		$this->post_attach = 'Attachments';
		$this->post_attach_add = 'Add Attachment';
		$this->post_attach_disrupt = 'Adding or removing attachments will not disrupt your post.';
		$this->post_attach_failed = 'The attachment upload failed. The file you specified may not exist.';
		$this->post_attach_not_allowed = 'You cannot attach files of that type.';
		$this->post_attach_remove = 'Remove Attachment';
		$this->post_attach_too_large = 'The specified file is too large. The maximum size is %d KB.';
		$this->post_cant_create = 'As a guest, you do not have permission to create topics. If you register, you may be able to create topics.';
		$this->post_cant_create1 = 'You do not have permission to create topics.';
		$this->post_cant_enter = 'Your vote could not be entered. Either you have already voted in this poll, or you do not have permission to vote.';
		$this->post_cant_poll = 'As a guest, you do not have permission to create polls. If you register, you may be able to create them.';
		$this->post_cant_poll1 = 'You do not have permission to create polls.';
		$this->post_cant_reply = 'You do not have permission to reply to topics in this forum.';
		$this->post_cant_reply1 = 'As a guest, you do not have permission to reply to topics. If you register, you may be able to post.';
		$this->post_cant_reply2 = 'You do not have permission to reply to topics.';
		$this->post_closed = 'This topic has been closed.';
		$this->post_create_poll = 'Create Poll';
		$this->post_create_topic = 'Create Topic';
		$this->post_creating = 'Creating Topic';
		$this->post_creating_poll = 'Creating Poll';
		$this->post_flood = 'You have posted in the past %s seconds, and you may not post right now.<br /><br />Please try again in a few seconds.';
		$this->post_guest = 'Guest';
		$this->post_icon = 'Post Icon';
		$this->post_last_five = 'Last Five Posts In Reverse Order';
		$this->post_length = 'Check Length';
		$this->post_mbcode_address = 'Enter an address';
		$this->post_mbcode_arial = 'Arial';
		$this->post_mbcode_blue = 'Blue';
		$this->post_mbcode_bold = 'Bold';
		$this->post_mbcode_bold1 = 'B';
		$this->post_mbcode_chocolate = 'Chocolate';
		$this->post_mbcode_code = 'Code';
		$this->post_mbcode_color = 'Color';
		$this->post_mbcode_coral = 'Coral';
		$this->post_mbcode_courier = 'Courier';
		$this->post_mbcode_crimson = 'Crimson';
		$this->post_mbcode_darkblue = 'Dark Blue';
		$this->post_mbcode_darkred = 'Dark Red';
		$this->post_mbcode_deepink = 'Deep Pink';
		$this->post_mbcode_detail = 'Enter a description';
		$this->post_mbcode_email = 'Email';
		$this->post_mbcode_firered = 'Firebrick Red';
		$this->post_mbcode_font = 'Font';
		$this->post_mbcode_green = 'Green';
		$this->post_mbcode_huge = 'Huge';
		$this->post_mbcode_image = 'Image';
		$this->post_mbcode_image1 = 'IMG';
		$this->post_mbcode_impact = 'Impact';
		$this->post_mbcode_indigo = 'Indigo';
		$this->post_mbcode_italic = 'Italic';
		$this->post_mbcode_italic1 = 'I';
		$this->post_mbcode_large = 'Large';
		$this->post_mbcode_length = 'Your post is "+length+" characters.';
		$this->post_mbcode_limegreen = 'Lime Green';
		$this->post_mbcode_medium = 'Medium';
		$this->post_mbcode_orange = 'Orange';
		$this->post_mbcode_orangered = 'Orange Red';
		$this->post_mbcode_php = 'PHP';
		$this->post_mbcode_purple = 'Purple';
		$this->post_mbcode_quote = 'Quote';
		$this->post_mbcode_red = 'Red';
		$this->post_mbcode_royalblue = 'Royal Blue';
		$this->post_mbcode_sandybrown = 'Sandy Brown';
		$this->post_mbcode_seagreen = 'Sea Green';
		$this->post_mbcode_sienna = 'Sienna';
		$this->post_mbcode_silver = 'Silver';
		$this->post_mbcode_size = 'Size';
		$this->post_mbcode_skyblue = 'Sky Blue';
		$this->post_mbcode_small = 'Small';
		$this->post_mbcode_strike = 'Strikethrough';
		$this->post_mbcode_strike1 = 'S';
		$this->post_mbcode_tahoma = 'Tahoma';
		$this->post_mbcode_teal = 'Teal';
		$this->post_mbcode_times = 'Times';
		$this->post_mbcode_tiny = 'Tiny';
		$this->post_mbcode_tomato = 'Tomato';
		$this->post_mbcode_underline = 'Underline';
		$this->post_mbcode_underline1 = 'U';
		$this->post_mbcode_url = 'URL';
		$this->post_mbcode_verdana = 'Verdana';
		$this->post_mbcode_wood = 'Burly Wood';
		$this->post_msg = 'Message';
		$this->post_must_msg = 'You must include a message when posting.';
		$this->post_must_options = 'You must include options when creating a new poll.';
		$this->post_must_title = 'You must include a title when creating a new topic.';
		$this->post_new_poll = 'New poll';
		$this->post_new_topic = 'New topic';
		$this->post_no_forum = 'That forum was not found.';
		$this->post_no_topic = 'No topic was specified.';
		$this->post_no_vote = 'You must choose an option to vote for.';
		$this->post_option_emoticons = 'Convert emoticons into images?';
		$this->post_option_global = 'Make this topic global?';
		$this->post_option_mbcode = 'Format MbCode?';
		$this->post_optional = 'optional';
		$this->post_options = 'Options';
		$this->post_poll_options = 'Poll Options';
		$this->post_poll_row = 'One per line';
		$this->post_posted = 'Posted';
		$this->post_posting = 'Posting';
		$this->post_preview = 'Preview';
		$this->post_reply = 'Reply';
		$this->post_reply_topic = 'Reply to topic';
		$this->post_replying = 'Replying To Topic';
		$this->post_replying1 = 'Replying';
		$this->post_smiles = 'Clickable Smilies';
		$this->post_too_many_options = 'You must have between 2 and %d options to a poll.';
		$this->post_topic_detail = 'Topic Description';
		$this->post_topic_title = 'Topic Title';
		$this->post_view_topic = 'View Entire Topic';
		$this->post_voting = 'Voting';
	}

	function printer()
	{
		$this->printer_back = 'Back';
		$this->printer_not_found = 'The topic could not be found. It may have been deleted, moved, or may have never existed.';
		$this->printer_not_found_title = 'Topic Not Found';
		$this->printer_perm_topics = 'You do not have permission to view topics.';
		$this->printer_perm_topics_guest = 'You do not have permission to view topics. If you register, you may be able to.';
		$this->printer_posted_on = 'Posted';
		$this->printer_send = 'Send to printer';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM Name';
		$this->profile_av_sign = 'Avatar and Signature';
		$this->profile_avatar = 'Avatar';
		$this->profile_bday = 'Birthday';
		$this->profile_contact = 'Contact';
		$this->profile_email_address = 'Email Address';
		$this->profile_fav = 'Favorite Forum';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)';
		$this->profile_icq_uin = 'ICQ Number';
		$this->profile_info = 'Information';
		$this->profile_interest = 'Interests';
		$this->profile_joined = 'Joined';
		$this->profile_last_post = 'Last Post';
		$this->profile_list = 'Member List';
		$this->profile_location = 'Location';
		$this->profile_member = 'Member Group';
		$this->profile_member_title = 'Member Title';
		$this->profile_msn = 'MSN Identity';
		$this->profile_must_user = 'You must enter a user to view a profile.';
		$this->profile_no_member = 'There is no member with that user id. The account may have been deleted.';
		$this->profile_none = '[ None ]';
		$this->profile_not_post = 'has not yet posted.';
		$this->profile_online = 'This member is currently online';
		$this->profile_pm = 'Private Messages';
		$this->profile_postcount = '%s total, %s per day';
		$this->profile_posts = 'Posts';
		$this->profile_private = '[ Private ]';
		$this->profile_profile = 'Profile';
		$this->profile_signature = 'Signature';
		$this->profile_unkown = '[ Unknown ]';
		$this->profile_view_profile = 'Viewing Profile';
		$this->profile_www = 'Homepage';
		$this->profile_yahoo = 'Yahoo Identity';
	}

	function register()
	{
		$this->register_activated = 'Your account has been activated!';
		$this->register_activating = 'Account Activation';
		$this->register_activation_error = 'There was an error while activating your account. Check to see if your browser contains the full url in the activation email. If the problem persists, contact the board administrator to have your email resent.';
		$this->register_confirm_passwd = 'Confirm Password';
		$this->register_done = 'You have been registered! You can now login.';
		$this->register_email = 'Email Address';
		$this->register_email_invalid = 'The email address you entered is invalid.';
		$this->register_email_used = 'The email address you entered is already assigned to a member.';
		$this->register_fields = 'Not all fields are filled in.';
		$this->register_image = 'Please type the text shown in the image.';
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.';
		$this->register_must_activate = 'You have been registered. An email has been sent to %s with information on how to activate your account. Your account will be limited until you activate it.';
		$this->register_name_invalid = 'The name you entered is too long.';
		$this->register_name_taken = 'That member name is already taken.';
		$this->register_new_user = 'Desired User Name';
		$this->register_pass_invalid = 'The password you entered is not valid. Make sure it uses only valid characters such as letters, numbers, dashes, underscores, or spaces, and is at least 5 characters.';
		$this->register_pass_match = 'The passwords you entered do not match.';
		$this->register_passwd = 'Password';
		$this->register_reg = 'Register';
		$this->register_reging = 'Registering';
	}

	function search()
	{
		$this->search_advanced = 'Advanced Options';
		$this->search_avatar = 'Avatar';
		$this->search_basic = 'Basic Search';
		$this->search_characters = 'characters of a post';
		$this->search_day = 'day';
		$this->search_days = 'days';
		$this->search_exact_name = 'exact name';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.';
		$this->search_for = 'Search For';
		$this->search_forum = 'Forum';
		$this->search_group = 'Group';
		$this->search_guest = 'Guest';
		$this->search_in = 'Search In';
		$this->search_in_posts = 'Only search in posts';
		$this->search_ip = 'IP';
		$this->search_joined = 'Joined';
		$this->search_level = 'Member Level';
		$this->search_match = 'Search by matching';
		$this->search_matches = 'Matches';
		$this->search_month = 'month';
		$this->search_months = 'months';
		$this->search_mysqldoc = 'MySQL Documentation';
		$this->search_newer = 'newer';
		$this->search_no_results = 'Your search returned no results.';
		$this->search_no_words = 'You must specify some search terms.<br /><br />Each term must be longer than 3 characters, including letters, numbers, apostrophes, and underscores.';
		$this->search_older = 'older';
		$this->search_online = 'This member is currently online';
		$this->search_only_display = 'Only display first';
		$this->search_partial_name = 'partial name';
		$this->search_post_icon = 'Post Icon';
		$this->search_posted_on = 'Posted';
		$this->search_posts = 'Posts';
		$this->search_posts_by = 'Only in posts by';
		$this->search_regex = 'Search by regular expression';
		$this->search_regex_failed = 'Your regular expression failed. Please see the MySQL documentation for regular expression help.';
		$this->search_relevance = 'Post Relevance: %d%%';
		$this->search_replies = 'Posts';
		$this->search_result = 'Search Results';
		$this->search_search = 'Search';
		$this->search_select_all = 'Select All';
		$this->search_show_posts = 'Show matched posts';
		$this->search_sound = 'Search by sound';
		$this->search_starter = 'Starter';
		$this->search_than = 'than';
		$this->search_topic = 'Topic';
		$this->search_unreg = 'Unregistered';
		$this->search_week = 'week';
		$this->search_weeks = 'weeks';
		$this->search_year = 'year';
	}

	function topic()
	{
		$this->topic_attached = 'Attached file:';
		$this->topic_attached_downloads = 'downloads';
		$this->topic_attached_perm = 'You do not have permission to download this file.';
		$this->topic_attached_title = 'Attached File';
		$this->topic_avatar = 'Avatar';
		$this->topic_create_poll = 'Create New Poll';
		$this->topic_create_topic = 'Create New Topic';
		$this->topic_delete = 'Delete';
		$this->topic_delete_post = 'Delete this post';
		$this->topic_edit = 'Edit';
		$this->topic_edit_post = 'Edit this post';
		$this->topic_edited = 'Last edited %s by %s';
		$this->topic_error = 'Error';
		$this->topic_group = 'Group';
		$this->topic_guest = 'Guest';
		$this->topic_ip = 'IP';
		$this->topic_joined = 'Joined';
		$this->topic_level = 'Member Level';
		$this->topic_links_aim = 'Send an AIM message to %s';
		$this->topic_links_buddy = 'Add %s to your buddy list';
		$this->topic_links_email = 'Send an email to %s';
		$this->topic_links_icq = 'Send an ICQ messsage to %s';
		$this->topic_links_msn = 'View %s\'s MSN profile';
		$this->topic_links_pm = 'Send a personal messsage to %s';
		$this->topic_links_web = 'Visit %s\'s web site';
		$this->topic_links_yahoo = 'Send a message to %s with Yahoo! Messenger';
		$this->topic_lock = 'Lock';
		$this->topic_locked = 'Topic Locked';
		$this->topic_move = 'Move';
		$this->topic_no_votes = 'There are no votes for this poll.';
		$this->topic_not_found = 'Topic Not Found';
		$this->topic_not_found_message = 'The topic could not be found. It may have been deleted, moved, perhaps never existed.';
		$this->topic_online = 'This member is currently online';
		$this->topic_options = 'Topic Options';
		$this->topic_pages = 'Pages';
		$this->topic_perm_view = 'You do not have permission to view topics.';
		$this->topic_perm_view_guest = 'You do not have permission to view topics. If you register, you may be able to.';
		$this->topic_pin = 'Pin';
		$this->topic_posted = 'Posted';
		$this->topic_posts = 'Posts';
		$this->topic_print = 'View Printable';
		$this->topic_quote = 'Reply with a quote from this post';
		$this->topic_reply = 'Reply to Topic';
		$this->topic_split = 'Split';
		$this->topic_split_finish = 'Finish All Splitting';
		$this->topic_split_keep = 'Do not move this post';
		$this->topic_split_move = 'Move this post';
		$this->topic_subscribe = 'E-mail me when replies are made to this topic';
		$this->topic_top = 'Go to the top of the page';
		$this->topic_unlock = 'Unlock';
		$this->topic_unpin = 'Unpin';
		$this->topic_unreg = 'Unregistered';
		$this->topic_view = 'View Results';
		$this->topic_viewing = 'Viewing Topic';
		$this->topic_vote = 'Vote';
		$this->topic_vote_count_plur = '%d votes';
		$this->topic_vote_count_sing = '%d vote';
		$this->topic_votes = 'Votes';
	}
}
?>