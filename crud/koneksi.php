<?php 
// isi nama host, username mysql, dan password mysql anda
$host = mysql_connect("localhost","root","",","juplek"");

if (mysqli_connect_errno()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
  }

?>