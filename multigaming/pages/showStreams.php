<?php
	$hitbox = split(',',$_GET['hitbox']);
	$twitch = split(',',$_GET['twitch']);
	
	$lang = 'english';
	if($_GET['lang'] != null and $_GET['lang'] != ''){
		$lang = strtolower($_GET['lang']);
	}
	
	include '../api/language/'.$lang.'.php';
	include '../api/hitboxApi.php';
	include '../api/twitchApi.php';
	include '../api/streamApi.php';
	
	$hitboxOnline = getOnlineHitboxStreams($hitbox);
	$twitchOnline = getOnlineTwitchStreams($twitch);
	
	function displayStreamInfo($hitboxOnline,$twitchOnline){
		//how many streams to show?
		$c = count($hitboxOnline)+count($twitchOnline);
		$max = 7;
		//loop to show the stream informations
		for($i=1;$i<$c+1;$i++){
			//check weather a new row has to be inserted to the table
			if($i % $max === 0){echo '<tr>';}
			echo '<td style="width:'.(100/$max).'%">';
				echo '<table id="middleTable">';
					echo '<tr>';
						if($i<count($hitboxOnline)+1){
							//show hitboxOnline stream info
							displayHitboxStreamInfo($hitboxOnline[$i-1]);
						}else{
							//show twitchOnline stream info
							displayTwitchStreamInfo($twitchOnline[$i-1]);
						}
					echo '</tr>';
				echo '</table>';
			echo '</td>';
			if($i % $max === 0){echo '</tr>';}
		}
	}
	function displayHitboxStreamInfo($stream){
		echo '<td>';
			echo '<a href="http://www.hitbox.tv/'.$stream.'" target="_blank"><img src="'.getHitboxImage($stream).'" alt="user_logo" style="height:35px; width:35px"></img></a>';
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
			echo '<a href="http://www.twitch.tv/'.$stream.'" target="_blank"><img height="30px" src="'.getTwitchImage($stream).'" alt="user_logo" style="height:35; width:35"></img></a>';
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
<!-- the head-->
<?php $c = count($hitboxOnline) + count($twitchOnline);?>
<div id="streamHead">
	<table id="outerTable">
		<tr>
		<?php
			if($c == 0){
				echo '<td><p id="noOne">'.$noOneOnline.' :-\ </p></td>';
				echo '$twitch:';
				print_r($twitch);
				echo '$twitchOnline:';
				print_r($twitchOnline);
			}else{
				displayStreamInfo($hitboxOnline,$twitchOnline);
			}
		?>
		</tr>
	</table>
</div>
<!-- the streams-->
<div id="streamContent">
	<?php 
		if($c != 0){
			displayStreams($hitboxOnline,$twitchOnline);
		}
	?>
</div>