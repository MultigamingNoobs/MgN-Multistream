<?php
	echo '<a href="multigaming/root/head/pngs.php?streams='.makeList(getAllStreams()).'" target="pngs" title="Lädt die PNGs neu, nur die PNGs">PNGs refreshen</a>';
	echo '<br>';
	echo '<a href='.getStreamString().' target="content" title="Selber Effekt wie bei Startseite">Streams refreshen</a>';
?>