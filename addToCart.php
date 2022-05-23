<?php
include "./connection.php";

$text = $_POST["textData"];

$data=json_decode($text);
$length = count($data);

$i = 0;
while($i < $length){
    $customer_id = $data[$i][0];
    $product_id = $data[$i][1];
    $quantity = $data[$i][2];
    
    echo $product_id, $quantity;
    $query="INSERT INTO cart VALUES('$customer_id','$product_id','$quantity')";
    $query_run = mysqli_query($conn,$query);
    $i = $i +1;
}
mysqli_close($conn);
header('Location: carts.php');

?>