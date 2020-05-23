<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Unity 2D Configuration Utility</title>
	<link type="text/css" rel="stylesheet" href="stylesheet.css" />
	<link type="text/css" rel="stylesheet" href="wallpaper.php" />
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<script type="text/javascript">
	var _gaq = _gaq || [];
	_gaq.push (['_setAccount', 'UA-23131191-12']);
	_gaq.push (['_trackPageview']);

	(
		function()
		{
			var ga = document.createElement ('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName ('script')[0]; s.parentNode.insertBefore (ga, s);
		}
	) ();
	</script>
</head>
<body>
<div id="desktop">
	<img src="img/ubuntu.png" alt="Ubuntu" class="ubuntu" />
	<div class="unity panel">
	</div>
	<div class="unity launcher">
		<div class="launchericon bfb">
			<img src="img/unity.launcher.bfb.png" alt="Dash Home" />
		</div>
		<!--<div style="background-color: #D2559D;" class="launchericon" id="launch-unity-2d-config-util">
			<img alt="Unity 2D Configuration Utility" src="img/logo.png">
		</div>-->
		<div style="background-color: #D45646;" class="launchericon" id="googleplus">
			<a href="https://plus.google.com/106316816497564012238?prsrc=3" target="_blank">
				<img alt="Google+" src="https://ssl.gstatic.com/images/icons/gplus-64.png">
			</a>
		</div>
		<div style="background-color: #E9D156;" class="launchericon" id="launchpad">
			<a href="https://launchpad.net/unity-2d-config-util" target="_blank">
				<img alt="Launchpad" src="img/unity.launcher.launchpad.png">
			</a>
		</div>
		<div class="launchericon trash">
			<a href="http://is.gd/10QgK7" target="_blank">
				<img src="img/unity.launcher.trash.empty.png" alt="Rubbish Bin" />
			</a>
		</div>
	</div>
	<div class="unity dash">
		<div class="dash ribbon">
			<img src="img/unity.dash.ribbon.home.png" alt="Home" class="ribbonicon" id="ribbonhome" />
			<img src="img/unity.dash.ribbon.photo.png" alt="Screenshots" class="ribbonicon" id="ribbonscreenshots" />
		</div>
		
		<div class="dash page" id="home">
			<?php include ('pages/home.php'); ?>
		</div>
		<div class="dash page" id="screenshots">
			<?php include ('pages/screenshots.php'); ?>
		</div>
	</div>
</div>
</body>
</html>
