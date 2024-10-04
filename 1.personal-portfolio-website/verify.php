<?php
// Start session to access stored verification code
session_start();

// Get the code entered by the user
$user_code = $_POST['code'];

// Get the stored verification code from the session
$stored_code = $_SESSION['verification_code'];

// Check if the code matches
if ($user_code == $stored_code) {
    // Code matches - registration is successful
    echo "<script>
        alert('✔ Registration successful!');
        window.location.href = 'login-page.html'; // Redirect to the login page
    </script>";
} else {
    // Code does not match - show an error message
    echo "<script>
        alert('✘ Incorrect code, please try again.');
        window.history.back(); // Redirect back to the verification form
    </script>";
}
?>

