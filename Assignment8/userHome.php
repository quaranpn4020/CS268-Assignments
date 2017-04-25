<?php
    session_start();
    include("requireLogin.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Candy | User Home</title>
    <meta name="description" content="CS268 Assignment 8 Homepage">
    <meta name="keywords" content="HTML, php, js, login, candy database, homepage, logged in">
</head>
<body>
    <h1>Hello <?php echo $_SESSION["user"]?></h1>
</body>
</html>