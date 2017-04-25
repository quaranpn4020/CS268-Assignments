<!DOCTYPE html>
<html>
<head>
    <title>Candy | Login</title>
    <meta name="description" content="CS268 Assignment 8 Login Page">
    <meta name="keywords" content="HTML, php, js, login, candy database, homepage, log in page">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="candy.js"></script>
</head>
<body>
    <h1>Candy Login</h1>
    <?php
        if(htmlspecialchars($_GET["invalidLogin"]) == "true") {
            echo "<h2>Invalid username and/or password</h2>";
        }
        if(htmlspecialchars($_GET["loginRequired"]) == "true") {
            echo "<h2>Login Required</h2>";
        }
     
        /////////////////////////////////////////////////////////////////////////////////////////
        // I chose to unset the session here as an easy way to "log out" to test the redirect when trying to access userHome.php
        session_start();
        session_unset();
        /////////////////////////////////////////////////////////////////////////////////////////
    ?>
    <form name="loginForm" onsubmit="return validateForm();" method="post" action="http://yoda.cs.uwec.edu/CS268/students/quaranpn4020/Assignment8/processLogin.php">
        <table>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name ="submit" value="Login"></td>    
        </tr>
    </table>
    </form>
</body>
</html>