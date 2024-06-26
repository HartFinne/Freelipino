<?php
require "connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

	// Sanitize and validate inputs
	$name = htmlspecialchars(trim($_POST['name']));
	$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
	$subject = htmlspecialchars(trim($_POST['subject']));
	$message = htmlspecialchars(trim($_POST['message']));

	// Insert data into database
	$sql = "INSERT INTO contact (contact_name, contact_email, contact_subject, contact_message) VALUES ('$name', '$email', '$subject', '$message')";

	if ($conn->query($sql) === TRUE) {
		header('Location: contact.html');
		exit();
	}

	$conn->close();
}
