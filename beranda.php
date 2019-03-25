<?php
    session_start();
    include "koneksi.php";
    if (isset($_SESSION["username"]) && !empty($_SESSION["username"])) {
        $username = $_SESSION["username"];
    } else {
        header ("location: index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="main.js"></script>
</head>
<body>
welcome <?= $username ?>
<br><br>
<a class="btn btn-primary" href="keluar.php">keluar</a>

<b class="btn btn-primary" href="tambah.php">Tambah Video</b>
<br><br>
<table>
<thead>
    <th>Title</th>
    <th>Category</th>
    <th>Pilihan</th>
</thead>
<tbody>
    <?php
    $query = "SELECT * FROM video";
    $result = $conn->query($query);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()){?>
        <tr>
        <td><?= $row["title"]; ?></td>
        <td><?= $row["categ"];?></td>
        <td>
            <a href="hapus.php?id=<?= $row['id']; ?>">hapus</a>
            <a href="edit.php?id=<?= $row['id']; ?>">edit</a>
        </td>
        </tr>
        <?php   }
        }
        ?>
</tbody>
</table>
</body>
</html>