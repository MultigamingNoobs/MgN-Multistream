<?php
	function contains($arr,$str){
		for($i=0;$i<count($arr);$i++){
			if($arr[$i] == $str){
				return true;
			}
		}
		return false;
	}
	function displayStreams($hitbox,$twitch){
		if(count($hitbox)+count($twitch) == 1){
			if(count($hitbox) == 1){
				displayHitboxStream($hitbox[0],"",1);
			}else{
				displayTwitchStream($twitch[0],"",1);
			}
		} elseif(count($hitbox)+count($twitch) == 2){
			if(count($hitbox) == 2){
				displayHitboxStream($hitbox[0],"",2);
				displayHitboxStream($hitbox[1],"",2);
			}elseif(count($twitch) == 2){
				displayTwitchStream($twitch[0],"",2);
				displayTwitchStream($twitch[1],"",2);
			}else{
				displayHitboxStream($hitbox[0],"",2);
				displayTwitchStream($twitch[0],"",2);
			}
			
		}else{
			$h = ceil((count($hitbox)+count($twitch))/2);
			if($h > 3){
				$h = 3;
			}
			$h = (string) $h;
			displayHitboxStreams($hitbox,$h);
			displayTwitchStreams($twitch,$h,count($hitbox));
		}
	}
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

	function displaySidebarChat($hitbox,$twitch){
		echo '<ul class="tabs">';
			for($i=0;$i<count($hitbox);$i++){
				echo '<li><a href="#'.$hitbox[$i].'">'.$hitbox[$i].'</a></li>';
			}
			for($i=0;$i<count($twitch);$i++){
				echo '<li><a href="#'.$twitch[$i].'">'.$twitch[$i].'</a></li>';
			}
		echo '</ul>';
		echo '<div class="tabcontents">';
			for($i=0;$i<count($hitbox);$i++){
				echo '<div id="'.$hitbox[$i].'" style="height:94vh;">';
				displayHitboxChat($hitbox[$i],'100');
				echo '</div>';
			}
			for($i=0;$i<count($twitch);$i++){
				echo '<div id="'.$twitch[$i].'" style="height:94vh;">';
				displayTwitchChat($twitch[$i],'100');
				echo '</div>';
			}
		echo '</div>';
	}
?>