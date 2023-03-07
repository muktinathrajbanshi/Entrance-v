

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/login.css">

</head>

<body>

    <div class="form-container">

        <form action="register.php" method="post">
            <h3>register now</h3>
            <!-- <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?> -->
            <input type="text" name="name" required placeholder="Enter your name">
            <input type="email" name="email" required placeholder="Enter your email">
            <input type="password" name="password" required placeholder="Enter your password">
            <input type="password" name="cpassword" required placeholder="Confirm your password">
            <select name="user_type">
                <option value="User">user</option>
                <option value="Admin">admin</option>
            </select>
            <input type="submit" name="submit" value="Register Now" class="form-btn">
            <p>Already have an account? <a href="login.php">Login</a></p>
        </form>

    </div>

</body>

</html>