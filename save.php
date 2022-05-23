<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script.js"></script>
</head>
<body>
    
<?php
include "./connection.php";

$un = $_POST['userName'];
$pass = $_POST['pass'];

$query = "SELECT * FROM customer WHERE username = '".$un."';";

$query_run = mysqli_query($conn,$query);
$check_rows = mysqli_num_rows($query_run) > 0;
if ($check_rows){
    
    while ($row = mysqli_fetch_array($query_run))
    {
        if ($pass == $row["password"]){
            ?>
            <script> 
            let c_id= <?php echo json_encode($row["customerID"]) ?>;
            login(c_id); 
            </script>

            <?php
                session_start();
                $_SESSION['customerID'] = $row['customerID'];
                $_SESSION['login']=true;
            ?>

            <?php
            //login(<?php echo $row["customerID"]
            
            header('Location: products.php');
        }
        else{
            include "./navbar.php";
            ?>
            <h1 style="text-align:center;margin:5px;">Wrong Password</h1> 
            <h2 style="text-align:center;margin:5px;"><a style="text-align:center;margin:5px;" href="login.html">Click here to Login</a></h2>
            <?php
            include "./footer.php";
        }
    }
}
else{
    include "./navbar.php";
            ?>
            <h1 style="text-align:center;margin:5px;">UserName Not found</h1> 
            <h2 style="text-align:center;margin:5px;"><a style="text-align:center;margin:5px;" href="login.html">Click here to Login</a></h2>
            <?php
            include "./footer.php";
}


?>

