<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numerical Reasoning</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/subject.css">
    <!-- <script src="js/subject.js"></script> -->
</head>

<body>
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
                    <div class="button">
                        <a href="login.php">Login</a>
                    </div>
                </ul>
            </div>
        </div>
    </header>

    <div class="container">
        <section id="quiz">
            <h2> Numerical Reasoning Questions</h2>
            <form>
                <ol>
                    <li>
                        <p>1. What is 25% of 80??</p>
                        <label><input type="radio" name="q1" value="a">20</label>
                        <label><input type="radio" name="q1" value="b">30</label>
                        <label><input type="radio" name="q1" value="c">40</label>
                    </li>
                    <li>
                        <p>2. If the price of a laptop is $800 and it is discounted by 15%, what is the sale price?</p>
                        <label><input type="radio" name="q2" value="a">$680</label>
                        <label><input type="radio" name="q2" value="b">$720</label>
                        <label><input type="radio" name="q2" value="c">$760</label>
                    </li>
                    <li>
                        <p>3. If the circumference of a circle is 12π inches, what is the diameter of the circle?</p>
                        <label><input type="radio" name="q3" value="a">2 inches</label>
                        <label><input type="radio" name="q3" value="b">3 inches</label>
                        <label><input type="radio" name="q3" value="c">4 inches</label>
                    </li>
                    <li>
                        <p>4. If 5 workers can complete a project in 20 days, how many days would it take 8 workers to
                            complete the same project?</p>
                        <label><input type="radio" name="q4" value="a">8</label>
                        <label><input type="radio" name="q4" value="b">12</label>
                        <label><input type="radio" name="q4" value="c">15</label>
                    </li>
                    <li>
                        <p>5. A rectangle has a length of 10 inches and a width of 6 inches. What is the area of the
                            rectangle?</p>
                        <label><input type="radio" name="q5" value="a">16 square inches</label>
                        <label><input type="radio" name="q5" value="b">36 square inches</label>
                        <label><input type="radio" name="q5" value="c">60 square inches</label>
                    </li>
                </ol>
                <button type="button" class="btn-primary" onclick="checkAnswers()">Submit</button>
            </form>
            <div id="answer-feedback"></div>
        </section>
        <script>
            function checkAnswers() {
                var correctAnswers = ["a", "c", "b", "b", "a"];
                var userAnswers = [];
                var answerSymbols = [];

                // Get user answers
                for (var i = 1; i <= 5; i++) {
                    var radios = document.getElementsByName("q" + i);
                    for (var j = 0; j < radios.length; j++) {
                        if (radios[j].checked) {
                            userAnswers.push(radios[j].value);
                            break;
                        }
                    }
                }

                // Check user answers
                for (var i = 0; i < userAnswers.length; i++) {
                    var symbol;
                    if (userAnswers[i] === correctAnswers[i]) {
                        symbol = "<span class='answer-symbol correct'>&#10004;</span>";
                    } else {
                        symbol = "<span class='answer-symbol incorrect'>&#10008;</span>";
                    }
                    answerSymbols.push(symbol);
                }

                // Display answer feedback
                var feedback = "<h3>Answer Feedback:</h3>";
                for (var i = 0; i < answerSymbols.length; i++) {
                    var questionNum = i + 1;
                    feedback += "<p>Question " + questionNum + ": " + answerSymbols[i] + "</p>";
                }
                document.getElementById("answer-feedback").innerHTML = feedback;

                // Disable submit button
                document.querySelector("button").disabled = true;
            }
        </script>
    </div>

    <!-- answer a,c,b,b,c  -->
</body>

</html>