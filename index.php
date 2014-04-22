<!DOCTYPE html>
<html lang="de">
	<head>
		<link href="multigaming/css/design.css" type="text/css" rel="stylesheet">
		
		<?php
			include 'multigaming/api/media.php';
			include 'multigaming/api/streams.php';
			include 'multigaming/content.php';
			include 'multigaming/head.php';
			include 'multigaming/footer.php';
		?>
		<title>MultiGaming</title>
	</head>
	<body>
	<div id="root">
			<?php
				include 'multigaming/menu.php';
				$all = getArr();
				$online = getOnlineStreams($all);
				echoHead($all); 
				
				$beta= split(',',(strtolower($_GET['beta'])));
				if($beta[0] == "offline"){
					echoContent($all);
				}else{
					echoContent($online);
				}
				//echoFooter(); 
			?>
		</div>
	 </body>
</html>







