<?php
if(isset($_POST)){
	$post='';
	foreach($_POST as $key => $val){
		$post[$key] = $val;
	}
}
echo $post['name'];
?>