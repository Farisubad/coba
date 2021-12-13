<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Dashboard</title>

	<style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		top : 50px;
		text-align: center;
		background-color: #fff;
		margin: 40px;
		font: 20px/35px normal Helvetica, Arial, sans-serif;

	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: blue;
		background-color: transparent;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 0 0;
		padding: 12px 12px 8px 12px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;

		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
	<h1>Selamat Datang</h1>
	<div id="body">
<h1>Parkir Kuy</h1>

<center>
	<a href="<?php echo base_url().'index.php/control/tambah_data';?>">TAMBAH PARKIR</a>
	<table border="1">
	<tr >
		<td>Kode Karcis</td>
		<td>Plat Nomor</td>
		<td>Jenis</td>
		<td>Jam Masuk</td>
		<td>Aksi</td>
	</tr>
	<?php
	$count = 0;
		foreach ($querydataparkir as $row) {
			$count = $count +1;
		?>
	<tr >
		<td><?php echo $count?></td>
		<td><?php echo $row ->jenis?></td>
		<td><?php echo $row ->plat?></td>
		<td><?php echo $row ->waktu?></td>
		<td><a href="<?php echo base_url().'index.php/control/edit_data';?>/<?php echo $row->plat?>">Edit Data</a> |
		 <a href="<?php echo base_url().'index.php/control/fungsihapus';?>/<?php echo $row->plat?>">Hapus Data</a></td>
	</tr>
	<?php } ?>

</table>
</center>


</div>
</body>
</html>