<html lang="en">
<head>
<meta charset="utf-8" />
	<title>Belajar HTML</title>
	<script src="jquery-1.8.2.js"></script>
<script type="text/javascript">
	$(function(){
	$('#syntax').keyup(function() {
		$.ajax({type:'POST', url: 'html.php', data:$('#syntax').serialize(), success: function(response) {
			$('#html').html(response);
		}});

		return( false );
	});
	});
</script>
<style>
	#text1{
		width:500px;
		height:200px;
	}
	#text2{
		width:500px;
		height:350px;
	}
	#html{
		float:right;
		width:800px;
		height:100%;
		border:1px solid blue;
		overflow:hidden;
	}
</style>
<body>
	<div style='float:left;witdh:auto;height:auto;border:1px solid black;padding:10px;'>
	<form id="syntax">
		Script CSS<br>
		<textarea id='text1' name="css"></textarea><br /> 
		Script Html<br>
		<textarea id='text2' name="html"></textarea><br />
	</form>
	</div>
	<div id='html'>
		
	</div>
</body>
</html>