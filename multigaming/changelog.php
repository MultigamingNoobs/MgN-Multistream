<!DOCTYPE html>
<html lang="de">
	<head>
		<link href="multigaming/css/design.css" type="text/css" rel="stylesheet">
		<?php
			include 'api/media.php';
			include 'api/streams.php';
			include 'head.php';
		?>
		<title>MultiGaming|Changelog</title>
	</head>
	<body>
		<div id="root">
			<?php
				include 'menu.php';
				$all = getArr();
				echoHead($all); 
				echo '<div id="content" style="width:75%;">';
					include '../multigaming/pages/changes.php';
				echo '</div>';
			?>
		</div>
	 </body>
</html>







