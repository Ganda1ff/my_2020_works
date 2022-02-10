<html>
    <head>
<style>
    body {
        width:80%;
        height:10%;
    }
    #myObj {
        border:3px solid black;
        cursor:pointer;
        margin-bottom:-200px;
        margin-left:70px;
        margin-top:250px;
    border: 1px;width: 450px;height: 350px;
    cursor:pointer;
    transition: color 0.3s ease-out,
              background-color 0.3s ease-out,
              border-color 0.3s ease-out;   
    }
    #myObj:hover,
    #myObj:active {
        box-shadow:0 0 15px 0 black;
    }

    #count {
        cursor:pointer;
        margin-left:690px;
        margin-top:-237px;
    border: 1px;width: 500px;height: 350px;
    cursor:pointer;
    transition: color 0.3s ease-out,
              background-color 0.3s ease-out,
              border-color 0.3s ease-out;   
    }
    #count:hover,
    #count:active {
        box-shadow:0 0 15px 0 black;
    }
.count {
width:70px;
height:45px;
background-color:white;
border:1px solid black;
text-align:center;
font-size:40px;
margin-top:5px;
margin-left:378px;
}
p {
    font-size:40px;
    margin-left:565px;
    margin-top:-200px;
}
.count2 {
width:70px;
height:45px;
background-color:white;
border:1px solid black;
text-align:center;
font-size:40px;
margin-top:5px;
margin-left:690px;
}

.a {
    margin-bottom:-150px;
}
.left {
    margin-left:70px;
    
}
.right {
    margin-top:-70px;
    margin-right:-175px;
    float:right;
}
.registration_succsess {
margin-top:-550px;
margin-left:480px;
}
.head {
    margin-left:70px;
    width:111%;
height:50px;
background-color:rgb(175, 73, 73);
}
.border {
    border-radius:5px;
    margin-left:70px;
    margin-top:30px;
    padding:40px 90px 40px 0;
    width:220px;
    height:240px;
    border:2px solid #ded3dd;
}
h3 {
    margin-left:-20px;
    color:grey;
    margin-top:-20px;
    font-size:15px;
    width:500px;
}
h2 {
    margin-top:-20px;
    margin-left:-50px;
    font-size:30px;
    width:500px;
}
#input {
    border-radius:3px;
    margin-bottom:10px;
    margin-left:-35px;
    width:240px;
    height:30px;
}
input.big_text, input.big_text ~ .placeholder .ph_input {
    font-size: 14px;
    padding: 6px 12px 8px;
    box-sizing: border-box;
    width:300px;
   
}
input.big_text {
    height: 35px;
    border-radius: 3px;
    
}
input.big_text:focus {
  outline: 0;
outline-offset: 0;
border:5px solid #f0ff05; /* цвет обводки */
}
.fakeinput, .fakeinput ~ .placeholder .ph_input, div[contenteditable="true"], div[contenteditable="true"] ~ .placeholder .ph_input, input.big_text, input.big_text ~ .placeholder .ph_input, input.dark, input.dark ~ .placeholder .ph_input, input.search, input.search ~ .placeholder .ph_input, input.text, input.text ~ .placeholder .ph_input, textarea, textarea ~ .placeholder .ph_input {
    color: 
#000;
padding: 3px 5px;
margin: 0;
    margin-bottom: 0px;
border: 1px solid
    #d3d9de;
    margin-bottom:-50px;
    margin-left:30px;
    
   
}
.index_rcolumn input.big_text {
    margin-bottom: -30px;
    width: 270px;
    
}
#submit {
    cursor:pointer;
    background-color:#ded3dd;
    width:240px;
    margin-left:-35px;
    height:30px;
    border-radius:3px;
    border:1px solid #ded3dd;
}
#submit:hover,
#submit:active {
    background-color: #d3d9d1;
}
.border2 {
    border-radius:5px;
    margin-left:775px;
    margin-top:-320px;
    padding:40px 90px 40px 0;
    width:220px;
    height:160px;
    border:2px solid #ded3dd;
}
#input2 {
    margin-top:-20px;
    border-radius:3px;
    margin-bottom:30px;
    margin-left:-20px;
    width:240px;
    height:30px;
}
#submit2 {
    margin-top:-20px;
    cursor:pointer;
    background-color:#ded3dd;
    width:240px;
    margin-left:-20px;
    height:30px;
    border-radius:3px;
    border:1px solid #ded3dd;
}
#submit2:hover,
#submit2:active {
    background-color: #d3d9d1;
}
h1 {
    margin-top:50px;
    margin-left:60px;
}
h6 {
    color:grey;
    font-size:15px;
    text-align:center;
    width:200px;
    margin-top:-20px;
    margin-right:140px;
}
    </style>
    </head>
    <body>
        <div class="head"></div>
        <div class="border">
        <div class="left">
    <div class="h1"><h2>Добро пожаловать!</h2><h3>Моментальная регистрация!</h3></div>
<form action="finishRegistration.php" method="POST">
    <input class="big_text" id="input" type="text" name="name" placeholder="Имя"><br>
    <input class="big_text" id="input" type="text" name="login" placeholder="Логин"><br>
    <input class="big_text" id="input" type="password" name="password" placeholder="Пароль"><br>
    <input class="big_text" id="input" type="password" name="verificationPassword" placeholder="Повторите пароль"><br>
    <input id="submit" type="submit" value="Зарегистрироваться"><br>
</form>
        
<div class="a"><a href="index.php">На главную.</a></div></div></div>
<div class="border2">
<div class="right">
    <h1>Вход</h1><h6>Если у вас уже есть аккаунт, просто войдите!</h6>
<form action="index2.php" method="POST">
    <input id="input2" class="big_text" type="text" name="login" placeholder="Логин">
    <br>
    <input id="input2" class="big_text" type="password" name="password" placeholder="Пароль">
    <br>
    <input type="submit" id="submit2" value="Войти">
</form>

</div></div>

    <div id="myObj"><img src="https://ovideo.ru/images/gallery/0029/8838/0005.jpg" width=450 height=350><div id="counter" class="count">0</div></div><p> Или</p><div id="count"><img src="http://i1.ytimg.com/vi/2m6yE9W9BXs/maxresdefault.jpg" width=500 height=350></div><div id="counts" class="count2">0</div>


    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script type="text/javascript" language="javascript">
$(document).ready(function() {
    $('#myObj').click(function() {
        $('#counter').html(+$('#counter').html()+1);
    });
});
</script>

<script type="text/javascript" language="javascript">
$(document).ready(function() {
    $('#count').click(function() {
        $('#counts').html(+$('#counts').html()+1);

    });
});

</script>



    </body>
</html>