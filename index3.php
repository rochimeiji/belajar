<script src="jquery-1.8.2.js"></script>
<script type="text/javascript">
	$(function(){
		$('#text1').change(function(){
			$.ajax({
				url:"?nama="+$(this).val()+" width : "+screen.availWidth,
				success:function(a){
					$('body').html(a);
				}
			});
		})
	});
</script>
<body>
<input id='text1' type='text' value='' />
	<?php echo $_GET['nama'] ?>
	<br>
<a onClick='window.history.back()'>back</a>
</body>