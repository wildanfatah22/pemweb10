<?php
$host		="localhost";
$username	="root";
$password	="";
$database	="db_siswa";

include 'koneksi.php';


$sql= "CREATE TABLE tb_siswa(
id_siswa INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
nama VARCHAR(255) NOT NULL,
kelas VARCHAR(100)NOT NULL,
alamat VARCHAR(255) NOT NULL
)";


if(mysqli_query($conn, $sql)){
	echo "Table created succesfully";
} else{
	echo "Error creating table". mysqli_error($conn);
}

mysqli_close($conn); 
?>