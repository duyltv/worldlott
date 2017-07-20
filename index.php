<?php

include 'model.php';


echo "<br>";
if (isAdmin("admin")) {
	echo "Admin here";
} else {
	echo "Not admin";
}

?>