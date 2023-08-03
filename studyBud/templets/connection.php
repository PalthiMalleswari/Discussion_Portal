<?php
$server = '127.0.0.1:3300'; // Replace with your server name or IP address
$username = "malli"; // Replace with your database username
$p = "malli878"; 
$db = "studybud";
// Replace with your database password
#$dbname = "your_database"; // Replace with your database name


// Create a connection
$con = new mysqli($server, $username,$p,$db);
// Check the connection
if ($con->connect_error) {
    die("Connection Failed");  
}

$user_id = "2";

?>
