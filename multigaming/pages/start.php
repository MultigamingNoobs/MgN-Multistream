<div id="content">
	<div id="left">
		<?php	echo '<form action="http://'.$_SERVER['SERVER_NAME'].$_SERVER[REQUEST_URI].'" method="get">';?>	
			<fieldset>
				<?php 
					echo '<legend>'.$launch.'</legend>';
					echo '<button type ="reset">'.$reset.'</button>';
					echo '<button type ="submit" style="margin:0px 10px;">'.$submit.'</button>';
				?>
			</fieldset>
			<fieldset>
				<legend>Twitch</legend>
				
					<?php echo '<input type="search" size="30" onkeyup="showTwitchResult(this.value)" placeholder="'.$twitchSearch.'">' ;?>
						<p></p>
						<div id="twitchSearch" style="width=50%">
						</div>
						<br>					
					<?php echo '<textarea name="twitch" rows="5" cols="30" id="twitch" placeholder="'.$dnd.'"></textarea>' ;?>
				
			</fieldset>	
			<fieldset>
				<legend>Hitbox</legend>
				
					<?php echo '<input type="search" size="30" onkeyup="showHitboxResult(this.value)" placeholder="'.$hitboxSearch.'">' ;?>
					<p></p>
					<div id="hitboxSearch" style="width=50%">
					</div>
					<br>
					<?php echo '<textarea rows="5" cols="30" name="hitbox" id="hitbox" placeholder="'.$dnd.'"></textarea>' ;?>
				
			</fieldset>
			<fieldset>
				<?php echo '<legend>'.$settings.'</legend>';?>
				<p>	
					<?php echo '<label>'.$setLang.'</label>';?>
						<input list="lang" size="30" name="lang" value="English" required>
						<datalist id="lang">
						<option value="English">
						<option value="German">	
					</datalist>	
				</p>	
				<p>	
					<?php echo '<label>'.$home.'</label>';?>	
					<input list="tab" size="30" name="tab" value="Streams" required>
					<datalist id="tab">
						<?php
							echo '<option value="'.$home.'">';	
							echo '<option value="MgN">';
							echo '<option value="'.$streams.'">';
							echo '<option value="'.$imprint.'">';
							echo '<option value="'.$contact.'">';
							echo '<option value="'.$help.'">';
						?>	
					<option value="Changelog">
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
				<a href="https://plus.google.com/u/0/communities/110109481253283166036" target="_blank"><img src="multigaming/pictures/g+.png"></img></a>
				<a href="http://steamcommunity.com/groups/multinoobs" target="_blank"><img src="multigaming/pictures/steam.png"></img></a>
			</fieldset>
			<fieldset>		
				<legend>Twitter</legend>		
				<?php	include 'multigaming/pages/twitter.php';?>	
			</fieldset>
		</fieldset>
		
	</div>
</div>