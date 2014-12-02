<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<form method="POST" action="<?php echo base_url()."index.php/crud/do_update";?>">
	<table>
		<tr>
			<td>No Induk</td>
			<td><input type="text" name="NIM" value="<?php echo $NIM;?>"/></td>
		</tr>
		<tr>
			<td>Nama</td>
			<td><input type="text" name="Nama" value="<?php echo $Nama;?>"/></td>
		</tr>
		<tr>
			<td>Alamat</td>
			<td><textarea name="Alamat"><?php echo $Alamat?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btnsubmit" value="Simpan" /></td>
		</tr>	
	</table>
	</form>
</body>
</html>