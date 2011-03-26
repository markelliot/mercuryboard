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
 * @author Yarda Hor�k <ryan69@seznam.cz>
 * @since 1.1.0
 **/
class cs
{
	function active()
	{
		$this->active_last_action = 'Akce';
		$this->active_modules_active = 'Prohl�� si aktivn� u�ivatele';
		$this->active_modules_board = 'Je na �vodn� str�nce';
		$this->active_modules_cp = 'Pou��v� kontroln� panel';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'Pou��v� n�pov�du';
		$this->active_modules_login = 'Vstupuje/Odch�z�';
		$this->active_modules_members = 'Prohl�� si seznam �len�';
		$this->active_modules_mod = 'Moderovat';
		$this->active_modules_pm = 'Pou��v� Messenger';
		$this->active_modules_post = 'P�e nov� p��sp�vek';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_search = 'Hled�n�';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = '�as';
		$this->active_user = 'U�ivatel';
		$this->active_users = 'Aktivn� u�ivatel�';
	}

	function board()
	{
		$this->board_active_users = 'Aktivn� u�ivatel�';
		$this->board_birthdays = 'Dnes m� narozeniny:';
		$this->board_can_post = 'V tomto f�ru m��ete odpov�dat.';
		$this->board_can_topics = 'M��ete prohl�et, ale nem��ete vytv��et t�mata v tomto f�ru. Pros�m, zaregistrujte se.';
		$this->board_cant_post = 'Nem��ete odpov�dat v tomto f�ru. Pros�m, zaregistrujte se.';
		$this->board_cant_topics = 'Nem��ete prohl�et ani vytv��et t�mata v tomto f�ru. Pros�m, zaregistrujte se.';
		$this->board_forum = 'F�rum';
		$this->board_guests = 'a host�:';
		$this->board_last_post = 'Posledn� p��sp�vek';
		$this->board_mark = 'Ozna�it p��sp�vek jako p�e�ten�';
		$this->board_mark1 = 'V�echny p��sp�vky a f�ra byly ozna�eny jako p�e�ten�.';
		$this->board_members = 'z toho registrovan�ch: ';
		$this->board_message = '%s Zpr�va';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = '��dny �len dnes nem� narozeniny.';
		$this->board_nobody = '��dn� �len nen� on-line.';
		$this->board_nopost = '��dn� p��sp�vky';
		$this->board_noview = 'Nem�te povolen� prohl�et f�rum.';
		$this->board_regfirst = 'Nem�te povolen� prohl�et f�rum. Mus�te se nejd��v zaregistrovat.';
		$this->board_replies = 'Odpov�d�';
		$this->board_stats = 'Statistiky';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_topics = 'T�mat';
		$this->board_topics_new = 'Ve f�ru je nov� p��sp�vek.';
		$this->board_topics_old = 'Ve f�ru nejsou ��dn� nov� p��sp�vky.';
		$this->board_users = 'Celkem u�ivatel� on-line:';
		$this->board_write_topics = 'M��ete prohl�et a vytv��et t�mata v tomto f�ru.';
	}

	function cp()
	{
		$this->cp_aim = 'AIM';
		$this->cp_already_member = 'V�mi zadan� e-mailov� adresa je ji� pou�ita jin�m �lenem..';
		$this->cp_apr = 'Dubna';
		$this->cp_aug = 'Srpna';
		$this->cp_avatar_current = 'St�vaj�c� avatar';
		$this->cp_avatar_error = 'Chybn� avatar';
		$this->cp_avatar_must_select = 'Mus�te vybrat avatar.';
		$this->cp_avatar_none = 'Nem� avatar';
		$this->cp_avatar_pixels = 'pixel�';
		$this->cp_avatar_select = 'Vyberte avatar';
		$this->cp_avatar_size_height = 'Avatar mus� m�t ���ku mezi 1 d';
		$this->cp_avatar_size_width = 'Avatar mus� m�t v��ku mezi 1 d';
		$this->cp_avatar_upload = 'Nahr�t avatara z Va�eho disku';
		$this->cp_avatar_upload_failed = 'Chyba p�i nahr�v�n� avatara. Soubour z�ejm� neexistuje.';
		$this->cp_avatar_upload_not_image = 'M��ete nahr�t jen avatar ?na be used for your avatar?.';
		$this->cp_avatar_upload_too_large = 'Avatar je p��li� velk�. Maxim�ln� velikost je %d kilobyt�.';
		$this->cp_avatar_url = 'URL Va�eho avatara';
		$this->cp_avatar_use = 'Pou��t nahran� avatar';
		$this->cp_bday = 'Datum narozen�';
		$this->cp_been_updated = 'V� profil byl zm�n�n.';
		$this->cp_been_updated1 = 'V� avatar byl nahr�n.';
		$this->cp_been_updated_prefs = 'Nastaven� bylo zm�n�no.';
		$this->cp_changing_pass = 'Zm�nit heslo';
		$this->cp_contact_pm = 'Umo�nit ostatn�m u�ivatel�m, aby mi mohli zas�lat soukrom� zpr�vy';
		$this->cp_cp = 'Nastaven�';
		$this->cp_current_avatar = 'St�vaj�c� avatar';
		$this->cp_current_time = 'Nyn� je %s.';
		$this->cp_dec = 'Prosince';
		$this->cp_editing_avatar = 'Zm�nit avatar';
		$this->cp_editing_profile = 'Zm�nit profil';
		$this->cp_email = 'E-mail';
		$this->cp_email_form = 'Umo�nit ostatn�m u�ivatel�m  kontaktovat mn� p�es e-mail';
		$this->cp_email_invaid = 'V�mi vlo�en� e-mailov� adresa je neplatn�.';
		$this->cp_err_avatar = 'Chyba p�i nahr�v�n� avatara';
		$this->cp_err_updating = 'Chyba p�i zm�n� profilu';
		$this->cp_feb = '�nora';
		$this->cp_file_type = 'V�mi vlo�en� avatar je neplatn�. Ujist�te se �e URL je ve spr�vn�m tvaru, a form�t obr�zku je gif, jpg, nebo png.';
		$this->cp_format = 'Jm�no-p�ezd�vka';
		$this->cp_gmt = '[GMT] Greenwichsk� �as';
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
		$this->cp_header = 'Kontroln� panel u�ivatele';
		$this->cp_height = 'V��ka';
		$this->cp_icq = 'ICQ (bez mezer, poml�ek, atd.).';
		$this->cp_interest = 'Z�liby';
		$this->cp_jan = 'Ledna';
		$this->cp_july = '�ervence';
		$this->cp_june = '�ervna';
		$this->cp_label_edit_avatar = 'Zm�nit avatar';
		$this->cp_label_edit_pass = 'Zm�nit heslo';
		$this->cp_label_edit_prefs = 'Zm�nit nastaven�';
		$this->cp_label_edit_profile = 'Zm�nit profil';
		$this->cp_label_edit_subs = 'Zm�nit zas�l�n� infomail�';
		$this->cp_language = 'Jazyk';
		$this->cp_less_charac = 'Va�e jm�no m��e obsahovat max. 32 znak�.';
		$this->cp_location = 'M�sto';
		$this->cp_login_first = 'Mus�te b�t p�ihla�eni, aby ste mohli pou��vat kontroln� panel.';
		$this->cp_mar = 'B�ezna';
		$this->cp_may = 'Kv�tna';
		$this->cp_msn = 'MSN';
		$this->cp_must_orig = 'Va�e jm�no mus� b�t stejn� jako p�vodn�. M��ete jen zm�nit zp�sob jeho zobrazen� (nap�. p�id�n�m mezer atd.).';
		$this->cp_new_notmatch = 'Vami zadan� nov� heslo je neplatn�.';
		$this->cp_new_pass = 'Nov� heslo';
		$this->cp_no_flash = 'Obr�zky ve Flashi nejsou povoleny.';
		$this->cp_not_exist = '�patn� zadan� datum (%s) !';
		$this->cp_nov = 'Listopadu';
		$this->cp_oct = '��jna';
		$this->cp_old_notmatch = 'Heslo nesouhlas� s heslem v datab�zi.';
		$this->cp_old_pass = 'Star� heslo';
		$this->cp_pass_notvaid = 'Va�e heslo je neplatn�. Ujist�te se, �e pou��vat� jen platn� znaky - p�smena, ��slice, poml�ky, podrt��tka, nebo mezery.';
		$this->cp_preferences = 'Zm�nit z�liby';
		$this->cp_privacy = 'Priv�tn� volby';
		$this->cp_repeat_pass = 'Zopakujte nov� heslo';
		$this->cp_sept = 'Z���';
		$this->cp_show_active = 'B�t viditeln� pro ostatn� u�ivatele, pokud se p�ihlas�m na f�rum';
		$this->cp_show_email = 'Zobrazit moj� e-mailovou adresu v profilu';
		$this->cp_signature = 'Podpis';
		$this->cp_size_max = 'Velikost avatara je p��li� velk� (max. %s na %s pixel�).';
		$this->cp_skin = 'Vzhled f�ra';
		$this->cp_sub_change = 'Zm�nit zas�l�n� infomail�';
		$this->cp_sub_delete = 'Smazat';
		$this->cp_sub_expire = 'E-maily budou z�s�lany do';
		$this->cp_sub_name = 'N�zev t�matu';
		$this->cp_sub_no_params = '��dn� parametry nebyly zad�ny.';
		$this->cp_sub_success = 'You are now subscribed to this %s.'; //Translate
		$this->cp_sub_type = 'Sekce';
		$this->cp_sub_updated = 'Zas�lan� informa�n�ch e-mail� o tomto t�matu bylo zru�eno.';
		$this->cp_topic_option = 'Zobrazovat';
		$this->cp_updated = 'Profil zm�n�n';
		$this->cp_updated1 = 'Avatar zm�n�n';
		$this->cp_updated_prefs = 'Nastaven� zm�n�no';
		$this->cp_user_exists = 'U�ivatel s t�mto jm�nem ji� existuje.';
		$this->cp_valided = 'Va�e heslo bylo zm�n�no.';
		$this->cp_view_avatar = 'obr�zky';
		$this->cp_view_emoticon = 'smajl�ky';
		$this->cp_view_signature = 'podpisy';
		$this->cp_welcome = 'V�tejte v ovl�dac�m panelu pro registrovan� u�ivatele. Odtud m��ete m�nit V� ��et. Pros�m vyberte si z mo�nost� naho�e.';
		$this->cp_width = '���ka';
		$this->cp_www = 'WWW str�nky';
		$this->cp_yahoo = 'Yahoo';
		$this->cp_zone = '�asov� p�smo';
	}

	function email()
	{
		$this->email_blocked = 'Tento �len neakceptuje p�ijmut� e-mailov�ch zpr�v.';
		$this->email_email = 'E-mail';
		$this->email_msgtext = 'Zpr�va:';
		$this->email_no_fields = 'Vra?te se a ujist�te se, �e jste vyplnili v�echny �daje.';
		$this->email_no_member = 'Pod t�mto jm�nem nebyl nalezen ��dn� �len';
		$this->email_no_perm = 'Nem�te povolen� pos�lat e-mailov� zpr�vy v tomto f�ru.';
		$this->email_sent = 'E-mail byl odesl�n.';
		$this->email_subject = 'P�edm�t:';
		$this->email_to = 'Pro:';
	}

	function forum()
	{
		$this->forum_by = 'Od';
		$this->forum_can_post = 'V tomto f�ru m��ete odpov�dat.';
		$this->forum_can_topics = 'V tomto f�ru m��ete prohl�et t�mata.';
		$this->forum_cant_post = 'V tomto f�ru nem��ete odpov�dat. Pros�m, zaregistrujte se.';
		$this->forum_cant_topics = 'V tomto f�ru nem��ete prohl�et t�mata. Pros�m, zaregistrujte se.';
		$this->forum_dot = 'te�ka';
		$this->forum_dot_detail = 'ukazuje, �e jste v tomto f�ru odpov�dal(a)';
		$this->forum_forum = 'F�rum';
		$this->forum_guest = 'Host';
		$this->forum_hot = '"HOT"';
		$this->forum_icon = 'Ikonka zpr�vy';
		$this->forum_jump = 'P�esko�it na nejnov�j�� p��sp�vek v tomto t�matu.';
		$this->forum_last = 'Posledn� p��sp�vek';
		$this->forum_locked = 'Zamknuto';
		$this->forum_moved = 'P�esunuto';
		$this->forum_msg = '%s Zpr�va';
		$this->forum_new = 'Nov�';
		$this->forum_new_poll = 'Vytvo�it nov� t�ma s anketou';
		$this->forum_new_topic = 'Vytvo�it nov� t�ma';
		$this->forum_no_topics = 'Ve f�ru nejsou ��dn� p��sp�vky k zobrazen�.';
		$this->forum_noexist = 'F�rum neexistuje.';
		$this->forum_nopost = '��dn� p��sp�vky';
		$this->forum_not = 'Ne';
		$this->forum_noview = 'Nem�te opravn�n� prohl�et f�rum.';
		$this->forum_pages = 'Pages'; //Translate
		$this->forum_pinned = 'D�le�it�';
		$this->forum_pinned_topic = 'Zapinov�n� t�ma';
		$this->forum_poll = 'Anketa';
		$this->forum_regfirst = 'Nem�te opr�vn�n� prohl�et f�rum. Nejprve se mus�te zaregistrovat.';
		$this->forum_replies = 'Odpov�d�';
		$this->forum_starter = 'Zalo�il(a)';
		$this->forum_sub = 'Sub-f�rum';
		$this->forum_sub_last_post = 'Posledn� p��sp�vek';
		$this->forum_sub_replies = 'Odpov�d�';
		$this->forum_sub_topics = 'T�mat';
		$this->forum_subscribe = 'Informovat mn� e-mailem o nov�ch p��sp�vc�ch';
		$this->forum_topic = 'T�ma';
		$this->forum_topics_new = 'Ve f�ru jsou nov� p��sp�vky.';
		$this->forum_topics_old = 'Ve f�ru nejsou ��dn� nov� p��sp�vky.';
		$this->forum_views = 'Schl�dnuto';
		$this->forum_write_topics = 'V tomto f�ru m��ete vytv��et t�mata.';
	}

	function help()
	{
		$this->help_available_files = 'N�pov�da';
		$this->help_none = 'Datab�ze neobsahuje ��dnou n�pov�du';
	}

	function login()
	{
		$this->login_cant_logged = 'P�ihl�en� bylo ne�sp�n�. Zkontrolujte, �e zadan� jm�no a heslo jsou spr�vn�.<br /><br />Aplikace rozezn�v� mal� a velk� p�smena! \'hEsLo\' nen� \'heslo\'. Zkontrolujte si tak�, �e m�te ve sv�m prohl�eci povoleny Cookies.';
		$this->login_cookies = 'Pro p�ihl�en� mus� b�t ve Va�em prohl�e�i povoleny Cookies';
		$this->login_forgot_pass = 'Zapomn�li jste heslo?';
		$this->login_header = 'P�ihl�en�';
		$this->login_logged = 'Nyn� jste p�ihl�eni.';
		$this->login_now_out = 'Nyn� jste odhl�eni.';
		$this->login_out = 'Odhl�en�';
		$this->login_pass = 'Heslo';
		$this->login_pass_no_id = 'Pod t�mto jm�nem nen� registrov�n ��dn� u�ivatel.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Obnovit heslo';
		$this->login_pass_sent = 'Va�e heslo bylo obnoveno. Nov� heslo bylo odesl�no na e-mailovou adresu, kterou jste zadali p�i p�i registraci Va�eho ��tu.';
		$this->login_sure = 'Jste si jisti, �e se chcete odhl�sit z \'%s\'?';
		$this->login_user = 'U�ivatelsk� jm�no';
	}

	function main()
	{
		$this->board_by = 'Od:';
		$this->charset = 'windows-1250';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'Dosud jste neaktivovali Va�i registraci.';
		$this->main_activate_resend = 'Poslat znovu aktiva�n� E-mail';
		$this->main_admincp = 'administrace';
		$this->main_banned = 'M�te zak�z�no prohl�et jakoukoli ��st tohoto f�ra.';
		$this->main_code = 'K�d';
		$this->main_continue = 'Pokra�ovat';
		$this->main_cp = 'nastaven�';
		$this->main_full = 'Pln�';
		$this->main_help = 'n�pov�da';
		$this->main_load = 'zat�en�';
		$this->main_login = 'p�ihl�en�';
		$this->main_logout = 'odhl�en�';
		$this->main_max_load = 'Omlov�me se, ale %s je v nyn� nedostupn�, proto�e server je p�et�en.';
		$this->main_members = '�lenov�';
		$this->main_messenger = 'messenger'; //Translate
		$this->main_new = 'nov�';
		$this->main_next = 'dal��';
		$this->main_posts_new = 'Nov�';
		$this->main_powered = 'Powered by'; //Translate
		$this->main_prev = 'p�edchoz�';
		$this->main_queries = 'po�adavk�';
		$this->main_quote = 'Citovat';
		$this->main_register = 'registrace';
		$this->main_reminder = 'Upozorn�n�:';
		$this->main_reminder_closed = 'F�rum je nyn� uzav�eno, p��stupn� jen administr�tor�m.';
		$this->main_said = '�ekl(a)';
		$this->main_search = 'hledat';
		$this->main_seconds = 'vte�in';
		$this->main_welcome = 'V�tejte';
		$this->main_welcome_guest = 'V�tejte!!';
		$this->sep_decimals = ',';
		$this->sep_thousands = '.';
		$this->submit = 'Odeslat';
		$this->today = 'dnes';
		$this->yesterday = 'v�era';
	}

	function members()
	{
		$this->members_all = 'v�ichni';
		$this->members_email = 'E-mail';
		$this->members_email_member = 'Poslat E-mail tomuto �lenovi';
		$this->members_group = 'Skupina';
		$this->members_joined = 'Zalo�eno';
		$this->members_list = 'Seznam �len�';
		$this->members_member = '�len';
		$this->members_pm = 'Osobn� zpr�va';
		$this->members_posts = 'P��sp�vk�';
		$this->members_send_pm = 'Poslat tomuto u�ivateli soukromou zpr�vu';
		$this->members_title = 'Titul';
		$this->members_vist_www = 'Otev��t �lenovy www str�nky';
		$this->members_www = 'www';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Jste si jisti �e chcete smazat tento p��sp�vek?';
		$this->mod_confirm_topic_delete = 'Jste si jisti �e chcete smazat toto t�ma?';
		$this->mod_error_first_post = 'Nem��ete smazat prvn� p��sp�vek v diskusi.';
		$this->mod_error_move_category = 'Nem��ete p�esunout toto t�ma.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Nem��ete p�esunout t�ma do diskuse, kter� neexistuje.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Nem��ete p�esunout t�ma do diskuse, ve kter� u� je.';
		$this->mod_label_controls = '�prava p��sp�vku';
		$this->mod_label_description = 'Popis';
		$this->mod_label_emoticon = 'P�ev�st textov� "smajl�ky" na obr�zkov�?';
		$this->mod_label_global = 'V�eobecn� t�ma';
		$this->mod_label_mbcode = 'Zform�tovat MbCodem?';
		$this->mod_label_move_to = 'P�esunout do';
		$this->mod_label_options = 'Volby';
		$this->mod_label_post_delete = 'Smazat p��sp�vek';
		$this->mod_label_post_edit = 'Editovat p��sp�vek';
		$this->mod_label_title = 'N�zev';
		$this->mod_label_title_original = 'P�vodn� n�zev';
		$this->mod_label_title_split = 'Spojit t�mata';
		$this->mod_label_topic_delete = 'Smazat t�ma';
		$this->mod_label_topic_edit = 'Editovat t�ma';
		$this->mod_label_topic_lock = 'Zamknout t�ma';
		$this->mod_label_topic_move = 'P�esunout t�ma';
		$this->mod_label_topic_move_complete = 'P�esunout c�l� t�ma do nov� diskuse';
		$this->mod_label_topic_move_link = 'P�esunou t�ma do nov� diskuse, a nechat na n�j odkaz ve star� diskusi.';
		$this->mod_label_topic_pin = 'Zv�raznit t�ma';
		$this->mod_label_topic_split = 'Spojit t�mata';
		$this->mod_missing_post = 'Zadan� p��sp�v�k neexistuje.';
		$this->mod_missing_topic = 'Zadan� t�ma neexistuje.';
		$this->mod_no_action = 'Mus�te zvolit �kol.';
		$this->mod_no_post = 'Mus�te zvolit p��sp�vek.';
		$this->mod_no_topic = 'Mus�te zvolit t�ma..';
		$this->mod_perm_post_delete = 'Nem�te opr�vn�n� mazat p��sp�vky.';
		$this->mod_perm_post_edit = 'Nem�te opr�vn�n� editovat p��sp�vky.';
		$this->mod_perm_topic_delete = 'Nem�te opr�vn�n� mazat toto t�ma.';
		$this->mod_perm_topic_edit = 'Nem�te opr�vn�n� editovat toto t�ma.';
		$this->mod_perm_topic_lock = 'Nem�te opr�vn�n� zamknout toto t�ma.';
		$this->mod_perm_topic_move = 'Nem�te opr�vn�n� p�esunout toto t�ma.';
		$this->mod_perm_topic_pin = 'Nem�te opr�vn�n� zv�raznit toto t�ma.';
		$this->mod_perm_topic_split = 'Nem�te opr�vn�n� spojit tato t�mata.';
		$this->mod_perm_topic_unlock = 'Nem�te opr�vn�n� odemknout toto t�ma.';
		$this->mod_perm_topic_unpin = 'Nem�te opr�vn�n� odpinovat toto t�ma.';
		$this->mod_success_post_delete = 'P��sp�vek byl �sp�n� smaz�n.';
		$this->mod_success_post_edit = 'P��sp�v�k byl �sp�n� zm�n�n.';
		$this->mod_success_split = 'T�mata byly �sp�n� spojeny.';
		$this->mod_success_topic_delete = 'T�ma bylo �sp�n� smaz�no.';
		$this->mod_success_topic_edit = 'T�ma bylo �sp�n� zm�n�no.';
		$this->mod_success_topic_move = 'T�ma bylo �sp�n� p�esunuto do nov� diskuse.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'te�ka';
		$this->new_posts_dot_detail = 'ukazuje, �e jste v tomto f�ru odpov�dal(a)';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'F�rum';
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = '"HOT"';
		$this->new_posts_last = 'Posledn� p��sp�vek';
		$this->new_posts_locked = 'Zamknuto';
		$this->new_posts_moved = 'P�esunuto';
		$this->new_posts_new = 'Nov�';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'Ne';
		$this->new_posts_pinned = 'D�le�it�';
		$this->new_posts_poll = 'Anketa';
		$this->new_posts_topic = 'T�ma';
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
		$this->pm_cant_del = 'Nem�te opr�vn�n� smazat tuto zpr�vu.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Smazat v�echny zpr�vy';
		$this->pm_delete = 'Smazat';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Zpr�va smaz�na.';
		$this->pm_deleted_all = 'Zpr�vy smaz�ny.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Zpr�va nemohla b� odesl�na. Ujist�te se, �e jste vyplnili v�echny povinn� �daje.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Schr�nka';
		$this->pm_folder_new = '%s nov�';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Od';
		$this->pm_group = 'Skupina';
		$this->pm_guest = 'Jako HOST nem��ete pou��vat Messenger. Pros�m p�ihla�te se nebo se zaregistrujte.';
		$this->pm_joined = 'Zalo�eno';
		$this->pm_messenger = 'Messenger'; //Translate
		$this->pm_msgtext = 'Text zpr�vy';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Mus�te vybrat adres��.';
		$this->pm_no_member = '��dn� �len nebyl nalezen pod t�mto ID.';
		$this->pm_no_number = '��dn� zpr�va nebyla nalezena pod t�mto ��slem.';
		$this->pm_no_title = '��dn� p�edm�t';
		$this->pm_nomsg = 'V t�to slo�ce nejsou ��dn� zpr�vy.';
		$this->pm_noview = 'Nem�te opr�vn�n� prohl�et tuto zpr�vu.';
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Osobn� Messenger';
		$this->pm_personal_msging = 'Osobn� Messaging';
		$this->pm_pm = 'Soukrom� zpr�va';
		$this->pm_posts = 'P��sp�vk�';
		$this->pm_preview = 'N�hled';
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Odpov��';
		$this->pm_send = 'Poslat';
		$this->pm_sendamsg = 'Poslat priv�tn� zpr�vu';
		$this->pm_sendingpm = 'Poslat priv�tn� zpr�vu';
		$this->pm_sendon = 'Posl�no';
		$this->pm_success = 'Va�e zpr�va byla �sp�n� odesl�na.';
		$this->pm_sure_del = 'Jste si jisti, �e chcete smazat tuto zpr�vu?';
		$this->pm_sure_delall = 'Jste si jisti, �e chcete smazat v�echny zpr�vy v t�to slo�ce?';
		$this->pm_title = 'P�edm�t';
		$this->pm_to = 'Pro';
	}

	function post()
	{
		$this->post_attach = 'P��lohy';
		$this->post_attach_add = 'P�idat p��lohu';
		$this->post_attach_disrupt = 'P�id�n�m nebo odebr�n�m p��lohy nenaru��te V� p��sp�vek.';
		$this->post_attach_failed = 'Chyba p�i n�hr�v�n� p��lohy. Soubor neexistuje.';
		$this->post_attach_not_allowed = 'Nem��ete p�ilo�it soubor tohoto typu.';
		$this->post_attach_remove = 'Odstranit p��lohu';
		$this->post_attach_too_large = 'P��loha je p��li� velk� (max. %d KB).';
		$this->post_cant_create = 'Jako host nem�te opr�vn�n� vytv��et t�mata. Pros�m p�ihla�te se nebo se zaregistrujte.';
		$this->post_cant_create1 = 'Nem�te opr�vn�n� vytv��et t�mata.';
		$this->post_cant_enter = 'V� hlas nemohl b�t zapo��t�n. bu� ste ji� hlasovali, or nem�te opr�vn�n� hlasovat.';
		$this->post_cant_poll = 'Jako host nem�te opr�vn�n� vytv��et t�ma s anketou. Pros�m p�ihla�te se nebo se zaregistrujte.';
		$this->post_cant_poll1 = 'Nem�te opr�vn�n� vytv��et t�ma s anketou.';
		$this->post_cant_reply = 'Nem�te opr�vn�n� odpov�dat na t�ma v t�to diskusi.';
		$this->post_cant_reply1 = 'Jako host nem�te opr�vn�n� odpov�dat na t�mata. Mus�te b�t zaregistrov�ni, abyste mohli zas�lat p��sp�vky.';
		$this->post_cant_reply2 = 'Nem�te opr�vn�n� odpov�dat na t�mata.';
		$this->post_closed = 'Toto t�ma bylo zav�eno.';
		$this->post_create_poll = 'Vytvo�it t�ma s anketou';
		$this->post_create_topic = 'Vytvo�it t�ma';
		$this->post_creating = 'Vytvo�it t�ma';
		$this->post_creating_poll = 'Vytvo�it t�ma s anketou';
		$this->post_flood = 'Odpov�dal(a) jste v p�ede�l�ch  %s vte�in�ch, nyn� je�t� nem��ete odeslat dal�� p��sp�vek.<br /><br />Pros�m zkuste to za n�kolik vte�in.';
		$this->post_guest = 'Host';
		$this->post_icon = 'Ikonka t�matu';
		$this->post_last_five = 'Posledn�ch 5 p��sp�vk�';
		$this->post_length = 'Zkontrolovat d�lku';
		$this->post_mbcode_address = 'Vlo�it adresu';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Modr�';
		$this->post_mbcode_bold = 'Ozna�en� text bude tu�n�';
		$this->post_mbcode_bold1 = 'B'; //Translate
		$this->post_mbcode_chocolate = '�okol�dov�';
		$this->post_mbcode_code = 'Zform�tuje text do programovac�ho k�du';
		$this->post_mbcode_color = 'Barva';
		$this->post_mbcode_coral = 'Kor�lov�';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Rud�';
		$this->post_mbcode_darkblue = 'Tmav� modr�';
		$this->post_mbcode_darkred = 'Tmav� �erven�';
		$this->post_mbcode_deepink = 'Ru�ov�';
		$this->post_mbcode_detail = 'Vlo�te popis';
		$this->post_mbcode_email = 'Vlo�� do p��sp�vku e-mailovou adresu';
		$this->post_mbcode_firered = 'Cihlov� �erven�';
		$this->post_mbcode_font = 'Font'; //Translate
		$this->post_mbcode_green = 'Zelen�';
		$this->post_mbcode_huge = 'Obrovsk�';
		$this->post_mbcode_image = 'Vlo�� do p��sp�vku obr�zek z jin�ho serveru';
		$this->post_mbcode_image1 = 'IMG'; //Translate
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Ozna�en� text bude kurz�vou';
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Velk�';
		$this->post_mbcode_length = 'V�e zpr�va m� "+length+" znak�.';
		$this->post_mbcode_limegreen = 'Limetkov� zelen�';
		$this->post_mbcode_medium = 'St�edn�';
		$this->post_mbcode_orange = 'Oran�ov�';
		$this->post_mbcode_orangered = 'Oran�ovo �erven�';
		$this->post_mbcode_php = 'Zform�tuje ozna�en� text do PHP k�du';
		$this->post_mbcode_purple = 'Fialov�';
		$this->post_mbcode_quote = 'Vlo�� do p��sp�vku citaci';
		$this->post_mbcode_red = '�erven�';
		$this->post_mbcode_royalblue = 'Kr�lovsk� modr�';
		$this->post_mbcode_sandybrown = 'P�skov� hn�d�';
		$this->post_mbcode_seagreen = 'Zeln�';
		$this->post_mbcode_sienna = 'Sienna'; //Translate
		$this->post_mbcode_silver = 'St��brn�';
		$this->post_mbcode_size = 'Velikost';
		$this->post_mbcode_skyblue = 'Nebesk� modr�';
		$this->post_mbcode_small = 'Mal�';
		$this->post_mbcode_strike = 'Ozna�en� text bude p�e�krtnut�';
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Teal'; //Translate
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Malinkat�';
		$this->post_mbcode_tomato = 'Tomatov�';
		$this->post_mbcode_underline = 'Ozna�en� text bude podtr�en�';
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'Vlo�� do p��sp�vku URL adresu';
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Burly Wood'; //Translate
		$this->post_msg = 'Zpr�va';
		$this->post_must_msg = 'Mus�te napsat n�jak� text, kdy� chcete zalo�it nov� t�ma.';
		$this->post_must_options = 'Mus�te ur�it volby, kdy� chtete zalo�it nov� t�ma s anketou.';
		$this->post_must_title = 'Mus�te vlo�it n�zev nov�ho t�matu, kdy� ho chcete zalo�it.';
		$this->post_new_poll = 'Nov� anketa';
		$this->post_new_topic = 'Nov� t�ma';
		$this->post_no_forum = '��dn� t�ma nebylo nalezeno.';
		$this->post_no_topic = '��dn� t�ma nebylo vybr�no.';
		$this->post_no_vote = 'Mus�te vybrat mo�nosti hlasov�n� pro anketu.';
		$this->post_option_emoticons = 'P�ev�st textov� "smajl�ky" na obr�zkov�?';
		$this->post_option_global = 'Ud�lat toto t�ma glob�ln�m?';
		$this->post_option_mbcode = 'Form�tovat MbCodem? (doporu�eno)';
		$this->post_optional = 'voliteln�';
		$this->post_options = 'Volby';
		$this->post_poll_options = 'Volby ankety';
		$this->post_poll_row = 'Jedna mo�nost na ka�d� ��dek';
		$this->post_posted = 'Posl�no';
		$this->post_posting = 'Zapo��t�no';
		$this->post_preview = 'N�hled';
		$this->post_reply = 'Odeslat';
		$this->post_reply_topic = 'Odpov�d�t na t�ma';
		$this->post_replying = 'Odpov�d�t na t�ma';
		$this->post_replying1 = 'Odpov�d�t';
		$this->post_smiles = 'Smajl�ci';
		$this->post_too_many_options = 'Mus� b�t mezi 2 a %d volbami k hlasov�n�.';
		$this->post_topic_detail = 'Popis t�matu';
		$this->post_topic_title = 'N�zev t�matu';
		$this->post_view_topic = 'Prohl�dnout cel� t�ma';
		$this->post_voting = 'Hlasov�n�';
	}

	function printer()
	{
		$this->printer_back = 'Zp�t';
		$this->printer_not_found = 'T�ma  nebylo nalezeno. Bu� bylo smaz�no, p�esunuto, nebo neexistuje.';
		$this->printer_not_found_title = 'T�ma nenalezeno';
		$this->printer_perm_topics = 'Nem�te opr�vn�n� prohl�et t�ma.';
		$this->printer_perm_topics_guest = 'Nem�te opr�vn�n� prohl�et t�ma. Nejprve se mus�te zaregistrovat.';
		$this->printer_posted_on = 'Posl�no';
		$this->printer_send = 'Poslat na tisk';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM';
		$this->profile_av_sign = 'Avatar a podpis';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'V�k / narozeniny';
		$this->profile_contact = 'Kontakt';
		$this->profile_email_address = 'E-mailov� adresa';
		$this->profile_fav = 'Obl�ben� f�rum';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_icq_uin = 'ICQ';
		$this->profile_info = 'Informace';
		$this->profile_interest = 'Z�jmy';
		$this->profile_joined = 'Zalo�eno';
		$this->profile_last_post = 'Posledn� p��sp�vek';
		$this->profile_list = 'Seznam �len�';
		$this->profile_location = 'Bydli�t�';
		$this->profile_member = 'U�ivatelsk� skupina';
		$this->profile_member_title = '�lensk� titul';
		$this->profile_msn = 'MSN';
		$this->profile_must_user = 'Abyste mohli prohl�et profil, mus�te nejprve vybrat n�jak�ho u�ivatele.';
		$this->profile_no_member = 'Pod t�mto ID nebyl nalezen ��dny �len. Je mo�n�, �e jeho ��et byl smaz�n.';
		$this->profile_none = '[ ��dn� ]';
		$this->profile_not_post = 'je�t� nep�isp�val(a).';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Priv�tn� zpr�va';
		$this->profile_postcount = '%s celkem, %s za den';
		$this->profile_posts = 'Celkem p��sp�vk�';
		$this->profile_private = '[ Osobn� ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Podpis';
		$this->profile_unkown = '[ Nezn�m� ]';
		$this->profile_view_profile = 'Prohl�dnout profil';
		$this->profile_www = 'WWW str�nky';
		$this->profile_yahoo = 'Yahoo';
	}

	function register()
	{
		$this->register_activated = 'V� ��et byl aktivov�n!';
		$this->register_activating = 'Aktivace ��tu';
		$this->register_activation_error = 'P�i aktivaci Va�eho ��tu nastala chyba. Zkontrolujte, zda aktiva�n� e-mail obsahuje celou URL adresu. Pokud pot�e p�etrvaj�, kontaktujte administr�tora tohoto f�ra.';
		$this->register_confirm_passwd = 'Potvr�te heslo';
		$this->register_done = 'Registrace prob�hla �sp�n�. Nyn� se pros�m p�ihla�te.';
		$this->register_email = 'E-mailov� adresa';
		$this->register_email_invalid = 'V�mi zadan� e-mailov� adresa je neplatn�.';
		$this->register_email_used = 'V�mi zadanou e-mailovou adresu ji� pou��v� jin� �len.';
		$this->register_fields = 'Nejsou vypln�ny v�echny �daje.';
		$this->register_image = 'Pros�m zadejte text, kter� vid�te na obr�zku.';
		$this->register_image_invalid = 'Mus�te zadat text, kter� vid�te na obr�zku.';
		$this->register_must_activate = '��dost o registraci byla pod�na. Na adresu %s byl zasl�n e-mail s informacemi, jak aktivovat V� ��et. Dokud nebude ��et aktivov�n, budete m�t na f�ru omezen� n�kter� funkce.';
		$this->register_name_invalid = 'V�mi zadan� jm�no je p��li� dlouh�.';
		$this->register_name_taken = 'V�mi zadan� jm�no je ji� obsazeno.';
		$this->register_new_user = 'U�ivatelsk� jm�no';
		$this->register_pass_invalid = 'V�mi zadan� heslo je neplatn�. Ujist�te se, �e pou��vat� jen platn� znaky - p�smena, ��slice, poml�ky, podrt��tka, nebo mezery a heslo m� alespo� 5 znak�.';
		$this->register_pass_match = 'V�mi zadan� heslo neodpov�d�.';
		$this->register_passwd = 'Heslo';
		$this->register_reg = 'Registrovat!';
		$this->register_reging = 'Registrace';
	}

	function search()
	{
		$this->search_advanced = 'Roz���en� hled�n�';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Z�kl�dn� hled�n�';
		$this->search_characters = 'znak� z p��sp�vku';
		$this->search_day = 'den';
		$this->search_days = 'dny';
		$this->search_exact_name = 'p�esn� zn�n�';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Vyhledat';
		$this->search_forum = 'F�rum';
		$this->search_group = 'Skupina';
		$this->search_guest = 'Host';
		$this->search_in = 'Hledat v';
		$this->search_in_posts = 'Hledat jen v p��sp�vc�ch';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Zalo�eno';
		$this->search_level = '�rove�';
		$this->search_match = 'vyhledat jen p�esn� zadan� v�raz (nap�. zad�te-li "AIM", ve v�sledc�ch budou jen p��sp�vky, kter� obsahuj� pr�v� slovo "AIM"';
		$this->search_matches = 'Ozna�en�';
		$this->search_month = 'm�s�c';
		$this->search_months = 'm�s�ce';
		$this->search_mysqldoc = 'Dokumentace MySQL';
		$this->search_newer = 'nov�j��ch';
		$this->search_no_results = '��dn� v�sledky nebyly nalezeny.';
		$this->search_no_words = 'Mus�te ur�it alespo� jednu podm�nku pro vyhled�v�n�.<br/><br/>Ka�d� podm�nka mus� obsahovat alespo� 3 znaky, (v�etn� p�smen, ��sel, apostrof�, a podtr��tek).';
		$this->search_older = 'star��ch';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Zobrazit jen prvn�ch';
		$this->search_partial_name = '��ste�n� zn�n�';
		$this->search_post_icon = 'Ikona p��sp�vku';
		$this->search_posted_on = 'Posl�no';
		$this->search_posts = 'P��sp�vky';
		$this->search_posts_by = 'Jen v p��sp�vc�ch od';
		$this->search_regex = 'vyhledat i slova obsahuj�c� hledan� v�raz (nap�. zad�te-li "hledat", ve v�sledc�ch budou p��sp�vky obsahuj�c� slovo "hledat", ale i "vyhledat", "hled�n�" atd.';
		$this->search_regex_failed = 'Hledan�mu v�razu nic neodpov�d�. Prohl�dn�te si pros�m dokumentaci MySQL pro n�pov�du "p�esn�ho zn�n�".';
		$this->search_relevance = 'Hledan�mu v�razu odpov�d� na %d%%';
		$this->search_replies = 'P��sp�vky';
		$this->search_result = 'Vyhledat v�sledky';
		$this->search_search = 'Vyhledat';
		$this->search_select_all = 'Ozna�it v�e';
		$this->search_show_posts = 'Zobrazit jen p��sp�vky (jinak se zobraz� t�ma cel� t�ma)';
		$this->search_sound = 'vyhledat i slova podobn� zadan�mu v�razu';
		$this->search_starter = 'Zalo�il(a)';
		$this->search_than = 'ne�';
		$this->search_topic = 'T�ma';
		$this->search_unreg = 'Neregistrovan�';
		$this->search_week = 't�den';
		$this->search_weeks = 't�dny';
		$this->search_year = 'rok';
	}

	function topic()
	{
		$this->topic_attached = 'P��loha:';
		$this->topic_attached_downloads = 'x shl�dnuto';
		$this->topic_attached_perm = 'Nem�te opr�vn�n� st�hnout tento soubor.';
		$this->topic_attached_title = 'P��loha';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Vytvo�it nov� t�ma s anketou';
		$this->topic_create_topic = 'Vytvo�it nov� t�ma';
		$this->topic_delete = 'Smazat';
		$this->topic_delete_post = 'Smazat tento p��sp�vek';
		$this->topic_edit = 'Editovat';
		$this->topic_edit_post = 'Editovat tento p��sp�vek';
		$this->topic_edited = 'Posledn� zm�na: %s od %s';
		$this->topic_error = 'Chyba';
		$this->topic_group = 'Skupina';
		$this->topic_guest = 'Host';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Zalo�eno';
		$this->topic_level = '�rove�';
		$this->topic_links_aim = 'Poslat AIM zpr�vu u�ivateli %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Poslat e-mail u�ivateli %s';
		$this->topic_links_icq = 'Poslat ICQ zpr�vu u�ivateli %s';
		$this->topic_links_msn = 'Poslat MSN zpr�vu u�ivateli %s';
		$this->topic_links_pm = 'Poslat priv�tn� zpr�vu u�ivateli %s';
		$this->topic_links_web = 'Otev��t www str�nky u�ivatele %s';
		$this->topic_links_yahoo = 'Proslat zpr�vu %s p�es Yahoo! Messenger';
		$this->topic_lock = 'Zamknout';
		$this->topic_locked = 'T�ma zam�eno';
		$this->topic_move = 'P�esunout';
		$this->topic_no_votes = 'V t�to anket� nejsou zaznamen�ny ��dn� hlasy.';
		$this->topic_not_found = 'T�ma nenalezeno';
		$this->topic_not_found_message = 'T�ma  nebylo nalezeno. Bu� bylo smaz�no, p�esunuto, nebo neexistuje.';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Volby t�matu';
		$this->topic_pages = 'Pages'; //Translate
		$this->topic_perm_view = 'Nem�te opr�vn�n� prohl�et t�mata.';
		$this->topic_perm_view_guest = 'Nem�te opr�vn�n� prohl�et t�mata. Mus�te se nejprve zaregistrovat.';
		$this->topic_pin = 'Zv�raznit';
		$this->topic_posted = 'Posl�no';
		$this->topic_posts = 'P��sp�vk�';
		$this->topic_print = 'Verze pro tisk';
		$this->topic_quote = 'Do odpov�di "ocitovat" tento p��sp�vek';
		$this->topic_reply = 'Odpov�d�t na t�ma';
		$this->topic_split = 'Spojit';
		$this->topic_split_finish = 'Dokon�it cel� spojen�';
		$this->topic_split_keep = 'Nep�esouvat tento p��sp�vek';
		$this->topic_split_move = 'P�esunout tento p��sp�vek';
		$this->topic_subscribe = 'Zaslat informace na m�j e-mail, pokud se zde objev� nov� p��sp�vek';
		$this->topic_top = 'J�t na za��tek str�nky';
		$this->topic_unlock = 'Odemknout';
		$this->topic_unpin = 'Zru�it zv�razn�n�';
		$this->topic_unreg = 'Neregistrov�n';
		$this->topic_view = 'Prohl�dnout v�sledky';
		$this->topic_viewing = 'Prohl�et t�ma';
		$this->topic_vote = 'Hlasovat';
		$this->topic_vote_count_plur = '%d hlas�';
		$this->topic_vote_count_sing = '%d hlas';
		$this->topic_votes = 'hlas� celkem';
	}
}
?>