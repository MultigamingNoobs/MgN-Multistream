<div id="MgNbuttons">
	<button id="MgNbuttonLoad" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnReload;?></button>
	<button id="MgNchatPopout" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnPopout;?></button>
	<button id="MgNhideShowChat" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnHideChat;?></button>
	</div>
<div id="MgNstreams"></div>
<div id="MgNchat"></div>
<script type="text/javascript">
<?php $MgMConditions = 'lang='.$lang.'&hitbox='.makeList(getOnlineHitboxStreams($teamMembersHitbox)).'&twitch='.makeList(getOnlineTwitchStreams($teamMembersTwitch));?>
	$(document).ready(function(){
		$("#MgNbuttonLoad").click(function(){
			$('#MgNstreams').load('multigaming/pages/showStreams.php?<?php echo $MgMConditions;?>'); // Der gesamte Inhalt von #container wird durch den Inhalt der Datei "ajax/content.html" ersetzt.
		});
	});
	$(document).ready(function(){
		$("#MgNchatPopout").click(function(){
			window.open(href='multigaming/pages/popoutChat.php?<?php echo $MgMConditions;?>', "_blank", "toolbar=no, menubar=no")
			$("#MgNhideShowChat").text('<?php echo $btnShowChat;?>');
			//$('#MgNchat').width(1);
		});
	});
	$(document).ready(function(){
		$("#MgNhideShowChat").click(function(){
			//$("#MgNhideShowChat").text('<?php echo $btnShowChat;?>');
			alert("Comming soone");
		});
	});
	$('#MgNstreams').load('multigaming/pages/showStreams.php?<?php echo $MgMConditions;?>');
	$('#MgNchat').load('multigaming/pages/showChat.php?<?php echo $MgMConditions;?>');
</script>