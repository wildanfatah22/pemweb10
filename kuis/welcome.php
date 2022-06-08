<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: index.php");
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
  <title>Home</title>
</head>

<body>


  <div class="bg text-center">
    <div class="centered">

      <p class="firstLine"> Welcome, <?php echo "" . $_SESSION['username'] . ""; ?> </p>
      <p class="secondLine"><?php echo " " . date("l, d/m/Y") . "<br>" ?></p>
      <a href="inputgb.php" class="btn btn-primary">Tambah Guestbook</a>
      <a href="resultgb.php" class="btn btn-secondary">List Guestbook</a>
      <br><br>
      <a href="logout.php">Logout</a>

    </div>

  </div>

</body>

</html>