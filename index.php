<!DOCTYPE html>
<html lang="de">
	<head>
		<link href="multigaming/css/design.css" type="text/css" rel="stylesheet">
		<script language="JavaScript" type="text/javascript" src="multigaming/tabber/tabber.js"></script>
		<link rel="stylesheet" href="multigaming/tabber/example.css" TYPE="text/css" MEDIA="screen">
		<script type="text/javascript">
			document.write('<style type="text/css">.tabber{display:none;}<\/style>');
		</script>		
		<?php
			$v = "BETA v.0.4.0";
			include 'multigaming/api/hitboxApi.php';
			include 'multigaming/api/twitchApi.php';
			include 'multigaming/api/streamApi.php';
			include_once("multigaming/analyticstracking.php");
		?>
		<title>MultiGaming</title>
	</head>
	<body>
		<div id="head">
			<div id="menu">
				<?php include 'multigaming/menu.php'; ?>
			</div>
			<div id="headMarquee">
				<?php
					headMarquee();
				//echo '<iframe name="pngs" src="multigaming/root/head/pngs.php?streams='.makeList(getAllStreams()).'" width=100% height=68px style="border:0;"></iframe>';
				?>
			</div>
			<div id="upperright">
				<?php include 'multigaming/root/head/upperright.php' ?>
			</div>
		</div>
		<script type="text/javascript"> 
			document.write('<div id="content" style="height:' + (window.innerHeight-100) + 'px"> ');
		</script> 
			<div id="streams">
				<?php echo '<iframe name="content" src='.getStreamString().' width=100%, height=100%,  style="border:0;"></iframe>'; ?>
			</div>
			<script type="text/javascript"> 
				document.write('<div id="chat" style="height:' + (window.innerHeight-135) + 'px"> ');
			</script> 
				<div class="tabber">
					<?php displaySidebarChat(); ?>
				</div>
			</div>
		</div>
		<!--<div id="footer" 
			<?php //include 'multigaming/root/footer/footer.php'; ?>
		</div> -->´
	 </body>
</html>







