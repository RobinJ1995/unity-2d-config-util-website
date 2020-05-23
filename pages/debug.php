<h2>Recent revisions</h2>
<?php
	$trunk = file_get_contents ('http://code.launchpad.net/~robinj/unity-2d-config-util/trunk?stopGivingMeAnOldVersionOfThePage=' . rand (0, 99999999));
	
	preg_match_all ('#<dl class="revision">(((?!\<\/dl\>).)*)#msi', $trunk, $matches);
	for ($i = 0; $i < count ($matches[0]); $i++)
	{
		echo $matches[0][$i];
	}
	print_r ($matches);
?>
