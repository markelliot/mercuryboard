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
 * $Id: id.php,v 1.15 2006/07/26 17:56:19 jon Exp $
 **/

/**
 * Indonesian language module
 *
 * @author Deco <deco1895@yahoo.com>
 * @since 1.1.0
 **/
class id
{
	function active()
	{
		$this->active_last_action = 'Aksi terakhir';
		$this->active_modules_active = 'Lihat aktif';
		$this->active_modules_board = 'Lihat Index';
		$this->active_modules_cp = 'Menggunakan Control Panel';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = 'Memakai Bantuan';
		$this->active_modules_login = 'Logging In/Out';
		$this->active_modules_members = 'Lihat Daftar Anggota';
		$this->active_modules_mod = 'Moderating'; //Translate
		$this->active_modules_pm = 'Memakai Messenger';
		$this->active_modules_post = 'Posting'; //Translate
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_search = 'Mencari';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = 'Time'; //Translate
		$this->active_user = 'User'; //Translate
		$this->active_users = 'User Aktif';
	}

	function board()
	{
		$this->board_active_users = 'User Aktif';
		$this->board_birthdays = 'Hari ini Ulang Tahun:';
		$this->board_can_post = 'Anda dapat membalas forum ini.';
		$this->board_can_topics = 'Anda hanya dapat melihat tetapi anda tidak bisa membuat topik baru.';
		$this->board_cant_post = 'Anda tidak bisa meReply di forum ini.';
		$this->board_cant_topics = 'Anda tidak dapat melihat atau membuat topik baru di forum ini.';
		$this->board_forum = 'Forum'; //Translate
		$this->board_guests = 'Tamu';
		$this->board_last_post = 'Posting terakhir';
		$this->board_mark = 'Marking Posts As Read'; //Translate
		$this->board_mark1 = 'All posts and forums have been marked as read.'; //Translate
		$this->board_members = 'Anggota';
		$this->board_message = '%s Pesan';
		$this->board_most_online = 'The most users ever online was %d on %s.'; //Translate
		$this->board_nobday = 'Tidak ada anggota yang berulang tahun hari ini.';
		$this->board_nobody = 'Tidak ada anggota yang online.';
		$this->board_nopost = 'Tidak ada Post';
		$this->board_noview = 'Anda tidak punya izin untuk melihat board.';
		$this->board_regfirst = 'Anda tidak punya izin untuk melihat board. Jika anda mendaftar, Anda baru bisa melihatnya.';
		$this->board_replies = 'Balasan';
		$this->board_stats = 'Statistik';
		$this->board_stats_string = '%s users have registered. Welcome to our newest member, %s.<br />There are %s topics and %s replies for a total of %s posts.'; //Translate
		$this->board_topics = 'Topik';
		$this->board_topics_new = 'Tidak ada posting-posting baru di forum ini.';
		$this->board_topics_old = 'Tidak ada posting baru di forum ini.';
		$this->board_users = 'user';
		$this->board_write_topics = 'Anda dapat melihat dan membuat topik di forum ini.';
	}

	function cp()
	{
		$this->cp_aim = 'AIM';
		$this->cp_already_member = 'The email address you entered is already assigned to a member.'; //Translate
		$this->cp_apr = 'April'; //Translate
		$this->cp_aug = 'Agustus';
		$this->cp_avatar_current = 'Avatar yang anda pakai';
		$this->cp_avatar_error = 'Avatar Error'; //Translate
		$this->cp_avatar_must_select = 'Anda harus memilih Avatar.';
		$this->cp_avatar_none = 'Avatar tidak ditampilkan';
		$this->cp_avatar_pixels = 'pixels'; //Translate
		$this->cp_avatar_select = 'Pilih avatar';
		$this->cp_avatar_size_height = 'Tinggi avatar anda harus 1 sampai';
		$this->cp_avatar_size_width = 'Lebar avatar anda harus 1 sampai';
		$this->cp_avatar_upload = 'Upload avatar melalui file koleksi anda';
		$this->cp_avatar_upload_failed = 'Upload avatar gagal. Tipe file yang anda upload tidak terdaftar dalam list database kami.';
		$this->cp_avatar_upload_not_image = 'Anda hanya dapat mengupload file image seagai avatar anda.';
		$this->cp_avatar_upload_too_large = 'File avatar terlalu besar. Maximum adalah %d kilobytes.';
		$this->cp_avatar_url = 'Berikan URL untuk avatar anda';
		$this->cp_avatar_use = 'Tampilkan avatar';
		$this->cp_bday = 'Tanggal Lahir';
		$this->cp_been_updated = 'Profile telah diupdate.';
		$this->cp_been_updated1 = 'Avatar telah diupdate.';
		$this->cp_been_updated_prefs = 'Preference berhasil diupdate.';
		$this->cp_changing_pass = 'Editing Password'; //Translate
		$this->cp_contact_pm = 'Memperbolehkan yang lain untuk menghubungi anda via messenger?';
		$this->cp_cp = 'Control Panel'; //Translate
		$this->cp_current_avatar = 'Avatar digunakan';
		$this->cp_current_time = 'It is currently %s.'; //Translate
		$this->cp_dec = 'Desember';
		$this->cp_editing_avatar = 'Mengedit Avatar';
		$this->cp_editing_profile = 'Mengedit Profil';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = 'Memperbolehkan yang lain untuk mengirim email kepada anda?';
		$this->cp_email_invaid = 'Alamat email yang anda masukan tidak sah.';
		$this->cp_err_avatar = 'Error Mengupdate Avatar';
		$this->cp_err_updating = 'Error Mengupdate Profile';
		$this->cp_feb = 'Februari';
		$this->cp_file_type = 'Avatar yang anda masukan tidak valid. Periksa dengan benar URL yang anda berikan, dan harus bertipe gif, jpg, atau png.';
		$this->cp_format = 'Format Nama';
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
		$this->cp_header = 'User Control Panel'; //Translate
		$this->cp_height = 'Tinggi';
		$this->cp_icq = 'Nomor ICQ';
		$this->cp_interest = 'Kesukaan';
		$this->cp_jan = 'Januari';
		$this->cp_july = 'Juli';
		$this->cp_june = 'Juni';
		$this->cp_label_edit_avatar = 'Edit Avatar'; //Translate
		$this->cp_label_edit_pass = 'Edit Password'; //Translate
		$this->cp_label_edit_prefs = 'Edit Preference';
		$this->cp_label_edit_profile = 'Edit Profil';
		$this->cp_label_edit_subs = 'Edit Subscription';
		$this->cp_language = 'Bahasa';
		$this->cp_less_charac = 'Nama anda tidak boleh lebih dari 32 karakter.';
		$this->cp_location = 'Lokasi';
		$this->cp_login_first = 'Anda harus Log in terlebih dahulu untuk mengakses control panel anda.';
		$this->cp_mar = 'Maret';
		$this->cp_may = 'Mei';
		$this->cp_msn = 'MSN Identitas';
		$this->cp_must_orig = 'Nama anda harus nama asli.';
		$this->cp_new_notmatch = 'Password baru yang anda masukkan tidak cocok.';
		$this->cp_new_pass = 'Password baru';
		$this->cp_no_flash = 'Avatar Flash tidak diperbolehkan.';
		$this->cp_not_exist = 'Waktu yang anda maksud (%s) tidak ada!';
		$this->cp_nov = 'November'; //Translate
		$this->cp_oct = 'Oktober';
		$this->cp_old_notmatch = 'Password lama yang anda masukkan tidak cocok dalam database kami.';
		$this->cp_old_pass = 'Password lama';
		$this->cp_pass_notvaid = 'Password tidak valid. Pastikan anda mengetik dengan benar.';
		$this->cp_preferences = 'Rubah Preference';
		$this->cp_privacy = 'Option Pribadi';
		$this->cp_repeat_pass = 'Ulangi password baru';
		$this->cp_sept = 'September'; //Translate
		$this->cp_show_active = 'Show your activities when you are using the board?'; //Translate
		$this->cp_show_email = 'Tampilkan alamat email di profil?';
		$this->cp_signature = 'Signature'; //Translate
		$this->cp_size_max = 'Avatar terlalu besar. Yang diperbolehkan adalah %s by %s pixel.';
		$this->cp_skin = 'Board Skin'; //Translate
		$this->cp_sub_change = 'Merubah Subscription';
		$this->cp_sub_delete = 'Hapus';
		$this->cp_sub_expire = 'Tanggal Berakhir';
		$this->cp_sub_name = 'Nama Subscription';
		$this->cp_sub_no_params = 'Tidak ada paramater yang diberikan.';
		$this->cp_sub_success = 'Anda sekarang disubscribe ke %s.';
		$this->cp_sub_type = 'Tipe Subscription';
		$this->cp_sub_updated = 'Subscription berhasil dihapus.';
		$this->cp_topic_option = 'Option Topik';
		$this->cp_updated = 'Profil diupdate';
		$this->cp_updated1 = 'Avatar diupdate';
		$this->cp_updated_prefs = 'Preference diupdated';
		$this->cp_user_exists = 'User dengan nama tersebut sudah ada.';
		$this->cp_valided = 'Password telah divalidasi dan dirubah.';
		$this->cp_view_avatar = 'Perlihatkan Avatar?';
		$this->cp_view_emoticon = 'Perlihatkan Emoticon ?';
		$this->cp_view_signature = 'Perlihatkan Signature ?';
		$this->cp_welcome = 'Selamat datang di user control panel. Disini anda dapat merubah setting konfigurasi account anda. Silahkan pilih option diatas.';
		$this->cp_width = 'Lebar';
		$this->cp_www = 'Homepage'; //Translate
		$this->cp_yahoo = 'Yahoo Identitas';
		$this->cp_zone = 'Zona Waktu';
	}

	function email()
	{
		$this->email_blocked = 'Member tidak mau menerima email dari form ini.';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Email Body:'; //Translate
		$this->email_no_fields = 'Silahkan kembali dan pastikan semua field terisi.';
		$this->email_no_member = 'Tidak ada anggota yang ditemukan dengan nama itu';
		$this->email_no_perm = 'Anda tidak punya izin mengirim email.';
		$this->email_sent = 'Email anda terkirim.';
		$this->email_subject = 'Subjek:';
		$this->email_to = 'Untuk:';
	}

	function forum()
	{
		$this->forum_by = 'Oleh';
		$this->forum_can_post = 'Anda dapat membalas forum ini.';
		$this->forum_can_topics = 'Anda dapat melihat topik dalam forum ini.';
		$this->forum_cant_post = 'Anda tidak bisa membalas kedalam forum ini.';
		$this->forum_cant_topics = 'Anda tidak bisa melihat topik dalam forum ini.';
		$this->forum_dot = 'dot'; //Translate
		$this->forum_dot_detail = 'Ditampilkan jika anda telah posting di salah satu topik';
		$this->forum_forum = 'Forum'; //Translate
		$this->forum_guest = 'Tamu';
		$this->forum_hot = 'Hot'; //Translate
		$this->forum_icon = 'Icon pesan';
		$this->forum_jump = 'Lompat ke posting baru di dalam topik';
		$this->forum_last = 'Posting terakhir';
		$this->forum_locked = 'Dikunci';
		$this->forum_moved = 'Pindah';
		$this->forum_msg = '%s Pesan';
		$this->forum_new = 'Baru';
		$this->forum_new_poll = 'Buat polling baru';
		$this->forum_new_topic = 'Buat topik baru';
		$this->forum_no_topics = 'Tdak ada topik untuk ditampilkan di forum ini.';
		$this->forum_noexist = 'Forum yang dimaksud tidak ada.';
		$this->forum_nopost = 'Tidak ada post';
		$this->forum_not = 'Tidak';
		$this->forum_noview = 'Anda tidak punya izin untuk melihat forum.';
		$this->forum_pages = 'Halaman';
		$this->forum_pinned = 'Selesai';
		$this->forum_pinned_topic = 'Topik selesai';
		$this->forum_poll = 'Polling';
		$this->forum_regfirst = 'Anda tidak punya kewenangan untuk melihat forum. Jika telah terdaftar, baru anda bisa melihatnya.';
		$this->forum_replies = 'Balasan';
		$this->forum_starter = 'Dimulai';
		$this->forum_sub = 'Sub-Forum'; //Translate
		$this->forum_sub_last_post = 'Posting teralhir';
		$this->forum_sub_replies = 'Balasan';
		$this->forum_sub_topics = 'Topik';
		$this->forum_subscribe = 'Kirimkan E-mail ke saya ketika topik ini dibalas';
		$this->forum_topic = 'Topik';
		$this->forum_topics_new = 'Ada posting baru di forum ini.';
		$this->forum_topics_old = 'Tidak ada posting baru di forum ini.';
		$this->forum_views = 'Dilihat';
		$this->forum_write_topics = 'Anda dapat membuat topik di forum ini.';
	}

	function help()
	{
		$this->help_available_files = 'Help'; //Translate
		$this->help_none = 'Tidak ada file help di database';
	}

	function login()
	{
		$this->login_cant_logged = 'Anda tidak bisa login. Cek username dan password yang benar.<br /><br />Karena case sensitif, jadi \'UsErNaMe\' berbeda dari \'Username\'. Juga, cek apakah cookies browser anda sudah diaktifkan.';
		$this->login_cookies = 'Cookies harus enable untuk login.';
		$this->login_forgot_pass = 'Forgot your password?'; //Translate
		$this->login_header = 'Logging In'; //Translate
		$this->login_logged = 'Anda sekarang log in.';
		$this->login_now_out = 'Anda sekarang log out.';
		$this->login_out = 'Logging Out'; //Translate
		$this->login_pass = 'Password'; //Translate
		$this->login_pass_no_id = 'There is no member with the user name you entered.'; //Translate
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Reset Password'; //Translate
		$this->login_pass_sent = 'Your password has been reset. The new password has been sent to the email address associated with your account.'; //Translate
		$this->login_sure = 'Anda yakin ingin log off sebagai \'%s\'?';
		$this->login_user = 'User Name'; //Translate
	}

	function main()
	{
		$this->board_by = 'Oleh';
		$this->charset = 'iso-8859-1';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'Account anda belum diaktifkan.';
		$this->main_activate_resend = 'Resend Email Aktifasi';
		$this->main_admincp = 'admin cp'; //Translate
		$this->main_banned = 'Maaf anda telah didisable.';
		$this->main_code = 'Code'; //Translate
		$this->main_continue = 'Lanjut';
		$this->main_cp = 'Control panel';
		$this->main_full = 'Debug';
		$this->main_help = 'Help';
		$this->main_load = 'load'; //Translate
		$this->main_login = 'login'; //Translate
		$this->main_logout = 'logout'; //Translate
		$this->main_max_load = 'Maaf, %s sudah tidak ada, karena banyaknya user yang terkoneksi.';
		$this->main_members = 'Anggota';
		$this->main_messenger = 'Messenger';
		$this->main_new = 'baru';
		$this->main_next = 'selanjutnya';
		$this->main_posts_new = 'Baru';
		$this->main_powered = 'Powered by'; //Translate
		$this->main_prev = 'sebelumnya';
		$this->main_queries = 'query';
		$this->main_quote = 'Quote'; //Translate
		$this->main_register = 'Daftar';
		$this->main_reminder = 'Mengingatkan';
		$this->main_reminder_closed = 'Forum ditutup hanya admin saja yang diperbolehkan.';
		$this->main_said = 'berkata';
		$this->main_search = 'Cari';
		$this->main_seconds = 'detik';
		$this->main_welcome = 'Selamat datang';
		$this->main_welcome_guest = 'Selamat datang!';
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = ','; //Translate
		$this->submit = 'Submit'; //Translate
		$this->today = 'Today'; //Translate
		$this->yesterday = 'Yesterday'; //Translate
	}

	function members()
	{
		$this->members_all = 'Semua';
		$this->members_email = 'Email'; //Translate
		$this->members_email_member = 'Email ke anggota ini';
		$this->members_group = 'Grup';
		$this->members_joined = 'Bergabung';
		$this->members_list = 'Daftar Anggota';
		$this->members_member = 'Anggota';
		$this->members_pm = 'PM'; //Translate
		$this->members_posts = 'Posts'; //Translate
		$this->members_send_pm = 'Kirim pesan pribadi ke user ini';
		$this->members_title = 'Title'; //Translate
		$this->members_vist_www = 'Kunjungi \'s web site';
		$this->members_www = 'Web Site'; //Translate
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Apakah anda yakin ingin menghapus posting ini?';
		$this->mod_confirm_topic_delete = 'Apakah anda yakin ingin menghapus topik ini?';
		$this->mod_error_first_post = 'Anda tidak bisa mendelete topik diurutan pertama.';
		$this->mod_error_move_category = 'Anda tidak bisa memindahkan topik ke kategory.';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = 'Anda tidak bisa memindahkan topik ke forum yang sudah tidak ada.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Anda tidak bisa memindahkan topik ke forum yang sudah ada topik tersebut.';
		$this->mod_label_controls = 'Moderator Kontrol';
		$this->mod_label_description = 'Deskripsi';
		$this->mod_label_emoticon = 'Konvert emoticon kedalam gambar ?';
		$this->mod_label_global = 'Global Topic'; //Translate
		$this->mod_label_mbcode = 'Format MbCode?'; //Translate
		$this->mod_label_move_to = 'Pindah ke';
		$this->mod_label_options = 'Option';
		$this->mod_label_post_delete = 'Hapus Posting';
		$this->mod_label_post_edit = 'Edit Posting';
		$this->mod_label_title = 'Judul';
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Split Title'; //Translate
		$this->mod_label_topic_delete = 'Hapus Topik';
		$this->mod_label_topic_edit = 'Edit Topik';
		$this->mod_label_topic_lock = 'Kunci Topik';
		$this->mod_label_topic_move = 'Pindahkan Topik';
		$this->mod_label_topic_move_complete = 'Menyelesaikan transfer topik kedalam forum baru';
		$this->mod_label_topic_move_link = 'Transfer topik ke forum baru, tinggalkan link ke lokasi baru di forum lama.';
		$this->mod_label_topic_pin = 'Pin Topik';
		$this->mod_label_topic_split = 'Split Topic'; //Translate
		$this->mod_missing_post = 'Posting yang dimaksud tidak ada.';
		$this->mod_missing_topic = 'Topik yang dimaksud tidak ada.';
		$this->mod_no_action = 'Anda harus menentukan aksi.';
		$this->mod_no_post = 'Anda harus menentukan posting.';
		$this->mod_no_topic = 'Anda harus menentukan topik.';
		$this->mod_perm_post_delete = 'Anda tidak punya izin untuk menghapus posting ini.';
		$this->mod_perm_post_edit = 'Anda tidak punya izin untuk mengedit posting ini.';
		$this->mod_perm_topic_delete = 'Anda tidak punya izin untuk menghapus posting ini.';
		$this->mod_perm_topic_edit = 'Anda tidak punya izin untuk mengedit posting ini.';
		$this->mod_perm_topic_lock = 'Anda tidak punya izin untuk mengunci topik ini.';
		$this->mod_perm_topic_move = 'Anda tidak punya izin untuk memindahkan topik ini.';
		$this->mod_perm_topic_pin = 'Anda tidak punya izin untuk memberi pin topik ini.';
		$this->mod_perm_topic_split = 'You do not have permission to split this topic.'; //Translate
		$this->mod_perm_topic_unlock = 'Anda tidak punya izin untuk membuka kunci topik ini.';
		$this->mod_perm_topic_unpin = 'Anda tidak punya izin untuk membuka pin topik ini.';
		$this->mod_success_post_delete = 'Posting berhasil dihapus.';
		$this->mod_success_post_edit = 'Posting berhasil diedit.';
		$this->mod_success_split = 'The topic was successfully split.'; //Translate
		$this->mod_success_topic_delete = 'Posting berhasil dihapus.';
		$this->mod_success_topic_edit = 'Posting berhasil diedit.';
		$this->mod_success_topic_move = 'Posting berhasil dipindahkan ke forum baru.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'dot'; //Translate
		$this->new_posts_dot_detail = 'Ditampilkan jika anda telah posting di salah satu topik';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'Forum'; //Translate
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'Hot'; //Translate
		$this->new_posts_last = 'Posting terakhir';
		$this->new_posts_locked = 'Dikunci';
		$this->new_posts_moved = 'Pindah';
		$this->new_posts_new = 'Baru';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'Tidak';
		$this->new_posts_pinned = 'Selesai';
		$this->new_posts_poll = 'Polling';
		$this->new_posts_topic = 'Topik';
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
		$this->pm_cant_del = 'Anda tidak punya izin untuk menghapus pesan ini.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Hapus semua pesan';
		$this->pm_delete = 'Hapus';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Pesan dihapus.';
		$this->pm_deleted_all = 'Pesan dihapus.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = 'Pesan anda tidak bisa dikirim. Pastikan semua field diisi.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Inbox'; //Translate
		$this->pm_folder_new = '%s Baru';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = 'Dari';
		$this->pm_group = 'Grup';
		$this->pm_guest = 'Sebagai tamu, anda tidak bisa memakai messenger. Silahkan login atau mendaftar.';
		$this->pm_joined = 'Bergabung';
		$this->pm_messenger = 'Messenger'; //Translate
		$this->pm_msgtext = 'Pesan';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = 'You must specify a folder.'; //Translate
		$this->pm_no_member = 'Tidak ada anggota yang ditemukan dengan id itu.';
		$this->pm_no_number = 'Tidak ada pesan ditemukan dengan nomor itu.';
		$this->pm_no_title = 'Tidak ada subjek';
		$this->pm_nomsg = 'Tidak ada pesan dalam folder.';
		$this->pm_noview = 'Anda tidak punya izin untuk melihat pesan.';
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Personal Messenger'; //Translate
		$this->pm_personal_msging = 'Personal Messaging'; //Translate
		$this->pm_pm = 'PM'; //Translate
		$this->pm_posts = 'Posts'; //Translate
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = 'Reply'; //Translate
		$this->pm_send = 'Kirim';
		$this->pm_sendamsg = 'Kirim pesan';
		$this->pm_sendingpm = 'Mengirim Pesan Pribadi';
		$this->pm_sendon = 'Terkirim pada';
		$this->pm_success = 'Pesan anda berhasil dikirim.';
		$this->pm_sure_del = 'Anda yakin ingin menghapus pesan ini?';
		$this->pm_sure_delall = 'Anda yakin ingin menghapus semua pesan dalam folder ini?';
		$this->pm_title = 'Judul';
		$this->pm_to = 'Untuk';
	}

	function post()
	{
		$this->post_attach = 'Attachment';
		$this->post_attach_add = 'Tambah Attachment';
		$this->post_attach_disrupt = 'membuang atau menambah attachment tidak akan mempengaruhi posting yang telah anda tulis.';
		$this->post_attach_failed = 'Upload file attachment gagal. type file tidak sesuai dengan database kami.';
		$this->post_attach_not_allowed = 'Anda tidak bisa menyisipkan file type tersebut.';
		$this->post_attach_remove = 'Buang Attachment';
		$this->post_attach_too_large = 'File terlalu besar. Batas maksimal adalah %d KB.';
		$this->post_cant_create = 'Sebagai tamu, Anda tidak punya izin untuk membuat topik. jika anda mendaftar, anda baru bisa membuatnya.';
		$this->post_cant_create1 = 'Anda tidak punya izin untuk membuat topik.';
		$this->post_cant_enter = 'Voting anda ditolak. anda sudah pernah ikut vote, atau anda sudah pernah mengikutinya.';
		$this->post_cant_poll = 'Sebagai tamu, anda tidak punya izin untuk membuat poll. jika anda mendaftar, anda mungkin dapat membuatnya.';
		$this->post_cant_poll1 = 'Anda tidak punya izin untk membuat poll.';
		$this->post_cant_reply = 'Anda tidak punya izin untuk membalas topik di forum ini.';
		$this->post_cant_reply1 = 'Sebagai guest, Anda tidak punya izin untuk membalas topik. jika anda mendaftar, anda baru bisa.';
		$this->post_cant_reply2 = 'Anda tidak punya izin untuk membuat balasan ke topik.';
		$this->post_closed = 'Topik ini telah ditutup.';
		$this->post_create_poll = 'Buat polling';
		$this->post_create_topic = 'Buat Topik';
		$this->post_creating = 'Buat Topik';
		$this->post_creating_poll = 'Buat poll';
		$this->post_flood = 'posting anda tercatak %s detik, anda tidak bisa posting sekarang.<br /><br />Coba beberapa detik lagi.';
		$this->post_guest = 'Tamu';
		$this->post_icon = 'Post Icon'; //Translate
		$this->post_last_five = 'Lima posting terakhir dalam tampilan terbalik';
		$this->post_length = 'Cek panjang karakter';
		$this->post_mbcode_address = 'Masukan alamat';
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
		$this->post_mbcode_length = 'Posting anda tercatat "+length+" karakter.';
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
		$this->post_must_msg = 'Anda harus menulis pesan ketika posting.';
		$this->post_must_options = 'You must include options when creating a new poll.'; //Translate
		$this->post_must_title = 'You must include a title when creating a new topic.'; //Translate
		$this->post_new_poll = 'Polling baru';
		$this->post_new_topic = 'Topik baru';
		$this->post_no_forum = 'Forum tidak ada.';
		$this->post_no_topic = 'Tidak ada topik yang dimaksud.';
		$this->post_no_vote = 'Anda harus memilih option untuk voting.';
		$this->post_option_emoticons = 'Konvert emoticon ke image ?';
		$this->post_option_global = 'Make this topic global?'; //Translate
		$this->post_option_mbcode = 'Format MbCode?'; //Translate
		$this->post_optional = 'optional'; //Translate
		$this->post_options = 'Option';
		$this->post_poll_options = 'Polling Option';
		$this->post_poll_row = 'Satu per baris';
		$this->post_posted = 'Diposting pada';
		$this->post_posting = 'Posting'; //Translate
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = 'Reply'; //Translate
		$this->post_reply_topic = 'Reply to topic'; //Translate
		$this->post_replying = 'Replying To Topic'; //Translate
		$this->post_replying1 = 'Replying'; //Translate
		$this->post_smiles = 'Clickable Smilies'; //Translate
		$this->post_too_many_options = 'Anda harus mgisi 2 %d option kedalam polling.';
		$this->post_topic_detail = 'Deskripsi Topik';
		$this->post_topic_title = 'Judul Topik';
		$this->post_view_topic = 'Lihat seputar topik';
		$this->post_voting = 'Voting'; //Translate
	}

	function printer()
	{
		$this->printer_back = 'Kembali';
		$this->printer_not_found = 'Topik tidak dapat ditemukan. kemungkinan sudah dihapus, dipindahkan, atau memang tidak ada.';
		$this->printer_not_found_title = 'Topik tidak ditemukan';
		$this->printer_perm_topics = 'Anda tidak punya untuk melihat topik.';
		$this->printer_perm_topics_guest = 'Anda tidak punya izin untuk melihat topik. Jika anda mendaftar , anda baru bisa.';
		$this->printer_posted_on = 'Diposting pada';
		$this->printer_send = 'Kirim ke printer';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM';
		$this->profile_av_sign = 'Avatar dan Signature';
		$this->profile_avatar = 'Avatar'; //Translate
		$this->profile_bday = 'Tanggal Lahir';
		$this->profile_contact = 'Kontak';
		$this->profile_email_address = 'Alamat Email';
		$this->profile_fav = 'Forum Favorit';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_icq_uin = 'Nomor ICQ';
		$this->profile_info = 'Informasi';
		$this->profile_interest = 'Kesukaan';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = 'Posting terakhir';
		$this->profile_list = 'Daftar Anggota';
		$this->profile_location = 'Lokasi';
		$this->profile_member = 'Grup Anggota';
		$this->profile_member_title = 'Status user';
		$this->profile_msn = 'Identitas MSN';
		$this->profile_must_user = 'Anda harus mengisi user untuk melihat profil';
		$this->profile_no_member = 'Tidak ada member dengan user id tersebut. Kemungkinan account sudah dihapus.';
		$this->profile_none = '[ None ]'; //Translate
		$this->profile_not_post = 'Belum memposting';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Pesan pribadi';
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = 'Post';
		$this->profile_private = '[ Pribadi ]';
		$this->profile_profile = 'Profil';
		$this->profile_signature = 'Signature'; //Translate
		$this->profile_unkown = '[ Unknown ]'; //Translate
		$this->profile_view_profile = 'Lihat Profil';
		$this->profile_www = 'Homepage'; //Translate
		$this->profile_yahoo = 'Yahoo Identitas';
	}

	function register()
	{
		$this->register_activated = 'Account telah diaktifkan';
		$this->register_activating = 'Aktivasi Account';
		$this->register_activation_error = 'Terjadi error ketika mengaktifkan account anda. cek browser anda untuk melihat full URL aktifasi. Jika terjadi masalah, Hubungi administrator untuk mengirimkan Email ke anda.';
		$this->register_confirm_passwd = 'Konfirmasi Password';
		$this->register_done = 'Anda teah terdaftar! Anda dapat login sekarang.';
		$this->register_email = 'Alamat Email';
		$this->register_email_invalid = 'Alamat Email yang anda masukkan salah.';
		$this->register_email_used = 'Email yang anda masukkan sudah dipakai oleh anggota lain.';
		$this->register_fields = 'Semua field tidak diisi.';
		$this->register_image = 'Please type the text shown in the image.'; //Translate
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.'; //Translate
		$this->register_must_activate = 'Anda telah terdaftar. Email telah terkirim ke %s dengan informasi dan cara untuk mengaktifkan account. Aktifasi account dibatasi hingga anda mengaktifkannya.';
		$this->register_name_invalid = 'Nama yang anda isikan terlalu panjang.';
		$this->register_name_taken = 'Nama member sudah ada.';
		$this->register_new_user = 'Desired User Name'; //Translate
		$this->register_pass_invalid = 'Password tidak valid. Isikan dengan huruf, nomor, dash, garis bawah, atau spasi, dan harus lebih dari 5 character.';
		$this->register_pass_match = 'Password yang dimasukkan tidak cocok.';
		$this->register_passwd = 'Password'; //Translate
		$this->register_reg = 'Daftar';
		$this->register_reging = 'Mendaftar';
	}

	function search()
	{
		$this->search_advanced = 'Bantuan Tambahan';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Pencarian Sederhana';
		$this->search_characters = 'Karakter posting';
		$this->search_day = 'Hari';
		$this->search_days = 'Hari';
		$this->search_exact_name = 'nama eksak';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Mencari untuk kata';
		$this->search_forum = 'Forum'; //Translate
		$this->search_group = 'Group'; //Translate
		$this->search_guest = 'Guest'; //Translate
		$this->search_in = 'Cari di';
		$this->search_in_posts = 'Cari di posting-posting topik';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = 'Bergabung';
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = 'Cari dengan kecocokan';
		$this->search_matches = 'Matches'; //Translate
		$this->search_month = 'Bulan';
		$this->search_months = 'Bulan';
		$this->search_mysqldoc = 'MySQL Dokumentasi';
		$this->search_newer = 'Baru';
		$this->search_no_results = 'Pencarian anda gagal.';
		$this->search_no_words = 'Anda harus menspesifikasikan search terms.<br /><br />Masing-masing term harus lebih dari, contoh : huruf, nomor, apostrop, dan garis bawah.';
		$this->search_older = 'Lama';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = 'Tampilkan dengan pertama';
		$this->search_partial_name = 'nama partial';
		$this->search_post_icon = 'Post Icon'; //Translate
		$this->search_posted_on = 'Posted on';
		$this->search_posts = 'Post';
		$this->search_posts_by = 'Hanya di post oleh';
		$this->search_regex = 'Cari dengan ekspresi regular';
		$this->search_regex_failed = 'Regular ekspresi anda gagal. Lihat MySQL dokumentasi untuk melihat bantuan regular ekspresi.';
		$this->search_relevance = 'Post Relevansi: %d%%';
		$this->search_replies = 'Post';
		$this->search_result = 'Hasil pencarian';
		$this->search_search = 'Cari';
		$this->search_select_all = 'Plih semua';
		$this->search_show_posts = 'Tampilkan kecocokan';
		$this->search_sound = 'Cari dengan suara';
		$this->search_starter = 'Starter'; //Translate
		$this->search_than = 'than'; //Translate
		$this->search_topic = 'Topik';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = 'Minggu';
		$this->search_weeks = 'Minggu';
		$this->search_year = 'Tahun';
	}

	function topic()
	{
		$this->topic_attached = 'Sisipkan file:';
		$this->topic_attached_downloads = 'download';
		$this->topic_attached_perm = 'Anda tidak punya izin untuk mendownload file ini.';
		$this->topic_attached_title = 'Sisipkan File';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = 'Buat Poll baru';
		$this->topic_create_topic = 'Buat Topik baru';
		$this->topic_delete = 'Delete'; //Translate
		$this->topic_delete_post = 'Hapus posting ini';
		$this->topic_edit = 'Edit'; //Translate
		$this->topic_edit_post = 'Edit this post'; //Translate
		$this->topic_edited = 'Terakhir diedit pada %s oleh %s';
		$this->topic_error = 'Error'; //Translate
		$this->topic_group = 'Grup';
		$this->topic_guest = 'Tamu';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = 'Bergabung';
		$this->topic_level = 'Level anggota';
		$this->topic_links_aim = 'Kirim pesan melalui AIM ke %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Kirim Email ke %s';
		$this->topic_links_icq = 'Kirim pesan ICQ ke %s';
		$this->topic_links_msn = 'View %s\'s MSN profile'; //Translate
		$this->topic_links_pm = 'Kirim pesan pribadi ke %s';
		$this->topic_links_web = 'Kunjungi web site %s\'s';
		$this->topic_links_yahoo = 'Kirim pesan ke %s dengan Yahoo! Messenger';
		$this->topic_lock = 'Kunci';
		$this->topic_locked = 'Topik dikunci';
		$this->topic_move = 'Pindahkan';
		$this->topic_no_votes = 'Tidak ada voting untuk polling ini.';
		$this->topic_not_found = 'Topik tidak ditemukan';
		$this->topic_not_found_message = 'Topik tidak bisa ditemukan. Kemungkinan sudah dihapus, Dipindahkan, atau mungkin tidak ada.';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = 'Topik Option';
		$this->topic_pages = 'Halaman';
		$this->topic_perm_view = 'Anda tidak punya izin untuk melihat topik ini.';
		$this->topic_perm_view_guest = 'Anda tidak punya izin untuk melihat topik ini.Jika mendaftar sebagai member, baru anda bisa melihatnya.';
		$this->topic_pin = 'Pin'; //Translate
		$this->topic_posted = 'Posted'; //Translate
		$this->topic_posts = 'Post';
		$this->topic_print = 'Lihat Print preview';
		$this->topic_quote = 'Balas dengan kutip dari posting ini';
		$this->topic_reply = 'Balas ke Topik';
		$this->topic_split = 'Split'; //Translate
		$this->topic_split_finish = 'Finish All Splitting'; //Translate
		$this->topic_split_keep = 'Do not move this post'; //Translate
		$this->topic_split_move = 'Move this post'; //Translate
		$this->topic_subscribe = 'Kirimkan E-mail ke saya jika topik ini dibalas';
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = 'Unlock'; //Translate
		$this->topic_unpin = 'Unpin'; //Translate
		$this->topic_unreg = 'Tidak terdaftar';
		$this->topic_view = 'Lihat Hasil';
		$this->topic_viewing = 'Lihat Topic';
		$this->topic_vote = 'Vote'; //Translate
		$this->topic_vote_count_plur = '%d votes'; //Translate
		$this->topic_vote_count_sing = '%d vote'; //Translate
		$this->topic_votes = 'Votes'; //Translate
	}
}
?>