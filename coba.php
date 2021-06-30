<?php
$servername = "sekilasbola.ceo6utbrwxkz.us-east-1.rds.amazonaws.com";
$database = "sekilasbola";
$username = "admin";
$password = "sekilasbola";

// untuk tulisan bercetak tebal silakan sesuaikan dengan detail database Anda
// membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
mysqli_close($conn);
?>