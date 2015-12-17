<?php
	function httpsPost($postData)
	{
		$curlObj = curl_init();
		 
		$jsonData = json_encode($postData);
		 
		curl_setopt($curlObj, CURLOPT_URL, 'https://www.googleapis.com/urlshortener/v1/url');
		curl_setopt($curlObj, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curlObj, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($curlObj, CURLOPT_HEADER, 0);
		curl_setopt($curlObj, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
		curl_setopt($curlObj, CURLOPT_POST, 1);
		curl_setopt($curlObj, CURLOPT_POSTFIELDS, $jsonData);
		 
		$response = curl_exec($curlObj);
		 
		//change the response json string to object
		$json = json_decode($response);
		curl_close($curlObj);
		 
		return $json;
	}
	
	/*
	@$longUrl is the url to make short
	*/
	function short($longUrl){
		$longUrl = urlencode(urlencode);
		$apiKey = 'AIzaSyC4l_st7BEMhaeZhvofhwsHmUoVUHsxco4';
		$postData = array('longUrl' => $longUrl, 'key' => $apiKey);
		$info = httpsPost($postData);
		if($info != null)
		{
			return $info->id;
		}				
	}
?>