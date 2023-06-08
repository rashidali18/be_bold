<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update page</title>
    <link rel="stylesheet" href="../assets/css/addproduct.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
    <?php
        if(isset($_SESSION['add_error'])){
            echo $_SESSION['add_error'];
            unset($_SESSION['add_error']);
          }
      ?>

  <div class="LoginPageContainer">
    <div class="LoginPageInnerContainer">
        <div class="ImageContianer">
            <img src="https://i.postimg.cc/kMNz5grj/flower.png" class="GroupImage">
        </div>
        <div class="LoginFormContainer">
            <div class="LoginFormInnerContainer">
                <!-- <div class="LogoContainer">
                    <img src="https://i.imgur.com/jz5bPWn.png" class="logo">
                </div> -->
                <header class="header">EDIT PRODUCTS</header>
                <header class="subHeader">Welcome to <b>BE BOLD!</b> </header>

                <?php
                        include '../common/_dbconnect.php';

                        $productId= $_GET['productId'];
                    
                        $upd= "SELECT * FROM addproduct WHERE productId = '$productId'";
                        $res=mysqli_query($conn,$upd);

                        if(mysqli_num_rows($res) == 1){

                            $data=mysqli_fetch_array($res);

                ?>

                <form action="../process/process_update_product.php" method="POST" enctype="multipart/form-data">
                    <div class="inputContainer">
                        <!-- <label class="label" for="productId"><span>Product ID</span></label> -->
                        <input type="hidden" class="input" value="<?php echo $productId ?>" name="productId" id="productId" placeholder="Enter product ID">
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="Productname"><span>Product
                                Name</span></label>
                        <input type="text" class="input"name="productname"  value="<?php echo $data['productname']?>"    id="productname" placeholder="Enter product name">
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="productDescription"><span> Product Description</span></label>
                        <textarea name="productDesc" id="productDesc" cols="50" rows="5"><?php echo $data['productDesc']?></textarea>
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="ProductPrice"><span>Product
                                Price</span></label>
                        <input type="text" class="input" value="<?php echo $data['productPrice']?>"    name="productPrice" id="productPrice" >
                    </div>

                    <div class="inputContainer">
                        <label class="label" for="ProductCode"><span>Product
                                Code</span></label>
                        <input type="text" class="input" value="<?php echo $data['ProductCode']?>"  name="ProductCode" id="ProductCode" >
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="ProductStatus"><span>Product Categoery</span></label>
                        <Select class="input" name="productCat" id="productCat" required>
                            <option value="none" selected hidden <?php if($data['productCat']=="none"){ ?> selected <?php } ?> >-- select a category -- </option>
                            <option value="Moisture" <?php if($data['productCat']=="Moisture"){ ?> selected <?php } ?> >Moisture</option>
                            <option value="Cleaner" <?php if($data['productCat']=="Cleaner"){ ?> selected <?php } ?> >Cleaner</option>
                            <option value="Serum" <?php if($data['productCat']=="Serum"){ ?> selected <?php } ?> >Serum</option>
                            <option value="Toner" <?php if($data['productCat']=="Toner"){ ?> selected <?php } ?> >Toner</option>
                            <option value="Eye Cream" <?php if($data['productCat']=="Eye Cream"){ ?> selected <?php } ?> >Eye Cream</option>
                            <option value="Lotion" <?php if($data['productCat']=="Lotion"){ ?> selected <?php } ?> >Lotion</option>
                        </Select>
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="productDiscount"><span>Product
                                Discount</span></label>
                        <input type="text" class="input" value="<?php echo $data['productDiscount']?>"name="productDiscount"id="productDiscount" >
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="ProductStatus"><span>Product
                                Status</span></label>
                                <label>Yes</label>
                        <input type="radio"  name="ProductStatus" id="ProductStatus" value="1" <?php if($data['ProductStatus']==1) { ?> checked <?php } ?>>
                                <label>No</label>
                         <input type="radio"  name="ProductStatus" id="ProductStatus" value="0" <?php if($data['ProductStatus']==0) { ?> checked <?php } ?>>
                    </div>

                    <div class="inputContainer">
                        <label class="label" for="ProductQty"><span>Product
                                Quantity</span></label>
                        <input type="number" class="input" value="<?php echo $data['ProductQty']?>"name="ProductQty"id="ProductQty" >
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="Productimg"><span>Product
                                Image</span></label>
                       <td> <input type="file" class="input"value="<?php echo $data['Productimg'];?>" name="Productimg" id="Productimg" ><img src="../assets/uploaded-images/<?php echo $data['Productimg']?>"height="100px" width="100px"></td>
                    </div>

                   
                    <button type="submit" class="LoginButton"name="update" id="update" value="update">Update</button>
                </form>

                <?php
                        
                        }
                        else{
                            echo "Invalid ID";
                        }
                // ?>
            </div>
        </div>
    </div>
</div>

