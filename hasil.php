<?php
//koneksi database
$server = "localhost";
$user = "root";
$pass = "";
$database = "tb_latihan";

$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Awal Card Tabel-->
<div class="card mt-3 shadow-lg">
  <div class="card-header bg-success text-white">
    Daftar Mahasiswa
  </div>
  <div class="card-body">
    <table class="table table-border table-striped">
        <tr>
            <th>No.</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Program Studi</th>
            <th>Aksi</th>
        </tr>
        <?php
            $no = 1;
            $tampil = mysqli_query($koneksi, "SELECT * from tb_mhsw order by id_mahasiswa desc");
            while($data = mysqli_fetch_array($tampil)):
        
        ?>
        <tr>
            <td><?=$no++;?></td>
            <td><?=$data['nim']?></td>
            <td><?=$data['nama']?></td>
            <td><?=$data['alamat']?></td>
            <td><?=$data['prodi']?></td>
            <td>
                <a href="#" class="btn btn-warning">Edit</a>
                <a href="#" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
        <?php endwhile;?>
    </table>
  </div>
</div>
</div>
<!--Akhir Card Tabel-->
</body>
</html>