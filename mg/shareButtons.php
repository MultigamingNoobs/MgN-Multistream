<div id="shareButtons">
	<?php
		echo '<a href="https://twitter.com/share" class="twitter-share-button" data-url="" data-text=" '.short($_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']).'" data-via="MarderLP" data-hashtags="MgNoobs">Tweet</a>';
		//echo'<a href="https://twitter.com/intent/tweet?button_hashtag=MgNoobs&text="'.'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'].'" class="twitter-hashtag-button" data-related="mgnmultistream" data-url="">Tweet #MgNoobs</a>';
		echo'<div class="g-plusone" data-size="medium" data-href="'.short("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']).'"></div>';
		echo'<div class="fb-like" data-href="'.short(urlencode("http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'])).'" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>';
	?>
</div>