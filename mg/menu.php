<div id="sse1">
	<div id="sses1">
		<ul>
		<?php 
		$conditions = '';
		if($lang != 'en'){$conditions=$conditions.'&lang='.$lang;}
		if($_GET['hitbox'] != null){$conditions=$conditions.'&hitbox='.$_GET['hitbox'];}
		if($_GET['twitch'] != null){$conditions=$conditions.'&twitch='.$_GET['twitch'];}
		if($_GET['team'] != null){$conditions=$conditions.'&team='.$_GET['team'];}
		if($_GET['suggestions'] != null){$conditions=$conditions.'&suggestions='.$_GET['suggestions'];}
		echo'<li><a href="?p='.$home.$conditions.'">'.$home.'</a></li>';
		echo'<li><a href="?p=mgnc">MgN Community</a></li>';
		echo'<li><a href="?p='.$streams.$conditions.'">'.$streams.'</a></li>';
		echo'<li><a href="?p='.$imprint.$conditions.'">'.$imprint.'</a></li>';
		echo'<li><a href="?p='.$help.$conditions.'">'.$help.'</a></li>';
		echo'<li><a href="?p=changelog'.$conditions.'">Changelog</a></li>';
		?>
		</ul>
	</div>
</div>