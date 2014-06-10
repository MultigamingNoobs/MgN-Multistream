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

	function displaySidebarChat(){
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
?>