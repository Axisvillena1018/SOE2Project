<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $valid_username = "Test.00000@dyci.edu.ph";
    $valid_password = "password";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: conforme.html");
        exit();
    } else {
        $error = "Invalid Username or Password";
    }
}
?>