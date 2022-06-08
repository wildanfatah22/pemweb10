<?php
    include 'koneksi.php';
    $posted = $_POST['posted'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address  = $_POST['address'];
    $city  = $_POST['city'];
    $message  = $_POST['message'];
    mysqli_query($conn, "INSERT INTO guestbook VALUES('','$posted','$name','$email','$address','$city','$message')");
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('User berhasil ditambahkan');
    window.location.href='welcome.php';
    </script>");
?>