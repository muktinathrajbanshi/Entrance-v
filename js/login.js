function validate() {
    var username = document.getElementsByName("")[0].value;
    var password = document.getElementsByName("")[1].value;
    if (username == "" || password == "") {
        alert("Please enter both username and password.");
    } else {
        alert("Welcome, " + username + "!");
    }
}
