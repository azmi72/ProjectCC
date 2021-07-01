<?php
 session_start();
?>
<!DOCTYPE HTML>
<!--
	Aerial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>League - Sekilas Bola</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	
	<body class="is-preload">
		
		<div id="wrapper">
			<div id="bg"></div>
			<div id="overlay"></div>
			<div id="main">

				<!-- Header -->
					<header id="header">
						<h1>Best League </h1>
						<p>see and find out your favorite league here</p>
						<nav>
							<ul>
								<li><a href="https://www.premierleague.com/"><img class="ikon" src="images\ico\lengland.png "> </a></li>
								<li><a href="https://www.bundesliga.com/en/bundesliga"><img class="ikon" src="images\ico\bunde.png "> </a></li>
								<li><a href="https://www.laliga.com/en-GB"><img class="ikon" src="images\ico\lalig.png "> </a></li>
								<li><a href="https://www.laliga.com/en-GB"><img class="ikon" src="images\ico\lig1.png "> </a></li>
								<li><a href="https://www.laliga.com/en-GB"><img class="ikon" src="images\ico\sera.png "> </a></li>
								<li><a href="https://www.uefa.com/uefaeuro-2020/"><img class="ikon" src="images\ico\uefa.png "> </a></li>

								<!-- <li><a href="#" class="icon brands fa-facebook-f"><span class="label">Facebook</span></a></li> -->
								
							</ul>
						</nav>
					</header>

				<!-- Footer -->
					<footer id="footer">
						<span class="copyright">Kelompok: Azmi Aisyi Krisna</span>
					</footer>

			</div>
		</div>
		<script>
			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>