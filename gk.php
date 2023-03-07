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
            <h2> General Knowledge Questions</h2>
            <form>
                <ol>
                    <li>
                        <p>1. Nepal was hit by the 7.8 magnitude Earthquake on:</p>
                        <label><input type="radio" name="q1" value="a">2072 Baishakh 10</label>
                        <label><input type="radio" name="q1" value="b">2072 Baishakh 11</label>
                        <label><input type="radio" name="q1" value="c"> 2072 Baishakh 12</label>
                    </li>
                    <li>
                        <p>2. How many provinces (Pradesh) are in Nepal according to the new constitution?</p>
                        <label><input type="radio" name="q2" value="a">5</label>
                        <label><input type="radio" name="q2" value="b">7</label>
                        <label><input type="radio" name="q2" value="c">9</label>
                    </li>
                    <li>
                        <p>3. Which of the following field is not awarded by Noble Prize?</p>
                        <label><input type="radio" name="q3" value="a">Literature</label>
                        <label><input type="radio" name="q3" value="b">Physics</label>
                        <label><input type="radio" name="q3" value="c">Economics</label>
                    </li>
                    <li>
                        <p>4. Kusti is played on:</p>
                        <label><input type="radio" name="q4" value="a">Ground</label>
                        <label><input type="radio" name="q4" value="b">Court</label>
                        <label><input type="radio" name="q4" value="c">Ring</label>
                    </li>
                    <li>
                        <p>5. Who is considered as the father of computer?</p>
                        <label><input type="radio" name="q5" value="a">Mark Jukerberg</label>
                        <label><input type="radio" name="q5" value="b">Bill Gates</label>
                        <label><input type="radio" name="q5" value="c">Charles Babbage</label>
                    </li>
                </ol>
                <button type="button" class="btn-primary" onclick="checkAnswers()">Submit</button>
            </form>
            <div id="answer-feedback"></div>
        </section>
        <!-- answer c,c,a,b,c  -->
        <script>
            function checkAnswers() {
                var correctAnswers = ["c", "c", "a", "b", "c"];
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
</body>

</html>

</div>
</body>

</html>