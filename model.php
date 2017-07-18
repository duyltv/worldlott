<?php
/*
 * MODEL FILE
 * @brief This file contains functions and variables to access database and return data object
 */

include 'config.php';


$servername = $SERVER_NAME;
$username = $USERNAME;
$password = $PASSWORD;
$dbname = $DATABASE_NAME;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$conn->close();

?>