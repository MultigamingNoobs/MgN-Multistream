<!DOCTYPE html>
<html lang="de">
<html>
	<head>
		<?php
			include 'http://www.marderlp.hol.es/multigaming/api/media.php';
			include 'http://www.marderlp.hol.es/multigaming/api/streams.php';
			
		?>
	</head>
	<body>
		test
		<?php
			$all = getArr();
			echo '$all:';
			echo count($all);
			echo ' $online:';
			echo count($online);
			for($i=0;$i<count($all);$i++){ 
				echo '<a href="http://www.hitbox.tv/'.$all[$i].'" target="_blank"><img src="http://www.kazuto.de/hitbox/'.$all[$i].'.png" /></a>';
			}
		?>
		bla
	</body>
</html>