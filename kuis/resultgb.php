<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>List Guestbook</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        body {
            min-height: 100vh;
            background-color: #1f2029;
        }

        .display-4 {
            font-family: Viga;
        }
    </style>
</head>

<body>
    <div class="container py-5">
        <header class="text-center text-white">
            <h1 class="display-4">Guestbook List</h1>
        </header>
        <div class="row py-5">
            <div class="col-lg-10 mx-auto">
                <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">
                        <div class="table-responsive">
                            <table id="example" style="width:100%" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Posted</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>City</th>
                                        <th>Message</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "koneksi.php";
                                    $sqlquery = mysqli_query($conn, 'SELECT * FROM guestbook');
                                    while ($data = mysqli_fetch_array($sqlquery)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $data['id'] ?></td>
                                            <td><?php echo $data['posted'] ?></td>
                                            <td><?php echo $data['name'] ?></td>
                                            <td><?php echo $data['email'] ?></td>
                                            <td><?php echo $data['address'] ?></td>
                                            <td><?php echo $data['city'] ?></td>
                                            <td><?php echo $data['message'] ?></td>
                                            <td class="update"><a href="update.php?id=<?php echo $data['id']; ?>">Update /</a>
                                                <a href="delete.php?id=<?php echo $data['id']; ?>">/ Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                    
                                </tbody>
                            </table>
                            <inpput type="button" class="btn" VALUE="Kembali" onClick="history.go(-1);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>