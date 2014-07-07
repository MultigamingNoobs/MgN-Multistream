<?php
	$q = $_GET['q'];
	$q = strtolower($q);
	$p = '../../';
	include $p.'api/hitboxApi.php';
	$hitbox = getHitboxStreamer();
	
	$contains;
	for($i=0;$i<count($hitbox);$i++){
		$usr = $hitbox[$i];
		$usr = strtolower($usr);
		if (strpos($usr,$q) !== false) {
			$contains[] = $usr;
		}	
	}
	if(count($contains) > 0){
		sort($contains);
		for($i=0;$i<count($contains);$i++){
			echo '<label id="'.$contains[$i].'," draggable="true" ondragstart="drag(event)">'.$contains[$i].'</label>';
			echo "<br>";
		}
	}else{
		echo 'no result';
	}
	
?>