<html>
<head>
<meta charset="utf-8">
<style>
#square {

    height:370px;
    width:370px;
    margin-top: 50px;

}
.foc {
			
			cursor:pointer; 
			display:inline;
			}
			.foc:focus {
			width: 125%; 
			height: 125%;
			z-index: 100;
			}
.yellow {
    background-color: yellow;

}
.red {
    background-color: red;

}
.green {
    background-color:green;
}
</style>
</head>
<body>
<div onclick="changeColor(this)" class="block red"></div></br>
<div onclick="changeColor(this)" class="block red"></div></br>
<div onclick="changeColor(this)" class="block red"></div></br>

Злёных квадратов: <span id="score">0</span>
<script>
function changeColor(element) {
let score = document.getElementById("score");
switch(element.getAttribute("class")) {
case "block red":
score.innerHTML = Number(score.innerHTML) + 1;
element.setAttribute("class", "block green");
break;
case "block green":
score.innerHTML = Number(score.innerHTML) - 1;
element.setAttribute("class", "block red");

}
}
</script>
</body>
</html>