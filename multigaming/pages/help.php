<link href="../css/changes.css" type="text/css" rel="stylesheet">
<ul id="changes">
	<li>Die Hilfe - Inhalt
		<ul>
			<li>Die Idee</li>
			<li>Das Team</li>
			<li>Der Chat</li>
			<li>Streams</li>
			<li>Adresszeilenkomandos</li>
		</ul>
	</li>
	<hr>
	<br>
	<li>Die Idee
		<ul>
			<li><p>Wir sind eine kleine Gruppe von Streamern, die miteinander zocken oder auch bei den anderen zuschauen.</p></li>
			<li><p>Um nun euch unsere Gruppe näher zu bringen gibt es hier jeden Stream zu sehen, ohne groß hin und her zu tabben. Wer online ist wird angezeigt, so einfach ist das!</p></li>
			<li><p>Natürlich ist es auch möglich weitere Streamer über diese Seite zu gucken, die nicht in unserer Gruppe sind. Dazu einfach den Abschnitt <b>Adresszeilenkomandos</b> lesen.</p></li>
		</ul>
	</li>
	<li>Das Team
		<ul>
			<li><p>Die Seite wird derzeit von MarderLP betreut und erstellt.</p></li>
			<li><p>Alle die bei diesem Projekt von <i>Gaming ohne Grenzen</i> und <i>Multi Gaming Noobs</i> dabei sind, sind im Kopfbereich durch ein kleines PNG vertreten. Dort könnt ihr ein paar Informationen über den Kanal einsehen und auch direkt zu diesem gelangen.</p></li>
		</ul>
	</li>
	<br>
	<li>Der Chat
		<ul>
			<li><p>In den IRC müsst ihr euch einfach mit eurem hitbox Account einloggen, d.h. mit eurem dortigen Benutzernamen und Passwort.<p></li>
			<li><p>Wenn ein Stream online ist, wird der Hitbox Chat-Raum direkt beim Einloggen betreten. Dies funktioniert nicht, wenn die Streams separat aktualisiert werden, dann müsst ihr per IRC Command [/join stream] in den Chanel connecten.</p></li>
			<li><p>Du würdest gerne den Hitbox Chat nutzen, weil du IRC nicht magst, oder Glados nicht im Hitbox Chat des Streamers ist? Geb in die Adresszeile einfach debug=hitboxchat ein. Weitere Informationen und Beispiele dazu findest du unter <b>Adresszeilenkomandos</b></p></li>
		</ul>
	</li>
	<br>
	<li>Streams
		<ul>
			<li><p>Alle Streams die durch PNGs vertreten sind, werden angezeigt, wenn sie online sind.</p></li>
			<li><p>Um den die Streams zu aktualisieren kannst du auf <i>Streams refreshen</i> klicken. Wenn du sehen willst, ob sich ein online Status geändert hat, ohne vorher die Streams neu zu laden, kannst du auch auf <i>PNGs refreshen</i> klicken.</p></li>
		</ul>
	</li>
	<br>
	<li>Adresszeilenkomandos
		<ul>
			<li><p>Im Folgenden sind alle unterstützten Eingaben gelistet. Darauf folgen ein paar Beispiele.</p></li>
			<br>
			<li>debug
				<ul>
					<li><p>hitboxchat - zeigt den Hitboxchat zum Stream an</p></li>
					<li><p>offline - zeigt alle Streams an, auch wenn diese gerade nicht online sind.</p></li>
				</ul>
			</li>
			<li>streams
				<ul>
					<li><p>hier kann eine durch Kommata getrennte Liste an Streams angegeben werden, die zusätzlich angezeigt werden sollen. Duplikate werden ignoriert!</p></li>
				</ul>
			</li>
			<li>Beispiele
				<ul>
					<li><p>?streams=user,user1,user2 - Zeigt zusätzlich die Streams der Streamer user, user1 und user2 an.</p></li>
					<li><p>?streams=user&debug=offline - zeigt alle Streams an, sowie den des Streamer user.</p></li>
					<li><p>?streams=user&debug=hitboxchat - zeigt Streams an, sofern diese online sind. Außerdem wird der Hitbox Chat des Streams angezeigt.</p></li>
					<li><p>?streams=user,user2&debug=hitboxchat,offline - Die Reihenfolge ist egal, wichtig ist, dass am Anfang der Eingabe einmal ein <i>?</i> steht und die verschiedenen Parameter durch ein und verbunden sind.</p></li>
				</ul>
			</li>
		</ul>
	</li>
</ul>