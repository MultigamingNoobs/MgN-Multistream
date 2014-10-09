<?php
	$teamMembersHitbox = array();
	$array = json_decode(file_get_contents('http://api.hitbox.tv/team/MultigamingNoobs'), true);
	for($i=0;$i<count($array['members']);$i++){
		$teamMembersHitbox[] = $array['members'][$i]['user_name'];
	}
	//$teamMembersHitbox = array('marderlp','daruuna','nephtis','kater','tomme9020','b3rz3rk3r','mgnkurim','snippo','mexx','daelach','mrmerades','nemesisone');
	$suggestionsHitbox = array('mindstalker','damakash');
	$teamMembersTwitch = array('marderlp','tomme9020','mgnkater');
	$suggestionsTwitch = array('mindstalker85');
?>