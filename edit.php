<?php 	
include('koneksi.php');
$db = new database();

// 
$id = $_GET['id']; 
$berita = $db->get_by_id($id);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Berita</title>
</head>
<body>
<h3>Edit Berita</h3>
<hr/>
<form method="post" action="proses_berita.php?action=update">
<table>
	<tr>
		<td>Judul</td>
		<td>:</td>
		<td>
			<input type="text" name="judul" value="<?php echo $berita['judul']; ?>"/>
			<input type="hidden" name="id" value="<?php echo $berita['id']; ?>"/> <!-- Hidden input untuk ID -->
		</td>
	</tr>
	<tr>
		<td>Berita</td>
		<td>:</td>
		<td><input type="text" name="berita" value="<?php echo $berita['berita']; ?>"/></td>
	</tr>
	<tr>
		<td>Penulis</td>
		<td>:</td>
		<td><input type="text" name="penulis" value="<?php echo $berita['penulis']; ?>"/></td>
	</tr>
	<tr>
		<td>Tanggal Berita</td>
		<td>:</td>
		<td><input type="text" name="tanggal_berita" value="<?php echo $berita['tanggal_berita']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td>
			<input type="submit" name="tombol" value="Update"/>
			<!-- Tombol Delete -->
			<a href="proses_berita.php?action=delete&id=<?php echo $berita['id']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
				<button type="button">Delete</button>
			</a>
		</td>
	</tr>
</table>
</form>
</body>
</html>
