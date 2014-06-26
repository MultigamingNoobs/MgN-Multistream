<!DOCTYPE html>
<html lang="de">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<?php
		$v = "v.0.6.K";	
		$lang = 'english';
		if($_GET['lang'] != null and $_GET['lang'] != ''){
			$lang = strtolower($_GET['lang']);
		}
		include 'multigaming/api/language/'.$lang.'.php';
	?>
	<link href="https://plus.google.com/110796119525259959832" rel="publisher" />
	<link href="multigaming/css/style.css" type="text/css" rel="stylesheet">
	<link href="multigaming/api/tabber/example.css" TYPE="text/css" rel="stylesheet" MEDIA="screen">
	<link href="multigaming/api/pace/pace.css" rel="stylesheet" />
	<script src="multigaming/api/jquery.js"></script>
	<?php
		$teamMembersHitbox = array('marderlp','daruuna','nephtis','kater','tomme9020','b3rz3rk3r','kurim');
		$suggestionsHitbox = array('mindstalker','damakash');
		$teamMembersTwitch = array('marderlp','tomme9020','mgnkater');
		$sugestionsTwitch = array('mindstalker85');
		include ('multigaming/api/hitboxApi.php');
		include ('multigaming/api/twitchApi.php');
		include ('multigaming/api/streamApi.php');
		include_once('multigaming/analyticstracking.php');
		
		$team = $_GET['team'];
		$team_bol = true;
		if($team <> nil and $team == "on"){
			$team_bol = false;
		}
		$suggestions = $_GET['suggestions'];
		$suggestions_bol = true;
		if($suggestions <> nil and $suggestions == "on"){
			$suggestions_bol = false;
		}
		$hitbox = getAllHitboxStreams($team_bol,$suggestions_bol,$teamMembersHitbox,$suggestionsHitbox);
		$twitch = getAllTwitchStreams($team_bol,$suggestions_bol,$teamMembersTwitch,$sugestionsTwitch);
		$debug	= array_unique(split(',',$_GET['debug']));
		$tab	= array_unique(split(',',$_GET['tab']));
		$hitbox_online = getOnlineHitboxStreams($hitbox);
		$twitch_online = getOnlineTwitchStreams($twitch);

	?>
	<title>MgN-Multistream</title>
	</head>
	<body>
	<div class="tabber">
	<?php include ('multigaming/menu.php'); ?>
	</div>
	<script src="multigaming/api/functions.min.js"></script>
	<script src="multigaming/api/pace/pace.min.js"></script>
	<script src="multigaming/api/tabber/tabber.min.js"></script>
	<script>
	document.write('<style type="text/css">.tabber{display:none;}<\/style>');
	</script>
	</body>
</html>
