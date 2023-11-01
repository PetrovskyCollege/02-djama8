<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="auto.php" method="POST">
        <label for="email">почта</label>
        <input type="email" name="email" id="email">
    <br>
    <br>
    <label for="name">имя</label>
        <input type="text" name="name" id="name">
    <br>
    <br>
   
        <label for="pass">пароль </label>
        <input type="password" name="pass" id="pass">
    <br>
    <br>
    
    <button type="submit">войти</button>
    </form>
</body>
</html>

<?php
if (isset($_GET["name"])) {
    echo "<h2>Привет, GET " . $_GET["name"] . "! </h2>";
}

if (isset($_POST["name"])) {
    echo "<h2>Привет, " . $_POST["name"] . "! </h2>";
}

