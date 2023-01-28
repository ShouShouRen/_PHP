<?php
extract($_POST);
if (isset($_POST["submit"])) {
    // echo "yes we got it";

    $connection = mysqli_connect('localhost', 'root', '', 'loginapp');
    if($connection){
        echo "we are connected";
    }else{
        die("Database connection failed");
    }

    if ($username && $password) {
        echo $username;
        echo $password;
    } else {
        echo "no";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="col-sm-6">
            <form action="login.php" method="post">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <input type="submit" value="submit" name="submit" class="btn btn-primary my-1">
            </form>
        </div>
    </div>
    <?php

    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>