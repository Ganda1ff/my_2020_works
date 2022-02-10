<style>
.row {
    border:3px solid black;
    background-color: white;
    width:150px;
    height:150px;
    display:inline-block;
    margin-top:-5px;
    margin-left:-5;
}
#blue{
        width:150px;
        height:150px;
        background-color:blue;
    }
</style>
<div id="blue"></div>
<div class="green">
<div class="column">
<div class="row" id="0|0"></div>
<div class="row" id="0|1"></div>
<div class="row" id="0|2"></div>
<div class="row" id="0|3"></div>
<div class="row" id="0|4"></div>
</div>
<div class="column">
<div class="row" id="1|0"></div>
<div class="row" id="1|1"></div>
<div class="row" id="1|2"></div>
<div class="row" id="1|3"></div>
<div class="row" id="1|4"></div>
</div>
<div class="column">
<div class="row" id="2|0"></div>
<div class="row" id="2|1"></div>
<div class="row" id="2|2"></div>
<div class="row" id="2|3"></div>
<div class="row" id="2|4"></div>
</div>
<div class="column">
<div class="row" id="3|0"></div>
<div class="row" id="3|1"></div>
<div class="row" id="3|2"></div>
<div class="row" id="3|3"></div>
<div class="row" id="3|4"></div>
</div>
<div class="column">
<div class="row" id="4|0"></div>
<div class="row" id="4|1"></div>
<div class="row" id="4|2"></div>
<div class="row" id="4|3"></div>
<div class="row" id="4|4"></div>
</div>
<script>
    localStorage.setItem('row', 0);
localStorage.setItem('column', 0);
let row = localStorage.getItem('row');
let column = localStorage.getItem('column');
let element = document.getElementById(row + "|" + column); 





function move(e){
    let blue = localStorage.getItem('blue');
getElementById('blue' == 0|0);
     var blue = document.getElementById("blue");
     var cs = window.getComputedStyle(blue);
      
     var left = parseInt(cs.marginLeft);
     var top = parseInt(cs.marginTop);
      
     switch(e.keyCode){
          
         case 37:  
             if(left>0)
                 blue.style.marginLeft = left - 10 + "px";
             break;
         case 38:   
             if(top>0)
                 blue.style.marginTop = top - 10 + "px";
             break;
         case 39: 
             if(left < document.documentElement.clientWidth - 100)
                 blue.style.marginLeft = left + 10 + "px";
             break;
         case 40: 
             if(top < document.documentElement.clientHeight - 100)
                 blue.style.marginTop = top + 10 + "px";
             break;
     }
 }
  
 addEventListener("keydown", move);
    </script>
</script>