<section id="intro">
	<h2>It's <strong>your</strong> desktop; customize it the way <strong>you</strong> like</h2>
	<p>Everyone's got a different taste. This counts for clothes, art, ... and your desktop. You should be able to customize your desktop to your needs, no matter if your computer supports <em>3D acceleration</em> or not.</p>
	<p>Unity 2D Configuration Utility helps you customize your <em>Unity 2D</em> desktop to your likings.</p>
	<p><a href="#dash#screenshots" onClick="goToPage ('ribbonscreenshots');"><img src="screenshots/tabLauncherBeta.png" alt="[Screenshot]" class="screenshot" /></a></p>
</section>
<section id="bazaar">
	<h2>Recent revisions</h2>
	<?php
	/*
		// The project is long dead, Launchpad is long dead, may as well just put it in hardcoded.

		$trunk = file_get_contents ('http://code.launchpad.net/~robinj/unity-2d-config-util/trunk');
		preg_match_all ('#<dl class="revision">(((?!\<\/dl\>).)*)#msi', $trunk, $matches);
		for ($i = 0; $i < count ($matches[0]); $i++)
		{
			echo $matches[0][$i];
		}
	*/
	?>
	<dl class="revision">
		<div>
			<dt class="revision-details">
				15. By <a href="https://launchpad.net/~robinj" class="sprite person">RobinJ</a> <time title="2012-05-11 20:54:05 UTC" datetime="2012-05-11T20:54:05.798000+00:00">on 2012-05-11</time>
			</dt>
			<dd class="subordinate revision-comment">
				<p>Added a warning dialog for when the user is not running Ubuntu 12.04.</p>
			</dd>
		</div>
		<div>
			<dt class="revision-details">
				14. By <a href="https://launchpad.net/~robinj" class="sprite person">RobinJ</a> <time title="2012-05-11 19:18:14 UTC" datetime="2012-05-11T19:18:14.148000+00:00">on 2012-05-11</time>
			</dt>
			<dd class="subordinate revision-comment">
				<p>Replaced the notify-osd telling you to log out and log back in by a dialog, but it only shows when some of the QML properties were changed.</p>
			</dd>
		</div>
		<div>
			<dt class="revision-details">
				13. By <a href="https://launchpad.net/~robinj" class="sprite person">RobinJ</a> <time title="2012-05-10 17:21:43 UTC" datetime="2012-05-10T17:21:43.501000+00:00">on 2012-05-10</time>
			</dt>
			<dd class="subordinate revision-comment">
				<p>Made the dialog unresizable.<br>
				After running the application as root by hitting the unlock button, you now get a notification telling you that you might need to log out and log back in, in order to see the changes.</p>
			</dd>
		</div>
		<div>
			<dt class="revision-details">
				12. By <a href="https://launchpad.net/~robinj" class="sprite person">RobinJ</a> <time title="2012-05-10 17:08:07 UTC" datetime="2012-05-10T17:08:07.646000+00:00">on 2012-05-10</time>
			</dt>
			<dd class="subordinate revision-comment">
				<p>Added a dialog that warns the user when he is not running Unity 2D, and asks if he wants to continue anyway.</p>
			</dd>
		</div>
		<div>
			<dt class="revision-details">
				11. By <a href="https://launchpad.net/~robinj" class="sprite person">RobinJ</a> <time title="2012-05-09 12:09:18 UTC" datetime="2012-05-09T12:09:18.888000+00:00">on 2012-05-09</time>
			</dt>
			<dd class="subordinate revision-comment">
				<p>It's in beta! This basically means that the risk of screwing up your system is almost as small as it can get...<br>
				People who'd like to give it a look, or help me by testing the application, can download it from <a rel="nofollow" href="http://www.robinj.be/unity-2d-config-util/download/unity-2d-config-util-beta.deb">http://www.robinj.be/unity-2d-config-util/download/unity-2d-config-util-beta.deb</a><br>
				Bugs can be reported at <a rel="nofollow" href="https://bugs.launchpad.net/unity-2d-config-util">https://bugs.launchpad.net/unity-2d-config-util</a><br>
				Feature requests and other questions can be asked at <a rel="nofollow" href="https://answers.launchpad.net/unity-2d-config-util">https://answers.launchpad.net/unity-2d-config-util</a></p>
			</dd>
		</div>
		<div>
			<dt class="revision-details">
				10. By <a href="https://launchpad.net/~robinj" class="sprite person">RobinJ</a> <time title="2012-05-08 18:21:47 UTC" datetime="2012-05-08T18:21:47.353000+00:00">on 2012-05-08</time>
			</dt>
			<dd class="subordinate revision-comment">
				<p>The unlock buttons work.<br>
				Almost time for beta testing; All features are currently working!</p>
			</dd>
		</div>
		<div>
			<dt class="revision-details">
				9. By <a href="https://launchpad.net/~robinj" class="sprite person">RobinJ</a> <time title="2012-05-06 09:35:21 UTC" datetime="2012-05-06T09:35:21.597000+00:00">on 2012-05-06</time>
			</dt>
			<dd class="subordinate revision-comment">
				<p>Added tyhe info box and the unlock button to features which require root permissions. The unlock button doesn't do anything yet, though.</p>
			</dd>
		</div>
		<div>
			<dt class="revision-details">
				8. By <a href="https://launchpad.net/~robinj" class="sprite person">RobinJ</a> <time title="2012-04-25 18:57:39 UTC" datetime="2012-04-25T18:57:39.764000+00:00">on 2012-04-25</time>
			</dt>
			<dd class="subordinate revision-comment">
				<p>Added the possibility to change the Dash opacity.</p>
			</dd>
		</div>
		<div>
			<dt class="revision-details">
				7. By <a href="https://launchpad.net/~robinj" class="sprite person">RobinJ</a> <time title="2012-04-24 09:40:08 UTC" datetime="2012-04-24T09:40:08.503000+00:00">on 2012-04-24</time>
			</dt>
			<dd class="subordinate revision-comment">
				<p>Settings can now be retrieved from QML files.</p>
			</dd>
		</div>
		<div>
			<dt class="revision-details">
				6. By <a href="https://launchpad.net/~robinj" class="sprite person">RobinJ</a> <time title="2012-04-24 09:11:55 UTC" datetime="2012-04-24T09:11:55.493000+00:00">on 2012-04-24</time>
			</dt>
			<dd class="subordinate revision-comment">
				<p>Added links to the bottom of the About page.<br>
				The opacity of the Launcher can now also be controlled.</p>
			</dd>
		</div>
	</dl>
</section>
