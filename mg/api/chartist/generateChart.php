<?php 
	$twitchStats = getTwitchStatistics();
	$hitboxStats = getHitboxStatistics();
	$gamesHitbox;
	$gamesTwitch;
	$viewsHitbox;
	$viewsTwitch;
	for($i=0;$i<10;$i++){
		$gamesHitbox[] = $hitboxStats['games'][$i];
		$gamesTwitch[] = $twitchStats['games'][$i];
		$viewsHitbox[] = $hitboxStats['viewers'][$i];
		$viewsTwitch[] = $twitchStats['viewers'][$i];
	}
?>