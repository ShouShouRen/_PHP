<?php
if (isset($_POST["submit"])) {
    // echo "yes it works";
    $username = $_POST['username'];
    $password = $_POST['password'];
    // echo $username;
    // echo $password;
    $name = array("Edwin", "Student", "Peter", "Row", "Jay");
    $minimun = 5;
    $maximun = 10;
    if (strlen($username) < $minimun) {
        echo "Username has to be longer than five";
    } else if (strlen($username) > $maximun) {
        echo "Username can't be longer than ten";
    }
    if (!in_array($username, $name)) {
        echo "Sorry your are not allowed";
    } else {
        echo "Welecome";
    }
}
?>