<!DOCTYPE html>
<html lang="de">
	<meta charset="utf-8" />
	<head><title>MgN Multistream - Chat popout</title>
		<link rel="stylesheet" href="../api/tabber/example.css" TYPE="text/css" MEDIA="screen">
		<script language="JavaScript" type="text/javascript" src="../api/tabber/tabber.js"></script>
	</head>
	<body>
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
			
			$hitboxOnline = getOnlineHitboxStreams($hitbox);
			$twitchOnline = getOnlineTwitchStreams($twitch);
				
			echo '<div id="chat_">';
				echo '<div class="tabber">';
					displaySidebarChat($hitboxOnline,$twitchOnline);
				echo '</div>';
			echo '</div>';
		 ?>
	 </body>
 </html>