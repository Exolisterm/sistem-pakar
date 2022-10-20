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
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include ('navbaruser.php'); ?>
<main class="batas-atas">
        <div class="card text-white bg-info mb-3">
          <h5 class="card-header">Analisis Modal dan Laba</h5>
          <div class="card-body text-center ukuran-30">
          	 <form method="post" action="index1.php" enctype="multipart/form-data" role="form">
          	 	<form method="post" action="index1.php">
        <table>

<?php
$harga = $_POST['harga'];
$modal = $_POST['modal'];
$pcs = $_POST['pcs'];
$pcs1 = $_POST['pcs1'];

error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
if ($_POST['submit1'])
{
if($harga > $pcs1){
	$moda = $modal;
	$pc = $pcs;
	$pc1 = $moda/$pc;
	$laba = $harga-$pc1;
	$laba1 = $laba*$pc;
	echo "Anda Memiliki Modal Harian Sebesar = Rp. " . $moda . "<br>";
	echo "Modal Tersebut untuk Membuat Produk Sebanyak = " . $pc . " pcs" . "<br>";
	echo "Dari Modal Tersebut Dapat Ditemukan Modal 1 Produknya Sebesar = Rp. " . $pc1 . "<br>";
	echo "Anda Mendapat LABA Harian Sebesar = Rp. " . $laba1 . "<br>";	
}
elseif($pcs1 > $harga){
	$moda = $modal;
	$pc = $pcs;
	$pc1 = $moda/$pc;
	$rugi = $pc1-$harga;
	$rugis = $rugi*$pc;
	echo "Anda Memiliki Modal Harian Sebesar = Rp. " . $moda . "<br>";
	echo "Modal Tersebut untuk Membuat Produk Sebanyak = " . $pc . " pcs" . "<br>";
	echo "Dari modal tersebut dapat ditemukan modal 1 produknya = Rp. " . $pc1 . "<br>";
	echo "Anda Mendapat RUGI Sebesar = Rp. " . $rugis . "<br>";
	echo "<br>";
	echo "Silakan Koreksi Kembali Harga dan Modal Produk Anda " . "<br>";
}
else{
	echo "Tidak laba tidak rugi";
}
}
elseif ($_POST['submit2'])
{
if($harga > $pcs1){
	$moda = $modal*30;
	$pc = $pcs*30;
	$pc1 = $moda/$pc;
	$laba = $harga-$pc1;
	$laba1 = $laba*$pc;
	echo "Anda Memiliki Modal Bulanan Sebesar = Rp. " . $moda . "<br>";
	echo "Modal Tersebut untuk Membuat Produk Sebanyak = " . $pc . " pcs" . "<br>";
	echo "Dari Modal Tersebut Dapat Ditemukan Modal 1 Produknya Sebesar = Rp. " . $pc1 . "<br>";
	echo "Anda Mendapat LABA Bulanan Sebesar = Rp. " . $laba1 . "<br>";	
}
elseif($pcs1 > $harga){
	$moda = $modal*30;
	$pc = $pcs*30;
	$pc1 = $moda/$pc;
	$rugi = $pc1-$harga;
	$rugis = $rugi*$pc;
	echo "Anda Memiliki Modal Bulanan Sebesar = Rp. " . $moda . "<br>";
	echo "Modal Tersebut untuk Membuat Produk Sebanyak = " . $pc . " pcs" . "<br>";
	echo "Dari modal tersebut dapat ditemukan modal 1 produknya = Rp. " . $pc1 . "<br>";
	echo "Anda Mendapat RUGI Bulanan Sebesar = Rp. " . $rugis . "<br>";
	echo "<br>";
	echo "Silakan Koreksi Kembali Harga dan Modal Produk Anda " . "<br>";
}
else{
	echo "Tidak laba tidak rugi";
}
}

?>

				<div class="modal-footer">
                  <button type="submit" class="btn btn-primary center-block">Kembali</button>
                </div>
        </table>
    </form> 
</div>
</div>
</main>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>