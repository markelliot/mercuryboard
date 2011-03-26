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
 * $Id: query.php,v 1.5 2004/11/14 05:01:46 jason Exp $
 **/

require './common.php';

/**
 * Query Interface
 *
 * @author Jason Warner <jason@mercuryboard.com>
 * @since RC1
 **/
class query extends admin
{
	/**
	 * Query Interface
	 *
	 * @author Jason Warner <jason@mercuryboard.com>
	 * @since RC1
	 * @return string HTML
	 **/
	function execute()
	{
		$this->set_title('Query Interface');
		$this->tree('Query Interface');

		if (!isset($this->post['submit'])) {
			return $this->message('Query Interface', "
			<form action='$this->self?a=query' method='post'>
				<textarea class='input' name='sql' rows='15' style='width:100%'>SELECT * FROM {$this->pre}groups</textarea><br /><br />
				<input type='submit' name='submit' value='Submit'>
			</form>");
		} else {
			$result = $this->db->query(stripslashes($this->post['sql']));

			if (is_resource($result)) {
				$show_headers = true;
				$this->iterator_init('tablelight', 'tabledark');

				$out = $this->table;

				while ($row = $this->db->nqfetch($result))
				{
					if ($show_headers) {
						$out .= "<tr>\n";

						foreach ($row as $col => $data)
						{
							$out .= "<td class='header'>$col</td>\n";
						}

						$out .= "</tr>\n";

						$show_headers = false;
					}

					$out .= "<tr>\n";
					$this->iterate();

					foreach ($row as $col => $data)
					{
						$out .= "<td class='" . $this->lastValue() . "'>" . $this->format($data, FORMAT_HTMLCHARS) . "</td>\n";
					}

					$out .= "</tr>\n";
				}

				return $out . $this->etable;
			} else {
				return $this->message('Query Interface', 'Your query ' . ($result ? ' executed successfully.' : 'failed.'));
			}
		}
	}
}