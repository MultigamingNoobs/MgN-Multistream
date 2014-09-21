<!DOCTYPE html>
<html lang="de">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="mg/css/style.min.css" type="text/css" rel="stylesheet">
	<link href="mg/api/pace/pace.css" rel="stylesheet" />
	<link href="mg/api/mmenu/menu.css" rel="stylesheet" />
	<script src="mg/api/jquery.js"></script>
	<script src="mg/api/mmenu/menu.js"></script>
	<?php
		//version of MgN-Multistream aka Multigaming
		$v = "v.0.7.2b";
		//language
		$lang = 'en';
		if($_GET['lang'] != null and $_GET['lang'] != ''){
			$lang = strtolower($_GET['lang']);
		}
		include 'mg/api/lang/'.$lang.'.php';
		//page
		$p = strtolower($_GET['p']);
		if($p == '' or $p == null){$p=strtolower($home);}
		
		include_once('mg/analyticstracking.php');
	?>
	<title>MgN-Multistream</title>
	</head>
	<body>
		<!-- menu /-->
		<div id="sse1">
			<div id="sses1">
				<ul>
				<?php 
				$conditions = '';
				if($lang != 'en'){$conditions=$conditions.'&lang='.$lang;}
				if($_GET['hitbox'] != null){$conditions=$conditions.'&hitbox='.$_GET['hitbox'];}
				if($_GET['twitch'] != null){$conditions=$conditions.'&twitch='.$_GET['twitch'];}
				if($_GET['team'] != null){$conditions=$conditions.'&team='.$_GET['team'];}
				if($_GET['suggestions'] != null){$conditions=$conditions.'&suggestions='.$_GET['suggestions'];}
				echo'<li><a href="?p='.$home.$conditions.'">'.$home.'</a></li>'; ?>
				<li><a href="?p=MgN<?php echo $conditions;?>">MgN</a></li>
				<li><a href="?p=<?php echo $streams; echo $conditions;?>"><?php echo $streams;?></a></li>
				<li><a href="?p=<?php echo $imprint; echo $conditions;?>"><?php echo $imprint;?></a></li>
				<li><a href="?p=<?php echo $help; echo $conditions;?>"><?php echo $help;?></a></li>
				<li><a href="?p=changelog<?php echo $conditions;?>">Changelog</a></li>
				</ul>
			</div>
		</div>
		<div id="content">
			<?php
				include 'mg/p/'.$lang.'/'.$p.'.php';
			?>
		</div>
		
		<!-- functions.js contains hitbox and twitch search -->
		<script src="mg/api/functions.min.js"></script>
		<!-- pace shows the loading screen -->
		<script src="mg/api/pace/pace.min.js"></script>
	</body>
</html>
