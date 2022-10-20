<?php
// koneksi ke database
$conn = mysqli_connect ("localhost", "root", "", "sispak");

function query($query){
	global $conn;
	$result = mysqli_query($conn,$query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
} 

function tambah($data)
{
//<div style=position:absolute;top : 0;buttom : 0; left : 0; right :0; background-color:black; font-size:100px; color:red; text-align : center;> HAHAHAHA ANDA TELAH DI HACK!!!!!</div>
	global $conn;
	//ambil data dari tiap elemen data form
	//html...supaya tidak bisa dihack orang
	$nama = htmlspecialchars($data["nama"]);
	$email = htmlspecialchars($data["email"]);
	$komen = htmlspecialchars($data["komen"]);

	//upload gambar
	
	//$gambar = htmlspecialchars($data["gambar"]); untuk type data file

	//query insert data
	$query = "INSERT INTO komentar VALUES ('','$nama','$email','$komen')";
	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}



function hapus($id_komentar){
	global $conn;
	mysqli_query($conn, "DELETE FROM komentar WHERE id_komentar = $id_komentar");
	return mysqli_affected_rows($conn);
 }
 

 function cari($keyword){
 	$query = "SELECT * FROM komentar WHERE 
 			nama LIKE '%$keyword%' OR 
 			email LIKE '%$keyword%' OR
 			komen LIKE '%$keyword%'
 			";
 		return query($query);
 }
 ?>
