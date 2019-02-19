<!DOCTYPE html>
<html>
<head>
	<title>Data input</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<a href="index.php">Lihat Semua Data</a>

	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>Nama penduduk</td>
				<td><input type="text" name="nama"></td>					
			</tr>
			<tr>
				<td>Nama Daerah</td>
				<td><input type="text" name="daerah"></td>					
			</tr>	
			<tr>
				<td>Total Pendapatan</td>
				<td><input type="text" name="total pendapatan"></td>					
			</tr>
			<tr>
				<td>Rata-Rata Pedapatan</td>
				<td><input type="text" name="rata-rata pedapatan"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>