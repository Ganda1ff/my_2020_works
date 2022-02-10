<html>
    <head>
      <title>Добро пожаловать!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <meta charset="utf-8">
        <style>

@media (max-width: 930px) { /* это будет показано при разрешении монитора до 930 пикселей */
  .content-wrapper {padding: 0;} /* основное содержимое занимает всё пространство окна */
}

@media (max-width: 930px) and (min-width: 470px) {  /* для разрешения экрана от 470 до 930 пикселей */
  aside {position: static; width: 100%; background: #ccc;} /* боковая колонка смещается согласно расположению в HTML и меняет фон */
}

@media (max-width: 469px) { /* если максимальное разрешение экрана составит 469 пикселей */
  body {font: .9em/1em "Helvetica Neue",Arial,Helvetica,sans-serif;} /* меняется шрифт */
  aside {display: none;} /* боковая колонка исчезает */
}

 /* Tooltip container */
 .tooltip {
    position: relative;
    display: inline-block;
     /* If you want dots under the hoverable text */
}

/* Tooltip text */

.tooltip .tooltiptext {
  cursor: default;
  font-family:'Arial';
    visibility: hidden;
    width: 200px;
    background-color: #be4b49;
    color: #fff;
    text-align: center;
    padding: 10px 10;
    border-radius: 3px;

    /* Position the tooltip text */
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: 50px;
    margin-top:10px;

    /* Fade in tooltip */
    opacity: 0;
    transition: opacity 0.3s;
}

/* Tooltip arrow */
.tooltip .tooltiptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #be4b49 transparent transparent transparent;
}

/* Show the tooltip text when you mouse over the tooltip container */
.tooltip:hover .tooltiptext {
    visibility: visible;
    opacity: 1;

} 


.tooltip2 {
    position: relative;
    display: inline-block;
     /* If you want dots under the hoverable text */
}

/* Tooltip text */
.tooltip2 .tooltiptext2 {
  cursor: default;
  box-shadow:0 0 10px 0 #000;
  font-family:'Arial';
    visibility: hidden;
    width: 200px;
    background-color: white;
    color: #000;
    text-align: center;
    padding: 10px 10;
    border-radius: 3px;

    /* Position the tooltip text */
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: 0px;
    margin-top:-20px;

    /* Fade in tooltip */
    opacity: 0;
    transition: opacity 0.3s;
}

/* Tooltip arrow */


/* Show the tooltip text when you mouse over the tooltip container */
.tooltip2:hover .tooltiptext2 {
    visibility: visible;
    opacity: 1;
} 

.tooltip3 {
    position: relative;
    display: inline-block;
     /* If you want dots under the hoverable text */
}

/* Tooltip text */
.tooltip3 .tooltiptext3 {
  cursor: default;
  box-shadow:0 0 10px 0 #000;
  font-family:'Arial';
    visibility: hidden;
    width: 200px;
    background-color: white;
    color: #000;
    text-align: center;
    padding: 10px 10;
    border-radius: 3px;

    /* Position the tooltip text */
    position: absolute;
    z-index: 1;
    bottom: 50%;
    left: 50%;
    margin-left: 56px;
    margin-top:-1000px;

    /* Fade in tooltip */
    opacity: 0;
    transition: opacity 0.3s;
}

/* Tooltip arrow */


/* Show the tooltip text when you mouse over the tooltip container */
.tooltip3:hover .tooltiptext3 {
    visibility: visible;
    opacity: 1;
} 
    body{
  font-family: 'Impact', sans-serif;
  min-width: 960px;
}
.head {
width:100%;
height:60px;
background-color: grey;
}

.txt {

    padding:7px 15px 5px ;
    font-size:40px;
    color:white;

}
.input {
   border-radius: 5px;
   width:200px;
   height:20px;

}
.block {
    border:1px solid grey;
    border-radius: 5px;
    box-shadow: 0 0 4px grey;
    width:360px;
    height:150px;
    margin-top:50px;
    margin-left:700px;
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
    margin-bottom:-15px;
    margin-left:30px;
    margin-top:30px;
   
}
.index_rcolumn input.big_text {
    margin-bottom: 15px;
    width: 270px;
    
}

.button {
    cursor:pointer;
background-color: orange;
width:100px;
padding: 7px 30px 8px;
line-height: 20px;
text-decoration: none;
font-family:'Arial';
color:white;
border-radius:5px;
font-size:14px;
margin-top:0px;
margin-left:30px;
border:0;
}
.button:hover,
.button:active {
    background-color: rgb(253, 181, 47);

}
.button:focus {
outline: 0;
outline-offset: 0;
}
.button2 {
    cursor:pointer;
background-color: #d3d9de;
width:140px;
padding: 7px 2px 8px;
line-height: 20px;
text-decoration: none;
font-family:'Arial';
color:white;
border-radius:5px;
font-size:14px;
margin-top:30px;
margin-left:57px;
border:0;
}
.button2:hover,
.button2:active {
    background-color: rgb(206,206,206);
}
.button2:focus {
outline: 0;
outline-offset: 0;
}

/*.d15 {
    padding: 0 20 0 0;
    color:white;
    transform:rotate(150deg);
    margin-left:350px;
width: 330px; 
height: 20px; 
background: grey;
position: relative;
}
.d15:after {
    
content: "";
width: 0; 
height: 0;
position: absolute; 
top: -10px; 
left: 100%;
border-width: 20px 0 20px 40px;
border-style: solid;
border-color: transparent grey;
}*/

.text {
    font-size: 14px;
    color:white;
    transform:rotate(180deg);
    padding:0 0 2 0;
}

.block2 {
    border:1px solid grey;
    border-radius: 5px;
    box-shadow: 0 0 4px grey;
    width:360px;
    height:380px;
    margin-top:0px;
    margin-left:80px;
}

.t {
    margin-top:20px;
    color:black;
    font-family:'Arial';
    font-size:23px;
    margin-left:60px;
    font-weight: bold;
    
}
.tt {
    margin-top:5px;
    color:grey;
    margin-bottom:-5px;
    font-family:'Arial';
    font-size:16px;
    margin-left:70px;
}

.button3 {
    cursor:pointer;
background-color: orange;
width:140px;
padding: 7px 30px 8px;
line-height: 20px;
text-decoration: none;
font-family:'Arial';
color:white;
border-radius:5px;
font-size:14px;
margin-top:30px;
margin-left:5px;
border:0;
}
.button3:hover,
.button3:active {
    background-color: rgb(253, 181, 47);
}
.button3:focus {
outline: 0;
outline-offset: 0;
}
.button4 {
    cursor:pointer;
background-color:#68b35d;
width:200px;
padding: 7px 0px 8px;
line-height: 20px;
text-decoration: none;
font-family:'Arial';
color:white;
border-radius:5px;
font-size:14px;
margin-top:-35px;
margin-left:155px;
border:0;
}
.button4:hover,
.button4:active {
  background-color: rgb(6, 219, 60);
}
.button4:focus {
outline: 0;
outline-offset: 0;
}

.dateDropdown {
    margin-left:200px;
    margin-top:30px;
 
}


.select {
    position: relative;
}
.select select {
  margin-left:30px;
  margin-top:30px;
    display: block;
    height:35px;
    width: 70px; /* от ширины блока div */
    padding: 0px 0px 0px 15px;/* отступы от текста до рамки */
    background: none; /* убираем фон */
    border: 1px solid #d3d9de; /* рамка */
    border-radius: 3px;/* скругление полей формы */
    -webkit-appearance: none;/* Chrome */
    -moz-appearance: none;/* Firefox */
    appearance: none;/* убираем дефолнтные стрелочки */
    font-family: 'Arial';/* наследует от родителя */
    font-size: 16;
    color: grey;
}
.select:after {
  cursor:pointer;
  color:grey;
 margin-right:252px;
    content: "";
    display: inline-block;
    border-style: solid;
    border-width: 6px 5px 0 5px;
    border-color: grey transparent transparent transparent;
    position: absolute;
    top: 50%;
    right: 1rem;
    z-index: 1;
    margin-top: -3px;
}
.select:focus {
  outline: 0;
outline-offset: 0;
border:5px solid #f0ff05; /* цвет обводки */
}

._58mq select {
    font-size: 13px;
    height: 30px;
    padding: 5px;
}

input, select, textarea {
    background-color: 
#fff;
color:
    #1c1e21;
}
select {
 
    width:60px;
    margin-top:30px;
    height:35px;
    padding: 0px 0px 0px 2px;/* отступы от текста до рамки */
    background: none; /* убираем фон */
    border: 1px solid #d3d9de; /* рамка */
    font-size:16px;
    color:grey;
    border-radius: 3px;
}

#facebook ._-kb span {
    font-family: inherit;
}
#facebook ._-kb div {
    font-family: inherit;
}
._4bl7, ._4bl9 {
    word-wrap: break-word;
}

.left {
  margin-left:30px;
}
.left:focus {
  outline: 0;
outline-offset: 0;
border:5px solid #f0ff05; /* цвет обводки */
}
.left2 {
  margin-left:92px;
  margin-top:-65px;
}
.left2:focus {
  outline: 0;
outline-offset: 0;
border:5px solid #f0ff05; /* цвет обводки */
}
.left3 {
  margin-left:154px;
  margin-top:-65px;
}
.left3:focus {
  outline: 0;
outline-offset: 0;
border:5px solid #f0ff05; /* цвет обводки */
}
.right {
  margin-left:270px;
  margin-top:-65px;
}
.right:focus {
  outline: 0;
outline-offset: 0;
border:5px solid #f0ff05; /* цвет обводки */
}

#search {
  width:190px;
  height:40px;
  font-size:16px;
  border: grey;
  padding: 12px 20px 12px 20px;
  margin-top:-50px;
  margin-left:200px;
  background-position: 10px 10px; 
  -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}
#search:focus {
  width:500px;
}

.hi {
font-family:'Arial';
font-size:25px;
font-weight: bold;
margin-top:50px;
margin-left:75px;
margin-bottom:-130px;
}

.hi2 {
color:grey;
font-size:15px;
font-family:'Arial';
margin-top:140px;
margin-left:80px;
margin-bottom:-130px;

}

.hi3 {
color:grey;
font-size:15px;
font-family:'Arial';
margin-top:130px;
margin-left:58px;
margin-bottom:-130px;

}
.hi4 {
color:grey;
font-size:15px;
font-family:'Arial';
margin-top:130px;
margin-left:180px;
margin-bottom:-130px;

}
.i {
  margin-top:-13px;
  margin-bottom:-20px;
  margin-left:320px;
  border-radius:50%;
}
.i2 {
  margin-top:-26px;
  margin-bottom:-20px;
  margin-left:220px;
  border-radius:50%;
}
.i3 {
  margin-top:-26px;
  margin-bottom:-20px;
  margin-left:335px;
  border-radius:50%;
}

.block3 {
    cursor:pointer;
background-color:transparent;
border: 2px solid #d3d9de;
width:150px;
padding: 7px 0px 8px;
height: 250px;
text-decoration: none;
font-family:'Arial';
color:white;
border-radius:5px;
font-size:14px;
margin-top:-300px;
margin-left:910px;

}
.block3:hover,
.block3:active {

margin-left:900px;
  box-shadow: 0 0 10px grey;
  position: relative;
    opacity: 1;
    transform: scale(1.1); /*вот так*/
    outline: 0;
outline-offset: 0;
border:5px solid #f0ff05; /* цвет обводки */
}

.bottom {
  background-color:lightgrey;
width:143px;
height:30px;
font-family:'Arial';
margin-top:215px;
border-radius: 0px 0px 5px 5px;
font-size:16px;
padding:15px 0  0 8px;
}
.i4 {
  margin-bottom:-200px;
  margin-top:80px;
  margin-left:50px;
  height:50px;
  width:50px;
}
.pl {
  font-size:40px;
  margin-top:83px;
  margin-left:63px;
  color:white;
  margin-bottom:-128px;
}

#wrap{
display: none;
opacity: 0.8;
position: fixed;
left: 0;
right: 0;
top: 0;
bottom: 0;
padding: 16px;
background-color: rgba(1, 1, 1, 0.725);
z-index: 100;
overflow: auto;
}
 
#window{
width: 260px;
height: 260px;
margin: 200px auto;
display: none;
background: #fff;
z-index: 200;
position: fixed;
left: 0;
right: 0;
top: 0;
bottom: 0;
padding: 16px;
box-shadow:0 0 10px 0 black;
}
 
.close{
margin-left: 245px;
margin-top: -10px;
cursor: pointer;
color:lightgrey;
}
.close:hover,
.close:active {
  color:darkgrey;
}

#enter {
  font-size: 14px;
    padding: 6px 12px 8px;
    box-sizing: border-box;
    width:200px;
    height: 35px;
    border-radius: 3px;
    border: 1px solid ;
color: #000;
padding: 3px 5px;
margin: 0;
box-shadow: inset 0 0 1px 0 grey;
border: 1px solid
    #d3d9de;

    margin-left:30px;
    margin-top:20px;
}
#enter:focus {
  outline: 0;
outline-offset: 0;
border:5px solid #f0ff05; /* цвет обводки */
}
#enter2 {
  font-size: 14px;
    padding: 6px 12px 8px;
    box-sizing: border-box;
    width:200px;
    height: 35px;
    border-radius: 3px;
    border: 1px solid ;
color: #000;
padding: 3px 5px;
margin: 0;
box-shadow: inset 0 0 1px 0 grey;
border: 1px solid
    #d3d9de;

    margin-left:30px;
    margin-top:15px;
}
#enter2:focus {
  outline: 0;
outline-offset: 0;
border:5px solid #f0ff05; /* цвет обводки */
}
.vhod {
  margin-left:45px;
  font-size:17px;
  font-weight: bold;
  color:black;
  font-family:'Arial';
  margin-top:-20px;
}
p {
  font-family:'Arial';
  font-size:13px;
  margin-left:27px;
}


.custom-checkbox:not(:disabled):not(:checked)+label:hover::before {
  border-color: #b3d7ff;
}
/* стили для активного состояния чекбокса (при нажатии на него) */
.custom-checkbox:not(:disabled):active+label::before {
  background-color: #b3d7ff;
  border-color: #b3d7ff;
}
/* стили для чекбокса, находящегося в фокусе */
.custom-checkbox:focus+label::before {
  box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}
/* стили для чекбокса, находящегося в фокусе и не находящегося в состоянии checked */
.custom-checkbox:focus:not(:checked)+label::before {
  border-color: #80bdff;
}
/* стили для чекбокса, находящегося в состоянии disabled */
.custom-checkbox:disabled+label::before {
  background-color: #e9ecef;
}
.custom-checkbox {
  position: absolute;
  z-index: -1;
  opacity: 0;
  margin-left:25px;
  
}
.custom-checkbox+label {
  display: inline-flex;
  align-items: center;
  user-select: none;
  font-family:'Arial';
  font-size:14px;
  margin-top:10px;
  margin-left:30px;
}
.custom-checkbox+label::before {
  content: '';
  display: inline-block;
  width: 1em;
  height: 1em;
  flex-shrink: 0;
  flex-grow: 0;
  border: 1px solid #adb5bd;
  border-radius: 0.25em;
  margin-right: 0.5em;
  background-repeat: no-repeat;
  background-position: center center;
  background-size: 50% 50%;
}
.custom-checkbox:checked+label::before {
  border-color: grey;
  background-color: #0b76ef;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23fff' d='M6.564.75l-3.59 3.612-1.538-1.55L0 4.26 2.974 7.25 8 2.193z'/%3e%3c/svg%3e");
}

.button5 {
    cursor:pointer;
background-color:#68b35d;
width:200px;
padding: 7px 0px 8px;
line-height: 20px;
text-decoration: none;
font-family:'Arial';
color:white;
border-radius:5px;
font-size:14px;
margin-top:10px;
margin-left:30px;
border:0;
}
.button5:hover,
.button5:active {
  background-color: rgb(6, 219, 60);
}
.button5:focus {
outline: 0;
outline-offset: 0;
}
.button6 {
    cursor:pointer;
background-color:lightgrey;
width:200px;
padding: 7px 0px 8px;
line-height: 20px;
text-decoration: none;
font-family:'Arial';
color:white;
border-radius:5px;
font-size:14px;
margin-top:10px;
margin-left:30px;
border:0;
}
.button6:hover,
.button6:active {
  background-color: rgb(200,200,200);
}
.button6:focus {
outline: 0;
outline-offset: 0;
}

.password {
position: relative;

}

.password-control {
position: absolute;
top: 11px;
right: 6px;
display: inline-block;
width: 20px;
height: 20px;
background: url(/view.svg) 0 0 no-repeat;
}

.password-control.view {
background: url(/no-view.svg) 0 0 no-repeat;

}
         </style>
    </head>
    <body>
        <div class="head"><div class="txt">LINK UP</div> <input type="text" id="search" name="search" placeholder="🔍 Введите запрос..."></div>
<div class="hi">Добро пожаловать на LINK UP!</div> <div class="hi2">Общайтесь с людьми по всему миру! Присылайте</br></div><div class="hi3"> сообщения, обменивайтесь фотографиями, комментируйте </br>записи и оставайтесь в курсе новостей ваших друзей, где бы </div><div class="hi4">Вы не находились!</div>
        <div class="block">
<form action="index.php" method="POST">
<input type="text" class="big_text" name="login" id="index_email" value="" placeholder="Телефон или email">
<input type="password" class="big_text" name="password" id="index_email" value="" placeholder="Пароль" minlenght="6" maxlenght="20">
<button class="button">Войти</button>
<button class="button2">Забыли пароль?</button>
</form>
</div>
<!--<div class="d15"><div class="text">Если у вас уже есть аккаунт, просто выполните вход.</div></div>-->

<div class="block2">
    <div class="t">Впервые в LINK UP?</div>
    <div class="tt">Моментальная регистрация</div>
<form action="regsocial2.php" method="POST">
<input type="text" class="big_text" name="name" id="index_email" value="" placeholder="Пожалуйста, введите своё имя"><div class="tooltip"><div class="i"><img src="https://images.squarespace-cdn.com/content/v1/50372f4584ae8edfcf8493b7/1374150582891-0MHINB2QIT8K2FDD1ISV/ke17ZwdGBToddI8pDm48kEReVwPdFj5x-0njwSgIyM1Zw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PINcVj2hNpPUggRlCSnfe-zt0ckF5S8dIqUSlXcfM-JuM/Question+Mark+Grey+Lrg.PNG" widrh=20 height=20 title=""></div><span class="tooltiptext">Как вас зовут?</span></div> 
<input type="text" class="big_text" name="login" id="index_email" value="" placeholder="Телефон или email"><div class="tooltip"><div class="i"><img src="https://images.squarespace-cdn.com/content/v1/50372f4584ae8edfcf8493b7/1374150582891-0MHINB2QIT8K2FDD1ISV/ke17ZwdGBToddI8pDm48kEReVwPdFj5x-0njwSgIyM1Zw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PINcVj2hNpPUggRlCSnfe-zt0ckF5S8dIqUSlXcfM-JuM/Question+Mark+Grey+Lrg.PNG" widrh=20 height=20 title=""></div><span class="tooltiptext">Номер телефона и email потребуются вам в случае сброса пароля.</span></div>   
<div class="password"><input type="password" class="big_text" name="password" id="password-input" value="" placeholder="Пароль" minlenght="6" maxlenght="20"><a href="#" class="password-control"></a></div><div class="tooltip"><div class="i"><img src="https://images.squarespace-cdn.com/content/v1/50372f4584ae8edfcf8493b7/1374150582891-0MHINB2QIT8K2FDD1ISV/ke17ZwdGBToddI8pDm48kEReVwPdFj5x-0njwSgIyM1Zw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PINcVj2hNpPUggRlCSnfe-zt0ckF5S8dIqUSlXcfM-JuM/Question+Mark+Grey+Lrg.PNG" widrh=20 height=20 title=""></div><span class="tooltiptext">Пароль должен содержать не менее 6 букв, чисел и знаков препинания(например "!", "&" и т.д).</span></div> 
<input type="password" class="big_text" name="verificationPassword" id="index_email" value="" placeholder="Пожалуйста, повторите пароль" minlenght="6" maxlenght="20"><div class="tooltip"><div class="i"><img src="https://images.squarespace-cdn.com/content/v1/50372f4584ae8edfcf8493b7/1374150582891-0MHINB2QIT8K2FDD1ISV/ke17ZwdGBToddI8pDm48kEReVwPdFj5x-0njwSgIyM1Zw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PINcVj2hNpPUggRlCSnfe-zt0ckF5S8dIqUSlXcfM-JuM/Question+Mark+Grey+Lrg.PNG" widrh=20 height=20 title=""></div><span class="tooltiptext">Это действие нужно, чтобы подтвердить, робот вы или нет.</span></div> 

<div class="left"><select class="_5dba _8esg" aria-label="День" name="birthday_day" id="day" title="День"><option value="0">День</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4" selected="1">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select></div>

<div class="left2"><select class="_5dba _8esg" aria-label="Месяц" name="birthday_month" id="month" title="Месяц"><option value="0">Месяц</option><option value="1">янв</option><option value="2">фев</option><option value="3" selected="1">мар</option><option value="4">апр</option><option value="5">мая</option><option value="6">июн</option><option value="7">июл</option><option value="8">авг</option><option value="9">сен</option><option value="10">окт</option><option value="11">ноя</option><option value="12">дек</option></select></div>

<div class="left3"><select class="_5dba _8esg" aria-label="Год" name="birthday_year" id="year" title="Год"><option value="0">Год</option><option value="2020">2020</option><option value="2019">2019</option><option value="2018">2018</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995" selected="1">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select></div><div class="tooltip2"><div class="i2"><img src="https://images.squarespace-cdn.com/content/v1/50372f4584ae8edfcf8493b7/1374150582891-0MHINB2QIT8K2FDD1ISV/ke17ZwdGBToddI8pDm48kEReVwPdFj5x-0njwSgIyM1Zw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PINcVj2hNpPUggRlCSnfe-zt0ckF5S8dIqUSlXcfM-JuM/Question+Mark+Grey+Lrg.PNG" widrh=20 height=20 title=""></div><span class="tooltiptext2">Указав дату рождения, друзьям будет легче вас найти. Вы сами решаете, кто может видеть Вашу дату рождения. Вы всегда можете изменить её в настройках.</span></div> 

<div class="right"><select name="gender" title="Пол"><option value="gender">Пол</option><option value="gender">Мужской</option><option value="gender">Женский</option></select></div><div class="tooltip3"><div class="i3"><img src="https://images.squarespace-cdn.com/content/v1/50372f4584ae8edfcf8493b7/1374150582891-0MHINB2QIT8K2FDD1ISV/ke17ZwdGBToddI8pDm48kEReVwPdFj5x-0njwSgIyM1Zw-zPPgdn4jUwVcJE1ZvWQUxwkmyExglNqGp0IvTJZamWLI2zvYWH8K3-s_4yszcp2ryTI0HqTOaaUohrI8PINcVj2hNpPUggRlCSnfe-zt0ckF5S8dIqUSlXcfM-JuM/Question+Mark+Grey+Lrg.PNG" widrh=20 height=20 title=""></div><span class="tooltiptext3">Укажите Ваш пол, чтобы друзьям было легче вас найти. Вы сами решаете, кто будет видеть пол в Вашем профиле и всегда можете изменить своё решение в настройках.</span></div> 

<button class="button3">Регистрация</button>
<button class="button4"> Войти через Facebook</button>
</form>
</div>

<div class="block3" onclick="show('block')"><img class="i4" src="https://in-create.com/wp-content/uploads/2018/12/f1.png" width=70 height=70><div class="pl">+</div><div class="bottom" width="30" height="30">Добавить аккаунт</div></div>
 
<div onclick="show('none')" id="wrap"></div>
<div id="window">

<span class="close" onclick="show('none')">✖</span>
<form action="index.php" method="POST">
<br><div class="vhod">Войдите на LINK UP</div><input id="enter" type="text" placeholder="Телефон или email" name="login"><input id="enter2" type="password" placeholder="Пароль" name="password">
<input type="checkbox" class="custom-checkbox" id="happy" name="happy" value="yes"><label for="happy"> Запомнить пользователя</label>
<button class="button5">Войти</button>
<button class="button6">Забыли пароль?</button>
</div></form>
 



<script type="text/javascript">

function show(state)
{
document.getElementById('window').style.display = state;
document.getElementById('wrap').style.display = state;
}



</script>


    </body>
</html>
