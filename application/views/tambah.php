<!DOCTYPE html>
<html>
<head>
	<title>halaman tambah data</title>
</head>
<body>
<center>
	<h1>Tambah Data Parkir</h1>
	<form action="<?php echo base_url().'index.php/control/fungsitambah';?>" method="POST">
	<table>
		<tr>
			<td>jenis</td>
			<td>:</td>
			<td><input type="text" name="jenis"></td>
		</tr>
		<tr>
			<td>plat</td>
			<td>:</td>
			<td><input type="text" name="plat"></td>
		</tr>
		<tr>
        <tr>
			<td>Jam Masuk</td>
			<td>:</td>
			<td><input type="text" name="waktu"></td>
		</tr>
		
		<tr>
			<td colspan="3"><button type="submit">Tambah Data</button></td>
			
		</tr>
		<tr>
		<td><input type="button" value="Kembali" onclick="window.history.back()"/></td>
		</tr>
	</table>
	
</form>
</center>
</body>
</html>