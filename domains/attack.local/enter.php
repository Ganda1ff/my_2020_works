<?php
    session_start();
    if (isset($_POST['login']) && isset($_POST['pass'])) {
        include('config.php');

        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_base = "haker";
        $db_table = "users"; 

        $login = $_POST['login'];
        $password = $_POST['pass'];
        $mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_BASE);
        $authQuery = "SELECT * FROM `userinfo` WHERE `login` = '$login'";
        if (!$result = $mysqli->query($authQuery)) {
            die('Ошибка запроса: '. $mysqli->error);
        }
        if (!$result->num_rows) {
            echo('<font color="red">Неверный логин или пароль!</font>');
        } else {
            $user = $result->fetch_assoc();
            if ($user['pass'] !== hash('md5', $pass)) {
                echo('<font color="red">Неверный логин или пароль!</font>');
            } else {
                $_SESSION['user'] = $user;
            }
        }
    }
    if (isset($_SESSION['user'])) {
        echo("<h1> " . $_SESSION['users']['names'] . "</h1>");?>
    <title>Прекратить нарушения ограничения прав свободы передвижения граждан РФ</title>
<style>
        .name {
    font-family: 'Molengo', Georgia, Times, serif;
    font-size:44px;
    margin-top:-75px;
    margin-left:80px;
    user-select: none;
    -moz-user-select: none;
    -webkit-user-select: none;
}
.slogan {
margin-top:-5px;
margin-left:105px;
margin-bottom:300px;
font-size: 18px;
font-family:'Monserrat', sans-serif;
-moz-user-select: none;
-khtml-user-select: none;
user-select: none;    
-moz-user-select: none;
    -webkit-user-select: none;
}
.h4 {
    color:#202124;
    font-family: 'Google Sans','Noto Sans Myanmar UI',arial,sans-serif;
width:30%;
margin-left:410px;
margin-bottom:20px;
pointer-events:none;
-webkit-user-select: none;
user-select: none;
-moz-user-select: none;
}
#blockq {
cursor:pointer;
}
.img1 {
    border-radius: 50%;
    width:300px;
    height:auto;
    margin-left:300px;
    margin-bottom:10px;
}
.img1:hover {
    cursor:pointer;
}
.h1 {
    font-family: 'Google Sans','Noto Sans Myanmar UI',arial,sans-serif;
    font-size:40px;
    font-weight: bold;  
    width:870px;
    margin-top:-240px;
    margin-left: 200px;
}
img {
    border-radius:10px;
}
.img2 {
margin-left: 295px;
margin-top:10px;
pointer-events: none;
user-select: none;
-moz-user-select: none;
-webkit-user-select: none;
}
.img3 {
    cursor: pointer;
    margin-left:620px;
    margin-top:-80px;
}
.username {
    color:darkslategrey;
    font-family: 'Google Sans','Noto Sans Myanmar UI',arial,sans-serif;
    font-weight: bold;
    margin-left:700px;
    margin-top:-60px;
    cursor:pointer;
    width:200px;
}

#b {
    width:200px;
}
.main {
    font-family: 'Google Sans','Noto Sans Myanmar UI',arial,sans-serif;
    font-weight: 100;
    margin-top:20px;
    width:600px;
    margin-left:300px;
    font-size: 20px;
}
.sub {
    background-color: #adc2df;
    font-family: 'Google Sans',arial,sans-serif;
    color:#fff;
    font-weight: bold;
    width:350px;
    height:50px;
    line-height: 20px;
    padding:8px;
    font-size: 16px;
    letter-spacing: .25px;
    cursor:pointer;
    border:none;
    margin-top:0px;
    float:center;
    margin-left:400px;
    border-radius: 50px;
    margin-top:20px;
}
.sub:hover,
.sub:active {
    background-color: #9bb8e0;
}
.i {
   float:right;
  
}
.vote {
    font-family: 'Google Sans','Noto Sans Myanmar UI',arial,sans-serif;
    font-weight:100;
    font-size:25;
    color:#adc2df;
    margin-left:300px;
   background-color: #f5f6f8;
   padding:10px 65px 10px 65px;
   width:450px;
   text-align: center;
}

</style>
<link href="https://fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lekton" rel="stylesheet">
    <div id="blockq">

    <div class="i">
        
    
        <a href="profile2.php"><img src="https://static.change.org/profile-img/default-user-profile.svg" width=70 height=70></a>
    
    </div>
<div class="img"><img src="https://lh3.googleusercontent.com/8k-E0CX6s7fYwEhBPG6d_R1oxfLOHvYJtm4Fs2f7-kypdnbMGpjZVYHl9oKNPuIBjuk" width=70 peight=70><div class="name">RussianPetition</div></div>
   <div class="slogan">Изменим Россию к лучшему!</div>
   
    </div>
    <div class="h1">Прекратить нарушения ограничения прав свободы на передвижение граждан РФ</div>
    <div class="img1"><img src="https://assets.change.org/photos/3/ku/pd/opkUpdqNRkVbICI-800x450-noPad.jpg?1586637165" width=580></div>
    <div class="vote">Спасибо, вы поддержали петицию!</div>
    <div class="img2"><img src="/р2.png"></div>
    <div id="b">
    <div class="img3"><img src="https://static.change.org/profile-img/default-user-profile.svg" width=70 height=70></div>
    <div class="username">Пользователь_1
        Создал(а) эту петицию 23.04.2020
    </div>
</div>
<div class="main">
Требую прекратить произвол властей, которые действуют совершенно противозаконно, запугивая непросвещенных граждан РФ, введением незаконной системы пропускного режима!

На основе конституции РФ права на свободное передвижение граждан, без ввода ЧС в стране, пропускная система является незаконной и не имеет силы. Разве на основании указа, подтасованного непонятным образом закона, имеют права на введение откровенного режима слежки? Люди, очнитесь!

Прошу поддержать петицию, пока нас совсем не зазомбировали и не превратили в роботов! 

Людей лишили работы, людей лишают свободы!!! А это то, на что мы имеем право априори!

Мэр Москвы не объявлен президентом РФ, почему он выдает указы Требуем внесение ясности!
</div>
<a  href="main.php"><input type="submit" value="Отменить голос" class="sub"></a>
<?
} else {
?>
<title>Вход</title>
<style>
     .name {
    font-family: 'Molengo', Georgia, Times, serif;
    font-size:44px;
    margin-top:-75px;
    margin-left:80px;
    user-select: none;
    -moz-user-select: none;
    -webkit-user-select: none;
}
.slogan {
margin-top:-5px;
margin-left:105px;
margin-bottom:300px;
font-size: 18px;
font-family:'Monserrat', sans-serif;
-moz-user-select: none;
-khtml-user-select: none;
user-select: none;    
-moz-user-select: none;
    -webkit-user-select: none;
}
input {
        width:30%;
        margin-bottom:20px;
        border-radius: 40px;
    color: #202124;
    font-size: 16px;
    margin-left:355px;
    padding: 13px 15px;
    z-index: 1;
        height:56px;
        border:1px solid #ccc;
    }
    input:focus {
        outline:none;
        border:2px solid #a6b6cc;
    
    }
    input::placeholder {
        color:#a6b6cc;
    }
    h1 {
text-align:center;
font-family: 'Google Sans',arial,sans-serif;
margin-top:-100px;
    }
    #submit {
    background-color: #adc2df;
    font-family: 'Google Sans',arial,sans-serif;
    color:#fff;
    font-weight: bold;
    width:380px;
    height:50px;
    line-height: 20px;
    padding:8px;
    font-size: 16px;
    letter-spacing: .25px;
    cursor:pointer;
    border:none;
    margin-top:0px;
    float:center;
    margin-left:320px;
    border-radius: 50px;
    
}
#submit:hover,
#submit:active {
    background-color: #9bb8e0;
}
#submit2 {
    background-color: #fff;
    font-family: 'Google Sans',arial,sans-serif;
    color:#adc2df;
    font-weight: bold;
    width:380px;
    height:50px;
    line-height: 20px;
    padding:8px;
    font-size: 16px;
    letter-spacing: .25px;
    cursor:pointer;
    border:2px solid #adc2df;
    margin-top:0px;
    float:center;
    margin-left:320px;
    border-radius: 50px;
    margin-top:-15px;
}
#submit2:hover,
#submit2:active {
    background-color: #ebf4ff;
}

    </style>
    <link href="https://fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lekton" rel="stylesheet">
<div class="img"><img src="https://lh3.googleusercontent.com/8k-E0CX6s7fYwEhBPG6d_R1oxfLOHvYJtm4Fs2f7-kypdnbMGpjZVYHl9oKNPuIBjuk" width=70 peight=70><div class="name">RussianPetition</div></div>
   <div class="slogan">Изменим Россию к лучшему!</div>
<h1>Войдите в аккаунт</h1>
<form action="" method="POST">
    <input type="text" name="login" placeholder="Логин">
    <br>
    <input type="text" name="word" placeholder="Пароль">
    <br>
    <a href="main2.php"><input id="submit" type="submit" value="Войти"></a>
</form>
<a href="networks.php"><input type="submit" value="Зарегестрироваться" id="submit2"></a>
<?php
}
?>
