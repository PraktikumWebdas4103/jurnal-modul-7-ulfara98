<form action="" method="POST">
	<body bgcolor="#77D9D3">
		<center>
			<br><br><br><br><br><br><br><br><br><br><br><br><br>
	<table bgcolor="#FFF7CC">
		<tr>
			<td>Nama 		: </td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NIM 		: </td>
			<td><input type="text" name="nim"></td>
		</tr>
		<tr>
			<td>Jenis Kelamin	: </td>
			<td><input type="radio" name="jk" value="Laki-Laki">Laki-Laki</td>
			<td><input type="radio" name="jk" value="Perempuan">Perempuan</td>
		</tr>
		<tr>
			<td>Program Studi 	: </td>
			<td> <select name="prodi">
			<option value="ManajemenInformatika">Manajemen Informatika</option>
			<option value="AdministrasiBisnis">Administrasi Bisnis</option>
			<option value="DesainInterior">Desain Interior</option>
			<option value="TeknikIndustri">Teknik Industri</option>
		</select></td>
		</tr>
		<tr>
			<td>Fakultas	: </td>
			<td><select name="fakultas">
			<option value="FIT">"FIT</option>
			<option value="FKB">FKB</option>
			<option value="FIK">FIK</option>
			<option value="FTI">FTI</option>
		</select></td>
		</tr>
		<tr>
			<td>Asal 		: </td>
			<td><input type="text" name="asal"></td>
		</tr>
		<tr>
			<td>Moto Hidup	: </td>
			<td><input type="textarea" name="moto"></td>
		</tr>
		<tr>
			<td><input type="Submit" name="submit" value="Input"></td>
		</tr>
	</table>
</form>

<?php
	$servername = "localhost";
 	$nim = "root";
 	$nama = "";
 	$db = "data";
 	$con = new mysqli($servername, $nim, $nama, $db);

 	if($con==false){
 		die("Koneksi Gagal" . $con->connect_error);
 	
 	}
 	if(isset($_POST['submit'])){
 		$nama = $_POST['nama'];
 		$nim = $_POST['nim'];
 		$jk = $_POST['jk'];
 		$prodi = $_POST['prodi'];
 		$fakultas = $_POST['fakultas'];
 		$asal = $_POST['asal'];
 		$moto = $_POST['moto'];
 		$sql = "INSERT INTO mahasiswa (nim,nama,jk,prodi,fakultas,asal,moto) values ('$nim', '$nama', '$jk', '$prodi', '$fakultas', '$asal', '$moto')";

	if (mysqli_query($con, $sql)){
		echo "<center>Database sudah masuk</center>";
	}else{
		echo "ERROR";
	}
	}

	?>

