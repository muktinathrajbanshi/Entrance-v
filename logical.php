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
            <h2> Logical Reasoning Questions</h2>
            <form>
                <ol>
                    <li>
                        <p>1. If all pencils are made of wood, and some pens are made of wood, which of the following
                            must
                            be true?</p>
                        <label><input type="radio" name="q1" value="a">All pens are made of wood.</label>
                        <label><input type="radio" name="q1" value="b">Some pens are not made of wood.</label>
                        <label><input type="radio" name="q1" value="c"> All writing utensils are made of wood.</label>
                    </li>
                    <li>
                        <p>2. wife:woman::-------:man?</p>
                        <label><input type="radio" name="q2" value="a">Groom</label>
                        <label><input type="radio" name="q2" value="b">boy</label>
                        <label><input type="radio" name="q2" value="c">husband</label>
                    </li>
                    <li>
                        <p>3. Look at this series: 53, 53, 40, 40,27,27,....What number should come next?</p>
                        <label><input type="radio" name="q3" value="a">14</label>
                        <label><input type="radio" name="q3" value="b">17</label>
                        <label><input type="radio" name="q3" value="c">27</label>
                    </li>
                    <li>
                        <p>4. JAK,KBL,LCM,MDN,--------?</p>
                        <label><input type="radio" name="q4" value="a">MEN</label>
                        <label><input type="radio" name="q4" value="b">OEP</label>
                        <label><input type="radio" name="q4" value="c">NEO</label>
                    </li>
                    <li>
                        <p>5. If all books are paper products and some paper products are recyclable, which of the
                            following must be true?</p>
                        <label><input type="radio" name="q5" value="a">All books are recyclable.</label>
                        <label><input type="radio" name="q5" value="b">Some books are not recyclable.</label>
                        <label><input type="radio" name="q5" value="c">All recyclable items are books.</label>
                    </li>
                </ol>
                <button type="button" class="btn-primary" onclick="checkAnswers()">Submit</button>
            </form>
            <div id="answer-feedback"></div>
        </section>
        <script>
            function checkAnswers() {
                var correctAnswers = ["b", "c", "a", "c", "b"];
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
        <!-- b,c,a,c,b answer  -->
</body>

</html>

</div>
</body>

</html>