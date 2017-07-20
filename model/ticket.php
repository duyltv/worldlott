<?php

include_once 'model.php';

function getTicket() {
	$ticket_table = readTable("ticket");

	return $ticket_table;
}

?>