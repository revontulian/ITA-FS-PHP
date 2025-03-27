<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Access form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Do something with the data (e.g., save to database, send email, etc.)
    // For now, let's just display it
    echo "<h1>Form Data Received</h1>";
    echo "<p>Name: " . htmlspecialchars($name) . "</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    echo "<p>Message: " . htmlspecialchars($message) . "</p>";
    
    // You could also save to a file or database here
} else {
    // If someone accesses this page directly without submitting the form
    echo "Please submit the form first.";
}
?>