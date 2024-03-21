<?php
   //koneksi database
$server = "localhost";
$user = "root";
$pass = "";
$database = "db_portfolio";

$koneksi = mysqli_connect($server, $user, $pass, $database)or die(mysqli_error($koneksi));

//Jika tombol simapn diklik
if(isset($_POST['bsimpan']))
{
    $simpan = mysqli_query($koneksi, "INSERT INTO tb_user (nama_pengunjung, email_pengunjung, pesan_pengunjung)
                                      VALUES ('$_POST[tnama_pengunjung]',
                                             '$_POST[temail_pengunjung]',
                                             '$_POST[tpesan_pengunjung]')
                                ");
    if($simpan)//simpan
    {
        echo "<script>
        alert('Data Berhasil Dikirim!');
        document.location='index.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Data Gagal Dikirim!');
        document.location='index.php';
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laporan pengunjung</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container py-5">
        <div class="col-12 col-md-12">
        <div class="card shadow">
            <div class="card-header bg-success text-white">Laporan Data Pengunjung</div>
            <div class="col-12 p-2">
        <table class="table table-striped">
            <tr class="fw-bold">
                <td>No</td>
                <td>Nama</td>
                <td>Email</td>
                <td>Pesan</td>
                <td>Action</td>
            </tr>
            <?php
            $no = 1;
            $tampil = mysqli_query($koneksi, "SELECT * from tb_user order by id_pengunjung desc");
            while($data = mysqli_fetch_array($tampil)):
        
            ?>
            <tr>
                <td><?=$no++;?></td>
                <td><?=$data['nama_pengunjung']?></td>
                <td><?=$data['email_pengunjung']?></td>
                <td><?=$data['pesan_pengunjung']?></td>
                <td>
                    <a href="#" class="btn btn-info text-white form-control mb-2">Edit</a>
                    <a href="#" class="btn btn-danger form-control">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </table>
        </div>
        </div>
        </div>
    </div>
    <script src="bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
</body>
</html>