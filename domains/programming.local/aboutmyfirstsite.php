<html>
    <head>
        <title>О СЕБЕ</title>
        <meta charset="utf-8">
        <style>

body{
  font-family: 'Oswald', sans-serif;
  background-image: url(https://wallup.net/wp-content/uploads/2015/12/109498-mountain-blue-landscape-nature.jpg);

}

nav{
  margin:0% 30%;
}

a{
  text-decoration:none;
  color:#fff;
  width:120px;
  display:inline-block;
  text-align:center;
  transition:all .33s linear;
  -webkit-transition:all .33s linear;

}

div{
  width:120px; 
  height:2px;

  margin-bottom:20px;
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
#right{

width: 0%;
height: 0%;
float: right;
}



#left2{
    margin-left:-10px;
margin-top:530px;
width: 0%;
height: 0%;
float: left;
}
#right2{
    margin-right:505px;
    margin-top:540px;
width: 0%;
height: 0%;
float: right;
}
#left3{
    margin-left:250px;
margin-top:525px;
width: 0%;
height: 0%;
float: left;
}

#right3{
    margin-right:265px;
    margin-top:-20px;
width: 0%;
height: 0%;
float: right;
}


#left4{
    margin-left:375px;
margin-top:250px;
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

input {
  
  color: #fff;
  border: none;
  padding: 0;
  border-radius: 0;
  outline: none;
  width: auto;
  min-width: 100%;
  font-size: 1.5rem;
  line-height: 3em;
  font-family: Roboto, Arial, sans-serif;
  border-bottom: 2px solid ;
  background-color: transparent;
}

/*fgmryyk*/




.label-box {
    position: relative;
    width: 600px;
}

.label-box::before,
.label-box::after {
    content: "";
    position: absolute;
    height: 2px;
    width: 0;
    bottom: 1px;
    transition-property: width;
    transition-duration: 0.2s;
}



input {
    right:-100px;
    margin-top:10px;
    width: 300px;
    padding: -5px;

    font-size: 18px;
    font-family:'Oswald';
    border: none;
    border-bottom: 2px solid #fff;
    box-sizing: border-box;
}

label {
 
    margin-left:500px;
    position: absolute;
    top: -60px;
    left:-500px;
    font-size: 25px;
    color: #fff;
    transition: 0.2s ease all;
    pointer-events: none;
}

input:focus ~ .label-box label,
input:valid ~ .label-box label {
    font-size: 18px;
    transform: translateY(-20px);
}

.button2 {
  display: inline-block;
  width: 140px;
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
.button2:hover,
.button2:active {
  border-color: blueviolet;
  text-decoration-color:yellow; 
  color: blueviolet;
  transition: color 0.3s ease-in,
              background-color 0.3s ease-in,
              border-color 0.3s ease-in;
}





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
    font-size:30px;
    text-align:center;
    margin-left:510px;
    margin-top:10px;
    margin-bottom:-220px;
}
.borderwhite {
  border: 3px solid white;
}
.adress {
    color:white;
    margin-top:850px;
    margin-bottom:10px;
    margin-left:370px;
    font-size:30px;
}
.adress2 {
    color:white;
    margin-top:-10px;
    margin-bottom:10px;
    margin-left:690px;
    font-size:30px;
}

            </style>
    </head>
    <body>
        

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<div id="left" >



</div>
<div id="center">
   
</div>
<nav>

  <a href="http://programming.local/chatmyfirstsite.php" class="hvr-grow"><h1>ГЛАВНАЯ</h1></a>
  <a href="#" ><h1>О СЕБЕ</h1></a>
  <a href="http://programming.local/gallerymyfirstsite.php" ><h1>ГАЛЕРЕЯ</h1></a>
  <a href="http://programming.local/contactmyfirstsite.php" ><h1>КОНТАКТЫ</h1></a>
  <div></div>
  <a class="button" href="http://programming.local/chatmyfirstsite.php">РЕГИСТРАЦИЯ</a>

  <a class="button" href="http://programming.local/entermyfirstsite.php">АВТОРИЗАЦИЯ</a>

</nav>

<!--dngwrgbejbjsb-->

<div class="h1">О СЕБЕ</div>



<!-- Button -->
<div class="page-wrapper">
  <a class="btn trigger" href="#">FEEDBACK</a>
</div>

<!-- Modal -->
<div class="modal-wrapper">
  <div class="modal">
    <div class="head">                                  
      <pre><a class="btn-close trigger" href="#">            ЗАКРЫТЬ ОКНО</pre>
        <i class="fa fa-times" aria-hidden="true">
        
        </i>
      </a>
    </div>
    <div class="content">
        <div class="good-job">
          <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
          
        </div>
    </div>
  </div>
</div>
<div align="center" class="section" id="contacts">




          <!--      <div>
                    <input type="text" required>
                    <div class="label-box">
                        <label>ИМЯ</label>
                        
                    </div>
                 

                    
                </div>-->
               
       
               

<!-- content -->







  
<script>


  </script>
    </body>
</html>