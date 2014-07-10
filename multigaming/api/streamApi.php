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
				displayHitboxStream($hitbox[0],"",100);
			}else{
				displayTwitchStream($twitch[0],"",100);
			}
		} elseif(count($hitbox)+count($twitch) == 2){
			if(count($hitbox) == 2){
				displayHitboxStream($hitbox[0],"",50);
				displayHitboxStream($hitbox[1],"",50);
			}elseif(count($twitch) == 2){
				displayTwitchStream($twitch[0],"",50);
				displayTwitchStream($twitch[1],"",50);
			}else{
				displayHitboxStream($hitbox[0],"",50);
				displayTwitchStream($twitch[0],"",50);
			}
			
		}else{
			$h = ceil(100 / (count($hitbox)+count($twitch)));
			if($h < 25){
				$h = 25;
			}
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

	function displaySidebarChat($twitch,$hitbox){
		if($twitch[0] <> ''){
			for($i=0;$i<count($twitch);$i++){
				echo '<div class="tabbertab">';
				echo '<h2>'.$twitch[$i].'</h2>';
					displayTwitchChat($twitch[$i],'100');
				echo '</div>';
			}
		}
		if($hitbox[0] <> ''){
			for($i=0;$i<count($hitbox);$i++){
				echo '<div class="tabbertab">';
				echo '<h2>'.$hitbox[$i].'</h2>';
					displayHitboxChat($hitbox[$i],'100');
				echo '</div>';
			}
		}
	}
?>