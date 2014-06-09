<?php
	class Media {
		//default api endpoint
		const apiUrl = 'http://api.hitbox.tv/';
		private function apiCall($resource,$options=array()) {
			$ctx = stream_context_create(array('http' => array('timeout' => 5)));
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
	function isOnlineHitbox($mediaName)
	{
		$Media = new Media;
		if ($media = $Media->getMedia('live',$mediaName)) {
			$onlineStatus = ($media['media_is_live'] == 1) ? true : false;
			return $onlineStatus;
		}
	}
	function getAllHitboxStreams(){
		$teamMembersHitbox = array('marderlp','daruuna','nephtis','mindstalker','pixelkuchen','kater','tomme9020','b3rz3rk3r','kurim');
		$input= split(',',(strtolower($_REQUEST['hitbox'])));
		if($input[0] != ''){
			$arr = array_unique(array_merge($teamMembersHitbox,$input));
		}else{
			$arr = $teamMembersHitbox;
		}
		sort($arr);
		return $arr;
	}
		function getOnlineHitboxStreams(){
		$arr = getAllHitboxStreams();
		$ret = array();
		for($i=0;$i<count($arr);$i++){
			if(isOnlineHitbox($arr[$i])){
				$ret[count($ret)] = $arr[$i];
			}
		}
		return $ret;
	}
	
	function getHitboxStreamString(){
		return makeList(getAllHitboxStreams());
	}
	
	function displayHitboxStream($stream,$site,$h){
		echo '<div id="stream_'.$site.'" style="height:'.$h.'%;">';
		echo '<iframe width=100% height=99% src="http://hitbox.tv/#!/embed/'.$stream.'" frameborder="0" seamless allowfullscreen></iframe>';
		echo '</div>';
	}
	function displayHitboxChat($stream,$h,$d){
		if($d){
			echo '<div id="stream_right" style="height:'.$h.'%;">';
		}else{
			echo '<div id="streamChat" style="height:'.$h.'%;">';
		}
		echo '<iframe class="ChatBox" id="Chat0" rel="0" width=100% height=100% src ="http://www.hitbox.tv/embedchat/' . $stream . '" frameborder="0" style="display: inline;"></iframe>';				
		echo '</div>';
		
	}
?>