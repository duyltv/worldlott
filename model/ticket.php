<?php

function getTickets() {
	$ticket_table = readTable("ticket");

	return $ticket_table;
}

function getWinNumbers() {
	$win_number_table = readTable("win_numbers");

	return $win_number_table;
}

function isWin($ticket_id) {
	$ticket_table = getTickets();
	$win_number_table = getWinNumbers();

	foreach ($ticket_table as $ticket)
	{
		if ($ticket['id'] == $ticket_id) {
			foreach ($win_number_table as $win_number) {
				if ($ticket['content'] == $win_number['content'] && $ticket['bought_for_date'] == $win_number['win_on']) {
					return True;
				}
			}
		}
	}

	return False;
}

?>