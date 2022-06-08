<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($conn, "DELETE FROM `guestbook` WHERE guestbook.id = '$id'");
echo ("<script LANGUAGE='JavaScript'>
    window.alert('User berhasil dihapus');
    window.location.href='resultgb.php';
    </script>");
?>