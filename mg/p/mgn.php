<div id="MgNbuttons">
	<button id="MgNbuttonLoad" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnReload;?></button>
	<button id="MgNchatPopout" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnPopout;?></button>
	<button id="MgNhideShowChat" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnHideChat;?></button>
</div>
<div id="MgNstreams"></div>
<?php 
	include 'mg/api/teamVars.php';
	include 'mg/api/hitboxApi.php';
	include 'mg/api/twitchApi.php';
	include 'mg/api/streamApi.php';
	
	$team = $_GET['team'];
	$team_bol = false;
	if($team == "on"){
		$team_bol = true;
	}
	$suggestions = $_GET['suggestions'];
	$suggestions_bol = false;
	if($suggestions == "on"){
		$suggestions_bol = true;
	}
	$hitbox = getAllHitboxStreams($team_bol,$suggestions_bol,$teamMembersHitbox,$suggestionsHitbox);
	$twitch = getAllTwitchStreams($team_bol,$suggestions_bol,$teamMembersTwitch,$suggestionsTwitch);
	
	$MgMConditions = 'lang='.$lang.'&hitbox='.makeList($teamMembersHitbox).'&twitch='.makeList($teamMembersTwitch);
	echo '<div id="MgNchat"><iframe style="border:0px;height:100%;width:100%" src="mg/p/popoutChat.php?'.$MgMConditions.'"></iframe></div>';
?>
<script type="text/javascript">
	$(document).ready(function(){
		$("#MgNbuttonLoad").click(function(){
			$('#MgNstreams').load('mg/p/showStreams.php?<?php echo $MgMConditions;?>');
			$('#MgNchat').load('mg/p/showChat.php?<?php echo $MgMConditions;?>');
		});
	});
	$(document).ready(function(){
		$("#MgNchatPopout").click(function(){
			window.open(href='mg/p/popoutChat.php?<?php echo $MgMConditions;?>', "_blank", "toolbar=no, menubar=no")
			//$("#MgNhideShowChat").text('<?php echo $btnShowChat;?>');
			//$('#MgNchat').width(1);
		});
	});
	$(document).ready(function(){
		$("#MgNhideShowChat").click(function(){
			//$("#MgNhideShowChat").text('<?php echo $btnShowChat;?>');
			alert("Comming soone");
		});
	});
	$('#MgNstreams').load('mg/p/showStreams.php?<?php echo $MgMConditions;?>');
	$('#MgNchat').load('mg/p/showChat.php?<?php echo $MgMConditions;?>');
</script>