<?php
	$q = $_GET['q'];
	$q = strtolower($q);
	$p = '../../';
	include $p.'api/twitchApi.php';
	$twitch = getTwitchStreamer();

	$contains;
	for($i=0;$i<count($twitch);$i++){
		$usr = $twitch[$i];
		$usr = strtolower($usr);
		strtolower($usr);
		if (strpos($usr,$q) !== false) {
			$contains[] = $usr;
		}
	}
	if(count($contains) > 0){
		if(count($contains) <= 100){
			sort($contains);
		}
		for($i=0;$i<count($contains);$i++){
			echo '<label id="'.$contains[$i].'," draggable="true" ondragstart="drag(event)">'.$contains[$i].'</label>';
			echo "<br>";
		}
	}else{
		echo 'no result';
	}
	
?>