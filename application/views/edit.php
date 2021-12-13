<!DOCTYPE html>
<html>
<head>
	<title>halaman Edit data</title>
</head>
<body>
<center>
	<h1>Edit Data Parkir</h1>
	<form action="<?php echo base_url().'index.php/control/fungsiedit';?>" method="POST">
    <table>
		<tr>
			<td>plat</td>
			<td>:</td>
			<td><input type="text" name="plat" value="<?php echo $querydatapark->plat ?>"></td>
		</tr>
		<tr>
			<td>jenis</td>
			<td>:</td>
			<td><input type="text" name="jenis" value="<?php echo $querydatapark->jenis ?>"></td>
		</tr>
        <tr>
			<td>waktu</td>
			<td>:</td>
			<td><input type="text" name="waktu" value="<?php echo $querydatapark->waktu ?>"></td>
		</tr>
		<tr>
			<td colspan="3"><button type="submit">Edit data</button></td>
		</tr>
		<tr>
		<td><input type="button" value="Kembali" onclick="window.history.back()"/></td>
		</tr>
	</table>
</form>
	
</center>
</body>
</html>