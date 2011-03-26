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
 * $Id: sv.php,v 1.16 2006/07/26 17:56:20 jon Exp $
 **/

/**
 * Swedish language module
 *
 * @author Markus Höglund <markus@pidelipom.com>
 * @author Oskar Bergström <oskar@rapidfish.se
 * @since 1.0.1
 **/
class sv
{
	function active()
	{
		$this->active_last_action = 'Senaste Kommando';
		$this->active_modules_active = 'Visar Aktiva Användare';
		$this->active_modules_board = 'Visar Index';
		$this->active_modules_cp = 'Använder Kontrollpanelen';
		$this->active_modules_forum = 'Visar forum: %s';
		$this->active_modules_help = 'Använder Hjälp';
		$this->active_modules_login = 'Loggar In/Ut';
		$this->active_modules_members = 'Visar Medlemslista';
		$this->active_modules_mod = 'Administrerar';
		$this->active_modules_pm = 'Använder Snabbmeddelande';
		$this->active_modules_post = 'Skapar Inlägg';
		$this->active_modules_printer = 'Skriver inlägg: %s';
		$this->active_modules_profile = 'Visa profil: %s';
		$this->active_modules_search = 'Söker';
		$this->active_modules_topic = 'Visa ämne: %s';
		$this->active_time = 'Tid';
		$this->active_user = 'Användare';
		$this->active_users = 'Aktiva Användare';
	}

	function board()
	{
		$this->board_active_users = 'Aktiva Användare';
		$this->board_birthdays = 'Dagens Födelsedagar:';
		$this->board_can_post = 'Du kan svara i detta forum.';
		$this->board_can_topics = 'Du kan läsa men inte skapa ämnen i detta forum.';
		$this->board_cant_post = 'Du kan inte svara i detta forum.';
		$this->board_cant_topics = 'Du kan inte läsa eller skapa ämnen i detta forum.';
		$this->board_forum = 'Forum'; //Translate
		$this->board_guests = 'gäster';
		$this->board_last_post = 'Senaste Inlägg';
		$this->board_mark = 'Markerar Inlägg Som Läst';
		$this->board_mark1 = 'Alla inlägg och forum har markerats som lästa.';
		$this->board_members = 'medlemmar';
		$this->board_message = '%s Meddelande';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'Inga medlemmar fyller år idag.';
		$this->board_nobody = 'Det är för tillfället inga medlemmar online.';
		$this->board_nopost = 'Inga Inlägg';
		$this->board_noview = 'Du har inte tillåtelse att läsa forumet.';
		$this->board_regfirst = 'Du har inte tillåtelse att läsa forumet. Om du registrerar dig, så kanske du kan.';
		$this->board_replies = 'Svar';
		$this->board_stats = 'Statistik';
		$this->board_stats_string = 'Hittills har %s personer registrerat sig. Våran nyaste medlem är: %s.<br /> Det finns %s ämnen och %s svar vilket totalt är %s inlägg.';
		$this->board_topics = 'Ämnen';
		$this->board_topics_new = 'Det finns nya inlägg i detta forum.';
		$this->board_topics_old = 'Det finns inga nya inlägg i detta forum.';
		$this->board_users = 'användare';
		$this->board_write_topics = 'Du kan läsa och skapa ämnen i detta forum.';
	}

	function cp()
	{
		$this->cp_aim = 'AIM namn';
		$this->cp_already_member = 'E-post adressen du skrev in är upptagen.';
		$this->cp_apr = 'April'; //Translate
		$this->cp_aug = 'Augusti';
		$this->cp_avatar_current = 'Din nuvarande avatar';
		$this->cp_avatar_error = 'Avatar Fel';
		$this->cp_avatar_must_select = 'Du måste välja en avatar.';
		$this->cp_avatar_none = 'Använd inte en avatar';
		$this->cp_avatar_pixels = 'pixlar';
		$this->cp_avatar_select = 'Välj en avatar';
		$this->cp_avatar_size_height = 'Din avatars höjd måste vara mellan 1 och';
		$this->cp_avatar_size_width = 'Din avatars bredd måste vara mellan 1 och';
		$this->cp_avatar_upload = 'Ladda upp en avatar från din hårddisk';
		$this->cp_avatar_upload_failed = 'Uppladdningen av avataren misslyckades. Filen du har valt kanske inte existerar.';
		$this->cp_avatar_upload_not_image = 'Du kan endast ladda upp bilder för att använda som avatar.';
		$this->cp_avatar_upload_too_large = 'Avataren du valt att ladda up är för stor. Max filstorlek är %d kilobyte.';
		$this->cp_avatar_url = 'Skriv in en webadress till din avatar';
		$this->cp_avatar_use = 'Använd din uppladdade avatar';
		$this->cp_bday = 'Födelsedag';
		$this->cp_been_updated = 'Din profil har uppdaterats.';
		$this->cp_been_updated1 = 'Din avatar har uppdaterats.';
		$this->cp_been_updated_prefs = 'Dina inställningar har uppdaterats.';
		$this->cp_changing_pass = 'Ändrar Lösenord';
		$this->cp_contact_pm = 'Tillåt att andra kontaktar dig via messenger?';
		$this->cp_cp = 'Kontrollpanelen';
		$this->cp_current_avatar = 'Nuvarande Avatar';
		$this->cp_current_time = 'Klockan är %s.';
		$this->cp_dec = 'December'; //Translate
		$this->cp_editing_avatar = 'Redigerar Avatar';
		$this->cp_editing_profile = 'Redigerar Profil';
		$this->cp_email = 'E-post';
		$this->cp_email_form = 'Tillåt andra att kontakta dig via epost-formulär?';
		$this->cp_email_invaid = 'E-post adressen du skrivit in är ej giltig.';
		$this->cp_err_avatar = 'Misslyckades Med Att Uppdatera Avatar';
		$this->cp_err_updating = 'Misslyckades Med Att Uppdatera Profil';
		$this->cp_feb = 'Februari';
		$this->cp_file_type = 'Avataren är ej giltig. Försäkra dig om att webadressen är korrekt skriven och att filtypen är .gif, .jpg, eller .png';
		$this->cp_format = 'Namn';
		$this->cp_gmt = '[GMT] Greenwich Mean Time'; //Translate
		$this->cp_gmt_nev1 = '[GMT-1:00] Azores, Cape Verde'; //Translate
		$this->cp_gmt_nev10 = '[GMT-10:00] Hawaii'; //Translate
		$this->cp_gmt_nev11 = '[GMT-11:00] Midway Island, Samoa'; //Translate
		$this->cp_gmt_nev12 = '[GMT-12:00] International Date Line West'; //Translate
		$this->cp_gmt_nev2 = '[GMT-2:00] Mid-Atlantic'; //Translate
		$this->cp_gmt_nev3 = '[GMT-3:00] Buenos Aires, Greenland'; //Translate
		$this->cp_gmt_nev35 = '[GMT-3:30] Newfoundland'; //Translate
		$this->cp_gmt_nev4 = '[GMT-4:00] Atlantic Time Canada'; //Translate
		$this->cp_gmt_nev5 = '[GMT-5:00] Eastern Time US & Canada'; //Translate
		$this->cp_gmt_nev6 = '[GMT-6:00] Central Time US & Canada'; //Translate
		$this->cp_gmt_nev7 = '[GMT-7:00] Mountain Time US & Canada'; //Translate
		$this->cp_gmt_nev8 = '[GMT-8:00] Pacific Time US & Canada'; //Translate
		$this->cp_gmt_nev9 = '[GMT-9:00] Alaska'; //Translate
		$this->cp_gmt_pos1 = '[GMT+1:00] Amsterdam, Berlin, Rome, Stockholm, Paris';
		$this->cp_gmt_pos10 = '[GMT+10:00] Melbourne, Sydney, Guam'; //Translate
		$this->cp_gmt_pos11 = '[GMT+11:00] Magadan, New Caledonia'; //Translate
		$this->cp_gmt_pos12 = '[GMT+12:00] Auckland, Fiji'; //Translate
		$this->cp_gmt_pos2 = '[GMT+2:00] Athens, Cairo, Jerusalem'; //Translate
		$this->cp_gmt_pos3 = '[GMT+3:00] Baghdad, Moscow, Nairobi'; //Translate
		$this->cp_gmt_pos35 = '[GMT+3:30] Tehran'; //Translate
		$this->cp_gmt_pos4 = '[GMT+4:00] Abu Dhabi, Muscat, Tbilisi'; //Translate
		$this->cp_gmt_pos45 = '[GMT+4:30] Kabul'; //Translate
		$this->cp_gmt_pos5 = '[GMT+5:00] Islamabad, Karachi'; //Translate
		$this->cp_gmt_pos55 = '[GMT+5:30] Bombay, Calcutta, New Delhi'; //Translate
		$this->cp_gmt_pos6 = '[GMT+6:00] Almaty, Dhaka'; //Translate
		$this->cp_gmt_pos7 = '[GMT+7:00] Bangkok, Jakarta'; //Translate
		$this->cp_gmt_pos8 = '[GMT+8:00] Beijing, Hong Kong, Singapore'; //Translate
		$this->cp_gmt_pos9 = '[GMT+9:00] Tokyo, Seoul'; //Translate
		$this->cp_gmt_pos95 = '[GMT+9:30] Adelaide, Darwin'; //Translate
		$this->cp_header = 'Kontrollpanel';
		$this->cp_height = 'Höjd';
		$this->cp_icq = 'ICQ Nummer';
		$this->cp_interest = 'Intressen';
		$this->cp_jan = 'Januari';
		$this->cp_july = 'Juli';
		$this->cp_june = 'Juni';
		$this->cp_label_edit_avatar = 'Ändra Avatar';
		$this->cp_label_edit_pass = 'Ändra Lösenord';
		$this->cp_label_edit_prefs = 'Ändra Inställningar';
		$this->cp_label_edit_profile = 'Ändra Profil';
		$this->cp_label_edit_subs = 'Ändra Prenumerationer';
		$this->cp_language = 'Språk';
		$this->cp_less_charac = 'Ditt namn måste ha mindre än 32 bokstäver.';
		$this->cp_location = 'Hemort';
		$this->cp_login_first = 'Du måste vara inloggad för att ha tillgång till kontrollpanelen.';
		$this->cp_mar = 'Mars';
		$this->cp_may = 'Maj';
		$this->cp_msn = 'MSN namn';
		$this->cp_must_orig = 'Ditt namn måste vara identiskt med originalet. Du får endast ändra versaler och avstånd.';
		$this->cp_new_notmatch = 'De nya lösenorden du skrev in är olika.';
		$this->cp_new_pass = 'Nytt Lösenord';
		$this->cp_no_flash = 'Flash avatarer är inte tillåtna.';
		$this->cp_not_exist = 'Datumet du skrivit in (%s) finns inte!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Oktober';
		$this->cp_old_notmatch = 'Ditt gamla lösenord är ej korrekt.';
		$this->cp_old_pass = 'Gammalt Lösenord';
		$this->cp_pass_notvaid = 'Ditt lösenord är ogiltigt. Endast bokstäver, nummer, streck, understreck och mellanslag är tillåtna.';
		$this->cp_preferences = 'Ändrar Inställningar';
		$this->cp_privacy = 'Privata Inställningar';
		$this->cp_repeat_pass = 'Repetera Nytt Lösenord';
		$this->cp_sept = 'September'; //Translate
		$this->cp_show_active = 'Visa dina aktiviteter när du använder forumet?';
		$this->cp_show_email = 'Visa E-post adress i din profil?';
		$this->cp_signature = 'Signatur';
		$this->cp_size_max = 'Avataren är för stor. Max tillåtna storlek är %s x %s pixlar.';
		$this->cp_skin = 'Skin';
		$this->cp_sub_change = 'Ändra prenumerationer';
		$this->cp_sub_delete = 'Radera';
		$this->cp_sub_expire = 'Utgångsdatum';
		$this->cp_sub_name = 'Prenumerations Namn';
		$this->cp_sub_no_params = 'Inga parametrar givna.';
		$this->cp_sub_success = 'Du prenumererar nu på denna %s.';
		$this->cp_sub_type = 'Prenumerationstyp';
		$this->cp_sub_updated = 'Vald prenumeration har blivit raderad.';
		$this->cp_topic_option = 'Forum Inställningar';
		$this->cp_updated = 'Profil Uppdaterad';
		$this->cp_updated1 = 'Avatar Uppdaterad';
		$this->cp_updated_prefs = 'Inställningar Uppdaterade';
		$this->cp_user_exists = 'En användare med den namn formateringen existerar redan.';
		$this->cp_valided = 'Ditt lösenord är ändrat.';
		$this->cp_view_avatar = 'Visa Avatarer?';
		$this->cp_view_emoticon = 'Visa Smileys?';
		$this->cp_view_signature = 'Visa Signaturer?';
		$this->cp_welcome = 'Välkommen till kontrollpanelen. Härifrån kan du justera inställningarna för ditt konto. Välj från alternativen ovan.';
		$this->cp_width = 'Bredd';
		$this->cp_www = 'Hemsida';
		$this->cp_yahoo = 'Yahoo namn';
		$this->cp_zone = 'Tidszon';
	}

	function email()
	{
		$this->email_blocked = 'Den medlemmen accepterar ej epost genom vårat formulär.';
		$this->email_email = 'E-post';
		$this->email_msgtext = 'Meddelande:';
		$this->email_no_fields = 'Gå tillbaka och försäkra dig om att samtliga fält är ifyllda.';
		$this->email_no_member = 'Det finns ingen medlem med det namnet.';
		$this->email_no_perm = 'Du har inte rättigheter att sända epost från detta forum';
		$this->email_sent = 'E-post meddelandet har skickats.';
		$this->email_subject = 'Ämne:';
		$this->email_to = 'Till:';
	}

	function forum()
	{
		$this->forum_by = 'Av';
		$this->forum_can_post = 'Du kan svara i detta forum.';
		$this->forum_can_topics = 'Du kan läsa ämnen i detta forum.';
		$this->forum_cant_post = 'Du kan inte svara i detta forum.';
		$this->forum_cant_topics = 'Du kan inte läsa ämnen i detta forum.';
		$this->forum_dot = 'Prick';
		$this->forum_dot_detail = 'Visar att du skrivit inlägg i ämnet';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'Gäst';
		$this->forum_hot = 'Het';
		$this->forum_icon = 'Meddelande Ikon';
		$this->forum_jump = 'Hoppa till nyaste inlägg i ämnet';
		$this->forum_last = 'Senaste Inlägg';
		$this->forum_locked = 'Låst';
		$this->forum_moved = 'Flyttad';
		$this->forum_msg = '%s Meddelande';
		$this->forum_new = 'Ny';
		$this->forum_new_poll = 'Skapa Ny Röstning';
		$this->forum_new_topic = 'Skapa Nytt Ämne';
		$this->forum_no_topics = 'Det finns inga ämnen att visa i detta forum.';
		$this->forum_noexist = 'Forumet existerar inte.';
		$this->forum_nopost = 'Inga inlägg';
		$this->forum_not = 'Inte';
		$this->forum_noview = 'Du har inte tillåtelse att läsa forum.';
		$this->forum_pages = 'Sidor';
		$this->forum_pinned = 'Klistrad';
		$this->forum_pinned_topic = 'Klistrat Ämne';
		$this->forum_poll = 'Röstning';
		$this->forum_regfirst = 'Du har inte tillåtelse att läsa forum utan att först registrera dig.';
		$this->forum_replies = 'Svar';
		$this->forum_starter = 'Skapare';
		$this->forum_sub = 'Under-Forum';
		$this->forum_sub_last_post = 'Senaste Inlägg';
		$this->forum_sub_replies = 'Svar';
		$this->forum_sub_topics = 'Ämnen';
		$this->forum_subscribe = 'E-posta mig när nya inlägg skrivits i detta forum.';
		$this->forum_topic = 'Ämne';
		$this->forum_topics_new = 'Det finns nya inlägg i detta forum.';
		$this->forum_topics_old = 'Det finns inga nya inlägg i detta forum.';
		$this->forum_views = 'Visningar';
		$this->forum_write_topics = 'Du kan skapa nya ämnen i detta forum.';
	}

	function help()
	{
		$this->help_available_files = 'Hjälp';
		$this->help_none = 'Det finns inga hjälpfiler i databasen';
	}

	function login()
	{
		$this->login_cant_logged = 'Du kunde inte loggas in. Försäkra dig om att ditt användarnamn och lösenord är rätt.<br /><br />De är case sensitive, så \'UsErNaMe\' är inte samma sak som \'Username\'. Se även till så att cookies är aktiverade i din browser.';
		$this->login_cookies = 'Cookies måste vara tillåtna för att kunna logga in.';
		$this->login_forgot_pass = 'Jag har glömt mitt lösenord!';
		$this->login_header = 'Loggar In';
		$this->login_logged = 'Du är nu inloggad.';
		$this->login_now_out = 'Du är nu utloggad.';
		$this->login_out = 'Loggar Ut';
		$this->login_pass = 'Lösenord';
		$this->login_pass_no_id = 'Det finns ingen medlem med detta namn.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Nollställ Lösenordet';
		$this->login_pass_sent = 'Ditt lösenord har nollställts. Det nya lösenordet har skickats till din epostadress som uppgavs i ditt användarkonto.';
		$this->login_sure = 'Är du säker på att du vill logga ut från \'%s\'?';
		$this->login_user = 'Användarnamn';
	}

	function main()
	{
		$this->board_by = 'Av';
		$this->charset = 'iso-8859-1';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'Ditt användarkonto har ännu inte aktiverats';
		$this->main_activate_resend = 'Skicka aktiveringsuppgifter igen via epost.';
		$this->main_admincp = 'Admin inställningar';
		$this->main_banned = 'Du har blivit bannlyst från att läsa någonting på detta forum.';
		$this->main_code = 'Kod';
		$this->main_continue = 'Fortsätt';
		$this->main_cp = 'kontrollpanelen';
		$this->main_full = 'Fullständig';
		$this->main_help = 'hjälp';
		$this->main_load = 'belastning';
		$this->main_login = 'logga in';
		$this->main_logout = 'logga ut';
		$this->main_max_load = 'Tyvärr är %s för tillfället otillgänglig p.g.a. hög belastning.';
		$this->main_members = 'medlemmar';
		$this->main_messenger = 'Snabbmeddelanden';
		$this->main_new = 'ny';
		$this->main_next = 'nästa';
		$this->main_posts_new = 'Ny';
		$this->main_powered = 'Använders sig av';
		$this->main_prev = 'förra';
		$this->main_queries = 'förfrågningar';
		$this->main_quote = 'Citera';
		$this->main_register = 'registrera';
		$this->main_reminder = 'Påminnelse: Detta forum är stängt och kan endast läsas av administratörer.';
		$this->main_reminder_closed = 'Forumet är stängt! det kan endast ses av administratörer.';
		$this->main_said = 'sade';
		$this->main_search = 'sök';
		$this->main_seconds = 'sekunder';
		$this->main_welcome = 'Välkommen';
		$this->main_welcome_guest = 'Välkommen!';
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = ','; //Translate
		$this->submit = 'Skicka';
		$this->today = 'Idag';
		$this->yesterday = 'Igår';
	}

	function members()
	{
		$this->members_all = 'alla';
		$this->members_email = 'E-posta';
		$this->members_email_member = 'Skicka E-post till denna medlem';
		$this->members_group = 'Grupp';
		$this->members_joined = 'Registreringsdatum';
		$this->members_list = 'Medlemslista';
		$this->members_member = 'Medlem';
		$this->members_pm = 'PM'; //Translate
		$this->members_posts = 'Inlägg';
		$this->members_send_pm = 'Skicka ett personligt meddelande till denna användare';
		$this->members_title = 'Titel';
		$this->members_vist_www = 'Besök denna medlems hemsida';
		$this->members_www = 'Hemsida';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Är du säker på att du vill radera detta inlägg?';
		$this->mod_confirm_topic_delete = 'Är du säker på att du vill radera detta ämne?';
		$this->mod_error_first_post = 'Du kan inte radera första inlägget i ett ämne.';
		$this->mod_error_move_category = 'Du kan inte flytta ett ämne till en kategori.';
		$this->mod_error_move_create = 'Du har inte tillåtelse att flytta ämen till det forumet';
		$this->mod_error_move_forum = 'Du kan inte flytta ett ämne till ett forum som inte existerar.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Du kan inte flytta ett ämne till det forum det redan befinner sig i.';
		$this->mod_label_controls = 'Moderator Kontroller';
		$this->mod_label_description = 'Beskrivning';
		$this->mod_label_emoticon = 'Konvertera smileys till bilder?';
		$this->mod_label_global = 'Ämne i hela forumet';
		$this->mod_label_mbcode = 'Formatera MbKod?';
		$this->mod_label_move_to = 'Flytta till';
		$this->mod_label_options = 'Alternativ';
		$this->mod_label_post_delete = 'Radera Inlägg';
		$this->mod_label_post_edit = 'Redigera Inlägg';
		$this->mod_label_title = 'Titel';
		$this->mod_label_title_original = 'Original Titel';
		$this->mod_label_title_split = 'Dela Upp Titel';
		$this->mod_label_topic_delete = 'Radera Ämne';
		$this->mod_label_topic_edit = 'Redigera Ämne';
		$this->mod_label_topic_lock = 'Lås Ämne';
		$this->mod_label_topic_move = 'Flytta Ämne';
		$this->mod_label_topic_move_complete = 'Flytta hela ämnet till ett nytt forum';
		$this->mod_label_topic_move_link = 'Flytta hela ämnet till ett nytt forum och lämna en länk dit från det gamla forumet.';
		$this->mod_label_topic_pin = 'Klistra Ämne';
		$this->mod_label_topic_split = 'Dela Upp Ämne';
		$this->mod_missing_post = 'Inlägged existerar inte.';
		$this->mod_missing_topic = 'Ämnet existerar inte.';
		$this->mod_no_action = 'Du måste välja en ändring.';
		$this->mod_no_post = 'Du måste välja ett inlägg.';
		$this->mod_no_topic = 'Du måste välja ett ämne.';
		$this->mod_perm_post_delete = 'Du har inte tillåtelse att radera detta inlägg.';
		$this->mod_perm_post_edit = 'Du har inte tillåtelse att redigera detta inlägg.';
		$this->mod_perm_topic_delete = 'Du har inte tillåtelse att radera detta ämne.';
		$this->mod_perm_topic_edit = 'Du har inte tillåtelse att redigera detta ämne.';
		$this->mod_perm_topic_lock = 'Du har inte tillåtelse att låsa detta ämne.';
		$this->mod_perm_topic_move = 'Du har inte tillåtelse att flytta detta ämne.';
		$this->mod_perm_topic_pin = 'Du har inte tillåtelse att klistra detta ämne.';
		$this->mod_perm_topic_split = 'Du har inte tillåtelse att dela upp detta ämne.';
		$this->mod_perm_topic_unlock = 'Du har inte tillåtelse att låsa upp detta ämne.';
		$this->mod_perm_topic_unpin = 'Du har inte tillåtelse att klistra av detta ämne.';
		$this->mod_success_post_delete = 'Inlägget raderades.';
		$this->mod_success_post_edit = 'Inlägget redigerades.';
		$this->mod_success_split = 'Ämnet har nu blivit uppdelat.';
		$this->mod_success_topic_delete = 'Ämnet raderades.';
		$this->mod_success_topic_edit = 'Ämnet redigerades.';
		$this->mod_success_topic_move = 'Ämnet flyttades till ett nytt forum.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'Prick';
		$this->new_posts_dot_detail = 'Visar att du skrivit inlägg i ämnet';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'Forum'; //Translate
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'Het';
		$this->new_posts_last = 'Senaste Inlägg';
		$this->new_posts_locked = 'Låst';
		$this->new_posts_moved = 'Flyttad';
		$this->new_posts_new = 'Ny';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'Inte';
		$this->new_posts_pinned = 'Klistrad';
		$this->new_posts_poll = 'Röstning';
		$this->new_posts_topic = 'Ämne';
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
		$this->pm_cant_del = 'Du har inte tillåtelse att radera detta meddelande.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Radera Alla Meddelanden';
		$this->pm_delete = 'Radera';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Meddelande Raderat.';
		$this->pm_deleted_all = 'Meddelanden Raderade.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Meddelandet kunde inte skickat. Försäkra dig om att alla fält är ifyllda.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Inkorg';
		$this->pm_folder_new = '%s nya';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Från';
		$this->pm_group = 'Grupp';
		$this->pm_guest = 'Som gäst kan du inte använda snabbmeddelande. Logga in eller registrera dig.';
		$this->pm_joined = 'Gick Med';
		$this->pm_messenger = 'Snabbmeddelande';
		$this->pm_msgtext = 'Meddelande Text';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Du måste välja en katalog.';
		$this->pm_no_member = 'Inget meddelande kunde hittas med ett sådant ID.';
		$this->pm_no_number = 'Inget meddelande kunde hittas med det numret.';
		$this->pm_no_title = 'Inget Ämne';
		$this->pm_nomsg = 'Det finns inga meddelanden i denna katalog.';
		$this->pm_noview = 'Du har inte tillåtelse att läsa detta meddelande.';
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Snabbmeddelande';
		$this->pm_personal_msging = 'Personligt Meddelande';
		$this->pm_pm = 'PM'; //Translate
		$this->pm_posts = 'Inlägg';
		$this->pm_preview = 'Förhandsgranska';
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Svara';
		$this->pm_send = 'Skicka';
		$this->pm_sendamsg = 'Skicka Ett Meddelande';
		$this->pm_sendingpm = 'Skicka Ett PM';
		$this->pm_sendon = 'Skickat den';
		$this->pm_success = 'Ditt meddelande skickades.';
		$this->pm_sure_del = 'Är du säker på att du vill radera detta meddelande?';
		$this->pm_sure_delall = 'Är du säker på att du vill radera alla meddelanden i denna katalog?';
		$this->pm_title = 'Titel';
		$this->pm_to = 'Till';
	}

	function post()
	{
		$this->post_attach = 'Bifogade Filer';
		$this->post_attach_add = 'Bifoga Filer';
		$this->post_attach_disrupt = 'Att lägga till eller ta bort bifogade filer kommer ej att påverka ditt inlägg.';
		$this->post_attach_failed = 'Upladdningen av den bifogade filen misslyckades. Filen du specificerat kanske inte existerar.';
		$this->post_attach_not_allowed = 'Du kan inte bifoga filer av den typen.';
		$this->post_attach_remove = 'Ta Bort Bifogad Fil';
		$this->post_attach_too_large = 'Den bifogade file du valt att ladda upp är för stor. Max storlek är %d kilobyte.';
		$this->post_cant_create = 'Som gäst har du inte tillåtelse att skapa ämnen. Om du registrerar dig kan du ha möjlighet att göra detta.';
		$this->post_cant_create1 = 'Du har inte tillåtelse att skapa ämnen.';
		$this->post_cant_enter = 'Din röst registrerades inte. Ändera har du redan röstat eller så har du inte tillåtelse att rösta.';
		$this->post_cant_poll = 'Som gäst har du inte tillåtelse att skapa röstningar. Om du registrerar dig kan du ha möjlighet att göra detta.';
		$this->post_cant_poll1 = 'Du har inte tillåtelse att skapa röstningar.';
		$this->post_cant_reply = 'Du har inte tillåtelse att svara på ämnen i detta forum.';
		$this->post_cant_reply1 = 'Som gäst har du inte tillåtelse att svara på ämnen. Om du registrerar dig kan du ha möjlighet att göra detta.';
		$this->post_cant_reply2 = 'Du har inte tillåtelse att svara på ämnen.';
		$this->post_closed = 'Detta ämne är stängt.';
		$this->post_create_poll = 'Skapa Röstning';
		$this->post_create_topic = 'Skapa Ämne';
		$this->post_creating = 'Skapar Ämne';
		$this->post_creating_poll = 'Skapar Röstning';
		$this->post_flood = 'Du har skrivit ett inlägg de sensate %s sekunderna, därför måste du vänta.<br /><br />Prova igen om ytterliggare några sekunder.';
		$this->post_guest = 'Gäst';
		$this->post_icon = 'Inläggsikon';
		$this->post_last_five = 'Senaste Fem Inläggen I Bakvänd Ordning';
		$this->post_length = 'Kontrollera Längd';
		$this->post_mbcode_address = 'Skriv in en adress';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Blå';
		$this->post_mbcode_bold = 'Fet';
		$this->post_mbcode_bold1 = 'F';
		$this->post_mbcode_chocolate = 'Chokolad';
		$this->post_mbcode_code = 'Kod';
		$this->post_mbcode_color = 'Färg';
		$this->post_mbcode_coral = 'Korall';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Blodröd';
		$this->post_mbcode_darkblue = 'Mörkblå';
		$this->post_mbcode_darkred = 'Mörkröd';
		$this->post_mbcode_deepink = 'Rosa';
		$this->post_mbcode_detail = 'Skriv in en beskrivning';
		$this->post_mbcode_email = 'E-post';
		$this->post_mbcode_firered = 'Eldröd';
		$this->post_mbcode_font = 'Font'; //Translate
		$this->post_mbcode_green = 'Grön';
		$this->post_mbcode_huge = 'Störst';
		$this->post_mbcode_image = 'Bild';
		$this->post_mbcode_image1 = 'Bild';
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Kursiv';
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Stor';
		$this->post_mbcode_length = 'Ditt inlägg är "+length+" tecken.';
		$this->post_mbcode_limegreen = 'Lime Grön';
		$this->post_mbcode_medium = 'Medium'; //Translate
		$this->post_mbcode_orange = 'Orange'; //Translate
		$this->post_mbcode_orangered = 'Orange Röd';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Purpur';
		$this->post_mbcode_quote = 'Citat';
		$this->post_mbcode_red = 'Röd';
		$this->post_mbcode_royalblue = 'Ljusblå';
		$this->post_mbcode_sandybrown = 'Sand';
		$this->post_mbcode_seagreen = 'Sjögrön';
		$this->post_mbcode_sienna = 'Brun';
		$this->post_mbcode_silver = 'Silver'; //Translate
		$this->post_mbcode_size = 'Storlek';
		$this->post_mbcode_skyblue = 'Himmelsblå';
		$this->post_mbcode_small = 'Liten';
		$this->post_mbcode_strike = 'Genomstruken';
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Turkos';
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Minst';
		$this->post_mbcode_tomato = 'Tomat';
		$this->post_mbcode_underline = 'Understruken';
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Beige';
		$this->post_msg = 'Meddelande';
		$this->post_must_msg = 'Du måste skriva något när du gör ett inlägg.';
		$this->post_must_options = 'Du måste inkludera alterntiv när du skapar en ny röstning.';
		$this->post_must_title = 'Du måste skriva en titel när du skapar ett nytt ämne.';
		$this->post_new_poll = 'Ny Röstning';
		$this->post_new_topic = 'Nytt Ämne';
		$this->post_no_forum = 'Forumet kunde inte hittas.';
		$this->post_no_topic = 'Inget ämne valt.';
		$this->post_no_vote = 'Du måste välja ett alternativ att rösta på.';
		$this->post_option_emoticons = 'Konvertera Smileys till bilder?';
		$this->post_option_global = 'Visa ämnet i hela forumet?';
		$this->post_option_mbcode = 'Formatera MbKod?';
		$this->post_optional = 'valfri';
		$this->post_options = 'Alternativ';
		$this->post_poll_options = 'Röstnings Alternativ';
		$this->post_poll_row = 'En på varje rad';
		$this->post_posted = 'Skrivet';
		$this->post_posting = 'Skriver Inlägg';
		$this->post_preview = 'Förhandsgranska';
		$this->post_reply = 'Svara';
		$this->post_reply_topic = 'Svara På Ämne';
		$this->post_replying = 'Svarar På Ämne';
		$this->post_replying1 = 'Svarar';
		$this->post_smiles = 'Klickbara Smilies';
		$this->post_too_many_options = 'Du måste ha mellan 2 och %d alternativ i en röstning.';
		$this->post_topic_detail = 'Ämnesbeskrivning';
		$this->post_topic_title = 'Ämnestitel';
		$this->post_view_topic = 'Visa Alla Inlägg';
		$this->post_voting = 'Röstar';
	}

	function printer()
	{
		$this->printer_back = 'Tillbaka';
		$this->printer_not_found = 'Ämnet Kunde Ej Hittas. Det kan ha blivit raderat, flyttat eller så har det aldrig existerat.';
		$this->printer_not_found_title = 'Ämne Kunde Ej Hittas';
		$this->printer_perm_topics = 'Du har inte tillåtelse att visa ämnen.';
		$this->printer_perm_topics_guest = 'Du har inte tillåtelse att visa ämnen förrän du registrerat dig.';
		$this->printer_posted_on = 'Skrivet';
		$this->printer_send = 'Skriv Ut';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM Namn';
		$this->profile_av_sign = 'Avatar och Signatur';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'Födelsedag';
		$this->profile_contact = 'Kontakta';
		$this->profile_email_address = 'E-post Adress';
		$this->profile_fav = 'Favorit Forum';
		$this->profile_fav_forum = '%s (%d%% av dessa medlemsinlägg)';
		$this->profile_icq_uin = 'ICQ Nummer';
		$this->profile_info = 'Information'; //Translate
		$this->profile_interest = 'Intressen';
		$this->profile_joined = 'Sammanfodade';
		$this->profile_last_post = 'Senaste Inlägg';
		$this->profile_list = 'Medlemslista';
		$this->profile_location = 'Hemort';
		$this->profile_member = 'Medlems Grupp';
		$this->profile_member_title = 'Medlems Titel';
		$this->profile_msn = 'Mitt riktiga namn';
		$this->profile_must_user = 'Du måste skriva in en användare för att se en profil.';
		$this->profile_no_member = 'Det finns ingen medlem med det användarnumret. Kontot kan ha blivit raderat.';
		$this->profile_none = '[ Ingen ]';
		$this->profile_not_post = 'har inte gjort något inlägg ännu.';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Privata Meddelanden';
		$this->profile_postcount = '%s totalt, %s per dag';
		$this->profile_posts = 'Inlägg';
		$this->profile_private = '[ Privat ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Signatur';
		$this->profile_unkown = '[ Okänd ]';
		$this->profile_view_profile = 'Visar Profil';
		$this->profile_www = 'Hemsida';
		$this->profile_yahoo = 'Yahoo namn';
	}

	function register()
	{
		$this->register_activated = 'Ditt konto är aktiverat!';
		$this->register_activating = 'Konto Aktivering';
		$this->register_activation_error = 'Det uppstod ett problem när ditt konto skulle aktiveras. Kolla så att din browser har den kompletta aktiveringsadressen från mejlet. Om problemet kvarstår, kontakta forumets administrator för att få ett nytt aktiveringsmejl.';
		$this->register_confirm_passwd = 'Bekräfta Lösenordet';
		$this->register_done = 'Du är registrerad! Du kan nu logga in.';
		$this->register_email = 'E-post Adress';
		$this->register_email_invalid = 'E-post adressen du skrivit in är ogiltig.';
		$this->register_email_used = 'E-post adressen du skrivit in används redan av en medlem.';
		$this->register_fields = 'Alla fält är inte ifyllda.';
		$this->register_image = 'Var god skriv av den text som visas i bilden';
		$this->register_image_invalid = 'För att bevisa att det är en människa som registrerar och inte ett datorprogram, skriv av texten som visas i bilden.';
		$this->register_must_activate = 'Du är nu registrerad. Ett epostmeddelande har sänts till %s med information om hur du aktiverar ditt användarkonto. Dina rättigheter i forumet är begränsade tills du utfört aktiveringen.';
		$this->register_name_invalid = 'Namnet du skrev in är för långt.';
		$this->register_name_taken = 'Det medlemsnamnet är redan upptaget.';
		$this->register_new_user = 'Önskat Användarnamn';
		$this->register_pass_invalid = 'Lösenordet du skrev in är ogiltigt. Försäkra dig om att enbart giltiga tecken som bokstäver, nummer, streck, understreck och mellanslag används och att lösenordet är minst 5 bokstäver långt.';
		$this->register_pass_match = 'Lösenorden du skrev in är olika.';
		$this->register_passwd = 'Lösenord';
		$this->register_reg = 'Registrera';
		$this->register_reging = 'Registrerar';
	}

	function search()
	{
		$this->search_advanced = 'Avancerade Alternativ';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Enkel Sökning';
		$this->search_characters = 'bokstäverna av ett inlägg';
		$this->search_day = 'dag';
		$this->search_days = 'dagar';
		$this->search_exact_name = 'exakt namn';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Sök Efter';
		$this->search_forum = 'Forum'; //Translate
		$this->search_group = 'Grupp';
		$this->search_guest = 'Gäst';
		$this->search_in = 'Sök inom';
		$this->search_in_posts = 'Sök endast i inlägg';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Gick Med';
		$this->search_level = 'Medlemsstatus';
		$this->search_match = 'Sök med matchning';
		$this->search_matches = 'Träffar';
		$this->search_month = 'Månad';
		$this->search_months = 'månader';
		$this->search_mysqldoc = 'MySQL Dokumentation';
		$this->search_newer = 'nyare';
		$this->search_no_results = 'Din sökning gav inget resultat.';
		$this->search_no_words = 'Du måste specificera några söktermer.<br /><br />Varje term måste vara minst 3 tecken inklusive bokstäver, nummer, apostrofer och understreck.';
		$this->search_older = 'äldre';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Visa endast de första';
		$this->search_partial_name = 'delar av namnet';
		$this->search_post_icon = 'Inläggs Ikon';
		$this->search_posted_on = 'Skrivet';
		$this->search_posts = 'Inlägg';
		$this->search_posts_by = 'Endast inlägg av';
		$this->search_regex = 'Sök med vanligt uttryck';
		$this->search_regex_failed = 'Ditt uttryck misslyckades. Var god se MSQL-dokumentationen: hjälp för vanliga uttryck ';
		$this->search_relevance = 'Relevans: %d%%';
		$this->search_replies = 'Inlägg';
		$this->search_result = 'Söknings Resultat';
		$this->search_search = 'Sök';
		$this->search_select_all = 'Välj Samtliga';
		$this->search_show_posts = 'Visa matchande inlägg';
		$this->search_sound = 'Sök med ljud';
		$this->search_starter = 'Skapare';
		$this->search_than = 'än';
		$this->search_topic = 'Ämne';
		$this->search_unreg = 'Ej registrerad';
		$this->search_week = 'vecka';
		$this->search_weeks = 'veckor';
		$this->search_year = 'år';
	}

	function topic()
	{
		$this->topic_attached = 'Bifogad fil:';
		$this->topic_attached_downloads = 'nedladdningar';
		$this->topic_attached_perm = 'Du har inte tillåtelse att ladda hem den här filen.';
		$this->topic_attached_title = 'Bifogad Fil';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Skapa Ny Röstning';
		$this->topic_create_topic = 'Skapa Nytt Ämne';
		$this->topic_delete = 'Radera';
		$this->topic_delete_post = 'Radera detta inlägg';
		$this->topic_edit = 'Redigera';
		$this->topic_edit_post = 'Redigera detta inlägg';
		$this->topic_edited = 'Senast redigerad %s av %s';
		$this->topic_error = 'Fel';
		$this->topic_group = 'Grupp';
		$this->topic_guest = 'Gäst';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Gick Med';
		$this->topic_level = 'Medelemsnivå';
		$this->topic_links_aim = 'Skicka ett AIM meddelande till %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Skicka ett e-post till %s';
		$this->topic_links_icq = 'Skicka ett ICQ meddelande till %s';
		$this->topic_links_msn = 'Visa %s\'s MSN profil';
		$this->topic_links_pm = 'Skicka ett personligt meddelande till %s';
		$this->topic_links_web = 'Besök %s\'s hemsida';
		$this->topic_links_yahoo = 'Skicka ett meddelande till %s med Yahoo! Messenger';
		$this->topic_lock = 'Lås';
		$this->topic_locked = 'Ämnet Låst';
		$this->topic_move = 'Flytta';
		$this->topic_no_votes = 'Det finns inga röster i den här röstningen.';
		$this->topic_not_found = 'Ämnet Kunde Inte Hittas';
		$this->topic_not_found_message = 'Ämnet kunde inte hittas. Det kan ha blivit raderat, flyttat eller så har det aldrig funnits.';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Ämnes Alternativ';
		$this->topic_pages = 'Sidor';
		$this->topic_perm_view = 'Du har inte tillåtelse att läsa ämnen.';
		$this->topic_perm_view_guest = 'Du har inte tillåtelse att läsa ämnen innan du registrerat dig.';
		$this->topic_pin = 'Klistra';
		$this->topic_posted = 'Postad';
		$this->topic_posts = 'Inlägg';
		$this->topic_print = 'Visa Utskriftsvänlig';
		$this->topic_quote = 'Svara med ett citat från detta inlägg';
		$this->topic_reply = 'Svara på Ämne';
		$this->topic_split = 'Dela upp';
		$this->topic_split_finish = 'Avsluta all uppdelning';
		$this->topic_split_keep = 'Flytta inte på detta inlägg';
		$this->topic_split_move = 'Flytta detta inlägg';
		$this->topic_subscribe = 'E-posta mig när inlägg skrivits i detta ämne';
		$this->topic_top = 'Gå till toppen av den här sidan';
		$this->topic_unlock = 'Lås Upp';
		$this->topic_unpin = 'Klistra Av';
		$this->topic_unreg = 'Oregistrerad';
		$this->topic_view = 'Visa Resultat';
		$this->topic_viewing = 'Visar Ämne';
		$this->topic_vote = 'Rösta';
		$this->topic_vote_count_plur = '%d röster';
		$this->topic_vote_count_sing = '%d röst';
		$this->topic_votes = 'Röster';
	}
}
?>