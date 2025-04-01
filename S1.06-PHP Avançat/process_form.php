<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['message'] = $message;

    var_dump($_SESSION);

    echo "<h1>Form Data Received</h1>";
    echo "<p>Name: " . htmlspecialchars($name) . "</p>";
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    echo "<p>Message: " . htmlspecialchars($message) . "</p>";
    
} else {

    echo "L'accés a aquesta informació està restringit.";
}
