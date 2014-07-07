<!DOCTYPE html>
<html lang="de">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="https://plus.google.com/110796119525259959832" rel="publisher" />
	<link href="multigaming/css/style.css" type="text/css" rel="stylesheet">
	<link href="multigaming/api/tabber/example.css" TYPE="text/css" rel="stylesheet" MEDIA="screen">
	<link href="multigaming/api/pace/pace.css" rel="stylesheet" />
	<script src="multigaming/api/jquery.js"></script>
	<?php
		$v = "v.0.6.K.1";	
		include ('teamVars.php');
		include ('multigaming/api/hitboxApi.php');
		include ('multigaming/api/twitchApi.php');
		include ('multigaming/api/streamApi.php');
		include_once('multigaming/analyticstracking.php');
		include ('indexVars.php');
	?>
	<title>MgN-Multistream</title>
	</head>
	<body>
	<div class="tabber">
	<?php include ('multigaming/menu.php'); ?>
	</div>
	<script src="multigaming/api/functions.min.js"></script>
	<script src="multigaming/api/pace/pace.min.js"></script>
	<script src="multigaming/api/tabber/tabber.min.js"></script>
	<script>
	document.write('<style type="text/css">.tabber{display:none;}<\/style>');
	</script>
	</body>
</html>
