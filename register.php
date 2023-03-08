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

// if the registration form was submitted
if (isset($_POST['submit'])) {

    // collect form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $user_type = $_POST['user_type'];

    // validate form data
    $error = array();
    if (empty($name)) {
        $error[] = "Name is required";
    }
    if (empty($email)) {
        $error[] = "Email is required";
    }
    if (empty($password)) {
        $error[] = "Password is required";
    }
    if (empty($cpassword)) {
        $error[] = "Confirm password is required";
    }
    if ($password !== $cpassword) {
        $error[] = "Passwords do not match";
    }

    // if there are no errors, insert the data into the database
    if (empty($error)) {

        // hash the password for security
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // create a SQL query to insert the data
        $sql = "INSERT INTO users (name, email, password, user_type) VALUES ('$name', '$email', '$hashed_password', '$user_type')";

        // execute the query and check if it was successful
        if (mysqli_query($conn, $sql)) {
header('location:login.php');

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    } else {
        // display any errors to the user
        foreach ($error as $msg) {
            echo "<p>$msg</p>";
        }
    }

    // close the database connection
    mysqli_close($conn);
}
?>
