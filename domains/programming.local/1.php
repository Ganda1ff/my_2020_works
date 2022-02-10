<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="3.css">

<title>Вход/Регистрация</title>
</head>
<body>
<pre><div class="line" align="left"><nav><a href="index.php">Главная</a> | <a href="second.html">Галерея</a> | <a href="3.html">О себе</a> | <a href="4.html">Игра</a> | <a href="5.html">Отзывы</a> <a href="2.php">Авторизация</a> | <a href="3.php">Регистрация</a></nav></div></pre>
</body>
</html>
<html>
<head>
<style>

.txt {

text-align:center;
font-size:32px;
padding:250;

}
</style>
</head>
<body>
<div class="txt">
<?php

mysql_connect('127.0.0.1:3306', 'root', '') or die('Не удалось подключиться ' . mysql_error());

echo "Успешное подключение!!!<br>";
mysql_select_db('my_1') or die('Не удалось выбрать базу данных!!!');

$query = "INSERT INTO `users` (`id`, `login`, `password`, `name`, `pass`) VALUES (NULL , '" . $_REQUEST['name'] . "' , '" . $_REQUEST['login'] . "', '" . $_REQUEST['password'] . "', '" . $_REQUEST['pass'] . "')";

$pass = $_REQUEST['password'];
$pass2 = $_REQUEST['pass'];
if ($pass != $pass2) {

die('Пароли не совпадают:(');
}
$login = $_REQUEST['login'];

$log = "SELECT * FROM `users` WHERE `login` = '$login'";
$result2 = mysql_query($log) or die('Ошибка ' . mysql_error());
if (mysql_fetch_array($result2, MYSQL_ASSOC)) {
echo "Логин существует";
} else {
$result = mysql_query($query) or die('Ошибка ' . mysql_error());
}



?>
</div>
</body>
</html>