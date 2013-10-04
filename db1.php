<?php
	if(mysql_connect('localhost','root','')){
		mysql_select_db('belajar');
	}
	$q = mysql_query("SELECT * FROM msg");
		$i = 1;
	while($r=mysql_fetch_array($q)){
		$i = 1 + $i;
		if(($i%2)== 0){
			$answer = 'Eiji';
		}else{
			$answer = 'Titta';
		}
		echo $answer." : ".$r['msg']."<br>";
	}
?>