<!DOCTYPE html>
<html lang="de">
	<head>
		<link href="multigaming/css/design.css" type="text/css" rel="stylesheet">
		
		<?php
			$v = "BETA v.0.2.11";
			
			include 'multigaming/api/media.php';
			include 'multigaming/api/streams.php';
			include 'multigaming/content.php';
			$all = getArr();
			$online = getOnlineStreams($all);
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
					<?php echo '<iframe name="pngs" src="multigaming/root/head/pngs.php?streams='.$_REQUEST['streams'].'" width=100% height=99%></iframe>'; ?>
				</div>
				<div id="upperright">
					<?php include 'multigaming/root/head/upperright.php' ?>
				</div>
			</div>
			<div id="content">
				<div id="streams">
					<iframe name="streams" src="multigaming/root/content/streams.php" width=100%, height=99%></iframe>
				</div>
				<div id="chat">
					<?php 
						
						$rooms = getRooms($online);
						echo '<iframe src="https://kiwiirc.com/client/IRC.glados.tv/?nick=hitboxuser?&theme=basic'.$rooms.'" style="border:0; width:100%; height:100%;"></iframe>';
					?>
					
				</div>
			</div>
			<!--<div id="footer" -->
				<?php //include 'multigaming/root/footer/footer.php'; ?>
			<!--</div> -->
			<?php
				$debug = $_REQUEST['debug'];
				$streams = $_REQUEST['streams'];
				$beta= split(',',(strtolower($_GET['beta'])));
				if($beta[0] == "offline"){
					echoStreams($all);
				}else{
					echoStreams($online);
				}
			?>
		</div>
	 </body>
</html>







