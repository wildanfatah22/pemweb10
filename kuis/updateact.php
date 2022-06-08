<?php
    include 'koneksi.php';
    $id = $_POST['id'];
    $posted = date($_POST['posted']);
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address  = $_POST['address'];
    $city  = $_POST['city'];
    $message  = $_POST['message'];
    mysqli_query($conn, "UPDATE guestbook SET posted= '$posted', name= '$name', email= '$email', address= '$address', city = '$city', message = '$message' WHERE guestbook.id = '$id' ");
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('User berhasil diubah');
    window.location.href='resultgb.php';
    </script>");
?>