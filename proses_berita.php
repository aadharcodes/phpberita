<?php 
include('koneksi.php');
$koneksi = new database();

$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data($_POST['judul'],$_POST['berita'],$_POST['penulis'],$_POST['tanggal_berita']);
	header('location:index.php');
}
elseif($action=="update")
{
	$koneksi->update_data($_POST['judul'],$_POST['berita'],$_POST['penulis'],$_POST['tanggal_berita'],$_POST['id']);
	header('location:index.php');
}

elseif($action=="delete")
{
	$id_berita = $_GET['id'];
	$koneksi->delete_data($id_berita);
	header('location:index.php');
}
?>