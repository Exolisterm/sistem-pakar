<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website sistem pakar">
    <meta name="author" content="mr k">
    <link rel="icon" href="image/icon.png">

    <title>Sistem Pakar</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
</head>
<body>
	<?php
		include ('navbaruser.php');
	?>
	
    <main role="main">
      <form method="post" action="question.php">
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="image/bg-1.gif" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Sistem Analisa Modal dan Laba.</h1>
                <p>Sistem pakar Analisa Modal dan Laba dalam sebuah produk di dunia usaha menggunakan forward Chaining. </p>
                <p><button type="submit" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="image/pakistan_keylogger.gif" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Sistem Pakar.</h1>
                <p>Dalam penanganan Usaha Kecil dan Menengah dapat dikategorikan sebagai masalah Artificial Intelegent khususnya sistem pakar, karena pemecahan masalah tersebut dapat dilakukan dengan mengembangkan sistem yang dapat berperan sebagai seorang ahli. </p>
                <p><button type="submit" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="image/58038897-167f0280-7ae6-11e9-94eb-88e880a25f0f.gif" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Basis Pengetahuan.</h1>
                <p>Basis pengetahuan sistem ini berisi fakta-fakta yang dibutuhkan oleh sistem, sedangkan mesin inferensi digunakan untuk menganalisa fakta-fakta yang dimasukkan pengguna hingga dapat ditentukan suatu kesimpulan yang sesuai dengan
                permasalahannya.</p>
                <p><button type="submit" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div> <!-- Carousel --></form>

      <!---------------- MODAL ----------------->
     





      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/2019_02_19_65792_1550566098._large.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Modal Usaha</h2>
            <p>Modal usaha merupakan bagian inti dari pembiayaan aset dan operasional.</p>
            <p>Pengertian modal usaha secara umum adalah semua sumber daya keuangan yang dimiliki oleh individu atau badan usaha untuk meningkatkan usahanya dan membangun stabilitas keuangan.</p>
            <p>Dengan kata lain, semua usaha/bisnis harus memiliki modal untuk membeli aset dan mempertahankan operasinya.</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/In-Profit-Business.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Laba</h2>
            <p>Istilah lain yang kerap digunakan untuk menggantikan kata laba adalah keuntungan ataupun profit. Menilik dari sudut pandang ilmu ekonomi murni, definisi laba adalah peningkatan kekayaan seorang investor sebagai hasil dari penanaman modal setelah dikurangi biaya-biaya terkait penanaman modal tersebut. Namun, jika melihat dari sudut pandang akuntansi, laba merupakan selisih harga penjualan dengan biaya produksi.</p>
            <p>Pada umumnya, laba kerap kali menjadi ukuran yang digunakan untuk menilai berhasil atau tidaknya manajemen suatu perusahan atau badan usaha yaitu dengan melihat laba yang telah diperoleh dari perusahaan tersebut.</p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/Laporan.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Laporan Laba/Rugi</h2>
            <p>Laporan laba rugi adalah salah satu laporan keuangan yang harus dibuat oleh setiap perusahaan. Karena ini yang menjadi acuan terkait kondisi finansial yang terjadi di saat itu. Tak hanya itu, laporan ini juga harus dibuat sedetail mungkin jika perusahaan tersebut adalah perusahaan besar atau mutinasional. Hal ini bertujuan jika ketika dilakukan evaluasi, keterangan datanya lebih menyeluruh dan bisa dipertanggungjawabkan</p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


<div id="contact">
  <div style="-moz-border-radius: 10px; -webkit-border-radius: 10px; background-color: #f3f3f3; border-left: 5px solid #2288dd; border-radius: 10px; padding: 10px; t-align: left;">
  <div class="container">
    <div class="col-md-8">
      <div class="row">
        <div class="section-title">
          <h2>Get In Touch</h2>
          <p>Please fill out the form below to send us an email and we will get back to you as soon as possible.</p>
        </div>
        <form action="" method="post" >
          <div class="row">    
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Nama" required="">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required="">
                <p class="help-block text-danger"></p>
              </div>
            </div> 
          </div>
          <div class="form-group">
            <input type=text name="komen" id="komen" class="form-control" rows="4" placeholder="Komentar" required="">
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <input type="submit" name="submit" id="submit" value="submit">
          <input type="reset" name="cancel" id="cancel" value="cancel"></td> 
        </form>
      </div>
    </div>
    <br><br>
    <div class="col-md-3 col-md-offset-1 contact-info">
      <div class="contact-item">
        <h4>Contact Info</h4>
        <p><span>Address</span></p>
          <p>Jl. Sidodadi, Pengasinan, Kedungwringin, Patikraja, Kabupaten Banyumas, Jawa Tengah 53171</p>
      </div>
      <div class="contact-item">
        <p><span>Phone</span> +62 183 456 1234</p>
      </div>
      <div class="contact-item">
        <p><span>Email</span> INNOVA@company.com</p>
      </div>
    </div>
  </div>
</div>

<?php
require 'functions.php' ;
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
  //cek apakah data berhasil di tambahkan atau tidak
  if (tambah($_POST) > 0 ){
    echo "  <script>
        alert('data berhasil ditambahkan');
        document.location.href = 'index1.php';
      </script>
      ";
  }else {
    echo "
      <script>
        alert('data gagal ditambahkan');
        document.location.href = 'index1.php';

      </script>
      ";
  }
}
?>

    </main>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</html>