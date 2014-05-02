<link href="multigaming/css/menu.css" type="text/css" rel="stylesheet">
<div id="menu">
	<ul id="menu">
		<li><a href=<?php echo getStreamString() . '"';?> target="content" title="Zeigt Streams an, die online sind">Startseite</a></li>
		<li><a href=<?php echo '"multigaming/root/head/pngs.php?streams=' . makeList(getAllStreams()).'"';?> target="pngs" title="Lädt die PNGs neu, nur die PNGs">PNG refresh</a></li>
		<li><a href="http://marderlp.blogspot.de/p/impressum.html" target="content" title="Impressum">Impressum</a></li>
		<li><a href="mailto:marder001@gmail.com" title="Öffnet dein standart Mail Programm">Kontakt</a></li>
		<li><a href="multigaming/pages/help.php" target="content" title="Zeigt die Hilfe">Hilfe</a></li> 
		<li><a href="multigaming/pages/changelog.php" target="content" title="Zeigt Veränderungen an der Seite">Changelog</a></li>
		<li>MultiGaming by MarderLP</li>
		<li><?php echo $v; ?></li>
	</ul>
</div>
