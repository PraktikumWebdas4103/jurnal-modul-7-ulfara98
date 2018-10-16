<?php 
		include 'inputMahasiswa.php';
		$sql = mysqli_query($con, "SELECT * FROM mahasiswa")
		?>
<form action="" method="POST">
	<body bgcolor="#A2ADEE">
		<center>
			<br><br><br><br><br><br><br><br><br>
	<table border="2" bgcolor="#EEA2AD" height="100px" width="100px">
		<tr bgcolor="#77D9D3">
			<td><input type="inputd" name="inputd" placeholder="Input Data"></td>
			<td><input type="nimnya" name="nimnya" placeholder="NIM"></td>
			<td><input type="Submit" name="cari" placeholder="Cari"></td>
		</tr>
	</table>
	<table>
		<h3>Lihat Data Mahasiswa</h3><br>
		<table border="2" bgcolor="#EEA2AD">
		<tr bgcolor="#77D9D3">
			<td>No</td>
			<td>Nama</td>
			<td>NIM</td>
			<td>Aksi</td>
		</tr>
		</table>

		<?php
		if(mysqli_num_rows($sql)>0){
			$no = 1;
			while($data = mysqli_fetch_array($sql)){
		?>
		<table border="2" bgcolor="#EEA2AD">
		<tr bgcolor="#77D9D3">
			<td><?php echo $no ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['nim']; ?></td>
		</tr>
		</table>
		<?php $no++; } ?>
 		<?php } ?>
		</tr>
		</form>
