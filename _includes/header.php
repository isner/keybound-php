<?php require_once('_includes/addWWW.php'); ?>
<!doctype html>
<html>

<head>
	<title>Keybound for WoW</title>
	
<meta charset="UTF-8">

<meta name="Description" content="Experiment with different keybinding configurations for any class in World of Warcraft&reg; away from the game and improve your comfort and efficiency in-game.">

<link rel="icon" type="image/png" href="_images/favicon.png">

<link rel="stylesheet" type="text/css" href="_stylesheets/default.css?<?php echo date('h:i:s');?>">
<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css">

<script type="text/javascript" 
	src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" 
	src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>

<!-- Javascript Disabled -->

<noscript>
	Javascript is not enabled. You will be redirected shortly.
	<meta HTTP-EQUIV="REFRESH" content="3; url=http://localhost/keybound/noJava.php">
</noscript>

<!-- Wowhead tooltips -->

<!--<script type="text/javascript" 
	src="http://static.wowhead.com/widgets/power.js"></script>
<script>var wowhead_tooltips = { "colorlinks": false, "iconizelinks": false, "renamelinks": false }</script>-->

<?php
// Google analytics tracking
include_once('_includes/analyticstracking.php'); 
?>

</head>
<body>
<?php $_SESSION['tutorials'] = (!isset($_SESSION['tutorials'])) ? 'yes' : $_SESSION['tutorials']; ?>

<!-- Instructions screen -->

<div id="instructions-screen">
	<div id="instructions">
		<p style="font-size: 20px;">Instructions:</p>
		<hr />
		<p>1. Drag spell icons from the spellbook onto the keyboard and mouse below.</p>
		<p>2. Hold 'Shift' or 'Ctrl' ('Alt' on Mac) to activate key modifier states, which will be indicated by blue and red colored keys.</p>
		<p>3. To remove icons from the keyboard and mouse simply drag the icon into empty space and release, or overwrite an icon with another to remove it. Removed icons will reappear highlighted in the spellbook.</p>
		<hr />
		<p>Click anywhere to close this screen</p>
	</div>
</div>

	<div id="top_bg">
	
		<div id="top">
		
			<a href="index.php"><div id="text_logo"></div></a>
		
			<a href="index.php"><div id="nav_classSelection"></div></a>
			<a href="about.php"><div id="nav_about"></div></a>
			
		</div>
	
	</div>
	
	<div id="middle_bg">
	
		<div id="middle">