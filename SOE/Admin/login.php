<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        

        if ($username == "admin" && $password == "password") {
            echo "<script>alert('Login successful');</script>";
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="dycilogo">
            <img src="dyci-logo.png" alt="DYCI Logo">
        </div>
        <div class="loginform">
            <div class="header">
                <h1>DYCI RoadMap</h1>
                <p>Admin Access</p>
            </div>
            <div class="form">
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
                        <div class="btnlogin">
                            <button type="submit">Log-in</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
