<?php
	$teamShort = array();
	for($i=0;$i<count($teamMembersHitbox);$i++){
		if($teamMembersHitbox[$i] != "Daelach" and $teamMembersHitbox[$i] != "NemesisOne" and $teamMembersHitbox[$i] != "Mexx" and $teamMembersHitbox[$i] !="Kanashii098"){
			$teamShort[] = $teamMembersHitbox[$i];
		}
	}

	$max = count($teamShort);
	for($i=0;$i<$max;$i++){
			echo '<img id="mgncomimg" src="http://edge.sf.hitbox.tv'.getHitboxImage($teamShort[$i]).'"></img><a href="http://www.hitbox.tv/'.$teamShort[$i].'" target="_blank" id="mgncomlink">'.$teamShort[$i].'</a> ';
	}

?>