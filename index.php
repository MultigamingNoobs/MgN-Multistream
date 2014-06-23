<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="utf-8" />
		<?php
			$v = "v.0.6.3.1";	
			$lang = 'english';
			if($_GET['lang'] != null and $_GET['lang'] != ''){
				$lang = strtolower($_GET['lang']);
			}
			include 'multigaming/api/language/'.$lang.'.php';
		?>
		<link href="https://plus.google.com/110796119525259959832" rel="publisher" />
		<link href="multigaming/css/menu.css" type="text/css" rel="stylesheet">
		<link href="multigaming/css/start.css" type="text/css" rel="stylesheet">
		<link href="multigaming/css/sites.css" type="text/css" rel="stylesheet">
		<link href="multigaming/css/stream.css" type="text/css" rel="stylesheet">
		<link href="multigaming/api/tabber/example.css" TYPE="text/css" rel="stylesheet" MEDIA="screen">
		<script src="multigaming/api/pace/pace.js"></script>
		<script src="multigaming/api/jquery.js"></script>
		<script>
			function showHitboxResult(str) {
				if (str.length==0) { 
					document.getElementById("hitboxSearch").innerHTML="";
					document.getElementById("hitboxSearch").style.border="0px";
					return;
				}
				if(str.length < 3){
					document.getElementById("hitboxSearch").innerHTML="<p>Please enter 3 or more letters</p>";
					document.getElementById("hitboxSearch").style.border="1px solid #003300";
					return;
				}else {
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp=new XMLHttpRequest();
					} else {  // code for IE6, IE5
						xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange=function() {
						if (xmlhttp.readyState==4 && xmlhttp.status==200) {
							document.getElementById("hitboxSearch").innerHTML=xmlhttp.responseText;
							document.getElementById("hitboxSearch").style.border="1px solid #003300";
						}
					}
					xmlhttp.open("GET","multigaming/api/search/hitboxSearch.php?q="+str,true);
					xmlhttp.send();
				}
			}
			function showTwitchResult(str) {
				if (str.length==0) { 
					document.getElementById("twitchSearch").innerHTML="";
					document.getElementById("twitchSearch").style.border="0px";
					return;
				}
				if(str.length < 3){
					document.getElementById("twitchSearch").innerHTML="<p>Please enter 3 or more letters</p>";
					document.getElementById("twitchSearch").style.border="1px solid #003300";
					return;
				}else {
					if (window.XMLHttpRequest) {
						// code for IE7+, Firefox, Chrome, Opera, Safari
						xmlhttp=new XMLHttpRequest();
					} else {  // code for IE6, IE5
						xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
					xmlhttp.onreadystatechange=function() {
						if (xmlhttp.readyState==4 && xmlhttp.status==200) {
							document.getElementById("twitchSearch").innerHTML=xmlhttp.responseText;
							document.getElementById("twitchSearch").style.border="1px solid #003300";
						}
					}
					xmlhttp.open("GET","multigaming/api/search/twitchSearch.php?q="+str,true);
					xmlhttp.send();
				}
			}
			function allowDrop(ev) {
				ev.preventDefault();
			}
			function drag(ev) {
				ev.dataTransfer.setData("Text", ev.target.id);
			}
			function drop(ev) {
				ev.preventDefault();
				var data = ev.dataTransfer.getData("Text");
				ev.target.appendChild(document.getElementById(data));
			}
		</script>
		<link href="multigaming/api/pace/pace.css" rel="stylesheet" />
		<script type="text/javascript" src="multigaming/api/tabber/tabber.js"></script>
		<script type="text/javascript">
			document.write('<style type="text/css">.tabber{display:none;}<\/style>');
		</script>		
		<?php
			$teamMembersHitbox = array('marderlp','daruuna','nephtis','kater','tomme9020','b3rz3rk3r','kurim');
			$suggestionsHitbox = array('mindstalker','damakash');
			$teamMembersTwitch = array('marderlp','tomme9020','mgnkater');
			$sugestionsTwitch = array('mindstalker85');
			include 'multigaming/api/hitboxApi.php';
			include 'multigaming/api/twitchApi.php';
			include 'multigaming/api/streamApi.php';
			include_once("multigaming/analyticstracking.php");
			
			$team = $_GET['team'];
			$team_bol = true;
			if($team <> nil and $team == "on"){
				$team_bol = false;
			}
			$suggestions = $_GET['suggestions'];
			$suggestions_bol = true;
			if($suggestions <> nil and $suggestions == "on"){
				$suggestions_bol = false;
			}
			$hitbox = getAllHitboxStreams($team_bol,$suggestions_bol,$teamMembersHitbox,$suggestionsHitbox);
			$twitch = getAllTwitchStreams($team_bol,$suggestions_bol,$teamMembersTwitch,$sugestionsTwitch);
			$debug	= array_unique(split(',',$_GET['debug']));
			$tab	= array_unique(split(',',$_GET['tab']));
			$hitbox_online = getOnlineHitboxStreams($hitbox);
			$twitch_online = getOnlineTwitchStreams($twitch);

		?>
		<title>MgN-Multistream</title>
	</head>
	<body>
		<div class="tabber">
			<?php include 'multigaming/menu.php'; ?>
		</div>
	 </body>
</html>







