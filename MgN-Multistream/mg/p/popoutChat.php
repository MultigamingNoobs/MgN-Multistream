<!DOCTYPE html>
<html lang="de">
	<meta charset="utf-8" />
	<head><title>MgN Multistream - Chat popout</title>
		<link rel="stylesheet" href="../api/cmenu/menu.css" TYPE="text/css" MEDIA="screen">
		<script language="JavaScript" type="text/javascript" src="../api/cmenu/menu.js"></script>
	</head>
	<body>
		<?php
			$hitbox = split(',',$_GET['hitbox']);
			$twitch = split(',',$_GET['twitch']);
			
			$lang = 'en';
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
	 </body>
 </html>