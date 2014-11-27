<!DOCTYPE html>
<html lang="de">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<!--css -->
	<link href="../css/style.min.css" type="text/css" rel="stylesheet">
	<title>MgN-Multistream Mouseover</title>
	</head>
	<body class="mousebody">
		<?php
			include '../api/hitboxApi.php';
			include '../api/twitchApi.php';
			include '../api/streamApi.php';
			$stream = $_GET['hitbox'];
			echo getHitboxDescription($stream);
		?>
	</body>
</html>