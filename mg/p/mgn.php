<div id="MgNbuttons">
	<button id="MgNbuttonLoad" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnReload;?></button>
	<button id="MgNchatPopout" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnPopout;?></button>
	<button id="MgNhideShowChat" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnHideChat;?></button>
</div>
<div id="MgNstreams"></div>
<div id="MgNchat"></div>
<script type="text/javascript">
	<?php
		$lang = 'en';
		if($_GET['lang'] != null and $_GET['lang'] != ''){
			$lang = strtolower($_GET['lang']);
		}
		include 'mg/api/lang/'.$lang.'.php';
	
		include 'mg/api/teamVars.php';
		include 'mg/api/streamApi.php';
		$MgMConditions = 'lang='.$lang.'&hitbox='.makeList($teamMembersHitbox).'&twitch='.makeList($teamMembersTwitch);	
	?>
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