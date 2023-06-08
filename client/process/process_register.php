<?php
   session_start();
   include "../common/_dbconnect.php";

   if(isset($_POST["submit_signup"] )){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if($password != $confirm_password){
      $_SESSION['error_signup'] = "Password & confrim password does not match";
      header("location:../src/register.php");
      
    }else{

      
    $qry_check = "SELECT * FROM users WHERE username = '$username' ";

    $res_check = mysqli_query($conn,$qry_check);

      if(mysqli_num_rows($res_check)==1){
            $_SESSION['error_signup'] = "Username Already Exists";
            header("location:../src/register.php");

      } else {
            $qry = "INSERT INTO users(username,password) 
            VALUES('$username','$password')";

            $res = mysqli_query($conn,$qry);

            if(isset($res) && $res != ""){
               $_SESSION['msg_signup'] = "Sign up sucessfully";
               header("location:../src/login.php");
            } else{
               $_SESSION['error_signup'] = "Error in Query";
               header("location:../src/register.php");
            }

      }
   }

   } 


?>
