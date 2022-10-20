<?php
require 'functions.php';

$id_komentar = $_GET["id_komentar"];


if(hapus($id_komentar) > 0){
	echo "
		<script>
			alert('data berhasil dihapus');
			document.location.href = 'pakar-home.php';

		</script>
		";
}else{
	echo "
		<script>
			alert('data gagal dihapus');
			document.location.href = 'pakar-home.php';

		</script>
		";
}

?>