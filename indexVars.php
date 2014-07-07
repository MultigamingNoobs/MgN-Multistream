<?php
	$lang = 'english';
	if($_GET['lang'] != null and $_GET['lang'] != ''){
		$lang = strtolower($_GET['lang']);
	}
	include 'multigaming/api/language/'.$lang.'.php';
	
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