<!DOCTYPE html>
<html lang="de">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link href="mg/css/style.min.css" type="text/css" rel="stylesheet">
	<link href="mg/api/pace/pace.css" rel="stylesheet" />
	<link href="mg/api/mmenu/menu.css" rel="stylesheet" />
	<link href="mg/api/chartist/chartist.min.css" rel="stylesheet" />
	<script src="mg/api/jquery.js"></script>
	<script src="mg/api/chartist/chartist.min.js"></script>
	<script src="mg/api/mmenu/menu.js"></script>
	<?php
		//version of MgN-Multistream aka Multigaming
		$v = "v.0.8.2";
		//language
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
		
		include_once('mg/analyticstracking.php');
		//shotner api
		include 'mg/api/short.php';
		include 'mg/api/teamVars.php';
		include 'mg/api/hitboxApi.php';
		include 'mg/api/twitchApi.php';
		include 'mg/api/streamApi.php';
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
				echo'<li><a href="?p='.$home.$conditions.'">'.$home.'</a></li>';
				echo'<li><a href="?p=mgnc">MgN Community</a></li>';
				echo'<li><a href="?p='.$streams.$conditions.'">'.$streams.'</a></li>';
				echo'<li><a href="?p='.$imprint.$conditions.'">'.$imprint.'</a></li>';
				echo'<li><a href="?p='.$help.$conditions.'">'.$help.'</a></li>';
				echo'<li><a href="?p=changelog'.$conditions.'">Changelog</a></li>';
				?>
				</ul>
			</div>
		</div>
			
		<div id="shareButtons">
			<?php echo'<a href="https://twitter.com/intent/tweet?button_hashtag=MgNoobs&text="" class="twitter-hashtag-button" data-related="mgnmultistream" data-url="'.short('http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']).'">Tweet #MgNoobs</a>';?>
			<?php echo'<div class="g-plusone" data-size="medium" data-href="'.short("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']).'"></div>';?>
			<?php echo'<div class="fb-like" data-href="'.short("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']).'" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>';?>
		</div>
		
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
