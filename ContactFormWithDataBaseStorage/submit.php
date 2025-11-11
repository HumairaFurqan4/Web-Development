<?php
include 'config.php';

$name = $_POST['full_name'];
$email = $_POST['email_addr'];
$message = $_POST['user_message'];

$insert_query = "INSERT INTO messages (name, email, message) VALUES ('$name', '$email', '$message')";

if ($db->query($insert_query) === TRUE) {
    echo "<script>alert('Thanks! Your message has been sent.'); window.location='contact.html';</script>";
} else {
    echo "Error occurred: " . $db->error;
}

$db->close();
?>
