<?php
session_start();
$_SESSION["message"] = "this is a session value";
$name = "the-name";
$value = 100;
$expiration = time() + (60 * 60 * 24 * 7);
setcookie($name, $value, $expiration);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET["source"])) {
        echo $_GET["source"] . "<br>";
    }
    ?>
    <a href="practic.php?source=30134">30134</a>
    <?php
        if(isset($_COOKIE["the-name"])){
            echo $_COOKIE["the-name"];
        }
        $_SESSION['message'];
        if(isset($_SESSION["message"])){
            echo $_SESSION["message"];
        }
    ?>
</body>

</html>