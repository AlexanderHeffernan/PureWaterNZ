<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, inital-scale=.0">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <title>Home | Pure Water NZ</title>
        <link rel="icon" type="image/png" href="images/logoicon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
     </head>
    
    <body> 
        <?php include 'includes/navBar.php';?>
        <header class="page-header header container-fluid">           
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block" src="images/Mountains_Lake.jpg" alt="First slide">
                <div class="overlay"></div>
                <div class="carousel-text">
                  <div class="carousel-text-inside">
                    <h1 class="websiteTitle">PURE WATER NZ</h1>

                    <?php
                      if(isset($_SESSION['userId']))
                      {
                        echo ' <h2 class="welcomeText" data-hover="Unveiling the truth TOGETHER..."><span>Welcome '. $_SESSION["userUid"] .'</span></h2>';
                      }else{
                        echo '<h2>Unveiling the truth TOGETHER...</h2>';
                      }
                    ?>
                  </div>
                </div>
                <p>Photo by Tobias Keller on Unsplash</p>
              </div>
              <div class="carousel-item">
                <img class="d-block" src="images/city_water.jpg" alt="Third slide">
                <div class="overlay"></div>
                <div class="carousel-text">
                  <div class="carousel-text-inside">
                    <h1 class="websiteTitle">EXPLORE</h1>
                    <h2>Read, watch and listen through our constantly growing library of articles!</h2>
                  </div>
                </div> 
                <p>Photo by Ömer Faruk Bekdemir on Unsplash</p>
              </div>
              <div class="carousel-item">
                <img class="d-block" src="images/ocean.jpg" alt="Fourth slide">
                <div class="overlay"></div>
                <div class="carousel-text">
                  <div class="carousel-text-inside">
                    <h1 class="websiteTitle">CONTACT US</h1>
                    <h2>We are always open to chat!<br>So if you have any questions, comments etc. let us know!</h2>
                  </div>
                </div> 
                <p>Photo by anja. on Unsplash</p>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            <img class="scrollDownArrow" src="images/scroll-down-arrow.gif">  
          </div>                          
        </header>

        <div class="container features">
            <h1>FEATURED ARTICLES</h1>
            <?php
              if(!isset($_SESSION['userId'])){
                echo '<h5><b><a href="login.php">Sign Up/In</a> to read the FULL collection...</b></h5><br>';
              }
            ?>            
            <div class="row">            
              <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="PureWaterArticle.php"><h3 href="PureWaterArticle.php" class="feature-title">Are NZ Waterways Really 100% Pure?</h3></a>
                <a href="PureWaterArticle.php"><img src="images/pureWaterThumbnail - Cropped.png" class="img-fluid"></a>
                <p><b>29/05/2020:</b> In 2017 a video was created to advertise New Zealand’s waters as ‘100%’ pure as a way to attract tourists. It shows a woman who had been tramping, taking a drink of water from a river. This video was shot at the Blue Pools in Haast and Over 350 000 people have watched this on youtube... <a href="PureWaterArticle.php">Click here to read more</a></p>
              </div>
              
              <div class="col-lg-4 col-md-4 col-sm-12">
                <a href="HavelockNorthArticle.php"><h3 href="HavelockNorthArticle.php" class="feature-title">Havelock North’s Drinking Water Outbreak</h3></a>
                <a href="HavelockNorthArticle.php"><img src="images/havelockNorthThumbnail-cropped.png" class="img-fluid"></a>
                <p><b>02/06/2020:</b> More than 5000 people were affected by the outbreak in this city. 45 were hospitalized, possibly linked to 3 deaths and with people who still continue to suffer from its effects today. A gastrointestinal outbreak hit... <a href="HavelockNorthArticle.php">Click here to read more</a></p>
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
        <?php include 'includes/footer.php';?>      
    </body>
</html>