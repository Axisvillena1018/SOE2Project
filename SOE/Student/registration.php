<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $sid = $_POST['sid'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        

    }
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="register.css">
        <title>Register - DYCI Roadmap</title>
        <script>
            function goBack() {
                window.location.href = "login.html";
            }
        </script>
    </head>
    <body>
        <div class="dycilogo">
            <img src="dyci-logo.png" alt="DYCI Logo">
        </div>
        <div class="loginform">
            <div class="header">
                <h1>REGISTRATION</h1>
            </div>
            <div class="form">
                <form method="POST" action="">
                    <div class="email">
                        <label>Email: </label><br>
                        <input type="text" name="email" required>
                    </div>
                    <div class="firstname">
                        <label>First Name: </label><br>
                        <input type="text" name="firstname" required>
                    </div>
                    <div class="lastname">
                        <label>Last Name: </label><br>
                        <input type="text" name="lastname" required>
                    </div>
                    <div class="sid">
                        <label>Student ID: </label><br>
                        <input type="text" name="sid" required>
                    </div>
                    <div class="username">
                        <label>Username: </label><br>
                        <input type="text" name="username" required>
                    </div>
                    <div class="password">
                        <label>Password: </label><br>
                        <input type="password" name="password" required>
                    </div>
                    <div class="backorreg">
                        <div class="btnback">
                            <button type="button" onclick="goBack()">Back</button>
                        </div>
                        <div class="btnreg">
                            <button type="submit">Register</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
