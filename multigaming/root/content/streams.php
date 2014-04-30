<link href="../../css/design.css" type="text/css" rel="stylesheet">
<?php
	$all   = array_unique(split(',',$_GET['streams']));
	$online= array_unique(split(',',$_GET['online']));
	$debug = array_unique(split(',',$_GET['debug']));

	function contains($arr,$str){
		for($i=0;$i<count($arr);$i++){
			if($arr[$i] == $str){
				return true;
			}
		}
		return false;
	}
	function displayHitboxChat($stream){
		echo '<iframe class="ChatBox" id="Chat0" rel="0" width=100% height=100% src ="http://www.hitbox.tv/embedchat/' . $stream . '" frameborder="1" style="display: inline;"></iframe>';
	}
	function displayStreams($streams,$debug){
		if(count($streams) == 0){
			echo '<h1 id=noone>Keiner online :\ </h1>';
		} 
		if(count($streams) == 1){
			if(contains($debug,"hitboxchat")){
				echo '<div id="stream_left" style="height:'.$h.'%;">';
					displayHitboxStream($streams[0]);
				echo '</div>';
				echo '<div id="stream_right" style="height:'.$h.'%;">';
					displayHitboxChat($streams[0]);
				echo '</div>';
			}else{
				displayHitboxStream($streams[0]);
			}
		} else{
			$h = ceil(100 / ceil((count($streams)/2)));
			if($h < 8){
				$h = 8;
			}
			$c = 2;
			if(contains($debug,"hitboxchat")){
				$c = 1;
				$h = $h/2;
			}
			for($i=0 ; $i < count($streams) ; $i = $i + $c){
				echo '<div id="stream_left" style="height:'.$h.'%;">';
					displayHitboxStream($streams[$i]);
				echo '</div>';
				if(contains($debug,"hitboxchat")){
					echo '<div id="stream_right" style="height:'.$h.'%;">';
						displayHitboxChat($streams[$i]);
					echo '</div>';
				}else{
					if($i+1 < count($streams)){
						echo '<div id="stream_right" style="height:'.$h.'%;">';
							displayHitboxStream($streams[$i+1]);
						echo '</div>';
					}
				}
			}	
		}
	}
	
	function displayHitboxStream($stream){
		echo '<iframe width=100% height=100% src="http://hitbox.tv/#!/embed/'.$stream.'" frameborder="0" seamless allowfullscreen></iframe>';
	}
	
	
	
	if(contains($debug,"offline")){
		displayStreams($all,$debug);
	}else{
		displayStreams($online,$debug);
	}
?>