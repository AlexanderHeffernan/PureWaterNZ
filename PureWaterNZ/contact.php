<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, inital-scale=.0">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <title>Contact | Pure Water NZ</title>
        <link rel="icon" type="image/png" href="images/logoicon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
     </head>
    
    <body> 
        <?php include 'includes/navBar.php';?>
        <header class="page-header header container-fluid">           
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block" src="images/mountains_river.jpg" alt="First slide">
                <div class="overlay"></div>
                <div class="carousel-text">
                  <div class="carousel-text-inside">
                    <h1 class="websiteTitle">CONTACT US NOW</h1>
                    <h2>Down below you will find a large range of ways to contact us...</h2>
                  </div>
                </div>
                <p>Photo by Aaron Sebastian on Unsplash</p>
              </div>
              <img class="scrollDownArrow" src="images/scroll-down-arrow.gif">
            </div>
          </div>                  
        </header>

        <div class="container features">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Email Addresses...</h3>
                <br/>alexander.heffernan@stream.school.nz
                <br>jayden.marsden@stream.school.nz
                <br>benj.baniqued@stream.school.nz  
                </p>                
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Phone Numbers...</h3>
                <br/>Sorry, no phone numbers here. If you want to get in contact with us feel free to send us an email with the email address to the left, or else you can also use the contact form to the right.
                </p>  
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">  
                <h3 class="feature-title">Get in Touch!</h3>
                <div class="form-group">
                  <form class="contact-form" action="contactform.php" method="post">
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Full Name" name="name">
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control" placeholder="Your e-mail" name="email">
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" placeholder="Subject" name="subject">
                    </div>
                    <div class="form-group">
                      <textarea name="message" placeholder="Your message..." class="form-control" rows="4"></textarea>
                    </div>
                    <input type="submit" class="btn btn-secondary btn-block" name="submit">
                  </form>
                </div>  
              </div>
            </div> 
            </div> 
        </div> 
        <?php include 'includes/footer.php';?>
    </body>
</html>