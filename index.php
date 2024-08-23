<?php 	
include('koneksi.php');
$db = new database();
$berita = $db->tampil_data();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Berita</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-800 p-5">
    <h3 class="text-white text-center text-2xl mb-5">Daftar Berita</h3>
    <a href="tambah_data.php" class="bg-gray-600 text-white py-2 px-4 rounded hover:bg-gray-700 inline-block mb-4">Tambah Data</a>
    <table class="w-full bg-white shadow-lg">
        <thead>
            <tr>
                <th class="bg-gray-600 text-white py-2 px-4 uppercase text-sm">No</th>
                <th class="bg-gray-600 text-white py-2 px-4 uppercase text-sm">Judul</th>
                <th class="bg-gray-600 text-white py-2 px-4 uppercase text-sm">Berita</th>
                <th class="bg-gray-600 text-white py-2 px-4 uppercase text-sm">Penulis</th>
                <th class="bg-gray-600 text-white py-2 px-4 uppercase text-sm">Tanggal Berita</th>
                <th class="bg-gray-600 text-white py-2 px-4 uppercase text-sm">Tindakan</th>
            </tr>
        </thead>
        <tbody>
        <?php
        $no = 1;
        foreach($berita as $row){
        ?>
            <tr class="odd:bg-gray-100 even:bg-gray-200 hover:bg-gray-300">
                <td class="py-2 px-4"><?php echo $no++; ?></td>
                <td class="py-2 px-4"><?php echo $row['judul']; ?></td>
                <td class="py-2 px-4"><?php echo $row['berita']; ?></td>
                <td class="py-2 px-4"><?php echo $row['penulis']; ?></td>
                <td class="py-2 px-4"><?php echo $row['tanggal_berita']; ?></td>
                <td class="py-2 px-4">
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="bg-blue-500 text-white py-1 px-3 rounded hover:bg-blue-700">Perbarui</a>
                    <a href="proses_berita.php?action=delete&id=<?php echo $row['id']; ?>" class="bg-red-500 text-white py-1 px-3 rounded hover:bg-red-700" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
        </tbody>
    </table>
</body>
</html>
