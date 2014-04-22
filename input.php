<?php
	$test = $_SERVER['QUERY_STRING']; 
	$input = array();
	$b = "";
	//Umwandeln des Inputs zum Array $input
	for($a = 0; $a < strlen($test)+1; $a++)
	{
		if($test[$a]=="?" or $test[$a]=="")
		{
			$input[] = $b;
			$b = "";
		}else{
			$b .= $test[$a];
		}
	}
	//EMail	
	if($input[0]=="mail"){
		echo("mail to:".$input[1]."\ntopic:".$input[2]."\ntext:".$input[3]);
		mail($input[1],$input[2],$input[3]);
	}
	//Pfad einer Datei
	elseif($input[0]=="version"){
		$u = "";
		if($input[3] == "beta"){
			$u = "beta/";
		}elseif($input[2] == "beta"){
			$u = "beta/";
		}
		$path = "MCProgs/";
		if($input[1]=="mwood"){
			if($input[2]=="timer"){
				echo($path."MWood/timer/".$u."version\n");
			}elseif($input[2]=="turtle"){
				echo($path."MWood/turtle/".$u."version\n");
			}
		}elseif($input[1]=="hdownload"){
			echo($path."hdownload/hdownload.version");
		}elseif($input[1]=="farm"){
			echo($path."MFarm/MFarm/".$u."version");
		}
	}
	elseif($input[0]=="download"){
		$u = "";
		if($input[3] == "beta"){
			$u = "beta/";
		}elseif($input[2] == "beta"){
			$u = "beta/";
		}
		$path = "MCProgs/";
		echo($path."MAPI/installmapi\n");
		echo($path."MAPI/MAPI/inp\n");
		echo($path."MAPI/MAPI/mos\n");
		echo($path."MAPI/MAPI/out\n");
		echo($path."MAPI/MAPI/redM\n");
		echo($path."MAPI/MAPI/tile\n");
		echo($path."MAPI/MAPI/download\n");
		echo($path."MAPI/MAPI/printer\n");
		echo($path."MAPI/MAPI/perM\n");
		if($input[1]=="mwood"){
			if($input[2]=="timer"){
				echo($path."MWood/timer/".$u."startup\n");
				echo($path."MWood/timer/".$u."changelog\n");
			}elseif($input[2]=="turtle"){
				echo($path."MWood/turtle/".$u."startup\n");
				echo($path."MWood/turtle/".$u."changelog\n");
			}
		}elseif($input[1]=="hdownload"){
			echo($path."hdownload/hdownload");
		}
		elseif($input[1]=="dignow"){
			echo($path."dignow/dignow\n");
		}elseif($input[1]=="mfarm"){
			echo($path."MFarm/MFarm/".$u."startup\n");
			echo($path."MFarm/MFarm/".$u."changelog\n");
		}elseif($input[1]=="moswasser"){
			echo($path."MOsWasser/startup\n");
			echo($path."MOsWasser/Moswasser\n");
		}elseif($input[1]=="dig"){
			echo($path."dig/dig\n");
		}
	}
	else{
		for($a = 0; $a < sizeof($input);$a++)
		{
			$input[$a] = str_replace("%20"," ",$input[$a]);	
			echo $input[$a]."\n";
		}
	}
?>
