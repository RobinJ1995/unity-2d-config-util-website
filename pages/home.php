<section id="intro">
	<h2>It's <strong>your</strong> desktop; customize it the way <strong>you</strong> like</h2>
	<p>Everyone's got a different taste. This counts for clothes, art, ... and your desktop. You should be able to customize your desktop to your needs, no matter if your computer supports <em>3D acceleration</em> or not.</p>
	<p>Unity 2D Configuration Utility helps you customize your <em>Unity 2D</em> desktop to your likings.</p>
	<p><a href="#dash#screenshots" onClick="goToPage ('ribbonscreenshots');"><img src="screenshots/tabLauncherBeta.png" alt="[Screenshot]" class="screenshot" /></a></p>
</section>
<section id="bazaar">
	<h2>Recent revisions</h2>
	<!-- This gets plucked directly from Launchpad, so don't blame me for the messy code... -->
	<?php
		$trunk = file_get_contents ('http://code.launchpad.net/~robinj/unity-2d-config-util/trunk');
		preg_match_all ('#<dl class="revision">(((?!\<\/dl\>).)*)#msi', $trunk, $matches);
		for ($i = 0; $i < count ($matches[0]); $i++)
		{
			echo $matches[0][$i];
		}
	?>
</section>
