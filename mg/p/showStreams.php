<?php
	//input
	$hitbox = split(',',$_GET['hitbox']);
	$twitch = split(',',$_GET['twitch']);
	
	//language
	$lang = 'en';
	if($_GET['lang'] != null and $_GET['lang'] != ''){
		$lang = strtolower($_GET['lang']);
	}
	include '../api/lang/'.$lang.'.php';
	
	//apis
	include '../api/hitboxApi.php';
	include '../api/twitchApi.php';
	include '../api/streamApi.php';
	include '../api/streamHeadApi.php';
	include '../api/short.php';
	
	$hitboxOnline = getOnlineHitboxStreams($hitbox);
	$twitchOnline = getOnlineTwitchStreams($twitch);
		
	$c = count($hitboxOnline) + count($twitchOnline);
	
	//stream head
	if($c == 0){
		echo '<p style="color:#C11;" id="noOne">'.$noOneOnline.' :-\ </p>';
		echo '<script>$("#chat").hide();</script>';
	}else{
		echo '<div id="streamHead">';
			echo '<table id="outerTable">';
				echo '<tr>';
					displayStreamInfo($hitboxOnline,$twitchOnline);
					//show QRCode if one or more streams are online.
					$streamsConditions = 'lang='.$lang.'&hitbox='.makeList($hitboxOnline).'&twitch='.makeList($twitchOnline);
					$qrlink = 'http://'.$_SERVER['HTTP_HOST'].'/mg/p/popoutChat.php?'.$streamsConditions;
					$qrlink = short($qrlink);
					echo '<td>';
						echo '<table id="middleTable">';
							echo '<tr>';
								echo '<td>';
									echo'<div id="qrcode"><a href="'.$qrlink.'"><img src="http://api.qrserver.com/v1/create-qr-code/?data='.$qrlink.'&size=35x35" alt="qr code"></img><div><img src="http://api.qrserver.com/v1/create-qr-code/?data='.$qrlink.'&size=400x400" alt="qr code"></img></div></a></div>';
								echo '</td>';
								echo '<td>';
									echo '<table id="innerTable">';
										echo '<tr>';
											echo '<td>'.$qrlink.'</td>';
										echo '</tr>';
										echo '<tr>';
											echo '<td>StreamChat</td>';
										echo '</tr>';
									echo '</table>';
								echo '</td>';
							echo '</tr>';
						echo '</table>';
					echo '</td>';
				echo '</tr>';
			echo '</table>';
		echo '</div>';
	}
?>
<!-- the streams-->
<div id="streamContent">
	<?php 
		if($c != 0){
			displayStreams($hitboxOnline,$twitchOnline);
		}
	?>
	<script type="text/javascript">
		$("#streamContent").height($( window ).height() - 107);
	</script>
</div>