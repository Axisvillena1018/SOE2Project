<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname ="roadmap";

$conn = new mysqli($host, $user, $password, $dbname);

if ($conn->connect_error) 
{
    die("Connection Not Found 404");
}

?>