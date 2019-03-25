<?php
    include "koneksi.php";

    if(isset($_POST['tambah'])){
        $nama = $_POST['title'];
        $kategory = $_POST['categ'];

        $query = "INSERT INTO video(title, categ) VALUES ('$nama', '$categ')";
        if($conn->query($query)){
            header("location: beranda.php");
        } else {
            echo "Error : ".$conn->error;
        }
    }

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Edit Video </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <div class="container-fluid as-full">
        <div class="row as-full d-flex justify-content-center">
            <div class="col-md-4 align-self-center">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2 class="text-center">Tambah Video</h2>
                        </div>
                        <br>

                        <form action="" method="POST">
                            <input type="text" name="title" placeholder="Name" id="title" class="form-control">
                            <br>
                            <input type="text" name="categ" placeholder="Category" id="categ"
                                class="form-control">
                            <br>
                            <input type="submit" name="tambah" value="Tambah" class="btn btn-primary btn-block">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>