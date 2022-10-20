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




function hapus($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM users WHERE id = $id");
	return mysqli_affected_rows($conn);
 }
 

 function cari($keyword){
 	$query = "SELECT * FROM users WHERE 
 			name LIKE '%$keyword%' OR 
 			username LIKE '%$keyword%' OR
 			email LIKE '%$keyword%' OR
 			password LIKE '%$keyword%'
 			";
 		return query($query);
 }
 ?>
