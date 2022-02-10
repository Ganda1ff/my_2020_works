<?php
    session_start();
    if (isset($_POST['login']) && isset($_POST['password'])) {
        include('config.php');
        $login = $_POST['login'];
        $password = $_POST['password'];
        $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB);
        $authQuery = "SELECT * FROM `users` WHERE `login` = '$login'";
        if (!$result = $mysqli->query($authQuery)) {
            die('Ошибка запроса: '. $mysqli->error);
        }
        if (!$result->num_rows) {
            echo('<font color="red">Неверный логин или пароль!</font>');
        } else {
            $user = $result->fetch_assoc();
            if ($user['password'] !== hash('md5', $password)) {
                echo('<font color="red">Неверный логин или пароль!</font>');
            } else {
                $_SESSION['user'] = $user;
            }
        }
    }
    if (isset($_SESSION['user'])) {
        echo("<h1>Добро пожаловать, " . $_SESSION['user']['name'] . "</h1>");
    } else {
?>
<h1>Sign in</h1>
<form action="" method="POST">
    <input type="text" name="login" placeholder="Логин">
    <br>
    <input type="password" name="password" placeholder="Пароль">
    <br>
    <input type="submit">
</form>
<a href="registration.php">Зарегестрироваться.</a>
<?php
}
?>

<a href="aboutMe.php"> Обо мне</a>