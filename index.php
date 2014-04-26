<!DOCTYPE html>
<html lang="de">
	<head>
		<link href="multigaming/css/design.css" type="text/css" rel="stylesheet">
		
		<?php
			$v = "BETA v.0.2.11";
			
			include 'multigaming/api/media.php';
			include 'multigaming/api/streams.php';
			include 'multigaming/content.php';
			include 'multigaming/head.php';
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
					<iframe name="pngs" src="multigaming/root/head/pngs.php" width=100%, height=100%>Keine IFrame unterstützung in deinem Browser :/</iframe>
					
				</div>
				<div id="upperright">
					<?php include 'multigaming/root/head/upperright.php' ?>
				</div>
			</div>
			<div id="content">
				<div id="head">
					<?php  ?>
				</div>
				<div id="head">
					<?php  ?>
				</div>
			</div>
			<!--<div id="footer" -->
				<?php //include 'multigaming/root/footer/footer.php'; ?>
			<!--</div> -->
			<?php
				include 'multigaming/menu.php';
				
				echoHead($all); 
				
				$beta= split(',',(strtolower($_GET['beta'])));
				if($beta[0] == "offline"){
					echoContent($all);
				}else{
					echoContent($online);
				}
				//echoFooter(); 
			?>
		</div>
	 </body>
</html>







