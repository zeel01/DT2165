<!DOCTYPE html>
<html>
	<head>
		<title>Driver Test: 2165 - JS</title>
		<link rel="stylesheet" type="text/css" href="styles.css">
		<link rel="icon" type="image/png" href="icon.png">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">	
		<?php 
			if ($_SERVER['SERVER_NAME'] != 'localhost') {
				require('trackingCode.php'); 
			}
		?>
	</head>
	<body>
		<div id="wrapper">
			<div id="game">
				<canvas width="300" height="450" id="dtFrame">
					<p>You need to update your browser to one that supports the HTML canvas element - such as Google Chrome.</p>
				</canvas>
				<div id="lC"></div>
				<div id="rC"></div>
				<div id="overlay" class="">
					<h1 id="title">Welcome!</h1>
					<h3>[Continue]</h3>
					<h4>[Click/Tap/Space]</h4>
				</div>
				<p id="scoreBoard">
					Score: <span id="score">0</span><br>
					High: <span id="hs">0</span>
				</p>
			</div>
			<div id="options">
				<h3 id="optControl">Options &#187;</h3>
				
				<ul id="optList" class="invisible">
					<p>
						The following options are not considered properly implemented, 
						they may improve the game, or make it act strangely - or even become inoperable. 
						Your preferences will <em>not</em> persist if you reload the page.
						<br>Default values are in brackets []
					</p>
					<li>
						<h4>Customize</h4>
						<p>
							Custom visual settings. 
							This only effects the appearance of the game, and should have no impact on its performance or balance.
						</p>
						<ul>
							<li>
								<h5>Car color [Red]</h5>
								<select id="carSel">
									<option value="car.png">Red</option>
									<option value="carY.fw.png">Yellow</option>
									<option value="carB.fw.png">Blue</option>
								</select>
							</li>
						</ul>
					</li>
					<li>
						<h4>Performance</h4>
						<p>
							The following <em>might</em> improve performance or visual quality. 
							Or they might not - use at your own risk. Takes effect on new game.
							<br>
							<a href="#" onclick="GAME.gameOver()">Force Game Over</a>
						</p>
						
						<ul>
							<li>
								<h5>Buffer scale [1]</h5>
								<output id="bufO">1</output>
								<input id="bufferScale" type="range" min="1" max="100" step="1" value="1">
							</li>
						</ul>
					</li>
					<li id="cheats" class="disabled">	
						<h4>Cheats<input type="checkbox" id="optTog"></h4>
						<p>
							The following tweaks are for testing purposes only, 
							they can easily make the game unbelievably easy or completely impossible. 
							All setting will take effect on new game, and high score tracking will be disabled.
						</p>
						<ul>
							<li>
								<h5>Lateral speed [1]</h5>
								<output id="spdM">1</output>
								<input id="speedScale" type="range" min=".1" max="3" step=".1" value="1" disabled>
							</li>
							<li>
								<h5>Refresh rate limiter [1]</h5>
								<output id="frameD">1</output>
								<input id="frameScale" type="range" min="1" max="10" step="1" value="1" disabled>
							</li>
							<li>
								<h5>Acceleration [.01]</h5>
								<output id="incO">.01</output>
								<input id="spdInc" type="range" min=".001" max=".1" step=".001" value=".01" disabled>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			
			<!-- Script Section -->
				<script type="text/javascript" src="dtmain/resourceDef.js"></script>
				<script type="text/javascript" src="dtmain/input.js"></script>
				<script type="text/javascript" src="dtmain/render.js"></script>
				<script type="text/javascript" src="dtmain/logic.js"></script>
				<script type="text/javascript" src="dtmain/classes.js"></script>
				<script type="text/javascript" src="dtmain/game.js"></script>
				<script type="text/javascript" src="options.js"></script>
				<script type="text/javascript" src="dtmain/DT.js"></script>
			<!-- /Script Section -->
		</div>
	</body>

	
</html>