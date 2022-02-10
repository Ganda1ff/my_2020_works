<!DOCTYPE HTML>
<html>
    <head>
    
 <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <style>
body {
padding:5px;
background:auto;
color:#fff;
font-family: 'Oswald', sans-serif;
  background-image: url(https://img4.goodfon.ru/original/6720x4480/7/4e/happy-birthday-cake-decoration-tort-den-rozhdeniia-svechi-bo.jpg);
  background-size:105%;
}


nav{
  margin:0% 30%;
}

a{
  text-decoration:none;
  color:#fff;
  width:115px;
  display:inline-block;
  text-align:center;
  transition:all .33s linear;
  -webkit-transition:all .33s linear;
 

}
a:nth-child(1) ~ div{
  transition:all .33s linear;
  -webkit-transition:all .33s linear;
  
}

a:nth-child(2):hover ~ div {
  transform:translate(120px);
  -webkit-transform:translate(120px);
  background-color:#e74c3c;
  transition:all .33s linear;
  -webkit-transition:all .33s linear;
}





a:nth-child(3):hover ~ div {
  transform:translate(120px);
  -webkit-transform:translate(240px);
  background-color:#BF55EC;
  transition:all .33s linear;
  -webkit-transition:all .33s linear;
}


a:nth-child(4):hover ~ div {
  transform:translate(120px);
  -webkit-transform:translate(360px);
  background-color:#f39c12;
  color:#03C9A9;
  transition:all .33s linear;
  -webkit-transition:all .33s linear;
}
a:nth-child(2):hover {
  color:#e74c3c;
}
a:nth-child(3):hover {
  color:#BF55EC;
}
a:nth-child(4):hover {
  color:#f39c12;
}
.button {
  display: inline-block;
  margin-bottom:30px;
  width: 220px;
  padding: 8px;
  color: #fff;
  background-color: transparent;
  border: 2px solid #fff;
  text-align: center;
  outline: none;
  text-decoration: none;
  transition: color 0.3s ease-out,
              background-color 0.3s ease-out,
              border-color 0.3s ease-out;
}
.button:hover,
.button:active {
  border-color: yellow;
  text-decoration-color:yellow; 
  color: yellow;
  transition: color 0.3s ease-in,
              background-color 0.3s ease-in,
              border-color 0.3s ease-in;
              
}





 #center{

width: 0%;
margin: 0 auto;

}


#left{

width: 0%;
height: 0%;
float: left;
}


.input-wrapper {
  width: 400px;
  margin-left: 480px;
  position:inherit;
}
.input-wrapper::after {
  content: attr(data-text);
  font-size: 2rem;
  line-height: 0;
  height: 0;
  max-width: 100%;
  font-family: Roboto, Arial, sans-serif;
  
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  overflow: hidden;
  user-select: none;
  
}



/*fgmryyk*/








/*------------------------------------*/





@import url(https://fonts.googleapis.com/css?family=Montserrat:400,700);




a.btn {
  font-family: 'Oswald';
  padding: 8px 0;
  position: absolute;
  font-size:25px;
  top: 50%; 
  left: 50%;
  transform: translate(-50%, -50%);
  font-family: 'Oswald';
  font-weight: 1000;
  text-align: center;
  text-decoration: none;
  text-transform: uppercase;
  display: inline-block;
  width: 100px;
  padding: 8px;
  color: #fff;
  background-color: transparent;
  border: 2px solid #fff;
  text-align: center;
  outline: none;
  margin-top:400px;
  margin-left:530px;
}
.btn:hover,
.btn:active {
  border-color: red;
  text-decoration-color:red; 
  color: red;
  transition: color 0.3s ease-in,
              background-color 0.3s ease-in,
              border-color 0.3s ease-in;
}

.modal-wrapper {
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0; 
  left: 0;
  background: rgba(41, 171, 164, 0.8);
  visibility: hidden;
  opacity: 0;
  transition: all 0.25s ease-in-out;
}

.modal-wrapper.open {
  opacity: 1;
  visibility: visible;
}

.modal {
  width: 600px;
  height: 600px;
  display: block;
  margin: 50% 0 0 -300px;
  position: relative;
  top: 50%; 
  left: 50%;
  background:white;
  /*background: #fff;*/
  opacity: 0;
  transition: all 0.5s ease-in-out;
}

.modal-wrapper.open .modal {
  margin-top: -200px;
  opacity: 1;
}

.head { 
  width: 540px;
  height: 20px;
  padding: 15px 30px;
  overflow: hidden;
  background: #e2525c;
}

.btn-close {
  font-size: 15px;
  margin-left:420px;
  font-weight: bold;
  font-family:'Oswald';
  display: block;
  color: #fff;
  
}

.content {
  padding: 5%;
}

.good-job {
  text-align: left;
  margin-top:100px;
  font-family: 'Oswald', Arial,       Helvetica, sans-serif;
  color: #e2525c;
}
.good-job .fa-thumbs-o-up {
  font-size: 60px;
}
.good-job h1 {
  font-size: 45px;
}
.h1 {
    color:white;
    font-size:50px;
    text-align:center;
    margin-left:-20px;
    margin-top:10px;
    margin-bottom:-220px;
}
#gallery {
    justify-content: space-around;
    align-items: center;
    width: 53%;
    
}

.wrapper {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
}

.gallery-line {
    width: 100%;
    display: flex;
    justify-content: space-around;
    margin-top: 10px;
    margin-bottom: 0px;
    cursor: pointer;
}

.image-box {
    width: 120px;
    height: 120px;
}

.min-image {
    width: 100%;
    height: 100%;
}

#big-image-box {
    display: flex;
    justify-content: center;
    width: 100%;
}

#big-image {
    max-width: 70%;
    max-height: 220px;
    border: 3px solid white;
    margin-top:5px;
}

#buttons {
    display: none;
    justify-content: center;
              
}

 
.borderwhite {
  border: 3px solid white;
}

.button3 {
  -moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
  margin-top:8px;
  cursor: pointer;
  display: inline-block;
  width: 210px;
  padding: 8px;
  color: #fff;
  background-color: transparent;
  border: 2px solid #fff;
  text-align: center;
  outline: none;
  text-decoration: none;
  transition: color 0.3s ease-out,
              background-color 0.3s ease-out,
              border-color 0.3s ease-out;
}
.button3:hover,
.button3:active {
  -moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
  border-color: red;
  text-decoration-color:yellow; 
  color: red;
  transition: color 0.3s ease-in,
              background-color 0.3s ease-in,
              border-color 0.3s ease-in;
              
}

.button4 {
  -moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
  margin-left:192px;
  cursor: pointer;
  margin-top:8px;
  display: inline-block;
  width: 210px;
  padding: 8px;
  color: #fff;
  background-color: transparent;
  border: 2px solid #fff;
  text-align: center;
  outline: none;
  text-decoration: none;
  transition: color 0.3s ease-out,
              background-color 0.3s ease-out,
              border-color 0.3s ease-out;
}
.button4:hover,
.button4:active {
  -moz-user-select: -moz-none;
-o-user-select: none;
-khtml-user-select: none;
-webkit-user-select: none;
user-select: none;
  border-color: yellow;
  text-decoration-color:yellow; 
  color: yellow;
  transition: color 0.3s ease-in,
              background-color 0.3s ease-in,
              border-color 0.3s ease-in;
              
}
h2 {
  font-size:30px;
  margin-left:5%;
}
.box1 {
  margin-left:5px;
  width:380px;
  height:470px;
  padding:10px;
  background:#000;
  border-radius:5px;
  background:#f00;
}
.box2 {
  margin-left:425px;
  margin-top:-490px;
  width:380px;
  height:470px;
  padding:10px;
  background:#000;
  border-radius:5px;
  background:#7875ff;
}
.box3 {
  margin-left:845px;
  margin-top:-490px;
  width:380px;
  height:470px;
  padding:10px;
  background:#000;
  border-radius:5px;
  background:#08ff20;
}
h3 {
  font-size:30px;
  margin-left:40%;
}
    </style>
 
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<div id="left" >

</div>
<div id="center">
</div>
<nav>

  <a href="http://oc.local/main.php" class="hvr-grow"><h1>ГЛАВНАЯ</h1></a>
  <a href="http://oc.local/gallery.php" ><h1>ГАЛЕРЕЯ</h1></a>
  <a href="http://oc.local/achievements.php" ><h1>ВИДЕО</h1></a>
  <a href="http://oc.local/contacts.php" ><h1>КОНТАКТЫ</h1></a>
  <div></div>
  <a class="button" href="http://tgv.ulstu.ru/?portfolio=%d1%80%d0%be%d1%82%d0%be%d0%b2-%d0%bf%d0%b0%d0%b2%d0%b5%d0%bb-%d0%b2%d0%b0%d0%bb%d0%b5%d1%80%d1%8c%d0%b5%d0%b2%d0%b8%d1%87">УНИВЕРСИТЕТ</a>

  <a class="button" href="https://www.tplusgroup.ru/org/ulyanovsk/organization/territorialnoe-upravlenie-po-teplosnabzhenijuv-g-uljanovsk/">T ПЛЮС</a>

</nav>
<h3>ПОЗДРАВЛЕНИЯ</h3>
<div class="box1">
<h2>
Самый важный ты у нас,</br>
Лучший в мире, высший класс,</br>
С пультом ладишь ты отлично,</br>
За работой следишь лично!</br>
</br>
И диван ты охраняешь,</br>
И нас всех оберегаешь,</br>
С днем рождения тебя,</br>
Любит очень вся семья!</br>
</h2>
</div>
<div class="box2">
<h2>
Тебе желаю в день рожденья</br>
Невероятного везенья,</br>
Любви, здоровья и успеха,</br>
Улыбок, искреннего смеха,</br>
</br>
Веселья, счастья без предела</br>
И бодрости души и тела!</br>
Заботы близких, уваженья</br>
И всех желаний исполненья!</br>





</h2>

</div>
<div class="box3">
  <h2>
С днем рожденья поздравляю</br>
И тебе я пожелаю</br>
Счастья, радости, успеха,</br>
Крепкого здоровья, смеха!</br>
</br>
Любви, удачи, вдохновения</br>
И всех желаний исполнения,</br>
Чтоб жить богато и без бед</br>
Еще как минимум сто лет!</br>






  </h2>
</div>
    </body>
</html>