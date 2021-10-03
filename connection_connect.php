<?php
$servername = "localhost";
$username = "db21_004";
$password = "db21_004";
$dbname = "db21_004";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if (!$conn->select_db($dbname)) {
    die("Connection failed: " . $conn->connect_error);
}