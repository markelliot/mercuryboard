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
 * $Id: cs.php,v 1.17 2006/07/26 17:56:18 jon Exp $
 **/

/**
 * Czech language module
 *
 * @author Yarda Horák <ryan69@seznam.cz>
 * @since 1.1.0
 **/
class cs
{
	function active()
	{
		$this->active_last_action = 'Akce';
		$this->active_modules_active = 'Prohlíží si aktivní uživatele';
		$this->active_modules_board = 'Je na úvodní stránce';
		$this->active_modules_cp = 'Používá kontrolní panel';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'Používá nápovìdu';
		$this->active_modules_login = 'Vstupuje/Odchází';
		$this->active_modules_members = 'Prohlíží si seznam èlenù';
		$this->active_modules_mod = 'Moderovat';
		$this->active_modules_pm = 'Používá Messenger';
		$this->active_modules_post = 'Píše nový pøíspìvek';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_search = 'Hledání';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = 'Èas';
		$this->active_user = 'Uživatel';
		$this->active_users = 'Aktivní uživatelé';
	}

	function board()
	{
		$this->board_active_users = 'Aktivní uživatelé';
		$this->board_birthdays = 'Dnes má narozeniny:';
		$this->board_can_post = 'V tomto fóru mùžete odpovídat.';
		$this->board_can_topics = 'Mùžete prohlížet, ale nemùžete vytváøet témata v tomto fóru. Prosím, zaregistrujte se.';
		$this->board_cant_post = 'Nemùžete odpovídat v tomto fóru. Prosím, zaregistrujte se.';
		$this->board_cant_topics = 'Nemùžete prohlížet ani vytváøet témata v tomto fóru. Prosím, zaregistrujte se.';
		$this->board_forum = 'Fórum';
		$this->board_guests = 'a hostù:';
		$this->board_last_post = 'Poslední pøíspìvek';
		$this->board_mark = 'Oznaèit pøíspìvek jako pøeètený';
		$this->board_mark1 = 'Všechny pøíspìvky a fóra byly oznaèeny jako pøeètené.';
		$this->board_members = 'z toho registrovaných: ';
		$this->board_message = '%s Zpráva';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'Žádny èlen dnes nemá narozeniny.';
		$this->board_nobody = 'Žádný èlen není on-line.';
		$this->board_nopost = 'Žádné pøíspìvky';
		$this->board_noview = 'Nemáte povolení prohlížet fórum.';
		$this->board_regfirst = 'Nemáte povolení prohlížet fórum. Musíte se nejdøív zaregistrovat.';
		$this->board_replies = 'Odpovìdí';
		$this->board_stats = 'Statistiky';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_topics = 'Témat';
		$this->board_topics_new = 'Ve fóru je nový pøíspìvek.';
		$this->board_topics_old = 'Ve fóru nejsou žádné nové pøíspìvky.';
		$this->board_users = 'Celkem uživatelù on-line:';
		$this->board_write_topics = 'Mùžete prohlížet a vytváøet témata v tomto fóru.';
	}

	function cp()
	{
		$this->cp_aim = 'AIM';
		$this->cp_already_member = 'Vámi zadaná e-mailová adresa je již použita jiným èlenem..';
		$this->cp_apr = 'Dubna';
		$this->cp_aug = 'Srpna';
		$this->cp_avatar_current = 'Stávající avatar';
		$this->cp_avatar_error = 'Chybný avatar';
		$this->cp_avatar_must_select = 'Musíte vybrat avatar.';
		$this->cp_avatar_none = 'Nemá avatar';
		$this->cp_avatar_pixels = 'pixelù';
		$this->cp_avatar_select = 'Vyberte avatar';
		$this->cp_avatar_size_height = 'Avatar musí mít šíøku mezi 1 d';
		$this->cp_avatar_size_width = 'Avatar musí mít výšku mezi 1 d';
		$this->cp_avatar_upload = 'Nahrát avatara z Vašeho disku';
		$this->cp_avatar_upload_failed = 'Chyba pøi nahrávání avatara. Soubour zøejmì neexistuje.';
		$this->cp_avatar_upload_not_image = 'Mùžete nahrát jen avatar ?na be used for your avatar?.';
		$this->cp_avatar_upload_too_large = 'Avatar je pøíliš velký. Maximální velikost je %d kilobytù.';
		$this->cp_avatar_url = 'URL Vašeho avatara';
		$this->cp_avatar_use = 'Použít nahraný avatar';
		$this->cp_bday = 'Datum narození';
		$this->cp_been_updated = 'Váš profil byl zmìnìn.';
		$this->cp_been_updated1 = 'Váš avatar byl nahrán.';
		$this->cp_been_updated_prefs = 'Nastavení bylo zmìnìno.';
		$this->cp_changing_pass = 'Zmìnit heslo';
		$this->cp_contact_pm = 'Umožnit ostatním uživatelùm, aby mi mohli zasílat soukromé zprávy';
		$this->cp_cp = 'Nastavení';
		$this->cp_current_avatar = 'Stávající avatar';
		$this->cp_current_time = 'Nyní je %s.';
		$this->cp_dec = 'Prosince';
		$this->cp_editing_avatar = 'Zmìnit avatar';
		$this->cp_editing_profile = 'Zmìnit profil';
		$this->cp_email = 'E-mail';
		$this->cp_email_form = 'Umožnit ostatním uživatelùm  kontaktovat mnì pøes e-mail';
		$this->cp_email_invaid = 'Vámi vložená e-mailová adresa je neplatná.';
		$this->cp_err_avatar = 'Chyba pøi nahrávání avatara';
		$this->cp_err_updating = 'Chyba pøi zmìnì profilu';
		$this->cp_feb = 'Února';
		$this->cp_file_type = 'Vámi vložený avatar je neplatný. Ujistìte se že URL je ve správném tvaru, a formát obrázku je gif, jpg, nebo png.';
		$this->cp_format = 'Jméno-pøezdívka';
		$this->cp_gmt = '[GMT] Greenwichský èas';
		$this->cp_gmt_nev1 = '[GMT-1:00] Azores, Cape Verde'; //Translate
		$this->cp_gmt_nev10 = '[GMT-10:00] Hawaii'; //Translate
		$this->cp_gmt_nev11 = '[GMT-11:00] Midway Isld, Samoa';
		$this->cp_gmt_nev12 = '[GMT-12:00] International Date Line West'; //Translate
		$this->cp_gmt_nev2 = '[GMT-2:00] Mid-Atltic';
		$this->cp_gmt_nev3 = '[GMT-3:00] Buenos Aires, Greenld';
		$this->cp_gmt_nev35 = '[GMT-3:30] Newfoundld';
		$this->cp_gmt_nev4 = '[GMT-4:00] Atltic Time Cada';
		$this->cp_gmt_nev5 = '[GMT-5:00] Eastern Time US & Cada';
		$this->cp_gmt_nev6 = '[GMT-6:00] Central Time US & Cada';
		$this->cp_gmt_nev7 = '[GMT-7:00] Mountain Time US & Cada';
		$this->cp_gmt_nev8 = '[GMT-8:00] Pacific Time US & Cada';
		$this->cp_gmt_nev9 = '[GMT-9:00] Alaska'; //Translate
		$this->cp_gmt_pos1 = '[GMT+1:00] Amsterdam, Berlin, Rome, Paris'; //Translate
		$this->cp_gmt_pos10 = '[GMT+10:00] Melbourne, Sydney, Guam'; //Translate
		$this->cp_gmt_pos11 = '[GMT+11:00] Magad, New Caledonia';
		$this->cp_gmt_pos12 = '[GMT+12:00] Auckld, Fiji';
		$this->cp_gmt_pos2 = '[GMT+2:00] Athens, Cairo, Jerusalem'; //Translate
		$this->cp_gmt_pos3 = '[GMT+3:00] Baghdad, Moscow, Nairobi'; //Translate
		$this->cp_gmt_pos35 = '[GMT+3:30] Tehr';
		$this->cp_gmt_pos4 = '[GMT+4:00] Abu Dhabi, Muscat, Tbilisi'; //Translate
		$this->cp_gmt_pos45 = '[GMT+4:30] Kabul'; //Translate
		$this->cp_gmt_pos5 = '[GMT+5:00] Islamabad, Karachi'; //Translate
		$this->cp_gmt_pos55 = '[GMT+5:30] Bombay, Calcutta, New Delhi'; //Translate
		$this->cp_gmt_pos6 = '[GMT+6:00] Almaty, Dhaka'; //Translate
		$this->cp_gmt_pos7 = '[GMT+7:00] Bgkok, Jakarta';
		$this->cp_gmt_pos8 = '[GMT+8:00] Beijing, Hong Kong, Singapore'; //Translate
		$this->cp_gmt_pos9 = '[GMT+9:00] Nakyo, Seoul';
		$this->cp_gmt_pos95 = '[GMT+9:30] Adelaide, Darwin'; //Translate
		$this->cp_header = 'Kontrolní panel uživatele';
		$this->cp_height = 'Výška';
		$this->cp_icq = 'ICQ (bez mezer, pomlèek, atd.).';
		$this->cp_interest = 'Záliby';
		$this->cp_jan = 'Ledna';
		$this->cp_july = 'Èervence';
		$this->cp_june = 'Èervna';
		$this->cp_label_edit_avatar = 'Zmìnit avatar';
		$this->cp_label_edit_pass = 'Zmìnit heslo';
		$this->cp_label_edit_prefs = 'Zmìnit nastavení';
		$this->cp_label_edit_profile = 'Zmìnit profil';
		$this->cp_label_edit_subs = 'Zmìnit zasílání infomailù';
		$this->cp_language = 'Jazyk';
		$this->cp_less_charac = 'Vaše jméno mùže obsahovat max. 32 znakù.';
		$this->cp_location = 'Mìsto';
		$this->cp_login_first = 'Musíte být pøihlašeni, aby ste mohli používat kontrolní panel.';
		$this->cp_mar = 'Bøezna';
		$this->cp_may = 'Kvìtna';
		$this->cp_msn = 'MSN';
		$this->cp_must_orig = 'Vaše jméno musí být stejné jako pùvodní. Mùžete jen zmìnit zpùsob jeho zobrazení (napø. pøidáním mezer atd.).';
		$this->cp_new_notmatch = 'Vami zadané nové heslo je neplatné.';
		$this->cp_new_pass = 'Nové heslo';
		$this->cp_no_flash = 'Obrázky ve Flashi nejsou povoleny.';
		$this->cp_not_exist = 'Špatnì zadaný datum (%s) !';
		$this->cp_nov = 'Listopadu';
		$this->cp_oct = 'Øíjna';
		$this->cp_old_notmatch = 'Heslo nesouhlasí s heslem v databázi.';
		$this->cp_old_pass = 'Staré heslo';
		$this->cp_pass_notvaid = 'Vaše heslo je neplatné. Ujistìte se, že používaté jen platné znaky - písmena, èíslice, pomlèky, podrtžítka, nebo mezery.';
		$this->cp_preferences = 'Zmìnit záliby';
		$this->cp_privacy = 'Privátní volby';
		$this->cp_repeat_pass = 'Zopakujte nové heslo';
		$this->cp_sept = 'Záøí';
		$this->cp_show_active = 'Být viditelný pro ostatní uživatele, pokud se pøihlasím na fórum';
		$this->cp_show_email = 'Zobrazit mojí e-mailovou adresu v profilu';
		$this->cp_signature = 'Podpis';
		$this->cp_size_max = 'Velikost avatara je pøíliš velká (max. %s na %s pixelù).';
		$this->cp_skin = 'Vzhled fóra';
		$this->cp_sub_change = 'Zmìnit zasílání infomailù';
		$this->cp_sub_delete = 'Smazat';
		$this->cp_sub_expire = 'E-maily budou zásílany do';
		$this->cp_sub_name = 'Název tématu';
		$this->cp_sub_no_params = 'Žádné parametry nebyly zadány.';
		$this->cp_sub_success = 'You are now subscribed to this %s.'; //Translate
		$this->cp_sub_type = 'Sekce';
		$this->cp_sub_updated = 'Zasílaní informaèních e-mailù o tomto tématu bylo zrušeno.';
		$this->cp_topic_option = 'Zobrazovat';
		$this->cp_updated = 'Profil zmìnìn';
		$this->cp_updated1 = 'Avatar zmìnìn';
		$this->cp_updated_prefs = 'Nastavení zmìnìno';
		$this->cp_user_exists = 'Uživatel s tímto jménem již existuje.';
		$this->cp_valided = 'Vaše heslo bylo zmìnìno.';
		$this->cp_view_avatar = 'obrázky';
		$this->cp_view_emoticon = 'smajlíky';
		$this->cp_view_signature = 'podpisy';
		$this->cp_welcome = 'Vítejte v ovládacím panelu pro registrované uživatele. Odtud mùžete mìnit Váš úèet. Prosím vyberte si z možností nahoøe.';
		$this->cp_width = 'Šíøka';
		$this->cp_www = 'WWW stránky';
		$this->cp_yahoo = 'Yahoo';
		$this->cp_zone = 'Èasové pásmo';
	}

	function email()
	{
		$this->email_blocked = 'Tento èlen neakceptuje pøijmutí e-mailových zpráv.';
		$this->email_email = 'E-mail';
		$this->email_msgtext = 'Zpráva:';
		$this->email_no_fields = 'Vra?te se a ujistìte se, že jste vyplnili všechny údaje.';
		$this->email_no_member = 'Pod tímto jménem nebyl nalezen žádný èlen';
		$this->email_no_perm = 'Nemáte povolení posílat e-mailové zprávy v tomto fóru.';
		$this->email_sent = 'E-mail byl odeslán.';
		$this->email_subject = 'Pøedmìt:';
		$this->email_to = 'Pro:';
	}

	function forum()
	{
		$this->forum_by = 'Od';
		$this->forum_can_post = 'V tomto fóru mùžete odpovídat.';
		$this->forum_can_topics = 'V tomto fóru mùžete prohlížet témata.';
		$this->forum_cant_post = 'V tomto fóru nemùžete odpovídat. Prosím, zaregistrujte se.';
		$this->forum_cant_topics = 'V tomto fóru nemùžete prohlížet témata. Prosím, zaregistrujte se.';
		$this->forum_dot = 'teèka';
		$this->forum_dot_detail = 'ukazuje, že jste v tomto fóru odpovídal(a)';
		$this->forum_forum = 'Fórum';
		$this->forum_guest = 'Host';
		$this->forum_hot = '"HOT"';
		$this->forum_icon = 'Ikonka zprávy';
		$this->forum_jump = 'Pøeskoèit na nejnovìjší pøíspìvek v tomto tématu.';
		$this->forum_last = 'Poslední pøíspìvek';
		$this->forum_locked = 'Zamknuto';
		$this->forum_moved = 'Pøesunuto';
		$this->forum_msg = '%s Zpráva';
		$this->forum_new = 'Nové';
		$this->forum_new_poll = 'Vytvoøit nové téma s anketou';
		$this->forum_new_topic = 'Vytvoøit nové téma';
		$this->forum_no_topics = 'Ve fóru nejsou žádné pøíspìvky k zobrazení.';
		$this->forum_noexist = 'Fórum neexistuje.';
		$this->forum_nopost = 'Žádné pøíspìvky';
		$this->forum_not = 'Ne';
		$this->forum_noview = 'Nemáte opravnìní prohlížet fórum.';
		$this->forum_pages = 'Pages'; //Translate
		$this->forum_pinned = 'Dùležité';
		$this->forum_pinned_topic = 'Zapinováné téma';
		$this->forum_poll = 'Anketa';
		$this->forum_regfirst = 'Nemáte oprávnìní prohlížet fórum. Nejprve se musíte zaregistrovat.';
		$this->forum_replies = 'Odpovìdí';
		$this->forum_starter = 'Založil(a)';
		$this->forum_sub = 'Sub-fórum';
		$this->forum_sub_last_post = 'Poslední pøíspìvek';
		$this->forum_sub_replies = 'Odpovìdí';
		$this->forum_sub_topics = 'Témat';
		$this->forum_subscribe = 'Informovat mnì e-mailem o nových pøíspìvcích';
		$this->forum_topic = 'Téma';
		$this->forum_topics_new = 'Ve fóru jsou nové pøíspìvky.';
		$this->forum_topics_old = 'Ve fóru nejsou žádné nové pøíspìvky.';
		$this->forum_views = 'Schlédnuto';
		$this->forum_write_topics = 'V tomto fóru mùžete vytváøet témata.';
	}

	function help()
	{
		$this->help_available_files = 'Nápovìda';
		$this->help_none = 'Databáze neobsahuje žádnou nápovìdu';
	}

	function login()
	{
		$this->login_cant_logged = 'Pøihlášení bylo neúspìšné. Zkontrolujte, že zadané jméno a heslo jsou správné.<br /><br />Aplikace rozeznává malá a velká písmena! \'hEsLo\' není \'heslo\'. Zkontrolujte si také, že máte ve svém prohlížeci povoleny Cookies.';
		$this->login_cookies = 'Pro pøihlášení musí být ve Vašem prohlížeèi povoleny Cookies';
		$this->login_forgot_pass = 'Zapomnìli jste heslo?';
		$this->login_header = 'Pøihlášení';
		$this->login_logged = 'Nyní jste pøihlášeni.';
		$this->login_now_out = 'Nyní jste odhlášeni.';
		$this->login_out = 'Odhlášení';
		$this->login_pass = 'Heslo';
		$this->login_pass_no_id = 'Pod tímto jménem není registrován žádný uživatel.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Obnovit heslo';
		$this->login_pass_sent = 'Vaše heslo bylo obnoveno. Nové heslo bylo odesláno na e-mailovou adresu, kterou jste zadali pøi pøi registraci Vašeho úètu.';
		$this->login_sure = 'Jste si jisti, že se chcete odhlásit z \'%s\'?';
		$this->login_user = 'Uživatelské jméno';
	}

	function main()
	{
		$this->board_by = 'Od:';
		$this->charset = 'windows-1250';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'Dosud jste neaktivovali Vaši registraci.';
		$this->main_activate_resend = 'Poslat znovu aktivaèní E-mail';
		$this->main_admincp = 'administrace';
		$this->main_banned = 'Máte zakázáno prohlížet jakoukoli èást tohoto fóra.';
		$this->main_code = 'Kód';
		$this->main_continue = 'Pokraèovat';
		$this->main_cp = 'nastavení';
		$this->main_full = 'Plné';
		$this->main_help = 'nápovìda';
		$this->main_load = 'zatížení';
		$this->main_login = 'pøihlášení';
		$this->main_logout = 'odhlášení';
		$this->main_max_load = 'Omlováme se, ale %s je v nyní nedostupné, protože server je pøetížen.';
		$this->main_members = 'èlenové';
		$this->main_messenger = 'messenger'; //Translate
		$this->main_new = 'nové';
		$this->main_next = 'další';
		$this->main_posts_new = 'Nové';
		$this->main_powered = 'Powered by'; //Translate
		$this->main_prev = 'pøedchozí';
		$this->main_queries = 'požadavkù';
		$this->main_quote = 'Citovat';
		$this->main_register = 'registrace';
		$this->main_reminder = 'Upozornìní:';
		$this->main_reminder_closed = 'Fórum je nyní uzavøeno, pøístupné jen administrátorùm.';
		$this->main_said = 'øekl(a)';
		$this->main_search = 'hledat';
		$this->main_seconds = 'vteøin';
		$this->main_welcome = 'Vítejte';
		$this->main_welcome_guest = 'Vítejte!!';
		$this->sep_decimals = ',';
		$this->sep_thousands = '.';
		$this->submit = 'Odeslat';
		$this->today = 'dnes';
		$this->yesterday = 'vèera';
	}

	function members()
	{
		$this->members_all = 'všichni';
		$this->members_email = 'E-mail';
		$this->members_email_member = 'Poslat E-mail tomuto èlenovi';
		$this->members_group = 'Skupina';
		$this->members_joined = 'Založeno';
		$this->members_list = 'Seznam èlenù';
		$this->members_member = 'Èlen';
		$this->members_pm = 'Osobní zpráva';
		$this->members_posts = 'Pøíspìvkù';
		$this->members_send_pm = 'Poslat tomuto uživateli soukromou zprávu';
		$this->members_title = 'Titul';
		$this->members_vist_www = 'Otevøít èlenovy www stránky';
		$this->members_www = 'www';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Jste si jisti že chcete smazat tento pøíspìvek?';
		$this->mod_confirm_topic_delete = 'Jste si jisti že chcete smazat toto téma?';
		$this->mod_error_first_post = 'Nemùžete smazat první pøíspìvek v diskusi.';
		$this->mod_error_move_category = 'Nemùžete pøesunout toto téma.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Nemùžete pøesunout téma do diskuse, která neexistuje.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Nemùžete pøesunout téma do diskuse, ve které už je.';
		$this->mod_label_controls = 'Úprava pøíspìvku';
		$this->mod_label_description = 'Popis';
		$this->mod_label_emoticon = 'Pøevést textové "smajlíky" na obrázkové?';
		$this->mod_label_global = 'Všeobecné téma';
		$this->mod_label_mbcode = 'Zformátovat MbCodem?';
		$this->mod_label_move_to = 'Pøesunout do';
		$this->mod_label_options = 'Volby';
		$this->mod_label_post_delete = 'Smazat pøíspìvek';
		$this->mod_label_post_edit = 'Editovat pøíspìvek';
		$this->mod_label_title = 'Název';
		$this->mod_label_title_original = 'Pùvodní název';
		$this->mod_label_title_split = 'Spojit témata';
		$this->mod_label_topic_delete = 'Smazat téma';
		$this->mod_label_topic_edit = 'Editovat téma';
		$this->mod_label_topic_lock = 'Zamknout téma';
		$this->mod_label_topic_move = 'Pøesunout téma';
		$this->mod_label_topic_move_complete = 'Pøesunout célé téma do nové diskuse';
		$this->mod_label_topic_move_link = 'Pøesunou téma do nové diskuse, a nechat na nìj odkaz ve staré diskusi.';
		$this->mod_label_topic_pin = 'Zvýraznit téma';
		$this->mod_label_topic_split = 'Spojit témata';
		$this->mod_missing_post = 'Zadaný pøíspìvìk neexistuje.';
		$this->mod_missing_topic = 'Zadané téma neexistuje.';
		$this->mod_no_action = 'Musíte zvolit úkol.';
		$this->mod_no_post = 'Musíte zvolit pøíspìvek.';
		$this->mod_no_topic = 'Musíte zvolit téma..';
		$this->mod_perm_post_delete = 'Nemáte oprávnìní mazat pøíspìvky.';
		$this->mod_perm_post_edit = 'Nemáte oprávnìní editovat pøíspìvky.';
		$this->mod_perm_topic_delete = 'Nemáte oprávnìní mazat toto téma.';
		$this->mod_perm_topic_edit = 'Nemáte oprávnìní editovat toto téma.';
		$this->mod_perm_topic_lock = 'Nemáte oprávnìní zamknout toto téma.';
		$this->mod_perm_topic_move = 'Nemáte oprávnìní pøesunout toto téma.';
		$this->mod_perm_topic_pin = 'Nemáte oprávnìní zvýraznit toto téma.';
		$this->mod_perm_topic_split = 'Nemáte oprávnìní spojit tato témata.';
		$this->mod_perm_topic_unlock = 'Nemáte oprávnìní odemknout toto téma.';
		$this->mod_perm_topic_unpin = 'Nemáte oprávnìní odpinovat toto téma.';
		$this->mod_success_post_delete = 'Pøíspìvek byl úspìšnì smazán.';
		$this->mod_success_post_edit = 'Pøíspìvìk byl úspìšnì zmìnìn.';
		$this->mod_success_split = 'Témata byly úspìšnì spojeny.';
		$this->mod_success_topic_delete = 'Téma bylo úspìšnì smazáno.';
		$this->mod_success_topic_edit = 'Téma bylo úspìšnì zmìnìno.';
		$this->mod_success_topic_move = 'Téma bylo úspìšnì pøesunuto do nové diskuse.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'teèka';
		$this->new_posts_dot_detail = 'ukazuje, že jste v tomto fóru odpovídal(a)';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'Fórum';
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = '"HOT"';
		$this->new_posts_last = 'Poslední pøíspìvek';
		$this->new_posts_locked = 'Zamknuto';
		$this->new_posts_moved = 'Pøesunuto';
		$this->new_posts_new = 'Nové';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'Ne';
		$this->new_posts_pinned = 'Dùležité';
		$this->new_posts_poll = 'Anketa';
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
		$this->pm_cant_del = 'Nemáte oprávnìní smazat tuto zprávu.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Smazat všechny zprávy';
		$this->pm_delete = 'Smazat';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Zpráva smazána.';
		$this->pm_deleted_all = 'Zprávy smazány.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Zpráva nemohla bý odeslána. Ujistìte se, že jste vyplnili všechny povinné údaje.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Schránka';
		$this->pm_folder_new = '%s nové';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Od';
		$this->pm_group = 'Skupina';
		$this->pm_guest = 'Jako HOST nemùžete používat Messenger. Prosím pøihlašte se nebo se zaregistrujte.';
		$this->pm_joined = 'Založeno';
		$this->pm_messenger = 'Messenger'; //Translate
		$this->pm_msgtext = 'Text zprávy';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Musíte vybrat adresáø.';
		$this->pm_no_member = 'Žádný èlen nebyl nalezen pod tímto ID.';
		$this->pm_no_number = 'Žádná zpráva nebyla nalezena pod tímto èíslem.';
		$this->pm_no_title = 'Žádný pøedmìt';
		$this->pm_nomsg = 'V této složce nejsou žádné zprávy.';
		$this->pm_noview = 'Nemáte oprávnìní prohlížet tuto zprávu.';
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Osobní Messenger';
		$this->pm_personal_msging = 'Osobní Messaging';
		$this->pm_pm = 'Soukromá zpráva';
		$this->pm_posts = 'Pøíspìvkù';
		$this->pm_preview = 'Náhled';
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Odpovìï';
		$this->pm_send = 'Poslat';
		$this->pm_sendamsg = 'Poslat privátní zprávu';
		$this->pm_sendingpm = 'Poslat privátní zprávu';
		$this->pm_sendon = 'Posláno';
		$this->pm_success = 'Vaše zpráva byla úspìšnì odeslána.';
		$this->pm_sure_del = 'Jste si jisti, že chcete smazat tuto zprávu?';
		$this->pm_sure_delall = 'Jste si jisti, že chcete smazat všechny zprávy v této složce?';
		$this->pm_title = 'Pøedmìt';
		$this->pm_to = 'Pro';
	}

	function post()
	{
		$this->post_attach = 'Pøílohy';
		$this->post_attach_add = 'Pøidat pøílohu';
		$this->post_attach_disrupt = 'Pøidáním nebo odebráním pøílohy nenarušíte Váš pøíspìvek.';
		$this->post_attach_failed = 'Chyba pøi náhrávání pøílohy. Soubor neexistuje.';
		$this->post_attach_not_allowed = 'Nemùžete pøiložit soubor tohoto typu.';
		$this->post_attach_remove = 'Odstranit pøílohu';
		$this->post_attach_too_large = 'Pøíloha je pøíliš velká (max. %d KB).';
		$this->post_cant_create = 'Jako host nemáte oprávnìní vytváøet témata. Prosím pøihlašte se nebo se zaregistrujte.';
		$this->post_cant_create1 = 'Nemáte oprávnìní vytváøet témata.';
		$this->post_cant_enter = 'Váš hlas nemohl být zapoèítán. buï ste již hlasovali, or nemáte oprávnìní hlasovat.';
		$this->post_cant_poll = 'Jako host nemáte oprávnìní vytváøet téma s anketou. Prosím pøihlašte se nebo se zaregistrujte.';
		$this->post_cant_poll1 = 'Nemáte oprávnìní vytváøet téma s anketou.';
		$this->post_cant_reply = 'Nemáte oprávnìní odpovídat na téma v této diskusi.';
		$this->post_cant_reply1 = 'Jako host nemáte oprávnìní odpovídat na témata. Musíte být zaregistrováni, abyste mohli zasílat pøíspìvky.';
		$this->post_cant_reply2 = 'Nemáte oprávnìní odpovídat na témata.';
		$this->post_closed = 'Toto téma bylo zavøeno.';
		$this->post_create_poll = 'Vytvoøit téma s anketou';
		$this->post_create_topic = 'Vytvoøit téma';
		$this->post_creating = 'Vytvoøit téma';
		$this->post_creating_poll = 'Vytvoøit téma s anketou';
		$this->post_flood = 'Odpovídal(a) jste v pøedešlých  %s vteøinách, nyní ještì nemùžete odeslat další pøíspìvek.<br /><br />Prosím zkuste to za nìkolik vteøin.';
		$this->post_guest = 'Host';
		$this->post_icon = 'Ikonka tématu';
		$this->post_last_five = 'Posledních 5 pøíspìvkù';
		$this->post_length = 'Zkontrolovat délku';
		$this->post_mbcode_address = 'Vložit adresu';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Modrá';
		$this->post_mbcode_bold = 'Oznaèený text bude tuèný';
		$this->post_mbcode_bold1 = 'B'; //Translate
		$this->post_mbcode_chocolate = 'Èokoládová';
		$this->post_mbcode_code = 'Zformátuje text do programovacího kódu';
		$this->post_mbcode_color = 'Barva';
		$this->post_mbcode_coral = 'Korálová';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Rudá';
		$this->post_mbcode_darkblue = 'Tmavì modrá';
		$this->post_mbcode_darkred = 'Tmavì èervená';
		$this->post_mbcode_deepink = 'Ružová';
		$this->post_mbcode_detail = 'Vložte popis';
		$this->post_mbcode_email = 'Vloží do pøíspìvku e-mailovou adresu';
		$this->post_mbcode_firered = 'Cihlovì èervená';
		$this->post_mbcode_font = 'Font'; //Translate
		$this->post_mbcode_green = 'Zelená';
		$this->post_mbcode_huge = 'Obrovský';
		$this->post_mbcode_image = 'Vloží do pøíspìvku obrázek z jiného serveru';
		$this->post_mbcode_image1 = 'IMG'; //Translate
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Oznaèený text bude kurzívou';
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Velký';
		$this->post_mbcode_length = 'Váše zpráva má "+length+" znakù.';
		$this->post_mbcode_limegreen = 'Limetkovì zelená';
		$this->post_mbcode_medium = 'Støední';
		$this->post_mbcode_orange = 'Oranžová';
		$this->post_mbcode_orangered = 'Oranžovo èervená';
		$this->post_mbcode_php = 'Zformátuje oznaèený text do PHP kódu';
		$this->post_mbcode_purple = 'Fialová';
		$this->post_mbcode_quote = 'Vloží do pøíspìvku citaci';
		$this->post_mbcode_red = 'Èervená';
		$this->post_mbcode_royalblue = 'Královská modrá';
		$this->post_mbcode_sandybrown = 'Pískovì hnìdá';
		$this->post_mbcode_seagreen = 'Zelná';
		$this->post_mbcode_sienna = 'Sienna'; //Translate
		$this->post_mbcode_silver = 'Støíbrná';
		$this->post_mbcode_size = 'Velikost';
		$this->post_mbcode_skyblue = 'Nebeská modrá';
		$this->post_mbcode_small = 'Malý';
		$this->post_mbcode_strike = 'Oznaèený text bude pøeškrtnutý';
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Teal'; //Translate
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Malinkatý';
		$this->post_mbcode_tomato = 'Tomatová';
		$this->post_mbcode_underline = 'Oznaèený text bude podtržený';
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'Vloží do pøíspìvku URL adresu';
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Burly Wood'; //Translate
		$this->post_msg = 'Zpráva';
		$this->post_must_msg = 'Musíte napsat nìjaký text, když chcete založit nové téma.';
		$this->post_must_options = 'Musíte urèit volby, když chtete založit nové téma s anketou.';
		$this->post_must_title = 'Musíte vložit název nového tématu, když ho chcete založit.';
		$this->post_new_poll = 'Nová anketa';
		$this->post_new_topic = 'Nové téma';
		$this->post_no_forum = 'Žádné téma nebylo nalezeno.';
		$this->post_no_topic = 'Žádné téma nebylo vybráno.';
		$this->post_no_vote = 'Musíte vybrat možnosti hlasování pro anketu.';
		$this->post_option_emoticons = 'Pøevést textové "smajlíky" na obrázkové?';
		$this->post_option_global = 'Udìlat toto téma globálním?';
		$this->post_option_mbcode = 'Formátovat MbCodem? (doporuèeno)';
		$this->post_optional = 'volitelné';
		$this->post_options = 'Volby';
		$this->post_poll_options = 'Volby ankety';
		$this->post_poll_row = 'Jedna možnost na každý øádek';
		$this->post_posted = 'Posláno';
		$this->post_posting = 'Zapoèítáno';
		$this->post_preview = 'Náhled';
		$this->post_reply = 'Odeslat';
		$this->post_reply_topic = 'Odpovìdìt na téma';
		$this->post_replying = 'Odpovìdìt na téma';
		$this->post_replying1 = 'Odpovìdìt';
		$this->post_smiles = 'Smajlíci';
		$this->post_too_many_options = 'Musí být mezi 2 a %d volbami k hlasování.';
		$this->post_topic_detail = 'Popis tématu';
		$this->post_topic_title = 'Název tématu';
		$this->post_view_topic = 'Prohlédnout celé téma';
		$this->post_voting = 'Hlasování';
	}

	function printer()
	{
		$this->printer_back = 'Zpìt';
		$this->printer_not_found = 'Téma  nebylo nalezeno. Buï bylo smazáno, pøesunuto, nebo neexistuje.';
		$this->printer_not_found_title = 'Téma nenalezeno';
		$this->printer_perm_topics = 'Nemáte oprávnìní prohlížet téma.';
		$this->printer_perm_topics_guest = 'Nemáte oprávnìní prohlížet téma. Nejprve se musíte zaregistrovat.';
		$this->printer_posted_on = 'Posláno';
		$this->printer_send = 'Poslat na tisk';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM';
		$this->profile_av_sign = 'Avatar a podpis';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'Vìk / narozeniny';
		$this->profile_contact = 'Kontakt';
		$this->profile_email_address = 'E-mailová adresa';
		$this->profile_fav = 'Oblíbené fórum';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_icq_uin = 'ICQ';
		$this->profile_info = 'Informace';
		$this->profile_interest = 'Zájmy';
		$this->profile_joined = 'Založeno';
		$this->profile_last_post = 'Poslední pøíspìvek';
		$this->profile_list = 'Seznam èlenù';
		$this->profile_location = 'Bydlištì';
		$this->profile_member = 'Uživatelská skupina';
		$this->profile_member_title = 'Èlenský titul';
		$this->profile_msn = 'MSN';
		$this->profile_must_user = 'Abyste mohli prohlížet profil, musíte nejprve vybrat nìjakého uživatele.';
		$this->profile_no_member = 'Pod tímto ID nebyl nalezen žádny èlen. Je možné, že jeho úèet byl smazán.';
		$this->profile_none = '[ žádný ]';
		$this->profile_not_post = 'ještì nepøispíval(a).';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Privátní zpráva';
		$this->profile_postcount = '%s celkem, %s za den';
		$this->profile_posts = 'Celkem pøíspìvkù';
		$this->profile_private = '[ Osobní ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Podpis';
		$this->profile_unkown = '[ Neznámý ]';
		$this->profile_view_profile = 'Prohlédnout profil';
		$this->profile_www = 'WWW stránky';
		$this->profile_yahoo = 'Yahoo';
	}

	function register()
	{
		$this->register_activated = 'Váš úèet byl aktivován!';
		$this->register_activating = 'Aktivace úètu';
		$this->register_activation_error = 'Pøi aktivaci Vašeho úètu nastala chyba. Zkontrolujte, zda aktivaèní e-mail obsahuje celou URL adresu. Pokud potíže pøetrvají, kontaktujte administrátora tohoto fóra.';
		$this->register_confirm_passwd = 'Potvrïte heslo';
		$this->register_done = 'Registrace probìhla úspìšnì. Nyní se prosím pøihlašte.';
		$this->register_email = 'E-mailová adresa';
		$this->register_email_invalid = 'Vámi zadaná e-mailová adresa je neplatná.';
		$this->register_email_used = 'Vámi zadanou e-mailovou adresu již používá jiný èlen.';
		$this->register_fields = 'Nejsou vyplnìny všechny údaje.';
		$this->register_image = 'Prosím zadejte text, který vidíte na obrázku.';
		$this->register_image_invalid = 'Musíte zadat text, který vidíte na obrázku.';
		$this->register_must_activate = 'Žádost o registraci byla podána. Na adresu %s byl zaslán e-mail s informacemi, jak aktivovat Váš úèet. Dokud nebude úèet aktivován, budete mít na fóru omezené nìkteré funkce.';
		$this->register_name_invalid = 'Vámi zadané jméno je pøíliš dlouhé.';
		$this->register_name_taken = 'Vámi zadané jméno je již obsazeno.';
		$this->register_new_user = 'Uživatelské jméno';
		$this->register_pass_invalid = 'Vámi zadané heslo je neplatné. Ujistìte se, že používaté jen platné znaky - písmena, èíslice, pomlèky, podrtžítka, nebo mezery a heslo má alespoò 5 znakù.';
		$this->register_pass_match = 'Vámi zadané heslo neodpovídá.';
		$this->register_passwd = 'Heslo';
		$this->register_reg = 'Registrovat!';
		$this->register_reging = 'Registrace';
	}

	function search()
	{
		$this->search_advanced = 'Rozšíøené hledání';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Zákládní hledání';
		$this->search_characters = 'znakù z pøíspìvku';
		$this->search_day = 'den';
		$this->search_days = 'dny';
		$this->search_exact_name = 'pøesné znìní';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Vyhledat';
		$this->search_forum = 'Fórum';
		$this->search_group = 'Skupina';
		$this->search_guest = 'Host';
		$this->search_in = 'Hledat v';
		$this->search_in_posts = 'Hledat jen v pøíspìvcích';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Založeno';
		$this->search_level = 'Úroveò';
		$this->search_match = 'vyhledat jen pøesnì zadaný výraz (napø. zadáte-li "AIM", ve výsledcích budou jen pøíspìvky, které obsahují právì slovo "AIM"';
		$this->search_matches = 'Oznaèené';
		$this->search_month = 'mìsíc';
		$this->search_months = 'mìsíce';
		$this->search_mysqldoc = 'Dokumentace MySQL';
		$this->search_newer = 'novìjších';
		$this->search_no_results = 'Žádné výsledky nebyly nalezeny.';
		$this->search_no_words = 'Musíte urèit alespoò jednu podmínku pro vyhledávání.<br/><br/>Každá podmínka musí obsahovat alespoò 3 znaky, (vèetnì písmen, èísel, apostrofù, a podtržítek).';
		$this->search_older = 'starších';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Zobrazit jen prvních';
		$this->search_partial_name = 'èásteèné znìní';
		$this->search_post_icon = 'Ikona pøíspìvku';
		$this->search_posted_on = 'Posláno';
		$this->search_posts = 'Pøíspìvky';
		$this->search_posts_by = 'Jen v pøíspìvcích od';
		$this->search_regex = 'vyhledat i slova obsahující hledaný výraz (napø. zadáte-li "hledat", ve výsledcích budou pøíspìvky obsahující slovo "hledat", ale i "vyhledat", "hledání" atd.';
		$this->search_regex_failed = 'Hledanému výrazu nic neodpovídá. Prohlédnìte si prosím dokumentaci MySQL pro nápovìdu "pøesného znìní".';
		$this->search_relevance = 'Hledanému výrazu odpovídá na %d%%';
		$this->search_replies = 'Pøíspìvky';
		$this->search_result = 'Vyhledat výsledky';
		$this->search_search = 'Vyhledat';
		$this->search_select_all = 'Oznaèit vše';
		$this->search_show_posts = 'Zobrazit jen pøíspìvky (jinak se zobrazí téma celé téma)';
		$this->search_sound = 'vyhledat i slova podobná zadanému výrazu';
		$this->search_starter = 'Založil(a)';
		$this->search_than = 'než';
		$this->search_topic = 'Téma';
		$this->search_unreg = 'Neregistrovaní';
		$this->search_week = 'týden';
		$this->search_weeks = 'týdny';
		$this->search_year = 'rok';
	}

	function topic()
	{
		$this->topic_attached = 'Pøíloha:';
		$this->topic_attached_downloads = 'x shlédnuto';
		$this->topic_attached_perm = 'Nemáte oprávnìní stáhnout tento soubor.';
		$this->topic_attached_title = 'Pøíloha';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Vytvoøit nové téma s anketou';
		$this->topic_create_topic = 'Vytvoøit nové téma';
		$this->topic_delete = 'Smazat';
		$this->topic_delete_post = 'Smazat tento pøíspìvek';
		$this->topic_edit = 'Editovat';
		$this->topic_edit_post = 'Editovat tento pøíspìvek';
		$this->topic_edited = 'Poslední zmìna: %s od %s';
		$this->topic_error = 'Chyba';
		$this->topic_group = 'Skupina';
		$this->topic_guest = 'Host';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Založeno';
		$this->topic_level = 'Úroveò';
		$this->topic_links_aim = 'Poslat AIM zprávu uživateli %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Poslat e-mail uživateli %s';
		$this->topic_links_icq = 'Poslat ICQ zprávu uživateli %s';
		$this->topic_links_msn = 'Poslat MSN zprávu uživateli %s';
		$this->topic_links_pm = 'Poslat privátní zprávu uživateli %s';
		$this->topic_links_web = 'Otevøít www stránky uživatele %s';
		$this->topic_links_yahoo = 'Proslat zprávu %s pøes Yahoo! Messenger';
		$this->topic_lock = 'Zamknout';
		$this->topic_locked = 'Téma zamèeno';
		$this->topic_move = 'Pøesunout';
		$this->topic_no_votes = 'V této anketì nejsou zaznamenány žádné hlasy.';
		$this->topic_not_found = 'Téma nenalezeno';
		$this->topic_not_found_message = 'Téma  nebylo nalezeno. Buï bylo smazáno, pøesunuto, nebo neexistuje.';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Volby tématu';
		$this->topic_pages = 'Pages'; //Translate
		$this->topic_perm_view = 'Nemáte oprávnìní prohlížet témata.';
		$this->topic_perm_view_guest = 'Nemáte oprávnìní prohlížet témata. Musíte se nejprve zaregistrovat.';
		$this->topic_pin = 'Zvýraznit';
		$this->topic_posted = 'Posláno';
		$this->topic_posts = 'Pøíspìvkù';
		$this->topic_print = 'Verze pro tisk';
		$this->topic_quote = 'Do odpovìdi "ocitovat" tento pøíspìvek';
		$this->topic_reply = 'Odpovìdìt na téma';
		$this->topic_split = 'Spojit';
		$this->topic_split_finish = 'Dokonèit celé spojení';
		$this->topic_split_keep = 'Nepøesouvat tento pøíspìvek';
		$this->topic_split_move = 'Pøesunout tento pøíspìvek';
		$this->topic_subscribe = 'Zaslat informace na mùj e-mail, pokud se zde objeví nový pøíspìvek';
		$this->topic_top = 'Jít na zaèátek stránky';
		$this->topic_unlock = 'Odemknout';
		$this->topic_unpin = 'Zrušit zvýraznìní';
		$this->topic_unreg = 'Neregistrován';
		$this->topic_view = 'Prohlédnout výsledky';
		$this->topic_viewing = 'Prohlížet téma';
		$this->topic_vote = 'Hlasovat';
		$this->topic_vote_count_plur = '%d hlasù';
		$this->topic_vote_count_sing = '%d hlas';
		$this->topic_votes = 'hlasù celkem';
	}
}
?>