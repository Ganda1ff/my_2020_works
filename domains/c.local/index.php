<head>
<style>
    body {
        padding:40px;
    }
input {
    margin-bottom:5px;
    margin-top:11px;
    border-radius:10px;
    border:1px solid #ccc;
    width:360px;
    padding:10px;
    outline: none;
    box-shadow:0 0 1px 0 #ccc;
}
input:focus {
    border:2px solid rgb(255, 119, 119);
}
h1 {
    font-weight:100;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin-bottom:-0px;
    margin-left:140px;
}
.block1 {
    float:left;
}
.registerbutton {
    width:50%;
    cursor:pointer;
    border:none;
    background: rgb(255, 103, 103);
    color:#fff;
    margin-top:15px;
}

.registerbutton:hover {
    border:none;
    background: rgb(253, 74, 74);
}
a {
    text-decoration: none;
    color:rgb(72, 49, 149);
    font-size:16px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    float:right;
    margin-top:-33px;
}

</style>
</head>

<?php
    
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
<div class="block1">
<h1>Вход</h1>
<form action="" method="POST">
<input type="text" name="login" placeholder="Email"></br>
<input type="password" name="password" placeholder="Пароль"></br>
<input type="submit" value="Войти" class="registerbutton"><div class="haveaccount"><a href="#">Забыли пароль?</a></div>
</form>
</div>
<?php
}
?>

