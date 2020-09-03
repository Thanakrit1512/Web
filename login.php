<?php
require_once './connect_db.php';
session_start();

if ($_POST) {
    $sql = "SELECT * FROM Users Where usernm='" . $_POST["username"] . "' and passwd='" . $_POST["password"] . "' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        Header("Location: ../main.php");
    } else {
        Header("Location: ../index.php");
    }
}


mysqli_close($conn);