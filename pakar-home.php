<?php
require 'functions.php';
$komentar = query("SELECT * FROM komentar ");

//tombol cari ditekan
if(isset($_POST["cari"])){
  $komentar = cari($_POST["keyword"]);
}
//ORDER BY id ASC = dari kecil kebesar
//ambil data dari tabel mahasiswa
//$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
 
//ambil data (fetch) mahasiswa dari object result
//mysqli_fetch_row()//mengembalikan array numeric
//mysqli_fetch_assoc()//mengembalikan array associative
//mysqli_fetch_array()//mengembalikan keduanya
//mysqli_fetch_object()

//while ($mhs = mysqli_fetch_assoc($result) )
//{
  //var_dump($mhs);
//}

  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="image/icon.png">

    <title>Dashboard Pakar</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-dark fixed-top bg-info flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Dashboard Pakar</a>
      <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
          <a class="nav-link" href="proseslogout.php">Sign out</a>
        </li>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <?php include 'pakar-sidebar.php';?>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
          </div>
          <div class="card">
			  <h5 class="card-header">Komentar Pengunjung</h5>
			  <div class="card-body">
<h6>Pencarian Data Komentar</h6>
<form action="" method="post">
  <input type="text" name="keyword" size="40" autofocus placeholder="masukan keyword pencarian.." autocomplete="off">
  <button type="submit" name="cari" >Cari</button>
</form>
<br>
			  	<table class="table table-dark" border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>No.</th>
    <th>Aksi</th>
    <th>Nama</th>
    <th>E-Mail</th>
    <th>Komentar</th>
  </tr>
  <?php $i = 1; ?>
  <?php foreach($komentar as $row =>$value) :  ?>

  <tr>
    <td><?= $i; ?></td>
    <td>
      <a href="hapus.php?id_komentar=<?= $value ["id_komentar"]; ?>" onclick="return confirm('apakah anda yakin ingin mengahpus?');">hapus</a>
    </td>
  <td><?= $value ["nama"]; ?></td>
    <td><?= $value ["email"]; ?></td>
    <td><?= $value ["komen"]; ?></td>

  </tr>
  <?php $i++; ?>
<?php endforeach; ?>
</table>  
			  </div>
			</div>
        </main>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>    
    <script src="https://getbootstrap.com/docs/4.1/assets/js/vendor/popper.min.js"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>
  </body>
</html>