<?php 
	$lang = 'en';
	if($_GET['lang'] != null and $_GET['lang'] != ''){
		$lang = strtolower($_GET['lang']);
	}
	include 'mg/api/lang/'.$lang.'.php';
	
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
?>
<div id="streamButtons">
	<button id="buttonLoad" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnReload;?></button>
	<button id="chatPopout" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnPopout;?></button>
	<button id="hideShowChat" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnHideChat;?></button>
</div>


<div id="streams"></div>

<?php echo '<div id="chat"><iframe style="border:0px;height:100%;width:100%" src="mg/p/popoutChat.php?'.$streamsConditions.'"></iframe></div>';?>

<script type="text/javascript">
	var bol_showChat = true;
	$("#streamButtons").show();
	function showChat(){
		bol_showChat = true;
		$("#chat").show();
		$("#hideShowChat").text('<?php echo $btnHideChat;?>');
		$("#streamHead").width("75%");
		$("#streamContent").width("75%");
	}
	function hideChat(){
		bol_showChat = false;
		$("#chat").hide();
		$("#hideShowChat").text('<?php echo $btnShowChat;?>');
		$("#streamHead").width("100%");
		$("#streamContent").width("100%");
	}
	
	$(document).ready(function(){
		$("#buttonLoad").click(function(){
			$('#streams').load('mg/p/showStreams.php?<?php echo $streamsConditions;?>');
			$('#chat').load('mg/p/popoutChat.php?<?php echo $streamsConditions;?>');
		});
	});
	$(document).ready(function(){
		$("#chatPopout").click(function(){
			window.open(href='mg/p/popoutChat.php?<?php echo $streamsConditions;?>', "_blank", "toolbar=no, menubar=no")
			hideChat();
		});
	});
	$(document).ready(function(){
		$("#hideShowChat").click(function(){
			if(bol_showChat){hideChat();
			}else{showChat();}	
		});
	});
	$('#streams').load('mg/p/showStreams.php?<?php echo $streamsConditions;?>');
</script>