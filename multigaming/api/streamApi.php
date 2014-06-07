<?php
	function makeList($inp){
		$t='';
		if(count($inp) > 0){
			$t=$inp[0];
			for($i=1;$i<count($inp);$i++){
				$t = $t . ',' .$inp[$i];
			}
		}
		return $t;
	}

	function getStreamString(){
		$debug = '';
		if(strlen($_REQUEST['debug']) > 0){
			$debug = '&debug=' . $_GET['debug'];
		}
		return '"multigaming/root/content/streams.php?hitbox='.getHitboxStreamString().'&twitch='.getTwitchStreamString().$debug.'"';
	}
	
	
	//irc
	function getRooms($online){
		//create list of chatroom
		$rooms = "#liveroom";
		for($i=0;$i<count($online);$i++){
			$rooms = $rooms.",#".$online[$i];
		}
		return $rooms = strtolower($rooms);
	}
?>