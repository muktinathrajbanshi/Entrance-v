<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-entrance</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        .hover-menu {
            position: relative;
            display: inline-block;
        }

        .hover-menu-content {
            display: none;
            position: absolute;
            z-index: 1;
        }

        .hover-menu:hover .hover-menu-content {
            display: block;
        }
    </style>
</head>

<body>
    <!-- Header section -->
    <header class="site-header">
        <div class="container">
            <div class="main-header">
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


            </div>
        </div>
    </header>
    <!-- main section  -->
    <section class="subject">
        <div class="container">
            <div class="subject-wrap">
                <h3 class="subject-title">CMAT ENTRANCE MODEL QUESTIONS ( TU , KU , PU )</h3>
                <div class="row">
                    <div class="col">
                        <a href="verbal.php"> VERBAL SECTION </a>
                    </div>
                    <div class="col">
                        <a href="numerical.php"> QUANTITATIVE/ NUMERICAL REASONING </a>
                    </div>
                    <div class="col">
                        <a href="logical.php"> LOGICAL REASONING </a>
                    </div>
                    <div class="col">
                        <a href="gk.php"> GENERAL AWARENESS/ KNOWLEDGE </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>