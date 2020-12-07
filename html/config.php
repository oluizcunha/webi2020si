<?php

$servername = "mysqlASW";
$username = "root";
$password = "root";
$dbname = 'minhafazenda';

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
if($conn->connect_error)
{
	die('Failed Connect ! '.$conn->connect_error);
}
// else
// {
// 	echo "YES";
// }

?>