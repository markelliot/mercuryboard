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
 * $Id: ru.php,v 1.16 2006/07/26 17:56:20 jon Exp $
 **/

/**
 * Russian language module
 *
 * @author Alexey Loshkarev <elf@pechkin.ru>
 * @author Polkop <polkop@tut.by>
 * @since 1.1.2
 **/
class ru
{
	function active()
	{
		$this->active_last_action = 'Последнее действие';
		$this->active_modules_active = 'Просматривает список активных пользователей';
		$this->active_modules_board = 'Сидит на главной';
		$this->active_modules_cp = 'Лазит в контрольной панели';
		$this->active_modules_forum = 'Просматривает форум: %s';
		$this->active_modules_help = 'Читает хелпы';
		$this->active_modules_login = 'Логинится';
		$this->active_modules_members = 'Смотрит список пользователей';
		$this->active_modules_mod = 'Модерирует';
		$this->active_modules_pm = 'Пишет приватное сообщение';
		$this->active_modules_post = 'Пишет сообщение';
		$this->active_modules_printer = 'Печатает тему: %s';
		$this->active_modules_profile = 'Смотрит профиль: %s';
		$this->active_modules_search = 'Ищет';
		$this->active_modules_topic = 'Смотрит тему: %s';
		$this->active_time = 'Время';
		$this->active_user = 'Пользователь';
		$this->active_users = 'Активные пользователи';
	}

	function board()
	{
		$this->board_active_users = 'Активные пользователи';
		$this->board_birthdays = 'Сегодняшние дни рождения';
		$this->board_can_post = 'Ты можешь отвечать в этом форуме.';
		$this->board_can_topics = 'Ты можешь читать, но не создавать темы в этом форуме.';
		$this->board_cant_post = 'Ты не можешь отвечать в этом форуме.';
		$this->board_cant_topics = 'Ты не можешь читать или создавать темы в этом форуме.';
		$this->board_forum = 'Форум';
		$this->board_guests = 'гости';
		$this->board_last_post = 'Последнее сообщение';
		$this->board_mark = 'Отметить все сообщения как прочитанные';
		$this->board_mark1 = 'Все сообщения и форумы были отмечены как прочитанные.';
		$this->board_members = 'пользователи';
		$this->board_message = '%s сообщение';
		$this->board_most_online = 'Максимальное число пользователей на форуме -  %d  было %s.';
		$this->board_nobday = 'Сегодня нет дней рождений членов форума.';
		$this->board_nobody = 'Нету никого онлайн.';
		$this->board_nopost = 'Нет сообщений';
		$this->board_noview = 'У тебя нет прав просматривать эти форумы.';
		$this->board_regfirst = 'Пока ты не зарегистрирован, ты не можешь попасть на форумы.';
		$this->board_replies = 'Ответов';
		$this->board_stats = 'Статистика';
		$this->board_stats_string = '%s пользователей зарегистрировано. Приветствуем нового пользователя, %s.<br />Всего %s тем и %s ответов в %s сообщениях.';
		$this->board_topics = 'Тем';
		$this->board_topics_new = 'В форуме есть новые сообщения.';
		$this->board_topics_old = 'В форуме нет новых сообщений.';
		$this->board_users = 'пользователь(-ей)';
		$this->board_write_topics = 'Ты можешь читать и создавать темы в этом форуме.';
	}

	function cp()
	{
		$this->cp_aim = 'Имя в AIM';
		$this->cp_already_member = 'Введенный адрес уже используется одним из регистрированных пользователей.';
		$this->cp_apr = 'Апрель';
		$this->cp_aug = 'Август';
		$this->cp_avatar_current = 'Твоя текущая аватара';
		$this->cp_avatar_error = 'Ошибка при работе с аватарой';
		$this->cp_avatar_must_select = 'Ты должен выбрать аватару.';
		$this->cp_avatar_none = 'Не ипользовать аватару';
		$this->cp_avatar_pixels = 'пикселов';
		$this->cp_avatar_select = 'Выбери аватару';
		$this->cp_avatar_size_height = 'Высота аватары должна быть между 1 и';
		$this->cp_avatar_size_width = 'Ширина аватары должна быть между 1 и';
		$this->cp_avatar_upload = 'Загрузить аватару с диска';
		$this->cp_avatar_upload_failed = 'Ошибка при загрузке аватары. Возможно, не существует файл, который ты указал.';
		$this->cp_avatar_upload_not_image = 'Ты можешь только загрузить картинку в качестве своей аватары.';
		$this->cp_avatar_upload_too_large = 'Выбранная аватара слишком большая. Максимальный разме - %d килобайт.';
		$this->cp_avatar_url = 'Укажи URL к своей аватаре';
		$this->cp_avatar_use = 'Использовать загруженную аватару';
		$this->cp_bday = 'День рождения';
		$this->cp_been_updated = 'Твой профиль был обновлен.';
		$this->cp_been_updated1 = 'Твоя автара была обновлена.';
		$this->cp_been_updated_prefs = 'Твои настройки были обновлены.';
		$this->cp_changing_pass = 'Изменение пароля';
		$this->cp_contact_pm = 'Разрешить другим писать тебе личные сообщения?';
		$this->cp_cp = 'Контрольная панель';
		$this->cp_current_avatar = 'Текущая автара';
		$this->cp_current_time = 'Сейчас %s.';
		$this->cp_dec = 'Декабрь';
		$this->cp_editing_avatar = 'Редактирование аватары';
		$this->cp_editing_profile = 'Редактирование профиля';
		$this->cp_email = 'Адрес Email';
		$this->cp_email_form = 'Разрешить другим писать мне по электронной почте?';
		$this->cp_email_invaid = 'Введенный адрес неверен.';
		$this->cp_err_avatar = 'Ошибка обновления аватары';
		$this->cp_err_updating = 'Ошибка обновления профиля';
		$this->cp_feb = 'Февраль';
		$this->cp_file_type = 'Введенная аватара неверная. Убедись, что URL правильно введен и тип файла - gif,jpg или png.';
		$this->cp_format = 'Форматирование имени';
		$this->cp_gmt = '[GMT] Гринвичское время';
		$this->cp_gmt_nev1 = '[GMT-1:00] Азорские острова, Зеленый мыс';
		$this->cp_gmt_nev10 = '[GMT-10:00] Гавайи';
		$this->cp_gmt_nev11 = '[GMT-11:00] Остров Мидвэй,  Острова Самоа';
		$this->cp_gmt_nev12 = '[GMT-12:00] Международный часовой';
		$this->cp_gmt_nev2 = '[GMT-2:00] Центральная Атлантика';
		$this->cp_gmt_nev3 = '[GMT-3:00] Буэнос-Айрес, Остров Гренландия';
		$this->cp_gmt_nev35 = '[GMT-3:30] Ньюфаундленд';
		$this->cp_gmt_nev4 = '[GMT-4:00] Атлантическое Время Канада';
		$this->cp_gmt_nev5 = '[GMT-5:00] Восточное Время США и Канада';
		$this->cp_gmt_nev6 = '[GMT-6:00] Центральное Время США и Канада';
		$this->cp_gmt_nev7 = '[GMT-7:00] Время Горы США и Канада';
		$this->cp_gmt_nev8 = '[GMT-8:00] Тихоокеанское Время США и Канада';
		$this->cp_gmt_nev9 = '[GMT-9:00] Штат Аляска';
		$this->cp_gmt_pos1 = '[GMT+1:00] Амстердам, Берлин, Рим, Париж';
		$this->cp_gmt_pos10 = '[GMT+10:00] Мельбурн, Сидней, Гуам';
		$this->cp_gmt_pos11 = '[GMT+11:00] Магадан, Новая Каледония';
		$this->cp_gmt_pos12 = '[GMT+12:00] Окленд, Фиджи';
		$this->cp_gmt_pos2 = '[GMT+2:00] Афины, Каир, Иерусалим, Минск';
		$this->cp_gmt_pos3 = '[GMT+3:00] Багдад, Москва, Найроби';
		$this->cp_gmt_pos35 = '[GMT+3:30] Тегеран';
		$this->cp_gmt_pos4 = '[GMT+4:00] Абу-Даби, Мускат, Тбилиси';
		$this->cp_gmt_pos45 = '[GMT+4:30] Кабул';
		$this->cp_gmt_pos5 = '[GMT+5:00] Исламабад, Карачи';
		$this->cp_gmt_pos55 = '[GMT+5:30] Бомбей, Калькутта, Нью-Дели';
		$this->cp_gmt_pos6 = '[GMT+6:00] Алмата, Дакка';
		$this->cp_gmt_pos7 = '[GMT+7:00] Бангкок, Джакарта';
		$this->cp_gmt_pos8 = '[GMT+8:00] Пекин, Гонконг, Сингапур';
		$this->cp_gmt_pos9 = '[GMT+9:00] Токио, Сеул';
		$this->cp_gmt_pos95 = '[GMT+9:30] Аделаида, Дарвин';
		$this->cp_header = 'Контрольная панель';
		$this->cp_height = 'Высота';
		$this->cp_icq = 'Номер ICQ';
		$this->cp_interest = 'Интересы';
		$this->cp_jan = 'Январь';
		$this->cp_july = 'Июль';
		$this->cp_june = 'Июнь';
		$this->cp_label_edit_avatar = 'Изменить аватару';
		$this->cp_label_edit_pass = 'Изменить пароль';
		$this->cp_label_edit_prefs = 'Изменить настройки';
		$this->cp_label_edit_profile = 'Редактировать профиль';
		$this->cp_label_edit_subs = 'Изменить подписки';
		$this->cp_language = 'Язык';
		$this->cp_less_charac = 'Имя должно быть короче 32-х символов.';
		$this->cp_location = 'Местоположение';
		$this->cp_login_first = 'Нужно залогинится перед входом в контрольную панель.';
		$this->cp_mar = 'Март';
		$this->cp_may = 'Май';
		$this->cp_msn = 'Идентификатор MSN';
		$this->cp_must_orig = 'Имя должно быть идентичным с оригиналом. Ты можешь изменить только регистр букв и промежутки между буквами.';
		$this->cp_new_notmatch = 'Новые пароли не совпадают.';
		$this->cp_new_pass = 'Новый пароль';
		$this->cp_no_flash = 'Анимированные аватары у нас запрещены.';
		$this->cp_not_exist = 'Указанная дата (%s) не существует!';
		$this->cp_nov = 'Ноябрь';
		$this->cp_oct = 'Октябрь';
		$this->cp_old_notmatch = 'Введенный старый пароль не совпадает с данными в базе.';
		$this->cp_old_pass = 'Старый пароль';
		$this->cp_pass_notvaid = 'Твой пароль неверен. Убедись, что использованы только корректные символы, такие как буквы, числа, тире, подчеркивание или пробелы.';
		$this->cp_preferences = 'Изменение настроек';
		$this->cp_privacy = 'Настройки безопасности';
		$this->cp_repeat_pass = 'Повтори новый пароль';
		$this->cp_sept = 'Сентябрь';
		$this->cp_show_active = 'Показывать твою активность при посещении форумов?';
		$this->cp_show_email = 'Показывать адрес email в профиле?';
		$this->cp_signature = 'Подпись';
		$this->cp_size_max = 'Размер указанной аватары слишком большой. Максимально разрешенный размер - %s на %s пикселов.';
		$this->cp_skin = 'Скин формов';
		$this->cp_sub_change = 'Изменение подписок';
		$this->cp_sub_delete = 'Удалить';
		$this->cp_sub_expire = 'Дата устаревания';
		$this->cp_sub_name = 'Название подписки';
		$this->cp_sub_no_params = 'Не заданы параметры.';
		$this->cp_sub_success = 'Теперь ты подписан на %s.';
		$this->cp_sub_type = 'Тип подписки';
		$this->cp_sub_updated = 'Выбранные подписки были удалены.';
		$this->cp_topic_option = 'Настройки тем';
		$this->cp_updated = 'Профиль обновлен';
		$this->cp_updated1 = 'Аватара обновлена';
		$this->cp_updated_prefs = 'Настройки обновлены';
		$this->cp_user_exists = 'Пользователь с аналогично сформатированным именем уже существует.';
		$this->cp_valided = 'Твой пароль был проверен и изменен.';
		$this->cp_view_avatar = 'Показывать аватары?';
		$this->cp_view_emoticon = 'Показывать смайлы?';
		$this->cp_view_signature = 'Показывать подписи?';
		$this->cp_welcome = 'Добро пожаловать в контрольную панель. Тут ты можешь настроить свой аккаунт. Выбери нужный пункт.';
		$this->cp_width = 'Ширина';
		$this->cp_www = 'Домашняя страница';
		$this->cp_yahoo = 'Идентификатор Yahoo';
		$this->cp_zone = 'Часовой пояс';
	}

	function email()
	{
		$this->email_blocked = 'Этот пользователь не принимает сообщения email через эти форумы.';
		$this->email_email = 'Адрес Email';
		$this->email_msgtext = 'Тело Email:';
		$this->email_no_fields = 'Вернись и заполни все поля.';
		$this->email_no_member = 'Не найден пользователь с таким именем';
		$this->email_no_perm = 'У тебя нет прав посылать сообщения через эти форумы.';
		$this->email_sent = 'Сообщение email было послано.';
		$this->email_subject = 'Тема:';
		$this->email_to = 'Кому:';
	}

	function forum()
	{
		$this->forum_by = 'Написал';
		$this->forum_can_post = 'Ты можешь отвечать в этом форуме.';
		$this->forum_can_topics = 'Ты можешь читать темы в этом форуме.';
		$this->forum_cant_post = 'ты не можешь отвечать в этом форуме.';
		$this->forum_cant_topics = 'Ты не можешь читать темы в этом форуме.';
		$this->forum_dot = 'точка';
		$this->forum_dot_detail = 'означает, что ты писал в этой теме';
		$this->forum_forum = 'Форум';
		$this->forum_guest = 'Гость';
		$this->forum_hot = 'Горячее';
		$this->forum_icon = 'Иконка сообщения';
		$this->forum_jump = 'Перейти к последнему сообщению в теме';
		$this->forum_last = 'Последнее сообщение';
		$this->forum_locked = 'Закрыта';
		$this->forum_moved = 'Перемещена';
		$this->forum_msg = '%s Message'; //Translate
		$this->forum_new = 'Новая';
		$this->forum_new_poll = 'Создать голосование';
		$this->forum_new_topic = 'Создать новую тему';
		$this->forum_no_topics = 'В этом форуме нет тем для отображения.';
		$this->forum_noexist = 'Указанный форум не существует.';
		$this->forum_nopost = 'Нет сообщений';
		$this->forum_not = 'Не';
		$this->forum_noview = 'У тебя нет права чтения этого форума.';
		$this->forum_pages = 'Страниц';
		$this->forum_pinned = 'Прикреплена';
		$this->forum_pinned_topic = 'Прикрепленная тема';
		$this->forum_poll = 'Голосование';
		$this->forum_regfirst = 'У нерегистрированных пользователей нет права просмотра форумов.';
		$this->forum_replies = 'Ответов';
		$this->forum_starter = 'Начал';
		$this->forum_sub = 'Подфорум';
		$this->forum_sub_last_post = 'Последнее сообщение';
		$this->forum_sub_replies = 'Ответов';
		$this->forum_sub_topics = 'Тем';
		$this->forum_subscribe = 'Уведомить по e-mail об ответах в этом форуме';
		$this->forum_topic = 'Тема';
		$this->forum_topics_new = 'Есть новые сообщения в этом форуме.';
		$this->forum_topics_old = 'Нет новых сообщений в этом форуме.';
		$this->forum_views = 'Просмотров';
		$this->forum_write_topics = 'Ты можешь создавать темы в этом форуме.';
	}

	function help()
	{
		$this->help_available_files = 'Помощь';
		$this->help_none = 'В базе данных нет файлов помощи.';
	}

	function login()
	{
		$this->login_cant_logged = 'Невозможно войти. Проверь корректность ввода имени и пароля.<br /><br />Они регистро-зависимы, это значит что \'UsErNaMe\' отличается от \'Username\'. Также проверь, что в твоем браузере включены cookie.';
		$this->login_cookies = 'Для входа требуются включенные cookies.';
		$this->login_forgot_pass = 'Забыл пароль?';
		$this->login_header = 'Вход';
		$this->login_logged = 'Вход произведен.';
		$this->login_now_out = 'Выход произведен.';
		$this->login_out = 'Выход';
		$this->login_pass = 'Пароль';
		$this->login_pass_no_id = 'Пользователя с таким именем не существует.';
		$this->login_pass_request = 'Откройте ссылку в письме, отправленном на ваш адрес, чтобы завершить процедуру сброса пароля.';
		$this->login_pass_reset = 'Сбросить пароль';
		$this->login_pass_sent = 'Твой пароль был сброшен. Новый пароль был выслан на адрес email, указанный при регистрации.';
		$this->login_sure = 'Действительно хочешь выйти из \'%s\'?';
		$this->login_user = 'Имя пользователя';
	}

	function main()
	{
		$this->board_by = 'Написал';
		$this->charset = 'koi8-r';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = 'Твой аккаунт еще не был активизирован.';
		$this->main_activate_resend = 'Выслать активационное письмо заново';
		$this->main_admincp = 'админка';
		$this->main_banned = 'Тебе был забанен на этих форумах.';
		$this->main_code = 'Код';
		$this->main_continue = 'Продолжить';
		$this->main_cp = 'контрольная панель';
		$this->main_full = 'Полный отчет';
		$this->main_help = 'помощь';
		$this->main_load = 'загрузка';
		$this->main_login = 'вход';
		$this->main_logout = 'выход';
		$this->main_max_load = 'Извините, %s сейчас недоступны из-за большого количества посетителей.';
		$this->main_members = 'пользователи';
		$this->main_messenger = 'сообщения';
		$this->main_new = 'новый';
		$this->main_next = 'следущая';
		$this->main_posts_new = 'Новая';
		$this->main_powered = 'Powered by'; //Translate
		$this->main_prev = 'предыдущая';
		$this->main_queries = 'запросов';
		$this->main_quote = 'Цитата';
		$this->main_register = 'регистрация';
		$this->main_reminder = 'Напоминатель';
		$this->main_reminder_closed = 'Форумы закрыты и доступны только администраторам.';
		$this->main_said = 'сказал';
		$this->main_search = 'поиск';
		$this->main_seconds = 'секунд';
		$this->main_welcome = 'Добро пожаловать';
		$this->main_welcome_guest = 'Добро пожаловать!';
		$this->sep_decimals = ',';
		$this->sep_thousands = '.';
		$this->submit = 'Отправить';
		$this->today = 'Сегодня';
		$this->yesterday = 'Вчера';
	}

	function members()
	{
		$this->members_all = 'все';
		$this->members_email = 'Адрес Email';
		$this->members_email_member = 'Написать Email';
		$this->members_group = 'Группа';
		$this->members_joined = 'Присоединился';
		$this->members_list = 'Список пользователей';
		$this->members_member = 'Пользователь';
		$this->members_pm = 'Приватное сообщение';
		$this->members_posts = 'Сообщений';
		$this->members_send_pm = 'Послать приватное сообщение этому пользователю';
		$this->members_title = 'Заголовок';
		$this->members_vist_www = 'Посетить страничку этого пользователя';
		$this->members_www = 'Домашняя страничка';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = 'Ты действительно хочешь удалить это сообщение?';
		$this->mod_confirm_topic_delete = 'Ты действительно хочешь удалить эту тему??';
		$this->mod_error_first_post = 'Невозможно удалить первое сообщение в теме.';
		$this->mod_error_move_category = 'Нелья переместить тему в категорию.';
		$this->mod_error_move_create = 'У тебя нет права перемещать темы в этот форум.';
		$this->mod_error_move_forum = 'Нельзя переместить тему в несуществующий форум.';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = 'Тема уже находится в этом форуме.';
		$this->mod_label_controls = 'Пульт модератора';
		$this->mod_label_description = 'Описание';
		$this->mod_label_emoticon = 'Заменять смайлы на картинки?';
		$this->mod_label_global = 'Глобальная тема';
		$this->mod_label_mbcode = 'Использовать MbCode?';
		$this->mod_label_move_to = 'Переместить в';
		$this->mod_label_options = 'Настройки';
		$this->mod_label_post_delete = 'Удалить сообщение';
		$this->mod_label_post_edit = 'Изменить сообщение';
		$this->mod_label_title = 'Заголовок';
		$this->mod_label_title_original = 'Оригинальный заголовок';
		$this->mod_label_title_split = 'Разделить заголовок';
		$this->mod_label_topic_delete = 'Удалить тему';
		$this->mod_label_topic_edit = 'Изменить тему';
		$this->mod_label_topic_lock = 'Заблокировать тему';
		$this->mod_label_topic_move = 'Переместить тему';
		$this->mod_label_topic_move_complete = 'Полностью переместить тему в новый форум';
		$this->mod_label_topic_move_link = 'Переместить тему в новый форум и оставить ссылку не неё в старом форуме.';
		$this->mod_label_topic_pin = 'Прикрепить тему';
		$this->mod_label_topic_split = 'Разделить тему';
		$this->mod_missing_post = 'Указанное сообщение не существует.';
		$this->mod_missing_topic = 'Указанная тема не существует.';
		$this->mod_no_action = 'Не выбрана действие.';
		$this->mod_no_post = 'Не выбрано сообщение.';
		$this->mod_no_topic = 'Не выбрана тема.';
		$this->mod_perm_post_delete = 'У тебя нет права удалять это сообщение.';
		$this->mod_perm_post_edit = 'У тебя нет права изменять это сообщение.';
		$this->mod_perm_topic_delete = 'У тебя нет права удалять эту тему.';
		$this->mod_perm_topic_edit = 'У тебя нет права изменять эту тему.';
		$this->mod_perm_topic_lock = 'У тебя нет права блокировать эту тему.';
		$this->mod_perm_topic_move = 'У тебя нет права перемещать эту тему.';
		$this->mod_perm_topic_pin = 'У тебя нет права прикреплять эту тему.';
		$this->mod_perm_topic_split = 'У тебя нет права разделять эту тему.';
		$this->mod_perm_topic_unlock = 'У тебя нет права разблокировать эту тему.';
		$this->mod_perm_topic_unpin = 'У тебя нет права откреплять эту тему.';
		$this->mod_success_post_delete = 'Сообщение было успешно удалено.';
		$this->mod_success_post_edit = 'Сообщение было успешно изменено.';
		$this->mod_success_split = 'Тема была успешно разделена.';
		$this->mod_success_topic_delete = 'Тема была успешно удалена.';
		$this->mod_success_topic_edit = 'Тема была успешно изменена.';
		$this->mod_success_topic_move = 'Тема была успешно перемещена в новый форум.';
	}

	function new_posts()
	{
		$this->new_posts_dot = 'точка';
		$this->new_posts_dot_detail = 'означает, что ты писал в этой теме';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = 'Форум';
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = 'Горячее';
		$this->new_posts_last = 'Последнее сообщение';
		$this->new_posts_locked = 'Закрыта';
		$this->new_posts_moved = 'Перемещена';
		$this->new_posts_new = 'Новая';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = 'Не';
		$this->new_posts_pinned = 'Прикреплена';
		$this->new_posts_poll = 'Голосование';
		$this->new_posts_topic = 'Тема';
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
		$this->pm_cant_del = 'У тебя нет права удаления этого сообщения.';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = 'Удалить все сообщения';
		$this->pm_delete = 'Удалить';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = 'Сообщение удалено.';
		$this->pm_deleted_all = 'Сообщения удалены.';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'Не удалось отослать ваше сообщение некоторым людям.<br /><br />Эти пользователи не существуют: %s<br /><br />Эти пользователи не принимают никаких сообщений: %s';
		$this->pm_fields = 'Невозможно отправить твое сообщение. Проверь, что все необходимые поля заполнены.';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = 'Входящие';
		$this->pm_folder_new = '%s новых';
		$this->pm_folder_sentbox = 'Отправленные';
		$this->pm_from = 'От';
		$this->pm_group = 'Группа';
		$this->pm_guest = 'Ты не можешь отправлять сообщения незарегистрировавшись.';
		$this->pm_joined = 'Присоединился';
		$this->pm_messenger = 'Сообщения';
		$this->pm_msgtext = 'Текст сообщения';
		$this->pm_multiple = 'Перечислите адресатов через точку с запятой (;)';
		$this->pm_no_folder = 'Укажи папку.';
		$this->pm_no_member = 'Не найден пользователь с таким номером.';
		$this->pm_no_number = 'Не найдено сообщение с таким номером.';
		$this->pm_no_title = 'Без темы';
		$this->pm_nomsg = 'В этой папке нет сообщений.';
		$this->pm_noview = 'У тебя нет прав просмотра этого сообщения.';
		$this->pm_online = 'Этот пользователь сейчас online';
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = 'Личные сообщения';
		$this->pm_personal_msging = 'Личные сообщения';
		$this->pm_pm = 'ПС';
		$this->pm_posts = 'Сообщений';
		$this->pm_preview = 'Предварительный просмотр';
		$this->pm_recipients = 'Получатели';
		$this->pm_reply = 'Ответить';
		$this->pm_send = 'Послать';
		$this->pm_sendamsg = 'Послать сообщение';
		$this->pm_sendingpm = 'Посылаю сообщение';
		$this->pm_sendon = 'Послано';
		$this->pm_success = 'Твое сообщение было успешно послано.';
		$this->pm_sure_del = 'Ты действительно хочешь удалить это сообщение?';
		$this->pm_sure_delall = 'Ты действительно хочешь удалить все сообщения в этой папке?';
		$this->pm_title = 'Заголовок';
		$this->pm_to = 'Кому';
	}

	function post()
	{
		$this->post_attach = 'Вложения';
		$this->post_attach_add = 'Добавить вложение';
		$this->post_attach_disrupt = 'Добавление или удаление вложений не разрушает твое сообщение.';
		$this->post_attach_failed = 'Ошибка загрузки вложения. Указанный файл не существует.';
		$this->post_attach_not_allowed = 'Нельзя использовать вложения этого типа.';
		$this->post_attach_remove = 'Удалить вложение';
		$this->post_attach_too_large = 'Указанный файл слишком большой. Максимальный размер - %d КБ.';
		$this->post_cant_create = 'Незарегистрированным нельзя создавать темы.';
		$this->post_cant_create1 = 'У тебя нет прав создания темы.';
		$this->post_cant_enter = 'Голосование не было добавлено. Либо ты уже голосовал тут, либо у тебя нет права голосовать.';
		$this->post_cant_poll = 'Незарегистрированным нельзя создавать голосование.';
		$this->post_cant_poll1 = 'У тебя нет права создавать голосование.';
		$this->post_cant_reply = 'У тебя нет права отвечать в этом форуме.';
		$this->post_cant_reply1 = 'Незарегистрированным нельзя отвечать в теме.';
		$this->post_cant_reply2 = 'У тебя нет права отвечать в теме.';
		$this->post_closed = 'Тема закрыта.';
		$this->post_create_poll = 'Создать голосование';
		$this->post_create_topic = 'Создать тему';
		$this->post_creating = 'Создается тема';
		$this->post_creating_poll = 'Создается голосование';
		$this->post_flood = 'Ты отвечал в течении последних %s секунд и не можешь писать прямо сейчас<br /><br />Повтори через несколько секунд.';
		$this->post_guest = 'Гость';
		$this->post_icon = 'Иконка сообщения';
		$this->post_last_five = 'Последние 5 сообщений в обратном порядке';
		$this->post_length = 'Проверить длину';
		$this->post_mbcode_address = 'Введи адрес';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = 'Синий';
		$this->post_mbcode_bold = 'Жирный';
		$this->post_mbcode_bold1 = 'Ж';
		$this->post_mbcode_chocolate = 'Шоколад';
		$this->post_mbcode_code = 'Код';
		$this->post_mbcode_color = 'Цвет';
		$this->post_mbcode_coral = 'Коралл';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = 'Crimson'; //Translate
		$this->post_mbcode_darkblue = 'Темно-синий';
		$this->post_mbcode_darkred = 'Темно-красный';
		$this->post_mbcode_deepink = 'Розовый';
		$this->post_mbcode_detail = 'Введи описание';
		$this->post_mbcode_email = 'Адрес Email';
		$this->post_mbcode_firered = 'Кирпично-красный';
		$this->post_mbcode_font = 'Шрифт';
		$this->post_mbcode_green = 'Зеленый';
		$this->post_mbcode_huge = 'Огромный';
		$this->post_mbcode_image = 'Картинка';
		$this->post_mbcode_image1 = 'IMG'; //Translate
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = 'Индиго';
		$this->post_mbcode_italic = 'Наклонный';
		$this->post_mbcode_italic1 = 'I'; //Translate
		$this->post_mbcode_large = 'Большой';
		$this->post_mbcode_length = 'Длина сообщения: "+length+" символов.';
		$this->post_mbcode_limegreen = 'Лимонный';
		$this->post_mbcode_medium = 'Средний';
		$this->post_mbcode_orange = 'Оранжевый';
		$this->post_mbcode_orangered = 'Оранжевый';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = 'Пурпурный';
		$this->post_mbcode_quote = 'Цитата';
		$this->post_mbcode_red = 'Красный';
		$this->post_mbcode_royalblue = 'Синий';
		$this->post_mbcode_sandybrown = 'Коричневый';
		$this->post_mbcode_seagreen = 'Морской';
		$this->post_mbcode_sienna = 'Охра';
		$this->post_mbcode_silver = 'Серебрянный';
		$this->post_mbcode_size = 'Размер';
		$this->post_mbcode_skyblue = 'Голубой';
		$this->post_mbcode_small = 'Маленький';
		$this->post_mbcode_strike = 'Перечеркнутый';
		$this->post_mbcode_strike1 = 'S'; //Translate
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = 'Teal'; //Translate
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = 'Самый маленький';
		$this->post_mbcode_tomato = 'Помидор';
		$this->post_mbcode_underline = 'Подчеркнутый';
		$this->post_mbcode_underline1 = 'U'; //Translate
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = 'Burly Wood'; //Translate
		$this->post_msg = 'Сообщение';
		$this->post_must_msg = 'Ты должен ввести сообщение.';
		$this->post_must_options = 'Ты должен ввести пункты голосования.';
		$this->post_must_title = 'Требуется заголовок.';
		$this->post_new_poll = 'Новое голосование';
		$this->post_new_topic = 'Новая тема';
		$this->post_no_forum = 'Этот форум не найден.';
		$this->post_no_topic = 'Не выбрана тема.';
		$this->post_no_vote = 'Ты должен выбрать пункт, за который голосуешь.';
		$this->post_option_emoticons = 'Использовать графические смайлы?';
		$this->post_option_global = 'Сделать тему глобальной?';
		$this->post_option_mbcode = 'Использовать MbCode?';
		$this->post_optional = 'опционально';
		$this->post_options = 'Настройки';
		$this->post_poll_options = 'Настройки голосования';
		$this->post_poll_row = 'Один на строчку';
		$this->post_posted = 'Отправлено';
		$this->post_posting = 'Отправляю';
		$this->post_preview = 'Предварительный просмотр';
		$this->post_reply = 'Ответить';
		$this->post_reply_topic = 'Ответить на тему';
		$this->post_replying = 'Отвечаю на тему';
		$this->post_replying1 = 'Отвечаю';
		$this->post_smiles = 'Кликабельные Смайлы';
		$this->post_too_many_options = 'Должно быть от 2-х до %d пунктов в голосовании.';
		$this->post_topic_detail = 'Описание темы';
		$this->post_topic_title = 'Заголовок темы';
		$this->post_view_topic = 'Посмотреть всю тему';
		$this->post_voting = 'Голосую';
	}

	function printer()
	{
		$this->printer_back = 'Назад';
		$this->printer_not_found = 'Тема не найдена. Она могла быть удалена, перемещена или вообще никогда не существовала.';
		$this->printer_not_found_title = 'Тема не найдена';
		$this->printer_perm_topics = 'У тебя нет права смотреть темы.';
		$this->printer_perm_topics_guest = 'У тебя нет права смотреть темы. Если зарегистрируешься, возможно, будет.';
		$this->printer_posted_on = 'Отправлено';
		$this->printer_send = 'Распечатать';
	}

	function profile()
	{
		$this->profile_aim_sn = 'Имя в AIM';
		$this->profile_av_sign = 'Аватара и подпись';
		$this->profile_avatar = 'Аватара';
		$this->profile_bday = 'День рождения';
		$this->profile_contact = 'Контакт';
		$this->profile_email_address = 'Адрес email';
		$this->profile_fav = 'Любимый форум';
		$this->profile_fav_forum = '%s (%d%% сообщений этого пользователя)';
		$this->profile_icq_uin = 'Номер ICQ';
		$this->profile_info = 'Информация';
		$this->profile_interest = 'Интересы';
		$this->profile_joined = 'Присоединился';
		$this->profile_last_post = 'Последнее сообщение';
		$this->profile_list = 'Список пользователей';
		$this->profile_location = 'Местоположение';
		$this->profile_member = 'Группа';
		$this->profile_member_title = 'Заголовок';
		$this->profile_msn = 'Идентификатор MSN';
		$this->profile_must_user = 'Ты должен указать пользователя, что б смотреть профиль.';
		$this->profile_no_member = 'Нету пользователя с таким номером. Его аккаунт мог быть удален.';
		$this->profile_none = '[ нет ]';
		$this->profile_not_post = 'еще не писал.';
		$this->profile_online = 'Этот пользователь сейчас online';
		$this->profile_pm = 'Приватные сообщения';
		$this->profile_postcount = '%s всего, %s в день';
		$this->profile_posts = 'Сообщений';
		$this->profile_private = '[ Приватно ]';
		$this->profile_profile = 'Профиль';
		$this->profile_signature = 'Подпись';
		$this->profile_unkown = '[ Неизвестно ]';
		$this->profile_view_profile = 'Просмотр профиля';
		$this->profile_www = 'Домашняя страница';
		$this->profile_yahoo = 'Идентификатор Yahoo';
	}

	function register()
	{
		$this->register_activated = 'Твой аккаунт был актвирован!';
		$this->register_activating = 'Активация аккаунта';
		$this->register_activation_error = 'Произошла ошибка при активации аккаунта. Проверь, содержит ли браузер полный адрес из активационного письма. Если проблема не исчезла, свяжись с администратором для переотправки письма.';
		$this->register_confirm_passwd = 'Подтверди пароль';
		$this->register_done = 'Ты был зарегистрирован. Теперь ты можешь войти.';
		$this->register_email = 'Адрес email';
		$this->register_email_invalid = 'Введенный адрес email неверен.';
		$this->register_email_used = 'Введенный адрес email уже используется одним из пользователей.';
		$this->register_fields = 'Не все поля заполнены.';
		$this->register_image = 'Пожалуйста, введите текст, изображенный на картинке.';
		$this->register_image_invalid = 'Чтобы убедится, что ты человек, а не поганый робот, введи текст, изображенный на картинке.';
		$this->register_must_activate = 'Ты зарегистрировался. На адрес %s был выслан email с инструкциями по активизации твоего аккаунта. Перед началом работы необходимо активизировать аккаунт.';
		$this->register_name_invalid = 'Слишком длинное имя.';
		$this->register_name_taken = 'Такое имя уже занято.';
		$this->register_new_user = 'Желаемое имя';
		$this->register_pass_invalid = 'Введенный пароль неверен. Пароль должен содержать только нормальные символы, такие как буквы, числа, тире, подчеркивание или пробел, и быть не менее 5 символов.';
		$this->register_pass_match = 'Пароли не совпадают.';
		$this->register_passwd = 'Пароль';
		$this->register_reg = 'Регистрация';
		$this->register_reging = 'Регистрируется';
	}

	function search()
	{
		$this->search_advanced = 'Дополнительные настройки';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = 'Простой поиск';
		$this->search_characters = 'символов сообщения';
		$this->search_day = 'день';
		$this->search_days = 'дней';
		$this->search_exact_name = 'точное имя';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = 'Искать';
		$this->search_forum = 'Форум';
		$this->search_group = 'Группа';
		$this->search_guest = 'Гость';
		$this->search_in = 'Искать в';
		$this->search_in_posts = 'Искать только в сообщениях';
		$this->search_ip = 'IP-адрес';
		$this->search_joined = 'Присоединился';
		$this->search_level = 'Уровень пользователя';
		$this->search_match = 'Искать совпадения';
		$this->search_matches = 'Совпадения';
		$this->search_month = 'месяц';
		$this->search_months = 'месяцев';
		$this->search_mysqldoc = 'Документация по MySQL';
		$this->search_newer = 'новее';
		$this->search_no_results = 'По твоему запросу ничего не найдено.';
		$this->search_no_words = 'Ты должен задать условия поиска.<br /><br />Каждое условие должно быть длиннее 3-х символов, включая буквы, числа, апострофы и подчеркивания.';
		$this->search_older = 'старше';
		$this->search_online = 'Этот пользователь сейчас online';
		$this->search_only_display = 'Показывать первые';
		$this->search_partial_name = 'фрагмент имени';
		$this->search_post_icon = 'Иконка сообщения';
		$this->search_posted_on = 'Отправлено';
		$this->search_posts = 'Сообщения';
		$this->search_posts_by = 'Только в сообщениях';
		$this->search_regex = 'Искать с помощью регулярных выражений';
		$this->search_regex_failed = 'Ошибка в регулярных выражениях. Прочитай документацию на MySQL о регулярных выражениях.';
		$this->search_relevance = 'Релевантность сообщения: %d%%';
		$this->search_replies = 'Сообщений';
		$this->search_result = 'Результаты поиска';
		$this->search_search = 'Искать';
		$this->search_select_all = 'Выделить всё';
		$this->search_show_posts = 'Показывать подходяшие сообщения';
		$this->search_sound = 'Искать созвучные';
		$this->search_starter = 'Начал';
		$this->search_than = 'чем';
		$this->search_topic = 'Тема';
		$this->search_unreg = 'Незарегистрированный';
		$this->search_week = 'неделя';
		$this->search_weeks = 'недели';
		$this->search_year = 'год';
	}

	function topic()
	{
		$this->topic_attached = 'Вложенный файл:';
		$this->topic_attached_downloads = 'раз скачано';
		$this->topic_attached_perm = 'У тебя нет прав скачивать этот файл.';
		$this->topic_attached_title = 'Вложенный файл';
		$this->topic_avatar = 'Аватара';
		$this->topic_create_poll = 'Новое голосование';
		$this->topic_create_topic = 'Новая тема';
		$this->topic_delete = 'Удалить';
		$this->topic_delete_post = 'Удалить это сообщение';
		$this->topic_edit = 'Изменить';
		$this->topic_edit_post = 'Изменить это сообщение';
		$this->topic_edited = 'Последний раз редактировалось %s, редактировал  %s';
		$this->topic_error = 'Ошибка';
		$this->topic_group = 'Группа';
		$this->topic_guest = 'Гость';
		$this->topic_ip = 'IP-адрес';
		$this->topic_joined = 'Присоединился';
		$this->topic_level = 'Уровень пользователя';
		$this->topic_links_aim = 'Послать AIM-сообщение %s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = 'Послать email %s';
		$this->topic_links_icq = 'Послать ICQ-сообщение %s';
		$this->topic_links_msn = 'Посмотреть MSN-профиль %s';
		$this->topic_links_pm = 'Послать приватное сообщение %s';
		$this->topic_links_web = 'Посетить домашнюю страничку %s';
		$this->topic_links_yahoo = 'Послать Yahoo-сообщение %s';
		$this->topic_lock = 'Заблокировать';
		$this->topic_locked = 'Тема заблокирована';
		$this->topic_move = 'Переместить';
		$this->topic_no_votes = 'Никто не голосовал.';
		$this->topic_not_found = 'Тема не найдена';
		$this->topic_not_found_message = 'Тема не найдена. Её могли удалить или переместить. Возможно, она никогда и не существовала.';
		$this->topic_online = 'Этот пользователь сейчас online';
		$this->topic_options = 'Настройки темы';
		$this->topic_pages = 'Страницы';
		$this->topic_perm_view = 'У тебя нет права смотреть темы.';
		$this->topic_perm_view_guest = 'У тебя нет права смотреть темы. Если зарегистрируешься, возможно и будет';
		$this->topic_pin = 'Прикрепить';
		$this->topic_posted = 'Отправлено';
		$this->topic_posts = 'Сообщений';
		$this->topic_print = 'Версия для печати';
		$this->topic_quote = 'Ответить с цитатированием';
		$this->topic_reply = 'Ответить';
		$this->topic_split = 'Разделить';
		$this->topic_split_finish = 'Завершить все разделения';
		$this->topic_split_keep = 'Не перемещать это сообщение';
		$this->topic_split_move = 'Переместить это сообщение';
		$this->topic_subscribe = 'Уведомить меня по e-mail при ответах в этой теме';
		$this->topic_top = 'Вверх ';
		$this->topic_unlock = 'Разблокировать';
		$this->topic_unpin = 'Открепить';
		$this->topic_unreg = 'Не зарегистрирован';
		$this->topic_view = 'Посмотреть результаты';
		$this->topic_viewing = 'Просмотр темы';
		$this->topic_vote = 'Голос';
		$this->topic_vote_count_plur = '%d голосов';
		$this->topic_vote_count_sing = '%d голос';
		$this->topic_votes = 'голос(-ов)';
	}
}
?>