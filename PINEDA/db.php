<?php
$host = 'localhost';  // Server name
$db = 'login_system'; // Database name
$user = 'root';       // MySQL username
$pass = '';           // MySQL password (empty by default)

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
