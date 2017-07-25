<?php

/***************************************************************
 * GET INFO PARTITION
 **************************************************************/
/*
 * Function: getTickets
 * @brief: Return a table of all tickets
 */
function getTickets() {
	$ticket_table = readTable("ticket");

	return $ticket_table;
}

/*
 * Function: getWinNumbers
 * @brief: Return a table of all winning tickets
 */
function getWinNumbers() {
	$win_number_table = readTable("win_numbers");

	return $win_number_table;
}

/*
 * Function: isWin
 * @brief: Check if a ticket is win or not
 * @param: $ticket_id is the content of ticket that need to check
 */
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