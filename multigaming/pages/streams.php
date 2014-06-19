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
			$h = ceil(100 / ceil(((count($hitbox)+count($twitch))/2)));
			if($h < 25){
				$h = 25;
			}
			displayHitboxStreams($hitbox,$h);
			displayTwitchStreams($twitch,$h,count($hitbox));
		}
	}
	function displayHitboxStreams($hitbox,$h){
		for($i=0 ; $i < count($hitbox) ; $i = $i + 2){
			displayHitboxStream($hitbox[$i],"left",$h);
			if($i+1 < count($hitbox)){
				displayHitboxStream($hitbox[$i+1],"right",$h);
			}
		}
	}
	function displayTwitchStreams($twitch,$h,$a){
		if($a % 2 == 0){
			$a=0;
		}else{
			$a=1;
			if($twitch[0] <> ''){displayTwitchStream($twitch[0],"right",$h);}
		}
		for($i=0+$a ; $i < count($twitch) ; $i = $i + 2){
			displayTwitchStream($twitch[$i],"left",$h);
			if($i+1 < count($twitch)){
				displayTwitchStream($twitch[$i+1],"right",$h);
			}
		}
	}
?>


<div id="head">
	<div id="headMarquee">
		<?php
			if(count($hitbox_online) == 0 and count($twitch_online) == 0){
				echo '<marquee behavior="alternate">'.$noOneOnline.' :\ </marquee>';
			}else{
				$s = '';
				if(count($twitch_online) > 0){
					$s = $s.' @Twitch: ' . $twitch_online[0]." - " . getTwitchGame($twitch_online[0]);
					for($i=1 ; $i < count($twitch_online) ; $i++){
						$s = $s . ', ' . $twitch_online[$i] . " - " . getTwitchGame($twitch_online[$i]);
					}
				}
				if(count($hitbox_online) > 0){
					$s = $s.' @Hitbox: ' . $hitbox_online[0]." - " . getHitboxGame($hitbox_online[0]);
					for($i=1 ; $i < count($hitbox_online) ; $i++){
						$s = $s . ', ' . $hitbox_online[$i] . " - " . getHitboxGame($hitbox_online[$i]);
					}
				}
				echo '<marquee scrollamount="5" scrolldelay="5">';
				echo 'Online:'.$s;
				echo '</marquee>';
			}
		?>
	</div>
	<div id="upperright">
		<img src="multigaming/pictures/mgnlogo.jpg" height="100%" width="100%"></img>
	</div>
</div>
<div id="content">
	<div id="streams">
		<?php displayStreams($hitbox_online,$twitch_online);?>
	</div>
	<div id="chat">
		<div class="tabber">
			<?php 
				displaySidebarChat($twitch_online,$hitbox_online);
			?>
		</div>
	</div>
</div>