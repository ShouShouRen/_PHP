<?php
extract($_POST);
$connection = mysqli_connect('localhost', 'root', '', 'loginapp');
if ($connection) {
    echo "we are connected";
} else {
    die("Database connection failed");
}

$query = "SELECT * FROM users";
$result = mysqli_query($connection, $query);
if (!$result) {
    die("Query Failed");
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
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
            ?>

                <pre>
            <?php
                print_r($row);
            ?>
            </pre>
            <?php } ?>
        </div>
    </div>
    <?php

    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>