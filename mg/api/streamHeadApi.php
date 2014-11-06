<?php
	function displayStreamInfo($hitboxOnline,$twitchOnline){
		//how many streams to show?
		$c = count($hitboxOnline)+count($twitchOnline);
		//loop to show the stream informations
		for($i=1;$i<$c+1;$i++){
			echo '<td>';
				echo '<table id="middleTable">';
					echo '<tr>';
						if($i<count($hitboxOnline)+1){
							//show hitboxOnline stream info
							displayHitboxStreamInfo($hitboxOnline[$i-1]);
						}else{
							//show twitchOnline stream info
							displayTwitchStreamInfo($twitchOnline[$i-1-count($hitboxOnline)]);
						}
					echo '</tr>';
				echo '</table>';
			echo '</td>';
		}
	}
	function displayHitboxStreamInfo($stream){
		echo '<td>';
			echo '<div id="box"><a href="http://www.hitbox.tv/'.$stream.'" target="_blank"><img src="http://edge.sf.hitbox.tv'.getHitboxImage($stream).'" title="http://www.hitbox.tv/'.$stream.'" alt="'.$stream.'" style="height:35px; width:35px"></img><div>'.getHitboxDescription($stream).'</div></a></div>';
		echo '</td>';
		echo '<td>';
			echo '<table id="innerTable">';
				echo '<tr>';
					echo '<td>'.$stream.'</td>';
				echo '</tr>';
				echo '<tr>';
					echo '<td>'.getHitboxGame($stream).'</td>';
				echo '</tr>';
			echo '</table>';
		echo '</td>';
	}
	
	function displayTwitchStreamInfo($stream){
		echo '<td>';
			echo '<a href="http://www.twitch.tv/'.$stream.'" target="_blank"><img src="'.getTwitchImage($stream).'" title="http://www.twitch.tv/'.$stream.'" alt="'.$stream.'" style="height:35px; width:35px"></img></a>';
		echo '</td>';
		echo '<td>';
			echo '<table id="innerTable">';
				echo '<tr>';
					echo '<td>'.$stream.'</td>';
				echo '</tr>';
				echo '<tr>';
					echo '<td>'.getTwitchGame($stream).'</td>';
				echo '</tr>';
			echo '</table>';
		echo '</td>';
	}
?>