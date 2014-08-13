<?php
	$hitbox = split(',',$_GET['hitbox']);
	$twitch = split(',',$_GET['twitch']);
	
	$lang = 'english';
	if($_GET['lang'] != null and $_GET['lang'] != ''){
		$lang = strtolower($_GET['lang']);
	}
	
	include '../api/language/'.$lang.'.php';
	include '../api/hitboxApi.php';
	include '../api/twitchApi.php';
	include '../api/streamApi.php';
	include '../api/streamHeadApi.php';
	
	$hitboxOnline = getOnlineHitboxStreams($hitbox);
	$twitchOnline = getOnlineTwitchStreams($twitch);
	
	$c = count($hitboxOnline) + count($twitchOnline);?>
<!-- the head-->
<div id="streamHead">
	<table id="outerTable">
		<tr>
		<?php
			if($c == 0){
				echo '<td><p id="noOne">'.$noOneOnline.' :-\ </p></td>';
			}else{
				displayStreamInfo($hitboxOnline,$twitchOnline);
			}
		?>
		</tr>
	</table>
</div>
<!-- the streams-->
<div id="streamContent">
	<?php 
		if($c != 0){
			displayStreams($hitboxOnline,$twitchOnline);
		}
	?>
</div>