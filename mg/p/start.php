<?php echo '<i style="padding-left:10px;"> MgN Multistream '.$v."</i>";?>

<span id="left">
	<fieldset class="upper">
		<b>Add new Streams</b>
	</fieldset>
	<form action="action_page.php">
		<fieldset class="center">
			<input type="radio" name="platform" id="hitbox" value="hitbox" checked></input><label for="hitbox">Hitbox</label>
			<input type="radio" name="platform" id="twitch" value="twitch"></input><label for="twitch">Twitch</label>
			<br><br>
			<input type="radio" name="type" id="normal" value="normal" checked></input><label for="normal">Normal</label>
			<input type="radio" name="type" id="chatonly" value="chatonly"></input><label for="chatonly">Chat only</label>
			<br><br>
			<input type="text" name="channel" placeholder="Channel" class="fullwidth"></input>
			<br><br>
			<input type="search" name="search" placeholder="Search" class="fullwidth"></input>
			<br><br>
		</fieldset>
		<button type="submit" class="lower">ADD Stream</button>
	</form>
</span>

<span id="center">
	<fieldset class="upper">
		<b>Selected Streams</b>
	</fieldset>

	<fieldset class="center">
		<table id="middleTable"><tbody><tr><td><div id="box"><a href="http://www.hitbox.tv/mindstalker" target="_blank"><img src="http://edge.sf.hitbox.tv/static/img/channel/Mindstalker_53aaddb69b3c8_large.png" title="http://www.hitbox.tv/mindstalker" alt="mindstalker" style="height:35px; width:35px"></td><td><table id="innerTable"><tbody><tr><td>mindstalker</td></tr><tr><td>Mass Effect 2</td></tr></tbody></table></td></tr></tbody></table>
		<table id="middleTable"><tbody><tr><td><div id="box"><a href="http://www.hitbox.tv/kater" target="_blank"><img src="http://edge.sf.hitbox.tv/static/img/channel/Kater_5342bc50b8c05_large.png" title="http://www.hitbox.tv/kater" alt="kater" style="height:35px; width:35px"></a></div></td><td><table id="innerTable"><tbody><tr><td>kater</td></tr><tr><td>Final Fantasy XIV Online: A Realm Reborn</td></tr></tbody></table></td></tr></tbody></table>
	</fieldset>
	<button type="submit" class="lower">Start viewing</button>
</span>
		
<a id="right" class="twitter-timeline" href="https://twitter.com/supportmgn" data-widget-id="476331465957863426">Tweets von @supportmgn</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		
		
<!--		
<div id="left">
	<?php	
		echo '<form action="http://'.$_SERVER['SERVER_NAME'].$_SERVER[REQUEST_URI].'" method="get">';
	?>	
		<fieldset>
			<?php 
				echo '<legend>'.$launch.'</legend>';
				echo '<button type ="reset">'.$reset.'</button>';
				echo '<button type ="submit" style="margin:0px 10px;">'.$submit.'</button>';
			?>
		</fieldset>
		<fieldset>
			<?php echo '<legend>'.$settings.'</legend>';?>
			<p>	
				<?php echo '<label>'.$streamPage.'</label>';?>	
				<input list="p" size="10" name="p" value="Streams" required>
				<datalist id="p">
					<?php
						echo '<option value="'.$streams.'">';
					?>	
				</datalist>	
			</p><p>	
				<?php echo '<label>'.$setLang.'</label>';?>
					<input list="lang" size="10" name="lang" value="EN" required>
					<datalist id="lang">
					<option value="EN">
					<option value="DE">	
				</datalist>	
			</p><p>	
				<?php echo '<label>'.$mgnStreams.'</label>';?>	
				<input type = "checkbox" name="team" id = "team"/>	
			</p><p>
				<?php echo '<label>'.$suggestedStreams.'</label>';?>	
				<input type = "checkbox" name="suggestions" id = "suggestions"/>
			</p>
		</fieldset>
		<fieldset>
			<legend>Twitch</legend>
			
				<?php echo '<input id="search" type="search" pattern="{3}" title="'.$threeSigns.'" onkeyup="showTwitchResult(this.value)" placeholder="'.$twitchSearch.'">' ;?>
					<p></p>
					<div id="twitchSearch" style="width=50%">
					</div>
					<br>					
				<?php echo '<textarea name="twitch" rows="5" id="twitch" placeholder="'.$dnd.'"></textarea>' ;?>
			
		</fieldset>	
		<fieldset>
			<legend>Hitbox</legend>
			
				<?php echo '<input id="search" type="search" pattern="{3}" title="'.$threeSigns.'" onkeyup="showHitboxResult(this.value)" placeholder="'.$hitboxSearch.'">' ;?>
				<p></p>
				<div id="hitboxSearch" style="width=50%">
				</div>
				<br>
				<?php echo '<textarea rows="5" name="hitbox" id="hitbox" placeholder="'.$dnd.'"></textarea>' ;?>
			
		</fieldset>	
		<fieldset>
			<?php 
				echo '<legend>'.$launch.'</legend>';
				echo '<button type ="reset">'.$reset.'</button>';
				echo '<button type ="submit" style="margin:0px 10px;">'.$submit.'</button>';
			?>
		</fieldset>
	</form>
</div>
<div id="center">
	<fieldset>			
		<?php echo '<legend>'.$qickHelp.'</legend>';
		echo '<video controls><source src="mg/pictures/quickhelp.mp4" type="video/mp4";>Your browser does not support the video tag.</video>';
		echo '<p>'.$qickHelpText.'</p>';?>
	</fieldset>
	<fieldset>		
		<?php
			echo '<legend>'.$hitboxStatistics.'</legend>';
			$arr = getHitboxFeatured();
			echo "<p>".$arr[0].' Streams online playing '.$arr[1].' Games with '.$arr[2].' viewer.</p><p> The top 10 Games are: '.$arr[3]."</p>";
		?>
	</fieldset>	
	<fieldset>		
		<?php
			echo '<legend>'.$twitchStatistics.'</legend>';		
			$arr = getTwitchFeatured();		
			echo "<p>".$arr[0].' Streams online.</p><p> The top 10 Games are: '.$arr[1]."</p>";			
		?>	
	</fieldset>	
		<div class="ct-chart ct-perfect-fourth"></div>			
	</fieldset>		
</div>	<div id="right">	
	<fieldset>		
		<legend>Social</legend>	
		<?php include 'mg/p/communities.php';?>
		<fieldset>		
			<legend>Twitter</legend>		
			<a class="twitter-timeline" href="https://twitter.com/supportmgn" data-widget-id="476331465957863426">Tweets von @supportmgn</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</fieldset>
	</fieldset>
	
</div>
/-->
