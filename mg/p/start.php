<?php echo '<i style="position:absolute;top:5px;"> MgN Multistream '.$v."</i>";?>
<div id="left">
	<?php	
		include 'mg/api/hitboxApi.php';
		include 'mg/api/twitchApi.php';
		echo '<form action="http://'.$_SERVER['SERVER_NAME'].$_SERVER[REQUEST_URI].'" method="get">';?>	
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
						echo '<option value="MgN">';
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
			
				<?php echo '<input id="search" type="search" onkeyup="showTwitchResult(this.value)" placeholder="'.$twitchSearch.'">' ;?>
					<p></p>
					<div id="twitchSearch" style="width=50%">
					</div>
					<br>					
				<?php echo '<textarea name="twitch" rows="5" id="twitch" placeholder="'.$dnd.'"></textarea>' ;?>
			
		</fieldset>	
		<fieldset>
			<legend>Hitbox</legend>
			
				<?php echo '<input id="search" type="search" onkeyup="showHitboxResult(this.value)" placeholder="'.$hitboxSearch.'">' ;?>
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
</div>	<div id="right">	
	<fieldset>		
		<legend>Social</legend>	
		<fieldset>		
			<legend>MgN Communities</legend>	
			<a href="http://steamcommunity.com/groups/multinoobs" target="_blank"><img width="100%" src="mg/pictures/steam.png"></img></a>
			<a href="https://plus.google.com/u/0/communities/110109481253283166036" target="_blank"><img width="49%" src="mg/pictures/g+.png"></img></a>
			<a href="https://twitter.com/mgnmultistream" target="_blank"><img width="49%" src="mg/pictures/twitter.png"></img></a>
		</fieldset>
		<fieldset>		
			<legend>Twitter</legend>		
			<a class="twitter-timeline" href="https://twitter.com/supportmgn" data-widget-id="476331465957863426">Tweets von @supportmgn</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</fieldset>
	</fieldset>
	
</div>