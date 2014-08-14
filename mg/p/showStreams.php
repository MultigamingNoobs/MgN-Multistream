<?php
	$hitbox = split(',',$_GET['hitbox']);
	$twitch = split(',',$_GET['twitch']);
	
	$lang = 'english';
	if($_GET['lang'] != null and $_GET['lang'] != ''){
		$lang = strtolower($_GET['lang']);
	}
	
	include '../api/lang/'.$lang.'.php';
	include '../api/hitboxApi.php';
	include '../api/twitchApi.php';
	include '../api/streamApi.php';
	include '../api/streamHeadApi.php';
	
	$hitboxOnline = getOnlineHitboxStreams($hitbox);
	$twitchOnline = getOnlineTwitchStreams($twitch);
		
	$c = count($hitboxOnline) + count($twitchOnline);
?>
<!-- the head-->

<?php
	if($c == 0){
		echo '<p style="color:#C11;" id="noOne">'.$noOneOnline.' :-\ </p>';
	}else{
		echo '<div id="streamHead">';
			echo '<table id="outerTable">';
				echo '<tr>';
					displayStreamInfo($hitboxOnline,$twitchOnline);
				echo '</tr>';
			echo '</table>';
		echo '</div>';
	}
?>
<!-- the streams-->
<div id="streamContent">
	<?php 
		if($c != 0){
			displayStreams($hitboxOnline,$twitchOnline);
		}
	?>
</div>