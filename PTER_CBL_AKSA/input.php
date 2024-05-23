<!DOCTYPE html>
<html>
<head>
	<title>CAR DATA AKSA_078</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
		<h1>CRUD CAR DATA</h1>
		<h2>DATA MOBIL AKSA_078</h2>
		<h3>PENUGASAN PTER CBL</h3>
	</div>
	
	<br/>
 
	<a href="index.php">Lihat Semua Data</a>
 
	<br/>
	<h3>Input data baru</h3>
	<form action="input-aksi.php" method="post">		
		<table>
			<tr>
				<td>ID</td>
				<td><input type="text" name="id"></td>					
			</tr>	
			<tr>
				<td>Brand</td>
				<td><input type="text" name="brand"></td>					
			</tr>	
			<tr>
				<td>Type</td>
				<td><input type="text" name="type"></td>					
			</tr>	
            <tr>
				<td>Price(USD)</td>
				<td><input type="text" name="price"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" value="Simpan"></td>					
			</tr>				
		</table>
	</form>
</body>
</html>