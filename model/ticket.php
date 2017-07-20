<?php

function getTicket() {
	$ticket_table = readTable("ticket");

	return $ticket_table;
}

?>