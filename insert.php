<?php
	if(mysql_connect('localhost','root','')){
		mysql_select_db('belajar');
	}
	if(isset($_POST['message'])){
	mysql_query("INSERT INTO msg(msg)VALUES('".$_POST['message']."')");
	}
?>