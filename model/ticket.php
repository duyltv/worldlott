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



/***************************************************************
 * DELETE PARTITION
 **************************************************************/

/*
 * Function: deleteUser
 * @brief: Delete a ticket base on ticket id
 * @param: $ticket_id is the id of ticke tthat need to delete
 */
function deleteTicket($ticket_id) {
	$ticket_table = getTickets();

	foreach ($ticket_table as $ticket)
	{
		if ($ticket['id'] == $ticket_id) {

			deleteRecordTable("ticket", $ticket['id']);

			return True;
		}
	}

	return False;
}

?>