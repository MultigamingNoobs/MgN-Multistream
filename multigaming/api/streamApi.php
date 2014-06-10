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
		return '"multigaming/pages/streams.php?hitbox='.getHitboxStreamString().'&twitch='.getTwitchStreamString().$debug.'"';
	}
		
	//chat
	function displaySidebarChat($twitch,$hitbox){
		if(count($twitch)+count($hitbox) == 0){
			echo '<div class="tabbertab">';
			echo '<h2>keiner Online</h2>';
			echo '<p>Sobald ein Stream online ist, wird der Chat dazu angezeigt.</p>';
			echo '</div>';
		}else{
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