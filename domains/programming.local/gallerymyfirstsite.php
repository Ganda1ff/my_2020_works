<html>
    <head>
        <title>ГАЛЕРЕЯ</title>
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
  border-color: red;
  text-decoration-color:yellow; 
  color: red;
  transition: color 0.3s ease-in,
              background-color 0.3s ease-in,
              border-color 0.3s ease-in;
              
}

.button4 {
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
  border-color: yellow;
  text-decoration-color:yellow; 
  color: yellow;
  transition: color 0.3s ease-in,
              background-color 0.3s ease-in,
              border-color 0.3s ease-in;
              
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
  <a href="http://programming.local/gallerymyfirstsite.php#" ><h1>ГАЛЕРЕЯ</h1></a>
  <a href="http://programming.local/contactmyfirstsite.php" ><h1>КОНТАКТЫ</h1></a>
  <div></div>
  <a class="button" href="http://programming.local/chatmyfirstsite.php">РЕГИСТРАЦИЯ</a>

  <a class="button" href="http://programming.local/entermyfirstsite.php">АВТОРИЗАЦИЯ</a>

</nav>

<!--dngwrgbejbjsb-->



<div class="h1">ГАЛЕРЕЯ</div>

<div class="wrapper">

<div id="gallery">


<div class="gallery-line">
<div class="image-box">
<div class="borderwhite"><img class="min-image" src="img21.jpg" id="1"></div>
</div>
<div class="borderwhite"><div class="image-box"> <img class="min-image" id="2" src="img11.jpg"></div></div>
<div class="borderwhite"><div class="image-box"> <img class="min-image" id="3" src="img12.jpg"></div></div>
<div class="borderwhite"><div class="image-box"> <img class="min-image" id="4" src="img13.jpg"></div></div>
<div class="borderwhite"><div class="image-box"> <img class="min-image" id="5" src="img15.jpg"></div></div>
</div>
<div id="big-image-box"></div>
<div id="buttons"><div align= "left" class="button3"<button onclick="prev()" id="prev_pick"><b>❮❮ </b>ПРЕДЫДУЩЕЕ ИЗОБРАЖЕНИЕ</button></div><div align="right" class="button4"<button onclick="next()"id="next_pick"> СЛЕДУЮЩЕЕ ИЗОБРАЖЕНИЕ <b>❯❯</b></button></div></div>
<div class="gallery-line">
<div class="borderwhite"><div class="image-box"> <img class="min-image" id="6" src="img19.jpg"></div></div>
<div class="borderwhite"><div class="image-box"> <img class="min-image" id="7" src="img20.jpg"></div></div>
<div class="borderwhite"><div class="image-box"> <img class="min-image" id="8" src="img16.jpg"></div></div>
<div class="borderwhite"><div class="image-box"> <img class="min-image" id="9" src="img17.jpg"></div></div>
<div class="borderwhite"><div class="image-box"> <img class="min-image" id="10" src="img18.jpg"></div></div>
</div>

<div class="gallery-line">
<div class="borderwhite"><div class="image-box"> <img class="min-image" id="11" src="img1.jpg"></div></div>
<div class="borderwhite"><div class="image-box"> <img class="min-image" id="12" src="img2.jpg"></div></div>
<div class="borderwhite"><div class="image-box"> <img class="min-image" id="13" src="img3.jpg"></div></div>
<div class="borderwhite"><div class="image-box"> <img class="min-image" id="14" src="img5.jpg"></div></div>
<div class="borderwhite"><div class="image-box"> <img class="min-image" id="15" src="img6.jpg"></div></div>
</div>
<div id="big-image-box"></div>
</div>
</div>

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
document.getElementById('gallery').onclick = function(event) {
    if (event.target.classList.contains("min-image")) {
        showBig(event.target.getAttribute("src"), event.target.getAttribute("id"));
    }
}

function showBig(src, pictureId) {
    let image = document.createElement("img");
    image.setAttribute("src", src);
    let showBlock = document.getElementById('big-image-box');
    image.setAttribute("id", "big-image");
    image.setAttribute("picture_id", pictureId);
    showBlock.innerHTML = "";
    showBlock.append(image);
    document.getElementById('buttons').style.display = 'flex';
}

function next() {
    let pictureId = Number(document.getElementById('big-image').getAttribute('picture_id'));
    if (pictureId == 15) {
        pictureId = 1;
    } else {
        pictureId++;
    }
    let picture = document.getElementById(pictureId);
    let pictureSrc = picture.getAttribute('src');
    showBig(pictureSrc, pictureId);
}

function prev() {
    let pictureId = Number(document.getElementById('big-image').getAttribute('picture_id'));
    if (pictureId == 1) {
        pictureId = 15;
    } else {
        pictureId--;
    }
    let picture = document.getElementById(pictureId);
    let pictureSrc = picture.getAttribute('src');
    showBig(pictureSrc, pictureId);
}

  </script>
    </body>
</html>
