<link href="../../css/design.css" type="text/css" rel="stylesheet">
<?php
	$hitbox   = array_unique(split(',',$_GET['hitbox']));
	$twitch   = array_unique(split(',',$_GET['twitch']));
	$debug = array_unique(split(',',$_GET['debug']));
	include '../../api/streamApi.php';
	include '../../api/hitboxApi.php';
	include '../../api/twitchApi.php';
	$hitbox_online = getOnlineHitboxStreams($hitbox);
	$twitch_online = getOnlineTwitchStreams($twitch);
	
	function contains($arr,$str){
		for($i=0;$i<count($arr);$i++){
			if($arr[$i] == $str){
				return true;
			}
		}
		return false;
	}

	function displayStreams($hitbox,$twitch,$debug){
		if($hitbox[0] == '' and $twitch[0] == ''){
			echo '<h1 id=noone>Keiner online :\ </h1>';
		}elseif(count($hitbox)+count($twitch) == 1){
			if(count($hitbox) == 1){
				if(contains($debug,"chat")){
					displayHitboxStream($hitbox[0],"left",100);
					displayHitboxChat($hitbox[0],100);
				}else{
					displayHitboxStream($hitbox[0],"",100);
				}
			}else{
				if(contains($debug,"chat")){
					displayTwitchStream($twitch[0],"left",100);
					displayTwitchChat($twitch[0],100);
				}else{
					displayTwitchStream($twitch[0],"",100);
				}
			}
		} else{
			$h = ceil(100 / ceil(((count($hitbox)+count($twitch))/2)));
			if($h < 25){
				$h = 25;
			}
			$c = 2;
			if(contains($debug,"chat")){
				$c = 1;
				$h = 50;
			}
			displayHitboxStreams($hitbox,$debug,$h,$c);
			displayTwitchStreams($twitch,$debug,$h,$c,count($hitbox));
		}
	}
	function displayHitboxStreams($hitbox,$debug,$h,$c){
		for($i=0 ; $i < count($hitbox) ; $i = $i + $c){
			displayHitboxStream($hitbox[$i],"left",$h);
			if(contains($debug,"chat")){
				displayHitboxChat($hitbox[$i],$h);
			}else{
				if($i+1 < count($hitbox)){
					displayHitboxStream($hitbox[$i+1],"right",$h);
				}
			}
		}
	}
	function displayTwitchStreams($twitch,$debug,$h,$c,$a){
		if($a % 2 == 0 or contains($debug,"chat")){
			$a=0;
		}else{
			$a=1;
			displayTwitchStream($twitch[0],"right",$h);
		}
		for($i=0+$a ; $i < count($twitch) ; $i = $i + $c){
			displayTwitchStream($twitch[$i],"left",$h);
			if(contains($debug,"chat")){
				displayTwitchChat($twitch[$i],$h);
			}else{
				if($i+1 < count($twitch)){
					displayTwitchStream($twitch[$i+1],"right",$h);
				}
			}
		}
	}
		
	
	if(contains($debug,"offline")){
		displayStreams($hitbox,$twitch,$debug);
	}else{
		displayStreams($hitbox_online,$twitch_online,$debug);
	}
?>