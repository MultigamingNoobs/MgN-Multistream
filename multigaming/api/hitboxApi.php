<?php
	class Media {
		//default api endpoint
		const apiUrl = 'http://api.hitbox.tv/';
		private function apiCall($resource,$options=array()) {
			$ctx = stream_context_create(array('http' => array('timeout' => 3)));
			$query = (!empty($options)) ? '?'.http_build_query($options) : '';
			$apiUrl = self::apiUrl.$resource.$query;
			$this->request=$apiUrl;
			return ($response = json_decode(file_get_contents($apiUrl,0,$ctx),true)) ? $response : false;         
		}
	 
		public function getMedia($mediaType='live',$mediaName='list') {
			//get media object
			if ($media=self::apiCall('media/'.$mediaType."/".$mediaName,array('embed' => 'true'))) {
				return ($mediaName=='list') ? $media['livestream'] : $media['livestream'][0]; 
			}
			return false;
		}
	}
	
	function getHitboxStreamer(){
		$Media = new Media;
		$media = $Media->getMedia('live','list');
		$ret;
		for($i=0;$i<count($media);$i++){
			$ret[] = $media[$i]['media_user_name'];
		}
		sort($ret);
		return $ret;
	}
	function getHitboxFeatured(){
		$Media = new Media;
		$media = $Media->getMedia('games','list');
		$ret[] = count(getHitboxStreamer());
		$g = 0;
		$c = 0;
		$s = '';
		$ii = 0;
		for($i=0;$i<count($media);$i++){
			$arri = $media[$i];
			$game = $arri['category_name'];
			if($game != null and strpos(strtolower($s),strtolower($game)) === false){
				$g++;
				if($ii <= 8){
					$s = $s . $game . ', ';
					$ii++;
				}elseif($ii == 9){
					$s = $s . $game;
					$ii++;
				}
				$c = $c + intval($arri['category_viewers']);	
			}
			
		}
		$ret[] = $g;
		$ret[] = $c;
		$ret[] = $s;
		return $ret;
	}
	function isOnlineHitbox($stream){
		$Media = new Media;
		if ($media = $Media->getMedia('live',$stream)) {
			$onlineStatus = ($media['media_is_live'] == 1) ? true : false;
			return $onlineStatus;
		}
	}
	function getHitboxGame($stream){
		$Media = new Media;
		if ($media = $Media->getMedia('live',$stream)) {
			return $media['category_name'];
		}
	}
	function getAllHitboxStreams($team_bol,$sug_bol,$teamMembersHitbox,$suggestionsHitbox){
		$input= split(',',(strtolower($_REQUEST['hitbox'])));
		if($team_bol){
			$input = array_merge($teamMembersHitbox,$input);
		}
		if($sug_bol){
			$input = array_merge($suggestionsHitbox,$input);
		}
		$input = array_unique($input);
		sort($input);
		return $input;
	}
	function getOnlineHitboxStreams($arr){
		$ret = array();
		for($i=0;$i<count($arr);$i++){
			if(isOnlineHitbox($arr[$i])){
				$ret[] = $arr[$i];
			}
		}
		return $ret;
	}
	
	function getHitboxStreamString(){
		return makeList(getAllHitboxStreams());
	}
	
	function displayHitboxStream($stream,$site,$h){
		if($stream <> '' and $stream <> null){
			echo '<div id="stream_'.$site.'" style="height:'.$h.'%;">';
			echo '<iframe width=100% height=99% src="http://hitbox.tv/#!/embed/'.$stream.'" frameborder="0" seamless allowfullscreen></iframe>';
			echo '</div>';
		}
	}
	function displayHitboxChat($stream,$h){
		echo '<iframe class="ChatBox" id="Chat0" rel="0" width=100% height=100% src ="http://www.hitbox.tv/embedchat/' . $stream . '" frameborder="0" style="display: inline;"></iframe>';				
	}
?>