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
    <script>
  function sum() {
    var txtFirstNumberValue = document.getElementById('txt1').value;
    var txtSecondNumberValue = document.getElementById('txt2').value;
    var result = parseInt(txtFirstNumberValue) / parseInt(txtSecondNumberValue);
    if (!isNaN(result)) {
      document.getElementById('txt3').value = result;
    }
  }
</script>
</head>
<body>
    <?php include ('navbaruser.php'); ?>
    
    <main class="batas-atas">
        <div class="card text-white bg-info mb-3">
          <h5 class="card-header">Analisis Modal dan Laba</h5>
          <div class="card-body text-center ukuran-30">
            <div class="container">
            <form method="post" action="harian.php" enctype="multipart/form-data" role="form">

                <?php
                include ('koneksi.php');
                $kode='m1';
                session_start();
                echo "<p>Hello, Welcome to Sistem Pakar </p>";   
                ?>

                <form method="post" action="harian.php">
        <table>
            <div class="form-group">
            <tr>
                <td>Modal</td><td>:</td>
                <td></td>
                <td><input type="text" name="modal" class="form-control" placeholder="Rp. " id="txt1" onkeyup="sum();"></td>
            </tr>
        </div>
            <tr>
                <td>Produk</td><td>:</td>
                <td></td>
                <td><input type="text" name="pcs" class="form-control" placeholder="pcs" id="txt2" onkeyup="sum();"></td>
            </tr>
            <tr>
                <td>Modal 1 pcs</td><td>:</td>
                <td></td>
                <td><input readonly type="text" name="pcs1" class="form-control" placeholder="Rp. " id="txt3" onkeyup="sum();"></td>
            </tr>
            <tr>
            <tr>
                <td>Harga Jual</td><td>:</td>
                <td></td>
                <td><input type="text" name="harga" class="form-control" placeholder="Rp. "></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit1" value="Analisa Harian" class="btn btn-primary center-block"></td>
                <td></td>
                <td><input type="submit" name="submit2" value="Analisa Bulanan" class="btn btn-primary center-block"></td>
            </tr>
        </table>
    </form>                

                <label for="exampleFormControlInput1"></label>
                
            
                    
                   
                    
                </div>
                
</div>
            </form>

          </div>
        </div>
    



    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>