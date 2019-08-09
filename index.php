<!doctype html>
<html >
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>


<h3  id="register">Регистрация</h3>
<h3  id="authorization">Авторизация </h3>

<div id="reg">
    <form action="php/reg.php">
        <label for="login">Логин:</label><br>
        <input required id="login" type="text"><br>

        <label for="email">Ваш E-Mail:</label><br>
        <input required id="email" type="email"><br>
        <label for="password">Пароль:</label><br>
        <input required type="password" id="password"><br>
        <label  for="confirm_password">Повторите пароль:</label><br>
        <input required type="password" id="confirm_password"><br> <br>
        <input type="submit">
    </form>
</div>

<div id="aut">
    <form action="php/aut.php">
        <label for="login">Логин:</label><br>
        <input required id="login" type="text"><br>

        <label for="password">Пароль:</label><br>
        <input required type="password" id="password"><br><br>
        <input type="submit">
    </form>
</div>
<script src="js/jquery.min.js"></script>
<script src="js/index.js"></script>
</body>
</html>