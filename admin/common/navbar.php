<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nav bar</title>
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
          <li class="nav-item ">
              <a class="nav-link text-light" href="../process/logout.php"> LOGOUT</a>
          </li>
        
        </ul>
        
    </div>
  </nav>
</body>
</html>