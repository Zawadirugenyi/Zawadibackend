<?php

$hostname = "localhost";
$username = "root";
$password = " ";
$database = "MyDB";

$conn = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully to database";