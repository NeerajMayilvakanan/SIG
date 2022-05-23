<?php
session_start();

include "./navbar.php";

include "./connection.php";
?>
<div class="container" style="text-align:center;">
    <marquee>Finally click the submit button to add all your products to cart</marquee>
</div>


<div class="container mt-3">
    <div class="row m-3">

    <?php

    //$customer_ID = "<script>document.write(localStorage.getItem('customerID'))</script>";
    //session_start();
    $customer_ID = $_SESSION['customerID'];
    $query = "SELECT * FROM product;";
    $query_run = mysqli_query($conn,$query);
    $check_rows = mysqli_num_rows($query_run) > 0;

    if($check_rows){
        while ($row = mysqli_fetch_array($query_run))
        {
            ?>
                
                <div class="card m-3" style="width:300px;">
                <img src="Images/<?php echo $row['image'];?>" class="card-img-top" alt="Product Image" height="250px">
                    <div class=card-body>
                        
                        <h2 class="card-title" > <?php echo  $row['productName']; ?> </h2>
                        <p class="card-text" style="font-size:14px;">  Category : <?php echo $row['category']; ?>
                        <br><br>Price : Rs.<?php echo $row['price']; ?><br><br>Available Quantity : <?php echo $row['Quantity'] ?>
                           </p>
                        <br>

                        <input type="number" min="1" max="25" id="<?php echo $row['productID']  ?>">

                            <!-- <input type="button" value="Add to Cart" class="mt-3" onclick="addCart( 'greengram' , 30 ) /> --> -->
                        <input type="button" value="Add to Cart" class="mt-3" onclick='addCart(<?php echo $row["productID"] ?> , <?php echo $row["price"] ?>, <?php echo $customer_ID ?>)' />

                        
                        

                        

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


<div class="container" style="text-align:center;">
<form action="addToCart.php" method="post">
<input type="text" class="hidden" id="textData" name="textData">
<button type="submit" class="p-3 m-3" onClick="finalSubmit()">Submit</button>
</form>
</div>

<?php

include "./footer.php";
mysqli_close($conn);
?>

