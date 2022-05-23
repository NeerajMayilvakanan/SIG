<?php
include "./connection.php";


$cusName= $_POST['customerName'];
$contact = $_POST['contact'];
$un = $_POST['userName'];
$pass = $_POST['pass'];

$query="INSERT INTO customer(customerName,username,password,contact) VALUES('$cusName','$un','$pass','$contact')";
$query_run = mysqli_query($conn,$query);

mysqli_close($conn);
header('Location: index.php');


?>