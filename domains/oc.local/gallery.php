<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
.slider {
      position: relative;
      overflow: hidden;
    }

    .slider__wrapper {
      display: flex;
      transition: transform 0.6s ease;
    }

    .slider__item {
        
      flex: 0 0 100%;
      max-width: 100%;
    }

    .slider__control {
      position: absolute;
      top: 50%;
      display: none;
      align-items: center;
      justify-content: center;
      width: 40px;
      color: #fff;
      text-align: center;
      opacity: 0.5;
      height: 50px;
      transform: translateY(-50%);
      background: rgba(0, 0, 0, .5);
    }

    .slider__control_show {
      display: flex;
    }

    .slider__control:hover,
    .slider__control:focus {
      color: #fff;
      text-decoration: none;
      outline: 0;
      opacity: .9;
    }

    .slider__control_left {
      left: 0;
    }

    .slider__control_right {
      right: 0;
    }

    .slider__control::before {
      content: '';
      display: inline-block;
      width: 20px;
      height: 20px;
      background: transparent no-repeat center center;
      background-size: 100% 100%;
    }

    .slider__control_left::before {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M5.25 0l-4 4 4 4 1.5-1.5-2.5-2.5 2.5-2.5-1.5-1.5z'/%3E%3C/svg%3E");
    }

    .slider__control_right::before {
      background-image: url("data:image/svg+xml;charset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E");
    }

    .slider__item>div {
      line-height: 250px;
      font-size: 100px;
      text-align: center;
    }
   h2 {
       margin-left:45%;
       font-size:30px;
   }
 img {
     border:5px solid #fff;
     border-bottom:5px solid #fff;
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
<h2>ГАЛЕРЕЯ</h2>
<div class="slider">
    
    <div class="slider__wrapper">
    <div class="slider__item">
        <div style="height: 500px; "><img src = "12.jpg" height=500px></div>
      </div>
    <div class="slider__item">
        <div style="height: 500px; "><img src = "10.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "11.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><div id="img"><img src = "1.jpg" height=500px></div></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "2.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "3.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "4.jpg" height=500px></div>
      
    </div>
    <div class="slider__item">
        <div style="height: 500px; "><img src = "5.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "6.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "7.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "8.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "9.jpg" height=500px></div>
      </div>

      <!----------------------->
      <div class="slider__item">
        <div style="height: 500px; "><img src = "13.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "14.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "15.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "16.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "17.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "19.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "18.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "20.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "21.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "22.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "23.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "24.jpg" height=500px></div>
      </div>
      <div class="slider__item">
        <div style="height: 500px; "><img src = "25.jpg" height=500px></div>
      </div>
</div>
    <a class="slider__control slider__control_left" href="#" role="button"></a>
    <a class="slider__control slider__control_right slider__control_show" href="#" role="button"></a>
  </div>

  <script>
    'use strict';
    var multiItemSlider = (function () {
      return function (selector, config) {
        var
          _mainElement = document.querySelector(selector), // основный элемент блока
          _sliderWrapper = _mainElement.querySelector('.slider__wrapper'), // обертка для .slider-item
          _sliderItems = _mainElement.querySelectorAll('.slider__item'), // элементы (.slider-item)
          _sliderControls = _mainElement.querySelectorAll('.slider__control'), // элементы управления
          _sliderControlLeft = _mainElement.querySelector('.slider__control_left'), // кнопка "LEFT"
          _sliderControlRight = _mainElement.querySelector('.slider__control_right'), // кнопка "RIGHT"
          _wrapperWidth = parseFloat(getComputedStyle(_sliderWrapper).width), // ширина обёртки
          _itemWidth = parseFloat(getComputedStyle(_sliderItems[0]).width), // ширина одного элемента    
          _positionLeftItem = 0, // позиция левого активного элемента
          _transform = 0, // значение транфсофрмации .slider_wrapper
          _step = _itemWidth / _wrapperWidth * 100, // величина шага (для трансформации)
          _items = []; // массив элементов
        // наполнение массива _items
        _sliderItems.forEach(function (item, index) {
          _items.push({ item: item, position: index, transform: 0 });
        });

        var position = {
          getMin: 0,
          getMax: _items.length - 1,
        }

        var _transformItem = function (direction) {
          if (direction === 'right') {
            if ((_positionLeftItem + _wrapperWidth / _itemWidth - 1) >= position.getMax) {
              return;
            }
            if (!_sliderControlLeft.classList.contains('slider__control_show')) {
              _sliderControlLeft.classList.add('slider__control_show');
            }
            if (_sliderControlRight.classList.contains('slider__control_show') && (_positionLeftItem + _wrapperWidth / _itemWidth) >= position.getMax) {
              _sliderControlRight.classList.remove('slider__control_show');
            }
            _positionLeftItem++;
            _transform -= _step;
          }
          if (direction === 'left') {
            if (_positionLeftItem <= position.getMin) {
              return;
            }
            if (!_sliderControlRight.classList.contains('slider__control_show')) {
              _sliderControlRight.classList.add('slider__control_show');
            }
            if (_sliderControlLeft.classList.contains('slider__control_show') && _positionLeftItem - 1 <= position.getMin) {
              _sliderControlLeft.classList.remove('slider__control_show');
            }
            _positionLeftItem--;
            _transform += _step;
          }
          _sliderWrapper.style.transform = 'translateX(' + _transform + '%)';
        }

        // обработчик события click для кнопок "назад" и "вперед"
        var _controlClick = function (e) {
          if (e.target.classList.contains('slider__control')) {
            e.preventDefault();
            var direction = e.target.classList.contains('slider__control_right') ? 'right' : 'left';
            _transformItem(direction);
          }
        };

        var _setUpListeners = function () {
          // добавление к кнопкам "назад" и "вперед" обрботчика _controlClick для событя click
          _sliderControls.forEach(function (item) {
            item.addEventListener('click', _controlClick);
          });
        }

        // инициализация
        _setUpListeners();

        return {
          right: function () { // метод right
            _transformItem('right');
          },
          left: function () { // метод left
            _transformItem('left');
          }
        }

      }
    }());

    var slider = multiItemSlider('.slider')

  </script>
 
    </body>
</html>