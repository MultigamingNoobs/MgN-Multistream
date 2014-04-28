<?php
	function contains($arr,$str){
		for($i=0;$i<count($arr);$i++){
			if($arr[$i] == $str){
				return true;
			}
		}
		return false;
	}
	function displayHitboxChat($bol){
		if($bol){
			echo '<td width=45>';
			$str = 'src = http://www.hitbox.tv/embedchat/'.$online[$i];
			echo '<iframe class="ChatBox" id="Chat0" rel="0" width=100% height="400" ' . $str . ' frameborder="1" style="display: inline;"></iframe>';
			echo '</td>';
		}
	}
	function displayHitboxStream($stream){
		echo '<iframe width=100% height=100% src="http://hitbox.tv/#!/embed/'.$stream.'" frameborder="0" seamless allowfullscreen></iframe>';
	}
	
	$all   = array_unique(split(',',$_GET['streams']));
	$online= array_unique(split(',',$_GET['online']));
	$debug = array_unique(split(',',$_GET['debug']));
	
	if(contains($debug,"offline")){
		for($i=0;$i<count($all);$i++){
			displayHitboxStream($all[$i]);
		}
	}else{
		echo 'online </br>';
		for($i=0;$i<count($online);$i++){
			echo $online[$i].'</br>';
		}
	}
?>