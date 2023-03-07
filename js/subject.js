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