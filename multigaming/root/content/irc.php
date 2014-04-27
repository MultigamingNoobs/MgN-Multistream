<?php
	function echoIRC($rooms){
		echo '<div id="chat">';
			//displays irc login
			echo '<iframe src="https://kiwiirc.com/client/IRC.glados.tv/?nick=hitboxuser?&theme=basic'.$rooms.'" style="border:0; width:100%; height:100%;"></iframe>';
		echo '</div>';
	}
	function getRooms($online){
		//create list of chatroom
		$rooms = "#liveroom";
		for($i=0;$i<count($online);$i++){
			$rooms = $rooms.",#".$online[$i];
		}
		return $rooms = strtolower($rooms);
	}
?>