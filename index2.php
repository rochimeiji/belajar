<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
	<title>jensbits.com: Form Submit jQuery PHP</title>
	<script src="jquery-1.8.2.js"></script>
<script type="text/javascript">
	$(function(){
	function startTime()
	{
		$.ajax({type:'POST', url: 'iframe1.php?nama=Rochim', data:$('#ContactForm').serialize(), success: function(response) {
			$('.form_result').html(response);
		}});
	}
	setInterval(function(){startTime()},500);
		
	$('#ContactForm').keyup(function() {
		$.ajax({type:'POST', url: 'iframe1.php?nama=EIJI', data:$('#ContactForm').serialize(), success: function(response) {
			$('.form_result').html(response);
			}
		});

		return( false );
	});
	});
</script>
<body>
	<form id="ContactForm">
		Your Name: <input type="text" name="name" value="" /><br /> 
		Your Email: <input type="text" name="email" value="" /><br /> 
		Your Message:<br /> <textarea style="width: 200px; height: 100px;" name="message"></textarea> 
		<br /><br /> 
		<input type="submit" name="submit" value="Submit" /><br />
	</form>
	<div onclick='startTime()' src='iframe1.php?nama=Rochim' class="form_result">Hello</div>
</body>
</html>