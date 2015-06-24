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
			if(fnmatch($q[$j],$usr)){
					$contains[] = $usr;
			}elseif (strpos($usr,$q[$j]) !== false){
				$contains[] = $usr;
			}				
		}
	}
	if(count($contains) > 0){
		$contains = array_unique($contains);
		if(count($contains) <= 100){
			sort($contains);
		}
		for($i=0;$i<count($contains);$i++){
			echo '<label name="'.$contains[$i].'," id="'.$contains[$i].'," draggable="true" onclick="addToTwitchList('."'".$contains[$i]."'".')" ondragstart="drag(event)">'.$contains[$i].'</label>';
			echo "<br>";
		}
	}else{
		echo 'no result';
	}
?>