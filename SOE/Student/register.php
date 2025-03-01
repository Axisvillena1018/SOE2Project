<?php

include "server-auth.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $sid = $_POST['sid'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_sql = "SELECT sid FROM userstud WHERE sid = ? ";
    $check_stmt = $conn->prepare($check_sql);
    $check_stmt->bind_param("s", $sid);
    $check_stmt->execute();
    $check_stmt->store_result();

    if($check_stmt->num_rows > 0)
    {
        echo "<script>alert('ERROR: Student ID Already Exists'); window.history.back();</script>";
    }
    else
    {
        $sql = "INSERT INTO userstud (sid,email,fname,lname,username,password) VALUES (?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $sid, $email, $firstname, $lastname, $username, $password);

        if ($stmt->execute())
        {
            echo "<script>alert('Registration Successful!'); window.location.href = 'login.html';</script>";
        }
        else
        {
            echo "<script>alert('ERROR: Something went wrong with registration. Please try again.'); window.history.back();</script>";
        }

        $stmt->close();
    }

    $check_stmt->close();
    $conn->close();
}

?>