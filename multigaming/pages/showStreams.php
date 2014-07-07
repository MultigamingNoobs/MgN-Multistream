<?php
	$hitbox = split(',',$_GET['hitbox']);
	$twitch = split(',',$_GET['twitch']);
	if($twitch[0] == ''){$twitch = array();}
	if($hitbox[0] == ''){$hitbox = array();}
	$lang = 'english';
	if($_GET['lang'] != null and $_GET['lang'] != ''){
		$lang = strtolower($_GET['lang']);
	}
	include '../api/language/'.$lang.'.php';
	include '../api/hitboxApi.php';
	include '../api/twitchApi.php';
	include '../api/streamApi.php';

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

<div id="streamHead">
	<div id="headMarquee">
		<?php
			if(count($hitbox) == 0 and count($twitch) == 0){
				echo '<marquee behavior="alternate">'.$noOneOnline.' :\ </marquee>';
			}else{
				$s = '';
				if(count($twitch) > 0){
					$s = $s.' @Twitch: ' . $twitch[0]." - " . getTwitchGame($twitch[0]);
					for($i=1 ; $i < count($twitch) ; $i++){
						$s = $s . ', ' . $twitch[$i] . " - " . getTwitchGame($twitch[$i]);
					}
				}
				if(count($hitbox) > 0){
					$s = $s.' @Hitbox: ' . $hitbox[0]." - " . getHitboxGame($hitbox[0]);
					for($i=1 ; $i < count($hitbox) ; $i++){
						$s = $s . ', ' . $hitbox[$i] . " - " . getHitboxGame($hitbox[$i]);
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

<div id="streamContent">
	<?php displayStreams($hitbox,$twitch);?>
</div>
<div id="chat">
	<div class="tabber">
		<?php displaySidebarChat($twitch,$hitbox);?>
	</div>
</div>