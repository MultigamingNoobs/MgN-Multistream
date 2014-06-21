<div id="buttons">
	<button id="buttonLoad" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnReload;?></button>
	<button id="chatPopout" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnPopout;?></button>
	<button id="hideShowChat" type="button" value="<?php echo $btnHideChat;?>"><?php echo $btnHideChat;?></button>
	</div>
<div id="streams"></div>
<div id="chat"></div>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.0/jquery.min.js"></script> 
<script type="text/javascript">
<?php $string = 'lang='.$lang.'&hitbox='.makeList($hitbox_online).'&twitch='.makeList($twitch_online);?>
	$(document).ready(function(){
		$("#buttonLoad").click(function(){
			$('#streams').load('multigaming/pages/showStreams.php?<?php echo $string;?>'); // Der gesamte Inhalt von #container wird durch den Inhalt der Datei "ajax/content.html" ersetzt.
		});
	});
	$(document).ready(function(){
		$("#chatPopout").click(function(){
			window.open(href='multigaming/pages/showChat.php?<?php echo $string;?>', "_blank", "toolbar=no, menubar=no")
			$("#hideShowChat").text('<?php echo $btnShowChat;?>');
			//$('#chat').width(1);
		});
	});
	$(document).ready(function(){
		$("#hideShowChat").click(function(){
			//$("#hideShowChat").text('<?php echo $btnShowChat;?>');
			//alert($(this).val());
		});
	});
	$('#streams').load('multigaming/pages/showStreams.php?<?php echo $string;?>');
	$('#chat').load('multigaming/pages/showChat.php?<?php echo $string;?>');
</script>