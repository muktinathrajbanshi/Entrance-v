<?php
require_once 'connect.php';
// check if the registration form was submitted
    if(isset($_POST['submit'])){
        if($_POST['email']=='' || $_POST['password']==''){
            echo 'email and password should not be empty';
        }else{
            $email = $_POST['email'];
            $password = $_POST['password'];
            $sql = "SELECT * FROM users WHERE email='$email'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            if($row){
                if(password_verify($password, $row['password'])){
                    session_start();
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['user_name'] = $row['name'];
                    $_SESSION['user_type'] = $row['user_type'];
                    header('location:dashboard.php');
                }else{
                    echo 'password is incorrect';
                }
            }else{
                echo 'email is incorrect';
            }
        }
    }
?>