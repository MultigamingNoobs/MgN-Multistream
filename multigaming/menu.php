<link href="multigaming/css/menu.css" type="text/css" rel="stylesheet">
<?php $t = '"'; ?>
<?php 	if(strtolower($tab[0])=='start'){$t = ' tabbertabdefault"';}
		echo '<div class="tabbertab'.$t.'>';
		echo '<h2>Start</h2>';
		include 'pages/start.php';
		echo '</div>';
		$t = '"';
		?>
<?php 	if(strtolower($tab[0])=='streams'){$t = ' tabbertabdefault"';}
		echo '<div class="tabbertab'.$t.'>';
		echo '<h2>Streams</h2>';
		include 'pages/streams.php';
		echo '</div>';
		$t = '"';
?>
<?php 	if(strtolower($tab[0])=='impressum'){$t = ' tabbertabdefault"';}
		echo '<div class="tabbertab'.$t.'>';
		echo '<h2>Impressum</h2>';
		include 'pages/impressum.php';
		echo '</div>';
		$t = '"';
?>
<?php 	if(strtolower($tab[0])=='kontakt'){$t = ' tabbertabdefault"';}
		echo '<div class="tabbertab'.$t.'>';
		echo '<h2>Kontakt</h2>';
		include 'pages/contact.php';
		echo '</div>';
		$t = '"';		
?>
<?php 	if(strtolower($tab[0])=='hilfe'){$t = ' tabbertabdefault"';}
		echo '<div class="tabbertab'.$t.'>';
		echo '<h2>Hilfe</h2>';
		include 'pages/help.php';
		echo '</div>';
		$t = '"';		
?>
<?php 	if(strtolower($tab[0])=='changelog'){$t = ' tabbertabdefault"';}
		echo '<div class="tabbertab'.$t.'>';
		echo '<h2>Changelog '.$v.'</h2>';
		include 'pages/changelog.php';
		echo '</div>';
		$t = '"';
?>