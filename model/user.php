<?php

include_once 'model.php';

function getUsers() {
	$user_table = readTable("user");

	return $user_table;
}

function getAdmins() {
	$admin_table = readTable("admin");

	return $admin_table;
}

function isAdmin($username) {
	$user_table = getUsers();
	$admin_table = getAdmins();

	foreach ($user_table as $user)
	{
		if ($user['username'] == $username) {
			foreach ($admin_table as $admin) {
				if ($admin['user_id'] == $user['id']) {
					return True;
				}
			}
		}
	}

	return False;
}

?>