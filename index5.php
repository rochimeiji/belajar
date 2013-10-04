<html>
<script src="jquery-1.8.2.js"></script>
<script type="text/javascript">
	$(function(){
		setInterval(function(){$('#hello').load('index5.php');},1000);
		
	});
</script>
<body>
	<input type='src' name='nama' /> Ok
	<div id='hello'></div>
</body>
</html>