<!DOCTYPE html>
<html lang="de">
	<head>
	<link href="https://plus.google.com/110796119525259959832" rel="publisher" />
		<link href="multigaming/css/design.css" type="text/css" rel="stylesheet">
		<script src="multigaming/pace/pace.js"></script>
		<script>
			function showHitboxResult(str) {
				if (str.length==0) { 
					document.getElementById("hitboxSearch").innerHTML="";
					document.getElementById("hitboxSearch").style.border="0px";
					return;
				}
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
				xmlhttp.open("GET","multigaming/search/hitboxSearch.php?q="+str,true);
				xmlhttp.send();
			}
			function showTwitchResult(str) {
				if (str.length==0) { 
					document.getElementById("twitchSearch").innerHTML="";
					document.getElementById("twitchSearch").style.border="0px";
					return;
				}
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
				xmlhttp.open("GET","multigaming/search/twitchSearch.php?q="+str,true);
				xmlhttp.send();
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
		<link href="multigaming/pace/pace.css" rel="stylesheet" />
		<script language="JavaScript" type="text/javascript" src="multigaming/tabber/tabber.js"></script>
		<link rel="stylesheet" href="multigaming/tabber/example.css" TYPE="text/css" MEDIA="screen">
		<script type="text/javascript">
			document.write('<style type="text/css">.tabber{display:none;}<\/style>');
		</script>		
		<?php
			$v = "v.0.5.1";
			include 'multigaming/api/hitboxApi.php';
			include 'multigaming/api/twitchApi.php';
			include 'multigaming/api/streamApi.php';
			include_once("multigaming/analyticstracking.php");
			$team = $_GET['team'];
			if($team=='on'){$team = false;
			}else{$team = true;}
			$hitbox = getAllHitboxStreams($team);
			$twitch = getAllTwitchStreams($team);
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







