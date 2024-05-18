<?php
// Configuring the database:
$servername = 'localhost';
$username = 'root';
$password = '';
$db_name = 'cpa_db';

// Connecting to the database:
$conn = new mysqli($servername, $username, $password, $db_name);

// Validating the connection to database:
if ($conn->connect_error) {
    die("ERROR:" . $conn->connect_error);
}
