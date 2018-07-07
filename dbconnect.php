<?php
$db_host = "localhost";
$db_user = "username";
$db_pass = "password";
$db_name = "db_name";

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

// Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}