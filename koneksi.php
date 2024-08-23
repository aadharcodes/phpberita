<?php  
class database{

	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "berita";
	var $koneksi = "";

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
		if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi, "select * from berita");
		$hasil = []; 
		while ($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	function tambah_data($judul, $berita, $penulis, $tanggal_berita)
	{
		mysqli_query($this->koneksi, "insert into berita values ('','$judul','$berita','$penulis','$tanggal_berita')");
		// menambahkan alert
		// echo "<script>alert('data anda berhasil ditambahkan! tekan ok untuk melihat'); window.location = '.php' </script>";
	}

	function get_by_id($id)
	{
		$query = mysqli_query($this->koneksi, "select * from berita where id='$id'");
		return $query->fetch_array();
	}

	function update_data($judul, $berita, $penulis, $tanggal_berita, $id)
	{
		$query = mysqli_query($this->koneksi, "update berita set judul='$judul', berita='$berita', penulis='$penulis', tanggal_berita='$tanggal_berita' where id='$id'");
	}

	function delete_data($id)
	{
		$query = mysqli_query($this->koneksi, "delete from berita where id='$id'");
	}
}
?>
