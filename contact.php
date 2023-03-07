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
        <form action="">
            <h3>Give Your Feedback</h3>
            <label for="">name</label>
            <input type="text" placeholder="Enter your name" required>
            <label for="">email</label>
            <input type="email" placeholder="Enter your e-mail" required>
            <label for="">phone number</label>
            <input type="a" placeholder="Enter your phone number" required>
            <label for="">Your Message</label>
            <textarea name="" id="" cols="20" rows="8" placeholder=" Write your message"></textarea>
            <input type="button" value="submit">
        </form>
    </div>
    <!-- <footer>
        <p>&copy; 2023 E-entrance. All rights reserved.</p>
    </footer> -->
</body>

</html>