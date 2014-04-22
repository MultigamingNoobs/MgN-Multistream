<?
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
		$onlineStatus = ($media['media_is_live'] == 1) ? 'online' : 'offline';
		return $onlineStatus;
	}
}
function createDropDown($arr){
	echo 'Select chat: ';
	echo '<form><action="index.php" method="post" onsubmit="refresh()">';
	echo '	<select name="menu" onChange="location=document.jump.menu.options[document.jump.menu.selectedIndex].value;" value="GO">';
			echo '<option value="irc">LIVE IRC</option>';
			for($i=0;$i<count($arr);$i++){
				echo '<option value="'.$arr[$i].'">'.$arr[$i].'</option>';
			}
	echo '	</select>';
	echo '<input type="submit" value="Refresh">';
	echo '</form>';
	
}
?>