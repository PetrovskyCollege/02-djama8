<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form action="reg.php" method="POST">
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
        <label for="birthday">дата рождения </label>
        <input type="date" name="birthday" id="birthday">
    <br>
    <br>
        <div class="flex-sex">
        <div class="sex">
    <label for="sex">жен </label>
    <input type="radio" name="sex" id="sex" value="жен">
        </div>
        <div class="sex">
    <label for="sex">муж </label>
    <input type="radio" name="sex" id="sex" value="муж">
        </div>
        </div>
    
        <button type="submit">зарегистрироваться</button>
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

