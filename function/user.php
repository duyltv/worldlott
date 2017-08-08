<?php
/*
 * Function: isAdmin
 * @brief: Check if a user is admin or not
 * @param: $username is the username that need to check
 */
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