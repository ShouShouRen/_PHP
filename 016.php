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
    function init()
    {
        say_Something();
        echo "<br>";
        calculate();
    }
    function calculate()
    {
        echo 34 + 32;
    }
    function say_Something()
    {
        echo "hello student, do yout like this class ? yes? okay grate";
    }
    init();
    ?>
</body>

</html>