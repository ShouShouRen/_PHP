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
    echo rand(1, 2000) . "<br>";
    $string = "An apple is red";
    $valueLength = strlen($string);
    print $valueLength . "<br>";
    $list = [123, 324, 435, 564, 324, 64354, 234, 23456];
    echo max($list) . "<br>";
    echo min($list) . "<br>";
    var_dump($list) . "<br>";
    sort($list);
    print_r($list);

    $values = ['sdaf', 234, 'afds', 657, $string];
    $found = in_array($string, $values);
    if ($found) {
        echo "Wow we did it ";
    } else {
        echo "error";
    }
    ?>
</body>

</html>