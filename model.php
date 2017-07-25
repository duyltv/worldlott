<?php
/*
 * MODEL FILE
 * @brief This file contains functions and variables to access database and return data object
 */

require_once 'config.php';

function createConnection() {
	// Create connection
	$conn = mysqli_connect(SERVER_NAME, USERNAME, PASSWORD, DATABASE_NAME);

	if (!$conn) {
		echo "Error: Unable to connect to MySQL." . PHP_EOL;
		echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		exit;
	}
	return $conn;
}

function readTable($tableName) {
	$conn = createConnection();
	$sql = 'SELECT * FROM '.$tableName.';';
	$result = mysqli_query($conn, $sql);

	$data_object = array();

	// output data of each row
	while($row = mysqli_fetch_array($result)) {
		array_push($data_object, $row);
	}

	mysqli_close($conn);

	return $data_object;
}

function deleteRecordTable($tableName, $id) {
	$conn = createConnection();
	$sql = 'DELETE FROM '.$tableName.' WHERE id='. $id . ';';
	$result = mysqli_query($conn, $sql);

	mysqli_close($conn);
}


// Include all models
foreach (glob("model/*.php") as $filename)
{
	include_once $filename;
}

?>