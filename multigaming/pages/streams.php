<?php
	$hitbox = getAllHitboxStreams();
	$twitch = getAllTwitchStreams();
	$debug	= array_unique(split(',',$_GET['debug']));

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
		if(count($hitbox)+count($twitch) == 1){
			if(count($hitbox) == 1){
				if(contains($debug,"chat")){
					displayHitboxStream($hitbox[0],"left",100);
					displayHitboxChat($hitbox[0],100,true);
				}else{
					displayHitboxStream($hitbox[0],"",100);
				}
			}else{
				if(contains($debug,"chat")){
					displayTwitchStream($twitch[0],"left",100);
					displayTwitchChat($twitch[0],100,true);
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
				displayHitboxChat($hitbox[$i],$h,true);
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
				displayTwitchChat($twitch[$i],$h,true);
			}else{
				if($i+1 < count($twitch)){
					displayTwitchStream($twitch[$i+1],"right",$h);
				}
			}
		}
	}
?>


<div id="head">
	<div id="headMarquee">
		<?php
			if(count($hitbox_online) == 0 and count($twitch_online) == 0){
				echo '<marquee behavior="alternate">Keiner online :\ </marquee>';
			}else{
				$s = '';
				if(count($twitch_online) > 0){
					$s = $s.'@Twitch: ' . $twitch_online[0]." - " . getTwitchGame($twitch_online[0]);
					for($i=1 ; $i < count($twitch_online) ; $i++){
						$s = $s . ', ' . $twitch_online[$i] . " - " . getTwitchGame($twitch_online[$i]);
					}
				}
				if(count($hitbox_online) > 0){
					$s = $s.'@Hitbox: ' . $hitbox_online[0]." - " . getHitboxGame($hitbox_online[0]);
					for($i=1 ; $i < count($hitbox_online) ; $i++){
						$s = $s . ', ' . $hitbox_online[$i] . " - " . getHitboxGame($hitbox_online[$i]);
					}
				}
				echo '<marquee scrollamount="3" scrolldelay="5">';
				echo 'Online:'.$s;
				echo '</marquee>';
			}
		?>
	</div>
	<div id="upperright">
		<img src="multigaming/pictures/mgnlogo.jpg" height="100%" width="100%"></img>
	</div>
</div>
<script type="text/javascript"> 
	document.write('<div id="content" style="height:' + (window.innerHeight-90) + 'px"> ');
</script> 
	<div id="streams">
		<?php 
			if(contains($debug,"offline")){
				displayStreams($hitbox,$twitch,$debug);
			}else{
				displayStreams($hitbox_online,$twitch_online,$debug);
			}
		?>
	</div>
	<script type="text/javascript"> 
		document.write('<div id="chat" style="height:' + (window.innerHeight-125) + 'px"> ');
	</script> 
		<div class="tabber">
			<?php 
				if(contains($debug,"offline")){
					displaySidebarChat($twitch,$hitbox);
				}else{
					displaySidebarChat($twitch_online,$hitbox_online);
				}
			?>
		</div>
	</div>
</div>