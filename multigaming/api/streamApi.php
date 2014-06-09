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
	
	function headMarquee(){
		if(count(getOnlineHitboxStreams()) == 0 and count(getOnlineTwitchStreams()) == 0){
			echo '<marquee behavior="alternate">Keiner online :\ </marquee>';
		}else{
			echo '<marquee scrollamount="5" scrolldelay="5">';
			echo 'Online: @Hitbox: '.makeList(getOnlineHitboxStreams()).' @Twitch: '.makeList(getOnlineTwitchStreams());
			echo '</marquee>';
		}
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
	
	//chat
	function displaySidebarChat(){
	$twitch = getOnlineTwitchStreams();
	$hitbox = getOnlineHitboxStreams();
	$debug = false;
		if(count($twitch)+count($hitbox) == 0 and $debug==false){
			echo '<div class="tabbertab">';
			echo '<h2>keiner Online</h2>';
			echo '<p>Sobald ein Stream online ist, wird der Chat dazu angezeigt.</p>';
			echo '</div>';
		}else{
			if ($debug == true){
				$twitch = getAllTwitchStreams();
				$hitbox = getAllHitboxStreams();
			}
			for($i=0;$i<count($twitch);$i++){
				echo '<div class="tabbertab">';
				echo '<h2>'.$twitch[$i].'</h2>';
					displayTwitchChat($twitch[$i],'100',false);
				echo '</div>';
			}
			for($i=0;$i<count($hitbox);$i++){
				echo '<div class="tabbertab">';
				echo '<h2>'.$hitbox[$i].'</h2>';
					displayHitboxChat($hitbox[$i],'100',false);
				echo '</div>';
			}
		}
	}
?>