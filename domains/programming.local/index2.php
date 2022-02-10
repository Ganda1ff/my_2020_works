<title>Главная</title>
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
    }?>
<style>
        .profile {
            color:transparent;
background-image:url(https://cdn1.ntv.com.tr/gorsel/pzeDhZxJfESBLEc8ihdXxw.jpg?width=1000&mode=both&scale=both&v=1285239178000);
background-size:160px 120px;
background-position: center;
cursor:pointer;
margin-top:-80px;
border:10px solid white;
border-radius:50%;
width:120px;
height:120px;
margin-left:150px;
margin-right:30px;
box-shadow:0 0 10px 0  black;
transition: background-image 0.5s ease-in;
}
.profile:hover,
.profile:active {
    color:white;
    background-size:500px 500px;
    background-image:url(https://images.wallpaperscraft.com/image/black_color_background_148445_2560x1080.jpg);
    background-color: black;
}
p {
    margin-top:30px;
    margin-left:28px;
    text-align:center;
font-size: 15px;
width:60px;
font-weight:bold;
-moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;


}
p::selection {
   background: transparent;
}
p::-moz-selection {
   background: transparent;
}
.text {
    margin-left:300px;
    margin-top:150px;
    font-size:25px;
    max-width:200px;
}
.head {
    border-radius:5px;
    margin-top:-205px;
    margin-left:120px;
    width:900px;
    height:120px;
    background-color:darkslategrey;
}

.button {
    background-color:transparent;
    cursor:pointer;
height:25px;
width:120px;
margin-left:600px;
border:1px solid rgb(175, 73, 73);
margin-top:-33px;
color:rgb(175, 73, 73);
border-radius:2px;
text-align:left;
padding:0 0 0px 10px;
font-weight:bold;
}
.button:focus {
    outline: 0;
outline-offset: 0;
color: rgb(160, 167, 167);
    border:1px solid rgb(160, 167, 167);
    width:130px;
}


.button2 {
    background-color:transparent;
    cursor:pointer;
height:25px;
width:165px;
margin-left:750px;
border:1px solid rgb(175, 73, 73);
margin-top:-33px;
color:rgb(175, 73, 73);
border-radius:2px;
transition: 0.4s ease-out;
text-align:left;
padding:0 0 0px 10px;
font-weight:bold;
}
.button2:focus {
    outline: 0;
outline-offset: 0;
}
.button2:hover,
.button2:active {
    box-shadow:0 0 2px 0 black;
}

.p {
    cursor:pointer;
    margin-top:-20px;
    text-align:center;
    font-weight:bold;
    color:white;
    -moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
font-size:60px;
transition: font-size 0.6s ease-in;
}
.p:hover,
.p:active {
    font-size:80px;
}


    </style>
    <div class="text">
<?php
    if (isset($_SESSION['user'])) { 
        echo("<h3>" . $_SESSION['user']['name'] . "</h3>");
?>
</div>

<div class="head"><div class="p">📷</div></div>
<div class="profile"><p>📷</br> Добавить фото</p></div>

<input class="button" type="submit" value="+ Подписаться">
<button class="button2">Количество лайков: x</div>

<span class="likebtn-wrapper" data-theme="bootstrap" data-lang="ru" data-i18n_like=" " data-identifier="item_1" data-show_like_label="false" data-counter_frmt="km" data-share_enabled="false" data-loader_show="true"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>

<script>
  document.querySelector('.button').onclick = function(){
	         this.value = this.value == "+ Подписаться"? "✔ Вы подписаны" : "+ Подписаться";
	        };

</script>
<script type="text/javascript" language="javascript">
   
</script>


<script type="text/javascript" language="javascript">
function changeBg(){
   document.getElementById("ee").style.backgroundColor = 'red';
}
</script>
<?php
    }
    else {
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
