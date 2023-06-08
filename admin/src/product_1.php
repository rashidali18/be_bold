<?php
require '../common/navbar.php';
?>
<?php
  include '../common/_dbconnect.php';
 ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
        <meta charset="UTF-8">
        <meta hhtp-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width,intial-scale=1.0">
       <!-- ==Title=== -->
       <title>Product Detail page</title>
       <!-- Bootstrap -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
       <!-- ====CSS==== -->
       <link rel="stylesheet" href="../assets/css/productdetail.css">
       <!-- Importing Poping fonts -->
       < <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&family=Roboto+Serif:wght@500&display=swap" rel="stylesheet">
       <!-- font awesome -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
      
    </head>
    <body>
    <section class="product page">
    <?php
      $productId = $_GET['productId'];

      $sql="SELECT * FROM addproduct 
            WHERE productId = '$productId'
            ORDER BY productId ASC";

      $all_products=mysqli_query($conn,$sql);
      $num=mysqli_num_rows($all_products);
      
      if($num>0)
      {
          while($row = mysqli_fetch_array($all_products))
          {
    ?>
              <div class="product-details"> 
                  <!-- ====img=== -->
            <div class="product-img">
            <img style="width: 603px" ; src="../assets/uploaded-images/<?php echo $row['Productimg'];?>">

              <!-- Social -->
                  <div class="img-social-bar">
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
                  <a href="#"><i class="fa-brands fa-youtube"></i></a>
                  </div>
          </div>
            <!--  ======text======== -->
            <div class="product-text">
              <!-- category -->
              <span class="product-category"> Skin Care & Makeup Products</span>
            <!-- title -->
            <h3> Be Bold</h3>
            <h5><?php echo $row['productname'] ?></h5>
            <!---price-->
            <span class="product-price"><?php echo $row['productPrice'] ?></span> 
            <!-- details -->
            <p><?php echo $row['productDesc'] ?></p>
              <p>Product Quantity: <?php echo $row['ProductQty'] ?> </p>
          <div class="product-buttons">
              <button class="btn btn-primary" type="button">Add to cart</button>
              
          </div>
            
              </div>
        <?php
                }
            }
        ?>
    </section>
   </body>
  
  </html>
  