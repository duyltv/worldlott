<?php
/*
 * FUNCTION FILE
 * @brief This file contains functions that interact with model layer
 */

require_once 'model.php';

// Include all functions
foreach (glob("function/*.php") as $filename)
{
	include_once $filename;
}

?>