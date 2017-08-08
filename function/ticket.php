<?php
/*
 * Function: getPrize
 * @brief: Return an integer that means the prize of the ticket
 * @param: $ticket_content is the content of considering ticket
 * @param: $win_ticket_content is the content of winning numbers
 */
function getPrize($ticket_content, $win_ticket_content) {

	if ($ticket_content == $win_ticket_content)
		return 1;
	
	$ticket_array = explode(' ', $ticket_content);
	$win_array = explode(' ', $win_ticket_content);

	$number_of_numbers = 0;

	foreach ($ticket_array as $ticket_num) 
	{
		if (in_array($ticket_num, $win_array))
		{
			$number_of_numbers+=1;
		}
	}

	if ($number_of_numbers == 5)
		return 2;

	if ($number_of_numbers == 4)
		return 3;

	if ($number_of_numbers == 3)
		return 4;

	return -1;
}

/*
 * Function: getPrizeById
 * @brief: Return an integer that means the prize of the ticket
 * @param: $ticket_id is the id of considering ticket
 */
function getPrizeById($ticket_id) {

	$ticket_table = getTickets();
	$win_number_table = getWinNumbers();

	foreach ($ticket_table as $ticket)
	{
		if ($ticket['id'] == $ticket_id) {
			foreach ($win_number_table as $win_number) {
				if ($ticket['bought_for_date'] == $win_number['win_on']) {
					return getPrize($ticket['content'], $win_number['content']);
				}
			}
		}
	}

	return -1;
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