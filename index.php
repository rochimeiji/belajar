<html>
<head>
	<title>$.ajax() jQuery AJAX Demo</title>
	<link rel="stylesheet" type="text/css" href="../presentation/demo.css"></link>
	<script type="text/javascript" src="../assets/jquery-1.3.1.min.js"></script>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.1/jquery.js"></script>
	<script type="text/javascript">
		
		$(
			function(){
				// Get a reference to the content div (into which we will load content).
				var jContent = $( "#content1" );
								
				// Hook up link click events to load content.
				$( "a" ).click(
					function(){
						var jLink = $( this );
						
						// Clear status list.
						$( "#ajax-status" ).empty();
						
						// Launch AJAX request.
						$.ajax(
							{
								// The link we are accessing.
								url: jLink.attr( "href" ),
								
								// The type of request.
								type: "get",
								
								// The type of data that is getting returned.
								dataType: "php",
								
								success: function( strData ){
									jContent.html( strData );
								}
							}							
							);
						
						// Prevent default click.
						return( false );					
					}
					);
					
				$('.text1').keyup(function(){
			
					// Clear status list.
					$( "#ajax-status" ).empty();
					
					$.ajax({
						url: "iframe1.php?nama="+$(this).val(),
						success: function( strData ){
							$('.right').html( strData );
						}					
					});
				});
			}
			);
	</script>
</head>
<body>

	<h1>
		$.ajax() jQuery AJAX Demo
	</h1>
	
	<p>
		<a href="iframe1.php?nama=EIJI">EIJI</a>
		<input class='text1' type='text' />
	</p>
	
	<div id="content1" style="float: left ; width: 50% ;">
		<p>
			Click on the above links to load content.
		</p>		
	</div>	
	<div class='right'>This input</div>
	
</body>
</html>
