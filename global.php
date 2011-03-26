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
 * $Id: global.php,v 1.206 2006/07/08 20:22:44 jon Exp $
 **/

/**
 * The MercuryBoard Core
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.0
 **/
class mercuryboard
{
	var $version = 'v1.1.5';          // MercuryBoard's version @var string
	var $server  = array();           // Alias for $_SERVER @var array
	var $get     = array();           // Alias for $_GET @var array
	var $post    = array();           // Alias for $_POST @var array
	var $cookie  = array();           // Alias for $_COOKIE @var array
	var $files   = array();           // Alias for $_FILES @var array
	var $user    = array();           // Information about the user @var array
	var $sets    = array();           // Settings @var array
	var $temps   = array();           // Loaded templates @var array
	var $censor  = array();           // Curse words to filter @var array

	var $emotes  = array(            // Text strings to be replaced with images @var array
		'replacement' => array(),
		'replacement_clickable' => array()
	);

	var $tree    = null;              // The navigational tree @var string
	var $nohtml  = false;             // To display no board wrapper @var bool
	var $replaces_loaded = false;     // Replacements have been loaded @var bool
	var $time;                        // The current Unix time @var int
	var $ip;                          // The user's IP address @var string
	var $agent;                       // The browser's user agent @var string
	var $self;                        // Alias for $PHP_SELF @var string
	var $db;                          // Database object @var object
	var $perms;                       // Permissions object @var object
	var $pre;                         // Database table prefix @var string
	var $skin;                        // The user's selected skin @var string
	var $table;                       // Start to an HTML table @var string
	var $etable;                      // End to an HTML table @var string
	var $lang;                        // Loaded words @var object
	var $query;                       // The query string @var string

	/**
	 * Constructor; sets up variables
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function mercuryboard()
	{
		$this->time    = time();
		$this->query   = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;
		$this->ip      = $_SERVER['REMOTE_ADDR'];
		$this->agent   = isset($_SERVER['HTTP_USER_AGENT']) ? $_SERVER['HTTP_USER_AGENT'] : null;
		$this->self    = $_SERVER['PHP_SELF'];
		$this->server  = $_SERVER;
		$this->get     = $_GET;
		$this->post    = $_POST;
		$this->cookie  = $_COOKIE;
		$this->files   = $_FILES;
		$this->session = &$_SESSION;
		$this->query   = htmlspecialchars($this->query);
	}

	/**
	 * Extends the existing templates array - see get_templates()
	 *
	 * @param string $section Template group
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function add_templates($section)
	{
		$this->temps = array_merge($this->temps, $this->get_templates($section, 0));
	}

	/**
	 * Attempts to CHMOD a directory or file
	 *
	 * @param string $path Path to CHMOD
	 * @param int $mode New CHMOD value
	 * @param bool $recursive True for recursive
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.1.5
	 * @return void
	 **/
	function chmod($path, $mode, $recursive = false)
	{
		if (!$recursive || !is_dir($path)) {
			@chmod($path, $mode);
			return;
		}

		$dir = opendir($path);
		while (($file = readdir($dir)) !== false)
		{
			if(($file == '.') || ($file == '..')) {
				continue;
			}

			$fullpath = $path . '/' . $file;
			if(!is_dir($fullpath)) {
				@chmod($fullpath, $mode);
			} else {
				$this->chmod_r($fullpath, $mode);
			}
		}

		closedir($dir);
		@chmod($path, $mode);
	}

	/**
	 * Formats a string
	 *
	 * @param string $in Input
	 * @param int $options Options
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 3.0
	 * @return string Formatted string
	 **/
	function format($in, $options = 0)
	{
		if (!$options) {
			$options = FORMAT_BREAKS | FORMAT_HTMLCHARS | FORMAT_CENSOR;
		}

		if ($options & FORMAT_CENSOR) {
			if (!$this->replaces_loaded) {
				$this->get_replaces();
			}

			if ($this->censor) {
				$in = preg_replace($this->censor, '####', $in);
			}
		}

		if ($options & FORMAT_MBCODE) {
			$search = array(
				'~(^|\s)([a-z0-9-_.]+@[a-z0-9-.]+\.[a-z0-9-_.]+)~i',
				'~(^|\s)(http|https|ftp)://(\w+[^\s\[\]]+)~ise'
			);

			$replace = array(
				'\\1[email]\\2[/email]',
				'\'\\1[url]\' . wordwrap(\'\\2://\\3\', 1, \' \', 1) . \'[/url]\''
			);

			$brackets = (strpos($in, '[') !== false) && (strpos($in, ']') !== false);

			if ($brackets) {
				$b_search = array(
					'~\[code](.*?)\[/code]~ise',
					'~\[php](.*?)\[/php]~ise',
					'~\[php=([0-9]+?)](.*?)\[/php]~ise',
					'~\[img](http|https|ftp)://(.*?)\[/img]~ise',
					'~\[url](.*?)\[/url]~ise',
					'~\[url=(http|https|ftp)://(.+?)](.+?)\[/url]~ise'
				);

				$b_replace = array(
					'\'[code]\' . base64_encode(\'\\1\') . \'[/code]\'',
					'\'[php]\' . base64_encode(\'\\1\') . \'[/php]\'',
					'\'[php=\\1]\' . base64_encode(\'\\2\') . \'[/php]\'',
					'\'[img]\' . wordwrap(\'\\1://\\2\', 1, \' \', 1) . \'[/img]\'',
					'\'[url]\' . wordwrap(\'\\1\\2\', 1, \' \', 1) . \'[/url]\'',
					'\'[url=\' . wordwrap(\'\\1://\\2\', 1, \' \', 1) . \']\\3[/url]\''
				);

				$search  = array_merge($search, $b_search);
				$replace = array_merge($replace, $b_replace);
			}

			$in = preg_replace($search, $replace, $in);

			$brackets = (strpos($in, '[') !== false) && (strpos($in, ']') !== false); //We may have auto-parsed a URL, adding a bracket
		}

		$strtr = array();

		if ($options & FORMAT_HTMLCHARS) {
			$strtr['&'] = '&amp;';
			$strtr['"'] = '&quot;';
			$strtr['\''] = '&#039;';
			$strtr['<'] = '&lt;';
			$strtr['>'] = '&gt;';
		}

		if ($options & FORMAT_BREAKS) {
			$strtr["\n"] = "<br />\n";
		}

		if ($this->user['user_view_emoticons'] && ($options & FORMAT_EMOTICONS)) {
			if (!$this->replaces_loaded) {
				$this->get_replaces();
			}

			$strtr = array_merge($strtr, $this->emotes['replacement']);
		}

		$in = strtr($in, $strtr);

		if (($options & FORMAT_MBCODE) && $brackets) {
			$search = array(
				'~\[(/)?([bi])]~i',
				'~\[u]~i',
				'~\[s]~i',
				'~\[/[us]]~i',
				'~\[url](h t t p|h t t p s|f t p) : / /(.+?)\[/url]~ise',
				'~\[url=(h t t p|h t t p s|f t p) : / /(.+?)](.+?)\[/url]~ise',
				'~\[email]([a-z0-9-_.]+@[a-z0-9-.]+\.[a-z0-9-_.]+)?\[/email]~i',
				'~\[email=([^<]+?)](.*?)\[/email]~i',
				'~\[img](h t t p|h t t p s|f t p) : / /(.*?)\[/img]~ise',
				'~\[(right|center)](.*?)\[/\1]~is',
				'~\[code](.*?)\[/code]~ise',
				'~\[php](.*?)\[/php]~ise',
				'~\[php=([0-9]+?)](.*?)\[/php]~ise',
				'~\[color=([A-Za-z ]+?)](.*?)\[/color]~is',
				'~\[font=([A-Za-z ]+?)](.*?)\[/font]~is',
				'~\[size=([0-9]+?)](.*?)\[/size]~is'
			);

			$replace = array(
				'<\\1\\2>',
				'<span style=\'text-decoration:underline\'>',
				'<span style=\'text-decoration:line-through\'>',
				'</span>',
				'\'<a href="\' . str_replace(\' \', \'\', \'\\1://\\2\') . \'" onclick="window.open(this.href,\\\'' . $this->sets['link_target'] . '\\\');return false;">\' . str_replace(\' \', \'\', \'\\1://\\2\') . \'</a>\'',
				'\'<a href="\' . str_replace(\' \', \'\', \'\\1://\\2\') . \'" onclick="window.open(this.href,\\\'' . $this->sets['link_target'] . '\\\');return false;">\' . str_replace(\'\\"\', \'"\', \'\\3\') . \'</a>\'',
				'<a href="mailto:\\1">\\1</a>',
				'<a href="mailto:\\1">\\2</a>',
				'\'<img src="\' . str_replace(\' \', \'\', \'\\1://\\2\') . \'" alt="\' . str_replace(\' \', \'\', \'\\1://\\2\') . \'" />\'',
				'<div align="\\1">\\2</div>',
				'$this->format_code(\'\\1\', 0)',
				'$this->format_code(\'\\1\', 1)',
				'$this->format_code(\'\\2\', 1, \'\\1\')',
				'<span style=\'color:\\1\'>\\2</span>',
				'<span style=\'font-family:\\1\'>\\2</span>',
				'<span style=\'font-size:\\1ex\'>\\2</span>'
			);

			if ((substr_count($in, '[quote]') + substr_count($in, '[quote=')) == substr_count($in, '[/quote]')) {
				$search[] = '~\[quote=(.+?)]~i';
				$search[] = '~\[quote]~i';
				$search[] = '~\[/quote]~i';

				$replace[] = '<table style="width:90%; margin-left:5%; margin-right:5%;" border="0" cellpadding="3" cellspacing="0"><tr><td><b>\\1 ' . $this->lang->main_said . ':</b></td></tr><tr><td class="quote">';
				$replace[] = '<table style="width:90%; margin-left:5%; margin-right:5%;" border="0" cellpadding="3" cellspacing="0"><tr><td><b>' . $this->lang->main_quote . ':</b></td></tr><tr><td class="quote">';
				$replace[] = '</td></tr></table>';
			}

			$in = preg_replace($search, $replace, $in);
			$in = str_replace(array('  ', "\t", '&amp;#'), array('&nbsp; ', '&nbsp; &nbsp; ', '&#'), $in);
		}

		return $in;
	}

	/**
	 * Makes IE-generated HTML safe
	 *
	 * @param string $in Input
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 4.0
	 * @return string Corrected input
	 **/
	function format_html_mbcode($in)
	{
		// Remove JavaScript, etc
	}

	/**
	 * Formats code with line numbers and optionally syntax highlighting
	 *
	 * @param string $input Code to be formatted
	 * @param bool $php True to format as PHP
	 * @param int $start Starting line to count from
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string PHP-highlighted string
	 **/
	function format_code($input, $php, $start = 1)
	{
		$input = base64_decode($input);

		if (substr($input, 0, 1) != "\r") {
			$input = "\r\n" . $input;
		}

		if (substr($input, -1) != "\n") {
			$input .= "\r\n";
		}

		if ($php) {
			$title = 'PHP';

			if (strpos($input, '<' . '?') === false) {
				$input  = '<' . "?php $input ?" . '>';
				$tagged = true;
			}

			$input = str_replace(array('\"', '\\'), array('"', '&#092;'), $input);

			ob_start();

			@highlight_string($input);
			$input = ob_get_contents();

			ob_end_clean();
		} else {
			$input = htmlspecialchars(str_replace(array('\'', '\"'), array('&#039;', '"'), $input));
			$input = nl2br($input);

			$title = $this->lang->main_code;
		}

		if (isset($tagged)) {
			$input = str_replace(array('&lt;?php', '?&gt;'), '', $input);
		}

		$lines = explode('<br />', $input);
		$count = count($lines) - 1;

		if (isset($tagged)) {
			$lines[1] =  $lines[0] . $lines[1];
		}

		$lines[$count - 1] = $lines[$count - 1] . $lines[$count];

		$col1 = '';
		$col2 = '';

		for ($i = 1; $i < $count; $i++)
		{
			$col1 .= $start . '<br />';
			$col2 .= rtrim($lines[$i]) . '<br />';
			$start++;
		}

		$col2 = substr($col2, 0, -6);

		$return = "<div class='code'>";
		$return .= "<div class='codetitle'>$title:</div>";
		$return .= "<div class='codelines'>$col1</div>";
		$return .= "<div class='codedata'>$col2</div></div>";

		return $return;
	}

	/**
	 * Finds all subforums of $parent in $array
	 *
	 * @param array $array Array of forums from forum_grab()
	 * @param int $parent forum_id of a parent forum
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 4.0
	 * @return array Array of subforums
	 **/
	function forum_array($array, $parent)
	{
		$arr = array();
		for ($i = 0; $i < count($array); $i++)
		{
			if ($array[$i]['forum_parent'] == $parent) {
				$arr[] = $array[$i];
			}
		}
		return $arr;
	}

	/**
	 * Gets all forums and puts them in an array
	 *
	 * @param string $sort Field to sort by
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 4.0
	 * @return array Array of all existing forums to be passed to select_forums()
	 **/
	function forum_grab($sort = 'forum_position')
	{
		$forums = array();
		$q = $this->db->query('SELECT forum_id, forum_parent, forum_tree, forum_name, forum_position FROM ' . $this->pre . 'forums ORDER BY ' . $sort);

		while ($f = $this->db->nqfetch($q))
		{
			$forums[] = $f;
		}

		return $forums;
	}

	/**
	 * Generates a random pronounceable password
	 *
	 * @param int $length Length of password
	 * @author http://www.zend.com/codex.php?id=215&single=1
	 * @since 1.1.0
	 */
	function generate_pass($length)
	{
		$vowels = array('a', 'e', 'i', 'o', 'u');
		$cons = array('b', 'c', 'd', 'g', 'h', 'j', 'k', 'l', 'm', 'n', 'p', 'r', 's', 't', 'u', 'v', 'w', 'tr',
		'cr', 'br', 'fr', 'th', 'dr', 'ch', 'ph', 'wr', 'st', 'sp', 'sw', 'pr', 'sl', 'cl');

		$num_vowels = count($vowels);
		$num_cons = count($cons);

		$password = '';

		for ($i = 0; $i < $length; $i++)
		{
			$password .= $cons[rand(0, $num_cons - 1)] . $vowels[rand(0, $num_vowels - 1)];
		}

		return substr($password, 0, $length);
	}

	/**
	 * Retrieves message icons and puts them into a table as radio buttons
	 *
	 * @param string $select Icon to select
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return string HTML-formatted message icons
	 **/
	function get_icons($select = -1)
	{
		$i     = 0;
		$icons = array();
		$dir   = opendir("./skins/$this->skin/mbicons");

		while (($file = readdir($dir)) !== false)
		{
			$ext = substr($file, -4);

			if ((($ext == '.gif') || ($ext == '.jpg') || ($ext == '.png')) && !is_dir("./skins/$this->skin/mbicons/$file")) {
				$icons[$i] = $file;
				$i++;
			}
		}

		closedir($dir);
		natsort($icons);

		$msgicons = null;
		$i        = 0;

		foreach ($icons as $icon)
		{
			if (($i % 8 == 0) && ($i != 0)) {
				$msgicons .= "\n</tr><tr>\n\n";
			}

			$msgicons .= "\n<td><input type='radio' name='icon' id='icon$i' value='$icon'" . (($select == $icon) ? ' checked=\'checked\'' : null) . " /><label for='icon$i'><img src='./skins/$this->skin/mbicons/$icon' alt='Message Icon' /></label>&nbsp;</td>";
			$i++;
		}
		return $msgicons;
	}

	/**
	 * Loads a user_language. Bet you couldn't figure that out...
	 *
	 * @param string $lang Language to load
	 * @param string $a Word set to load
	 * @param string $path Path to the user_languages directory
	 * @param bool $main Load main universal strings
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 3.0
	 * @return object Language
	 **/
	function get_lang($lang, $a = null, $path = './', $main = true)
	{
		if (isset($this->get['lang'])) {
			$lang = $this->get['lang'];
		}

		if (strstr($lang, '/') || !file_exists($path . 'languages/' . $lang . '.php')) {
			$lang = 'en';
		}

		include $path . 'languages/' . $lang . '.php';
		$obj = new $lang();

		if ($a) {
			$obj->$a();
		}

		if ($main) {
			$obj->main();
		}

		return $obj;
	}

	function get_lang_name($code)
	{
		$code = strtolower($code);

		switch($code)
		{
		case 'bg': return 'Bulgarian'; break;
		case 'zh': return 'Chinese'; break;
		case 'cs': return 'Czech'; break;
		case 'nl': return 'Dutch'; break;
		case 'en': return 'English'; break;
		case 'fi': return 'Finnish'; break;
		case 'fr': return 'French'; break;
		case 'de': return 'German'; break;
		case 'he': return 'Hebrew'; break;
		case 'hu': return 'Hungarian'; break;
		case 'id': return 'Indonesian'; break;
		case 'it': return 'Italian'; break;
		case 'no': return 'Norwegian'; break;
		case 'pt': return 'Portuguese'; break;
		case 'ru': return 'Russian'; break;
		case 'sk': return 'Slovak'; break;
		case 'es': return 'Spanish'; break;
		case 'sv': return 'Swedish'; break;
		default: return $code; break;
		}
	}

	/**
	 * Gets information about a member's level and title
	 *
	 * @param int $posts Member's post count
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return array Array of information about the member:<br /><i>string user_title</i> - default member title for that post count<br /><i>int user_level</i> - default member level for that post count
	 **/
	function get_level($posts)
	{
		$memtitle = array(
			'user_title' => '',
			'user_level' => '0'
		);

		$titles = $this->db->query("SELECT * FROM {$this->pre}membertitles WHERE membertitle_posts <= $posts ORDER BY membertitle_posts");

		while ($title = $this->db->nqfetch($titles))
		{
			if ($posts >= $title['membertitle_posts']) {
				$memtitle['user_title'] = $title['membertitle_title'];
				$memtitle['user_level'] = $title['membertitle_id'];
			} else {
				break;
			}
		}

		return $memtitle;
	}

	/**
	 * Retrieves the current server load
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return int Server load
	 **/
	function get_load()
	{
		if (get_cfg_var('safe_mode') || stristr(PHP_OS, 'WIN')) {
			return 0;
		}

		if (@file_exists('/proc/loadavg')) {
			$file = @fopen('/proc/loadavg', 'r');

			if (!$file) {
				return 0;
			}

			$load = explode(' ', fread($file, 6));
			fclose($file);
		} else {
			$load = @exec('uptime');

			if (!$load) {
				return 0;
			}

			$load = split('load averages?: ', $load);
			$load = explode(',', $load[1]);
		}

		return trim($load[0]);
	}

	/**
	 * Retrieves the number of personal messages the user has received
	 *
	 * @param bool $seen True to retreive all messages, false to retrieve only unread messages
	 * @param int $folder The folder to check user_pms for
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return int Count of personal messages
	 **/
	function get_messages($seen = false, $folder = 0)
	{
		$count = $this->db->fetch("SELECT COUNT(pm_id) AS messages FROM {$this->pre}pmsystem WHERE pm_to={$this->user['user_id']} AND pm_folder=$folder" . (!$seen ? " AND pm_read=0" : null));
		return $count['messages'];
	}

	/**
	 * Creates HTML-formatted page numbers
	 *
	 * @param mixed $rows Can be either a resource, query, or number; number of total entries for pagination
	 * @param string $link Query string to attach to link
	 * @param int $min First entry to display
	 * @param int $num Number of entries per page
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 1.0
	 * @return string HTML-formatted page numbers
	 **/
	function get_pages($rows, $link, $min = 0, $num = 10)
	{
		if (!$num) {
			$num = 10;
		}

		// preliminary row handling
		if (!is_resource($rows)) {
			if (!is_numeric($rows)) {
				$rows = $this->db->num_rows($this->db->query($rows));
			}
		} else {
			$rows = $this->db->num_rows($records);
		}

		// some base variables
		$current = ceil($min / $num);
		$string  = null;
		$pages   = ceil($rows / $num);
		$end     = ($pages - 1) * $num;

		// check if there's previous articles
		if ($min == 0) {
			$startlink = '&lt;&lt;';
			$previouslink = $this->lang->main_prev;
		} else {
			$startlink = "<a class='pagelinks' href='$this->self?$link&amp;min=0&amp;num=$num'>&lt;&lt;</a>";
			$prev = $min - $num;
			$previouslink = "<a class='pagelinks' href='$this->self?$link&amp;min=$prev&amp;num=$num'>{$this->lang->main_prev}</a> ";
		}

		// check for next/end
		if (($min + $num) < $rows) {
			$next = $min + $num;
  			$nextlink = "<a class='pagelinks' href='$this->self?$link&amp;min=$next&amp;num=$num'>{$this->lang->main_next}</a>";
  			$endlink = "<a class='pagelinks' href='$this->self?$link&amp;min=$end&amp;num=$num'>&gt;&gt;</a>";
		} else {
  			$nextlink = $this->lang->main_next;
  			$endlink = '&gt;&gt;';
		}

		// setup references
		$b = $current - 2;
		$e = $current + 2;

		// set end and beginning of loop
		if ($b < 0) {
  			$e = $e - $b;
  			$b = 0;
		}

		// check that end coheres to the issues
		if ($e > $pages - 1) {
  			$b = $b - ($e - $pages + 1);
  			$e = ($pages - 1 < $current) ? $pages : $pages - 1;
  			// b may need adjusting again
  			if ($b < 0) {
				$b = 0;
			}
		}

 		// ellipses
		if ($b != 0) {
			$badd = '...';
		} else {
			$badd = '';
		}

		if (($e != $pages - 1) && $rows) {
			$eadd = '...';
		} else {
			$eadd = '';
		}

		// run loop for numbers to the page
		for ($i = $b; $i < $current; $i++)
		{
			$where = $num * $i;
			$string .= ", <a class='bodylinktype' href='$this->self?$link&amp;min=$where&amp;num=$num'>" . ($i + 1) . '</a>';
		}

		// add in page
		$string .= ', <b>' . ($current + 1) . '</b>';

		// run to the end
		for ($i = $current + 1; $i <= $e; $i++)
		{
			$where = $num * $i;
			$string .= ", <a class='bodylinktype' href='$this->self?$link&amp;min=$where&amp;num=$num'>" . ($i + 1) . '</a>';
		}

		// get rid of preliminary comma. (optimized by jason: mark uses preg_replace() like candy)
		if (substr($string, 0, 1) == ',') {
			$string = substr($string, 1);
		}

		return "<span class='pagelinks'>$startlink $previouslink $badd $string $eadd $nextlink $endlink</span>";
	}

	/**
	 * Creates HTML-formatted page numbers for topics - see get_pages()
	 *
	 * @param int $records Number of replies in the topic
	 * @param int $link Query string to attach to link
	 * @param string $sep Separator for pages
	 * @param int $min First entry to display
	 * @param int $n Number of entries to display
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 2.0
	 * @return
	 **/
	function get_pages_topic($records, $link, $sep, $min = 0, $n = 10)
	{
		$records++;
		$pages    = ceil($records / $n);
		$max_page = ($pages - 1) * $n;

		if ($pages == 1) {
			return null;
		}

		$pagelinks = null;
		if ($pages > 3) {
			$countfor = 3;
		} else {
			$countfor = $pages;
		}

		for ($i = 0; $i < $countfor; $i++)
		{
			$minpag = $i * $n;
			$page   = $i + 1;
			$pagelinks .= "<a href='$this->self?$link&amp;min=$minpag&amp;num=$n' class='pages'>$page</a>{$sep}";
		}

		if (substr($pagelinks, -(strlen($sep))) == $sep) {
			$pagelinks = substr($pagelinks, 0, -(strlen($sep)));
		}

		if ($pages > 3) {
			$ellipsis = ($pages == 4) ? '' : '..';
			$pagelinks .= "$sep<a href='$this->self?$link&amp;min=$max_page&amp;num=$n' class='pages'>{$ellipsis}{$pages}</a>";
		}

		$pagelinks = "( $pagelinks )";

		return $pagelinks;
	}

	/**
	 * Loads emoticon and censor information from the replacements table
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return void
	 **/
	function get_replaces()
	{
		$this->replaces_loaded = true;

		$replace = $this->db->query("SELECT * FROM {$this->pre}replacements ORDER BY LENGTH(replacement_search) DESC");
		while ($r = $this->db->nqfetch($replace))
		{
			if ($r['replacement_type'] == 'emoticon') {
				$this->emotes['replacement'][$r['replacement_search']] = "<img src='./skins/$this->skin/emoticons/{$r['replacement_replace']}' alt='{$r['replacement_search']}' />";

				if ($r['replacement_clickable']) {
					$this->emotes['replacement_clickable'][$r['replacement_search']] = "<img src='./skins/$this->skin/emoticons/{$r['replacement_replace']}' alt='{$r['replacement_search']}' />";
				}
			} elseif ($r['replacement_type'] == 'censor') {
				$this->censor[] = '/' . $r['replacement_search'] . '/i';
			}
		}
	}

	/**
	 * Loads settings
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.1.0
	 * @return array Settings
	 **/
	function get_settings($sets)
	{
		$settings = $this->db->fetch("SELECT settings_data FROM {$this->pre}settings LIMIT 1");

		return array_merge($sets, unserialize($settings['settings_data']));
	}

	/**
	 * Loads templates into an array, replacing {{var}} with $var
	 *
	 * @param string $a Template group
	 * @param bool $getMain Load the standard set of templates
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return mixed Array of templates on success, error message on failure
	 **/
	function get_templates($a, $getMain = true)
	{
		if (!$this->perms->auth('is_admin')) {
			$admin_replace = '';
		} else {
			$admin_replace = '\\1';
		}

		if ($getMain) {
			$temp_query = $this->db->query("SELECT template_name, template_html FROM {$this->pre}templates WHERE template_skin='$this->skin' AND (template_set='Main' OR template_set='$a')");
		} else {
			$temp_query = $this->db->query("SELECT template_name, template_html FROM {$this->pre}templates WHERE template_skin='$this->skin' AND template_set='$a'");
		}

		while ($template = $this->db->nqfetch($temp_query))
		{
			$template['template_html'] = preg_replace('~<IF (.*?)(?<!\-)>(.*?)</IF>~se', '$this->get_templates_callback(\'\\1\', \'\\2\', $template[\'template_name\'])', $template['template_html']);
			$templates[$template['template_name']] = $template['template_html'];
		}

		$dir = file_exists('./skins/' . $this->skin) && is_dir('./skins/' . $this->skin);

		if (isset($templates) && $dir) {
//			$templates = preg_replace('~<ADMIN>(.*)</ADMIN>~', $admin_replace, $templates);
			$templates = str_replace(array('\\', '"', '\\$'), array('\\\\', '\\"', '\\\\$'), $templates);

			return $templates;
		} else {
			if ($dir) {
				error(MERCURY_ERROR, "Template set not found in database: $a", __FILE__, __LINE__);
			} else {
				error(MERCURY_ERROR, "Template set not found in database: $a<br />Skin not found in the skins directory: $this->skin", __FILE__, __LINE__);
			}
		}
	}

	/**
	 * Stores if statements into an array (performance speed-up)
	 *
	 * @param string if statements
	 * @param string string to use if condition is true
	 * @param string template
	 * @author Inverno
	 * @return string replace if statements with a var
	 **/
	function get_templates_callback($condition, $code, $piece)
	{
		$macro_id = isset($this->macro[$piece]) ? count($this->macro[$piece]) : 0;
		$this->macro[$piece][$macro_id] = '$macro_replace[' . $macro_id . '] = ((' . $condition . ') ? "' . $code . '" : ""); ';
		return '{' . chr(36) . 'macro_replace[' . $macro_id . ']}';
	}

	/**
	 * Determines if a user has been banned
	 *
	 * @return bool True if the user is banned, false if the user is not
	 **/
	function is_banned()
	{
		//Ban by user group
		if (!$this->perms->auth('do_anything')) {
			return true;
		}

		//Ban by IP
		if ($this->sets['banned_ips']) {
			foreach ($this->sets['banned_ips'] as $ip)
			{
				if (preg_match("/$ip/", $this->ip)) {
					return true;
				}
			}
		}

		return false;
	}

	/**
	 * Generates clickable emoticon HTML
	 *
	 * @param int $per_row Smilies to show per row
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 3.0
	 * @return string HTML
	 **/
	function make_clickable($per_row)
	{
		$return = null;
		$x = 0;

		if (!$this->replaces_loaded) {
			$this->get_replaces();
		}

		foreach ($this->emotes['replacement_clickable'] as $search => $replace)
		{
			if (!$x) {
				$return .= "\n<tr>";
			}

			$return .= "\n<td align='center' class='tablelight'><a href='#' onclick=\"return insertSmiley('{$search}')\">{$replace}</a></td>";

			if ($x == $per_row - 1) {
				$return .= "\n</tr>";
				$x = 0;
			} else {
				$x++;
			}
		}

		if ($x && ($x < $per_row)) {
			while ($x < $per_row)
			{
				$return .= "\n<td class='tablelight'>&nbsp;</td>";
				$x++;
			}
			$return .= "\n</tr>";
		}

		return $return;
	}

	/**
	 * Used as a replacement for date() which deals with time zones
	 *
	 * @param mixed $format Date format using date() keywords. Either a date constant or a string.
	 * @param int $time Timestamp. If left out, uses current time
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return string Human-readable, formatted Unix timestamp
	 **/
	function mbdate($format, $time = 0)
	{
		if (!$time) {
			$time = $this->time;
		}

		$adjust = ($this->user['user_timezone'] - $this->sets['servertime']) * 3600;
		$time += $adjust;

		if (is_int($format)) {
			switch($format)
			{
			case DATE_LONG:
				$date_format = 'M j, Y';
				$time_format = ', g:i a';
				break;

			case DATE_SHORT:
				$date_format = 'n/j/y';
				$time_format = ', g:i a';
				break;

			case DATE_ONLY_LONG:
				$date_format = 'M j, Y';
				$time_format = '';
				break;

			case DATE_TIME:
				$date_format = '';
				$time_format = 'g:i a';
				break;

			default: // DATE_ONLY_SHORT
				$date_format = 'n/j/y';
				$time_format = '';
				break;
			}

			if ($date_format) {
				$date = date($date_format, $time);
				$usertime = $this->time + $adjust;

				if ($date == date($date_format, $usertime)) {
					$date = $this->lang->today;
				} elseif ($date == date($date_format, strtotime('-1 day', $usertime))) {
					$date = $this->lang->yesterday;
				}
			} else {
				$date = '';
			}

			return $date . date($time_format, $time);
		} else {
			return date($format, $time);
		}
	}

	/**
	 * Formats a message, error, or notice
	 *
	 * @param string $title Title of the message
	 * @param string $message Text of the message
	 * @param string $link_text Text for a link
	 * @param string $link Destination for a link
	 * @param string $redirect Target for an automated redirect
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return string HTML-formatted message
	 **/
	function message($title, $message, $link_text = null, $link = null, $redirect = null)
	{
		if ($link_text) {
			$message .= "<br /><br /><a href='$link'>$link_text</a>";
		}

		if ($redirect) {
			@header('Refresh: 4;url=' . $redirect);
		}

		return eval($this->template('MAIN_MESSAGE'));
	}

	/**
	 * Selects a post editing template
	 *
	 * @param int $f Forum to test moderator abilities in
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 4.0
	 * @return array Moderator permissions
	 **/
	function post_box()
	{
		return 'POST_BOX_PLAIN'; // Not quite ready for Beta 4

		if (preg_match('/MSIE ([0-9]\.[0-9]{1,2})/', $this->agent, $browser)) {
			if (floor($browser[1]) >= 4) {
				if (!isset($this->get['rich'])) { //if ($this->user['post_style'] == 'rich') {
					return 'POST_BOX_RICH';
				} else {
					return 'POST_BOX_PLAIN';
				}
			}
		} else {
			return 'POST_BOX_PLAIN';
		}
	}

	/**
	 * Checks for quote tag formatting
	 *
	 * @param string $in Input
	 * @author Jared Kuolt <jared.kuolt@gmail.com>
	 * @since 1.1.3
	 * @return bool Returns true if all quote tags have corresponding end tags
	 **/
	function quote_check($in)
	{
		$preg_begin = array();

		preg_match_all('#\[quote=(.+?)]#i', $in, $out, PREG_PATTERN_ORDER);

		if (!empty($out[0])) {
			foreach ($out[0] as $match)
			{
				$preg_begin[] = strpos($in, $match);
			}
		}

		$begin = $this->strpos_array($in, '[quote]'); // Retrieve array for tag beginning
		$begin = array_merge($begin, $preg_begin); // Add those with preg_match'd quotes
		sort($begin);

		$end = $this->strpos_array($in, '[/quote]');

		if (count($begin) != count($end)) { // If the counts don't match, return value is false
			return false;
		}

		foreach ($begin as $count => $pos) // Check each occurence
		{
			if ($pos > $end[$count]) { // If position of the same occurence count of end tag
				return false; // is before the begin tag, return value is false
			}
		}

		return true;
	}

	function select_avatars($current)
	{
		$out = null;
		$dir = opendir('./avatars');

		while (($file = readdir($dir)) !== false)
		{
			if (is_dir('./avatars/' . $file)) {
				continue;
			}

			$split = explode('.', $file);
			$ext   = array_pop($split);
			if (($ext != 'jpg')
			&& ($ext != 'jpeg')
			&& ($ext != 'gif')
			&& ($ext != 'png')) {
				continue;
			}

			$out .= "<option value='./avatars/$file'" . (("./avatars/$file" == $current) ? ' selected=\'selected\'' : null) . '>' . implode('.', $split) . "</option>\n";
		}

		return $out;
	}

	function select_days($day)
	{
		$i   = 1;
		$out = "<option value='00'></option>\n";

		while ($i <= 31)
		{
			$out .= "<option value='$i'" . (($i == $day) ? ' selected=\'selected\'' : null) . ">$i</option>\n";
			$i++;
		}

		return $out;
	}

	/**
	 * Options for an HTML select box (all forums in correct order)
	 *
	 * @param array $array Array of forums
	 * @param int $select Option to set as selected (-1 for all)
	 * @param int $parent Used to degredate down through the recursive loop
	 * @param string $space Used to increment the spacing before the text in the box
	 * @param bool $identify_category Set to true to place a period before the value of a category
	 * @author Mark Elliot <mark.elliot@mercuryboard.com>
	 * @since Beta 4.0
	 * @return string Options for an HTML select box (all forums in correct order)
	 **/
	function select_forums($array, $select = 0, $parent = 0, $space = '', $identify_category = false)
	{
		$arr = $this->forum_array($array, $parent);

		$return = null;
		foreach ($arr as $val)
		{
			if (!$this->perms->auth('forum_view', $val['forum_id'])) {
				continue;
			}

			if ($identify_category && !$val['forum_parent']) {
				$dot = '.';
			} else {
				$dot = null;
			}

			if (($val['forum_id'] != $select) && ($select != -1)) {
				$selected = null;
			} else {
				$selected = ' selected=\'selected\'';
			}

			$return .= '<option value="' . $dot . $val['forum_id'] . '"' . $selected . '>' . $space . $val['forum_name'] . "</option>\n" .
			$this->select_forums($array, $select, $val['forum_id'], $space . '&nbsp; &nbsp;');
		}

		return $return;
	}

	function select_groups($val, $custom_only = false)
	{
		if ($custom_only) {
			$groups = $this->db->query('SELECT group_name, group_id FROM ' . $this->pre . 'groups WHERE group_type="" ORDER BY group_name');
		} else {
			$groups = $this->db->query('SELECT group_name, group_id FROM ' . $this->pre . 'groups ORDER BY group_name');
		}

		$out = null;

		while ($group = $this->db->nqfetch($groups))
		{
			$out .= "<option value='{$group['group_id']}'" . (($val == $group['group_id']) ? ' selected=\'selected\'' : '') . ">{$group['group_name']}</option>";
		}

		return $out;
	}

	function select_langs($current, $relative = '.')
	{
		$out   = null;
		$langs = array();
		$dir   = opendir($relative . '/languages');

		while (($file = readdir($dir)) !== false)
		{
			if (is_dir($relative . '/languages/' . $file)) {
				continue;
			}

			$code = substr($file, 0, -4);
			$ext  = substr($file, -4);
			if ($ext != '.php') {
				continue;
			}

			$langs[$code] = $this->get_lang_name($code);
		}

		asort($langs);

		foreach ($langs as $code => $name)
		{
			$out .= "<option value='$code'" . (($code == $current) ? ' selected=\'selected\'' : null) . ">$name</option>\n";
		}

		return $out;
	}

	function select_months($mon)
	{
		$i   = 1;
		$out = null;

		$month = array(
			'00' => '',
			'1'  => $this->lang->cp_jan,
			'2'  => $this->lang->cp_feb,
			'3'  => $this->lang->cp_mar,
			'4'  => $this->lang->cp_apr,
			'5'  => $this->lang->cp_may,
			'6'  => $this->lang->cp_june,
			'7'  => $this->lang->cp_july,
			'8'  => $this->lang->cp_aug,
			'9'  => $this->lang->cp_sept,
			'10' => $this->lang->cp_oct,
			'11' => $this->lang->cp_nov,
			'12' => $this->lang->cp_dec
		);

		foreach ($month as $digit => $name)
		{
			$out .= "<option value='$digit'" . (($digit == $mon) ? ' selected=\'selected\'' : null) . ">$name</option>\n";
		}

		return $out;
	}

	/**
	 * Generates a select box of skins
	 *
	 * @param string $skin user_skin to select
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 4.0
	 * @return string HTML
	 **/
	function select_skins($skin)
	{
		$out = null;

		$query = $this->db->query("SELECT * FROM {$this->pre}skins");
		while ($s = $this->db->nqfetch($query))
		{
			if ($s['skin_dir'] == 'default') {
				$s['skin_name'] .= ' (default)';
			}
			$out .= "<option value='{$s['skin_dir']}'" . (($s['skin_dir'] == $skin) ? ' selected=\'selected\'' : null) . ">{$s['skin_name']}</option>\n";
		}

		return $out;
	}

	function select_timezones($zone)
	{
		$out = null;

		$zones = array(
			'-12'   => $this->lang->cp_gmt_nev12,
			'-11'   => $this->lang->cp_gmt_nev11,
			'-10'   => $this->lang->cp_gmt_nev10,
			'-9'    => $this->lang->cp_gmt_nev9,
			'-8'    => $this->lang->cp_gmt_nev8,
			'-7'    => $this->lang->cp_gmt_nev7,
			'-6'    => $this->lang->cp_gmt_nev6,
			'-5'    => $this->lang->cp_gmt_nev5,
			'-4'    => $this->lang->cp_gmt_nev4,
			'-3.5'  => $this->lang->cp_gmt_nev35,
			'-3'    => $this->lang->cp_gmt_nev3,
			'-2'    => $this->lang->cp_gmt_nev2,
			'-1'    => $this->lang->cp_gmt_nev1,
			'0'     => $this->lang->cp_gmt,
			'1'     => $this->lang->cp_gmt_pos1,
			'2'     => $this->lang->cp_gmt_pos2,
			'3'     => $this->lang->cp_gmt_pos3,
			'3.5'   => $this->lang->cp_gmt_pos35,
			'4'     => $this->lang->cp_gmt_pos4,
			'4.5'   => $this->lang->cp_gmt_pos45,
			'5'     => $this->lang->cp_gmt_pos5,
			'5.5'   => $this->lang->cp_gmt_pos55,
			'6'     => $this->lang->cp_gmt_pos6,
			'7'     => $this->lang->cp_gmt_pos7,
			'8'     => $this->lang->cp_gmt_pos8,
			'9'     => $this->lang->cp_gmt_pos9,
			'9.5'   => $this->lang->cp_gmt_pos95,
			'10'    => $this->lang->cp_gmt_pos10,
			'11'    => $this->lang->cp_gmt_pos11,
			'12'    => $this->lang->cp_gmt_pos12
		);

		foreach ($zones as $offset => $zone_name)
		{
			$out .= "<option value='$offset'" . (($offset == $zone) ? ' selected=\'selected\'' : null) . ">$zone_name</option>\n";
		}

		return $out;
	}

	function select_years($year)
	{
		$thisyear = $this->mbdate('Y');
		$i        = $thisyear;
		$out      = "<option value='0000'></option>\n";

		while ($i >= $thisyear-100)
		{
			$out .= "<option value='$i'" . (($i == $year) ? ' selected=\'selected\'' : null) . ">$i</option>\n";
			$i--;
		}

		return $out;
	}

	/**
	 * Sets magic_quotes_gpc to on
	 *
	 * @param array $array Array to addslashes()
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 4.0
	 * @return void
	 **/
	function set_magic_quotes_gpc(&$array)
	{
		$keys = array_keys($array);
		for($i = 0; $i < count($array); $i++)
		{
			if (is_array($array[$keys[$i]])) {
				$this->set_magic_quotes_gpc($array[$keys[$i]]);
			} else {
				$array[$keys[$i]] = addslashes($array[$keys[$i]]);
			}
		}
	}

	/**
	 * Sets the title of the page
	 *
	 * @param string $title The title
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function set_title($title)
	{
		$this->title = "{$this->sets['forum_name']} - $title";
	}

	/**
	 * Handles debug information when $debug is set in the query string
	 *
	 * @param int $load Server load
	 * @param int $totaltime Time to execute the board
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.0
	 * @return void
	 **/
	function show_debug($load, $totaltime)
	{
		include './func/debug.php';

		return $out; // This is set in debug.php
	}

	/**
	 * Returns an array of all the positions of needles in a haystack
	 *
	 * @param string $haystack Haystack
	 * @param string $needle Needle
	 * @author Jared Kuolt <jared.kuolt@gmail.com>
	 * @since 1.1.3
	 * @return array Array of positions of needles
	 **/
	function strpos_array($haystack, $needle)
	{
		$array  = array();
		$kill   = false;
		$offset = 0;

		while (!$kill)
		{
			$result = strpos($haystack, $needle, $offset);

			if ($result === false) { // If result is false (no more instances found), kill the while loop
				$kill = true;
			} else {
				$array[] = $result; // Set array
				$offset = $result + 1; // Offset is set 1 character after previous occurence
			}
		}

		return $array;
	}

	/**
	 * Returns a parsed template, for use in eval()
	 *
	 * @param string $piece Template name
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @author Inverno
	 * @since Beta 1.0
	 * @return string if statements to eval + Parsed HTML template
	 **/
	function template($piece)
	{
		if (!isset($this->temps[$piece])) {
			error(E_USER_ERROR, "Template not found: $piece", __FILE__, __LINE__);
		}

		$macro_output = "\$macro_replace = array(); ";

		if (isset($this->macro[$piece])) {
			foreach ($this->macro[$piece] as $macro_id => $macro_code) {
				$macro_output .= $macro_code;
			}
		}
		if ($this->sets['html_comments']) {
			return "$macro_output return \"<!-- START: $piece -->\r\n{$this->temps[$piece]}\r\n<!-- END: $piece -->\r\n\";";
		}
		return "$macro_output return \"{$this->temps[$piece]}\r\n\";";
	}

	/**
	 * Adds an entry to the navigation tree
	 *
	 * @param string $label Label for the tree entry
	 * @param string $link URL to link to
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return void
	 **/
	function tree($label, $link = null)
	{
		$this->tree .= ' <b>&raquo;</b> ' . ($link ? "<a href='$link'>$label</a>" : $label);
	}

	/**
	 * Traces a forum back to the parent category and adds entries to the tree - see tree()
	 *
	 * @param int $f Forum to generate tree for
	 * @param bool $linklast True to make the last entry a link (default is false)
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return void
	 **/
	function tree_forums($f, $linklast = false)
	{
		$forums = $this->db->query("SELECT forum_tree, forum_id, forum_name FROM {$this->pre}forums ORDER BY forum_id");

		while ($forum = $this->db->nqfetch($forums))
		{
			if (!$this->perms->auth('forum_view', $forum['forum_id'])) {
				continue;
			}

			$id         = $forum['forum_id'];
			$fid[$id]   = $forum['forum_id'];
			$ftree[$id] = $forum['forum_tree'];
			$fname[$id] = $forum['forum_name'];
		}

		if (!isset($ftree[$f])) { //error? lets get out while we can
			return;
		}

		$cat = 1; //first forum is always a category
		$ft  = explode(',', $ftree[$f]);
		foreach ($ft as $i)
		{
			if ($i) {
				if (!$cat) {
					$this->tree($fname[$i], "$this->self?a=forum&amp;f={$fid[$i]}");
				} else {
					$this->tree($fname[$i], "$this->self?c={$fid[$i]}");
					$cat = 0;
				}
			}
		}

		if (!$linklast) {
			$this->tree($fname[$f]);
		} else {
			$this->tree($fname[$f], "$this->self?a=forum&amp;f={$fid[$f]}");
		}
	}

	/**
	 * Uploads a file
	 *
	 * @param array $file Post-uploaded file
	 * @param string $destination Where to put the uploaded file
	 * @param int $max_size Maximum file size to accept, in bytes
	 * @param array $allowed_types File extensions to allow
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 3.0
	 * @return int Result of the upload attempt
	 **/
	function upload($file, $destination, $max_size, $allowed_types)
	{
		if ($file['size'] > $max_size) {
			return UPLOAD_TOO_LARGE;
		}

		$temp = explode('.', $file['name']);
		$ext = strtolower(end($temp));

		if (!in_array($ext, $allowed_types)) {
			return UPLOAD_NOT_ALLOWED;
		}

		if (is_uploaded_file($file['tmp_name'])) {
			$result = @move_uploaded_file($file['tmp_name'], str_replace('\\', '/', $destination));
			if ($result) {
				return UPLOAD_SUCCESS;
			}
		}

		return UPLOAD_FAILURE;
	}

	/**
	 * Saves all data in the $this->sets array into a file
	 *
	 * @param string $sfile File to write settings into (default is settings.php)
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since 1.1.0
	 * @return bool True on success, false on failure
	 **/
	function write_db_sets($sfile = './settings.php')
	{
		$settings = "<?php\n\$set = array();\n";

		$db_settings = array(
			'db_host'   => $this->sets['db_host'],
			'db_name'   => $this->sets['db_name'],
			'db_pass'   => $this->sets['db_pass'],
			'db_port'   => $this->sets['db_port'],
			'db_socket' => $this->sets['db_socket'],
			'db_user'   => $this->sets['db_user'],
			'dbtype'    => $this->sets['dbtype'],
			'prefix'    => $this->sets['prefix'],
			'installed' => $this->sets['installed']
		);

		foreach ($db_settings as $set => $val)
		{
			$settings .= "\$set['$set'] = '" . str_replace(array('\\', '\''), array('\\\\', '\\\''), $val) . "';\n";
		}

		$settings .= '?' . '>';

		$this->chmod($sfile, 0777);
		$fp = @fopen($sfile, 'w');

		if (!$fp) {
			return false;
		}

		if (!@fwrite($fp, $settings)) {
			return false;
		}

		fclose($fp);

		return true;
	}

	/**
	 * Saves all data in the $this->sets array to the database
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 2.1
	 * @return void
	 **/
	function write_sets()
	{
		$db_settings = array(
			'db_host',
			'db_name',
			'db_pass',
			'db_port',
			'db_socket',
			'db_user',
			'dbtype',
			'prefix',
			'installed'
		);

		$sets = array();
		foreach ($this->sets as $set => $val)
		{
			if (!in_array($set, $db_settings)) {
				$sets[$set] = $val;
			}
		}

		$sets = addslashes(serialize($sets));
		$this->db->query("UPDATE {$this->pre}settings SET settings_data='$sets'");
	}
}

/**
 * Handles error messages
 *
 * @param int $type The error code
 * @param string $message A string describing the error
 * @param string $file The filename in which the error occurred
 * @param int $line The line number on which the error occurred
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 2.0
 * @return void
 **/
function error($type, $message, $file = null, $line = 0)
{
	if (isset($_GET['debug']) || function_exists('error_fatal') || !(error_reporting() & $type)) {
		return;
	}

	$include = './lib/error.php';
	if (!file_exists($include)) {
		$include = '.' . $include; // Admin Center errors
	}

	include $include;

	switch($type)
	{
	// Triggered MercuryBoard errors
	case MERCURY_ERROR:
		exit(error_warning($message, $file, $line));
		break;

	// Triggered MercuryBoard notices and alerts
	case MERCURY_NOTICE:
		exit(error_notice($message));
		break;

	// Database errors
	case MERCURY_QUERY_ERROR:
		exit(error_fatal($type, $message, $file, $line));
		break;

	// PHP errors
	default:
		exit(error_fatal($type, $message, $file, $line));
		break;
	}
}
?>