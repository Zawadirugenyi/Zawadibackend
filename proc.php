<?php

include "db_conn.php";

if (!isset($_POST["submit"])) {
    echo "Button not clicked";
}

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];


$sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";
$conn->query($sql);