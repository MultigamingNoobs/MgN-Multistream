<?php
	function getOnlineStreams($arr){
		$ret = array();
		for($i=0;$i<count($arr);$i++){
			if(isOnline($arr[$i]) == 'online'){
				$ret[count($ret)] = $arr[$i];
			}
		}
		return $ret;
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
	function getArr(){
		$teamMembers = array('marderlp','daruuna','nephtis','mindstalker','pixelkuchen','kater','tomme9020');
		$input= split(',',(strtolower($_GET['streams'])));
		if($input[0] != ''){
			$arr = array_unique(array_merge($teamMembers,$input));
		}else{
			$arr = $teamMembers;
		}
		sort($arr);
		return $arr;
	}	
?>