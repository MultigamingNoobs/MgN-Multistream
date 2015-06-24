<ul class="sites">
	<li></li>
	<li><b>Commands</b>
		<ul>
			<li>The following commands are used to set the streams, language and other things. The index page needs the commands but if you don't want to write code, you can just click and drag and drop on the home page.></li>
			<li><u>Streams</u>
				<ul>
					<li>twitch - list of twitch streams</li>
					<li>hitbox - list of hitbox streams</li>
					<li>the command needs a with comma separated list like <i>hitbox=streamA,streamB</i> or <i>twitch=streamA,streamB,..</i>. Duplicates will be deleted and the order will not be changed.</li>
				</ul>
			</li>
			<li><u>Tab</u>
				<ul>
					<li>When loading this page the following tab will be selected by default:</li>
					<li>p=home - Index (or easily don't set p)</li>
					<li>p=streams - Streams</li>
					<li>p=imprint - Imprint</li>
					<li>p=help - Help</li>
					<li>p=changelog - Changelog</li>
				</ul>
			</li>
			<li><u>Language</u>
				<ul>
					<li>You can select from the languages below. If no language is set English will be preferred:</li>
					<li>lang=de - German</li>
					<li>lang=en - English</li>
				</ul>
			</li>
			<li><u>Team and Suggestions</u>
				<ul>
					<li>team - Parameter whether MgN Streams should be shown</li>
					<li>suggestions - Parameter whether other suggestions should be shown</li>
					<li>If team=on or suggestions=on then Streams from MgN-Members or suggested stream will be shown in the "Streams" tab. The settings has no influence to the MgN tab where only online MgN Streams are shown.</li>
				</ul>
			</li>
			<li><u>Examples</u>
				<ul>
					<li>?hitbox=user,user2&amp;twitch=user3,user4&amp;p=streams - There is no correct order but the p (page) parameter should be the first! More important is that the command has to start with a <i>?</i>.Separate the parameter with &amp;!</li>
				</ul>
			</li>
		</ul>
	</li>
	<li></li>
	<li><b>Embed this page</b>
		<ul>
			<li>If you want to embed this Multistream to you web page you could do it like following:</li>
			<li><i>keep in mind:</i> {twitchstreams} and {hitboxstreams} are comma separated lists!</li>
			<li><u>Streams</u>
				<code>
					&lt;iframe src=&quot;http://stream.my-mgn.de/mg/p/showStreams.php?twitch={twitchstreams}&amp;hitbox={hitboxstreams}&quot; name=&quot;mgnmultistream&quot; width=&quot;500&quot; height=&quot;400&quot;&gt;&lt;/iframe&gt;
				</code>
			</li>
			<li><u>Chat</u>
				<code>
					&lt;iframe src=&quot;http://stream.my-mgn.de/mg/p/popoutChat.php?twitch={twitchstreams}&amp;hitbox={hitboxstreams}&quot; name=&quot;mgnmultistream&quot; width=&quot;500&quot; height=&quot;400&quot;&gt;&lt;/iframe&gt;
				</code>
			</li>
		</ul>
	</li>
</ul>