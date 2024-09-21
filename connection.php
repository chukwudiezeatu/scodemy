<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "login";

$conn = new mysqli($server, $username, $password, $db);

if (!$db) {
    die("Connection to database failed: " . mysqli_connect_error());
}