<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONTACT US</title>
    <link rel="stylesheet" href="../assets/css/contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&family=Pacifico&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Jost:wght@100;200;300;400;500;600;700&family=Pacifico&family=Permanent+Marker&display=swap');
    
</style>

<body>
   <!-- <header id="header" class="header sticky-lg-top"> -->
   <?php include '../common/nav.php'?>
    
  
    
    <!-- image -->
    <img src="https://websitedemos.net/be-bold-beauty-store-04/wp-content/uploads/sites/1117/2022/08/bg-06.jpg" class="d-block w-100" alt="..."	">

    <!-- grid -->
    <div class="container-fluid mt-4">
        <div class="row">
          <div class="row text-center">
            <h2 class="font-weight-bold display-4 " style="font-family: 'Permanent Marker', cursive;">Get In Touch</h2>
            <h6 class="lead  mt-3"><strong>Dont be a stranger!</strong></h6>
            <div class="row d-flex justify-content-center mt-4">
              <div class="col-sm-10">
                <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. At vel iste deserunt perferendis assumenda qui repellat totam maiores! 
                  Dolor dignissimos quisquam unde magni eos, quidem itaque ipsa atque nam aspernatur.</p>
              </div>
            </div>
          </div>

          <div class="row d-flex justify-content-center mt-3 mb-4">
            <form>
              
              <div class="row d-flex justify-content-center mt-2">
                <div class="col-sm-5">
                  <input type="text" class="form-control" placeholder="First name" aria-label="First name" style="color:#4682B4">
                </div>

                <div class="col-sm-5">
                  <input type="text" class="form-control" placeholder="Last name" aria-label="Last name">
                </div>
              </div>

              <div class="row d-flex justify-content-center mt-4">
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
              </div>
              
              <div class="row d-flex justify-content-center mt-4">
                <div class="col-sm-10">
                  <textarea class="form-control" id="inputmessage" rows="6" cols="50" placeholder="Type your message here"></textarea>
                </div>
              </div>

              <div class="d-flex justify-content-left mt-3" style="margin-left: 8.5%;">
                <button type="submit" class="btn btn-primary lead">SEND</button>
              </div>
            </form> 
          </div>
        </div>
      
        <div class="row d-flex justify-content-center mt-4">
          <!-- <div class="col-sm-10"> -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.8305216852605!2d74.23900611422395!3d31.391236310649962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3919018a8ea548c1%3A0x4a52db69c2c814f!2sThe%20University%20of%20Lahore!5e0!3m2!1sen!2s!4v1678622395433!5m2!1sen!2s" width="100%" height="550" style="border: 2px;" allowfullscreen="" loading="" referrerpolicy="no-referrer-when-downgrade"></iframe>
          <!-- </div> -->
        </div>
        <?php include '../common/footer.php'?>
    </div>
</body>
</html>