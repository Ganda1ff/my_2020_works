<input type="text" id="bloggood-ru">
<div id="result"></div>
 
<script>
var input = document.getElementById('bloggood-ru');
var result = document.getElementById('result');
 
input.onkeyup = input.oncopy = input.onpaste = input.oncut = (function() {
return function() {
result.innerHTML = this.value;
}
})();
</script>