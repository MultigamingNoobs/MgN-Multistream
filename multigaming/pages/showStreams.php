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
	
	function displayHitboxStreamInfo($stream){
		echo '<td>';
			echo '<table id="middleTable">';
				echo '<tr>';
					echo '<td>';
						echo '<img src="'.getHitboxImage($stream).'" alt="user_logo" style="height:35px; width:35px"></img>';
					echo '</td>';
					echo '<td>';
						echo '<table id="innerTable">';
							echo '<tr>';
								echo '<td>'.$stream.' - '.getHitboxGame($stream).'</td>';
							echo '</tr>';
							echo '<tr>';
								echo '<td>'.getHitboxDescription($stream).'</td>';
							echo '</tr>';
						echo '</table>';
					echo '</td>';		
				echo '</tr>';
			echo '</table>';
		echo '</td>';
	}
	
	function displayTwitchStreamInfo($stream){
		echo '<td>';
			echo '<table id="middleTable">';
				echo '<tr>';
					echo '<td>';
						//echo '<img src='.getTwitchImage($stream).' alt="user_logo" style="height:35; width:35"></img>';
					echo '</td>';
					echo '<td>';
						echo '<table id="innerTable">';
							echo '<tr>';
								echo '<td>'.$stream.' - '.getTwitchGame($stream).'</td>';
							echo '</tr>';
						echo '</table>';
					echo '</td>';		
				echo '</tr>';
			echo '</table>';
		echo '</td>';
	}
?>
<!-- the head-->
<div id="streamHead">
	<div id="upperLeft">
		<table id="outerTable">
			<tr>
			<?php
				if(count($hitbox) == 0 and count($twitch) == 0){
					echo '<td><p id="noOne">'.$noOneOnline.' :\ </p></td>';
				}else{
					for($i=0 ; $i < count($twitch) ; $i++){
						displayTwitchStreamInfo($twitch[$i]);
					}
					for($i=0 ; $i < count($hitbox) ; $i++){
						displayHitboxStreamInfo($hitbox[$i]);
					}
				}
			?>
			</tr>
		</table>
	</div>
	<div id="upperRight">
		<img src="multigaming/pictures/mgnlogo.jpg" height="100%" width="100%"></img>
	</div>
</div>
<!-- the streams-->
<div id="streamContent">
	<?php displayStreams($hitbox,$twitch);?>
</div>
<!-- the sidebar chat-->
<div id="chat">
	<div class="tabber">
		<?php displaySidebarChat($twitch,$hitbox);?>
	</div>
</div>