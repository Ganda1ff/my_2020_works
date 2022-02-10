<style>
input[type="checkbox"] {
 display: none;
}
 
label {
  color: #000;
 cursor: default;
 font-weight: normal;
 line-height: 30px;
 padding: 10px 0;
 vertical-align: middle;
}
 
label:before {
 content: " ";
 color: #000;
 display: inline-block;
/* шрифт Awesome*/
 font: 20px/30px FontAwesome;
 margin-right: 15px;
 position: relative;
 text-align: center;
 text-indent: 0px;
 width: 30px;
 height: 30px;
 background: #FFF;
 border: 1px solid #e3e3e3;
 border-image: initial;
 vertical-align: middle;
}
 
input:checked + label:before {
/* глифон - галочка */
 content: "\f00c";
}
 
input:disabled + label:before {
 background: #eee;
 color: #aaa;
}
</style>
	
<input type="checkbox" id="checkbox-id" />
<label for="checkbox-id">Чекбокс как есть</label>