<?php $t = '"';
	if(strtolower($tab[0])=='start' or strtolower($tab[0])=='home'){$t = ' tabbertabdefault"';}
		echo '<div class="tabbertab'.$t.'>';
		echo '<h2>'.$home.'</h2>';
		include 'pages/start.php';
		echo '</div>';
		$t = '"';
	if(strtolower($tab[0])=='mgn'){$t = ' tabbertabdefault"';}
		echo '<div class="tabbertab'.$t.'>';
		echo '<h2>MgN</h2>';
		//include 'pages/streams.php';
		echo '</div>';
		$t = '"';
	if(strtolower($tab[0])=='streams'){$t = ' tabbertabdefault"';}
		echo '<div class="tabbertab'.$t.'>';
		echo '<h2>'.$streams.'</h2>';
		include 'pages/streams.php';
		echo '</div>';
		$t = '"';
	if(strtolower($tab[0])=='impressum' or strtolower($tab[0])=='imprint'){$t = ' tabbertabdefault"';}
		$imp = 'imprint';
		if($lang == 'german'){$imp = 'impressum';}
		echo '<div class="tabbertab'.$t.'>';
		echo '<h2>'.$imprint.'</h2>';
		include 'pages/'.$imp.'.php';
		echo '</div>';
		$t = '"';
	if(strtolower($tab[0])=='kontakt' or strtolower($tab[0])=='contact'){$t = ' tabbertabdefault"';}
		echo '<div class="tabbertab'.$t.'>';
		echo '<h2>'.$contact.'</h2>';
		include 'pages/contact.php';
		echo '</div>';
		$t = '"';		
	if(strtolower($tab[0])=='hilfe' or strtolower($tab[0])=='help'){$t = ' tabbertabdefault"';}
		echo '<div class="tabbertab'.$t.'>';
		echo '<h2>'.$help.'</h2>';
		include 'pages/help.php';
		echo '</div>';
		$t = '"';		
	if(strtolower($tab[0])=='changelog'){$t = ' tabbertabdefault"';}
		echo '<div class="tabbertab'.$t.'>';
		echo '<h2>Changelog '.$v.'</h2>';
		include 'pages/changelog.php';
		echo '</div>';
		$t = '"';
?>