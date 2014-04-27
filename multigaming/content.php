<?php
	function echoStreams($online){
		echo '<div id="streams">';
			if(count($online) == 0){
				echo '<h1 id=noone>Keiner online :\ </h1>';
			} 
			if(count($online) == 1){
				displayHitboxStream($online[0]);
			} else{
				$h = ceil(100 / ceil((count($online)/2)));
				if($h < 8){
					$h = 8;
				}
				for($i=0 ; $i < count($online) ; $i = $i + 2){
					echo '<div id="stream_left" style="height:'.$h.'%;">';
						displayHitboxStream($online[$i]);
					echo '</div>';
					if($i+1 < count($online)){
						echo '<div id="stream_right" style="height:'.$h.'%;">';
							displayHitboxStream($online[$i+1]);
						echo '</div>';
					}
				}	
			}
		echo '</div>';
	}
	function getRooms($online){
		//create list of chatroom
		$rooms = "#liveroom";
		for($i=0;$i<count($online);$i++){
			$rooms = $rooms.",#".$online[$i];
		}
		return $rooms = strtolower($rooms);
	}
?>