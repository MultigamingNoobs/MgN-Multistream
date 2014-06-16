<?php
	$q = $_GET['q'];
	$p = '../';
	include $p.'api/twitchApi.php';
	$twitch = getTwitchStreamer();
	if($q == ''){
		echo 'no result';
	}
	for($i=0;$i<count($twitch);$i++){
		$usr = $twitch[$i];
		if (strpos(strtolower($usr),strtolower($q)) !== false) {

			echo '<label id="'.$usr.'," draggable="true" ondragstart="drag(event)">'.$usr.'</label>';
			echo "<br>";
		}
	}
	
?>