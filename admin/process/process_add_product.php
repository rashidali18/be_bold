<?php
    session_start();
    //connection to database
    include '../common/_dbconnect.php';

    if(isset($_POST['submit']) && $_POST['submit']=='submit'){
        $productname= $_POST['productname'];
        $productDesc= $_POST['productDesc'];
        $productPrice= $_POST['productPrice'];
        $ProductCode=$_POST['ProductCode'];
        $productCat=$_POST['productCat'];
        $productDiscount= $_POST['productDiscount'];
        $ProductStatus= $_POST['ProductStatus'];
        $ProductQty= $_POST['ProductQty'];

        //UPLOADIG FILE CODE STARTS
        $fileName = basename($_FILES['Productimg']['name']);
        $tmp = $_FILES['Productimg']['tmp_name']; 
        $size = $_FILES['Productimg']['size'];         
        $type = $_FILES['Productimg']['type'];
        
        $typeArr = explode("/",$type);
        $newFileName = $typeArr[0].date("Ymdhsi").".".$typeArr[1];
        $arrAllowedTypes = array("jpg","png","jpeg","gif");
        //UPLOADIG FILE CODE END

        //CONDITIONS FOR THE UPLOADING FILE
        if($size > 2097152){
            $_SESSION['msg'] = "File size exceeds the limit";   
            header("location:../src/add_product.php");
        } 
        else if(!in_array($typeArr[1],$arrAllowedTypes)){ 
            $_SESSION['msg'] = "Only Images Allowed";   
            header("location:../src/add_product.php");
        } 
        else if(!move_uploaded_file($tmp,"../assets/uploaded-images/".$newFileName)){
            $_SESSION['msg'] = "Error While Uploading your file";   
            header("location:../src/add_product.php");

        } else {
            //WHEN CONDITIONS FULFILLED STORED THE NAME OF FILE IN DATABASE
            $Productimg = $newFileName;

            $qry="INSERT INTO addproduct( productname, productDesc, productPrice, ProductCode,productCat ,productDiscount, ProductStatus, ProductQty, Productimg) 
                VALUES ( '$productname', '$productDesc', '$productPrice','$ProductCode','$productCat' ,'$productDiscount', '$ProductStatus', '$ProductQty', '$Productimg')";
       
            $res=mysqli_query($conn,$qry);

            if(isset($res) && $res!=null){
                $_SESSION['add_msg'] = "Product Added Sucessfully!";
                header("location:../src/products_data.php");
            }else{
                $_SESSION['add_error'] = "Something went wrong!";
                header("location:../src/add_product.php");
            }
        }
        
     }
          
            
          

   




?>