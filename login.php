<!DOCTYPE HTML>
<!--
	Aerial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Aerial by HTML5 UP</title>
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

                    
                
                    <div class="kotak_login">
                        <p class="tega"><a href="index.php">LOGIN</a></p>
                
                        <form action="cek_login.php" method="post">
                            <center><label><b>Nama Pengguna</b></label></center>
                            <input type="text" name="Nama" class="form_login" placeholder="Username .." required="required">
                
                            <center><label><b>Kata Sandi</b></label></center>
                            <input type="password" name="sandi" class="form_login" placeholder="Password .." required="required">
                
                            <input type="submit" class="tombol_login" value="MASUK" >
                
                            <br/>
                            <br/>
                            <center>
                                <a class="link">belum punya akun ? <a class="link" href="register.php"><b>daftar</b></a></a>
                            </center>
                        </form>
                        
                    						
					</header>

			

			</div>
		</div>
		
		<script>
			window.onload = function() { document.body.classList.remove('is-preload'); }
			window.ontouchmove = function() { return false; }
			window.onorientationchange = function() { document.body.scrollTop = 0; }
		</script>
	</body>
</html>