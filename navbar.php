<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MN^2 Store</title>
    <link rel="icon" type="image/x-icon" href="mov03.png">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/c26cd2166c.js"></script>
    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">     -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="script.js"> </script>
</head>

<style>
      h5{
          color: azure;
      }
      *{
            box-sizing: border-box;
            
          
        }
</style>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">MN^2 Store</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gallery</a>
        </li>  
        <li class="nav-item">
          <a class="nav-link" href="#">Contact us</a>
        </li>  
      </ul>
      <ul class="navbar-nav ms-auto">

      <?php
        $lo = $_SESSION['login'];
        if($lo==false){
          
      ?>
      <li class="nav-item dropdown login">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"><span class="glyphicon glyphicon-log-in"></span> Login / Sign Up </a>
          <ul class="dropdown-menu">
            <li class="nav-item"><a class="dropdown-item" href="login.html">Log in</a></li>
            <li class="nav-item"><a class="dropdown-item" href="signup.html">Sign up</a></li>
          </ul>
        </li>
        <?php
        }
        else{
          ?>
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="navigateToCart()">Cart</a>
          </li> 
          <li class="nav-item">
            <a class="nav-link" href="#" onclick="logout()">Log Out</a>
          </li> 
        <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
