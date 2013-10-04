<h1>Hello word <?php echo $_GET['nama'] ?></h1>
<?php
	if(isset($_POST['name'])) {
		$name = $_POST['name'];
		$email = $_POST['email'];
		$msg = $_POST['message'];
			
		?>
		Your Name Is: <?php echo $name; ?><br />
		Your Email Is: <?php echo $email; ?><br />
		Your Message Is: <code><?php echo $msg; ?></code><br />
		<?php
		die();
	}
?>