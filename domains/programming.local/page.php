<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <style>
    html, body{
        margin:0;
        overflow:hidden;
    }
    #blueRect{
        width:100px;
        height:100px;
        background-color:blue;
    }
    </style>
</head>
<body>
<div id="blueRect"></div>
 
<script>
function moveRect(e){
     
    var blueRect = document.getElementById("blueRect");
    // получаем стиль для blueRect
    var cs = window.getComputedStyle(blueRect);
     
    var left = parseInt(cs.marginLeft);
    var top = parseInt(cs.marginTop);
     
    switch(e.keyCode){
         
        case 37:  // если нажата клавиша влево
            if(left>0)
                blueRect.style.marginLeft = left - 10 + "px";
            break;
        case 38:   // если нажата клавиша вверх
            if(top>0)
                blueRect.style.marginTop = top - 10 + "px";
            break;
        case 39:   // если нажата клавиша вправо
            if(left < document.documentElement.clientWidth - 100)
                blueRect.style.marginLeft = left + 10 + "px";
            break;
        case 40:   // если нажата клавиша вниз
            if(top < document.documentElement.clientHeight - 100)
                blueRect.style.marginTop = top + 10 + "px";
            break;
    }
}
 
addEventListener("keydown", moveRect);
</script>
</body>
</html>