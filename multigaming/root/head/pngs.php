<!DOCTYPE html>
<html lang="de">
	<body>
		<?php
			//$teamMembers = array('marderlp','daruuna','nephtis','mindstalker','pixelkuchen','kater','tomme9020');
			$all = array_unique(split(',',$_GET['streams']));
			for($i=0;$i<count($all);$i++){ 
				echo '<a href="http://www.hitbox.tv/'.$all[$i].' title="Öffnet hitbox.tv/'.$all[$i].'" target="_blank"><img src="http://www.kazuto.de/hitbox/'.$all[$i].'.png" /></a>';
			}
		?>
	</body>
</html>