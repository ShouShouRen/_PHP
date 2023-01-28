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
    if (3 > 1) {
        echo "I love php <br>";
    } elseif (20 < 10) {
        echo "I don't love php";
    } else {
        echo "I hate php";
    }

    for ($i = 0; $i <= 10; $i++) {
        echo $i . "<br>";
    }

    $value = 10;
    switch ($value) {
        case 10:
            echo "this is the anwer 10";
            break;
        case 20:
            echo "20";
            break;
        case 30:
            echo "30";
            break;
    }
    ?>
</body>

</html>