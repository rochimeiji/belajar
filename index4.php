<html lang="en">
<head>
<meta charset="utf-8" />
	<title>jensbits.com: Form Submit jQuery PHP</title>
	<script src="jquery-1.8.2.js"></script>
<script type="text/javascript">
	$(function(){
		setInterval(function(){$('.msg').load('db1.php');},100);
		$('#msgform').submit(function(){
			$.ajax({type:"POST",url:"insert.php",data:$('#msgform').serialize(),
				success:function(a){
					//$('.msg').html(a);
				}
			});
			return( false );
		});
	});
</script>
<body>
	<form id="msgform">
		Your Message:<br /> <textarea style="width: 200px; height: 100px;" name="message"></textarea> 
		<br /><br /> 
		<input type="submit" name="submit" value="Submit" /><br />
	</form>
	<div class="msg">Msg</div>
</body>
</html>