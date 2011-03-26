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
 * $Id: stats.php,v 1.3 2006/06/21 19:34:50 jon Exp $
 **/

require './common.php';

class stats extends admin
{
	function execute()
	{
		$this->set_title('Statistics Center');
		$this->tree('Statistics Center');

		include '../lib/jpgraph/jpgraph.php';
		include '../lib/jpgraph/jpgraph_bar.php';

		/**
		 * Posts
		 */
		$query = $this->db->query("
		SELECT
		    COUNT(post_id) AS posts,
		    FROM_UNIXTIME(post_time, '%b %y') AS month
		FROM {$this->pre}posts
		GROUP BY month
		ORDER BY post_time");

		$data = array();
		while ($item = $this->db->nqfetch($query))
		{
			$data[$item['month']] = $item['posts'];
		}

		if (!$data) {
			$data = array(0, 0);
		}

		$graph = new Graph(400, 300, 'auto');
		$graph->SetScale('textint');

		$graph->SetColor('aliceblue');
		$graph->SetMarginColor('white');

		$graph->xaxis->SetTickLabels(array_keys($data));
		$graph->yaxis->scale->SetGrace(20);
		$graph->title->Set('Posts by Month');

		$temp = array_values($data);
		$barplot = new BarPlot($temp);
		$barplot->SetFillColor('darkorange');

		$graph->add($barplot);
		$graph->Stroke("{$this->time}1.png");

		/**
		 * Registrations
		 */
		$query = $this->db->query("
		SELECT
		    COUNT(user_id) AS users,
		    FROM_UNIXTIME(user_joined, '%b %y') AS month
		FROM {$this->pre}users
		WHERE user_joined != 0
		GROUP BY month
		ORDER BY user_joined");

		$data = array();
		while ($item = $this->db->nqfetch($query))
		{
			$data[$item['month']] = $item['users'];
		}

		$graph = new Graph(400, 300, 'auto');
		$graph->SetScale('textint');

		$graph->SetColor('aliceblue');
		$graph->SetMarginColor('white');

		$graph->xaxis->SetTickLabels(array_keys($data));
		$graph->yaxis->scale->SetGrace(20);
		$graph->title->Set('Registrations by Month');

		$temp =array_values($data);
		$barplot = new BarPlot($temp);
		$barplot->SetFillColor('darkorange');

		$graph->add($barplot);
		$graph->Stroke("{$this->time}2.png");

		return $this->message('Statistics Center',
		"<img src='{$this->time}1.png' alt='Posts by Month' /><br /><br />
		<img src='{$this->time}2.png' alt='Registrations by Month' />");
	}
}
?>