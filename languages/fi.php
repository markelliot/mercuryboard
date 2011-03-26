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
 * $Id: fi.php,v 1.11 2006/07/26 17:56:19 jon Exp $
 **/

/**
 * Finnish language module
 *
 * @author Vesa Piittinen <vesa@merri.net>
 * @since 1.1.3
 **/
class fi
{
	function active()
	{
		$this->active_last_action = 'Mit‰ teki viimeksi?';
		$this->active_modules_active = 'Tarkkaili aktiivisia k‰ytt‰ji‰';
		$this->active_modules_board = 'Katsoi keskustelualueen etusivua';
		$this->active_modules_cp = 'K‰ytti ohjauspaneelia';
		$this->active_modules_forum = 'Luki huonetta: %s';
		$this->active_modules_help = 'Luki ohjeistusta';
		$this->active_modules_login = 'Kirjautui tai poistui';
		$this->active_modules_members = 'Luki k‰ytt‰j‰listaa';
		$this->active_modules_mod = 'Suoritti valvojan toimenpiteit‰';
		$this->active_modules_pm = 'K‰ytti viestij‰rjestelm‰‰';
		$this->active_modules_post = 'Kirjoitti viesti‰';
		$this->active_modules_printer = 'Tulosti keskustelua: %s';
		$this->active_modules_profile = 'Luki profiilia: %s';
		$this->active_modules_search = 'Suoritti hakua';
		$this->active_modules_topic = 'Luki keskustelua: %s';
		$this->active_time = 'Aika';
		$this->active_user = 'K‰ytt‰j‰';
		$this->active_users = 'Paikalla olevat k‰ytt‰j‰t';
	}

	function board()
	{
		$this->board_active_users = 'Paikallaolijat';
		$this->board_birthdays = 'Syntym‰p‰iv‰‰ viett‰v‰t t‰n‰‰n';
		$this->board_can_post = 'Voit vastata t‰ss‰ huoneessa.';
		$this->board_can_topics = 'Voit lukea muttet luoda keskusteluja t‰ss‰ huoneessa.';
		$this->board_cant_post = 'Et voi vastata keskusteluun t‰ss‰ huoneessa.';
		$this->board_cant_topics = 'Et voi lukea tai luoda keskusteluja t‰ss‰ huoneessa.';
		$this->board_forum = 'Huone';
		$this->board_guests = 'vierasta';
		$this->board_last_post = 'Uusin viesti';
		$this->board_mark = 'Merkataan viestej‰ luetuksi';
		$this->board_mark1 = 'Kaikki viestit ja huoneet on merkattu luetuiksi.';
		$this->board_members = 'k‰ytt‰j‰‰';
		$this->board_message = '%s viesti';
		$this->board_most_online = 'Parhaimmillaan paikalla on ollut %d k‰ytt‰j‰‰ %s.';
		$this->board_nobday = 'Ainoallakaan k‰ytt‰j‰ll‰ ei ole t‰n‰‰n syntym‰p‰iv‰‰.';
		$this->board_nobody = 'T‰ll‰ hetkell‰ ainoakaan k‰ytt‰j‰ ei ole paikalla.';
		$this->board_nopost = 'Ei viestej‰';
		$this->board_noview = 'Sinulla ei ole oikeuksia t‰ll‰ keskustelualueella.';
		$this->board_regfirst = 'Sinulla ei ole oikeuksia t‰ll‰ keskustelualueella. Rekisterˆitym‰ll‰ saatat saada oikeudet.';
		$this->board_replies = 'Vastauksia';
		$this->board_stats = 'Tilastot';
		$this->board_stats_string = 'Meill‰ on %s rekisterˆitynytt‰ k‰ytt‰j‰‰. Uusin k‰ytt‰j‰mme on %s, tervetuloa!<br />T‰‰ll‰ on yhteens‰ %s keskustelua ja niihin %s vastausta, yhteens‰ siis %s viesti‰.';
		$this->board_topics = 'Keskustelut';
		$this->board_topics_new = 'T‰ss‰ huoneessa ei ole viel‰ keskustelua.';
		$this->board_topics_old = 'T‰ss‰ huoneessa ei ole uusia viestej‰.';
		$this->board_users = 'k‰ytt‰j‰‰';
		$this->board_write_topics = 'Voit lukea ja luoda keskusteluja t‰ss‰ huoneessa.';
	}

	function cp()
	{
		$this->cp_aim = 'AIM-tunnus';
		$this->cp_already_member = 'Antamasi s‰hkˆpostiosoite on jo toisella k‰ytt‰j‰ll‰.';
		$this->cp_apr = 'huhtikuu';
		$this->cp_aug = 'elokuu';
		$this->cp_avatar_current = 'Nykyinen avatarisi';
		$this->cp_avatar_error = 'Avatarvirhe';
		$this->cp_avatar_must_select = 'Sinun tulee valita avatar.';
		$this->cp_avatar_none = 'En tarvitse avataria';
		$this->cp_avatar_pixels = 'pikseli‰';
		$this->cp_avatar_select = 'Valitse avatar';
		$this->cp_avatar_size_height = 'Avatarin korkeuden tulee olla 1 -';
		$this->cp_avatar_size_width = 'Avatarin leveyden tulee olla 1 -';
		$this->cp_avatar_upload = 'L‰het‰ avatar tietokoneesi kovalevylt‰';
		$this->cp_avatar_upload_failed = 'Avatarin l‰hetys ep‰onnistui. M‰‰rittelem‰‰si tiedostoa ei ehk‰ ole olemassa.';
		$this->cp_avatar_upload_not_image = 'Voit vain l‰hett‰‰ kuvia avatariksesi.';
		$this->cp_avatar_upload_too_large = 'L‰hett‰m‰si avatar on liian iso. Maksimikoko on %d kilotavua.';
		$this->cp_avatar_url = 'M‰‰rittele URL avatariksesi';
		$this->cp_avatar_use = 'K‰yt‰ l‰hett‰m‰‰si avataria';
		$this->cp_bday = 'Syntym‰p‰iv‰';
		$this->cp_been_updated = 'Profiilisi on p‰ivitetty.';
		$this->cp_been_updated1 = 'Avatarisi on p‰ivitetty.';
		$this->cp_been_updated_prefs = 'Asetuksesi on p‰ivitetty.';
		$this->cp_changing_pass = 'Vaihdetaan salasanaa';
		$this->cp_contact_pm = 'Salli toisten k‰ytt‰jien ottaa sinuun yhteytt‰ viestittimell‰?';
		$this->cp_cp = 'Ohjauspaneeli';
		$this->cp_current_avatar = 'Nykyinen avatar';
		$this->cp_current_time = 'Nyt on %s.';
		$this->cp_dec = 'joulukuu';
		$this->cp_editing_avatar = 'Muokataan avataria';
		$this->cp_editing_profile = 'Muokataan profiilia';
		$this->cp_email = 'S‰hkˆposti';
		$this->cp_email_form = 'Salli toisten k‰ytt‰jien l‰hett‰‰ s‰hkˆpostia lomakkeella?';
		$this->cp_email_invaid = 'Antamasi s‰hkˆpostiosoite ei ole kelvollinen.';
		$this->cp_err_avatar = 'Virhe avatarin p‰ivitt‰misess‰';
		$this->cp_err_updating = 'Virhe profiilin p‰ivitt‰misess‰';
		$this->cp_feb = 'Helmikuu';
		$this->cp_file_type = 'Avatar ei kelpaa. Tarkista ett‰ URL on kelvollinen ja ett‰ tiedostop‰‰te on GIF, JPG tai PNG.';
		$this->cp_format = 'K‰ytt‰j‰tunnus';
		$this->cp_gmt = '[GMT] Greenwich Mean Time'; //Translate
		$this->cp_gmt_nev1 = '[GMT-1:00] Azores, Cape Verde'; //Translate
		$this->cp_gmt_nev10 = '[GMT-10:00] Havaiji';
		$this->cp_gmt_nev11 = '[GMT-11:00] Midway Island, Samoa'; //Translate
		$this->cp_gmt_nev12 = '[GMT-12:00] Kansainv‰linen l‰ntinen aikavyˆhyke';
		$this->cp_gmt_nev2 = '[GMT-2:00] Keskinen Atlantti';
		$this->cp_gmt_nev3 = '[GMT-3:00] Buenos Aires, Grˆnlanti';
		$this->cp_gmt_nev35 = '[GMT-3:30] Newfoundland'; //Translate
		$this->cp_gmt_nev4 = '[GMT-4:00] Canadan Atlantin aikavyˆhyke';
		$this->cp_gmt_nev5 = '[GMT-5:00] It‰inen aikavyˆhyke USA & Canada';
		$this->cp_gmt_nev6 = '[GMT-6:00] Keskinen aikavyˆhyke USA & Canada';
		$this->cp_gmt_nev7 = '[GMT-7:00] Kalliovuorten aikavyˆhyke USA & Canada';
		$this->cp_gmt_nev8 = '[GMT-8:00] Tyynimeren aikavyˆhyke USA & Canada';
		$this->cp_gmt_nev9 = '[GMT-9:00] Alaska'; //Translate
		$this->cp_gmt_pos1 = '[GMT+1:00] Amsterdam, Berlin, Rome, Paris'; //Translate
		$this->cp_gmt_pos10 = '[GMT+10:00] Melbourne, Sydney, Guam'; //Translate
		$this->cp_gmt_pos11 = '[GMT+11:00] Magadan, Uusi-Kaledonia';
		$this->cp_gmt_pos12 = '[GMT+12:00] Auckland, Fiji'; //Translate
		$this->cp_gmt_pos2 = '[GMT+2:00] Helsinki, Ateena, Kairo, Jerusalem';
		$this->cp_gmt_pos3 = '[GMT+3:00] Baghdad, Moskova, Nairobi';
		$this->cp_gmt_pos35 = '[GMT+3:30] Tehran'; //Translate
		$this->cp_gmt_pos4 = '[GMT+4:00] Abu Dhabi, Muscat, Tbilisi'; //Translate
		$this->cp_gmt_pos45 = '[GMT+4:30] Kabul'; //Translate
		$this->cp_gmt_pos5 = '[GMT+5:00] Islamabad, Karachi'; //Translate
		$this->cp_gmt_pos55 = '[GMT+5:30] Bombay, Kalkutta, New Delhi';
		$this->cp_gmt_pos6 = '[GMT+6:00] Almaty, Dhaka'; //Translate
		$this->cp_gmt_pos7 = '[GMT+7:00] Bangkok, Jakarta'; //Translate
		$this->cp_gmt_pos8 = '[GMT+8:00] Beijing, Hong Kong, Singapore'; //Translate
		$this->cp_gmt_pos9 = '[GMT+9:00] Tokio, Soul';
		$this->cp_gmt_pos95 = '[GMT+9:30] Adelaide, Darwin'; //Translate
		$this->cp_header = 'K‰ytt‰j‰n ohjauspaneeli';
		$this->cp_height = 'Korkeus';
		$this->cp_icq = 'ICQ-numero';
		$this->cp_interest = 'Mielenkiinnon kohteet';
		$this->cp_jan = 'tammikuu';
		$this->cp_july = 'hein‰kuu';
		$this->cp_june = 'kes‰kuu';
		$this->cp_label_edit_avatar = 'Muokkaa avataria';
		$this->cp_label_edit_pass = 'Muokkaa salasanaa';
		$this->cp_label_edit_prefs = 'Muokkaa asetuksia';
		$this->cp_label_edit_profile = 'Muokkaa profiilia';
		$this->cp_label_edit_subs = 'Muokkaa seurantalistaa';
		$this->cp_language = 'Kieli';
		$this->cp_less_charac = 'K‰ytt‰j‰tunnuksen voi olla korkeintaan 32 merkki‰.';
		$this->cp_location = 'Sijainti';
		$this->cp_login_first = 'Sinun tulee olla kirjautunut voidaksesi k‰ytt‰‰ ohjauspaneelia.';
		$this->cp_mar = 'maaliskuu';
		$this->cp_may = 'toukokuu';
		$this->cp_msn = 'MSN-tunnus';
		$this->cp_must_orig = 'K‰ytt‰j‰tunnuksen tulee olla identtinen alkuper‰iseen n‰htyn‰. Voit vain muuttaa kirjainten kokoa ja lis‰t‰ tai poistaa v‰lilyˆntej‰.';
		$this->cp_new_notmatch = 'Uudet syˆtt‰m‰si salasanat eiv‰t t‰sm‰‰.';
		$this->cp_new_pass = 'Uusi salasana';
		$this->cp_no_flash = 'Flash-avatareja ei ole sallittu t‰ll‰ keskustelualueella.';
		$this->cp_not_exist = 'Annettu p‰iv‰m‰‰r‰ (%s) ei ole kelvollinen!';
		$this->cp_nov = 'marraskuu';
		$this->cp_oct = 'lokakuu';
		$this->cp_old_notmatch = 'Entinen salasana ei t‰sm‰nnyt tietokannassa olevan kanssa.';
		$this->cp_old_pass = 'Vanha salasana';
		$this->cp_pass_notvaid = 'Salasanasi ei kelpaa. Voit k‰ytt‰‰ vain perusmerkkej‰ kuten kirjaimia, numeroita, viivoja, alaviivaa tai v‰lilyˆntej‰.';
		$this->cp_preferences = 'Muutetaan asetuksia';
		$this->cp_privacy = 'Yksityisyyden suoja';
		$this->cp_repeat_pass = 'Toista uusi salasana';
		$this->cp_sept = 'syyskuu';
		$this->cp_show_active = 'N‰yt‰ tekemiseni julkisesti ollessani keskustelualueella';
		$this->cp_show_email = 'N‰yt‰ s‰hkˆpostiosoite profiilissa';
		$this->cp_signature = 'Allekirjoitus';
		$this->cp_size_max = 'Antamasi avatarin koko on liian suuri. Korkein sallittu koko on %s x %s pikseli‰.';
		$this->cp_skin = 'Keskustelualueen ulkoasu';
		$this->cp_sub_change = 'Muutetaan seurantalistaa';
		$this->cp_sub_delete = 'Poista';
		$this->cp_sub_expire = 'Vanhenemispvm.';
		$this->cp_sub_name = 'Seurantakohteen nimi';
		$this->cp_sub_no_params = 'Parametrej‰ ei annettu.';
		$this->cp_sub_success = 'Olet nyt lis‰nnyt %s seurantalistalle.';
		$this->cp_sub_type = 'Seurannan muoto';
		$this->cp_sub_updated = 'Valitut seurantakohteet on poistettu seurantalistalta.';
		$this->cp_topic_option = 'Keskustelun asetukset';
		$this->cp_updated = 'Profiili p‰ivitetty';
		$this->cp_updated1 = 'Avatar p‰ivitetty';
		$this->cp_updated_prefs = 'Asetukset p‰ivitetty';
		$this->cp_user_exists = 'Samaan tapaan muotoiltu k‰ytt‰j‰tunnus on jo olemassa.';
		$this->cp_valided = 'Salasanasi oli kelvollinen ja se on nyt vaihdettu.';
		$this->cp_view_avatar = 'N‰yt‰ avatarit?';
		$this->cp_view_emoticon = 'N‰yt‰ hymiˆt?';
		$this->cp_view_signature = 'N‰yt‰ allekirjoitukset?';
		$this->cp_welcome = 'Tervetuloa k‰ytt‰j‰n ohjauspaneeliin. Voit t‰‰ll‰ muuttaa tunnuksesi eri asetuksia. Valitse mit‰ haluat muuttaa.';
		$this->cp_width = 'Leveys';
		$this->cp_www = 'Kotisivu';
		$this->cp_yahoo = 'Yahoo-tunnus';
		$this->cp_zone = 'Aikavyˆhyke';
	}

	function email()
	{
		$this->email_blocked = 'K‰ytt‰j‰ ei hyv‰ksy s‰hkˆpostia t‰m‰n keskustelualueen lomakkeen kautta.';
		$this->email_email = 'S‰hkˆposti';
		$this->email_msgtext = 'Viesti:';
		$this->email_no_fields = 'Palaa takaisin ja varmista ett‰ kaikki kohdat on t‰ytetty.';
		$this->email_no_member = 'Annetulla nimell‰ ei lˆytynyt k‰ytt‰j‰‰';
		$this->email_no_perm = 'Sinulla ei ole oikeuksia l‰hett‰‰ s‰hkˆpostia t‰m‰n keskustelualueen v‰lityksell‰.';
		$this->email_sent = 'S‰hkˆpostisi on l‰hetetty.';
		$this->email_subject = 'Otsikko:';
		$this->email_to = 'Vastaanottaja:';
	}

	function forum()
	{
		$this->forum_by = 'Kirjoittanut';
		$this->forum_can_post = 'Voit vastata keskusteluihin t‰ss‰ huoneessa.';
		$this->forum_can_topics = 'Voit lukea t‰m‰n huoneen keskusteluja.';
		$this->forum_cant_post = 'Et voi vastata keskusteluihin t‰ss‰ huoneessa.';
		$this->forum_cant_topics = 'Et voi lukea t‰m‰n huoneen keskusteluja.';
		$this->forum_dot = 'piste';
		$this->forum_dot_detail = 'kertoo ett‰ olet ottanut osaa keskusteluun';
		$this->forum_forum = 'Huone';
		$this->forum_guest = 'Vieras';
		$this->forum_hot = 'suosittu';
		$this->forum_icon = 'Viestin kuvake';
		$this->forum_jump = 'Tarkasta keskustelun uusin viesti';
		$this->forum_last = 'Uusin viesti';
		$this->forum_locked = 'lukittu';
		$this->forum_moved = 'siirretty';
		$this->forum_msg = '%s viesti';
		$this->forum_new = 'uusi';
		$this->forum_new_poll = 'Luo uusi kysely';
		$this->forum_new_topic = 'Aloita uusi keskustelu';
		$this->forum_no_topics = 'T‰ss‰ huoneessa ei ole viel‰ keskustelua.';
		$this->forum_noexist = 'M‰‰ritelty‰ huonetta ei ole olemassa.';
		$this->forum_nopost = 'Ei viestej‰';
		$this->forum_not = 'ei ole';
		$this->forum_noview = 'You do not have permission to view forums.'; //Translate
		$this->forum_pages = 'Sivut';
		$this->forum_pinned = 'niitattu';
		$this->forum_pinned_topic = 'Niitattu keskustelu';
		$this->forum_poll = 'kysely';
		$this->forum_regfirst = 'Sinulla ei ole oikeuksia lukea huonetta. Rekisterˆitym‰ll‰ saatat saada oikeudet.';
		$this->forum_replies = 'Vastauksia';
		$this->forum_starter = 'Aloittaja';
		$this->forum_sub = 'Sis‰huone';
		$this->forum_sub_last_post = 'Edellinen viesti';
		$this->forum_sub_replies = 'Vastausta';
		$this->forum_sub_topics = 'Keskustelua';
		$this->forum_subscribe = 'L‰het‰ s‰hkˆpostia kun t‰h‰n huoneeseen kirjoitetaan viestej‰';
		$this->forum_topic = 'Keskustelu';
		$this->forum_topics_new = 'T‰ss‰ huoneessa on uusia viestej‰.';
		$this->forum_topics_old = 'T‰ss‰ huoneessa ei ole uusia viestej‰.';
		$this->forum_views = 'N‰ytetty';
		$this->forum_write_topics = 'Voit aloittaa keskustelun t‰ss‰ huoneessa.';
	}

	function help()
	{
		$this->help_available_files = 'Opaste';
		$this->help_none = 'Tietokannassa ei ole opastiedostoja.';
	}

	function login()
	{
		$this->login_cant_logged = 'Sinua ei voitu kirjata sis‰‰n. Tarkista ett‰ k‰ytt‰j‰tunnus ja salasana ovat oikein.<br /><br />Kirjainten koolla on v‰li‰, joten \'K‰YtT‰J‰\' on eri asia kuin \'K‰ytt‰j‰\'. Tarkista myˆs ett‰ olet sallinut ev‰steiden k‰ytˆn selaimessasi.';
		$this->login_cookies = 'Kirjautuminen k‰ytt‰‰ ev‰steit‰.';
		$this->login_forgot_pass = 'Unohditko salasanasi?';
		$this->login_header = 'Kirjaudutaan';
		$this->login_logged = 'Sinut on nyt kirjattu sis‰‰n.';
		$this->login_now_out = 'Et ole en‰‰ kirjautunut.';
		$this->login_out = 'Poistutaan';
		$this->login_pass = 'Salasana';
		$this->login_pass_no_id = 'Annetulla nimell‰ ei ole k‰ytt‰j‰tunnusta.';
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Uusi salasana';
		$this->login_pass_sent = 'Sinulle on luotu uusi salasana, joka on l‰hetetty k‰ytt‰j‰tunnuksessasi ilmoitettuun s‰hkˆpostiosoitteeseen.';
		$this->login_sure = 'Are you sure you wish to logoff from \'%s\'?'; //Translate
		$this->login_user = 'K‰ytt‰j‰tunnus';
	}

	function main()
	{
		$this->board_by = 'Kirjoittanut';
		$this->charset = 'iso-8859-15';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'Tunnustasi ei ole viel‰ aktivoitu.';
		$this->main_activate_resend = 'L‰het‰ aktivointikoodi uudelleen';
		$this->main_admincp = 'yll‰pito';
		$this->main_banned = 'Sinulta on ev‰tty kokonaan t‰m‰n keskustelualueen k‰yttˆ.';
		$this->main_code = 'Koodi';
		$this->main_continue = 'Jatka';
		$this->main_cp = 'ohjauspaneeli';
		$this->main_full = 'Yksityiskohdat';
		$this->main_help = 'opaste';
		$this->main_load = 'kuorma';
		$this->main_login = 'kirjaudu';
		$this->main_logout = 'poistu';
		$this->main_max_load = 'Valitettavasti %s on t‰ll‰ hetkell‰ p‰‰sem‰ttˆmiss‰ liian monen paikalla olevan k‰ytt‰j‰n vuoksi.';
		$this->main_members = 'k‰ytt‰j‰t';
		$this->main_messenger = 'viestitin';
		$this->main_new = 'uusi';
		$this->main_next = 'seuraava';
		$this->main_posts_new = 'uusi';
		$this->main_powered = 'Powered by'; //Translate
		$this->main_prev = 'edellinen';
		$this->main_queries = 'kutsua';
		$this->main_quote = 'Lainaus';
		$this->main_register = 'rekisterˆidy';
		$this->main_reminder = 'Muistutus';
		$this->main_reminder_closed = 'Keskustelualue on suljettu ja siten vain yll‰pit‰jien n‰ht‰viss‰.';
		$this->main_said = 'sanoi';
		$this->main_search = 'hae';
		$this->main_seconds = 'sekuntia';
		$this->main_welcome = 'Tervetuloa';
		$this->main_welcome_guest = 'Tervetuloa!';
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = ','; //Translate
		$this->submit = 'L‰het‰';
		$this->today = 't‰n‰‰n';
		$this->yesterday = 'eilen';
	}

	function members()
	{
		$this->members_all = 'kaikki';
		$this->members_email = 'S‰hkˆposti';
		$this->members_email_member = 'L‰het‰ s‰hkˆpostia t‰lle k‰ytt‰j‰lle';
		$this->members_group = 'Ryhm‰';
		$this->members_joined = 'Liittyi';
		$this->members_list = 'K‰ytt‰j‰lista';
		$this->members_member = 'K‰ytt‰j‰';
		$this->members_pm = 'Viestitin';
		$this->members_posts = 'Viestej‰';
		$this->members_send_pm = 'L‰het‰ viesti t‰lle k‰ytt‰j‰lle viestittimell‰';
		$this->members_title = 'Nimike';
		$this->members_vist_www = 'Vieraile t‰m‰n k‰ytt‰j‰n sivustolla';
		$this->members_www = 'Sivusto';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Haluatko varmasti poistaa t‰m‰n viestin?';
		$this->mod_confirm_topic_delete = 'Haluatko varmasti poistaa t‰m‰n keskustelun?';
		$this->mod_error_first_post = 'Et voi poistaa keskustelun ensimm‰ist‰ viesti‰.';
		$this->mod_error_move_category = 'Et voi siirt‰‰ keskustelua kategoriaan.';
		$this->mod_error_move_create = 'Sinulla ei ole oikeuksia siirt‰‰ keskusteluja tuohon huoneeseen.';
		$this->mod_error_move_forum = 'Et voi siirt‰‰ keskustelua huoneeseen jota ei ole olemassa.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Et voi siirt‰‰ keskustelua huoneeseen jossa se jo on.';
		$this->mod_label_controls = 'Valvojan tyˆkalupakki';
		$this->mod_label_description = 'Kuvaus';
		$this->mod_label_emoticon = 'Muuta hymiˆt kuviksi?';
		$this->mod_label_global = 'Julkinen keskustelu';
		$this->mod_label_mbcode = 'Muotoile MbCode?';
		$this->mod_label_move_to = 'Siirr‰ huoneeseen';
		$this->mod_label_options = 'Asetukset';
		$this->mod_label_post_delete = 'Poista viesti';
		$this->mod_label_post_edit = 'Muokkaa viesti‰';
		$this->mod_label_title = 'Otsikko';
		$this->mod_label_title_original = 'Alkuper‰inen otsikko';
		$this->mod_label_title_split = 'Jaettu otsikko';
		$this->mod_label_topic_delete = 'Poista keskustelu';
		$this->mod_label_topic_edit = 'Muokkaa keskustelua';
		$this->mod_label_topic_lock = 'Lukitse keskustelu';
		$this->mod_label_topic_move = 'Siirr‰ keskustelu';
		$this->mod_label_topic_move_complete = 'Siirr‰ keskustelu toiseen huoneeseen';
		$this->mod_label_topic_move_link = 'Siirr‰ keskustelu uuteen huoneeseen ja j‰t‰ entiseen huoneeseen linkki uuteen sijaintiin.';
		$this->mod_label_topic_pin = 'Niittaa keskustelu';
		$this->mod_label_topic_split = 'Jaa keskustelu';
		$this->mod_missing_post = 'Valittua viesti‰ ei ole olemassa.';
		$this->mod_missing_topic = 'Valittua keskustelua ei ole olemassa.';
		$this->mod_no_action = 'Sinun tulee valita toiminto.';
		$this->mod_no_post = 'Sinun tulee valita viesti.';
		$this->mod_no_topic = 'Sinun tulee valita keskustelu.';
		$this->mod_perm_post_delete = 'Sinulla ei ole oikeuksia poistaa t‰t‰ viesti‰.';
		$this->mod_perm_post_edit = 'Sinulla ei ole oikeuksia muokata t‰t‰ viesti‰.';
		$this->mod_perm_topic_delete = 'Sinulla ei ole oikeuksia poistaa t‰t‰ keskustelua.';
		$this->mod_perm_topic_edit = 'Sinulla ei ole oikeuksia muokata t‰t‰ keskustelua.';
		$this->mod_perm_topic_lock = 'Sinulla ei ole oikeuksia lukita t‰t‰ keskustelua.';
		$this->mod_perm_topic_move = 'Sinulla ei ole oikeuksia siirt‰‰ t‰t‰ keskustelua.';
		$this->mod_perm_topic_pin = 'Sinulla ei ole oikeuksia niitata t‰t‰ keskustelua.';
		$this->mod_perm_topic_split = 'Sinulla ei ole oikeuksia jakaa t‰t‰ keskustelua.';
		$this->mod_perm_topic_unlock = 'Sinulla ei ole oikeuksia avata t‰t‰ keskustelua.';
		$this->mod_perm_topic_unpin = 'Sinulla ei ole oikeuksia poistaa niitti‰ t‰st‰ keskustelusta.';
		$this->mod_success_post_delete = 'Viestin poisto onnistui.';
		$this->mod_success_post_edit = 'Viestin muokkaus onnistui.';
		$this->mod_success_split = 'Keskustelun jako onnistui.';
		$this->mod_success_topic_delete = 'Keskustelun poisto onnistui.';
		$this->mod_success_topic_edit = 'Keskustelun muokkaus onnistui.';
		$this->mod_success_topic_move = 'Keskustelun siirto uuteen huoneeseen onnistui.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'piste';
		$this->new_posts_dot_detail = 'kertoo ett‰ olet ottanut osaa keskusteluun';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'Huone';
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'suosittu';
		$this->new_posts_last = 'Uusin viesti';
		$this->new_posts_locked = 'lukittu';
		$this->new_posts_moved = 'siirretty';
		$this->new_posts_new = 'uusi';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'ei ole';
		$this->new_posts_pinned = 'niitattu';
		$this->new_posts_poll = 'kysely';
		$this->new_posts_topic = 'Keskustelu';
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
		$this->pm_cant_del = 'Sinulla ei ole oikeuksia poistaa t‰t‰ viesti‰.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Poista kaikki viestit';
		$this->pm_delete = 'Poista';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Viesti on poistettu.';
		$this->pm_deleted_all = 'Viestit on poistettu.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Viesti‰si ei voitu l‰hett‰‰. Tarkista ett‰ olet t‰ytt‰nyt kaikki vaaditut kent‰t.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Saapuneet';
		$this->pm_folder_new = '%s uutta';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'L‰hett‰nyt';
		$this->pm_group = 'Ryhm‰';
		$this->pm_guest = 'Sinulla ei ole vieraana oikeutta k‰ytt‰‰ viestitint‰. Kirjaudu sis‰‰n tai rekisterˆidy.';
		$this->pm_joined = 'Liittyi';
		$this->pm_messenger = 'Viestitin';
		$this->pm_msgtext = 'Viestin sis‰ltˆ';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'Sinun tulee m‰‰ritt‰‰ kansio.';
		$this->pm_no_member = 'Annetulla ID:ll‰ ei lˆytynyt k‰ytt‰j‰‰.';
		$this->pm_no_number = 'Annetulla numerolla ei lˆytynyt viesti‰.';
		$this->pm_no_title = 'Et otsikkoa';
		$this->pm_nomsg = 'T‰ss‰ kansiossa ei ole viestej‰.';
		$this->pm_noview = 'Sinulla ei ole oikeuksia lukea t‰t‰ viesti‰.';
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Viestitin';
		$this->pm_personal_msging = 'L‰hetet‰‰n viesti‰';
		$this->pm_pm = 'Viestitin';
		$this->pm_posts = 'Viestej‰';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Vastaa';
		$this->pm_send = 'L‰het‰';
		$this->pm_sendamsg = 'L‰het‰ viesti';
		$this->pm_sendingpm = 'L‰het‰ viesti viestittimell‰';
		$this->pm_sendon = 'L‰hetetty';
		$this->pm_success = 'Viestisi l‰hett‰minen onnistui.';
		$this->pm_sure_del = 'Haluatko varmasti poistaa t‰m‰n viestin?';
		$this->pm_sure_delall = 'Haluatko varmasti poistaa kaikki viestit t‰st‰ kansiosta?';
		$this->pm_title = 'Otsikko';
		$this->pm_to = 'Vastaanottaja';
	}

	function post()
	{
		$this->post_attach = 'Liitteet';
		$this->post_attach_add = 'Lis‰‰ liitetiedosto';
		$this->post_attach_disrupt = 'Liitteiden lis‰ys tai poisto ei tuhoa viesti‰si.';
		$this->post_attach_failed = 'Liitteen l‰hetys ep‰onnistui. M‰‰rittelem‰si tiedosto ei ehk‰ ole olemassa.';
		$this->post_attach_not_allowed = 'Et voi liitt‰‰ tuontyyppist‰ tiedostoa.';
		$this->post_attach_remove = 'Poista liite';
		$this->post_attach_too_large = 'Valittu tiedosto on liian suuri. Tiedosto voi olla korkeintaan %d kilotavua.';
		$this->post_cant_create = 'Sinulla ei ole vieraana oikeuksia keskustelun aloittamiseen. Rekisterˆitym‰ll‰ saatat saada oikeuden aloittaa keskustelu.';
		$this->post_cant_create1 = 'Sinulla ei ole oikeuksia aloittaa keskustelua.';
		$this->post_cant_enter = 'ƒ‰nt‰si ei voitu vastaanottaa. Olet joko jo antanut ‰‰nen t‰h‰n kyselyyn tai sinulla ei ole ‰‰nestysoikeuksia.';
		$this->post_cant_poll = 'Sinulla ei ole vieraana oikeuksia luoda kysely‰. Rekisterˆitym‰ll‰ saatat saada oikeuden luoda kysely.';
		$this->post_cant_poll1 = 'Sinulla ei ole oikeuksia luoda kysely.';
		$this->post_cant_reply = 'Sinulla ei ole oikeuksia vastata keskusteluihin t‰ss‰ huoneessa.';
		$this->post_cant_reply1 = 'Sinulla ei ole vieraana oikeuksia vastata keskusteluihin. Rekisterˆitym‰ll‰ saatat saada oikeuden kirjoittaa viestej‰.';
		$this->post_cant_reply2 = 'Sinulla ei ole oikeuksia vastata keskusteluun.';
		$this->post_closed = 'T‰m‰ keskustelu on lukittu.';
		$this->post_create_poll = 'Luo kysely';
		$this->post_create_topic = 'Aloita keskustelu';
		$this->post_creating = 'Aloitetaan keskustelua';
		$this->post_creating_poll = 'Luodaan kysely‰';
		$this->post_flood = 'Olet kirjoittanut edellisten %s sekunnin aikana, etk‰ siksi voi l‰hett‰‰ viesti‰ juuri nyt.<br /><br />Yrit‰ hetken kuluttua uudelleen.';
		$this->post_guest = 'Vieras';
		$this->post_icon = 'Viestin kuvake';
		$this->post_last_five = 'Edelliset viisi viesti‰ k‰‰nteisess‰ j‰rjestyksess‰';
		$this->post_length = 'Tarkista pituus';
		$this->post_mbcode_address = 'Anna osoite';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Sininen';
		$this->post_mbcode_bold = 'Lihavoi';
		$this->post_mbcode_bold1 = 'B'; //Translate
		$this->post_mbcode_chocolate = 'Suklaa';
		$this->post_mbcode_code = 'Koodi';
		$this->post_mbcode_color = 'V‰ri';
		$this->post_mbcode_coral = 'Koralli';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Verenpunainen';
		$this->post_mbcode_darkblue = 'Tummansininen';
		$this->post_mbcode_darkred = 'Tummanpunainen';
		$this->post_mbcode_deepink = 'Syv‰ pinkki';
		$this->post_mbcode_detail = 'Syˆt‰ kuvaus';
		$this->post_mbcode_email = 'S‰hkˆposti';
		$this->post_mbcode_firered = 'Tiilenpunainen';
		$this->post_mbcode_font = 'Fontti';
		$this->post_mbcode_green = 'Vihre‰';
		$this->post_mbcode_huge = 'Suurin';
		$this->post_mbcode_image = 'Kuva';
		$this->post_mbcode_image1 = 'IMG'; //Translate
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Indigo'; //Translate
		$this->post_mbcode_italic = 'Kursivoi';
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Suuri';
		$this->post_mbcode_length = 'Viestisi on "+length+" merkki‰ pitk‰.';
		$this->post_mbcode_limegreen = 'Sitruksenvihre‰';
		$this->post_mbcode_medium = 'Normaali';
		$this->post_mbcode_orange = 'Oranssi';
		$this->post_mbcode_orangered = 'Oranssinpunainen';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Violetti';
		$this->post_mbcode_quote = 'Lainaa';
		$this->post_mbcode_red = 'Punainen';
		$this->post_mbcode_royalblue = 'Kuninkaallisen sininen';
		$this->post_mbcode_sandybrown = 'Hiekanruskea';
		$this->post_mbcode_seagreen = 'Merenvihre‰';
		$this->post_mbcode_sienna = 'Sienna'; //Translate
		$this->post_mbcode_silver = 'Hopea';
		$this->post_mbcode_size = 'Koko';
		$this->post_mbcode_skyblue = 'Taivaansininen';
		$this->post_mbcode_small = 'Pieni';
		$this->post_mbcode_strike = 'Yliviivattu';
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Tavi';
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Pienin';
		$this->post_mbcode_tomato = 'Tomaatti';
		$this->post_mbcode_underline = 'Alleviivaus';
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Tukeva puu';
		$this->post_msg = 'Viesti';
		$this->post_must_msg = 'Sinun tulee kirjoittaa viesti.';
		$this->post_must_options = 'Sinun tulee antaa vaihtoehtoja uuteen kyselyyn.';
		$this->post_must_title = 'Sinun tulee antaa keskustelulle otsikko.';
		$this->post_new_poll = 'Uusi kysely';
		$this->post_new_topic = 'Uusi keskustelu';
		$this->post_no_forum = 'Huonetta ei lˆytynyt.';
		$this->post_no_topic = 'Keskustelua ei ole m‰‰ritelty.';
		$this->post_no_vote = 'Sinun tulee valita mit‰ ‰‰nest‰t.';
		$this->post_option_emoticons = 'Muuta hymiˆt kuviksi?';
		$this->post_option_global = 'Tee t‰st‰ julkinen keskustelu?';
		$this->post_option_mbcode = 'Muotoile MbCode?';
		$this->post_optional = 'vaihtoehtonen';
		$this->post_options = 'Asetukset';
		$this->post_poll_options = 'Kyselyn asetukset';
		$this->post_poll_row = 'Yksi rivi‰ kohden';
		$this->post_posted = 'Kirjoitettu';
		$this->post_posting = 'Kirjoitetaan viesti‰';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Vastaa';
		$this->post_reply_topic = 'Vastaa keskusteluun';
		$this->post_replying = 'Vastataan keskusteluun';
		$this->post_replying1 = 'Vastataan';
		$this->post_smiles = 'Hymiˆit‰ (lis‰‰ napsauttamalla)';
		$this->post_too_many_options = 'Sinulla tulee olla v‰hint‰‰n 2 ja korkeintaan %d vaihtoehtoa kyselyss‰.';
		$this->post_topic_detail = 'Keskustelun kuvaus';
		$this->post_topic_title = 'Keskustelun otsikko';
		$this->post_view_topic = 'N‰yt‰ koko keskustelu';
		$this->post_voting = 'ƒ‰nestet‰‰n';
	}

	function printer()
	{
		$this->printer_back = 'Takaisin';
		$this->printer_not_found = 'Keskustelua ei lˆytynyt. Se on saatettu poistaa, siirt‰‰ tai sit‰ ei ole ehk‰ koskaan ollut olemassa.';
		$this->printer_not_found_title = 'Keskustelua ei lˆytynyt';
		$this->printer_perm_topics = 'Sinulla ei ole oikeuksia lukea keskustelua.';
		$this->printer_perm_topics_guest = 'Sinulla ei ole oikeuksia lukea keskustelua. Rekisterˆitym‰ll‰ saatat saada oikeudet.';
		$this->printer_posted_on = 'L‰hetetty';
		$this->printer_send = 'Tulosta';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM-tunnus';
		$this->profile_av_sign = 'Avatar ja allekirjoitus';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'Syntym‰p‰iv‰';
		$this->profile_contact = 'Yhteystiedot';
		$this->profile_email_address = 'S‰hkˆpostiosoite';
		$this->profile_fav = 'Suosikkihuone';
		$this->profile_fav_forum = '%s (%d%% t‰m‰n k‰ytt‰j‰n viesteist‰)';
		$this->profile_icq_uin = 'ICQ-numero';
		$this->profile_info = 'Tiedot';
		$this->profile_interest = 'Mielenkiinnon kohteet';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'Uusin viesti';
		$this->profile_list = 'K‰ytt‰j‰lista';
		$this->profile_location = 'Sijainti';
		$this->profile_member = 'K‰ytt‰j‰ryhm‰';
		$this->profile_member_title = 'K‰ytt‰j‰nimeke';
		$this->profile_msn = 'MSN-tunnus';
		$this->profile_must_user = 'Sinun tulee antaa k‰ytt‰j‰nimi n‰hd‰ksesi profiilin.';
		$this->profile_no_member = 'Annetulla ID-numerolla ei lˆytynyt k‰ytt‰j‰‰. Tunnus on ehk‰ poistettu.';
		$this->profile_none = '[ ei ole ]';
		$this->profile_not_post = 'ei ole viel‰ kirjoittanut.';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Viestitin';
		$this->profile_postcount = '%s yhteens‰, %s p‰iv‰ss‰ keskim‰‰rin';
		$this->profile_posts = 'Viestej‰';
		$this->profile_private = '[ yksityinen ]';
		$this->profile_profile = 'Profiili';
		$this->profile_signature = 'Allekirjoitus';
		$this->profile_unkown = '[ tuntematon ]';
		$this->profile_view_profile = 'Profiili';
		$this->profile_www = 'Kotisivu';
		$this->profile_yahoo = 'Yahoo-tunnus';
	}

	function register()
	{
		$this->register_activated = 'Tunnuksesi on aktivoitu!';
		$this->register_activating = 'Tunnuksen aktivointi';
		$this->register_activation_error = 'Tunnustasi aktivoitaessa tapahtui virhe. Varmista ett‰ selaimen osoitekentt‰ sis‰lt‰‰ s‰hkˆpostissa olleen URLin kokonaisena. Mik‰li ongelma toistuu, ota yhteytt‰ keskustelualueen yll‰pitoon ja he l‰hett‰v‰t s‰hkˆpostin uudelleen.';
		$this->register_confirm_passwd = 'Vahvista salasana';
		$this->register_done = 'Sinut on rekisterˆity! Voit nyt kirjautua.';
		$this->register_email = 'S‰hkˆpostiosoite';
		$this->register_email_invalid = 'Antamasi s‰hkˆpostisoite ei ole kelvollinen.';
		$this->register_email_used = 'Antamasi s‰hkˆpostiosoite on jo toisella k‰ytt‰j‰ll‰.';
		$this->register_fields = 'Kaikkia kentti‰ ei ole t‰ytetty.';
		$this->register_image = 'Kirjoita kuvassa n‰kyv‰ teksti.';
		$this->register_image_invalid = 'Varmistaaksemme sinut ihmisk‰ytt‰j‰ksi sinun tulee kirjoittaa kuvassa n‰kyv‰ teksti.';
		$this->register_must_activate = 'Sinut on rekisterˆity. S‰hkˆposti on l‰hetetty osoitteeseen %s sis‰lt‰en tiedon siit‰ kuinka voit aktivoida tunnuksesi. Tunnuksesi on rajoitettu kunnes aktivoit sen.';
		$this->register_name_invalid = 'Antamasi nimi on liian pitk‰.';
		$this->register_name_taken = 'K‰ytt‰j‰tunnus on jo k‰ytˆss‰.';
		$this->register_new_user = 'Haluamasi k‰ytt‰j‰tunnus';
		$this->register_pass_invalid = 'Antamasi salasana ei ole kelvollinen. Varmista ett‰ se sis‰lt‰‰ vain kirjaimia, numeroita, viivoja, alaviivoja tai v‰lilyˆntej‰ ja ett‰ se on ainakin viisi merkki‰ pitk‰.';
		$this->register_pass_match = 'Syˆtt‰m‰si salasanat eiv‰t t‰sm‰‰.';
		$this->register_passwd = 'Salasana';
		$this->register_reg = 'Rekisterˆidy';
		$this->register_reging = 'Rekisterˆid‰‰n';
	}

	function search()
	{
		$this->search_advanced = 'Lis‰asetukset';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Perusasetukset';
		$this->search_characters = 'merkki‰ viestist‰';
		$this->search_day = 'p‰iv‰ sitten';
		$this->search_days = 'p‰iv‰‰ sitten';
		$this->search_exact_name = 'nimi on t‰ydellinen';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Etsi t‰t‰';
		$this->search_forum = 'Huone';
		$this->search_group = 'Ryhm‰';
		$this->search_guest = 'Vieras';
		$this->search_in = 'Hakualue';
		$this->search_in_posts = 'Only search in posts'; //Translate
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Liittyi';
		$this->search_level = 'K‰ytt‰j‰n taso';
		$this->search_match = 'Perushaku';
		$this->search_matches = 'osumaa';
		$this->search_month = 'kuukausi sitten';
		$this->search_months = 'kuukautta sitten';
		$this->search_mysqldoc = 'MySQL:n dokumentaatio';
		$this->search_newer = 'myˆhemmin';
		$this->search_no_results = 'Haulla ei saatu tuloksia.';
		$this->search_no_words = 'Sinun tulee antaa hakuehtoja.<br /><br />Jokaisen ehdon tulee olla v‰hint‰‰n kolme merkki‰ ja sis‰lt‰‰ kirjaimia, numeroita, heittomerkkej‰ tai alaviivoja.';
		$this->search_older = 'aiemmin';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'N‰yt‰ vain ensimm‰iset';
		$this->search_partial_name = 'vain osa nimest‰';
		$this->search_post_icon = 'Viestin kuvake';
		$this->search_posted_on = 'L‰hetetty';
		$this->search_posts = 'Viestej‰';
		$this->search_posts_by = 'Only in posts by'; //Translate
		$this->search_regex = 'Etsi k‰ytt‰en \'regular expression\'';
		$this->search_regex_failed = 'K‰ytt‰m‰si \'regular expression\' ei toiminut. Tarkista MySQL:n dokumentaatio saadaksesi lis‰tietoa aiheesta.';
		$this->search_relevance = 'Natsauskerroin: %d%%';
		$this->search_replies = 'Vastauksia';
		$this->search_result = 'Haun tulokset';
		$this->search_search = 'Hae';
		$this->search_select_all = 'koko keskustelualue';
		$this->search_show_posts = 'N‰yt‰ t‰sm‰‰v‰t viestit';
		$this->search_sound = 'Hae soveltaen ‰‰nt‰myst‰';
		$this->search_starter = 'Aloittanut';
		$this->search_than = 'kuin';
		$this->search_topic = 'Keskustelu';
		$this->search_unreg = 'Rekisterˆitym‰tˆn';
		$this->search_week = 'viikko sitten';
		$this->search_weeks = 'viikkoa sitten';
		$this->search_year = 'vuosi sitten';
	}

	function topic()
	{
		$this->topic_attached = 'Liitetiedosto:';
		$this->topic_attached_downloads = 'kopiointia';
		$this->topic_attached_perm = 'Sinulla ei ole oikeuksia kopioida t‰t‰ tiedostoa.';
		$this->topic_attached_title = 'Liitetiedosto';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Luo uusi kysely';
		$this->topic_create_topic = 'Aloita uusi keskustelu';
		$this->topic_delete = 'Poista';
		$this->topic_delete_post = 'Poista t‰m‰ viesti';
		$this->topic_edit = 'Muokkaa';
		$this->topic_edit_post = 'Muokkaa t‰t‰ viesti‰';
		$this->topic_edited = '%s viesti‰ muokkasi %s';
		$this->topic_error = 'Virhe';
		$this->topic_group = 'Ryhm‰';
		$this->topic_guest = 'Vieras';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Liittyi';
		$this->topic_level = 'K‰ytt‰j‰n taso';
		$this->topic_links_aim = 'L‰het‰ AIM-viesti k‰ytt‰j‰lle %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'L‰het‰ s‰hkˆpostia k‰ytt‰j‰lle %s';
		$this->topic_links_icq = 'L‰het‰ ICQ-viesti‰ k‰ytt‰j‰lle %s';
		$this->topic_links_msn = 'N‰yt‰ k‰ytt‰j‰n %s MSN-profiili';
		$this->topic_links_pm = 'L‰het‰ viesti viestittimell‰ k‰ytt‰j‰lle %s';
		$this->topic_links_web = 'Vieraile k‰ytt‰j‰n %s sivustolla';
		$this->topic_links_yahoo = 'L‰het‰ viesti k‰ytt‰j‰lle %s Yahoo! Messengerill‰';
		$this->topic_lock = 'Lukitse';
		$this->topic_locked = 'Keskustelu lukittu';
		$this->topic_move = 'Siirr‰';
		$this->topic_no_votes = 'T‰ss‰ kyselyss‰ ei ole ‰‰ni‰.';
		$this->topic_not_found = 'Keskustelua ei lˆydy';
		$this->topic_not_found_message = 'Keskustelua ei lˆydy. Se on saatettu poistaa, siirt‰‰ tai sit‰ ei ehk‰ koskaan ole ollutkaan.';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Keskustelun asetukset';
		$this->topic_pages = 'Sivut';
		$this->topic_perm_view = 'Sinulla ei ole oikeuksia lukea keskusteluja.';
		$this->topic_perm_view_guest = 'Sinulla ei ole oikeuksia keskustelun lukemiseen. Rekisterˆitym‰ll‰ saatat saada oikeudet.';
		$this->topic_pin = 'Niittaa';
		$this->topic_posted = 'L‰hetetty';
		$this->topic_posts = 'Viestej‰';
		$this->topic_print = 'N‰yt‰ tulostettava versio';
		$this->topic_quote = 'Vastaa lainaten t‰t‰ viesti‰';
		$this->topic_reply = 'Vastaa keskusteluun';
		$this->topic_split = 'Jaa';
		$this->topic_split_finish = 'Suorita kaikki jaot';
		$this->topic_split_keep = 'ƒl‰ siirr‰ t‰t‰ viesti‰';
		$this->topic_split_move = 'Siirr‰ t‰m‰ viesti';
		$this->topic_subscribe = 'L‰het‰ s‰hkˆpostia kun t‰h‰n keskusteluun otetaan osaa';
		$this->topic_top = 'Palaa sivun alkuun';
		$this->topic_unlock = 'Avaa';
		$this->topic_unpin = 'Irroita niitti';
		$this->topic_unreg = 'Rekisterˆitym‰tˆn';
		$this->topic_view = 'N‰yt‰ tulokset';
		$this->topic_viewing = 'Keskustelu';
		$this->topic_vote = 'ƒ‰nest‰';
		$this->topic_vote_count_plur = '%d ‰‰nt‰';
		$this->topic_vote_count_sing = '%d ‰‰ni';
		$this->topic_votes = 'ƒ‰nt‰';
	}
}
?>