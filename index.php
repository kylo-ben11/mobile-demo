<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="apple-mobile-web-app-capable" content="yes">
<title>Marvel Movie Mania</title>
<link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="css/scss/styles.css" />
<link rel="apple-touch-icon" href="apple-touch-icon.png" />
<link rel="apple-touch-startup-image" href="images/marvel-background.jpg" />
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>

</head>

<body>
	<div data-role="header" id="header">
		<a id="hamburger" href="#mypanel" class="ui-btn ui-shadow ui-corner-all ui-icon-bars ui-btn-icon-notext">Bars</a>
	</div>
	<script>$( "#mypanel" ).trigger( "updatelayout" );</script>
    <div data-role="panel" id="mypanel" data-display="overlay">
    <a href="#mypanel" class="ui-btn ui-shadow ui-corner-all ui-icon-delete ui-btn-icon-notext">Delete</a>
		<p ><a href="#two" class="ui-btn ui-shadow ui-corner-all" data-transition="flip">Upcoming Films</a></p>
		<p ><a href="#three" class="ui-btn ui-shadow ui-corner-all" data-transition="flip">Past Films</a></p>
		<p><a href="#popup" class="ui-btn ui-shadow ui-corner-all" data-rel="dialog" data-transition="pop">TV Series</a></p>
    </div><!-- /panel -->
	<main>
		<h1>Welcome to Marvel Movie Mania</h1>

		<section data-role="collapsible-set" data-content-theme="b">
			<h2>Upcoming Releases</h2>
				<div data-role="collapsible">
					<h4>Avengers: Infinity Wars</h4>
					<iframe width="100%" height="211" src="https://www.youtube.com/embed/QwievZ1Tx-8?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
				<div data-role="collapsible">
					<h4>Deadpool 2</h4>
					<iframe width="100%" height="211" src="https://www.youtube.com/embed/D86RtevtfrA?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
		</section>
	</main>
	<footer><h4>&copy; <?= date(Y);?> Code Creative Web Development</h4></footer>
</body>
</html>
