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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
    <link rel="stylesheet" href="../assets/css/product.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&family=Poppins&display=swap" rel="stylesheet">


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<!-- cdn link -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>
<style>
     @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&family=Pacifico&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&family=Pacifico&family=Permanent+Marker&display=swap');
</style>
<body>

<div class="container-fluid">
<!-- trending -->
    <section class="trending" id="trending">
        <div class="center-text">
           <h2>OUR TRENDING <span>PRODUCTS</span></h2>
        </div>
        <div class="product">
            <div class="row" >
                <?php
                    $sql="SELECT * FROM addproduct ORDER BY productId ASC";
                    $all_products=mysqli_query($conn,$sql);
                    $num=mysqli_num_rows($all_products);
                    
                    if($num>0)
                    {
                        while($row = mysqli_fetch_array($all_products))
                        {
                ?>
                            <div class="col-4 pb-4">
                                <img width="200" height="200" src="../assets/uploaded-images/<?php echo $row['Productimg'];?>">
                                <div class="product-text">
                                    <h5>Sale</h5>
                                </div>
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
                                    <p><?php echo $row['productPrice'] ?></p>
                                </div>
                                <div class="buy-now">
                                    
                                    <a class="btn btn-primary" href="product_1.php?productId=<?php echo  $row['productId'];?>" role="button">Buy Now</a>
                                    
                                </div>
                            </div>
                <?php
                        }
                    }
                ?>
            </div>
        </div>

    </section>
</div>

</body>
</html>
