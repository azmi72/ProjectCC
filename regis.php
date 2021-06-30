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

                    
                
                        <div class="kotak_add" style="border:0">

                        <!-- <a href="index.php"><img class="logo" src="logo/tu.png" ></a> -->

                            <form action="register.php" method="POST" name="form1">

                                    <center><label><b>Nama Lengkap</b></label></center>
                                    <input type="text" name="Nama" class="form_login" placeholder=". . ."  required="required">
                                    
                                    <center><label><b>Nama Pengguna</b></label></center>
                                    <input type="text" name="Nama_Pengguna" class="form_login" placeholder=". . ."  required="required">
                                    
                                    <center><label><b>No Handphone</b></label></center>
                                    <input type="number" name="nomor" class="form_login" placeholder=". . ."  required="required">

                                    <center><label><b>Email</b></label></center>
                                    <input type="email" name="email" class="form_login" placeholder=". . ."  required="required">
                                    
                                    <center><label><b>Kata Sandi</b></label></center>
                                    <input type="password" name="password" class="form_login" placeholder=". . ."  required="required">
                            
                                <tr> 
                                        <td></td>
                                        <td ><input class="tombol_login" type="submit" name="Submit" value="Daftar"></td>
                                </tr>
                                <center>
                                        <a class="link">Sudah punya akun ? <a class="link" href="login.php"><b>masuk</b></a></a>
                                </center>
                            </form>
                        </div>
                        
                    						
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