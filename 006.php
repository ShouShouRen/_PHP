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
    $numberList = array(23, 54, 56, 76, 23, '234', '435', '<h1>hello</h1>');
    // $numberList = ['name', 23, 34];
    echo $numberList[0];
    echo "<br>";
    echo $numberList[1];
    echo "<br>";
    echo $numberList[2];
    echo "<br>";
    echo $numberList[3];
    echo "<br>";
    echo $numberList[4];
    echo "<br>";
    print_r($numberList);
    foreach($numberList as $list){
        echo $list."<br>";
    }
    ?>
</body>

</html>