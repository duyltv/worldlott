<?php

include 'model.php';


$ticket = "01 02 03 04 11 19";
$win = "01 02 03 11 15 17";

if (getPrize($ticket, $win)==1) 
	echo "First";
elseif (getPrize($ticket, $win)==2)
	echo "Second";
elseif (getPrize($ticket, $win)==3)
	echo "Third";
elseif (getPrize($ticket, $win)==4)
	echo "Fourth";
else
	echo "Else";

?>