<?php
	$a = $_GET['action'];
	$name = split(',',$_GET['name']);
	$value = split(',',$_GET['value']);
	if(count($name) == count($value) or $a == 'get'){
		if($a == 'set'){
			for($i=0;$i<count($name);$i++){
				setCookie($name[$i],$value[$i],time()+3600);
			}
			echo 'true';
		}elseif($a == 'get'){
			for($i=0;$i<count($name);$i++){
				print_r($_COOKIE);
				echo "<br>";
			}
		}else{
			echo 'false';
		}
	}else{
		echo 'false';
	}
?>