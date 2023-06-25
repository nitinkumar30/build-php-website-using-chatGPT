<?php
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'foodblog';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die('Failed to connect to the database: ' . mysqli_connect_error());
}
?>
