<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "contactform_db";

// connect to database
$db = new mysqli($host, $user, $pass, $database);

if ($db->connect_error) {
    die("Database connection failed: " . $db->connect_error);
}
?>
