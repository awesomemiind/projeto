<?php
$hostname = 'localhost';
$usernameDB = 'root';
$passwordDB = '';
$database = 'app';

$conn = mysqli_connect($hostname, $usernameDB, $passwordDB, $database) or die ('Connection error to database');
?>