<?php

include 'server-auth.php';

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT email, password FROM userstud WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($valid_username, $valid_password);
        $stmt->fetch();

        if ($password === $valid_password) {
            $_SESSION['username'] = $valid_username;
            header("Location: conforme.html");
            exit();
        } else {
            $error = "Invalid Username or Password";
        }
    } else {
        $error = "Invalid Username or Password";
    }

    $stmt->close();
    $conn->close();
}
?>
