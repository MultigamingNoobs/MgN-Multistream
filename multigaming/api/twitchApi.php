<?php
	function isOnlineTwitch($stream)
	{
		$array = json_decode(file_get_contents('https://api.twitch.tv/kraken/streams/'.$stream), true);
		if ($array['stream'] != null) {
			return true;
		}else{
			return false;
		}
	}
	function getAllTwitchStreams(){
		$teamMembersTwitch = array('marderlp','mindstalker85','tomme9020','pixelkuchentv');
		$input= split(',',(strtolower($_REQUEST['twitch'])));
		if($input[0] != ''){
			$arr = array_unique(array_merge($teamMembersTwitch,$input));
		}else{
			$arr = $teamMembersTwitch;
		}
		sort($arr);
		return $arr;
	}
	function getOnlineTwitchStreams(){
		$arr = getAllTwitchStreams();
		$ret = array();
		for($i=0;$i<count($arr);$i++){
			if(isOnlineTwitch($arr[$i])){
				$ret[count($ret)] = $arr[$i];
			}
		}
		return $ret;
	}

	function getTwitchStreamString(){
		return  makeList(getAllTwitchStreams());
	}
	
	function displayTwitchStreamHTML5($stream,$site,$h){
		echo '<div id="stream_'.$site.'" style="height:'.$h.'%;">';
		echo '<iframe id="player" type="text/html" width=100% height=99%  src="http://www.twitch.tv/'.$stream.'/hls"  frameborder="0"></iframe>';
		echo '</div>';
	}
	function displayTwitchChat($stream,$h){
		echo '<div id="stream_right" style="height:'.$h.'%;">';
		echo '<iframe frameborder="0" scrolling="no" id="chat_embed" src="http://twitch.tv/chat/embed?channel='.$stream.'&amp;popout_chat=true" height="100%" width="100%"></iframe>';
		echo '</div>';
	}
	
	function displayTwitchStream($stream,$site,$h){
		echo '<div id="stream_'.$site.'" style="height:'.$h.'%;">';
		echo '<object type="application/x-shockwave-flash" 
        height="100%" width="100%" 
        id="live_embed_player_flash" 
        data="http://www.twitch.tv/widgets/live_embed_player.swf?channel='.$stream.'" 
        bgcolor="#000000">
		<param  name="allowFullScreen" value="true" />
		<param  name="allowScriptAccess" value="always" />
		<param  name="allowNetworking"  value="all" />
		<param  name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" />
		<param  name="flashvars"  value="hostname=www.twitch.tv&channel='.$stream.'&auto_play=true&start_volume=25" />
		</object>';
		echo '</div>';
	}
	
	
	
?>