<?php
	function getHitboxTeam(){
		$ret = array();
		$array = json_decode(file_get_contents('http://api.hitbox.tv/team/MultigamingNoobs'), true);
		for($i=0;$i<count($array['members']);$i++){
			$ret[] = $array['members'][$i]['user_name'];
		}
		return $ret;
	}	
	$teamMembersHitbox = getHitboxTeam();
	$suggestionsHitbox = array('mindstalker','damakash');
	$teamMembersTwitch = array('marderlp','tomme9020','mgnkater');
	$suggestionsTwitch = array('mindstalker85');
?>