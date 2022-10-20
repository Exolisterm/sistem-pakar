<?php
session_start();
if(!isset($_SESSION["username"])){

   echo "<script>
        alert('Anda Telah Logout');
        document.location.href = 'index.php'; 
        </script>";
}



?>