<?php

include 'model.php';
$users=getUsers();
print_r($users);

echo "<br>";
if (isAdmin("admin")) {
	echo "Admin here";
} else {
	echo "Not admin";
}

?>