<title>Добро пожаловать!</title>
<?php
    include('config.php');
    if (isset($_POST['login']) && isset($_POST['pass'])){

        // Переменные с формы
        $login = $_POST['login'];
        $pass = $_POST['pass'];
        $name = $_POST['name'];
        $age = $_POST['age'];

        // Параметры для подключения
        $db_host = "localhost";
        $db_user = "root";
        $db_password = "";
        $db_base = "haker";
        $db_table = "users"; 
        
        // Подключение к базе данных
        $mysqli = new mysqli($db_host,$db_user,$db_password,$db_base);
        
        // Если есть ошибка соединения, выводим её и убиваем подключение
        if ($mysqli->connect_error) {
            die('Ошибка : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
        }
        
        $result = $mysqli->query("INSERT INTO ".$db_table." (login,pass, name, age) VALUES ('$login','$pass', '$name', '$age')");
        
        if ($result == true){
    ?>
            <style>
                body {
                    font-family: 'Google Sans','Noto Sans Myanmar UI',arial,sans-serif;
                }
                h1 {
        color: #202124;
    padding-bottom: 0;
    padding-top: 16px;
    font-family: 'Google Sans','Noto Sans Myanmar UI',arial,sans-serif;
    font-size: 24px;
    font-weight: 400;
    line-height: 1.3333;
    margin-left:400px;
    margin-top:50px;
    }
    svg {
        margin-top:10px;
        width: 75;
    height: 24;
    margin-left:140px;
    }
    h3 {
        color: #202124;
    font-size: 16px;
    font-weight: 400;
    letter-spacing: .1px;
    line-height: 1.5;
    padding-bottom: 0;
    padding-top: 8px;
    margin-top:-14px;
    font-family:roboto,'Noto Sans Myanmar UI',arial,sans-serif;
    margin-left:270px;
    margin-bottom:25px;
    }
    .name {
    font-family: 'Molengo', Georgia, Times, serif;
    font-size:44px;
    margin-top:-75px;
    margin-left:80px;
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
.succsess {
    margin-left:444px;
    font-size:25px;
}
#submit {
    background-color: #adc2df;
    font-family: 'Google Sans',arial,sans-serif;
    color:#fff;
    font-weight: bold;
    width:250px;
    height:50px;
    line-height: 20px;
    padding:8px;
    font-size: 16px;
    letter-spacing: .25px;
    cursor:pointer;
    border:none;
    margin-top:0px;
    float:center;
    margin-left:530px;
    border-radius: 50px;
    
}
#submit:hover,
#submit:active {
    background-color: #9bb8e0;
}
h2 {
    margin-left:450px;
}
            </style>
                <link href="https://fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lekton" rel="stylesheet">
    <div id="blockq">
<div class="img"><img src="https://lh3.googleusercontent.com/8k-E0CX6s7fYwEhBPG6d_R1oxfLOHvYJtm4Fs2f7-kypdnbMGpjZVYHl9oKNPuIBjuk" width=70 peight=70><div class="name">RussianPetition</div></div>
   <div class="slogan">Изменим Россию к лучшему!</div>
    </div>
                <div class="success"><h2>Вы успешно зарегестрировались!!!</h2><br>
                <a href="/main.php"><input type="submit" id="submit" value="Перейти к петиции"></a></div>
            <?
            }else{
    ?>
    <h2>Упс, вышла ошибка( <a href="/main3.php">Пожалуйста, попробуйте ещё</a></h2>
    <?
            }
}
?>   

 