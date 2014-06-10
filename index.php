<!DOCTYPE html>
<html lang="de">
	<head>
		<link href="multigaming/css/design.css" type="text/css" rel="stylesheet">
		<script src="multigaming/pace/pace.js"></script>
		<link href="multigaming/pace/pace.css" rel="stylesheet" />
		<script language="JavaScript" type="text/javascript" src="multigaming/tabber/tabber.js"></script>
		<link rel="stylesheet" href="multigaming/tabber/example.css" TYPE="text/css" MEDIA="screen">
		<script type="text/javascript">
			document.write('<style type="text/css">.tabber{display:none;}<\/style>');
		</script>		
		<?php
			$v = "v.1.0.0";
			include 'multigaming/api/hitboxApi.php';
			include 'multigaming/api/twitchApi.php';
			include 'multigaming/api/streamApi.php';
			include_once("multigaming/analyticstracking.php");
			$hitbox = getAllHitboxStreams();
			$twitch = getAllTwitchStreams();
			$debug	= array_unique(split(',',$_GET['debug']));
			$tab	= array_unique(split(',',$_GET['tab']));
			$hitbox_online = getOnlineHitboxStreams($hitbox);
			$twitch_online = getOnlineTwitchStreams($twitch);
		?>
		<title>MultiGaming</title>
	</head>
	<body>
		<div class="tabber">
			<?php include 'multigaming/menu.php'; ?>
		</div>
	 </body>
</html>







