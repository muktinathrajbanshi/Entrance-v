<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>login form</title>
	<link rel="stylesheet" href="css/login.css">

</head>

<body>

	<div class="form-container">

		<form action="login_handler.php" method="post">
			<h3>E-entrance</h3>
			<!-- <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?> -->
			<input type="email" name="email" required placeholder="Enter your email">
			<input type="password" name="password" required placeholder="Enter your password">
			<input type="submit" name="submit" value="login" class="form-btn">
			<p>Don't have an account? <a href="register_form.php">Register Now </a></p>
		</form>

	</div>

</body>

</html>