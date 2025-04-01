<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    echo "<h1>Form Data Received</h1>";
    echo "<p>Name: " . htmlspecialchars($name) . "</p>";
    $_SESSION['name'] = $name;
    echo "<p>Email: " . htmlspecialchars($email) . "</p>";
    $_SESSION['email'] = $email;
    echo "<p>Message: " . htmlspecialchars($message) . "</p>";
    $_SESSION['message'] = $message;

    var_dump($_SESSION);
    
} else {

    echo "L'accés a aquesta informació està restringit.";
}
