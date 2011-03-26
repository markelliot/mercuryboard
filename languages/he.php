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
		$this->active_last_action = 'פעילות אחרונה';
		$this->active_modules_active = 'צופה ברשימת משתמשים פעילים';
		$this->active_modules_board = 'באינדקס הפורומים';
		$this->active_modules_cp = 'משתמש בלוח בקרה אישי';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'משתמש בעזרה';
		$this->active_modules_login = 'מתחבר\מתנתק';
		$this->active_modules_members = 'צופה ברשימת חברי הפורום';
		$this->active_modules_mod = 'מסדר פורומים';
		$this->active_modules_pm = 'משתמש המסנג\'ר פרטי';
		$this->active_modules_post = 'מפרסם הודעה';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_search = 'מחפש';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = 'זמן';
		$this->active_user = 'משתמש';
		$this->active_users = 'משתמשים פעילים';
	}

	function board()
	{
		$this->board_active_users = 'משתמשים מעילים';
		$this->board_birthdays = 'ימי הולדת היום:';
		$this->board_can_post = 'אתה יכול להגיב בפורום הזה.';
		$this->board_can_topics = 'אתה יכול לצפות בפורום אך לא לפרסם נושאים חדשים.';
		$this->board_cant_post = 'אינן יכול להגיב בפורום הזה';
		$this->board_cant_topics = 'אינך מורשה לקרוא או לפרסם הודעות בפורום הזה.';
		$this->board_forum = 'פורום';
		$this->board_guests = 'אורחים';
		$this->board_last_post = 'הודעה אחרונה';
		$this->board_mark = 'סמן כל ההודעות כנקראו';
		$this->board_mark1 = 'כל ההודועת פורומים סומנו כנקראו.';
		$this->board_members = 'משתמשים';
		$this->board_message = '%s הודעה';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'אין ימי הולדת היום.';
		$this->board_nobody = 'אין כרגע משתמש מחוברים.';
		$this->board_nopost = 'אין הודעות';
		$this->board_noview = 'אין לך הרשאות לראות פורום.';
		$this->board_regfirst = 'אין לך הרשאות לראות פורום. אם אתה נרשם, אתה יכול לראות פורום.';
		$this->board_replies = 'תגובות';
		$this->board_stats = 'סטטיסטיקות';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_topics = 'נושאים';
		$this->board_topics_new = 'יש הודועת חדשות בפורום הזה.';
		$this->board_topics_old = 'אין הודועת חדשות בפורום הזה.';
		$this->board_users = 'משתמשים';
		$this->board_write_topics = 'הינך יכול לראות ולכתוב בפורום הזה.';
	}

	function cp()
	{
		$this->cp_aim = 'שם משתמש של AIM';
		$this->cp_already_member = 'דואר אלקטרוני שכתבת כבר בשימוש על ידי משתמש אחר.';
		$this->cp_apr = 'אפריל';
		$this->cp_aug = 'אוגוסט';
		$this->cp_avatar_current = 'אווטר שלך';
		$this->cp_avatar_error = 'שגיאה באווטר';
		$this->cp_avatar_must_select = 'אתה חייב לבחור אווטר.';
		$this->cp_avatar_none = 'ללא שימוש באווטר';
		$this->cp_avatar_pixels = 'פיקסלים';
		$this->cp_avatar_select = 'בחר אווטר';
		$this->cp_avatar_size_height = 'אורך האווטר שלך חייב להיות באורך 1 ו';
		$this->cp_avatar_size_width = 'רוחב האווטר שלך חייב להיות ברוחב 1 ו';
		$this->cp_avatar_upload = 'העלת אווטר ממחשב שלך';
		$this->cp_avatar_upload_failed = 'העלה של אווטר נכשלה. הקובץ לא קיים.';
		$this->cp_avatar_upload_not_image = 'אתה יכול לעות רק תמונות ולהשתמש בהן כאווטר.';
		$this->cp_avatar_upload_too_large = 'אווטר שאתה רוצה לעלות גדול מידי. קובל המקסימלי הוא %d קילובייט.';
		$this->cp_avatar_url = 'קישר URL אל האווטר';
		$this->cp_avatar_use = 'השתמש באווטר שהעלת';
		$this->cp_bday = 'יום הולדת';
		$this->cp_been_updated = 'פרופיל שלך עודכן.';
		$this->cp_been_updated1 = 'אווטר שלך הועלה.';
		$this->cp_been_updated_prefs = 'הגדרות שלך עודכנו.';
		$this->cp_changing_pass = 'עריכת סיסמא';
		$this->cp_contact_pm = 'הרשה לאחרים לשלוח לך הודעות פרטיות?';
		$this->cp_cp = 'לוח בקרה';
		$this->cp_current_avatar = 'אווטר';
		$this->cp_current_time = 'השעה עכשיו %s.';
		$this->cp_dec = 'דצמבר';
		$this->cp_editing_avatar = 'ערכית אווטר';
		$this->cp_editing_profile = 'ערכית פרופיל';
		$this->cp_email = 'דואר אלקטרוני';
		$this->cp_email_form = 'Allow others to contact you via the email form?'; //Translate
		$this->cp_email_invaid = 'דואר אלקטרוני שהכנסת שגויי.';
		$this->cp_err_avatar = 'שגיאה בהעלת אווטר';
		$this->cp_err_updating = 'שגיאה בעידכון פרופיל';
		$this->cp_feb = 'פברואר';
		$this->cp_file_type = 'אווטר שהכנסת איננו נכון. תבדוק אם הקישור לאווטר נכון, וסוג קובץ של אווטר הוא gif, jpg, או png.';
		$this->cp_format = 'שם משתמש';
		$this->cp_gmt = '[GMT] הזמן לפי שעון גרינוויץ\'';
		$this->cp_gmt_nev1 = '[GMT-1:00] אזורס, קפא וורדה';
		$this->cp_gmt_nev10 = '[GMT-10:00] אוואי';
		$this->cp_gmt_nev11 = '[GMT-11:00] אי מידאווי, סאומה';
		$this->cp_gmt_nev12 = '[GMT-12:00] קו מערבי של תראיך בינלאומי';
		$this->cp_gmt_nev2 = '[GMT-2:00] מיד-אטלנטיק';
		$this->cp_gmt_nev3 = '[GMT-3:00] בואנוס איירס, גריננלנד';
		$this->cp_gmt_nev35 = '[GMT-3:30] ניופאונדלנד';
		$this->cp_gmt_nev4 = '[GMT-4:00] שעון אטלנטי קנדה';
		$this->cp_gmt_nev5 = '[GMT-5:00] שעון מזרחי ארה"ב & קנדה';
		$this->cp_gmt_nev6 = '[GMT-6:00] שען מרכזי ארה"ב & קנדה';
		$this->cp_gmt_nev7 = '[GMT-7:00] שעון הרים ארה"ב & קנדה';
		$this->cp_gmt_nev8 = '[GMT-8:00] שעון פסיפי ארה"ב & קנדה';
		$this->cp_gmt_nev9 = '[GMT-9:00] אלאסקה';
		$this->cp_gmt_pos1 = '[GMT+1:00] אמסטרדם, ברלין, רומא, פריז';
		$this->cp_gmt_pos10 = '[GMT+10:00] מלבואורן, סידני, גואם';
		$this->cp_gmt_pos11 = '[GMT+11:00] מגדן, ניו קלדוניה';
		$this->cp_gmt_pos12 = '[GMT+12:00] אאוקלנד, פיג\'י';
		$this->cp_gmt_pos2 = '[GMT+2:00] אתונה, קהיר, ירושלים';
		$this->cp_gmt_pos3 = '[GMT+3:00] בגדד, מוסקבה, נאירובי';
		$this->cp_gmt_pos35 = '[GMT+3:30] טהראן';
		$this->cp_gmt_pos4 = '[GMT+4:00] אבו דהאבי, מוסקאט, טיביליסי';
		$this->cp_gmt_pos45 = '[GMT+4:30] קאבול';
		$this->cp_gmt_pos5 = '[GMT+5:00] איסלאמאבד, קאראצ\'י';
		$this->cp_gmt_pos55 = '[GMT+5:30] בומבאי, קאלקוטטה, ניו דלהי';
		$this->cp_gmt_pos6 = '[GMT+6:00] אלמאטי, דהאקה';
		$this->cp_gmt_pos7 = '[GMT+7:00] בנגקוק, ג\'אקארטה';
		$this->cp_gmt_pos8 = '[GMT+8:00] בייג\'ינג, הונג קונג, סינגפור';
		$this->cp_gmt_pos9 = '[GMT+9:00] טוקיו, סאול';
		$this->cp_gmt_pos95 = '[GMT+9:30] אדלאיד, דארווין';
		$this->cp_header = 'לוח בקרה אישי';
		$this->cp_height = 'אורך';
		$this->cp_icq = 'מספר ICQ';
		$this->cp_interest = 'תחומי עניין';
		$this->cp_jan = 'ינואר';
		$this->cp_july = 'יולי';
		$this->cp_june = 'יוני';
		$this->cp_label_edit_avatar = 'עריכת אווטר';
		$this->cp_label_edit_pass = 'עריכת סיסמא';
		$this->cp_label_edit_prefs = 'עריכת הגדרות';
		$this->cp_label_edit_profile = 'עריכת פרופיל';
		$this->cp_label_edit_subs = 'ערכית מינויי';
		$this->cp_language = 'שפה';
		$this->cp_less_charac = 'שם שלך יכול להיות 32 מקסימום.';
		$this->cp_location = 'מיקום';
		$this->cp_login_first = 'הינך חייב להיות מחובר כדי לגשת ללוח בקרה.';
		$this->cp_mar = 'מרץ';
		$this->cp_may = 'מאי';
		$this->cp_msn = 'MSN מסנג\'ר';
		$this->cp_must_orig = 'Your name must be identical to the original. You may only change the letter case and spacing.'; //Translate
		$this->cp_new_notmatch = 'The new passwords you entered do not match.'; //Translate
		$this->cp_new_pass = 'סיסמא חדשה';
		$this->cp_no_flash = 'Flash avatars are not allowed on this board.'; //Translate
		$this->cp_not_exist = 'The date you specified (%s) does not exist!'; //Translate
		$this->cp_nov = 'נובמבר';
		$this->cp_oct = 'אוקטובר';
		$this->cp_old_notmatch = 'The old password you entered does not match the one in our database.'; //Translate
		$this->cp_old_pass = 'סיסמא ישנה';
		$this->cp_pass_notvaid = 'Your password is not valid. Make sure it uses only valid characters such as letters, numbers, dashes, underscores, or spaces.'; //Translate
		$this->cp_preferences = 'משנה הגדרות';
		$this->cp_privacy = 'Privacy Options'; //Translate
		$this->cp_repeat_pass = 'חזור על הסיסמא החדשה';
		$this->cp_sept = 'ספטמבר';
		$this->cp_show_active = 'Show your activities when you are using the board?'; //Translate
		$this->cp_show_email = 'Show email address in profile?'; //Translate
		$this->cp_signature = 'חתימה';
		$this->cp_size_max = 'The avatar size you entered is too large. The maximum size allowed is %s by %s pixels.'; //Translate
		$this->cp_skin = 'סקין של פורום';
		$this->cp_sub_change = 'Changing Subscriptions'; //Translate
		$this->cp_sub_delete = 'Delete'; //Translate
		$this->cp_sub_expire = 'Expiration Date'; //Translate
		$this->cp_sub_name = 'Subscription Name'; //Translate
		$this->cp_sub_no_params = 'No parameters were given.'; //Translate
		$this->cp_sub_success = 'You are now subscribed to this %s.'; //Translate
		$this->cp_sub_type = 'Subscription Type'; //Translate
		$this->cp_sub_updated = 'Selected subscriptions have been deleted.'; //Translate
		$this->cp_topic_option = 'אפשרויות נושאים';
		$this->cp_updated = 'פרופיל עודכן';
		$this->cp_updated1 = 'אווטר עודכן';
		$this->cp_updated_prefs = 'הגדרות הודכנו';
		$this->cp_user_exists = 'A user with that name formatting already exists.'; //Translate
		$this->cp_valided = 'Your password was validated and changed.'; //Translate
		$this->cp_view_avatar = 'הראה אווטרים?';
		$this->cp_view_emoticon = 'הראה סמיילים?';
		$this->cp_view_signature = 'הראה חתימות?';
		$this->cp_welcome = 'ברוכים הבאים ללוח בקרה אישי. כאן הינך יכול לערוך ולשנות אפשרויות שפורום נותן לך. אנא בחרו מאפשרויות שיש לכם למעלה.';
		$this->cp_width = 'רוחב';
		$this->cp_www = 'דף הבית';
		$this->cp_yahoo = 'Yahoo מסנג\'ר';
		$this->cp_zone = 'איזור הזמן';
	}

	function email()
	{
		$this->email_blocked = 'That member is not accepting email through this form.'; //Translate
		$this->email_email = 'דואר אלקטרוני';
		$this->email_msgtext = 'Email Body:'; //Translate
		$this->email_no_fields = 'Go back and make sure that all fields are filled in.'; //Translate
		$this->email_no_member = 'No member was found by that name'; //Translate
		$this->email_no_perm = 'You do not have permission to send email through the board.'; //Translate
		$this->email_sent = 'הודעה נשלחה.';
		$this->email_subject = 'נושא:';
		$this->email_to = 'אל:';
	}

	function forum()
	{
		$this->forum_by = 'על ידי';
		$this->forum_can_post = 'אתה יכול להגיב בפורום הזה.';
		$this->forum_can_topics = 'אתה יכול לראות נושאים בפורום הזה.';
		$this->forum_cant_post = 'אתה לא יכול להגיב בפורום הזה.';
		$this->forum_cant_topics = 'אתה לא יכול לראות נושאים בפורום הזה.';
		$this->forum_dot = 'נקודה';
		$this->forum_dot_detail = 'shows that you have posted in the topic'; //Translate
		$this->forum_forum = 'פורום';
		$this->forum_guest = 'אורח';
		$this->forum_hot = 'חם';
		$this->forum_icon = 'אייקון של נושא';
		$this->forum_jump = 'קפוץ להודעה אחרונה בנושא';
		$this->forum_last = 'הודעה אחרונה';
		$this->forum_locked = 'נעול';
		$this->forum_moved = 'מועבר';
		$this->forum_msg = '%s הודעה';
		$this->forum_new = 'חדש';
		$this->forum_new_poll = 'פרסם סקר חדש';
		$this->forum_new_topic = 'פרסם נושא חדש';
		$this->forum_no_topics = 'There are no topics to display for this forum.'; //Translate
		$this->forum_noexist = 'The specified forum does not exist.'; //Translate
		$this->forum_nopost = 'אין הודעות';
		$this->forum_not = 'לא';
		$this->forum_noview = 'אין לך הרשאות לצפות בפורומים האלה.';
		$this->forum_pages = 'עמודים';
		$this->forum_pinned = 'נעוץ';
		$this->forum_pinned_topic = 'נושא נעוץ';
		$this->forum_poll = 'סקר';
		$this->forum_regfirst = 'You do not have permission to view forums. If you register, you may be able to.'; //Translate
		$this->forum_replies = 'תגובות';
		$this->forum_starter = 'מפרסם';
		$this->forum_sub = 'תת-פורום';
		$this->forum_sub_last_post = 'הודעה אחרונה';
		$this->forum_sub_replies = 'תגובות';
		$this->forum_sub_topics = 'נושאים';
		$this->forum_subscribe = 'E-mail me when posts are made in this forum'; //Translate
		$this->forum_topic = 'נושא';
		$this->forum_topics_new = 'There are new posts in this forum.'; //Translate
		$this->forum_topics_old = 'There are no new posts in this forum.'; //Translate
		$this->forum_views = 'צפיות';
		$this->forum_write_topics = 'You can create topics in this forum.'; //Translate
	}

	function help()
	{
		$this->help_available_files = 'עזרה';
		$this->help_none = 'אין קבצי עזרה במסד נתונים';
	}

	function login()
	{
		$this->login_cant_logged = 'You could not be logged in. Check to see that your user name and password are correct.<br /><br />They are case sensitive, so \'UsErNaMe\' is different from \'Username\'. Also, check to see that cookies are enabled in your browser.'; //Translate
		$this->login_cookies = 'Cookies must be enabled to login.'; //Translate
		$this->login_forgot_pass = 'Forgot your password?'; //Translate
		$this->login_header = 'מתחבר';
		$this->login_logged = 'הינך עכשיו מחובר\ת.';
		$this->login_now_out = 'הינך עכשיו מנותק\ת.';
		$this->login_out = 'מתנתק';
		$this->login_pass = 'סיסמא';
		$this->login_pass_no_id = 'There is no member with the user name you entered.'; //Translate
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Reset Password'; //Translate
		$this->login_pass_sent = 'Your password has been reset. The new password has been sent to the email address associated with your account.'; //Translate
		$this->login_sure = 'אתה בטוח שאתה רוצה להתנתק מ \'%s\'?';
		$this->login_user = 'שם משתמש';
	}

	function main()
	{
		$this->board_by = 'על ידי';
		$this->charset = 'windows-1255';
		$this->direction = 'rtl';
		$this->main_activate = 'Your account has not yet been activated.'; //Translate
		$this->main_activate_resend = 'Resend Activation Email'; //Translate
		$this->main_admincp = 'לוח בקרה של מנהל';
		$this->main_banned = 'You have been banned from viewing any portion of this board.'; //Translate
		$this->main_code = 'קוד';
		$this->main_continue = 'המשך';
		$this->main_cp = 'לוח בקרה';
		$this->main_full = 'מלא';
		$this->main_help = 'עזרה';
		$this->main_load = 'טוען';
		$this->main_login = 'התחבר';
		$this->main_logout = 'התנתק';
		$this->main_max_load = 'We are sorry, but %s is currently unavailable, due to a massive amount of connected users.'; //Translate
		$this->main_members = 'משתמשים';
		$this->main_messenger = 'הודעות פרטיות';
		$this->main_new = 'חדש';
		$this->main_next = 'הבא';
		$this->main_posts_new = 'חדש';
		$this->main_powered = 'מופעל על ידי';
		$this->main_prev = 'הקודם';
		$this->main_queries = 'שאילתות';
		$this->main_quote = 'ציטוט';
		$this->main_register = 'הרשמה';
		$this->main_reminder = 'Reminder: The board is closed, and only viewable to admins.';
		$this->main_reminder_closed = 'The board is closed and only viewable to admins.'; //Translate
		$this->main_said = 'said'; //Translate
		$this->main_search = 'חיפוש';
		$this->main_seconds = 'שניות';
		$this->main_welcome = 'ברוך הבא';
		$this->main_welcome_guest = 'ברוך הבא!';
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = ','; //Translate
		$this->submit = 'אישור';
		$this->today = 'Today'; //Translate
		$this->yesterday = 'Yesterday'; //Translate
	}

	function members()
	{
		$this->members_all = 'הכל';
		$this->members_email = 'דואר אלקטרוני';
		$this->members_email_member = 'שלח דואר אלקטרוני למשתמש';
		$this->members_group = 'קבוצה';
		$this->members_joined = 'תאריך הצטרפות';
		$this->members_list = 'רשימת משתמשים';
		$this->members_member = 'משתמש';
		$this->members_pm = 'הודעה פרטית';
		$this->members_posts = 'הודעות';
		$this->members_send_pm = 'שלח הודעה פרטית למשתמש';
		$this->members_title = 'כותרת';
		$this->members_vist_www = 'בקר באתר הבית של משתמש';
		$this->members_www = 'אתר הבית';
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
		$this->new_posts_dot = 'נקודה';
		$this->new_posts_dot_detail = 'shows that you have posted in the topic'; //Translate
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'פורום';
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'חם';
		$this->new_posts_last = 'הודעה אחרונה';
		$this->new_posts_locked = 'נעול';
		$this->new_posts_moved = 'מועבר';
		$this->new_posts_new = 'חדש';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'לא';
		$this->new_posts_pinned = 'נעוץ';
		$this->new_posts_poll = 'סקר';
		$this->new_posts_topic = 'נושא';
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
		$this->pm_cant_del = 'אין לך הרשאה למחק הודעה זו.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'מחק כל ההודעות';
		$this->pm_delete = 'מחק';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'הודעה נמחקה.';
		$this->pm_deleted_all = 'הודועת נמחקו.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Your message could not be send. Make sure all required fields are filled in.'; //Translate
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'דואר נכנס';
		$this->pm_folder_new = '%s חדש';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'מ';
		$this->pm_group = 'קבוצה';
		$this->pm_guest = 'As a guest, you can not use the messenger. Please login or register.';
		$this->pm_joined = 'הצטרף';
		$this->pm_messenger = 'מסנג\'ר פרטי';
		$this->pm_msgtext = 'תוכן הודעה';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'You must specify a folder.'; //Translate
		$this->pm_no_member = 'No member was found with that id.'; //Translate
		$this->pm_no_number = 'No message was found with that number.'; //Translate
		$this->pm_no_title = 'אין נושא';
		$this->pm_nomsg = 'There are no messages in this folder.'; //Translate
		$this->pm_noview = 'You do not have permission to view this message.'; //Translate
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'מסנג\'ר פרטי';
		$this->pm_personal_msging = 'שולח הודעה';
		$this->pm_pm = 'הודעה פרטית';
		$this->pm_posts = 'הודעות';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Reply'; //Translate
		$this->pm_send = ' שלח ';
		$this->pm_sendamsg = 'שלח הודעה פרטית';
		$this->pm_sendingpm = 'שולח הודעה פרטית';
		$this->pm_sendon = 'נשלח ב';
		$this->pm_success = 'הודעה שלך נשחה בהצלחה.';
		$this->pm_sure_del = 'הינן בטוח\ה שברצונך למחוק הודעה זו?';
		$this->pm_sure_delall = 'הינך בטוח שברצונך למחוק כל ההודעות?';
		$this->pm_title = 'כותרת';
		$this->pm_to = 'אל';
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
		$this->profile_aim_sn = 'שם משתמש של AIM';
		$this->profile_av_sign = 'אווטר וחתימה';
		$this->profile_avatar = 'אווטר';
		$this->profile_bday = 'יום הולדת';
		$this->profile_contact = 'יצירת קשר';
		$this->profile_email_address = 'כתובת דואר אלקטרוני';
		$this->profile_fav = 'Favorite Forum'; //Translate
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_icq_uin = 'מספר ICQ';
		$this->profile_info = 'מידע';
		$this->profile_interest = 'תחומי התענייניות';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'הודעה אחרונה';
		$this->profile_list = 'Member List'; //Translate
		$this->profile_location = 'מיקום';
		$this->profile_member = 'קבוצת משתמש';
		$this->profile_member_title = 'כותרת';
		$this->profile_msn = 'MSN מסנג\'ר';
		$this->profile_must_user = 'You must enter a user to view a profile.'; //Translate
		$this->profile_no_member = 'There is no member with that user id. The account may have been deleted.'; //Translate
		$this->profile_none = '[ ללא ]';
		$this->profile_not_post = 'לא כתב הודעות.';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Private Messages'; //Translate
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = 'הודועת';
		$this->profile_private = '[ פרטי ]';
		$this->profile_profile = 'פרופיל';
		$this->profile_signature = 'חתימה';
		$this->profile_unkown = '[ לא ידוע ]';
		$this->profile_view_profile = 'צופה בפרופיל של';
		$this->profile_www = 'אתר הבית';
		$this->profile_yahoo = 'יאהו מסנג\'ר';
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
		$this->search_advanced = 'אפשרויות מתקדמות';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'חיפוש בסיסי';
		$this->search_characters = 'characters of a post'; //Translate
		$this->search_day = 'יום';
		$this->search_days = 'ימים';
		$this->search_exact_name = 'exact name'; //Translate
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'חפש אחר';
		$this->search_forum = 'פורום';
		$this->search_group = 'Group'; //Translate
		$this->search_guest = 'אורח';
		$this->search_in = 'חפש ב';
		$this->search_in_posts = 'Only search in posts'; //Translate
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Joined'; //Translate
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'Search by matching'; //Translate
		$this->search_matches = 'Matches'; //Translate
		$this->search_month = 'חודש';
		$this->search_months = 'חודשים';
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
		$this->search_posts = 'הודעות';
		$this->search_posts_by = 'Only in posts by'; //Translate
		$this->search_regex = 'Search by regular expression'; //Translate
		$this->search_regex_failed = 'Your regular expression failed. Please see the MySQL documentation for regular expression help.'; //Translate
		$this->search_relevance = 'Post Relevance: %d%%'; //Translate
		$this->search_replies = 'הודעות';
		$this->search_result = 'Search Results'; //Translate
		$this->search_search = ' חפש ';
		$this->search_select_all = 'בחר הכל';
		$this->search_show_posts = 'Show matched posts'; //Translate
		$this->search_sound = 'Search by sound'; //Translate
		$this->search_starter = 'Starter'; //Translate
		$this->search_than = 'than'; //Translate
		$this->search_topic = 'נושא';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = 'שבוע';
		$this->search_weeks = 'שבועות';
		$this->search_year = 'שנה';
	}

	function topic()
	{
		$this->topic_attached = 'Attached file:'; //Translate
		$this->topic_attached_downloads = 'הורדות';
		$this->topic_attached_perm = 'You do not have permission to download this file.'; //Translate
		$this->topic_attached_title = 'Attached File'; //Translate
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Create New Poll'; //Translate
		$this->topic_create_topic = 'Create New Topic'; //Translate
		$this->topic_delete = 'מחק';
		$this->topic_delete_post = 'Delete this post'; //Translate
		$this->topic_edit = 'עריכה';
		$this->topic_edit_post = 'Edit this post'; //Translate
		$this->topic_edited = 'Last edited on %s by %s';
		$this->topic_error = 'שגיאה';
		$this->topic_group = 'קבוצה';
		$this->topic_guest = 'אורח';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'תאריך הצטרפות';
		$this->topic_level = 'רמה של משתמש';
		$this->topic_links_aim = 'Send an AIM message to %s'; //Translate
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Send an email to %s'; //Translate
		$this->topic_links_icq = 'Send an ICQ messsage to %s'; //Translate
		$this->topic_links_msn = 'View %s\'s MSN profile'; //Translate
		$this->topic_links_pm = 'Send a personal messsage to %s'; //Translate
		$this->topic_links_web = 'Visit %s\'s web site'; //Translate
		$this->topic_links_yahoo = 'Send a message to %s with Yahoo! Messenger'; //Translate
		$this->topic_lock = 'נעל';
		$this->topic_locked = 'נושא נעול';
		$this->topic_move = 'העבר';
		$this->topic_no_votes = 'There are no votes for this poll.'; //Translate
		$this->topic_not_found = 'נוששא לא קיים';
		$this->topic_not_found_message = 'The topic could not be found. It may have been deleted, moved, perhaps never existed.'; //Translate
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'אפשרויות נושא';
		$this->topic_pages = 'עמודים';
		$this->topic_perm_view = 'You do not have permission to view topics.'; //Translate
		$this->topic_perm_view_guest = 'You do not have permission to view topics. If you register, you may be able to.'; //Translate
		$this->topic_pin = 'נעץ';
		$this->topic_posted = 'Posted'; //Translate
		$this->topic_posts = 'הודועת';
		$this->topic_print = 'View Printable'; //Translate
		$this->topic_quote = 'Reply with a quote from this post'; //Translate
		$this->topic_reply = 'Reply to Topic'; //Translate
		$this->topic_split = 'Split'; //Translate
		$this->topic_split_finish = 'Finish All Splitting'; //Translate
		$this->topic_split_keep = 'Do not move this post'; //Translate
		$this->topic_split_move = 'Move this post'; //Translate
		$this->topic_subscribe = 'E-mail me when replies are made to this topic'; //Translate
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = 'בטל נעילה';
		$this->topic_unpin = 'בטח נעיצה';
		$this->topic_unreg = 'לא רשום';
		$this->topic_view = 'הראה תוצאות';
		$this->topic_viewing = 'Viewing Topic'; //Translate
		$this->topic_vote = 'הצבעה';
		$this->topic_vote_count_plur = '%d הצבעות';
		$this->topic_vote_count_sing = '%d הצבעה';
		$this->topic_votes = 'הצבעות';
	}
}
?>