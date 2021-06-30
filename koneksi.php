<?php 
$koneksi = mysqli_connect("sekilasbola.ceo6utbrwxkz.us-east-1.rds.amazonaws.com","admin","sekilasbola","sekilasbola");

// Check connection
if (mysqli_connect_errno()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>