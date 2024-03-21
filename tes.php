<?php
//koneksi database
$server = "localhost";
$user = "root";
$pass = "";
$database = "tb_latihan";

$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

//Jika tombol simapn diklik
if(isset($_POST['bsimpan']))
{
    $simpan = mysqli_query($koneksi, "INSERT INTO tb_mhsw (nim, nama, alamat, prodi)
                                      VALUES ('$_POST[tnim]',
                                             '$_POST[tnama]',
                                             '$_POST[talamat]',
                                             '$_POST[tprodi]')
                                ");
    if($simpan)//simpan
    {
        echo "<script>
        alert('Simpan data sukses!');
        document.location='tes.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Simpan data Gagal!');
        document.location='tes.php';
        </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud2023</title>
    <link rel="stylesheet" type="text/css" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="text-center text-danger">CRUD PHP & MYSQL + BOOTSTRAP</h1>
        <h1 class="text-center text-dark">MUHAMMAD SAFWAN MULIA</h1>
    

    <!--Awal Card From-->
    <div class="card mt-3">
  <div class="card-header bg-primary text-white">
    From Input Data Mahasiswa
  </div>
  <div class="card-body shadow-lg">
    <form method="post" action="">
        <div class="form-group">
            <label class="font-semibold">Nim</label>
            <input type="text" name="tnim" class="form-control shadow p-3" placeholder="Input Nim Anda Disini!!" required>
        </div>
        <div class="form-group">
            <label class="mt-3">Nama</label>
            <input type="text" name="tnama" class="form-control shadow p-3" placeholder="Input Nama Anda Disini!!" required>
        </div>
        <div class="form-group">
            <label class="mt-3">Alamat</label>
             <textarea class="form-control shadow p-3" name="talamat" placeholder="Input alamat anda Disini"></textarea>
        </div>     
        <div class="form-group">
            <label class="mt-3">Program Studi</label>
            <select class="form-control shadow p-3" name="tprodi">
                <option></option>
                <option value="D3-Teknik Informatika">D3-Teknik Informatika</option>
                <option value="D4-Rekayasa Perangkat Lunak">D4-Rekayasa Perangkat Lunak</option>
                <option value="D4-Keamanan Sistem Informasi">D4-Keamanan Sistem Informasi</option>
                <option value="D2-Admisintrasi Jaringan Komputer">D2-Admisintrasi Jaringan Komputer</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success mt-3" name="bsimpan">Simpan</button>
        <button type="reset" class="btn btn-danger mt-3" name="breset">Kosongkan</button>
    </form>
  </div>
</div>
<!--Akhir Card From-->

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

<script type="text/javascript" src="bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
</body>
</html>