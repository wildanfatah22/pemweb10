<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN REGISTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
    <style>
        body {
            padding-top: 5%;
            padding-left: 35%;
            padding-right: 35%;
            background-color: #1f2029;
            font-family: 'unicons';
            color: #c4c3ca;
        }

        .card {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            background-color: #2a2b38;
            background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg');
        }

        .card-header {
            font-family: Viga !important;
            font-size: 40px;
        }

        .btn {
            border-radius: 4px;
            height: 44px;
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            -webkit-transition: all 200ms linear;
            transition: all 200ms linear;
            padding: 0 30px;
            letter-spacing: 1px;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -moz-align-items: center;
            -ms-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            -ms-flex-pack: center;
            text-align: center;
            border: none;
            background-color: #ffeba7;
            color: #102770;
            box-shadow: 0 8px 24px 0 rgba(255, 235, 167, .2);
        }

        .btn:active,
        .btn:focus {
            background-color: #102770;
            color: #ffeba7;
            box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2);
        }

        .btn:hover {
            background-color: #102770;
            color: #ffeba7;
            box-shadow: 0 8px 24px 0 rgba(16, 39, 112, .2);
        }
    </style>
</head>

<body>

    <div class="card">
        <div class="card-header">
            Input Guestbook
        </div>
        <div class="card-body">
            <?php

            if (isset($_GET['pesan'])) {
                if ($_GET['pesan'] == "gagal") {
                    echo "<center>Ada data yang belum diisi!</center>";
                    echo "<br>";
                }
            }
            ?>


            <form method="post" action="gbact.php">
                <div class="form-group">
                    <input type="date" name="posted" class="form-control" id="posted" required>
                </div> <br>

                <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Masukan Nama" required>
                </div> <br>

                <div class="form-group">
                    <input type="text" name="email" class="form-control" id="email" placeholder="Masukan Email" required>
                </div> <br>

                <div class="form-group">
                    <input type="text" name="address" class="form-control" id="address" placeholder="Masukan Alamat" required>
                </div> <br>

                <div class="form-group">
                    <input type="text" name="city" class="form-control" id="city" placeholder="Masukkan Kota" required>
                </div> <br>

                <div class="form-group">
                    <input type="text" name="message" class="form-control" id="message" placeholder="Masukan Pesan" required>
                </div> <br>

                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button type="submit" name="daftar" class="btn">Kirim</button>
                    <input type="button" class="btn" VALUE="Kembali" onClick="history.go(-1);">
                </div>

            </form>
        </div>
    </div>

</body>

</html>