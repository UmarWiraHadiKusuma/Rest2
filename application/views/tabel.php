<html>
<head>
	<title>Data Mahasiswa</title>
</head>
<body>
	<table border="1" style="border-colapse:collapse; width:50%;">
	<tr style="background:gray;">
		<th>No Induk</th>
		<th>Nama</th>
		<th>Nama</th>
		<th>Action</th>
	</tr>
	<?php foreach($data as $d){?>
	<tr>
		<td><?php echo $d['NIM'];?></td>
		<td><?php echo $d['Nama'];?></td>
		<td><?php echo $d['Alamat'];?></td>
		<td align="center"> 
			<a href="<?php echo base_url()."index.php/crud/edit_data/".$d['NIM'];?>">Edit</a>
			<a href="<?php echo base_url()."index.php/crud/do_delete/".$d['NIM'];?>">Delete</a>
		</td>
	</tr>
	<?php } ?>
	</table>
	<a href="<?php echo base_url(); ?>index.php/crud/add_data">Tambah Data</a>
</body>
</html>