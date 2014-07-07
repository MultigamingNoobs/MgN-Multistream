<!DOCTYPE html>
<html lang="de">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="https://plus.google.com/110796119525259959832" rel="publisher" />
	<link href="multigaming/css/style.min.css" type="text/css" rel="stylesheet">
	<link href="multigaming/api/tabber/example.css" TYPE="text/css" rel="stylesheet" MEDIA="screen">
	<link href="multigaming/api/pace/pace.css" rel="stylesheet" />
	<script src="multigaming/api/jquery.js"></script>
	<?php
		//version of MgN-Multistream aka Multigaming
		$v = "v.0.7.0";
		//contains arrays of team members and suggestions on hitbox and twitch
		include ('multigaming/api/teamVars.php');
		//apis to show statistics, chat, stream etc
		include ('multigaming/api/hitboxApi.php');
		include ('multigaming/api/twitchApi.php');
		include ('multigaming/api/streamApi.php');
		//google analytics script
		include_once('multigaming/analyticstracking.php');
		//indexVars contains language, and settings
		include ('multigaming/api/indexVars.php');
	?>
	<title>MgN-Multistream</title>
	</head>
	<body>
		<div class="tabber">
			<?php include ('multigaming/menu.php'); ?>
		</div>
		<!-- functions.js contains hitbox and twitch search -->
		<script src="multigaming/api/functions.min.js"></script>
		<!-- pace shows the loading screen -->
		<script src="multigaming/api/pace/pace.min.js"></script>
		<!-- tabber-->
		<script src="multigaming/api/tabber/tabber.min.js"></script>
		<script>
			document.write('<style type="text/css">.tabber{display:none;}<\/style>');
		</script>
	</body>
</html>
