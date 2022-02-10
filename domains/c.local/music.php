<head>
<style>
    body {
        padding:40px;
        
    }
    body:hover {
        opacity:1;
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
    margin-left:100px;
}
.block1 {
    float:left;
    margin-left:385px;
    margin-top:100px;
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
div a {
    text-decoration: none;
    color:rgb(72, 49, 149);
    font-size:16px;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    float:right;
    margin-top:-33px;
}
h2 {
    font-weight:100;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    margin-left:200px;
    font-size:30px;
    margin-top:-30px;
    
}
.img {
    transform:rotate(180deg);
    transform: scale(-1, 1);
    filter:invert(0.7);
    transition:transform 0.5s ease-in;
    user-select: none;
    -webkit-user-select: none;
    -moz-user-select: none; 
}
.img:hover {
    transform:rotate(-360deg);
}
.button {
    float:left;
    margin-top:260px;
border-radius:3px;
width:40px;
height:40px;

background-image:url(enter.png);
filter:invert(0.5);
}
.button:hover {
    background:rgb(255, 119, 119);
    filter: invert(0);
    background-image:url(enter2.png);
    border:0px solid rgb(255, 119, 119);
    transform:rotate(-360deg);
}
.img2 {
width:40px;
height:40px;

}
.img2:hover {
    filter:invert(1);
}
.button:nover ~ .img2 {
    filter:invert(1);
}
</style>
</head>

<body>
    <a href="/start.php"><img class="img" src="back.png" width=30 height=30></a><h2>Зарегистрируйтесь и сохраняйте свою любимую музыку!</h2>
<a href="/index.php"><div class="button"><!--<img class="img2" src="enter.png" width=30 height=30>--></div></a>
    <div class="block1">
<h1>Регистрация</h1>
<form method="POST" action="finishRegistration.php">
<input type="text" name="name" placeholder="Полное имя"></br>
<input type="text" name="login" placeholder="Email"></br>
<input type="password" name="password" placeholder="Придумайте надёжный пароль"></br>
<input type="password" name="verificationPassword" placeholder="Повторите пароль" ></br>

<input type="submit" value="Регистрация" class="registerbutton"><div class="haveaccount"><a href="#">Уже есть аккаунт? </a></div>

</form>
</div>
<script>

</script>
</body>



