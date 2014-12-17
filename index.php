<!DOCTYPE html>
<html lang="de">
	<head>
<<<<<<< HEAD
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<!-- Android 5.0 Chrome-->
		<meta name="theme-color" content="#330000">
		<link rel="icon" sizes="192×192" href="favicon.png">
		<!--css -->
		<link href="mg/css/style.min.css" type="text/css" rel="stylesheet">
		<link href="mg/api/pace/pace.css" rel="stylesheet" />
		<link href="mg/api/mmenu/menu.css" rel="stylesheet" />
		<!-- js -->
		<script src="mg/api/jquery.js"></script>
		<script src="mg/api/mmenu/menu.js"></script>
		<!-- important php variables-->
		<?php
			//version of MgN-Multistream
			$v = "v.0.10.0";
			//language settings
			$lang = 'en';
			if($_GET['lang'] != null and $_GET['lang'] != ''){
				$lang = strtolower($_GET['lang']);
			}
			include 'mg/api/lang/'.$lang.'.php';
			//page
			$p = strtolower($_GET['p']);
			if($p == '' or $p == null){
				$p=strtolower($home);
			}
			//google analyticstracking
			include_once('mg/analyticstracking.php');
			//google url shortner api (goo.gl)
			include 'mg/api/short.php';
			include 'mg/api/teamVars.php';
			include 'mg/api/hitboxApi.php';
			include 'mg/api/twitchApi.php';
			include 'mg/api/streamApi.php';
		?>
		<title>MgN-Multistream</title>
=======
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<!--css -->
	<link href="mg/css/style.min.css" type="text/css" rel="stylesheet">
	<link href="mg/api/pace/pace.css" rel="stylesheet" />
	<link href="mg/api/mmenu/menu.css" rel="stylesheet" />
	<link href="mg/api/chartist/chartist.min.css" rel="stylesheet" />
	<!-- js -->
	<script src="mg/api/jquery.js"></script>
	<script src="mg/api/chartist/chartist.min.js"></script>
	<script src="mg/api/mmenu/menu.js"></script>
	<!-- Android 5.0 Chrome-->
	<meta name="theme-color" content="#330000">
	<link rel="icon" sizes="192×192" href="favicon.ico">
	<!-- important php variables-->
	<?php
		//version of MgN-Multistream
		$v = "v.0.9.1";
		//language settings
		$lang = 'en';
		if($_GET['lang'] != null and $_GET['lang'] != ''){
			$lang = strtolower($_GET['lang']);
		}
		include 'mg/api/lang/'.$lang.'.php';
		//page
		$p = strtolower($_GET['p']);
		if($p == '' or $p == null){
			$p=strtolower($home);
		}
		//google analyticstracking
		include_once('mg/analyticstracking.php');
		//google url shortner api (goo.gl)
		include 'mg/api/short.php';
		include 'mg/api/teamVars.php';
		include 'mg/api/hitboxApi.php';
		include 'mg/api/twitchApi.php';
		include 'mg/api/streamApi.php';
	?>
	<title>MgN-Multistream</title>
>>>>>>> origin/v.0.9.1
	</head>
	<body>
		<?php include 'mg/menu.php';?>
		<?php include 'mg/shareButtons.php';?>
		<div id="content">
				<?php include 'mg/p/'.$lang.'/'.$p.'.php';?>
		</div>
				
		<!-- functions.js contains hitbox and twitch search -->
		<script src="mg/api/functions.min.js"></script>
		<!-- pace shows the loading screen -->
		<script src="mg/api/pace/pace.min.js"></script>
		<script src="https://apis.google.com/js/platform.js" async defer> {lang: 'de'}</script>
	</body>
</html>
