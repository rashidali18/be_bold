
<html> 
    <style>
        *{ /*apply to all*/ 
            margin:0px;
            padding:0px;
            box-sizing: border-box;
            font-family: 'Roboto Serif', serif;
        }
        a{
            text-decoration: none;
        }
        ul{
            list-style : none;    
           }
            body{
                background-color: #f3f3f3;
            }
            /*===product-page==== */
            .product-details{
                max-width: 1200px;
                width:90%;
                display:grid;
                grid-template-columns:1fr 1fr;
                margin:50px auto;
                
            }
            .product-img{
                background-color: #e3e3e3;
                position: relative; 
                width: 100%;
                overflow: hidden;
            }
            
            .product-text{
                background-color: #ffff;
                padding: 100px;
            }

            .img-social-bar{
                z-index: 101;
                position:absolute;
                left: 0px;
                top: 0px;
                background-color:#ffff;
                display :flex;
                flex-direction: column;
                justify-content:center;
                align-items:center;
                padding:20px 10px;
                box-shadow: 2px 15px 30px rgba(0,0,0,0.08);
            }
            .img-social-bar a{
                color:#5e5e5e;
                margin: 20px 10px;
                transition: all ease 0.3s;
            }
            .img-social-bar a:hover{
                color:#181818;
            }
            .product-text .product-category{
                color: #5e5e5e;
                font-size:0.9rem;
            }
            .product-text h3{
                color: #252525;
                font-size: 2.4rem;
                font-weight: 600;
                margin:10px 0px;
            }
            .product-text .product price{
                font-size: 1.6rem;
                color: #252525;
                font-weight:500;
            
            }
            .product-text p{
                font-size: 0.9rem;
                letter-spacing: 1px;
                color: #5e5e5e;
                margin: 30px 0px;
            }
            .product-buttons{
                display: grid;
                grid-template-columns: 1fr 1fr;
                margin: 30px 0px;
                grid-gap: 20px;
            }
            .product-buttons a{
                width: 100%;
                height: 45px;
                display: flex;
                justify-content: center ;
                align-items: center;
                text-transform:uppercase;
                font-weight: 600;
                letter-spacing: 0.5px;
                font-size: 0.9rem;
                border-radius: 4px;
            }
            .product-buttons .add-bag-btn{
                background-color: #181818;
                color:#ffffff;
            }
            
    </style>
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
       <link rel="stylesheet" href="../../assets/css/productdetail.css">
       <link rel="stylesheet" href="../assets/css/products.css">
       <link rel="stylesheet" href="css/style.css/">
       <!-- Importing Poping fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,900&family=Roboto+Serif:wght@500&display=swap" rel="stylesheet">
       <!-- font awesome -->
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
      
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
    
    #headtext{
        color: #994c58;
       font-family: 'Permanent Marker', cursive;
       
    }
    .logo{
        font-family: 'pacifico', cursive;
        font-size: medium;
        padding-right: 150px;
      }
      #logopic{
        margin-left: 100px;
        width: 40px;
      }
      
    
    
      </style>
    <body>
    <?php
         include '../common/_dbconnect.php';
      ?>

    <?php include '../common/nav.php' ?>;
    
    <section class="product page">
    <?php
      $productId = $_GET['productId'];
      $productCat = $_GET['productCat'];

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
            <img style="width: 603px" ; src="../../admin/assets/uploaded-images/<?php echo $row['Productimg'];?>">

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
            <!-- Category -->
            <span>Product Category: <?php echo $row['productCat'] ?> </span> <br> <br>
            <!---price-->
            <span class="product-price">Rs: <?php echo $row['productPrice'] ?></span> 
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

    
    <!-- Related -->
    <section class="trending" id="trending">
        <div class="center-text">
           <h2>RELATED <span>PRODUCTS</span></h2>
        </div>
        <div class="product">
            <div class="row" >
                <?php
                    $sql="SELECT * FROM addproduct 
                          WHERE productCat = '$productCat' 
                          AND productId != '$productId'
                          ORDER BY productId ASC";
                    $all_products=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($all_products);
                    
                    if($num>0)
                    {
                        while($row = mysqli_fetch_array($all_products))
                        {
                ?>
                            <div class="col-4 pb-4">
                                <img width="200" height="200" src="../../admin/assets/uploaded-images/<?php echo $row['Productimg'];?>">
                                <div class="heart-icons">
                                    <i class='bx bx-heart' ></i>
                                </div>
                                <div class="rating">
                                    <i class='bx bx-star' ></i>
                                    <i class='bx bx-star' ></i>
                                    <i class='bx bx-star' ></i>
                                    <i class='bx bx-star' ></i>
                                    <i class='bx bxs-star-half' ></i>
                                </div>
                                <div class="product-name">
                                    <h5><?php echo $row['productname'] ?></h5>
                                </div>
                                <div class="price">
                                    <p>Rs: <?php echo $row['productPrice'] ?></p>
                                </div>
                                <div class="buy-now">
                                    
                                    <a class="btn btn-primary" href="productdetailpage1.php?productId=<?php echo  $row['productId'];?>" role="button">Buy Now</a>
                                    
                                </div>
                            </div>
                <?php
                        }
                    }else{
                        echo "No Related Product found!";
                    }
                ?>
            </div>
        </div>

    </section>
     
     
    </body>
</html>