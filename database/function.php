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

function CreateUsers()
{
    global $connection;
    extract($_POST);
    $username = $_POST["username"];
    $password = $_POST["password"];
    mysqli_real_escape_string($connection, $username);
    mysqli_real_escape_string($connection, $password);
    $query = "INSERT INTO users(username,password) VALUES ('$username','$password')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query Failed");
    }
}
function DeleteRows()
{
    global $connection;
    extract($_POST);
    $query = "DELETE FROM users WHERE id = $id";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query Failed");
    } else {
        echo "Delete it!";
    }
}
function ReadRows()
{
    global $connection;
    extract($_POST);
    $query = "SELECT * FROM users";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die("Query Failed");
    }
    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}
