<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <header>
        <img src="img/лого.png" alt="1">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </header>

<div class="block-form">
    <form action="reg.php" method="POST">
<div class="flex-input">
        <h1><span>Food</span><span>Diary</span> </h1>
        <?php
if (isset($_GET["name"])) {
    echo "<h2>Привет, GET " . $_GET["name"] . "! </h2>";
}

if (isset($_POST["name"])) {
    echo "<h2>Привет, " . $_POST["name"] . "! </h2>";
}
?>
        <input type="email" name="email" id="email" placeholder="Логин">

        <input type="text" name="name" id="name" placeholder="Имя">


        <input type="password" name="pass" id="pass" placeholder="Пароль">
    

        <input type="date" name="birthday" id="birthday" placeholder="Дата рождения">
    </div> 
    
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
    
        <button type="submit" class="btn-1">Регистрация</button>

        <p class="p-1">У вас уже есть аккаунт? Тогда <span> <a href="auto.html"> Войдите</a></span></p>
    </form>
</div>
</div>
</body>
</html>



