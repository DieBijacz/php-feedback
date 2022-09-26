<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'Mateusz');
define('DB_PASS', '123123');
define('DB_NAME', 'Feedback');

// create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// check connection
if ($conn->connect_error) {
  die('Connection Failed ' . $conn->connect_error);
}
