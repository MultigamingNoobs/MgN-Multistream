<?php
	function echoPngs($arr){
		echo '<div id="pngs">';
			for($i=0;$i<count($arr);$i++){ 
				echo '<a href="http://www.hitbox.tv/'.$arr[$i].'" target="_blank"><img src="http://www.kazuto.de/hitbox/'.$arr[$i].'.png" /></a>';
			}
		echo '</div>';
	}
	function echoUpperright(){
		echo '<div id="upperright">';
			echo 'IRC-Login mit hitbox <i>Benutzernamen</i> und <i>Passwort</i>.';
		echo '</div>';
	}
	function echoHead($arr){
		echo '<div id="head">';
			echoPngs($arr);
			echoUpperright();
		echo '</div>';
	}
?>