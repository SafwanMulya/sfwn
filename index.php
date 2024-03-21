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
    <title>Portfolio</title>
    <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fontawesome-free-6.5.1-web/css/all.min.css">
</head>
<body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white shadow-sm">
        <div class="container">
          <a class="navbar-brand fw-bold text-primary" href="#"><i class="fa-solid fa-user-tie"></i> SafwanMulya </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#abaout">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!--Tampilan Home-->
    <section id="home" class="mb-5">
        <div class="container p-4">
            <div class="row mt-5">
                <div class="col-12 col-md-6 mt-5 d-flex justify-content-center align-items-center">
                    <div class="">
                        <p class="fw-bold">Hallo Semua🤚</p>
                        <h3 class="text-primary fw-bold">Nama Saya Safwan</h3>
                        <p>Mahasiswa | <span class="text-blck">Web Development</span></p>
                        <p class="text-blck">Teknologi hanyalah alat. Namun, untuk menjadikan anak-anak bisa saling bekerjasama dan termotivasi, guru adalah yang paling penting. - Bill Gates</p>
                        <a href="https://www.instagram.com/sfwnmlya?utm_source=qr&igsh=MXU2NmpxeDFjNDF5ZA=="><button class="btn btn-primary btn-radius">Hubungi Saya</button></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 mt-5 d-flex justify-content-center align-items-center">
                 <div class="fw-semibold">
                        <div class="">
                            <img src="img/20231224151033534-removebg-preview.png" class="img-radius shadow-blue" width="300px">
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
    <!--Tampilan Home-->

    <!--Abaout-->
    <section id="abaout" class="abaout">
        <div class="container py-5 p-4 mb-5">
            <div class="text-center mb-5">
                <h2 class="text-primary">Tentang Saya</h2>
                <p>Dibawah ada beberapa tentang saya dan media sosial saya pribadi,</p>
            </div>
            <div class="row mt-5 py-5">
                <div class="col-12 col-md-6 mb-3">
                    <h2>Biodata Saya</h2>
                    <p class="text-blck">Nama saya muhammad safwan mulia,saya asli dari bengkalis dan sekarang saya sedang menempuh pendidikan jenjang d3-teknik informatika di politeknik negeri bengkalis</p>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <h2>Media Sosial</h2>
                    <p class="text-blck">Ini adalah beberapa media sosial yang sering saya gunakan,Mungkin ini bisa membuat anda lebih kenal dekat dengan saya</p>
                    <div class="icon">
                       <ul>
                           <li><a href="https://www.instagram.com/sfwnmlya?utm_source=qr&igsh=MXU2NmpxeDFjNDF5ZA=="><i class="fa-brands fa-instagram lebar"></i></a></li>
                           <li><a href="https://wa.me/qr/7TR67QX5RWETM1"><i class="fa-brands fa-whatsapp lebar"></i></a></li>
                           <li><a href="https://vm.tiktok.com/ZSNWtoGTH/"><i class="fa-brands fa-tiktok lebar"></i></a></li>
                           <li><a href=""><i class="fa-brands fa-telegram lebar"></i></a></li>
                           <li><a href=""><i class="fa-brands fa-github lebar"></i></a></li>
                       </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Abaout-->

    <!--portfolio-->
    <section id="portfolio" class="portfolio putih">
        <div class="container py-5 p-4">
            <div class="text-center">
                <h2 class="text-primary">Portfolio</h2>
                <p class="">Ini adalah beberapa project yang pernah saya buat dengan html css js bootstrap dan tailwindcss</p>
            </div>
            <div class="row mt-5 mb-5">
                <div class="col-12 col-md-6 mb-3">
                    <img src="img/Screenshot (144).png" class="rounded shadow col-12 col-md-12 mb-3 mt-4" width="500px" alt="">
                    <h3>Project Tugas Khir ABD</h3>
                    <p class="text-blck">Ini adalah project tugas akhir semster3 saya sebelum UAS yang dimana project ini adalah tentang aplikasi penjualan voucher online dengan php</p>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <img src="img/Screenshot (145).png" class="rounded shadow col-12 col-md-12 mb-3 mt-4" width="500px" alt="">
                    <h3>Project Tugas Khir ABD</h3>
                    <p class="text-blck">Ini adalah tampilan admin yang dimana fungsinya untuk menambahkan barang dan kategori.</p>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <img src="img/Screenshot (146).png" class="rounded shadow col-12 col-md-12 mb-3 mt-4" width="500px" alt="">
                    <h3>Portfolio Pribadi</h3>
                    <p class="text-blck">Ini adalah portfolio saya pribadi yang dimana saya membuatnya dengan html.,css,js dan bootstrap  </p>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <img src="img/Screenshot (147).png" class="rounded shadow col-12 col-md-12 mb-3 mt-4" width="500px" alt="">
                    <h3>Prtfolio Pribadi</h3>
                    <p class="text-blck">Ini adalah portfolio saya yang lama,dan ini saya membuatnya dengan html ,css,js dan tailwind.css dimana saya melihat referensi dari yt sandika galih</p>
                </div>
            </div>
        </div>
    </section>
    <!--portfolio-->

    <!--Contact-->
    <section id="contact" class="">
        <div class="container py-5 p-3">
            <div class="">
                <h3 class="text-center text-primary">Hubungi Kami</h3>
                <form method="post" action="">
                    <input type="text" name="tnama_pengunjung" class="form-control mt-5 shadow" placeholder="Masukkan Nama Anda" required>
                    <input type="email" name="temail_pengunjung"  class="form-control mt-3 shadow" placeholder="Masukkan Alamat Email Anda" required>
                    <textarea name="tpesan_pengunjung" class="form-control mt-3 shadow"  cols="30" rows="10" placeholder="Tuliskan Pesan/Saran Anda" required></textarea>
                 
                        <button type="submit" class="btn btn-primary mt-3 shadow" name="bsimpan">Kirim</button>
                        <button type="reset" class="btn btn-danger mt-3 shadow" name="breset">Kosongkan</button>

                    
                   
                </form>
            </div>
    </section>
    <!--Contact-->
    <!--Footer-->
    <footer class="bg-dark p-3">
        <hr class="full-width-line mt-5">
        <div class="container">
            <div class="row text-white">
                <div class="col-12 col-md-4 icon1 mt-5">
                    <h2>Muhammad Safwan Mulia</h2>
                    <p><i class="fa-solid fa-school"></i> &nbsp;Politeknik Negeri Bengkalis</p>
                    <p><i class="fa-solid fa-building-columns"></i> &nbsp;Jurusan Teknik Informatika</p> 
                    <p><i class="fa-solid fa-envelope"></i> &nbsp;safwanmulia@gmail.com</p>
                    <p><i class="fa-solid fa-map-pin"></i> &nbsp;Bengkalis</p>
                </div>
                <div class="col-12 col-md-4 icon1 text-decoation mt-5">
                    <h2>Coding learning website</h2>
                    <a href="https://getbootstrap.com/docs/5.0/getting-started/introduction/"><p>Bootstrap</p></a>
                    <a href="https://fontawesome.com/"><p>Fontawesome</p></a>
                    <a href="https://www.dicoding.com/blog/apa-itu-programmer-hal-yang-wajib-dikuasai/"><p>Prorammer</p></a>
                    <a href="https://campus.quipper.com/majors/id-teknik-informatika"><p>Teknik Informatika</p>
                    </a>
                </div>
                <div class="col-12 col-md-4 icon icon1 mt-5 text-decoation">
                    <h2>Tautan</h2>
                    <a href="#home"><p>Home</p></a>
                    <a href="#abaout"><p>Abaout</p></a>
                    <a href="#portfolio"><p>Portfolio</p></a>
                    <a href="#contact"><p>Contact</p></a>
                </div>
            </div>
            
            <div class="icon mt-5 d-flex justify-content-center align-items-center">
                <ul>
                    <li><a href="https://www.instagram.com/sfwnmlya?utm_source=qr&igsh=MXU2NmpxeDFjNDF5ZA=="><i class="fa-brands fa-instagram lebar1"></i></a></li>
                    <li><a href="https://wa.me/qr/7TR67QX5RWETM1"><i class="fa-brands fa-whatsapp lebar1"></i></a></li>
                    <li><a href="https://vm.tiktok.com/ZSNWtoGTH/"><i class="fa-brands fa-tiktok lebar1"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-telegram lebar1"></i></a></li>
                    <li><a href="https://github.com/"><i class="fa-brands fa-github lebar1"></i></a></li>
                </ul>
            </div>
            <div class="text-center text-white">
                <p>Dibuat Oleh Muhammad Safwan Mulia✌ Menggunakan Bootstrap-5</p>
            </div>
        </div>
    </footer>
    <!--Footer-->
     

     
    <script type="text/javascript" src="js/jquery-3.7.1.min.js"></script>
    <script type="text/javascript" src="fontawesome-free-6.5.1-web/js/all.min.js"></script>
    <script type="text/javascript" src="bootstrap-5.3.2-dist/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</body>
</html>