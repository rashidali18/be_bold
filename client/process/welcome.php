<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <?php 
        if($_SESSION['username']=="admin")
        {

    ?>
            <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our admin panel.</h1>
            <p>
                <a href="../../admin/src/products_data.php" class="btn btn-success">Open Admin panel</a><br><br>
                <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a><br><br>
                <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a><br>
            </p>
    <?php
        }else
        {
    ?>
            <h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
            <p>
                <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a><br><br>
                <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a><br>
            </p>

    <?php
        }
    ?>
</body>
</html>