<?php 	

include('koneksi.php');

$db = new Database();
$data = $db->Read();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table border="1">
		<tr>
			<th>No</th>
			<th>Barang</th>
			<th>Stok</th>
			<th>Harga Beli</th>
			<th>Harga Jual</th>
			<th>Action</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nis']; ?></td>
				<td><?php echo $row['nama']; ?></td>
				<td>
					-
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
</body>
</html>