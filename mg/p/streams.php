<div id="buttons">
	<button id="buttonLoad" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnReload;?></button>
	<button id="chatPopout" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnPopout;?></button>
	<button id="hideShowChat" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnHideChat;?></button>
	</div>
<div id="streams"></div>
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
	
	$streamsConditions = 'lang='.$lang.'&hitbox='.makeList($hitbox).'&twitch='.makeList($twitch);
	echo '<div id="chat"><iframe style="border:0px;height:100%;width:100%" src="mg/p/popoutChat.php?'.$streamsConditions.'"></iframe></div>';
?>

<script type="text/javascript">
	
	$(document).ready(function(){
		$("#buttonLoad").click(function(){
			$('#streams').load('mg/p/showStreams.php?<?php echo $streamsConditions;?>');
			$('#chat').load('mg/p/popoutChat.php?<?php echo $streamsConditions;?>');
		});
	});
	$(document).ready(function(){
		$("#chatPopout").click(function(){
			window.open(href='mg/p/popoutChat.php?<?php echo $streamsConditions;?>', "_blank", "toolbar=no, menubar=no")
			//$("#hideShowChat").text('<?php echo $btnShowChat;?>');
			//$('#chat').width(1);
		});
	});
	$(document).ready(function(){
		$("#hideShowChat").click(function(){
			//$("#hideShowChat").text('<?php echo $btnShowChat;?>');
			alert("Comming soone");
		});
	});
	$('#streams').load('mg/p/showStreams.php?<?php echo $streamsConditions;?>');
</script>