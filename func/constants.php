<?php
/**
 * MercuryBoard
 * Copyright (c) 2001-2004 The Mercury Development Team
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
 * $Id: constants.php,v 1.18 2006/07/09 18:49:58 jon Exp $
 **/

/* Error Reporting */
define('MERCURY_NOTICE', 3);
define('MERCURY_ERROR', 5);
define('MERCURY_QUERY_ERROR', 6);

/* Uploading */
define('UPLOAD_TOO_LARGE', 1);
define('UPLOAD_NOT_ALLOWED', 2);
define('UPLOAD_FAILURE', 3);
define('UPLOAD_SUCCESS', 4);

/* Password Changing */
define('PASS_NOT_VERIFIED', 1);
define('PASS_NO_MATCH', 2);
define('PASS_INVALID', 3);
define('PASS_SUCCESS', 4);

/* Time Formatting */
define('DATE_LONG', 1);
define('DATE_SHORT', 2);
define('DATE_ONLY_LONG', 3);
define('DATE_ONLY_SHORT', 4);
define('DATE_TIME', 5);

/* Text Formatting */
define('FORMAT_MBCODE', 1);
define('FORMAT_EMOTICONS', 2);
define('FORMAT_CENSOR', 4);
define('FORMAT_BREAKS', 16);
define('FORMAT_HTMLCHARS', 32);

/* Topic States */
define('TOPIC_LOCKED', 1);
define('TOPIC_MOVED', 2);
define('TOPIC_POLL', 4);
define('TOPIC_POLL_ONLY', 8);
define('TOPIC_PINNED', 16);
define('TOPIC_GLOBAL', 32);
define('TOPIC_DELETED', 64);

/* Users */
define('USER_GUEST_UID', 1);
define('USER_GUEST', 3);
define('USER_ADMIN', 1);
define('USER_MEMBER', 2);
define('USER_BANNED', 4);
define('USER_AWAIT', 5);
define('USER_MODS', 6);
?>