<?php

session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input
    $username = trim(htmlspecialchars($_POST['username']));
    $password = trim(htmlspecialchars($_POST['password']));

    // Check if fields are empty
    if (empty($username) || empty($password)) {
        echo "Both fields are required.";
        exit;
    }

    // Example: Hardcoded credentials for validation
    $validUsername = "admin";
    $validPassword = "password123";

    // Validate credentials
    if ($username === $validUsername && $password === $validPassword) {
        // Successful login
        $_SESSION['username'] = $username;
        header("Location: main.html"); // Redirect to the main page
        exit;
    } else {
        // Invalid credentials
        echo "Invalid username or password.";
    }
} else {
    echo "Invalid request method.";
}
?>