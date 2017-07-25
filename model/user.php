<?php

/***************************************************************
 * GET INFO PARTITION
 **************************************************************/
/*
 * Function: getUsers
 * @brief: Return a table of all users
 */
function getUsers() {
	$user_table = readTable("user");

	return $user_table;
}

/*
 * Function: getAdmins
 * @brief: Return a table of all admins
 */
function getAdmins() {
	$admin_table = readTable("admin");

	return $admin_table;
}

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


/***************************************************************
 * DELETE PARTITION
 **************************************************************/

/*
 * Function: deleteUser
 * @brief: Delete a user base on username
 * @param: $username is the username that need to delete
 */
function deleteUser($username) {
	$user_table = getUsers();
	$admin_table = getAdmins();

	foreach ($user_table as $user)
	{
		if ($user['username'] == $username) {

			deleteRecordTable("user", $user['id']);

			foreach ($admin_table as $admin) {
				if ($admin['user_id'] == $user['id']) {
					deleteRecordTable("admin", $admin['id']);
				}
			}

			return True;
		}
	}

	return False;
}


?>