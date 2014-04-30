<!DOCTYPE html>
<html lang="de">
	<head>
		<link href="multigaming/css/design.css" type="text/css" rel="stylesheet">
		<?php
			$v = "BETA v.0.2.12";
			include 'multigaming/api/api.php';
		?>
		<title>MultiGaming</title>
	</head>
	<body>
	<div id="root">
			<div id="head">
				<div id="menu">
					<?php include 'multigaming/menu.php'; ?>
				</div>
				<div id="pngs">
					<?php echo '<iframe name="pngs" src="multigaming/root/head/pngs.php?streams='.makeList(getAllStreams()).'" width=100% height=67px></iframe>'; ?>
				</div>
				<div id="upperright">
					<?php include 'multigaming/root/head/upperright.php' ?>
				</div>
			</div>
			<div id="content">
				<div id="streams">
					<?php echo '<iframe name="content" src='.getStreamString().' width=100%, height=100%></iframe>'; ?>
				</div>
				<div id="chat">
					<?php echo '<iframe src="https://kiwiirc.com/client/IRC.glados.tv/?nick=hitboxuser?&theme=basic'.getRooms(getOnlineStreams()).'" style="border:0; width:100%; height:100%;"></iframe>';	?>
					
				</div>
			</div>
			<!--<div id="footer" 
				<?php //include 'multigaming/root/footer/footer.php'; ?>
			</div> -->
		</div>
	 </body>
</html>







