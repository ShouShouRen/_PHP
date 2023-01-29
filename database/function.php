<?php
include("db.php");
function showAllData()
{
    global $connection;
    extract($_POST);
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query Failed");
    }
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        echo "<option value='$id'>$id</option>";
    }
}

function UpdateTable()
{
    global $connection;
    extract($_POST);
    $query = "UPDATE users SET username = '$username',password = '$password' WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("error");
    }
}
