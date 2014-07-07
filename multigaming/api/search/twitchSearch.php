<?php
	$q = array_map('trim',split(',',strtolower($_GET['q'])));
	$p = '../../';
	include $p.'api/twitchApi.php';
	$twitch = getTwitchStreamer();

	$contains;
	for($i=0;$i<count($twitch);$i++){
		$usr = $twitch[$i];
		$usr = strtolower($usr);
		for($j=0;$j<count($q);$j++){
			if (fnmatch($usr,$q[$j])) {
				$contains[] = $usr;
			}
		}
	}
	if(count($contains) > 0){
		if(count($contains) <= 100){
			$contains = array_unique($contains);
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