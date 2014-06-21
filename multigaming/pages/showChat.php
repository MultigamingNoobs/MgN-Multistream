<script language="JavaScript" type="text/javascript" src="../api/tabber/tabber.js"></script>
<link rel="stylesheet" href="../api/tabber/example.css" TYPE="text/css" MEDIA="screen">
<?php
	include '../api/hitboxApi.php';
	include '../api/twitchApi.php';
	include '../api/streamApi.php';
	$hitbox = split(',',$_GET['hitbox']);
	$twitch = split(',',$_GET['twitch']);
	$lang = 'english';
	if($_GET['lang'] != null and $_GET['lang'] != ''){
		$lang = strtolower($_GET['lang']);
	}
	include '../api/language/'.$lang.'.php';
	echo '<div id="chat">';
		echo '<div class="tabber">';
			displaySidebarChat($twitch,$hitbox);
		echo '</div>';
	echo '</div>';
 ?>