function validateForm() {
    var x = document.loginForm.username.value;
    if (x == "") {
        alert("Please enter your username");
        return false;
    }
    var y = document.loginForm.password.value;
    if (y == "") {
        alert("Please enter your password");
        return false;
    }
    return true;
}