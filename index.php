 <?php
 include 'koneksi.php';

//cek user sudah login
session_start();
   if (!isset($_SESSION['id'])) {
  header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemograman Web</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <!-- Navbar -->
    <nav>
        <div class="kiri">
            <h1 class="blue-text">Artikel Seputar Teknologi</h1>
        </div>
        <div class="kanan">
            <ul>
                <li>
                    <a href="">
                        Home
                    </a>
                </li>
                <li>
                    <a href="">
                        Contact
                    </a>
                </li>
                <li>
                    <a href="login.php">
                        Login
                    </a>
                </li>
                <li>
                    <a href="Logout.php">
                        Logout
                    </a>
                </li>
                <li>
                    <a class="btn-outlined" href="Register.php">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End of Navbar -->
    <!-- Header -->
    <header>
        <div class="kiri">
            <h1>Pengertian Tentang HTML</h1>
            <p>HyperText Markup Language (HTML) adalah sebuah bahasa markup yang digunakan untuk membuat sebuah halaman web, menampilkan berbagai informasi di dalam sebuah Penjelajah web Internet dan formating hypertext sederhana yang ditulis kedalam berkas format ASCII agar dapat menghasilkan tampilan wujud yang terintegerasi.</p>
            <br>
            <a href="" class="btn">Selanjutnya....</a>
        </div>
        <div class="kanan">
            <img src="img/web_design.png" alt="" width="60%">
        </div>
    </header>
    <!-- End of Header -->
    <!--Resep  -->
    <section id="resep">
        <h1>Daftar Artikel Seputar Teknik Informatika</h1>
        <div class="card-wrapper">
            <div class="card">
                <img src="img/1.jpg" class="card-image">
                <div class="card-content">
                    <h2>Title</h2>
                    <i class="fa fa-star orange-text"></i>
                    <i class="fa fa-star orange-text"></i>
                    <i class="fa fa-star orange-text"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span>3 of 5</span>
                </div>
            </div>
            <div class="card">
                <img src="img/2.jpg" class="card-image">
                <div class="card-content">
                    <h2>Title</h2>
                    <i class="fa fa-star orange-text"></i>
                    <i class="fa fa-star orange-text"></i>
                    <i class="fa fa-star orange-text"></i>
                    <i class="fa fa-star orange-text"></i>
                    <i class="fa fa-star"></i>
                    <span>4 of 5</span>
                </div>
            </div>
            <div class="card">
                <img src="img/3.png" class="card-image">
                <div class="card-content">
                    <h2>Title</h2>
                    <i class="fa fa-star orange-text"></i>
                    <i class="fa fa-star orange-text"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span>2 of 5</span>
                </div>
            </div>
            <div class="card">
                <img src="img/4.jpg" class="card-image">
                <div class="card-content">
                    <h2>Title</h2>
                    <i class="fa fa-star orange-text"></i>
                    <i class="fa fa-star orange-text"></i>
                    <i class="fa fa-star orange-text"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span>3 of 5</span>
                </div>
            </div>
            <div class="card">
                <img src="img/5.png" class="card-image">
                <div class="card-content">
                    <h2>Title</h2>
                    <i class="fa fa-star orange-text"></i>
                    <i class="fa fa-star orange-text"></i>
                    <i class="fa fa-star orange-text"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <span>3 of 5</span>
                </div>
            </div>
            <div class="card">
                <img src="img/6.jpg" class="card-image">
                <div class="card-content">
                    <h2>Title</h2>
                   <h4>komputer media maya</h4>
                </div>
            </div>
        </div>
        <br>
        <a href="" class="btn">Lihat Lainnya</a>
    </section>
    <!-- End of Resep -->
    <!-- Newsletter -->
    <section id="newsletter">
        <h1>Subscribe for the newsletter</h1>
        <br>
        <form>
            <input type="text" placeholder="Masukkan email">
            <a class="btn" href="">Subscribe</a>
        </form>

        <div class="">
            <h2 class="blue-text">Recipe</h2>
            <p>© 2018 Universitas Teknologi Yogyakarta</p>
        </div>
        <div class="kanan">
            <div class="sosmed">
                <a href="" class="fa fa-facebook">
                </a>
                <a href="" class="fa fa-twitter">
                </a>
                <a href="" class="fa fa-instagram">
                </a>
            </div>
        </div>
    
    </section>
</body>

</html>