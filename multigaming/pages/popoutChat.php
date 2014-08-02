<!DOCTYPE html>
<html lang="de">
	<meta charset="utf-8" />
	<head><title>MgN Multistream - Chat popout</title>
		<link rel="stylesheet" href="../api/tabber/example.css" TYPE="text/css" MEDIA="screen">
		<script language="JavaScript" type="text/javascript" src="../api/tabber/tabber.js"></script>
	</head>
	<body>
		<?php
			include '../api/hitboxApi.php';
			include '../api/twitchApi.php';
			include '../api/streamApi.php';
		
			$hitbox = split(',',$_GET['hitbox']);
			$twitch = split(',',$_GET['twitch']);
		
			$hitboxOnline = getOnlineHitboxStreams($hitbox);
			$twitchOnline = getOnlineTwitchStreams($twitch);
					
			$lang = 'english';
			if($_GET['lang'] != null and $_GET['lang'] != ''){
				$lang = strtolower($_GET['lang']);
			}
			include '../api/language/'.$lang.'.php';
		
			echo '<div id="chat_">';
				echo '<div class="tabber">';
					displaySidebarChat($twitchOnline,$hitboxOnline);
				echo '</div>';
			echo '</div>';
		 ?>
	 </body>
 </html>