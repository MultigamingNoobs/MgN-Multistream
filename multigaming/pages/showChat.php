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
	
	$hitboxOnline = getOnlineHitboxStreams($hitbox);
	$twitchOnline = getOnlineTwitchStreams($twitch);
	
	echo '<div id="chat_">';
		echo '<div class="tabber">';
			echo count($hitboxOnline);
			echo $hitboxOnline[0];
			displaySidebarChat($twitchOnline,$hitboxOnline);
		echo '</div>';
	echo '</div>';
 ?>