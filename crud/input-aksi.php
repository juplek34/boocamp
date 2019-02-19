<?php 
include 'koneksi.php';
$nama = $_POST['nama'];
$daerah = $_POST['daerah'];
$total_pendapat = $_POST['total pendapat'];
$rata_rata_pedapatan = $_POST['rata-rata pedapatan'];

mysql_query("INSERT INTO user VALUES('','$nama','$daerah','$total_pendapat''$rata_rata_pedapatan')");

header("location:index.php?pesan=input");
?>