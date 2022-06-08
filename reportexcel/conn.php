<?php
// Deklarasi variabel untuk nama server, username, password, dan database
$servername	="localhost";
$username	="root";
$password	="";
$database	="pdb";

// Perintah PHP untuk akses ke database
$conn=mysqli_connect($servername, $username, $password, $database);
?>