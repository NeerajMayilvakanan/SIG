<?php
session_start();

include "./navbar.php";

include "./connection.php";
?>

<div class="container-fluid m-5">

<div class="container m-3" style="text-align:center;">
    <h3 style="text-align:center;">Total Cart Value : Rs.<span id="total">0</span></h3>
</div>

</div>

<div class="container mt-3">
    <div class="row m-3">

    <?php

    //$customer_ID = "<script>document.write(localStorage.getItem('customerID'))</script>";
    //session_start();
    $customer_ID = $_SESSION['customerID'];
    $query = "SELECT * FROM cart WHERE customerID='$customer_ID';";
    $query_run = mysqli_query($conn,$query);
    $check_rows = mysqli_num_rows($query_run) > 0;
    $total=0;

    if($check_rows){
        while ($row = mysqli_fetch_array($query_run))
        {
            $productID = $row['productID'];
            $q1="SELECT * FROM product WHERE productID='$productID'";
            $q1_run = mysqli_query($conn,$q1);
            $r=mysqli_fetch_array($q1_run);
            $amt=($r['price']*$row['quantity']);
            $total = $total + $amt;
            ?>
                
                <div class="card m-3" style="width:300px;">
                <img src="Images/<?php echo $r['image'];?>" class="card-img-top" alt="Product Image" height="250px">
                    <div class=card-body>
                        
                        <h2 class="card-title" > <?php echo  $r['productName']; ?> </h2>
                        <p class="card-text" style="font-size:14px;">  Category : <?php echo $r['category']; ?>
                        <br><br>Price : Rs.<?php echo $r['price']; ?><br><br>Added Quantity : <?php echo $row['quantity']; ?>
                        <br><br>Total Amount : Rs.<?php echo $amt ?>
                           </p>
                        <br>
                        
                    </div>
                </div>    
                
            <?php
        }
    }
    else{
        echo "<h2>No Products Found</h2>";
    }
    ?>

    </div>
</div>
<script>
    document.getElementById("total").innerHTML = <?php echo $total ?>
</script>

<?php
    if($total>0){
        ?>
        <div class="container m-5" style="text-align:center;">
            <button class="btn btn-success m-4 btn-lg">Buy Now</button>
    </div>
        <?php
    }
?>

<?php
include "./footer.php";
?>