<?php
$host = "sql6.freemysqlhosting.net";
$user = "sql6494464";
$password = "mgbYRKR3Sb";
$db = "sql6494464";

$conn = mysqli_connect($host, $user, $password, $db);

if (mysqli_connect_error()) {
    echo "error";
}