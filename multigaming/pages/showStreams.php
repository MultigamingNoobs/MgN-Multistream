<?php
	$hitbox = split(',',$_GET['hitbox']);
	$twitch = split(',',$_GET['twitch']);
	if($twitch[0] == ''){$twitch = array();}
	if($hitbox[0] == ''){$hitbox = array();}
	$lang = 'english';
	if($_GET['lang'] != null and $_GET['lang'] != ''){
		$lang = strtolower($_GET['lang']);
	}
	include '../api/language/'.$lang.'.php';
	include '../api/hitboxApi.php';
	include '../api/twitchApi.php';
	include '../api/streamApi.php';
	
	function displayStreamInfo($hitbox,$twitch){
		//how many streams to show?
		$c = count($hitbox)+count($twitch);
		$max = 7;
		//loop to show the stream informations
		for($i=1;$i<$c+1;$i++){
			//check weather a new row has to be inserted to the table
			if($i % $max === 0){echo '<tr>';}
			echo '<td style="width:'.(100/$max).'%">';
				echo '<table id="middleTable">';
					echo '<tr>';
						if($i<count($hitbox)+1){
							//show hitbox stream info
							displayHitboxStreamInfo($hitbox[$i-1]);
						}else{
							//show twitch stream info
							displayTwitchStreamInfo($twitch[$i-1]);
						}
					echo '</tr>';
				echo '</table>';
			echo '</td>';
			if($i % $max === 0){echo '</tr>';}
		}
	}
	function displayHitboxStreamInfo($stream){
		echo '<td>';
			echo '<img src="'.getHitboxImage($stream).'" alt="user_logo" style="height:35px; width:35px"></img>';
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
			echo '<img src="'.getTwitchImage($stream).'" alt="user_logo" style="height:35; width:35"></img>';
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
<div id="streamHead">
	<table id="outerTable">
		<tr>
		<?php
			if(count($hitbox) == 0 and count($twitch) == 0){
				echo '<td><p id="noOne">'.$noOneOnline.' :\ </p></td>';
			}else{
				displayStreamInfo($hitbox,$twitch);
			}
		?>
		</tr>
	</table>
</div>
<!-- the streams-->
<div id="streamContent">
	<?php displayStreams($hitbox,$twitch);?>
</div>
<!-- the sidebar chat-->
<div id="chat">
	
</div>