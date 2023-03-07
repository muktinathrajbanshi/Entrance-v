<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verbal Reasoning</title>
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
            <h2>Verbal Reasoning Questions</h2>
            <form>
                <ol>
                    <li>
                        <p>1. What is the opposite of the word 'courageous'?</p>
                        <label><input type="radio" name="q1" value="a"> Cowardly</label>
                        <label><input type="radio" name="q1" value="b"> Confident</label>
                        <label><input type="radio" name="q1" value="c"> Brave</label>
                    </li>
                    <li>
                        <p>2. Which word means 'to decrease or lessen'?</p>
                        <label><input type="radio" name="q2" value="a"> Decrease</label>
                        <label><input type="radio" name="q2" value="b"> Lessen</label>
                        <label><input type="radio" name="q2" value="c"> Reduce</label>
                    </li>
                    <li>
                        <p>3. What is the synonym of 'alleviate'?</p>
                        <label><input type="radio" name="q3" value="a"> Aggravate</label>
                        <label><input type="radio" name="q3" value="b"> Exacerbate</label>
                        <label><input type="radio" name="q3" value="c"> Soothe</label>
                    </li>
                    <li>
                        <p>4. What is the opposite of the word 'generous'?</p>
                        <label><input type="radio" name="q4" value="a"> Greedy</label>
                        <label><input type="radio" name="q4" value="b"> Stingy</label>
                        <label><input type="radio" name="q4" value="c"> Avaricious</label>
                    </li>
                    <li>
                        <p>5. What is the synonym of 'serene'?</p>
                        <label><input type="radio" name="q5" value="a"> Calm</label>
                        <label><input type="radio" name="q5" value="b"> Chaotic</label>
                        <label><input type="radio" name="q5" value="c"> Turbulent</label>
                    </li>
                </ol>
                <button type="button" class="btn-primary" onclick="checkAnswers()">Submit</button>
            </form>
            <!-- a,c,c,b,a answer  -->
            <div id="answer-feedback"></div>
        </section>
    </div>
    <script>
        function checkAnswers() {
            var correctAnswers = ["a", "c", "c", "b", "a"];
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