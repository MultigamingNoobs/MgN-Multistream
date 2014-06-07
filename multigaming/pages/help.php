<link href="../css/sites.css" type="text/css" rel="stylesheet">
<ul id="sites">
	<li><b>Die Hilfe - Inhalt</b>
		<ul>
			<li>Die Idee</li>
			<li>Das Team</li>
			<li>Der Chat</li>
			<li>Streams</li>
			<li>Adresszeilenkomandos</li>
		</ul>
	</li>
	<br>
	<hr>
	<br>
	<li><b>Die Idee</b>
		<ul>
			<li>Wir sind eine kleine Gruppe von Streamern, die miteinander zocken oder auch bei den anderen zuschauen.</li>
			<li>Um nun euch unsere Gruppe n&auml;her zu bringen gibt es hier jeden Stream zu sehen, ohne gro&szlig; hin und her zu tabben. Wer online ist wird angezeigt, so einfach ist das!</li>
			<li>Nat&uuml;rlich ist es auch m&ouml;glich weitere Streamer &uuml;ber diese Seite zu gucken, die nicht in unserer Gruppe sind. Dazu einfach den Abschnitt <b>Adresszeilenkomandos</b> lesen.</li>
		</ul>
	</li>
	<br>
	<li><b>Das Team</b>
		<ul>
			<li>Die Seite wird derzeit von MarderLP betreut und erstellt.</li>
			<li>Alle die bei diesem Projekt von <i>Gaming ohne Grenzen</i> und <i>Multi Gaming Noobs</i> dabei sind, sind im Kopfbereich durch ein kleines PNG vertreten. Dort k&ouml;nnt ihr ein paar Informationen &uuml;ber den Kanal einsehen und auch direkt zu diesem gelangen.</li>
		</ul>
	</li>
	<br>
	<li><b>Der Chat</b>
		<ul>
			<li>In den IRC m&uuml;sst ihr euch einfach mit eurem hitbox Account einloggen, d.h. mit eurem dortigen Benutzernamen und Passwort.</li>
			<li>Wenn ein Stream online ist, wird der Hitbox Chat-Raum direkt beim Einloggen betreten. Dies funktioniert nicht, wenn die Streams separat aktualisiert werden, dann m&uuml;sst ihr per IRC Command [/join stream] in den Chanel connecten.</li>
			<li>Du w&uuml;rdest gerne den Hitbox Chat nutzen, weil du IRC nicht magst, oder Glados nicht im Hitbox Chat des Streamers ist? Geb in die Adresszeile einfach debug=hitboxchat ein. Weitere Informationen und Beispiele dazu findest du unter <b>Adresszeilenkomandos</b></li>
		</ul>
	</li>
	<br>
	<li><b>Streams</b>
		<ul>
			<li>Alle Streams die durch PNGs vertreten sind, werden angezeigt, wenn sie online sind.</li>
			<li>Um den die Streams zu aktualisieren kannst du auf <i>Streams refreshen</i> klicken. Wenn du sehen willst, ob sich ein online Status ge&auml;ndert hat, ohne vorher die Streams neu zu laden, kannst du auch auf <i>PNGs refreshen</i> klicken.</li>
		</ul>
	</li>
	<br>
	<li><b>Adresszeilenkomandos</b>
		<ul>
			<li>Im Folgenden sind alle unterst&uuml;tzten Eingaben gelistet. Darauf folgen ein paar Beispiele.></li>
			<li><u>debug</u>
				<ul>
					<li>chat - zeigt den Chat zum Stream an</li>
					<li>offline - zeigt alle Streams an, auch wenn diese gerade nicht online sind.</li>
				</ul>
			</li>
			<li><u>streams</u>
				<ul>
					<li>twitch - Liste f&uuml;r twitch Streams</li>
					<li>hitbox - Liste f&uuml;r hitbox Streams</li>
					<li>hier kann eine durch Kommata getrennte Liste an Streams angegeben werden, die zus&auml;tzlich angezeigt werden sollen. Duplikate werden ignoriert!</li>
				</ul>
			</li>
			<li><u>Beispiele</u>
				<ul>
					<li>?hitbox=user,user1,user2 - Zeigt zus&auml;tzlich die Streams der Streamer user, user1 und user2 von Hitbox an.</li>
					<li>?twitch=user&debug=offline - zeigt alle Streams an, sowie den des Streamer user auf Twitch.</li>
					<li>?hitbox=user&debug=chat - zeigt Streams an, sofern diese online sind. Au&szlig;erdem wird der Hitbox/Twitch Chat des Streams angezeigt.</li>
					<li>?hitbox=user,user2&twitch=user3,user4&debug=hitboxchat,offline - Die Reihenfolge ist egal, wichtig ist, dass am Anfang der Eingabe einmal ein <i>?</i> steht und die verschiedenen Parameter durch ein und verbunden sind.</li>
				</ul>
			</li>
		</ul>
	</li>
</ul>
