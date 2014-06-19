<?php
	$hitbox = $_GET['hitbox'], ENT_QUOTES;
	$twitch = $_GET['twitch'], ENT_QUOTES;
	$p = '../../';
	include $p.'api/hitboxApi.php';
	include $p.'api/twitchApi.php';
	
	function createPNG($stream){
		header ("Content-type: image/png");
		$fontfile = "font.TTF";
		 
		$arr = hitboxRequest('media/live/',$stream);
		$getImage = $arr['livestream'][0]['channel']['user_logo_small'];
		$getFollower = $arr['livestream'][0]['channel']['followers'];
		$getViewer = $arr['livestream'][0]['channel']['livestream_count'];
		$imageURL = "http://edge.vie.hitbox.tv/$getImage";
		$image = "user/".$channelName.".png";
		file_put_contents($image, file_get_contents($imageURL));
		$loadImage = Imagick::readImage("user/".$channelName.".png");
		 
		if ($arr['livestream'][0]['media_is_live'] == 1) {
			$im = @ImageCreate (300, 64)
				  or die ("Kann keinen neuen GD-Bild-Stream erzeugen");
			$background_color = ImageColorAllocate ($im, 247, 247, 247);
			$text_color = ImageColorAllocate ($im, 71, 71, 71);
			$name_color = ImageColorAllocate ($im, 171, 213, 47);
			ImageTTFText ($im, 13, 0, 60, 20, $name_color, $fontfile, $channelName);
			ImageTTFText ($im, 10, 0, 60, 38, $text_color, $fontfile, "Online");
			ImageTTFText ($im, 10, 0, 110, 38, $text_color, $fontfile, "Viewer: $getViewer");
			ImageTTFText ($im, 10, 0, 60, 56, $text_color, $fontfile, "Follower: $getFollower");
			ImagePNG ($im);
		} else {
			$im = @ImageCreate (300, 64)
				  or die ("Kann keinen neuen GD-Bild-Stream erzeugen");
			$background_color = ImageColorAllocate ($im, 247, 247, 247);
			$text_color = ImageColorAllocate ($im, 71, 71, 71);
			$name_color = ImageColorAllocate ($im, 171, 213, 47);
			ImageTTFText ($im, 13, 0, 60, 20, $name_color, $fontfile, $channelName);
			ImageTTFText ($im, 10, 0, 60, 38, $text_color, $fontfile, "Offline");
			ImageTTFText ($im, 10, 0, 60, 56, $text_color, $fontfile, "Follower: $getFollower");
			ImagePNG ($im);
		}
	}
	if($hitbox <> null and $hitbox <> ''){
		createPNG($hitbox);
	}elseif($twitch <> null and $twitch <> ''){
		createPNG($twitch);
	}
	echo("bla");
?>