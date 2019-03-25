<?php
    include "koneksi.php";

    $id = $_GET['id'];
    $query = "SELECT * FROM video WHERE id = $id";
    $result = $conn->query($query);
    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $oldName = $row['title'];
            $oldCategory = $row['categ'];
        }
    }

    if(isset($_POST['update'])){
        $nama = $_POST['title'];
        $kategory = $_POST['categ'];

        $updateQuery = "UPDATE video SET nama='$nama', kategory='$kategory' WHERE id=$id";
        if($conn->query($updateQuery)){
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
    <title>Page Title</title>
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
                            <h2 class="text-center">Edit Video</h2>
                        </div>
                        <br>

                        <form action="" method="POST">
                            <input type="text" name="nama" placeholder="Name" id="nama" value="<?php echo $oldName?>"
                                class="form-control">
                            <br>
                            <input type="text" name="categ" placeholder="Category" id="categ"
                                value="<?php echo $oldCategory?>" class="form-control">
                            <br>
                            <input type="submit" name="update" value="Update" class="btn btn-primary btn-block">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>