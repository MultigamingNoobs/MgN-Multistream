<div id="buttons">
	<button id="buttonLoad" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnReload;?></button>
	<button id="chatPopout" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnPopout;?></button>
	<button id="hideShowChat" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnHideChat;?></button>
	</div>
<div id="streams"></div>
<div id="chat"></div>
<script type="text/javascript">
<?php $streamsConditions = 'lang='.$lang.'&hitbox='.makeList($hitbox).'&twitch='.makeList($twitch);?>
	$(document).ready(function(){
		$("#buttonLoad").click(function(){
			$('#streams').load('multigaming/pages/showStreams.php?<?php echo $streamsConditions;?>'); // Der gesamte Inhalt von #container wird durch den Inhalt der Datei "ajax/content.html" ersetzt.
		});
	});
	$(document).ready(function(){
		$("#chatPopout").click(function(){
			window.open(href='multigaming/pages/popoutChat.php?<?php echo $streamsConditions;?>', "_blank", "toolbar=no, menubar=no")
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
	$('#streams').load('multigaming/pages/showStreams.php?<?php echo $streamsConditions;?>');
	$('#chat').load('multigaming/pages/showChat.php?<?php echo $streamsConditions;?>');
</script>