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
			$v = "BETA v.0.4.1";
			include 'multigaming/api/hitboxApi.php';
			include 'multigaming/api/twitchApi.php';
			include 'multigaming/api/streamApi.php';
			include_once("multigaming/analyticstracking.php");
		?>
		<title>MultiGaming</title>
	</head>
	<body>
		<div class="tabber">
			<?php include 'multigaming/menu.php'; ?>
		</div>
	 </body>
</html>







