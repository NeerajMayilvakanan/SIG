<?php
session_start();
$_SESSION['login'] = false;
include "./navbar.php";
include "./connection.php";
?>

<div id="demo" class="carousel slide" data-bs-ride="carousel">
    <!-- Indicators/dots -->
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        <button type="button" data-bs-target="#demo" data-bs-slide-to="3"></button>
    </div>

    <!-- The slideshow/carousel -->
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="Images/store/store1.jpg" alt="Los Angeles" class="d-block" style="width: 100%" height="20%" />
        </div>
        <div class="carousel-item">
            <img src="Images/store/store2.jpg" alt="Chicago" class="d-block" style="width: 100%" height="20%" />
        </div>
        <div class="carousel-item">
            <img src="Images/store/store3.jpg" alt="New York" class="d-block" style="width: 100%" height="20%" />
        </div>
        <div class="carousel-item">
            <img src="Images/store/store4.jpg" alt="New York" class="d-block" style="width: 100%" height="20%" />
        </div>
    </div>

    <!-- Left and right controls/icons -->
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>

<div class="container-fluid m-5">
    <div class="container ">
        <h2 style="text-align: center">Categories</h2>
    </div>
    <div class="container">
        <div class="row m-3 p-2 ms-5">
            <div class="col-md-3 m-5 ">
                <img src="Images/category/dhalls.jpg" class="rounded" alt="dhalls" width="100%" height="100%" />
                <p style="text-align:center;"><b>Dhallls</b></p>
            </div>
            <div class="col-md-3 m-5">
                <img src="Images/category/dailyproducts.webp" class="rounded" alt="Daily Products" width="100%"
                    height="100%" />
                <p style="text-align:center;"><b>Daily Products</b></p>
            </div>
            <div class="col-md-3 m-5">
                <img src="Images/category/snacks.jpg" class="rounded" alt="snacks" width="100%" height="100%" />
                <p style="text-align:center;"><b>Snacks</b></p>
            </div>
        </div>
        <div class="row m-3 ms-5">
            <div class="col-md-3 m-5">
                <img src="Images/category/liquids.jpg" class="rounded" alt="liquids" width="100%" height="100%" />
                <p style="text-align:center;"><b>Liquids</b></p>
            </div>
            <div class="col-md-3 m-5">
                <img src="Images/category/pooja.jpg" class="rounded" alt="Pooja Items" width="100%" height="100%" />
                <p style="text-align:center;"><b>Pooja Items</b></p>
            </div>
            <div class="col-md-3 m-5">
                <img src="Images/category/pet.jpg" class="rounded" alt="pets" width="100%" height="100%" />
                <p style="text-align:center;"><b>Pet Supplies</b></p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid" style="background-color: #B6B6B6;">

    <div class="container mb-5 mt-5">
        <img src="Images/store/emi.jpg" alt="emi" width="100%">
    </div>
</div>

<?php
include "./footer.php";
?>