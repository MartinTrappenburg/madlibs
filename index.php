<?php

?>

<!DOCTYPE html>
<html>

	<head>
		<title>MadLibs</title>
		<link rel="stylesheet" type="text/css" href="IndexCSS.css">
	</head>

	<body>
		<img src="MADLIBS.png">
		
		<div id="navbar">
			<script type="text/javascript">
				function switchsite() {
					if (document.getElementById('ContainerOnkunde').style.visibility == "visible") {
						document.getElementById('ContainerPaniek').style.visibility = "visible";
						document.getElementById('ContainerOnkunde').style.visibility = "hidden";
						document.getElementById('title').innerHTML = "Er heerst paniek...";
					} else {
						document.getElementById('ContainerPaniek').style.visibility = "hidden";
						document.getElementById('ContainerOnkunde').style.visibility = "visible";
						document.getElementById('title').innerHTML = "Onkunde";
					}
				}
			</script>
			<button id="Buttons" onclick="switchsite()">Switch</button>
		</div>
		
		<div id="MainContainer">
			<h1 id="title">Er heerst paniek...</h1>
			<span id="ContainerPaniek">
				<div class="text">
					<p>Welk dier zou je nooit als huisdier willen?</p>
					<p>Wie is de belangrijkste persoon in je leven?</p>
					<p>In welk land zou je graag willen wonen</p>
					<p>Wat doe je als je je verveelt?</p>
					<p>Met welk speelgoed speelde je als kind het meest?</p>
					<p>Bij welke docent spijbel je het liefst?</p>
					<p>Als je €100.000,- had, wat zou je dan kopen?</p>
					<p>Wat is je favoriete bezigheid?</p>
				</div>
	
				<div id="inputPaniek">
					<form method="post" action="AntwoordPaniek.php">
		 				<ul>
		 					<li class="box"><input type="" name="huisdier"></li>
	 						<li class="box"><input type="" name="persoon"></li>
		 					<li class="box"><input type="" name="land"></li>
	 						<li class="box"><input type="" name="verveling"></li>
	 						<li class="box"><input type="" name="speelgoed"></li>
	 						<li class="box"><input type="" name="spijbelen"></li>
	 						<li class="box"><input type="" name="geld"></li>
	 						<li class="box"><input type="" name="bezigheid"></li>
	 						<li class="box"><input type="submit" name="submit"></li>
						</ul>
					</form>
				</div>
			</span>
			
			<span id="ContainerOnkunde">
				<div id="textOnkunde">
					<p>Wat zou je graag willen kunnen?</p>
					<p>Met welke persoon kun je goed opschieten?</p>
					<p>Wat is je favoriete getal?</p>
					<p>Wat heb je altijd bij je als je op vakantie gaat?</p>
					<p>Wat is je beste persoonlijke eigenschap?</p>
					<p>Wat is je slecshte persoonlijke eigenschap?</p>
					<p>Wat is het ergste wat je kan overkomen?</p>
				</div>
	
				<div id="inputOnkunde">
					<form method="post" action="AntwoordOnkunde.php">
		 				<ul>
		 					<li class="box"><input type="" name="kunnen"></li>
	 						<li class="box"><input type="" name="opschieten"></li>
		 					<li class="box"><input type="" name="getal"></li>
	 						<li class="box"><input type="" name="vakantie"></li>
	 						<li class="box"><input type="" name="eigenschapgoed"></li>
	 						<li class="box"><input type="" name="eigenschapslecht"></li>
	 						<li class="box"><input type="" name="overkomen"></li>
	 						<li class="box"><input type="submit" name="submit"></li>
						</ul>
					</form>
				</div>
			</span>
			<div id="bottom">
				<p>Deze website is geaakt door Martin.</p>
			</div>
		</div>
	</body>
</html>	