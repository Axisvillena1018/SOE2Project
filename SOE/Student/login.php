<?php

include 'server-auth.php';
session_start();

header('Content-Type: application/json');

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
            echo json_encode(["success" => true]);
        } else {
            echo json_encode(["success" => false, "message" => "Invalid Username or Password"]);
        }
    } else {
        echo json_encode(["success" => false, "message" => "Invalid Username or Password"]);
    }

    $stmt->close();
    $conn->close();
}
?>
