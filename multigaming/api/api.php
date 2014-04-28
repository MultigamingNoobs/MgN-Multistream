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
	function isOnline($mediaName)
	{
		$Media = new Media;
		if ($media = $Media->getMedia('live',$mediaName)) {
			$onlineStatus = ($media['media_is_live'] == 1) ? true : false;
			return $onlineStatus;
		}
	}
	function getAllStreams(){
		$teamMembers = array('marderlp','daruuna','nephtis','mindstalker','pixelkuchen','kater','tomme9020');
		$input= split(',',(strtolower($_REQUEST['streams'])));
		if($input[0] != ''){
			$arr = array_unique(array_merge($teamMembers,$input));
		}else{
			$arr = $teamMembers;
		}
		sort($arr);
		return $arr;
	}
	function getOnlineStreams(){
		$arr = getAllStreams();
		$ret = array();
		for($i=0;$i<count($arr);$i++){
			if(isOnline($arr[$i])){
				$ret[count($ret)] = $arr[$i];
			}
		}
		return $ret;
	}
	
	function getRooms($online){
		//create list of chatroom
		$rooms = "#liveroom";
		for($i=0;$i<count($online);$i++){
			$rooms = $rooms.",#".$online[$i];
		}
		return $rooms = strtolower($rooms);
	}
	function makeList($inp){
		$t='';
		if(count($inp) > 0){
			$t='?streams='.$inp[0];
			for($i=1;$i<count($inp);$i++){
				$t = $t . ',' .$inp[$i];
			}
		}
		return $t;
	}
?>