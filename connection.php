<?php
$servername = "localhost";
$username = "user1";
$password = "pass1";
$dbname = "ordersdb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>