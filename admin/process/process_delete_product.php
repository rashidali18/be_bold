<?php
      session_start();
      include '../common/_dbconnect.php';

      if(isset($_GET['productId'])){
            $productId =$_GET['productId'];
      }


      $delquery="DELETE FROM `addproduct` WHERE productId ='$productId'";
      $res=mysqli_query($conn,$delquery);

      if(isset($res) && $res!=null){
            $_SESSION['delete_msg'] = "Product Deleted Sucessfully!";
      }else{
            $_SESSION['delete_error'] = "Something went wrong!";
      }
      
      header("location:../src/products_data.php");
?>