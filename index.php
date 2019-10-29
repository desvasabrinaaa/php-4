<?php 	

require 'functions.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP</title>
</head>
<body>

<a href="tambah.php">TAMBAH DATA</a>

<table border="1" cellpadding="10px" cellspacing="0">
	<thead>
		<tr>
			<th>ID</th>
			<th>NAMA</th>
			<th>JK</th>
			<th>NOMOR HP</th>
		</tr>
	</thead>
	<tbody>
	<?php
		$sql = " SELECT * FROM siswa; "; //Query SQL
		$result = $db->query($sql); // Execute Query SQL
		$no = 1;
		while ($row = $result->fetch_assoc()) { //Menampilkan bentuk array
			echo "
			<tr>
				<td>". $no ."</td>
				<td>". $row["nama_lengkap"] ."</td>
				<td>". $row["jk"] ."</td>
				<td>". $row["no_hp"] ."</td>
			</tr>
			";
			$no++;
		} 	
	?>
	</tbody>
</table>
</body>
</html>