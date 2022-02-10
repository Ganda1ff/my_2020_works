
<p onclick="soundClick()">Корова</p>
<p onclick="soundClick1()">Свинья</p>
<p onclick="soundClick2()">Баран</p>
<p onclick="soundClick3()">Лошадь</p>
<p onclick="soundClick4()">Овца</p>
<p onclick="soundClick5()">Петух</p>
<script>
function soundClick() {
  var audio = new Audio(); 
  audio.src = 'cow.mp3'; 
  audio.autoplay = true; 

}
function soundClick1() {
  var audio = new Audio(); 
  audio.src = 'pig.mp3'; 
  audio.autoplay = true; 
}
function soundClick2() {
  var audio = new Audio(); 
  audio.src = 'sheep.mp3'; 
  audio.autoplay = true; 

}
function soundClick3() {
  var audio = new Audio(); 
  audio.src = 'horse.mp3'; 
  audio.autoplay = true; 
}
function soundClick4() {
  var audio = new Audio(); 
  audio.src = 'shep.mp3'; 
  audio.autoplay = true; 

}
function soundClick5() {
  var audio = new Audio(); 
  audio.src = 'petuck.mp3'; 
  audio.autoplay = true; 
}
</script>