<!-- <script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script> -->
<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="assets/css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&family=Pacifico&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&family=Pacifico&family=Permanent+Marker&display=swap');
    
  .logo{
    font-family: 'pacifico', cursive;
    font-size: medium;
    padding-right: 150px;
  }
  #logopic{
    margin-left: 100px;
    width: 40px;
  }
    footer {
      background-color: #f2f2f2;
      padding: 50px 0;
      text-align: center;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
    }

    h3 {
      font-size: 36px;
      margin-bottom: 30px;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .col {
      flex-basis: 33.33%;
      padding: 0 20px;
      margin-bottom: 30px;
    }

    h4 {
      font-size: 24px;
      margin-bottom: 15px;
    }

    p {
      font-size: 18px;
      line-height: 1.5;
    }

    @media (max-width: 768px) {
      .col {
        flex-basis: 100%;
      }
    }


    header {
      background-color: #fff;
      box-shadow: 1px 1px 4px rgba(0, 0, 0, 0.1);
      height: 70px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0 20px;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 999;
    }

    .container {
      max-width: 960px;
      margin: 0 auto;
    }

   
    .menu-toggle {
      display: none;
      font-size: 20px;
      cursor: pointer;
    }

    @media (max-width: 768px) {
      header {
        height: auto;
        padding: 20px;
      }

      .logo {
        font-size: 24px;
        margin-bottom: 20px;

      }

      nav {
        flex-direction: column;
      }

      nav li {
        margin: 10px 0;
      }

      .menu-toggle {
        display: block;
      }

      nav ul {
        display: none;
      }

      nav.open ul {
        display: flex;
        flex-direction: column;
      }

      nav.open a {
        background-color: #333;
        color: #fff;
      }
    }

/* *{
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
} */
/* .row{

font-family:       sans-serif;
font-style:        arial;
font-weight:        500;
line-height:        1.2;
color:              null;
padding:           100px;
align-items:    center;
justify-content: space-between;
    padding: 20px 10%;


} */ 
.banner-image img{
  position: fixed;
}
#headtext{
    color: #994c58;
   font-family: 'Permanent Marker', cursive;
   
}
.banner-image{
  position: absolute;
  width: 100%;
  
}
.banner-text{
  position: absolute;
  top: 230%;
  left: 60%;
}
.banner-text span{
  color: #994c58;
  font-size: 48px;
   font-family: 'Pacifico', cursive;
;
  
}
.banner-text p{
  color: #f3a4b0;
  font-weight: 700;
}
.banner-text h6{
  color: #994c58;
  font-weight: 300;
  
}
.banner-text button{
  border-radius: 30px;
  padding: 10px;
  color: #fff;
  background-color:#ebbbc2;
}
#slide1{
  position: absolute;
  top:-900%;
  left: 60%;
  font-family: 'pacifico', cursive;
}
#slideP{
  position: absolute;
  top:-800%;
  left: 60%;
  color: #994c58;
  font-weight: 800;
}
#Slide2{
  position: absolute;
  right: 60%;
  top:-290%;
  color: #fff;
  font-family: 'Permanent Marker', cursive;
  }
  #slide2P{
    position: absolute;
    top: -120%;
    right: 60%;
    color: #fff;
    font-family: 'Permanent Marker', cursive;
    

  }
  #slide3{
    position: absolute;
    top:-100%;
    font-family: 'Permanent Marker', cursive;
  }
  #slide3p{
    color: #fff;
    font-family: 'Permanent Marker', cursive;
    font-size: larger;
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
  #textH{
    font-family: 'pacifico', cursive;
  }
  #texth3{
    font-family: 'Permanent Marker', cursive;
  }
  #textP{
    padding-top: 30px;
  }


  </style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark nav-fill w-100 " style="background-color:#ebbbc2"; margin-bottom="100px">
        <a class="navbar-brand" href="">
            
            <strong>
              
               <img id="logopic"src="assets/images/face.png" alt="">
               <span class="logo "> Be Bold </span>
               
          
          </strong>
        </a>
        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item ">
                  <a class="nav-link text-light " href="">HOME</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-light" href="src/about.php">ABOUT</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-light" href="src/product.php">PRODUCT</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link text-light" href="src/contact.php">CONTACT US</a>
                </li>
                <li class="nav-item ">
                  <?php  
                    if(isset($_SESSION['username']))
                    {
                  ?>
                    <a class="nav-link text-light" href="process/login.php"><?php echo $_SESSION['username'] ?></a>
                  <?php
                    }else
                    {
                  ?>
                      <a class="nav-link text-light" href="process/login.php">LOGIN</a>
                  <?php
                    }
                  ?>
              </li>
            </ul>
            
        </div>
      </nav>

      <!-- .....slider... -->
<div id="carouselExampleDark" class="carousel carousel-dark slide">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="10000">
        <img src="assets/images/edited.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5 id="slide1">SHOP NOW</h5>
          <p id="slideP">Define your beautiful self with our products </p>
        </div>
      </div>
      <div class="carousel-item" data-bs-interval="2000">
        <img src="assets/images/bg-05.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 id="Slide2">Know About Us</h1>
          <p id="slide2P">Highly effective Skin produts<br>that will transform your skin</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="https://websitedemos.net/be-bold-beauty-store-04/wp-content/uploads/sites/1117/2022/08/bg-06.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h1 id="slide3">GET IN TOUCH WITH US</h1>
          <p id="slide3p">MESSAGE US</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <!-- ..sliderEnd.. -->
      
      <!-- Hero Section -->
      <div class="hero">
        <div class="hero-img">
          <img src="https://i.postimg.cc/kMNz5grj/flower.png" alt="Pixel Skincare">
        </div>
        <div class="hero-text">
          <h1>Your Skin</br> Would Loved It!</h1>
          <a href="#featured" class="btn">Explore</a>
        </div>
      </div>
      
      <!-- Featured Section -->
      <section id="featured">
        <div class="title title-left">
          <span class="line"></span><h3 id="texth3">New Friend!</h3>
        </div>
        <div class="wrapper">
          <div class="image">
             <img src="https://i.postimg.cc/DyM1SgNb/flower-copy.png"> 
            
          </div>
          <div class="text">
            <h2 id="textH">Be Bold Products</h2>
            <p id="textP">A lightweight formula that packs a punch with avocado protein extract to strengthen skin's own moisture barrier, sealing in hydration to protect, nourish and soften skin.</p>
            <a href="#" class=btn> Details</a>
          </div>
        </div>
      </section>
      
     
      
      <!-- About Section -->
      <section id="about">
        <div class="title title-left">
          <span class="line"></span><h3>Be Bold Skincare</h3>
        </div>
        <div class="wrapper">
          <div class="text">
            <p>Since 2016, Be Bold Skin Care has been at the forefront of the move towards organic and natural skincare.</p>
            <p>Specialising in emerging niche natural skin care brands, Pixel Skin Care is a safe zone for you and your skin where we have taken special care to hand pick and offer you some of the purest and safest brands from global organic specialists.</p>
            <p>From cutting edge science to luxurious natural indulgence, we have selected the best products and treatments for healing and improving your well-being.</p>
          </div>
          <div class="video-wrapper">
            <!-- YOUTUBE LINK https://www.youtube.com/embed/j4hvdSCV7xc -->
            <iframe id="video" width="560" height="315" src="https://www.youtube.com/embed/j4hvdSCV7xc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </section>
      
      <!-- Footer Section -->
      <div class="row-fluid mt-4">
        <footer class="p-5 text-light" style="background-color:#ebbbc2">
          <div class="row">
            <div class="col-2">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">About</a></li>
              </ul>
            </div>
      
            <div class="col-2">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">About</a></li>
              </ul>
            </div>
      
            <div class="col-2">
              <h5>Section</h5>
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Home</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Features</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">Pricing</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">FAQs</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-dark">About</a></li>
              </ul>
            </div>
      
            <div class="col-4 offset-1">
              <form>
                <h5>Subscribe to our newsletter</h5>
                <p>Monthly digest of whats new and exciting from us.</p>
                <div class="d-flex w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Email address</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                  <button class="btn btn-dark" type="button">Subscribe</button>
                </div>
              </form>
            </div>
          </div>
      
          <div class="d-flex justify-content-between py-4 my-4 border-top">
            <p>© 2021 Company, Inc. All rights reserved.</p>
            <ul class="list-unstyled d-flex">
              <li class=""><a class="link-dark" href=""><svg class="bi" width="10" height="10"> <img src="twitter_.png" alt=""></svg></a></li>
              <li class=""><a class="link-dark" href=""><svg class="bi" width="10" height="10"> <img src="insta.png" alt=""></svg></a></li>
              <li class=""><a class="link-dark" href=""><svg class="bi" width="10" height="10"> <img src="fb.png" alt=""></svg></a></li>
            </ul>
          </div>
        </footer>
        </div>
</body>
</html>
