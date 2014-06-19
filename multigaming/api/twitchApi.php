<?php
	function isOnlineTwitch($stream){
		$array = json_decode(file_get_contents('https://api.twitch.tv/kraken/streams/'.$stream), true);
		if ($array['stream'] != null) {
			return true;
		}else{
			return false;
		}
	}
	function getTwitchStreamer(){
		$start = 0;
		$ret;
		$num = getTwitchFeatured();
		$max= ceil($num[0]/100);
		while($start < $max+1){
			$arr = json_decode(file_get_contents('https://api.twitch.tv/kraken/streams?limit=100&offset='.$start*100), true);
			for($i=0;$i<count($arr['streams']);$i++){
				$ret[] = $arr['streams'][$i]['channel']['name'];
			}
			$start++;
		}
		sort($ret);
		$ret = array_unique($ret);
		return $ret;
	}
	function getTwitchFeatured(){
		$arr = json_decode(file_get_contents('https://api.twitch.tv/kraken/games/top?limit=10&offset=0'), true);
		$ret[] = $arr['_total'];
		$s = '';
		$ii = 0;
		for($i=0;$i<count($arr['top']);$i++){
			$game = $arr['top'][$i]['game']['name'];
			if($ii <= 8){
				$s = $s . $game . ', ';
				$ii++;
			}elseif($ii == 9){
				$s = $s . $game;
				$ii++;
			}
		}
		$ret[] = $s;
		return $ret;
		
	}
	function getTwitchGame($stream){
		$array = json_decode(file_get_contents('https://api.twitch.tv/kraken/streams/'.$stream), true);
		if ($array['stream'] != null) {
			return $array['stream']['game'];
		}
	}
	function getAllTwitchStreams($team_bol,$sug_bol){
		$teamMembersTwitch = array('marderlp','tomme9020');
		$sugestionsTwitch = array('mindstalker85');
		$input= split(',',(strtolower($_REQUEST['twitch'])));
		if($team_bol != true){
			$input = array_merge($teamMembersTwitch,$input);
		}
		if($sug_bol != true){
			$input = array_merge($sugestionsTwitch,$input);
		}
		$input = array_unique($input);
		sort($input);
		return $input;
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
		echo '<iframe frameborder="0" scrolling="no" id="chat_embed" src="http://twitch.tv/chat/embed?channel='.$stream.'&amp;popout_chat=true" height="100%" width="100%"></iframe>';
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
		<param  name="allowNetworking"  value="false" />
		<param  name="movie" value="http://www.twitch.tv/widgets/live_embed_player.swf" />
		<param  name="flashvars"  value="hostname=www.twitch.tv&channel='.$stream.'&auto_play=true&start_volume=25" />
		</object>';
		echo '</div>';
	}
	
	
	
?>