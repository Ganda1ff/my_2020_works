<style>
#preview
	{
	color:#cc0000;
	font-size:12px
	}
	.imgList
	{
	max-height:150px;
	margin-left:5px;
	border:1px solid #dedede;
	padding:4px;
	float:left;
	}
</style>
<form class="user-info" method="post" action="db.php" enctype="multipart/form-data">
  <input type="text" name="etc" value="">
  <input id="img" name="imgfile" type="file">
  <input class="sbutton" value="Запилить" type="submit"></a></td></tr>
</form>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.wallform.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
	    $('#photoimg').live('change', function() {
	        var A=$("#imageloadstatus");
	        var B=$("#imageloadbutton");	 
	        $("#imageform").ajaxForm({target: '#preview',
	            beforeSubmit:function(){
	                A.show();
	                B.hide();
	            },
	            success:function(){
	                A.hide();
	                B.show();
	            },
	            error:function(){
	                A.hide();
	                B.show();
	            }
	        }).submit();
	    });
	});
	</script>