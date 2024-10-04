<?php
// Start the session to store the verification code
session_start();

// Assuming form data is sent via POST
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];

// Generate a random verification code (6-digit number)
$verification_code = rand(100000, 999999);

// Store the code in session (or alternatively, store it in the database)
$_SESSION['verification_code'] = $verification_code;
$_SESSION['email'] = $email; // Store email in session for later verification

// Send the verification code to the user's email
$subject = "Your Verification Code";
$message = "Dear $firstname $lastname, \nYour verification code is: $verification_code";
$headers = "From: noreply@yourwebsite.com";

// Use PHP's mail function to send the email
if (mail($email, $subject, $message, $headers)) {
    // Redirect to the verification page after successful sending
    header('Location: verification-page.html');
} else {
    echo "Failed to send verification code. Please try again.";
}
?>

