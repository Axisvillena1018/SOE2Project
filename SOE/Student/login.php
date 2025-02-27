<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $valid_username = "Test.00000@dyci.edu.ph";
    $valid_password = "password";

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['username'] = $username;
        header("Location: conforme.php");
        exit();
    } else {
        $error = "Invalid Username or Password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="login.css">
    <title>Login - DYCI Roadmap</title>
</head>
<body>
    <div class="dycilogo">
        <img src="dyci-logo.png" alt="DYCI Logo">
    </div>
    <div class="loginform">
        <div class="header">
            <h1>DYCI RoadMap</h1>
            <p>Navigating Your Path to Success, One Step at a Time</p>
        </div>
        <div class="form">
            <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
            <form method="POST" action="">
                <div class="username">
                    <label>Username: </label><br>
                    <input type="text" name="username" required>
                </div>
                <div class="password">
                    <label>Password: </label><br>
                    <input type="password" name="password" required>
                </div>
                <div class="RegorSub">
                    <div class="btnreg">
                        <a href="register.php"><button type="button">Register</button></a>
                    </div>
                    <div class="btnlogin">
                        <button type="submit">Log-in</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>