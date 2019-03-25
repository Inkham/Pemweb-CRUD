<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nothing</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="row">
        <div class="col -sm-4"></div>
        <div class="col -sm-4" style="background-color:lavender">
    <form class="form-horizontal" method="POST" action="validasi.php">
        <h1 style="text-align:center">LOGIN</h1> 
        <input type="text" class="form-control" name="username" id="uname" placeholder="Username"><br>
        <input type="password" class="form-control" name="password"0 id="passw" placeholder="Password"><br>
        <div class="col-md-4">
        <input type="submit" class="btn btn-primary" value="kirim">
    </div>
    </form>
    <?php
        if (isset($_GET["username"])&& $_GET["password"]){
            echo "<br>Username  : ".$_GET["username"];
            echo "<br>Password  : ".$_GET["password"];
        }
        ?>
    </div>
    <div class="col -sm-4"></div>
</div>

</body>
</html>