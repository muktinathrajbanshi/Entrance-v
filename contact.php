<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/feedback.css">

</head>

<body>
    <div class="site-header">
        <div class="container">
            <header class="main-header">
                <div class="logo">
                    <img src="image/logo1.jpg" alt="Logo">
                    <h1>E-entrance.</h1>
                </div>

                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="subject.php">Subject</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.php">Contact Us</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="feedback.php">Feedback</a>
                    </li> -->
                    <div class="button">
                        <a href="login.php">Login</a>
                    </div>
                </ul>


            </header>
        </div>
    </div>
    <div class="form-container">
        <form action="feedback.php" method="post">
            <h3>Give Your Feedback</h3>
            <label for="name">name</label>
             <input type="text" name="name" id="name" placeholder="Enter your name" required>

               <label for="email">email</label>
             <input type="email" name="email" id="email" placeholder="Enter your e-mail" required>

              <label for="phone">phone number</label>
                <input type="text" name="phone" id="phone" placeholder="Enter your phone number" required>

              <label for="message">Your Message</label>
                <textarea name="message" id="message" cols="20" rows="8" placeholder=" Write your message"></textarea>


                <input type="submit" name="submit" value="submit" class="form-btn">

        </form>
    </div>
    <!-- <footer>
        <p>&copy; 2023 E-entrance. All rights reserved.</p>
    </footer> -->
</body>

</html>