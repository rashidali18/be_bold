<?php
    session_start();
    include '../common/_dbconnect.php';

    if(isset($_POST['update']) && $_POST['update']=='update'){
        $productId= $_POST['productId'];
        $productname= $_POST['productname'];
        $productDesc= $_POST['productDesc'];
        $productPrice= $_POST['productPrice'];
        $ProductCode=$_POST['ProductCode'];
        $productCat=$_POST['productCat'];
        $productDiscount= $_POST['productDiscount'];
        $ProductStatus= $_POST['ProductStatus'];
        $ProductQty= $_POST['ProductQty'];

        $fileName = basename($_FILES['Productimg']['name']);

        if($fileName!=null){
            
            //UPLOADIG FILE CODE END
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
                header("location:..src/add_product.php");
            } 
            else if(!in_array($typeArr[1],$arrAllowedTypes)){ 
                $_SESSION['msg'] = "Only Images Allowed";   
                header("location:..src/add_product.php");
            } 
            else if(!move_uploaded_file($tmp,"../assets/uploaded-images/".$newFileName)){
                $_SESSION['msg'] = "Error While Uploading your file";   
                header("location:..src/add_product.php");
    
            } else {
                //WHEN CONDITIONS FULFILLED STORED THE NAME OF FILE IN DATABASE
                $Productimg = $newFileName;


                $sql="UPDATE addproduct 
                    SET productname ='$productname', 
                        `productDesc`='$productDesc', 
                        `productPrice`='$productPrice', 
                        `ProductCode`='$ProductCode',
                        `productCat`='$productCat',
                        `productDiscount`='$productDiscount', 
                        `ProductStatus`='$ProductStatus', 
                        `ProductQty`='$ProductQty', 
                        `Productimg`='$Productimg' 
                    WHERE productId=$productId";
           }
        }else{
            $sql="UPDATE addproduct 
            SET productname ='$productname', 
                `productDesc`='$productDesc', 
                `productPrice`='$productPrice',
                `ProductCode`='$ProductCode', 
                `productCat`='$productCat',
                `productDiscount`='$productDiscount', 
                `ProductStatus`='$ProductStatus', 
                `ProductQty`='$ProductQty'
            WHERE productId=$productId";
        }

        $res=mysqli_query($conn,$sql);

        if(isset($res) && $res!=null){
            $_SESSION['update_msg'] = "Product Updated Sucessfully!";
            header("location:../src/products_data.php");
        }else{
            $_SESSION['update_error'] = "Something went wrong!";
            header("location:../src/add_product.php");
        }
    }
?>
