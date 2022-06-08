<?php
$host		="localhost";
$username	="root";
$password	="";
$database	="db_siswa";

include 'koneksi.php';

$sql = "INSERT INTO tb_siswa (id_siswa, nama, kelas, alamat)
VALUES (1, 'Budi Sutanto', '1MM3', 'Sedati Gede'), (2, 'Dita Anggraini', '1MM2', 'Rungkut'), (3, 'Riska Nur Aini', '3MM1', 'Wonocolo')";


if (mysqli_query($conn, $sql)) {
	echo "New record created successfully"; 
} else {
	echo "Error insert new record: ".mysqli_error($conn); 
}
mysqli_close($conn); 
?>