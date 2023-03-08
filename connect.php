<?php

// establish a database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pathsala";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>