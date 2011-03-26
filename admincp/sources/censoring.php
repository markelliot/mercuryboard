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
 * $Id: censoring.php,v 1.8 2004/08/15 05:05:19 jason Exp $
 **/

require './common.php';

/**
 * Word censoring controls
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since Beta 3.0
 **/
class censoring extends admin
{
	/**
	 * Provides controls for censoring words
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since Beta 3.0
	 * @return string HTML form or message
	 **/
	function execute()
	{
		$this->set_title('Censor Words');
		$this->tree('Censor Words');

		if (!isset($this->post['submit'])) {
			$words = null;

			$query = $this->db->query("SELECT * FROM {$this->pre}replacements WHERE replacement_type='censor' ORDER BY replacement_id");
			while ($word = $this->db->nqfetch($query))
			{
				$words .= str_replace('(.*?)', '*', $word['replacement_search']) . "\n";
			}

			$words = rtrim($words);

			return "
			$this->table
			<form action='$this->self?a=censoring' method='post'>
			<tr>
				<td class='header'>Censor Words</td>
			</tr>
			<tr>
				<td class='tablelight' valign='top' align='center'>
					<span class='med'>Censor Words</span><br /><br />
					One per line.<br />
					You can use * as a wildcard for one or more characters.<br />
					<i>Hell</i> automatically matches <i>hello</i> and <i>HeLL</i>.<br /><br />
					<textarea name='words' rows='15' cols='70' class='input'>$words</textarea>
				</td>
			</tr>
			<tr>
				<td class='footer' align='center'><input type='submit' name='submit' value='Submit'></td>
			</tr>
			</form>
			$this->etable";
		} else {
			$words = preg_replace('/[^a-zA-Z0-9\s\*"\'=]/', '', $this->post['words']);
			$words = str_replace('*', '(.*?)', $words);
			$words = explode("\n", $words);

			$this->db->query("DELETE FROM {$this->pre}replacements WHERE replacement_type='censor'");

			foreach ($words as $word)
			{
				$word = addslashes(trim($word));
				if ($word) {
					$this->db->query("INSERT INTO {$this->pre}replacements (replacement_search, replacement_replace, replacement_type) VALUES ('$word', '', 'censor')");
				}
			}

			return $this->message('Censor Words', 'Word list updated.');
		}
	}
}
?>