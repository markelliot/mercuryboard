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
 * $Id: no.php,v 1.15 2006/07/26 17:56:20 jon Exp $
 **/

/**
 * Norwegian language module
 *
 * @author JGS <sag1@online.no>
 * @since 1.1.0
 **/
class no
{
	function active()
	{
		$this->active_last_action = 'Siste kommando';
		$this->active_modules_active = 'Viser aktive brukere';
		$this->active_modules_board = 'Viser Index';
		$this->active_modules_cp = 'Anvdnder Kontrollpanelen';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'Anvender Hjelp';
		$this->active_modules_login = 'Logger In/Ut';
		$this->active_modules_members = 'Viser medlemsliste';
		$this->active_modules_mod = 'Administrerer';
		$this->active_modules_pm = 'Anvender Messenger';
		$this->active_modules_post = 'Skaper Inlegg';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_search = 'Søker';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = 'Tid';
		$this->active_user = 'Bruker';
		$this->active_users = 'Aktive brukere';
	}

	function board()
	{
		$this->board_active_users = 'Aktive brukere';
		$this->board_birthdays = 'Fødselsdag i dag:';
		$this->board_can_post = 'Du kan svare i dette forumet.';
		$this->board_can_topics = 'Du kan lese men ikke opprette emner i dette forumet.';
		$this->board_cant_post = 'Du kan ikke svare i dette forumet.';
		$this->board_cant_topics = 'Du kan ikke lese eller opprette emner i dette forumet.';
		$this->board_forum = 'Forum'; //Translate
		$this->board_guests = 'gjester';
		$this->board_last_post = 'Siste innlegg';
		$this->board_mark = 'Merk innlegg som lest';
		$this->board_mark1 = 'Alle innlegg og forum har blitt markert som lest.';
		$this->board_members = 'medlemmer';
		$this->board_message = '%s Melding';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'Ingen medlemmer fyller dag idag.';
		$this->board_nobody = 'Det for tiden ingen medlemmer online.';
		$this->board_nopost = 'Ingen innlegg';
		$this->board_noview = 'Du har ikke tilatelse til å lese forumet.';
		$this->board_regfirst = 'Du har ikke tilatelse til å lese forumet. Hvis du registrerer deg, så kan du.';
		$this->board_replies = 'Svar';
		$this->board_stats = 'Statistikk';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_topics = 'Emner';
		$this->board_topics_new = 'Det finnes nye innlegg i dette forumet.';
		$this->board_topics_old = 'Det finnes ingen nye innlegg i dette forumet.';
		$this->board_users = 'brukere';
		$this->board_write_topics = 'Du kan lese og opprette emner i dette forumet.';
	}

	function cp()
	{
		$this->cp_aim = 'AIM navn';
		$this->cp_already_member = 'E-post adressen du skrev inn er opptatt.';
		$this->cp_apr = 'April'; //Translate
		$this->cp_aug = 'August'; //Translate
		$this->cp_avatar_current = 'Din nåværende avatara';
		$this->cp_avatar_error = 'Avatara feil';
		$this->cp_avatar_must_select = 'Du må velge en avatara.';
		$this->cp_avatar_none = 'Ikke bruk noen avatara';
		$this->cp_avatar_pixels = 'punkter';
		$this->cp_avatar_select = 'Velg en avatara';
		$this->cp_avatar_size_height = 'Din avataras høyde må være mellom 1 og';
		$this->cp_avatar_size_width = 'Din avataras bredde må være mellom 1 och';
		$this->cp_avatar_upload = 'Laste opp en avatara fra din harddisk';
		$this->cp_avatar_upload_failed = 'Opplastingen av avataraen gikk feil. Filen du har valgt finnes ikke.';
		$this->cp_avatar_upload_not_image = 'Du kan bare laste opp bilder for å benytte som avatara.';
		$this->cp_avatar_upload_too_large = 'Avataraen du valgte å laste opp er for stor. Maks størrelse er %d kilobyte.';
		$this->cp_avatar_url = 'Skriv in en webadresse til din avatara';
		$this->cp_avatar_use = 'Bruk din opplastede avatara';
		$this->cp_bday = 'Fødselsdag';
		$this->cp_been_updated = 'Din profil er oppdatert.';
		$this->cp_been_updated1 = 'Din avatara er oppdatert.';
		$this->cp_been_updated_prefs = 'Dine innstillinger er oppdatert.';
		$this->cp_changing_pass = 'Endre passord';
		$this->cp_contact_pm = 'Tillat at andra brukere kontakter deg via meldinger?';
		$this->cp_cp = 'Kontrollpanel';
		$this->cp_current_avatar = 'Nåværende Avatara';
		$this->cp_current_time = 'Klokken er %s.';
		$this->cp_dec = 'Desember';
		$this->cp_editing_avatar = 'Rediger Avatara';
		$this->cp_editing_profile = 'Rediger Profil';
		$this->cp_email = 'E-post';
		$this->cp_email_form = 'Tillat at andre brukere kan kontakte deg via e-post?';
		$this->cp_email_invaid = 'E-post adressen du skrev inn er ugyldig.';
		$this->cp_err_avatar = 'Misslykket oppdatering av Avatara';
		$this->cp_err_updating = 'Oppdatering av profil gikk feil';
		$this->cp_feb = 'Februar';
		$this->cp_file_type = 'Avataraen er ugyldig. Forsikre deg om at web-adressen er korrekt og at filtypen er .gif, .jpg, eller .png';
		$this->cp_format = 'Navn';
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
		$this->cp_gmt_pos1 = '[GMT+1:00] Amsterdam, Berlin, Rome, Paris'; //Translate
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
		$this->cp_height = 'Høyde';
		$this->cp_icq = 'ICQ Nummer';
		$this->cp_interest = 'Interesser';
		$this->cp_jan = 'Januar';
		$this->cp_july = 'Juli';
		$this->cp_june = 'Juni';
		$this->cp_label_edit_avatar = 'Endre Avatara';
		$this->cp_label_edit_pass = 'Endre Passord';
		$this->cp_label_edit_prefs = 'Endre Innstillinger';
		$this->cp_label_edit_profile = 'Endre Profil';
		$this->cp_label_edit_subs = 'Endre abonnement';
		$this->cp_language = 'Språk';
		$this->cp_less_charac = 'Ditt navn må være kortere enn 32 bokstaver.';
		$this->cp_location = 'Sted';
		$this->cp_login_first = 'Du må være innlogget for å ha tilgang til kontrollpanelet.';
		$this->cp_mar = 'Mars';
		$this->cp_may = 'May'; //Translate
		$this->cp_msn = 'MSN navn';
		$this->cp_must_orig = 'Ditt navn må være identisk med det originale. Du får bare endre store/små bokstaver og mellomrom.';
		$this->cp_new_notmatch = 'De nye passordene er ikke like.';
		$this->cp_new_pass = 'Nytt passord';
		$this->cp_no_flash = 'Flash-avataraer er ikke tillett.';
		$this->cp_not_exist = 'Datoen du oppgav (%s) er ugyldig!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Oktober';
		$this->cp_old_notmatch = 'Ditt gamle passord er feil.';
		$this->cp_old_pass = 'Gammelt passord';
		$this->cp_pass_notvaid = 'Ditt passord er ugyldig. Kun bokstaver, siffer, strek, understrek og mellomrom er tillatt.';
		$this->cp_preferences = 'Endre innstillinger';
		$this->cp_privacy = 'Private valg';
		$this->cp_repeat_pass = 'Oppgi nytt passord igjen';
		$this->cp_sept = 'September'; //Translate
		$this->cp_show_active = 'Show your activities when you are using the board?'; //Translate
		$this->cp_show_email = 'Vise E-post adresse i din profil?';
		$this->cp_signature = 'Signatur';
		$this->cp_size_max = 'Avataraen er for stor. Maks størrelse er %s x %s punkter.';
		$this->cp_skin = 'Skin';
		$this->cp_sub_change = 'Endre abonnement';
		$this->cp_sub_delete = 'Slette';
		$this->cp_sub_expire = 'Gyldig til dato';
		$this->cp_sub_name = 'Abonnement navn';
		$this->cp_sub_no_params = 'Ingan parametrer oppgitt.';
		$this->cp_sub_success = 'Du abonnerer nå på dette %s.';
		$this->cp_sub_type = 'Abonnementstype';
		$this->cp_sub_updated = 'Valgte abonnement er slettet.';
		$this->cp_topic_option = 'Forum valg';
		$this->cp_updated = 'Profil er oppdatert';
		$this->cp_updated1 = 'Avatara er oppdatert';
		$this->cp_updated_prefs = 'Innstillinger er oppdatert';
		$this->cp_user_exists = 'En bruker med dette navn finnes allerede.';
		$this->cp_valided = 'Ditt passord er validert og endret.';
		$this->cp_view_avatar = 'Vise Avataraer?';
		$this->cp_view_emoticon = 'Vise Smileys?';
		$this->cp_view_signature = 'Vise Signaturer?';
		$this->cp_welcome = 'Velkommen til kontrollpanelet. Her kan du endre din brukerkonto. Velg fra alternativene over.';
		$this->cp_width = 'Bredde';
		$this->cp_www = 'Hjemmeside';
		$this->cp_yahoo = 'Yahoo navn';
		$this->cp_zone = 'Tidssone';
	}

	function email()
	{
		$this->email_blocked = 'Du kan ikke sende e-post til denne brukeren.';
		$this->email_email = 'E-post';
		$this->email_msgtext = 'Melding:';
		$this->email_no_fields = 'Gå tilbake og kontroller at alle feltene er utfyllt.';
		$this->email_no_member = 'Det finnes ikke noe medlem med det navnet.';
		$this->email_no_perm = 'Du har ikke tilgang til å sende e-post via forumet..';
		$this->email_sent = 'E-post meldingen er sendt.';
		$this->email_subject = 'Emne:';
		$this->email_to = 'Til:';
	}

	function forum()
	{
		$this->forum_by = 'Av';
		$this->forum_can_post = 'Du kan svare i dette forumet.';
		$this->forum_can_topics = 'Du kan lese emner i dette forumet.';
		$this->forum_cant_post = 'Du kan ikke svare i dette forumet.';
		$this->forum_cant_topics = 'Du kan ikke se på emner i dette forumet.';
		$this->forum_dot = 'punktum';
		$this->forum_dot_detail = 'Viser at du skrevet innlegg i dette emnet';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'Gjest';
		$this->forum_hot = 'Hot'; //Translate
		$this->forum_icon = 'Meldingsikon';
		$this->forum_jump = 'Hoppe til nyeste innlegg i emnet';
		$this->forum_last = 'Siste innlegg';
		$this->forum_locked = 'Lest';
		$this->forum_moved = 'Flyttet';
		$this->forum_msg = '%s melding';
		$this->forum_new = 'Ny';
		$this->forum_new_poll = 'Lage ny avstemming';
		$this->forum_new_topic = 'Lage nytt emne';
		$this->forum_no_topics = 'Det finnes ingen emner å vise i dette forumet.';
		$this->forum_noexist = 'Forumet eksisterer ikke.';
		$this->forum_nopost = 'Ingen innlegg';
		$this->forum_not = 'Ikke';
		$this->forum_noview = 'Du har ikke tiletelse å se på forum.';
		$this->forum_pages = 'Sider';
		$this->forum_pinned = 'Merket';
		$this->forum_pinned_topic = 'Merket emne';
		$this->forum_poll = 'Avstemmning';
		$this->forum_regfirst = 'Du har ikkee tilgang til å se på forum uten først å registrere deg.';
		$this->forum_replies = 'Svar';
		$this->forum_starter = 'Oppretter';
		$this->forum_sub = 'Sub-forum';
		$this->forum_sub_last_post = 'Siste innlegg';
		$this->forum_sub_replies = 'Svar';
		$this->forum_sub_topics = 'Emner';
		$this->forum_subscribe = 'Motta e-post når det kommer nye innlegg i dette forum.';
		$this->forum_topic = 'Emne';
		$this->forum_topics_new = 'Det finnes nye innlegg i dette forumet.';
		$this->forum_topics_old = 'Det finnes ingen nye innlegg i dette forumet.';
		$this->forum_views = 'Visninger';
		$this->forum_write_topics = 'Du kan lage nye emner i dette forumet.';
	}

	function help()
	{
		$this->help_available_files = 'Hjelp';
		$this->help_none = 'Det finnes ingen hjelpefiler i databasen';
	}

	function login()
	{
		$this->login_cant_logged = 'Du klarte ikke å logge inn. Forsikre deg om at ditt brukernavn og passord er rett.<br /><br />Pass på store og små bokstaver, så \'UsErNaMe\' er ikke det samme som \'Username\'. Cookies må også være aktivert.';
		$this->login_cookies = 'Cookies må være aktivert for å kunne logge inn.';
		$this->login_forgot_pass = 'Forgot your password?'; //Translate
		$this->login_header = 'Logger inn';
		$this->login_logged = 'Du er nå pålogget.';
		$this->login_now_out = 'Du er nå avlogget.';
		$this->login_out = 'Logger ut';
		$this->login_pass = 'Passord';
		$this->login_pass_no_id = 'There is no member with the user name you entered.'; //Translate
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Reset Password'; //Translate
		$this->login_pass_sent = 'Your password has been reset. The new password has been sent to the email address associated with your account.'; //Translate
		$this->login_sure = 'Er du sikker på at du vil logge ut fra \'%s\'?';
		$this->login_user = 'Brukernavn';
	}

	function main()
	{
		$this->board_by = 'Av';
		$this->charset = 'iso-8859-1';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'Ditt brukernavn er ikke aktivert enda.';
		$this->main_activate_resend = 'Send aktiverings e-post på nytt';
		$this->main_admincp = 'admin kontrollpanel';
		$this->main_banned = 'Du har blitt utelåst fra dette forum.';
		$this->main_code = 'Kode';
		$this->main_continue = 'Fortsett';
		$this->main_cp = 'kontrollpanel';
		$this->main_full = 'Fullstendig';
		$this->main_help = 'hjelp';
		$this->main_load = 'belastning';
		$this->main_login = 'logge inn';
		$this->main_logout = 'logge ut';
		$this->main_max_load = 'Beklageligvis så er %s utilgjengelig pga for mange samtidige brukere.';
		$this->main_members = 'medlemmer';
		$this->main_messenger = 'meldinger';
		$this->main_new = 'ny';
		$this->main_next = 'neste';
		$this->main_posts_new = 'Ny';
		$this->main_powered = 'Powered by'; //Translate
		$this->main_prev = 'forrige';
		$this->main_queries = 'uttrekk';
		$this->main_quote = 'Sitere';
		$this->main_register = 'registrere';
		$this->main_reminder = 'Påminnelse';
		$this->main_reminder_closed = 'dette forumet er stengt og kan bare leses av administratoren.';
		$this->main_said = 'sa';
		$this->main_search = 'søk';
		$this->main_seconds = 'sekunder';
		$this->main_welcome = 'Velkommen';
		$this->main_welcome_guest = 'Velkommen!';
		$this->sep_decimals = ',';
		$this->sep_thousands = ' ';
		$this->submit = 'Send';
		$this->today = 'Today'; //Translate
		$this->yesterday = 'Yesterday'; //Translate
	}

	function members()
	{
		$this->members_all = 'alle';
		$this->members_email = 'E-post';
		$this->members_email_member = 'Send e-post til denne brukeren';
		$this->members_group = 'Gruppe';
		$this->members_joined = 'Registreringsdato';
		$this->members_list = 'Medlemsliste';
		$this->members_member = 'Medlem';
		$this->members_pm = 'PM'; //Translate
		$this->members_posts = 'Innlegg';
		$this->members_send_pm = 'Send en personlig melding til denne brukeren';
		$this->members_title = 'Tittel';
		$this->members_vist_www = 'Besøk denna brukerens hjemmeside';
		$this->members_www = 'Hjemmeside';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Er du sikker på at du vil slette dette innlegget?';
		$this->mod_confirm_topic_delete = 'Er du sikker på at du vil slette dette emnet?';
		$this->mod_error_first_post = 'Du kan ikke slette det første innlegget i et emne.';
		$this->mod_error_move_category = 'Du kan ikke flytte et emne til en kategori.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Du kan ikke flytte et emne til et forum som ikke eksisterer.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Du kan ikke flytte et emne til det forum det allerede befinner seg i.';
		$this->mod_label_controls = 'Moderator kontroller';
		$this->mod_label_description = 'Beskrivelse';
		$this->mod_label_emoticon = 'Konvertere smileys til bilder?';
		$this->mod_label_global = 'Global Topic'; //Translate
		$this->mod_label_mbcode = 'Formatere MbKode?';
		$this->mod_label_move_to = 'Flytte til';
		$this->mod_label_options = 'Alternativ';
		$this->mod_label_post_delete = 'Slette innlegg';
		$this->mod_label_post_edit = 'Redigere innlegg';
		$this->mod_label_title = 'Tittel';
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Split Title'; //Translate
		$this->mod_label_topic_delete = 'Slette emne';
		$this->mod_label_topic_edit = 'Redigere emne';
		$this->mod_label_topic_lock = 'Lese emne';
		$this->mod_label_topic_move = 'Flytte emne';
		$this->mod_label_topic_move_complete = 'Flytte hele emnet til et nytt forum';
		$this->mod_label_topic_move_link = 'Flytte hele emnet til et nytt forum og legge igjen en link dit fra det gamle forumet.';
		$this->mod_label_topic_pin = 'Marker emne';
		$this->mod_label_topic_split = 'Split Topic'; //Translate
		$this->mod_missing_post = 'Innlegget eksisterer ikke.';
		$this->mod_missing_topic = 'Emnet eksisterar ikke.';
		$this->mod_no_action = 'Du må gjøre et valg.';
		$this->mod_no_post = 'Du må velge et innlegg.';
		$this->mod_no_topic = 'Du må velge et emne.';
		$this->mod_perm_post_delete = 'Du har ikke tillatelse til å slette dette innlegget.';
		$this->mod_perm_post_edit = 'Du har ikke tillatelse til å redigere dette innlegget.';
		$this->mod_perm_topic_delete = 'Du har ikke tillatelse til å slette dette emne.';
		$this->mod_perm_topic_edit = 'Du har ikke tillatelse til å redigere dette emne.';
		$this->mod_perm_topic_lock = 'Du har ikke tillatelse til å lese dette emne.';
		$this->mod_perm_topic_move = 'Du har ikke tillatelse til å flytte dette emne';
		$this->mod_perm_topic_pin = 'Du har ikke tillatelse til å markere dette emne.';
		$this->mod_perm_topic_split = 'You do not have permission to split this topic.'; //Translate
		$this->mod_perm_topic_unlock = 'Du har ikke tillatelse til å låse opp dette emne.';
		$this->mod_perm_topic_unpin = 'Du har ikke tillatelse til å fjerne markeringen på dette emne.';
		$this->mod_success_post_delete = 'Innlegget er slettet.';
		$this->mod_success_post_edit = 'Innlegget er redigert.';
		$this->mod_success_split = 'The topic was successfully split.'; //Translate
		$this->mod_success_topic_delete = 'Emnet er slettet.';
		$this->mod_success_topic_edit = 'Emnet er redigert.';
		$this->mod_success_topic_move = 'Emnet er flyttet til til et nytt forum.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'punktum';
		$this->new_posts_dot_detail = 'Viser at du skrevet innlegg i dette emnet';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'Forum'; //Translate
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'Hot'; //Translate
		$this->new_posts_last = 'Siste innlegg';
		$this->new_posts_locked = 'Lest';
		$this->new_posts_moved = 'Flyttet';
		$this->new_posts_new = 'Ny';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'Ikke';
		$this->new_posts_pinned = 'Merket';
		$this->new_posts_poll = 'Avstemmning';
		$this->new_posts_topic = 'Emne';
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
		$this->pm_cant_del = 'Du har ikke tillatelse til å slette denne meldingen.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Slett alle meldinger';
		$this->pm_delete = 'Slette';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Meldingen er slettet.';
		$this->pm_deleted_all = 'Meldingene er slettet.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Meldingen kunne ikke sendes. Forsikre deg om at alle felt er utfyllt.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Innboks';
		$this->pm_folder_new = '%s nye';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Fra';
		$this->pm_group = 'Gruppe';
		$this->pm_guest = 'Som gjest kan du ikke benytte meldinger. Logg inn eller registrere deg.';
		$this->pm_joined = 'Innmeldt';
		$this->pm_messenger = 'Meldinger';
		$this->pm_msgtext = 'Meldingstekst';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Du må velge en katalog.';
		$this->pm_no_member = 'Ingen bruker ble funnet med denne ID.';
		$this->pm_no_number = 'Ingen melding ble funnet med det det nummeret.';
		$this->pm_no_title = 'Emne mangler';
		$this->pm_nomsg = 'Det finnes ingen meldinger i denne katalog.';
		$this->pm_noview = 'Du har ikke tillatelse til å lese denne meldingen.';
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Meldinger';
		$this->pm_personal_msging = 'Personligt melding';
		$this->pm_pm = 'PM'; //Translate
		$this->pm_posts = 'Innlegg';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Svar';
		$this->pm_send = 'Send'; //Translate
		$this->pm_sendamsg = 'Send en melding';
		$this->pm_sendingpm = 'Send en personlig melding';
		$this->pm_sendon = 'Sending på';
		$this->pm_success = 'Meldingen er sendt.';
		$this->pm_sure_del = 'Er du sikker på at du vil slette denne meldingen?';
		$this->pm_sure_delall = 'Er du sikker på at du vil slette alle meldinger i denne katalog?';
		$this->pm_title = 'Tittel';
		$this->pm_to = 'Til';
	}

	function post()
	{
		$this->post_attach = 'Vedlegg';
		$this->post_attach_add = 'Vedlegg filer';
		$this->post_attach_disrupt = 'Legge til eller ta bort vedlagte filer vil ikke påvirke ditt innlegg.';
		$this->post_attach_failed = 'Opplasting av vedlegget gikk feil. Filen du spesifiserte finnes muligens ikke.';
		$this->post_attach_not_allowed = 'You cannot attach files of that type.'; //Translate
		$this->post_attach_remove = 'Ta bort vedlagte fil';
		$this->post_attach_too_large = 'Den vedlagte filen er for stor.. Maksimal størrelse er %d kilobyte.';
		$this->post_cant_create = 'Som gjest har du ikke tillatelse til å legge inn nytt emne. Hvis du registrerer deg kan du ha mulighet til å gjøre dette.';
		$this->post_cant_create1 = 'Du har ikke tillatelse til å legge inn nytt emne.';
		$this->post_cant_enter = 'Din stemme ble ikke registrert. Enten har du allerede stemt eller så har du ikke tilgang til å stemme.';
		$this->post_cant_poll = 'Som gjest har du ikke tillatelse til å lage avstemminger. Hvis du registrerer deg kan du ha mulighet til å gjøre dette.';
		$this->post_cant_poll1 = 'Du har ikke tillatelse til å lage avstemminger.';
		$this->post_cant_reply = 'Du har ikke tillatelse til å svare på emner i dette forumet.';
		$this->post_cant_reply1 = 'Som gjest har du ikke tillatelse til å svare på emner. Hvis du registrerer deg kan du ha mulighet til å gjøre dette.';
		$this->post_cant_reply2 = 'Du har ikke tillatelse til å svare på emne.';
		$this->post_closed = 'Dette emne er stengt.';
		$this->post_create_poll = 'Lage avstemming';
		$this->post_create_topic = 'Lage emne';
		$this->post_creating = 'Lager emne';
		$this->post_creating_poll = 'Lager avstemming';
		$this->post_flood = 'Du har lagt inn et innlegg de siste %s sekundene, og kan ikke legge inn et nytt innlegg nå.<br /><br />Prøv igjen om ytterligere noen sekunder.';
		$this->post_guest = 'Gjest';
		$this->post_icon = 'Innleggsikon';
		$this->post_last_five = 'siste fem innlegg i omvendt rekkefølge';
		$this->post_length = 'Kontrollere lengden';
		$this->post_mbcode_address = 'Skriv inn en adresse';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Blå';
		$this->post_mbcode_bold = 'Uthevet';
		$this->post_mbcode_bold1 = 'U';
		$this->post_mbcode_chocolate = 'Sjokolade';
		$this->post_mbcode_code = 'Kode';
		$this->post_mbcode_color = 'Farge';
		$this->post_mbcode_coral = 'Korall';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Blodrød';
		$this->post_mbcode_darkblue = 'Mørkeblå';
		$this->post_mbcode_darkred = 'Mørkerød';
		$this->post_mbcode_deepink = 'Rosa';
		$this->post_mbcode_detail = 'Skriv inn en beskrivelse';
		$this->post_mbcode_email = 'E-post';
		$this->post_mbcode_firered = 'Ildrød';
		$this->post_mbcode_font = 'Font'; //Translate
		$this->post_mbcode_green = 'Grønn';
		$this->post_mbcode_huge = 'Størst';
		$this->post_mbcode_image = 'Bilde';
		$this->post_mbcode_image1 = 'Bilde';
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Kursiv';
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Stor';
		$this->post_mbcode_length = 'Ditt innlegg er "+length+" tegn.';
		$this->post_mbcode_limegreen = 'Lime Grønn';
		$this->post_mbcode_medium = 'Medium'; //Translate
		$this->post_mbcode_orange = 'Orange'; //Translate
		$this->post_mbcode_orangered = 'Orange Rød';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Purpur';
		$this->post_mbcode_quote = 'Sitere';
		$this->post_mbcode_red = 'Rød';
		$this->post_mbcode_royalblue = 'Lyseblå';
		$this->post_mbcode_sandybrown = 'Sandbrun';
		$this->post_mbcode_seagreen = 'Sjøgrønn';
		$this->post_mbcode_sienna = 'Brun';
		$this->post_mbcode_silver = 'Sølv';
		$this->post_mbcode_size = 'Størrelse';
		$this->post_mbcode_skyblue = 'Himmelblå';
		$this->post_mbcode_small = 'Liten';
		$this->post_mbcode_strike = 'Gjennomstreking';
		$this->post_mbcode_strike1 = 'g';
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Turkis';
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Minst';
		$this->post_mbcode_tomato = 'Tomat';
		$this->post_mbcode_underline = 'Understreking';
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Beige';
		$this->post_msg = 'Melding';
		$this->post_must_msg = 'Du må skrive en melding i innlegget.';
		$this->post_must_options = 'Du må inkludere valg når du lager en avstemming.';
		$this->post_must_title = 'Du må skrive en titel når du skal lage et nytt emne.';
		$this->post_new_poll = 'Ny avstemming';
		$this->post_new_topic = 'Nytt emne';
		$this->post_no_forum = 'Forumet finnes ikke.';
		$this->post_no_topic = 'Ikke noe emne er valg.';
		$this->post_no_vote = 'Du må velge en valg når du skal stemme.';
		$this->post_option_emoticons = 'Konvertere Smileys till bilder?';
		$this->post_option_global = 'Make this topic global?'; //Translate
		$this->post_option_mbcode = 'Formatere MbKod?';
		$this->post_optional = 'valgfri';
		$this->post_options = 'Alternativ';
		$this->post_poll_options = 'Avstemmingsvalg';
		$this->post_poll_row = 'En pr linje';
		$this->post_posted = 'Skrevet';
		$this->post_posting = 'Skriver innlegg';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Svare';
		$this->post_reply_topic = 'Svare på emne';
		$this->post_replying = 'Svarer på emne';
		$this->post_replying1 = 'Svarer';
		$this->post_smiles = 'Klikkbare Smilies';
		$this->post_too_many_options = 'Du må ha mellom 2 och %d alternativ i en avstemming.';
		$this->post_topic_detail = 'Emnebeskrivelse';
		$this->post_topic_title = 'Emnetittel';
		$this->post_view_topic = 'Vise alle innlegg';
		$this->post_voting = 'Stemmer';
	}

	function printer()
	{
		$this->printer_back = 'Tillbake';
		$this->printer_not_found = 'Emnet finnes ikke. Det kan ha blitt slettet, flyttet eller det har aldri eksistert..';
		$this->printer_not_found_title = 'Emne finnes ikke';
		$this->printer_perm_topics = 'Du har ikke tillatelse til å se på emner.';
		$this->printer_perm_topics_guest = 'Du har ikke tillatelse til å se emner. Hvis du registrerer deg kan du ha mulighet til å gjøre dette.';
		$this->printer_posted_on = 'Skrevet';
		$this->printer_send = 'Skriv ut';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM Navn';
		$this->profile_av_sign = 'Avatara og signatur';
		$this->profile_avatar = 'Avatara';
		$this->profile_bday = 'Fødselsdag';
		$this->profile_contact = 'Kontakt';
		$this->profile_email_address = 'E-post adresse';
		$this->profile_fav = 'Favoritt forum';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_icq_uin = 'ICQ Nummer';
		$this->profile_info = 'Informasjon';
		$this->profile_interest = 'Interesser';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'Siste innlegg';
		$this->profile_list = 'Medlemsliste';
		$this->profile_location = 'Plassering';
		$this->profile_member = 'Medlemsgruppe';
		$this->profile_member_title = 'Medlemstittel';
		$this->profile_msn = 'MSN navn';
		$this->profile_must_user = 'Du må skrive inn et brukernavn for å se en profil.';
		$this->profile_no_member = 'Det finnes ingen brukere med denne brukerID. Kontoen kan være slettet.';
		$this->profile_none = '[ Ingen ]';
		$this->profile_not_post = 'har ikke skrevet noen innlegg enda.';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Send en personlig melding til denne brukeren';
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = 'Innlegg';
		$this->profile_private = '[ Privat ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Signatur';
		$this->profile_unkown = '[ Ukjent ]';
		$this->profile_view_profile = 'Viser profil';
		$this->profile_www = 'Hjemmeside';
		$this->profile_yahoo = 'Yahoo navn';
	}

	function register()
	{
		$this->register_activated = 'Din brukerkonto er aktivert!';
		$this->register_activating = 'Brukerkonto aktivering';
		$this->register_activation_error = 'Det uppstod en feil når din brukerkonto skulle aktiveres. Kontroller at din nettleser har den komplette aktiveringsadressen fra e-posten. Om problemet vedvarer, kontakt forumets administrator for å få tilsendt en ny e-post mned aktiveringslink.';
		$this->register_confirm_passwd = 'Bekrefte passordet';
		$this->register_done = 'Du er registrert! Du kan nå logge in.';
		$this->register_email = 'E-post Adresse';
		$this->register_email_invalid = 'E-post adressen du skrev inn er ugyldig.';
		$this->register_email_used = 'E-post adressen du skrev inn er allerede i bruk.';
		$this->register_fields = 'Alla felt er ikke utfylt.';
		$this->register_image = 'Please type the text shown in the image.'; //Translate
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.'; //Translate
		$this->register_must_activate = 'You have been registered. An email has been sent to %s with information on how to activate your account. Your account will be limited until you activate it.'; //Translate
		$this->register_name_invalid = 'Navnet du skrev inn er for langt.';
		$this->register_name_taken = 'Det medlemsnavnet er allerede i bruk.';
		$this->register_new_user = 'Ønsket brukernavn';
		$this->register_pass_invalid = 'Passordet du skrev inn er ugyldig. Forsikre deg om at det bare inneholder gyldige tegn som bokstaver, siffer, strek, understrek og mellomrom. Passordet må også inneholde minst 5 tegn.';
		$this->register_pass_match = 'Passordene du skrev inn er ikke like.';
		$this->register_passwd = 'Passord';
		$this->register_reg = 'Registrere';
		$this->register_reging = 'Registrering';
	}

	function search()
	{
		$this->search_advanced = 'Avanserte alternativer';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Enkel søking';
		$this->search_characters = 'tegnene i et innlegg';
		$this->search_day = 'dag';
		$this->search_days = 'dager';
		$this->search_exact_name = 'eksakt navn';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Søk etter';
		$this->search_forum = 'Forum'; //Translate
		$this->search_group = 'Group'; //Translate
		$this->search_guest = 'Gjest';
		$this->search_in = 'Søk i';
		$this->search_in_posts = 'Søk bare i innlegg';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Innmeldt';
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'Søk etter ord';
		$this->search_matches = 'Treff';
		$this->search_month = 'måned';
		$this->search_months = 'måneder';
		$this->search_mysqldoc = 'MySQL Documentation'; //Translate
		$this->search_newer = 'nyere';
		$this->search_no_results = 'Ditt søk ga ingen resultat.';
		$this->search_no_words = 'Du må oppgi noen søkeord.<br /><br />Hvert søkeord må være minst 3 tegn inklusiv bokstaver, siffer, apostrofer og understrek.';
		$this->search_older = 'eldre';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Vise kun de første';
		$this->search_partial_name = 'deler av navnet';
		$this->search_post_icon = 'Innleggsikon';
		$this->search_posted_on = 'Skrevet';
		$this->search_posts = 'Innlegg';
		$this->search_posts_by = 'Kun i innlegg av';
		$this->search_regex = 'Søk med vanlige uttrykk';
		$this->search_regex_failed = 'Your regular expression failed. Please see the MySQL documentation for regular expression help.'; //Translate
		$this->search_relevance = 'Relevans: %d%%';
		$this->search_replies = 'Innlegg';
		$this->search_result = 'Søkeresultat';
		$this->search_search = 'Søk';
		$this->search_select_all = 'Velg alle';
		$this->search_show_posts = 'Vis innlegg med treff';
		$this->search_sound = 'Søk phonetisk';
		$this->search_starter = 'Skaper';
		$this->search_than = 'than'; //Translate
		$this->search_topic = 'Emne';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = 'uke';
		$this->search_weeks = 'uker';
		$this->search_year = 'år';
	}

	function topic()
	{
		$this->topic_attached = 'Vedlagt fil:';
		$this->topic_attached_downloads = 'nedlastninger';
		$this->topic_attached_perm = 'Du har ikke tilgang til å laste ned denne filen.';
		$this->topic_attached_title = 'Vedlagt fil';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Lage ny avstemming';
		$this->topic_create_topic = 'Lage nytt emne';
		$this->topic_delete = 'Slette';
		$this->topic_delete_post = 'Slette dette innlegg';
		$this->topic_edit = 'Redigere';
		$this->topic_edit_post = 'Redigere dette innlegg';
		$this->topic_edited = 'Sist redigert %s av %s';
		$this->topic_error = 'Feil';
		$this->topic_group = 'Gruppe';
		$this->topic_guest = 'Gjest';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Innmeldt';
		$this->topic_level = 'Medelemsnivå';
		$this->topic_links_aim = 'Send en AIM melding til %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Send en e-post til %s';
		$this->topic_links_icq = 'Send en ICQ melding til %s';
		$this->topic_links_msn = 'Vise %s\'s MSN profil';
		$this->topic_links_pm = 'Send en personlig melding til %s';
		$this->topic_links_web = 'Besøk %s\'s hjemmeside';
		$this->topic_links_yahoo = 'Send en melding til %s med Yahoo! Messenger';
		$this->topic_lock = 'Les';
		$this->topic_locked = 'Emnet er låst';
		$this->topic_move = 'Flytte';
		$this->topic_no_votes = 'Det finnes ingen stemmer i denne avstemmingen.';
		$this->topic_not_found = 'Emnet finnes ikke';
		$this->topic_not_found_message = 'Emnet finnes ikke. Det kan ha blitt slettet, flyttet eller så har det aldri eksistert.';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Emne alternativ';
		$this->topic_pages = 'Sider';
		$this->topic_perm_view = 'Du har ikke tillatelse til å lese emner.';
		$this->topic_perm_view_guest = 'Du har ikke tillatelse til å lese emner før du har registret deg.';
		$this->topic_pin = 'Merk';
		$this->topic_posted = 'Posted'; //Translate
		$this->topic_posts = 'Innlegg';
		$this->topic_print = 'Vise i utskriftsvennlig format';
		$this->topic_quote = 'Svare med dette innlegg som sitat';
		$this->topic_reply = 'Svare på emne';
		$this->topic_split = 'Split'; //Translate
		$this->topic_split_finish = 'Finish All Splitting'; //Translate
		$this->topic_split_keep = 'Do not move this post'; //Translate
		$this->topic_split_move = 'Move this post'; //Translate
		$this->topic_subscribe = 'Motta e-post når det kommer nye innlegg i dette emne.';
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = 'Lås opp';
		$this->topic_unpin = 'Fjerne merke';
		$this->topic_unreg = 'Uregistrert';
		$this->topic_view = 'Vise resultat';
		$this->topic_viewing = 'Viser emne';
		$this->topic_vote = 'Stemm';
		$this->topic_vote_count_plur = '%d stemmer';
		$this->topic_vote_count_sing = '%d stemme';
		$this->topic_votes = 'Stemmer';
	}
}
?>