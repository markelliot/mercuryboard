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
 * $Id: zh.php,v 1.15 2006/07/26 17:56:20 jon Exp $
 **/

/**
 * Chinese language module
 *
 * @author Anonymous
 * @since 1.1.0
 **/
class zh
{
	function active()
	{
		$this->active_last_action = '最后动作';
		$this->active_modules_active = '浏览活跃用户';
		$this->active_modules_board = '浏览首页';
		$this->active_modules_cp = '使用控制面板';
		$this->active_modules_forum = 'Viewing a forum: %s'; //Translate
		$this->active_modules_help = '使用帮助';
		$this->active_modules_login = '登录/登出';
		$this->active_modules_members = '查看会员列表';
		$this->active_modules_mod = '进行管理';
		$this->active_modules_pm = '使用短信';
		$this->active_modules_post = '发帖';
		$this->active_modules_printer = 'Printing a topic: %s'; //Translate
		$this->active_modules_profile = 'Viewing a profile: %s'; //Translate
		$this->active_modules_search = '搜索';
		$this->active_modules_topic = 'Viewing a topic: %s'; //Translate
		$this->active_time = '时间';
		$this->active_user = '用户';
		$this->active_users = '活跃用户';
	}

	function board()
	{
		$this->board_active_users = '活跃用户';
		$this->board_birthdays = '今天的寿星是：';
		$this->board_can_post = '该论坛您可以回复。';
		$this->board_can_topics = '该论坛您只能查看不能回复。';
		$this->board_cant_post = '该论坛您不能回复。';
		$this->board_cant_topics = '该论坛您不能查看和发表帖子。';
		$this->board_forum = '论坛';
		$this->board_guests = '位游客';
		$this->board_last_post = '最后发帖';
		$this->board_mark = '标记已读';
		$this->board_mark1 = '标记所有已读。';
		$this->board_members = '位会员';
		$this->board_message = '%s 条消息';
		$this->board_most_online = '最高在线人数： %d 发生于 %s';
		$this->board_nobday = '今天没有会员生日。';
		$this->board_nobody = '当前没有会员在线。';
		$this->board_nopost = '没有帖子';
		$this->board_noview = '您无权查看本论坛。';
		$this->board_regfirst = '您无权查看本论坛。如果您注册，您就可以查看。';
		$this->board_replies = '回复';
		$this->board_stats = '统计';
		$this->board_stats_string = '当前共有%s位注册用户。 欢迎我们的新会员：%s。<br /> 当前共有%s个主题和%s个回复，共有%s个帖子。';
		$this->board_topics = '主题';
		$this->board_topics_new = '该论坛有新帖子。';
		$this->board_topics_old = '该论坛没有新帖子。';
		$this->board_users = '位用户在线';
		$this->board_write_topics = '本论坛您可以查看并发表主题。';
	}

	function cp()
	{
		$this->cp_aim = 'AIM';
		$this->cp_already_member = '您输入的Email地址已经有人使用了。';
		$this->cp_apr = '4月';
		$this->cp_aug = '8月';
		$this->cp_avatar_current = '当前头像';
		$this->cp_avatar_error = '头像出错！';
		$this->cp_avatar_must_select = '您必须选择一个头像。';
		$this->cp_avatar_none = '不使用头像';
		$this->cp_avatar_pixels = '像素';
		$this->cp_avatar_select = '选择一个头像';
		$this->cp_avatar_size_height = '您头像的高度必须在1到';
		$this->cp_avatar_size_width = '您头像的宽度必须在1到';
		$this->cp_avatar_upload = '从您的硬盘中上载一个头像';
		$this->cp_avatar_upload_failed = '上载头像失败。您指定的文件不存在。';
		$this->cp_avatar_upload_not_image = '您只能上传图片来做您的头像。';
		$this->cp_avatar_upload_too_large = '您要上传的头像文件太大了。上传上限是%dKB';
		$this->cp_avatar_url = '指定一个头像的URL';
		$this->cp_avatar_use = '使用已上传头像';
		$this->cp_bday = '生日';
		$this->cp_been_updated = '您的资料已经更新。';
		$this->cp_been_updated1 = '您的头像已经更新。';
		$this->cp_been_updated_prefs = '您的喜好设置已经更新。';
		$this->cp_changing_pass = '更改密码';
		$this->cp_contact_pm = '允许其他用户通过短消息联系您吗？';
		$this->cp_cp = '控制面板';
		$this->cp_current_avatar = '当前头像';
		$this->cp_current_time = '现在是%s。';
		$this->cp_dec = '12月';
		$this->cp_editing_avatar = '编辑头像';
		$this->cp_editing_profile = '编辑资料';
		$this->cp_email = 'Email'; //Translate
		$this->cp_email_form = '允许其他用户通过Email联系您吗？';
		$this->cp_email_invaid = '您输入的Email地址无效！';
		$this->cp_err_avatar = '更新投降出错';
		$this->cp_err_updating = '更新资料出错';
		$this->cp_feb = '2月';
		$this->cp_file_type = '您头像的URL无效。确认URL地址格式是正确的，确保文件后缀名是gif，jpg，或者png。';
		$this->cp_format = '用户名';
		$this->cp_gmt = '[GMT+8:00]北京，香港，新加坡';
		$this->cp_gmt_nev1 = '[GMT-1:00] 佛得角';
		$this->cp_gmt_nev10 = '[GMT-10:00] 夏威夷';
		$this->cp_gmt_nev11 = '[GMT-11:00] 中途岛，萨摩亚';
		$this->cp_gmt_nev12 = '[GMT-12:00] 国际日期变更线（西）';
		$this->cp_gmt_nev2 = '[GMT-2:00] 中大西洋';
		$this->cp_gmt_nev3 = '[GMT-3:00] 布宜诺斯艾利斯，格林兰岛';
		$this->cp_gmt_nev35 = '[GMT-3:30] 纽芬兰';
		$this->cp_gmt_nev4 = '[GMT-4:00] 大西洋时间（加拿大）';
		$this->cp_gmt_nev5 = '[GMT-5:00] 美国&加拿大东部时间';
		$this->cp_gmt_nev6 = '[GMT-6:00] 美国&加拿大中部时间';
		$this->cp_gmt_nev7 = '[GMT-7:00] 美国&加拿大山地时间';
		$this->cp_gmt_nev8 = '[GMT-8:00] 美国&加拿大太平洋时间';
		$this->cp_gmt_nev9 = '[GMT-9:00] 阿拉斯加';
		$this->cp_gmt_pos1 = '[GMT+1:00] 阿姆斯特丹，柏林，罗马，巴黎';
		$this->cp_gmt_pos10 = '[GMT+10:00] 墨尔本，悉尼，关岛';
		$this->cp_gmt_pos11 = '[GMT+11:00] 新喀里多尼亚';
		$this->cp_gmt_pos12 = '[GMT+12:00] 奥克兰，斐济';
		$this->cp_gmt_pos2 = '[GMT+2:00] 雅典，开罗，耶路撒冷';
		$this->cp_gmt_pos3 = '[GMT+3:00] 巴格达，莫斯科，内罗毕';
		$this->cp_gmt_pos35 = '[GMT+3:30] 德黑兰';
		$this->cp_gmt_pos4 = '[GMT+4:00] 阿布扎比，马斯喀特，第比利斯';
		$this->cp_gmt_pos45 = '[GMT+4:30] 喀布尔';
		$this->cp_gmt_pos5 = '[GMT+5:00] 伊斯兰堡，卡拉奇';
		$this->cp_gmt_pos55 = '[GMT+5:30] 孟买，加尔各答，新德里';
		$this->cp_gmt_pos6 = '[GMT+6:00] Almaty, Dhaka'; //Translate
		$this->cp_gmt_pos7 = '[GMT+7:00] 曼谷，雅加达';
		$this->cp_gmt_pos8 = '[GMT] 格林威治标准时间';
		$this->cp_gmt_pos9 = '[GMT+9:00] 东京，汉城';
		$this->cp_gmt_pos95 = '[GMT+9:30] 阿德莱德，达尔文';
		$this->cp_header = '用户控制面板';
		$this->cp_height = '高度';
		$this->cp_icq = 'ICQ';
		$this->cp_interest = '兴趣爱好';
		$this->cp_jan = '1月';
		$this->cp_july = '7月';
		$this->cp_june = '6月';
		$this->cp_label_edit_avatar = '编辑头像';
		$this->cp_label_edit_pass = '更改密码';
		$this->cp_label_edit_prefs = '编辑偏好设置';
		$this->cp_label_edit_profile = '编辑资料';
		$this->cp_label_edit_subs = '编辑帖子订阅';
		$this->cp_language = '语言';
		$this->cp_less_charac = '您的名字必须小于32字';
		$this->cp_location = '来自';
		$this->cp_login_first = '您必须登录才能进入控制面板。';
		$this->cp_mar = '3月';
		$this->cp_may = '5月';
		$this->cp_msn = 'MSN';
		$this->cp_must_orig = 'Your name must be identical to the original. You may only change the letter case and spacing.'; //Translate
		$this->cp_new_notmatch = '两次输入的新密码不一致。';
		$this->cp_new_pass = '新密码';
		$this->cp_no_flash = '不允许使用Flash头像。';
		$this->cp_not_exist = '您指定的日期（%s）不正确。';
		$this->cp_nov = '11月';
		$this->cp_oct = '10月';
		$this->cp_old_notmatch = '您输入的旧密码不正确。';
		$this->cp_old_pass = '旧密码';
		$this->cp_pass_notvaid = '您的密码为非法密码。 密码只能由字母，数字，-，_和空格组成。';
		$this->cp_preferences = '正在更改偏好设置';
		$this->cp_privacy = '隐私设置';
		$this->cp_repeat_pass = '重复新密码';
		$this->cp_sept = '9月';
		$this->cp_show_active = 'Show your activities when you are using the board?'; //Translate
		$this->cp_show_email = '在资料中显示您的Email吗？';
		$this->cp_signature = '签名';
		$this->cp_size_max = '您输入的头像太大了。允许最大尺寸是%s×%s像素。';
		$this->cp_skin = '论坛皮肤';
		$this->cp_sub_change = '正在更改订阅';
		$this->cp_sub_delete = '删除';
		$this->cp_sub_expire = '订阅失效日期';
		$this->cp_sub_name = '名称';
		$this->cp_sub_no_params = '没有参数。';
		$this->cp_sub_success = '您现在已经成功订阅%s。';
		$this->cp_sub_type = '订阅类型';
		$this->cp_sub_updated = '所选内容已经从登月列表中删除。';
		$this->cp_topic_option = '主题选项';
		$this->cp_updated = '资料已更新';
		$this->cp_updated1 = '头像已更新';
		$this->cp_updated_prefs = '偏好设置已更新';
		$this->cp_user_exists = '已经存在该用户名。';
		$this->cp_valided = '您的密码已经成功更改。';
		$this->cp_view_avatar = '使用头像';
		$this->cp_view_emoticon = '使用表情转换';
		$this->cp_view_signature = '使用签名';
		$this->cp_welcome = '欢迎来到用户控制面板。';
		$this->cp_width = '宽度';
		$this->cp_www = '主页';
		$this->cp_yahoo = 'Yahoo通';
		$this->cp_zone = '时区';
	}

	function email()
	{
		$this->email_blocked = '该会员不接受Email';
		$this->email_email = 'Email'; //Translate
		$this->email_msgtext = 'Email正文：';
		$this->email_no_fields = '返回并确认是否各栏都已填写完成';
		$this->email_no_member = '没有找到该用户';
		$this->email_no_perm = '您没有权限发送邮件。';
		$this->email_sent = '您的Email已经成功发送。';
		$this->email_subject = '标题：';
		$this->email_to = '发送到：';
	}

	function forum()
	{
		$this->forum_by = 'By'; //Translate
		$this->forum_can_post = '您可以在该论坛发表回复。';
		$this->forum_can_topics = '您可以浏览该论坛帖子。';
		$this->forum_cant_post = '您不能在该论坛发表回复。';
		$this->forum_cant_topics = '您不能浏览该论坛帖子。';
		$this->forum_dot = '点';
		$this->forum_dot_detail = '表示您参与了该主题';
		$this->forum_forum = '论坛信息';
		$this->forum_guest = '游客';
		$this->forum_hot = '热';
		$this->forum_icon = '发帖标记';
		$this->forum_jump = '跳转到最新帖';
		$this->forum_last = '最后发表';
		$this->forum_locked = '关闭';
		$this->forum_moved = '移动';
		$this->forum_msg = '%s信息';
		$this->forum_new = '新';
		$this->forum_new_poll = '创建新投票';
		$this->forum_new_topic = '创建新主题';
		$this->forum_no_topics = '该论坛没有主题。';
		$this->forum_noexist = '指定的论坛不存在。';
		$this->forum_nopost = '没有帖子';
		$this->forum_not = '非';
		$this->forum_noview = '您没有权限查看该论坛。';
		$this->forum_pages = '页';
		$this->forum_pinned = '置顶';
		$this->forum_pinned_topic = '置顶主题';
		$this->forum_poll = '投票';
		$this->forum_regfirst = '您没有权限查看该论坛。如果您要查看，清注册先。';
		$this->forum_replies = '回复';
		$this->forum_starter = '发起者';
		$this->forum_sub = '子论坛';
		$this->forum_sub_last_post = '最后发表';
		$this->forum_sub_replies = '回复';
		$this->forum_sub_topics = '主题';
		$this->forum_subscribe = '该论坛有新帖发邮件到我的Email里。';
		$this->forum_topic = '主题';
		$this->forum_topics_new = '该论坛有新帖。';
		$this->forum_topics_old = '该论坛没有新帖。';
		$this->forum_views = '浏览';
		$this->forum_write_topics = '您可以在该论坛创建主题。';
	}

	function help()
	{
		$this->help_available_files = '帮助';
		$this->help_none = '没有帮助内容。';
	}

	function login()
	{
		$this->login_cant_logged = '很遗憾，您没有登录。检查用户名和密码是否正确。<br /><br />它们是区分大小写的。像“Admin”与“aDmin”是不同的。同时也请检查下您的浏览器是否已经开启ciikie了。';
		$this->login_cookies = '必须启用cookie才能登录本论坛。';
		$this->login_forgot_pass = 'Forgot your password?'; //Translate
		$this->login_header = '登录';
		$this->login_logged = '您已成功登录。';
		$this->login_now_out = '您已成功登出。';
		$this->login_out = '登出';
		$this->login_pass = '密码';
		$this->login_pass_no_id = 'There is no member with the user name you entered.'; //Translate
		$this->login_pass_request = 'To complete the password reset, please click on the link sent to the email address associated with your account.'; //Translate
		$this->login_pass_reset = 'Reset Password'; //Translate
		$this->login_pass_sent = 'Your password has been reset. The new password has been sent to the email address associated with your account.'; //Translate
		$this->login_sure = '%s，您确认登出吗？';
		$this->login_user = '用户名';
	}

	function main()
	{
		$this->board_by = 'By'; //Translate
		$this->charset = 'GB2312';
		$this->direction = 'ltr'; //Translate
		$this->main_activate = '您尚未激活。';
		$this->main_activate_resend = '重发激活邮件';
		$this->main_admincp = '管理面板';
		$this->main_banned = '您已经被禁止查看和进入本论坛。';
		$this->main_code = '代码';
		$this->main_continue = '继续';
		$this->main_cp = '控制面板';
		$this->main_full = '完整';
		$this->main_help = '帮助文档';
		$this->main_load = '负载';
		$this->main_login = '登录';
		$this->main_logout = '登出';
		$this->main_max_load = '对不起， 由于在线用户过多，当前%s不可用。';
		$this->main_members = '会员列表';
		$this->main_messenger = '私人消息';
		$this->main_new = '条新消息';
		$this->main_next = '下页';
		$this->main_posts_new = '新';
		$this->main_powered = 'Powered by'; //Translate
		$this->main_prev = '前页';
		$this->main_queries = 'queries'; //Translate
		$this->main_quote = '引用';
		$this->main_register = '注册';
		$this->main_reminder = '提醒';
		$this->main_reminder_closed = '论坛已经关闭，只有管理员才能进入。';
		$this->main_said = '说';
		$this->main_search = '论坛搜索';
		$this->main_seconds = '秒';
		$this->main_welcome = '欢迎';
		$this->main_welcome_guest = '欢迎';
		$this->sep_decimals = '.'; //Translate
		$this->sep_thousands = '';
		$this->submit = '提交';
		$this->today = 'Today'; //Translate
		$this->yesterday = 'Yesterday'; //Translate
	}

	function members()
	{
		$this->members_all = '全部';
		$this->members_email = 'Email'; //Translate
		$this->members_email_member = '给该会员发Email';
		$this->members_group = '用户组';
		$this->members_joined = '注册日期';
		$this->members_list = '会员列表';
		$this->members_member = '用户名';
		$this->members_pm = '短消息';
		$this->members_posts = '帖子';
		$this->members_send_pm = '给该会员发送一条短消息。';
		$this->members_title = '级别';
		$this->members_vist_www = '浏览该会员的网站。';
		$this->members_www = '网站';
	}

	function mod()
	{
		$this->mod_confirm_post_delete = '您确认删除该帖子吗？';
		$this->mod_confirm_topic_delete = '您确认删除该主题吗？';
		$this->mod_error_first_post = '您不能删除主题的第一个帖子。';
		$this->mod_error_move_category = '您不能移动主题到一个类别。';
		$this->mod_error_move_create = 'You do not have permission to move topics to that forum.'; //Translate
		$this->mod_error_move_forum = '主题移动的目的论坛不存在。';
		$this->mod_error_move_global = 'You cannot move a global topic. Edit the topic before moving it.'; //Translate
		$this->mod_error_move_same = '您不能移动主题到已经存在该主题的论坛中去。';
		$this->mod_label_controls = '版主管理模式';
		$this->mod_label_description = '描述';
		$this->mod_label_emoticon = '使用表情符号转换？';
		$this->mod_label_global = 'Global Topic'; //Translate
		$this->mod_label_mbcode = '使用Mb代码？';
		$this->mod_label_move_to = '移动到';
		$this->mod_label_options = '其他选项';
		$this->mod_label_post_delete = '删除帖子';
		$this->mod_label_post_edit = '编辑帖子';
		$this->mod_label_title = '标题';
		$this->mod_label_title_original = 'Original Title'; //Translate
		$this->mod_label_title_split = 'Split Title'; //Translate
		$this->mod_label_topic_delete = '删除主题';
		$this->mod_label_topic_edit = '编辑主题';
		$this->mod_label_topic_lock = '关闭主题';
		$this->mod_label_topic_move = '移动主题';
		$this->mod_label_topic_move_complete = '主题完全移动（不在原论坛保留链接）';
		$this->mod_label_topic_move_link = '移动主题并在原来的论坛中保留转向';
		$this->mod_label_topic_pin = '置顶主题';
		$this->mod_label_topic_split = 'Split Topic'; //Translate
		$this->mod_missing_post = '您指定的帖子不存在。';
		$this->mod_missing_topic = '您指定的主题不存在。';
		$this->mod_no_action = '您别许指定一个操作。';
		$this->mod_no_post = '您必须指定一个帖子。';
		$this->mod_no_topic = '您必须指定一个主题。';
		$this->mod_perm_post_delete = '您无权删除该帖子。';
		$this->mod_perm_post_edit = '您无权编辑该帖子。';
		$this->mod_perm_topic_delete = '您无权删除该主题。';
		$this->mod_perm_topic_edit = '您无权编辑该主题。';
		$this->mod_perm_topic_lock = '您无权关闭该主题。';
		$this->mod_perm_topic_move = '您无权用动该主题。';
		$this->mod_perm_topic_pin = '您无权置顶该主题。';
		$this->mod_perm_topic_split = 'You do not have permission to split this topic.'; //Translate
		$this->mod_perm_topic_unlock = '您无权开放该主题。';
		$this->mod_perm_topic_unpin = '您无权取消该主题置顶。';
		$this->mod_success_post_delete = '该帖子已成功删除。';
		$this->mod_success_post_edit = '该帖子已成功编辑。';
		$this->mod_success_split = 'The topic was successfully split.'; //Translate
		$this->mod_success_topic_delete = '该主题已成功删除。';
		$this->mod_success_topic_edit = '该主题已成功编辑。';
		$this->mod_success_topic_move = '该主题已成功移动到新论坛。';
	}

	function new_posts()
	{
		$this->new_posts_dot = '点';
		$this->new_posts_dot_detail = '表示您参与了该主题';
		$this->new_posts_error = 'Searching for New Posts'; //Translate
		$this->new_posts_forum = '论坛信息';
		$this->new_posts_guest = 'You can not search for new post while being a guest, please login'; //Translate
		$this->new_posts_hot = '热';
		$this->new_posts_last = '最后发表';
		$this->new_posts_locked = '关闭';
		$this->new_posts_moved = '移动';
		$this->new_posts_new = '新';
		$this->new_posts_none = 'No new posts since you last visited'; //Translate
		$this->new_posts_not = '非';
		$this->new_posts_pinned = '置顶';
		$this->new_posts_poll = '投票';
		$this->new_posts_topic = '主题';
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
		$this->pm_cant_del = '您无权删除该消息。';
		$this->pm_continue = 'Continue'; //Translate
		$this->pm_delallmsg = '删除所有消息';
		$this->pm_delete = '删除';
		$this->pm_delete_selected = 'Delete Selected'; //Translate
		$this->pm_deleted = '消息已删除。';
		$this->pm_deleted_all = '消息已删除。';
		$this->pm_deleted_buddy = 'Your selection was deleted'; //Translate
		$this->pm_email = 'Email'; //Translate
		$this->pm_error = 'There were problems sending your message to some of the recipients.<br /><br />The following members do not exist: %s<br /><br />The following members are not accepting personal messages: %s'; //Translate
		$this->pm_fields = '您的消息没有发送成功。请确认所有必填栏均已完成。';
		$this->pm_flood = 'You have sent a message in the past %s seconds, and you may not send another right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->pm_folder_inbox = '收件箱';
		$this->pm_folder_new = '%s条新消息';
		$this->pm_folder_sentbox = 'Sent';
		$this->pm_from = '来自';
		$this->pm_group = '用户组';
		$this->pm_guest = '游客不能使用短消息功能。请先注册或登录。';
		$this->pm_joined = '注册时间';
		$this->pm_messenger = '短消息';
		$this->pm_msgtext = '消息内容';
		$this->pm_multiple = 'Separate multiple recipients with ;'; //Translate
		$this->pm_no_folder = '您必须置顶一个文件夹。';
		$this->pm_no_member = '没有发现该id的用户。';
		$this->pm_no_number = '没有该序号的消息。';
		$this->pm_no_title = '无题';
		$this->pm_nomsg = '本文件夹没有内容。';
		$this->pm_noview = '您无权查看该消息。';
		$this->pm_online = 'This member is currently online'; //Translate
		$this->pm_or = 'Or'; //Translate
		$this->pm_personal = '短消息';
		$this->pm_personal_msging = '私人消息';
		$this->pm_pm = '短消息';
		$this->pm_posts = '发帖量';
		$this->pm_preview = 'Preview'; //Translate
		$this->pm_recipients = 'Recipients'; //Translate
		$this->pm_reply = '回复';
		$this->pm_send = '发送';
		$this->pm_sendamsg = '发送短消息';
		$this->pm_sendingpm = '发送短消息';
		$this->pm_sendon = '已预送';
		$this->pm_success = '您的消息已经成功发送。';
		$this->pm_sure_del = '您确认要删除该消息吗？';
		$this->pm_sure_delall = '您要确认删除该文件夹的所有内容吗？';
		$this->pm_title = '标题';
		$this->pm_to = '发送到';
	}

	function post()
	{
		$this->post_attach = '附件';
		$this->post_attach_add = '添加附件';
		$this->post_attach_disrupt = '添加或删除附件不会影响您帖子的文字内容。';
		$this->post_attach_failed = '附件上传失败。您指定的文件可能不存在。';
		$this->post_attach_not_allowed = 'You cannot attach files of that type.'; //Translate
		$this->post_attach_remove = '删除附件';
		$this->post_attach_too_large = '您指定要上传的附件太大了。允许上传的文件上限是%dKB。';
		$this->post_cant_create = '游客无权创建主题。如果您注册，或许可以发表主题。';
		$this->post_cant_create1 = '您无权创建主题。';
		$this->post_cant_enter = '您的投票无效。您已经投过票了或者您无权投票。';
		$this->post_cant_poll = '游客无权发起投票。如果您注册，或许可以发起投票。';
		$this->post_cant_poll1 = '您无权发起投票。';
		$this->post_cant_reply = '您无权回复主题。';
		$this->post_cant_reply1 = '游客无权回复主题。如果您注册，或许可以发表帖子。';
		$this->post_cant_reply2 = '您无权回复主题';
		$this->post_closed = '该主题已经关闭。';
		$this->post_create_poll = '发起投票';
		$this->post_create_topic = '创建主题';
		$this->post_creating = '创建主题';
		$this->post_creating_poll = '发起投票';
		$this->post_flood = '您在过去%s秒内已经发表过帖子，所以您现在无法发表新帖子。<br /><br />请稍候重试。';
		$this->post_guest = '游客';
		$this->post_icon = '发帖标记';
		$this->post_last_five = '最后倒数5帖';
		$this->post_length = '检查长度';
		$this->post_mbcode_address = '输入URL地址';
		$this->post_mbcode_arial = 'Arial'; //Translate
		$this->post_mbcode_blue = '蓝色';
		$this->post_mbcode_bold = '加粗';
		$this->post_mbcode_bold1 = '粗';
		$this->post_mbcode_chocolate = '巧克力色';
		$this->post_mbcode_code = '代码';
		$this->post_mbcode_color = '颜色';
		$this->post_mbcode_coral = '珊瑚色';
		$this->post_mbcode_courier = 'Courier'; //Translate
		$this->post_mbcode_crimson = '深红';
		$this->post_mbcode_darkblue = '深蓝';
		$this->post_mbcode_darkred = '暗红';
		$this->post_mbcode_deepink = '深紫';
		$this->post_mbcode_detail = '输入简短描述';
		$this->post_mbcode_email = 'Email'; //Translate
		$this->post_mbcode_firered = '砖红';
		$this->post_mbcode_font = '字体';
		$this->post_mbcode_green = '绿色';
		$this->post_mbcode_huge = '巨大';
		$this->post_mbcode_image = '图片';
		$this->post_mbcode_image1 = '图';
		$this->post_mbcode_impact = 'Impact'; //Translate
		$this->post_mbcode_indigo = '靛蓝';
		$this->post_mbcode_italic = '斜体';
		$this->post_mbcode_italic1 = '斜';
		$this->post_mbcode_large = '大';
		$this->post_mbcode_length = '您的帖子现长"+length+"个字。';
		$this->post_mbcode_limegreen = '椴绿';
		$this->post_mbcode_medium = '中';
		$this->post_mbcode_orange = '橙色';
		$this->post_mbcode_orangered = '橙红';
		$this->post_mbcode_php = 'PHP'; //Translate
		$this->post_mbcode_purple = '紫色';
		$this->post_mbcode_quote = '引用';
		$this->post_mbcode_red = '红色';
		$this->post_mbcode_royalblue = '品蓝';
		$this->post_mbcode_sandybrown = '沙棕';
		$this->post_mbcode_seagreen = '水绿';
		$this->post_mbcode_sienna = '赭色';
		$this->post_mbcode_silver = '银色';
		$this->post_mbcode_size = '大小';
		$this->post_mbcode_skyblue = '天蓝';
		$this->post_mbcode_small = '小';
		$this->post_mbcode_strike = '删除线';
		$this->post_mbcode_strike1 = '删';
		$this->post_mbcode_tahoma = 'Tahoma'; //Translate
		$this->post_mbcode_teal = '青色';
		$this->post_mbcode_times = 'Times'; //Translate
		$this->post_mbcode_tiny = '微小';
		$this->post_mbcode_tomato = '番茄色';
		$this->post_mbcode_underline = '下划线';
		$this->post_mbcode_underline1 = '下';
		$this->post_mbcode_url = 'URL'; //Translate
		$this->post_mbcode_verdana = 'Verdana'; //Translate
		$this->post_mbcode_wood = '橡木色';
		$this->post_msg = '正文';
		$this->post_must_msg = '您必须写上帖子的内容。';
		$this->post_must_options = '当您创建一个新投票时必须包括备选项。';
		$this->post_must_title = '当您创建新主题时必须写上标题。';
		$this->post_new_poll = '新投票';
		$this->post_new_topic = '新主题';
		$this->post_no_forum = '没有发现该论坛。';
		$this->post_no_topic = '没有指定主题。';
		$this->post_no_vote = '您必须选择一个选项。';
		$this->post_option_emoticons = '使用表情符号转换？';
		$this->post_option_global = 'Make this topic global?'; //Translate
		$this->post_option_mbcode = '使用Mb代码？';
		$this->post_optional = '可选';
		$this->post_options = '选项';
		$this->post_poll_options = '选项';
		$this->post_poll_row = '每项一行';
		$this->post_posted = '发表于';
		$this->post_posting = '发帖';
		$this->post_preview = 'Preview'; //Translate
		$this->post_reply = '回复';
		$this->post_reply_topic = '回复该主题';
		$this->post_replying = '回复主题';
		$this->post_replying1 = '回复';
		$this->post_smiles = '表情符号';
		$this->post_too_many_options = '备选项必须在2到%d个之间。';
		$this->post_topic_detail = '描述';
		$this->post_topic_title = '标题';
		$this->post_view_topic = '查看完整主题';
		$this->post_voting = '投票';
	}

	function printer()
	{
		$this->printer_back = '返回';
		$this->printer_not_found = '该主题找不到。它可能被删除，移动或者根本没有发表过。';
		$this->printer_not_found_title = '主题没有找到';
		$this->printer_perm_topics = '您无权查看主题。';
		$this->printer_perm_topics_guest = '您无权查看主题。如果您注册，或许可以查看。';
		$this->printer_posted_on = '发表于';
		$this->printer_send = '打印';
	}

	function profile()
	{
		$this->profile_aim_sn = 'AIM';
		$this->profile_av_sign = '头像和签名';
		$this->profile_avatar = '头像';
		$this->profile_bday = '生日';
		$this->profile_contact = '联系';
		$this->profile_email_address = 'Email';
		$this->profile_fav = '最常去论坛';
		$this->profile_fav_forum = '%s (%d%% of this member\'s posts)'; //Translate
		$this->profile_icq_uin = 'ICQ';
		$this->profile_info = '信息';
		$this->profile_interest = '兴趣爱好';
		$this->profile_joined = 'Joined'; //Translate
		$this->profile_last_post = '最后发表';
		$this->profile_list = '会员列表';
		$this->profile_location = '来自';
		$this->profile_member = '会员组';
		$this->profile_member_title = '会员级别';
		$this->profile_msn = 'MSN';
		$this->profile_must_user = '您必须输入一个用户名来查看他资料。';
		$this->profile_no_member = '没有该用户名的用户。该帐号可能已经删除了。';
		$this->profile_none = '[ 无 ]';
		$this->profile_not_post = '没有发表过帖子。';
		$this->profile_online = 'This member is currently online'; //Translate
		$this->profile_pm = 'Private Messages'; //Translate
		$this->profile_postcount = '%s total, %s per day'; //Translate
		$this->profile_posts = '发表帖子';
		$this->profile_private = '[ 保  密 ]';
		$this->profile_profile = '资料';
		$this->profile_signature = '签名';
		$this->profile_unkown = '[ 未  知 ]';
		$this->profile_view_profile = '查看资料';
		$this->profile_www = '主页';
		$this->profile_yahoo = 'Yahoo通';
	}

	function register()
	{
		$this->register_activated = '您的帐号已激活！';
		$this->register_activating = '帐号激活';
		$this->register_activation_error = '您激活帐号时发生错误。检查下浏览器的地址是否与Email中的完整地址完全一致。如果问题依然存在，请联系论坛管理员联系，重发激活邮件。';
		$this->register_confirm_passwd = '确认密码';
		$this->register_done = '您已经成功注册，现在可以马上登录。';
		$this->register_email = 'Email';
		$this->register_email_invalid = '您输入的Email地址无效。';
		$this->register_email_used = '您输入的Email已经由另一个会员使用了。';
		$this->register_fields = '没有完整填写所有必填项。';
		$this->register_image = 'Please type the text shown in the image.'; //Translate
		$this->register_image_invalid = 'To verify you are a human registrant, you must type the text as shown in the image.'; //Translate
		$this->register_must_activate = '您已经成功注册。一封激活邮件发送到 %s 。请您稍候检查您的邮箱激活，否则帐号在论坛使用中会收到限制。';
		$this->register_name_invalid = '您输入的用户名过长。';
		$this->register_name_taken = '该用户名已经被人使用。';
		$this->register_new_user = '用户名';
		$this->register_pass_invalid = '您的密码为非法密码。 密码只能由字母，数字，-，_和空格组成，并且至少5位。';
		$this->register_pass_match = '您两次输入的密码不一致。';
		$this->register_passwd = '密码';
		$this->register_reg = '注册';
		$this->register_reging = '注册';
	}

	function search()
	{
		$this->search_advanced = '高级选项';
		$this->search_avatar = 'Avatar'; //Translate
		$this->search_basic = '基本搜索';
		$this->search_characters = '字';
		$this->search_day = '天';
		$this->search_days = '天';
		$this->search_exact_name = '精确匹配';
		$this->search_flood = 'You have searched in the past %s seconds, and you may not search right now.<br /><br />Please try again in a few seconds.'; //Translate
		$this->search_for = '搜索关键词';
		$this->search_forum = '论坛';
		$this->search_group = 'Group'; //Translate
		$this->search_guest = '游客';
		$this->search_in = '搜索范围';
		$this->search_in_posts = '仅搜索';
		$this->search_ip = 'IP'; //Translate
		$this->search_joined = '注册日期';
		$this->search_level = 'Member Level'; //Translate
		$this->search_match = '按匹配项搜索';
		$this->search_matches = '相关内容';
		$this->search_month = '月';
		$this->search_months = '月';
		$this->search_mysqldoc = 'MySQL Documentation'; //Translate
		$this->search_newer = '新于';
		$this->search_no_results = '没有找到相关内容。';
		$this->search_no_words = '您必须指定搜索的内容。<br /><br />关键词至少3个字，包括汉字，英文字母，空格，数字，\'和_。';
		$this->search_older = '旧于';
		$this->search_online = 'This member is currently online'; //Translate
		$this->search_only_display = '仅显示帖子中的前';
		$this->search_partial_name = '模糊匹配';
		$this->search_post_icon = '发帖标记';
		$this->search_posted_on = '发表于';
		$this->search_posts = '发帖数';
		$this->search_posts_by = '仅在由';
		$this->search_regex = '按规则声调搜索';
		$this->search_regex_failed = 'Your regular expression failed. Please see the MySQL documentation for regular expression help.'; //Translate
		$this->search_relevance = '相关度: %d%%';
		$this->search_replies = '该主题帖子总数';
		$this->search_result = '搜索结果';
		$this->search_search = '搜索';
		$this->search_select_all = '全选';
		$this->search_show_posts = '显示匹配的帖子';
		$this->search_sound = '按发音搜索';
		$this->search_starter = '发起者';
		$this->search_than = 'than'; //Translate
		$this->search_topic = '主题';
		$this->search_unreg = 'Unregistered'; //Translate
		$this->search_week = '周';
		$this->search_weeks = '周';
		$this->search_year = '年';
	}

	function topic()
	{
		$this->topic_attached = '附件:';
		$this->topic_attached_downloads = '次';
		$this->topic_attached_perm = '您无权下改该文件。';
		$this->topic_attached_title = '已添加文件';
		$this->topic_avatar = 'Avatar'; //Translate
		$this->topic_create_poll = '创建新投票';
		$this->topic_create_topic = '创建新主题';
		$this->topic_delete = '删除';
		$this->topic_delete_post = '删除该帖';
		$this->topic_edit = '编辑';
		$this->topic_edit_post = '编辑该帖';
		$this->topic_edited = '最后编辑于%s (by %s) ';
		$this->topic_error = '出错';
		$this->topic_group = '用户组';
		$this->topic_guest = '游客';
		$this->topic_ip = 'IP'; //Translate
		$this->topic_joined = '注册日期';
		$this->topic_level = '会员级别';
		$this->topic_links_aim = '发送AIM消息给%s';
		$this->topic_links_buddy = 'Add %s to your buddy list'; //Translate
		$this->topic_links_email = '发送Email给%s';
		$this->topic_links_icq = '发送ICQ消息给%s';
		$this->topic_links_msn = '查看%s的MSN资料';
		$this->topic_links_pm = '发送短消息给%s';
		$this->topic_links_web = '访问%s的网站';
		$this->topic_links_yahoo = '用Yahoo通发消息给%s';
		$this->topic_lock = '关闭';
		$this->topic_locked = '主题已关闭';
		$this->topic_move = '移动';
		$this->topic_no_votes = '没有人投过票。';
		$this->topic_not_found = '主题没有找到';
		$this->topic_not_found_message = '主题没有找到。它可能被删除，移动或者根本没有发表过。';
		$this->topic_online = 'This member is currently online'; //Translate
		$this->topic_options = '主题选项';
		$this->topic_pages = '页';
		$this->topic_perm_view = '您无权查看主题';
		$this->topic_perm_view_guest = '您无权查看主题。如果您注册，或许可以查看。';
		$this->topic_pin = '置顶';
		$this->topic_posted = 'Posted'; //Translate
		$this->topic_posts = '发帖量';
		$this->topic_print = '打印';
		$this->topic_quote = '引用该帖内容做为帖子的部分内容';
		$this->topic_reply = '回复该主题';
		$this->topic_split = 'Split'; //Translate
		$this->topic_split_finish = 'Finish All Splitting'; //Translate
		$this->topic_split_keep = 'Do not move this post'; //Translate
		$this->topic_split_move = 'Move this post'; //Translate
		$this->topic_subscribe = '订阅该主题';
		$this->topic_top = 'Go to the top of the page'; //Translate
		$this->topic_unlock = '开放主题';
		$this->topic_unpin = '取消置顶';
		$this->topic_unreg = '未注册';
		$this->topic_view = '查看结果';
		$this->topic_viewing = '查看主题';
		$this->topic_vote = '投票';
		$this->topic_vote_count_plur = '%d票';
		$this->topic_vote_count_sing = '%d票';
		$this->topic_votes = '票';
	}
}
?>