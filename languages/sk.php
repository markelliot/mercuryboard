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
 * $Id: sk.php,v 1.15 2006/07/26 17:56:20 jon Exp $
 **/

/**
 * Slovak language module
 *
 * @author Anonymous
 * @since 1.1.0
 **/
class sk
{
	function active()
	{
		$this->active_last_action = 'Posledná akcia';
		$this->active_modules_active = 'Prezeranie aktívnych uivate¾ov';
		$this->active_modules_board = 'Prezeranie indexu';
		$this->active_modules_cp = 'Pouitie ovládacieho panela';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'Pouívanie helpu';
		$this->active_modules_login = 'Logging In/Out';
		$this->active_modules_members = 'Prezeranie zoznamu èlenov';
		$this->active_modules_mod = 'Moderovanie';
		$this->active_modules_pm = 'Pouívanie odkazovaèa';
		$this->active_modules_post = 'Prispievanie';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_search = 'Vyh¾adávanie';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = 'Èas';
		$this->active_user = 'Uivate¾';
		$this->active_users = 'Aktívni uivatelia';
	}

	function board()
	{
		$this->board_active_users = 'Aktívni uivatelia';
		$this->board_birthdays = 'Dnes má narodeniny:';
		$this->board_can_post = 'V tomto fóre môete zasiela odpovede.';
		$this->board_can_topics = 'V tomto fóre môete èíta príspevky, ale nemôete zaklada nové témy.';
		$this->board_cant_post = 'V tomto fóre nemôete zasiela odpovede.';
		$this->board_cant_topics = 'V tomto fóre nemôete ani zaklada témy, ani èíta príspevky.';
		$this->board_forum = 'Fórum';
		$this->board_guests = 'hosts';
		$this->board_last_post = 'Najnovší príspevok';
		$this->board_mark = 'Preznaè všetky príspevky na "preèítané"';
		$this->board_mark1 = 'Všetky príspevky a fóra boli preznaèené na "preèítané"';
		$this->board_members = 'èlenovia';
		$this->board_message = '%s Správa';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'Dnes nemá iadny èlen narodeniny.';
		$this->board_nobody = 'Momentálne nie je iadny èlen online.';
		$this->board_nopost = 'iadne príspevky';
		$this->board_noview = 'Nemáte povolenie na èítanie tohoto fóra.';
		$this->board_regfirst = 'Nemáte povolenie na èítanie tohoto fóra. Po zaregistrovaní sa mono budete ma.';
		$this->board_replies = 'Odpovede';
		$this->board_stats = 'Štatistika';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_topics = 'Témy';
		$this->board_topics_new = 'V tomto fóre sú nejaké nové príspevky';
		$this->board_topics_old = 'V tomto fóre nie sú iadne nové príspevky';
		$this->board_users = 'users'; //Translate
		$this->board_write_topics = 'V tomto fóre máte právo prezera témy a vytvárat nové .';
	}

	function cp()
	{
		$this->cp_aim = 'AIM Screen Name'; //Translate
		$this->cp_already_member = 'Emailová adresa, ktorú ste zadali u bola pridelená inému èlenovi.';
		$this->cp_apr = 'Apríl';
		$this->cp_aug = 'August'; //Translate
		$this->cp_avatar_current = 'Váše súèasné prevtelenie';
		$this->cp_avatar_error = 'Chyba prevtelenia';
		$this->cp_avatar_must_select = 'Musíte si vybra prevtelenie.';
		$this->cp_avatar_none = 'Nepoíva prevtelenie.';
		$this->cp_avatar_pixels = 'pixels'; //Translate
		$this->cp_avatar_select = 'Vyberte si prevtelenie';
		$this->cp_avatar_size_height = 'Vaše prevtelenie musí ma ve¾kost medzi 1 a';
		$this->cp_avatar_size_width = 'Šírka Vašeho prevtelenia musí by medzi 1 a';
		$this->cp_avatar_upload = 'Uploadova prevtelenie z local HDD';
		$this->cp_avatar_upload_failed = 'Uploadovanie prevtelenia zlyhalo. Súbor neexistuje.';
		$this->cp_avatar_upload_not_image = 'Uploadova moete iba obrázky ptr Vaše prevtelenie.';
		$this->cp_avatar_upload_too_large = 'Prevtelenie, ktoré ste zadali pre upload je prive¾ké. Maximálna povolená ve¾kos je %d kB.';
		$this->cp_avatar_url = 'Zadajte URL vášho prevtelenia';
		$this->cp_avatar_use = 'Poui uploadované prevtelenie';
		$this->cp_bday = 'Narodeniny';
		$this->cp_been_updated = 'Váš profil bol aktualizovanı.';
		$this->cp_been_updated1 = 'Vaše prevtelenie bolo aktualizované.';
		$this->cp_been_updated_prefs = 'Vaše nastavenia boli aktualizované.';
		$this->cp_changing_pass = 'Zmena hesla';
		$this->cp_contact_pm = 'Dovolíte ostatnım, aby Vás kontaktovali cez odkazovaè?';
		$this->cp_cp = 'Ovládací panel';
		$this->cp_current_avatar = 'Aktuálne prevtelenie';
		$this->cp_current_time = 'Teraz je %s.';
		$this->cp_dec = 'December'; //Translate
		$this->cp_editing_avatar = 'Zmena prevtelenia';
		$this->cp_editing_profile = 'Zmena profilu';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'Dovolíte ostatnım, aby Vás kontaktovali cez email?';
		$this->cp_email_invaid = 'Email, ktorı ste zadali vyzerá by neplatnı.';
		$this->cp_err_avatar = 'Chyba pri aktualizácii prevtelenia.';
		$this->cp_err_updating = 'Chyba pri aktualizácii profilu.';
		$this->cp_feb = 'Február';
		$this->cp_file_type = 'Prevtelenie, ktoré ste zadali je neplatné. Uistite sa, èi má URL správny formát a èi je dotyènı súbor typu gif, jpg alebo png.';
		$this->cp_format = 'Vaše meno sa bude zobrazova ako';
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
		$this->cp_gmt_pos1 = '[GMT+1:00] Amsterdam, Berlin, Rome, Paris, Prague, Wien, Bratislava';
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
		$this->cp_header = 'Ovládací panel uivate¾a';
		$this->cp_height = 'Vıška';
		$this->cp_icq = 'ICQ èíslo';
		$this->cp_interest = 'Záujmy';
		$this->cp_jan = 'Január';
		$this->cp_july = 'Júl';
		$this->cp_june = 'Jún';
		$this->cp_label_edit_avatar = 'Zmena prevtelenia';
		$this->cp_label_edit_pass = 'Zmena hesla';
		$this->cp_label_edit_prefs = 'Zmena nastavení';
		$this->cp_label_edit_profile = 'Zmena profilu';
		$this->cp_label_edit_subs = 'Editovanie objednávok';
		$this->cp_language = 'Jazyk';
		$this->cp_less_charac = 'Vaše meno musí by kratšie, ako 32 znakov.';
		$this->cp_location = 'Location'; //Translate
		$this->cp_login_first = 'Pre prístup k Vašemu ovládaciemu panelu sa musíte nalogova.';
		$this->cp_mar = 'Marec';
		$this->cp_may = 'Máj';
		$this->cp_msn = 'MSN Identity'; //Translate
		$this->cp_must_orig = 'Vaše meno sa musí zhodova s originálom. Môete zmeni iba ve¾kos a medzery.';
		$this->cp_new_notmatch = 'Nové heslá, ktoré ste zadali, sa nezhodujú.';
		$this->cp_new_pass = 'Nové heslo';
		$this->cp_no_flash = 'Flash prevtelenia tu nie sú povolené.';
		$this->cp_not_exist = 'Dátum, ktorı ste zadali (%s), neexistuje!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Octóber';
		$this->cp_old_notmatch = 'Pôvodné heslo, ktoré ste zadali sa nezhoduje s heslom v databáze.';
		$this->cp_old_pass = 'Pôvodné heslo';
		$this->cp_pass_notvaid = 'Vaše heslo je neplatné. Uistite sa, e obsahuje len platné znaky ako sú písmená, èísla, pomlèka, podtrítko alebo medzera.';
		$this->cp_preferences = 'Zmena nastavení';
		$this->cp_privacy = 'Privátne monosti';
		$this->cp_repeat_pass = 'Ešte raz nové heslo';
		$this->cp_sept = 'September'; //Translate
		$this->cp_show_active = 'Show your activities when you are using the board?'; //Translate
		$this->cp_show_email = 'Zobrazova v profile aj email?';
		$this->cp_signature = 'Podpis';
		$this->cp_size_max = 'Pevtelenie, ktoré ste zadali, je prive¾ké. Maximálna ve¾kos je povolená %s na %s pixlov.';
		$this->cp_skin = 'Skin nástenky';
		$this->cp_sub_change = 'Zmena objednávok';
		$this->cp_sub_delete = 'Zmaza';
		$this->cp_sub_expire = 'Dátum vypršania platnosti';
		$this->cp_sub_name = 'Názov objednávky';
		$this->cp_sub_no_params = 'Neboli zadané iadne parametre.';
		$this->cp_sub_success = 'You are now subscribed to this %s.'; //Translate
		$this->cp_sub_type = 'Typ objednávky';
		$this->cp_sub_updated = 'Oznaèené objednávky boli vymazané.';
		$this->cp_topic_option = 'Monosti témy';
		$this->cp_updated = 'Profil bol aktualizovanı';
		$this->cp_updated1 = 'Prevtelenie bolo aktualizované';
		$this->cp_updated_prefs = 'Nastavenia boli aktualizované';
		$this->cp_user_exists = 'Uívate¾ s takımto menom u existuje.';
		$this->cp_valided = 'Vaše heslo bolo overené a zmenené.';
		$this->cp_view_avatar = 'Ukáza prevtelenia?';
		$this->cp_view_emoticon = 'Ukáza smajlikov?';
		$this->cp_view_signature = 'Ukáza podpisy?';
		$this->cp_welcome = 'Buïte vítanı v uivate¾skom ovládacom paneli. Odtia¾to mono nastavova Vaše konto. Vyberte si z nasledujúcich moností.';
		$this->cp_width = 'Šírka';
		$this->cp_www = 'Homepage'; //Translate
		$this->cp_yahoo = 'Yahoo Identity'; //Translate
		$this->cp_zone = 'Èasová zóna';
	}

	function email()
	{
		$this->email_blocked = 'Tento èlen neprijíma email z tohoto formulára.';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Obsah emailu:';
		$this->email_no_fields = 'Vráte sa o overte, èi sú všetky polia vyplnené.';
		$this->email_no_member = 'iaden èlen s takımto menom sa nenašiel.';
		$this->email_no_perm = 'Nemáte povolenie posiela emaily z tohoto fóra.';
		$this->email_sent = 'Váš email bol odoslanı.';
		$this->email_subject = 'Predmet:';
		$this->email_to = 'To:'; //Translate
	}

	function forum()
	{
		$this->forum_by = 'Napísal';
		$this->forum_can_post = 'V tomto fóre môete odpoveda.';
		$this->forum_can_topics = 'V tomto fóre si môete prezera témy.';
		$this->forum_cant_post = 'V tomto fóre nemáte povolenie odpoveda.';
		$this->forum_cant_topics = 'V tomto fóre nemáte povolenie prezera témy.';
		$this->forum_dot = 'dot(to èo je?)';
		$this->forum_dot_detail = 'ukazuje, e ste pod danú tému prispeli';
		$this->forum_forum = 'Fórum';
		$this->forum_guest = 'Guest'; //Translate
		$this->forum_hot = 'dôleité';
		$this->forum_icon = 'Ikona správy';
		$this->forum_jump = 'Hop na najnovšie príspevky pod touto témou';
		$this->forum_last = 'Najnovší príspevok';
		$this->forum_locked = 'Zamknuté';
		$this->forum_moved = 'Presunuté';
		$this->forum_msg = '%s Správa';
		$this->forum_new = 'nové';
		$this->forum_new_poll = 'Zaloi nové hlasovanie';
		$this->forum_new_topic = 'Zaloi novú tému';
		$this->forum_no_topics = 'V tomto fóre nie sú iadne témy.';
		$this->forum_noexist = 'Zadané fórum neexistuje.';
		$this->forum_nopost = 'Nie sú príspevky';
		$this->forum_not = 'málo';
		$this->forum_noview = 'Nemáte povolenie na prezeranie fór.';
		$this->forum_pages = 'Stránky';
		$this->forum_pinned = 'Prišpendlené';
		$this->forum_pinned_topic = 'Prišpendlená téma';
		$this->forum_poll = 'Hlasovanie';
		$this->forum_regfirst = 'Nemáte povolenie na prezeranie fór. Ak sa zaregistrujete, mono budete ma.';
		$this->forum_replies = 'Odpovede';
		$this->forum_starter = 'Zakladate¾';
		$this->forum_sub = 'Pod-Fórum';
		$this->forum_sub_last_post = 'Najnovší príspevok';
		$this->forum_sub_replies = 'Odpovede';
		$this->forum_sub_topics = 'Témy';
		$this->forum_subscribe = 'Posla emailom nové príspovky v tomto fóre';
		$this->forum_topic = 'Téma';
		$this->forum_topics_new = 'V tomto fóre sú nejaké nové príspevky.';
		$this->forum_topics_old = 'V tomto fóre nie sú iadne nové príspevky';
		$this->forum_views = 'Videné';
		$this->forum_write_topics = 'V tomto fóre máte povolenie zaklada témy.';
	}

	function help()
	{
		$this->help_available_files = 'Hélp';
		$this->help_none = 'V databáze nie sú iadne súbory s helpom';
	}

	function login()
	{
		$this->login_cant_logged = 'Pravdepodobne nie ste prihlásenı. Skúste skontrolova Váš login a heslo.<br /><br />Sú citlivé na ve¾ké a malé znaky, take \'UsErNaMe\' nie je to isté, èo \'Username\'. A taktie si overte, èi sú vo Vašom prehliadaèi povolené cookies.';
		$this->login_cookies = 'Pre nalogovanie musíte povoli cookies.';
		$this->login_forgot_pass = 'Forgot your password?'; //Translate
		$this->login_header = 'Logging In'; //Translate
		$this->login_logged = 'Teraz ste nalogovanı.';
		$this->login_now_out = 'Teraz ste odlogovanı.';
		$this->login_out = 'Logging Out'; //Translate
		$this->login_pass = 'Heslo';
		$this->login_pass_no_id = 'There is no member with the user name you entered.'; //Translate
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Reset Password'; //Translate
		$this->login_pass_sent = 'Your password has been reset. The new password has been sent to the email address associated with your account.'; //Translate
		$this->login_sure = '\'%s\', urèite sa chcete odhlási?';
		$this->login_user = 'Meno uivate¾a';
	}

	function main()
	{
		$this->board_by = 'Od';
		$this->charset = 'windows-1250';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'Váš úèet ešte nebol aktivovanı.';
		$this->main_activate_resend = 'Znovu posla aktivaènı email';
		$this->main_admincp = 'nastavenia fór';
		$this->main_banned = 'Vám bolo ia¾ komplet celé fórum zatrhnuté.';
		$this->main_code = 'Code'; //Translate
		$this->main_continue = 'Pokraèova';
		$this->main_cp = 'ovládací panel';
		$this->main_full = 'Full'; //Translate
		$this->main_help = 'hélp';
		$this->main_load = 'load'; //Translate
		$this->main_login = 'login'; //Translate
		$this->main_logout = 'logout'; //Translate
		$this->main_max_load = 'Je nám ¾úto, ale %s momentálne nie je dostupné kôli strašnej mase online uivate¾ov.';
		$this->main_members = 'èlenovia';
		$this->main_messenger = 'odkazovaè';
		$this->main_new = 'nové';
		$this->main_next = 'nasledujúce';
		$this->main_posts_new = 'nové';
		$this->main_powered = 'Powered by'; //Translate
		$this->main_prev = 'predošlé';
		$this->main_queries = 'DB dotazov';
		$this->main_quote = 'Citácia';
		$this->main_register = 'registrácia';
		$this->main_reminder = 'HoSiPa';
		$this->main_reminder_closed = 'Fórum je uzavreté a prístupné len pre adminov.';
		$this->main_said = 'poviedali';
		$this->main_search = 'h¾adanie';
		$this->main_seconds = 'sec';
		$this->main_welcome = 'Vitajte';
		$this->main_welcome_guest = 'Vitajte!';
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = ','; //Translate
		$this->submit = 'OK';
		$this->today = 'Today'; //Translate
		$this->yesterday = 'Yesterday'; //Translate
	}

	function members()
	{
		$this->members_all = 'všetko';
		$this->members_email = 'email';
		$this->members_email_member = 'pošli email tomuto èlenovi';
		$this->members_group = 'skupina';
		$this->members_joined = 'registrácia';
		$this->members_list = 'zoznam èlenov';
		$this->members_member = 'èlen';
		$this->members_pm = 'odkazovaè';
		$this->members_posts = 'príspevky';
		$this->members_send_pm = 'posla tomuto èlenovi odkaz';
		$this->members_title = 'titul';
		$this->members_vist_www = 'navštívi webstránku tohoto èlena';
		$this->members_www = 'webstránka';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Urèite chcete zmaza tento príspevok?';
		$this->mod_confirm_topic_delete = 'Urèite chcete zmaza túto tému?';
		$this->mod_error_first_post = 'Nemôete zmaza prvı príspevok pod témou.';
		$this->mod_error_move_category = 'Nemôete presunú tému do kategórie.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Nemôete presunú tému do fóra. ktoré neexistuje.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Nemôete presunú tému do fóra, v ktorom sa momentálne nachádza.';
		$this->mod_label_controls = 'Moderator Controls'; //Translate
		$this->mod_label_description = 'Popis';
		$this->mod_label_emoticon = 'Konvertova textovıch smajlikov na obrázky?';
		$this->mod_label_global = 'Global Topic'; //Translate
		$this->mod_label_mbcode = 'Format MbCode?'; //Translate
		$this->mod_label_move_to = 'Presunú ..';
		$this->mod_label_options = 'Monosti';
		$this->mod_label_post_delete = 'Zmaza príspevok';
		$this->mod_label_post_edit = 'Editova príspevok';
		$this->mod_label_title = 'Nadpis';
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Split Title'; //Translate
		$this->mod_label_topic_delete = 'Zmaza tému';
		$this->mod_label_topic_edit = 'Editova tému';
		$this->mod_label_topic_lock = 'Zamknú tému';
		$this->mod_label_topic_move = 'Presunú tému';
		$this->mod_label_topic_move_complete = 'Kompletne presunú tému do nového fóra';
		$this->mod_label_topic_move_link = 'Presunú tému do nového fóra a zanecha link na nové umiestnenie v pôvodnom fóre.';
		$this->mod_label_topic_pin = 'Prišpendli tému';
		$this->mod_label_topic_split = 'Split Topic'; //Translate
		$this->mod_missing_post = 'Špecifikovanı príspevok neexistuje.';
		$this->mod_missing_topic = 'Špecifikovaná téma neexistuje.';
		$this->mod_no_action = 'Musíte špecifikova èinnos.';
		$this->mod_no_post = 'Musíte špecifikova príspevok.';
		$this->mod_no_topic = 'Musíte špecifikova tému.';
		$this->mod_perm_post_delete = 'Nemáte povolenie na zmazanie tohoto príspevku.';
		$this->mod_perm_post_edit = 'Nemáte povolenie na editáciu tohoto príspevku.';
		$this->mod_perm_topic_delete = 'Nemáte povolenie na zmazanie tejto témy.';
		$this->mod_perm_topic_edit = 'Nemáte povolenie na editáciu tejto témy.';
		$this->mod_perm_topic_lock = 'Nemáte povolenie na zamknutie tejto témy.';
		$this->mod_perm_topic_move = 'Nemáte povolenie na presúvanie tejto témy.';
		$this->mod_perm_topic_pin = 'Nemáte povolenie na prišpendlenie tejto témy.';
		$this->mod_perm_topic_split = 'You do not have permission to split this topic.'; //Translate
		$this->mod_perm_topic_unlock = 'Nemáte povolenie na odomknutie tejto témy.';
		$this->mod_perm_topic_unpin = 'Nemáte povolenie na odšpendlenie tejto témy.';
		$this->mod_success_post_delete = 'Príspevok bol úspešne zmazanı.';
		$this->mod_success_post_edit = 'Príspevok bol úspešne zeditovanı.';
		$this->mod_success_split = 'The topic was successfully split.'; //Translate
		$this->mod_success_topic_delete = 'Téma bola úspešne zmazaná';
		$this->mod_success_topic_edit = 'Téma bola úspešne zeditovaná.';
		$this->mod_success_topic_move = 'Téma bola úspešne presunutá do nového fóra.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'dot(to èo je?)';
		$this->new_posts_dot_detail = 'ukazuje, e ste pod danú tému prispeli';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'Fórum';
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'dôleité';
		$this->new_posts_last = 'Najnovší príspevok';
		$this->new_posts_locked = 'Zamknuté';
		$this->new_posts_moved = 'Presunuté';
		$this->new_posts_new = 'nové';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'málo';
		$this->new_posts_pinned = 'Prišpendlené';
		$this->new_posts_poll = 'Hlasovanie';
		$this->new_posts_topic = 'Téma';
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
		$this->pm_cant_del = 'Nemáte povolenie zmaza tento odkaz.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Zmaza všetky odkazy';
		$this->pm_delete = 'Zmaza';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Odkaz bol zmazanı.';
		$this->pm_deleted_all = 'Odkazy boli zmazané.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Váš odkaz sa nedá posla. Uistite sa, e ster vyplnili všetky povinné polia.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Inbox'; //Translate
		$this->pm_folder_new = '%s new'; //Translate
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Od';
		$this->pm_group = 'Skupina';
		$this->pm_guest = 'Ako návštevník (guest) nemáte povolenie pouíva odkazovaè. Prosím nalogujte sa alebo sa zaregistrujte.. alebo sa dajte vypcha.';
		$this->pm_joined = 'Registrácia';
		$this->pm_messenger = 'Odkazovaè';
		$this->pm_msgtext = 'Text odkazu';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Musíte zada adresár.';
		$this->pm_no_member = 'Takéto ID nemá iadny èlen.';
		$this->pm_no_number = 'Takéto èíslo nemá iadny odkaz.';
		$this->pm_no_title = 'Chıba predmet';
		$this->pm_nomsg = 'V tomto adresári nie sú iadne odkazy.';
		$this->pm_noview = 'Nemáte povolenie prezera si tento odkaz.';
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Odkazovaè';
		$this->pm_personal_msging = 'Posielanie odkazu';
		$this->pm_pm = 'PM'; //Translate
		$this->pm_posts = 'Príspevky';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Odpoveda';
		$this->pm_send = 'Posla';
		$this->pm_sendamsg = 'Posla odkaz';
		$this->pm_sendingpm = 'Posielanie odkazu';
		$this->pm_sendon = 'Odoslané v';
		$this->pm_success = 'Váš odkaz bol úspešne zaslanı.';
		$this->pm_sure_del = 'Urèite chcete zmaza tento odkaz?';
		$this->pm_sure_delall = 'Urèite chcete zmaza všetky odkazy v tomto adresári?';
		$this->pm_title = 'Nadpis';
		$this->pm_to = 'To'; //Translate
	}

	function post()
	{
		$this->post_attach = 'Prílohy';
		$this->post_attach_add = 'Prida prílohu';
		$this->post_attach_disrupt = 'Pridávanie alebo uberanie príloh nenaruší Váš príspevok.';
		$this->post_attach_failed = 'Upload prílohy neuspel. Súbor, ktorı ste špecifikovali asi neexistuje.';
		$this->post_attach_not_allowed = 'Súbory tohoto typu nemono priloi.';
		$this->post_attach_remove = 'Odobra prílohu';
		$this->post_attach_too_large = 'Špecifikovanı súbor je prive¾kı. Maximálna povolená ve¾kos je %d kB.';
		$this->post_cant_create = 'Ako návštevník (guest) nemáte povolenie zaklada témy. Ak sa zaregistrujete, mono budete ma.';
		$this->post_cant_create1 = 'Nemáte povolenie zaklada témy.';
		$this->post_cant_enter = 'Vaše hlasovanie je neplatné. buï ste o tejto otázke u hlasovali alebo nemáte povolenie hlasova.';
		$this->post_cant_poll = 'Ako návštevník (guest) nemáte povolenie zaklada hlasovania. Ak sa zaregistrujete, mono budete ma.';
		$this->post_cant_poll1 = 'Nemáte povolenie zaklada hlasovania.';
		$this->post_cant_reply = 'Nemáte povolenie odpoveda na témy pod tımto fórom.';
		$this->post_cant_reply1 = 'Ako návštevník (guest) nemáte povolenie odpoveda na témy. Ak sa zaregistrujete, mono budete ma.';
		$this->post_cant_reply2 = 'Nemáte povolenie odpoveda na témy.';
		$this->post_closed = 'Téma bola uzavretá.';
		$this->post_create_poll = 'Zaloi hlasovanie';
		$this->post_create_topic = 'Zaloi tému';
		$this->post_creating = 'Zaloenie témy';
		$this->post_creating_poll = 'Zaloenie hlasovania';
		$this->post_flood = 'Poslali ste príspevok v priebehu uplynulıch %s sekúnd a práve teraz asi nebude moné znova prispie.<br /><br />Prosím, skúste to znova za nieko¾ko sekúnd.';
		$this->post_guest = 'Guest'; //Translate
		$this->post_icon = 'Ikona príspevku';
		$this->post_last_five = 'Poslednıch pä príspevkov v opaènom poradí';
		$this->post_length = 'Kontrola dåky';
		$this->post_mbcode_address = 'Zadajte adresu';
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
		$this->post_mbcode_detail = 'Zadajte popis';
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
		$this->post_mbcode_length = 'Váš príspevok má "+length+" znakov.';
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
		$this->post_msg = 'Príspevok';
		$this->post_must_msg = 'Musíte ešte napísa samotnı odkaz.';
		$this->post_must_options = 'Musíte zada moné odpovede pre nové hlasovanie.';
		$this->post_must_title = 'Musíte zada nadpis pre novú tému.';
		$this->post_new_poll = 'Nové hlasovanie';
		$this->post_new_topic = 'Nová téma';
		$this->post_no_forum = 'Toto fórum sa nenašlo.';
		$this->post_no_topic = 'Nešpecifikovali ste tému.';
		$this->post_no_vote = 'Ak chcete hlasova, je vhodné zvoli si odpoveï.';
		$this->post_option_emoticons = 'Konvertova textovıch smajlikov na obrázky?';
		$this->post_option_global = 'Make this topic global?'; //Translate
		$this->post_option_mbcode = 'Format MbCode?'; //Translate
		$this->post_optional = 'nepovinné';
		$this->post_options = 'Monosti';
		$this->post_poll_options = 'Moznosti hlasovania';
		$this->post_poll_row = 'Jeden na riadok';
		$this->post_posted = 'Zaslané: ';
		$this->post_posting = 'Posiela sa';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Odpoveda';
		$this->post_reply_topic = 'Odpoveda na tému';
		$this->post_replying = 'Odpovedá sa na tému';
		$this->post_replying1 = 'Odpovedá sa';
		$this->post_smiles = 'Smajlici (kliknutím vloi)';
		$this->post_too_many_options = 'Hlasovanie musí ma minimálne 2 a maximálne %d monıch odpovedí.';
		$this->post_topic_detail = 'Popis témy';
		$this->post_topic_title = 'Nadpis témy';
		$this->post_view_topic = 'Ukáza celú tému';
		$this->post_voting = 'Hlasuje sa';
	}

	function printer()
	{
		$this->printer_back = 'Back'; //Translate
		$this->printer_not_found = 'Téma sa nenašla. Mono bola zmazaná, presunutá alebo vôbec nebola.';
		$this->printer_not_found_title = 'Téma sa nenašla';
		$this->printer_perm_topics = 'Nemáte povolenie na prezeranie tém.';
		$this->printer_perm_topics_guest = 'Nemáte povolenie na prezeranie tém. Ak sa zaregistrujete, mono budete ma.';
		$this->printer_posted_on = 'Zaslané: ';
		$this->printer_send = 'Odosla na tlaèiareò';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM Name'; //Translate
		$this->profile_av_sign = 'Prevtelenie a podpis';
		$this->profile_avatar = 'Prevtelenie';
		$this->profile_bday = 'Narodeniny';
		$this->profile_contact = 'Kontakt';
		$this->profile_email_address = 'Emailová adresa';
		$this->profile_fav = 'Ob¾úbené fórum';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_icq_uin = 'ICQ Number'; //Translate
		$this->profile_info = 'Information'; //Translate
		$this->profile_interest = 'Za¾uby';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'Najnovší príspevok';
		$this->profile_list = 'Zoznam èlenov';
		$this->profile_location = 'Location'; //Translate
		$this->profile_member = 'Skupina èlenov';
		$this->profile_member_title = 'Titul èlena';
		$this->profile_msn = 'MSN Identity'; //Translate
		$this->profile_must_user = 'Ak si chcete prezrie profil, musíte špecifikova uivate¾a.';
		$this->profile_no_member = 'S takımto ID nemáme iadneho uivate¾a. Mono bolo toto konto zrušené.';
		$this->profile_none = '[ None(niè tu nie je) ]';
		$this->profile_not_post = 'ešte sa to nezaslalo.';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Odkazy';
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = 'Príspevky';
		$this->profile_private = '[ Súkromno ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Podpis';
		$this->profile_unkown = '[ Neznámo ]';
		$this->profile_view_profile = 'Prezeranie profilu';
		$this->profile_www = 'Homepage'; //Translate
		$this->profile_yahoo = 'Yahoo Identity'; //Translate
	}

	function register()
	{
		$this->register_activated = 'Vaše konto bolo aktivované!';
		$this->register_activating = 'Aktivácia konta';
		$this->register_activation_error = 'Aktivovanie Vašeho konta zlyhalo. Skontrolujte, èi je vo Vašom prehliadaèi plá URL cesta z aktivaèného emailu. Ak problém zotrváva, skontaktujte sa s administrátorom fóra.';
		$this->register_confirm_passwd = 'Potvrdenie hesla';
		$this->register_done = 'Boli ste zaregistrovanı! Teraz sa môete nalogova.';
		$this->register_email = 'Emailová adresa';
		$this->register_email_invalid = 'Zadaná emailová adresa je neplatná.';
		$this->register_email_used = 'Zadaná emailová adresa u bola pridelená inému èlenovi.';
		$this->register_fields = 'Neboli vyplnené všetky polia.';
		$this->register_image = 'Please type the text shown in the image.'; //Translate
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.'; //Translate
		$this->register_must_activate = 'Boli ste zaregistrovanı. Na adresu %s bol zaslanı email s informáciami oo aktivácii Vašeho konta. Vaše konto bude obmedzené, pokia¾ si ho neaktivujete.';
		$this->register_name_invalid = 'Zadané meno je pridlhé.';
		$this->register_name_taken = 'Toto èlenské meno je u obsadené.';
		$this->register_new_user = 'elané èlenské meno';
		$this->register_pass_invalid = 'Zadané heslo je neplatné. Uistite sa, e pouívate len platné znaky ako sú písmená, èísla, pomlèka, podtrítko alebo medzera a obsahuje aspoò 5 znakov.';
		$this->register_pass_match = 'Heslá, ktoré ste zadali sa nezhodujú.';
		$this->register_passwd = 'Password'; //Translate
		$this->register_reg = 'Registrácia';
		$this->register_reging = 'Prebieha registrácia';
	}

	function search()
	{
		$this->search_advanced = 'Ïalšie monosti';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Základné vyh¾adávanie';
		$this->search_characters = 'znakov z príspevku';
		$this->search_day = 'deò';
		$this->search_days = 'dni';
		$this->search_exact_name = 'presnı názov';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'H¾ada';
		$this->search_forum = 'Fórum';
		$this->search_group = 'Group'; //Translate
		$this->search_guest = 'Guest'; //Translate
		$this->search_in = 'H¾ada v';
		$this->search_in_posts = 'H¾ada iba v príspevkoch';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Registrácia';
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'H¾adanie (presná zhoda)';
		$this->search_matches = 'Nálezy';
		$this->search_month = 'mesiac';
		$this->search_months = 'mesiace';
		$this->search_mysqldoc = 'MySQL Documentation'; //Translate
		$this->search_newer = 'novších';
		$this->search_no_results = 'Vaše h¾adanie dopadlo bezvısledne.';
		$this->search_no_words = 'Ak chcete vyh¾adáva, musíte zada nejaké slová.<br /><br />Kadé slovo musí ma viac ako 3 znaky vrátane písmen, èísiel, apostrofov a podtrítok.';
		$this->search_older = 'starších';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Zobrazi len prvıch';
		$this->search_partial_name = 'èiastoènı názov name';
		$this->search_post_icon = 'Post Icon'; //Translate
		$this->search_posted_on = 'Zaslané: ';
		$this->search_posts = 'Príspevky';
		$this->search_posts_by = 'Len príspevky od uívate¾a';
		$this->search_regex = 'H¾ada pomocou regulárnych vırazov';
		$this->search_regex_failed = 'Váš regulárny vıraz neuspel. Prosím prezrite si MySQL documentation, sta o regulárnych vırazoch.';
		$this->search_relevance = 'Platnos príspevku: %d%%';
		$this->search_replies = 'Príspevky';
		$this->search_result = 'Vısledky h¾adania';
		$this->search_search = 'Zaèa h¾adanie';
		$this->search_select_all = 'kadom';
		$this->search_show_posts = 'Zobrazi odpovedajúce príspevky';
		$this->search_sound = 'H¾ada pod¾a zvuku (sound)';
		$this->search_starter = 'Zakladate¾';
		$this->search_than = 'than'; //Translate
		$this->search_topic = 'Téma';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = 'tıdeò';
		$this->search_weeks = 'tıdne';
		$this->search_year = 'rok';
	}

	function topic()
	{
		$this->topic_attached = 'Priloenı súbor:';
		$this->topic_attached_downloads = 'downloads'; //Translate
		$this->topic_attached_perm = 'Nemáte povolenie na download tohoto súboru.';
		$this->topic_attached_title = 'Nadpis priloeného súboru';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Zaloi nové hlasovanie';
		$this->topic_create_topic = 'Zaloi novú tému';
		$this->topic_delete = 'Zmaza';
		$this->topic_delete_post = 'Zmaza tento príspevok';
		$this->topic_edit = 'Editova';
		$this->topic_edit_post = 'Editova tento príspevok';
		$this->topic_edited = 'Naposledy editovanı v %s uivate¾om %s';
		$this->topic_error = 'Error'; //Translate
		$this->topic_group = 'Skupina';
		$this->topic_guest = 'Návštevník (Guest)';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Registrácia';
		$this->topic_level = 'Èlenskı level';
		$this->topic_links_aim = 'Zasla AIM správu uivate¾ovi %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Zasla email uivate¾ovi %s';
		$this->topic_links_icq = 'Zasla ICQ správu uivate¾ovi %s';
		$this->topic_links_msn = 'Zobrazi  MSN profil uivate¾a %s';
		$this->topic_links_pm = 'Zasla odkaz uivate¾ovi %s';
		$this->topic_links_web = 'Navštívi web stránku uivate¾a %s';
		$this->topic_links_yahoo = 'ZaslaS správu pomocou Yahoo! Messengera uivate¾ovi %s';
		$this->topic_lock = 'Zamknú';
		$this->topic_locked = 'Téma je zamknutá';
		$this->topic_move = 'Presunú';
		$this->topic_no_votes = 'Tu ešte nikto nehlasoval.';
		$this->topic_not_found = 'Téma sa nenašla';
		$this->topic_not_found_message = 'Téma sa nenašla. Mono bola zmazané, presunutá alebo nebola vôbec.';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Monosti témy';
		$this->topic_pages = 'Stránky';
		$this->topic_perm_view = 'Nemáte povolenie na prezeranie tém.';
		$this->topic_perm_view_guest = 'Nemáte povolenie na prezeranie tém. Ak sa zaregistrujete, mono budete ma.';
		$this->topic_pin = 'Prišpendli';
		$this->topic_posted = 'Posted'; //Translate
		$this->topic_posts = 'Príspevky';
		$this->topic_print = 'Zobrazi vytlaèi¾nú verziu';
		$this->topic_quote = 'Odpoveda s citáciou z tohoto príspevku';
		$this->topic_reply = 'Odpoveda na tému';
		$this->topic_split = 'Split'; //Translate
		$this->topic_split_finish = 'Finish All Splitting'; //Translate
		$this->topic_split_keep = 'Do not move this post'; //Translate
		$this->topic_split_move = 'Move this post'; //Translate
		$this->topic_subscribe = 'Zasielanie emailu s dopoveïami na túto tému';
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = 'Odomknú';
		$this->topic_unpin = 'Odšpenli';
		$this->topic_unreg = 'Neregistrovanı';
		$this->topic_view = 'Zobrazi vısledky';
		$this->topic_viewing = 'Prezeranie tém';
		$this->topic_vote = 'Zahlasova';
		$this->topic_vote_count_plur = '%d hlasov';
		$this->topic_vote_count_sing = '%d hlas';
		$this->topic_votes = 'Hlasovania';
	}
}
?>