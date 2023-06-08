
<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="../assets/css/addproduct.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&family=Pacifico&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&family=Pacifico&family=Permanent+Marker&display=swap');
    
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    scroll-behavior: smooth;
    font-family: 'Jost', sans-serif;
    list-style: none;
    text-decoration: none;
    
}



.logo{
    list-style: none;
    text-decoration: none;
    padding: 100px;
}
.nav{
  margin-bottom: 60px;
}





.content{
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
  z-index: -1;
  width: 100%;
  padding: 0 30px;
  color: #1b1b1b;
}
.content div{
  font-size: 40px;
  font-weight: 700;
}
.row{

font-family:       sans-serif;
font-style:        arial;
font-weight:        500;
line-height:        1.2;
color:              null;
padding:           100px;
align-items:    center;
justify-content: space-between;
    padding: 20px 10%;


}
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark nav-fill w-100 " style="background-color:#ebbbc2"; margin-bottom="100px">
        <a class="navbar-brand" href="">
            
            <strong>
              
               <img id="logopic"src="../assets/images/face.png" alt="">
               <span class="logo "> Be Bold </span>
               
          
          </strong>
        </a>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav">
           <li class="nav-item ">
            <a class="nav-link text-light " href="../src/add_product.php">ADD PRODUCT</a>
          </li>
          <li class="nav-item ">
              <a class="nav-link text-light" href="../src/products_data.php">PRODUCTS LIST</a>
          </li>
          <li class="nav-item ">
              <a class="nav-link text-light" href="../src/display_products.php"> VIEW PRODUCTS</a>
          </li>
        
        </ul>
            
        </div>
      </nav>

  

      <!-- form -->
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
                <header class="header">ADD PRODUCTS</header>
                <header class="subHeader">Welcome to <b>BE BOLD!</b> </header>

                <form action="../process/process_add_product.php" method="POST" enctype="multipart/form-data">
                    <!-- <div class="inputContainer">
                        <label class="label" for="productId"><span>Product
                                ID</span></label>
                        <input type="text" class="input"name="productId" id="productId" placeholder="Enter product ID">
                    </div> -->
                    <div class="inputContainer">
                        <label class="label" for="Productname"><span>Product
                                Name</span></label>
                        <input type="text" class="input"name="productname" id="productname" placeholder="Enter product name" >
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="productDescription"><span> Product Description</span></label>
                        <textarea name="productDesc" id="productDesc" cols="50" rows="5"></textarea>
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="ProductPrice"><span>Product
                                Price</span></label>
                        <input type="text" class="input"name="productPrice" id="productPrice" >
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="ProductCode"><span>Product
                                Code</span></label>
                        <input type="text" class="input" name="ProductCode" id="ProductCode" >
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="ProductStatus"><span>Product Categoery</span></label>
                        <Select class="input" name="productCat" id="productCat" required>
                            <option value="none" selected hidden>-- select a category -- </option>
                            <option value="Cleaner" >Moisture</option>
                            <option value="Cleaner" >Cleaner</option>
                            <option value="Serum" >Serum</option>
                            <option value="Toner" >Toner</option>
                            <option value="Eye Cream" >Eye Cream</option>
                            <option value="Lotion" >Lotion</option>
                        </Select>
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="productDiscount"><span>Product
                                Discount</span></label>
                        <input type="text" class="input" name="productDiscount"id="productDiscount" >
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="ProductStatus"><span>Product
                                Stocks</span></label>
                                <label>Yes</label>
                        <input type="radio"  name="ProductStatus" id="ProductStatus" value="1">
                                <label>No</label>
                         <input type="radio"  name="ProductStatus" id="ProductStatus" value="0">
                    </div>

                    <div class="inputContainer">
                        <label class="label" for="ProductQty"><span>Product
                                Quantity</span></label>
                        <input type="number" class="input" name="ProductQty"id="ProductQty" >
                    </div>
                    <div class="inputContainer">
                        <label class="label" for="Productimg"><span>Product
                                Image</span></label>
                        <input type="file" class="input" name="Productimg" id="Productimg" >
                    </div>

                   
                    <button type="submit" class="LoginButton"name="submit" id="submit" value="submit">submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

</body>
</html>