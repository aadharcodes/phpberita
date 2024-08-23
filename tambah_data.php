<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah berita</h3>
<hr/>
<form method="post" action="proses_berita.php?action=add">
<table>
	<tr>
		<td>judul</td>
		<td>:</td>
		<td><input type="text" name="judul"/></td>
	</tr>
	<tr>
		<td>nama berita</td>
		<td>:</td>
		<td><input type="text" name="berita"/></td>
	</tr>
	<tr>
		<td>penulis</td>
		<td>:</td>
		<td><input type="text" name="penulis"/></td>
	</tr>
	<tr>
		<td>tanggal berita</td>
		<td>:</td>
		<td><input type="text" name="tanggal_berita"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>