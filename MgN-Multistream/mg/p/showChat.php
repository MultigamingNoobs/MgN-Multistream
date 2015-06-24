<link rel="stylesheet" href="mg/api/cmenu/menu.css" TYPE="text/css" MEDIA="screen">
<script language="JavaScript" type="text/javascript" src="mg/api/cmenu/menu.js"></script>
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
	
	$hitboxOnline = getOnlineHitboxStreams($hitbox);
	$twitchOnline = getOnlineTwitchStreams($twitch);
	
	echo '<div id="chat_">';
		displaySidebarChat($hitboxOnline,$twitchOnline);
	echo '</div>';
 ?>