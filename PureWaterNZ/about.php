<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, inital-scale=.0">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <title>About | Pure Water NZ</title>
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
                <img class="d-block" src="images/pictureOfSheep.jpg" alt="First slide">
                <div class="overlay"></div>
                <div class="carousel-text">
                  <div class="carousel-text-inside">
                    <h1 class="websiteTitle">ABOUT US</h1>
                    <h2>Everything you need to know about us, the developers of this website.</h2>
                  </div>
                </div>
                <p>Photo by Martin Bisof on Unsplash</p>                
              </div>
            </div>
            <img class="scrollDownArrow" src="images/scroll-down-arrow.gif">
          </div>                  
        </header>

        <div class="container features">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Alexander Heffernan</h3>
                <br/>Kia Ora, my name is Alex Heffernan and I am a year 11 student at St Patrick's College Silverstream. I am 15 years old and I spend most of my time playing cricket or else there's a good chance I’m programming. I’ve taken great interest in the Pure Water NZ topic over the past two terms and I feel that I am now a lot more aware of the situation that New Zealand’s waterways are suffering from. 
                </p>                
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Jayden Marsden</h3>
                <br/>Hello, I am Jayden Marsden, I am a year 11 student at St Patricks Silverstream. I am 15 years old and I take quite an interest in gaming, scouts, sports and other things. This project has helped me to learn a lot about Pure NZ Water that I would’ve never learnt otherwise.	
                </p>  
              </div>
              <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Benj Baniqued</h3>
                <br/>Hi I’m Benj Baniqued, I am 15 and a year 11 student at St Patricks Silverstream. I enjoy watching youtube, anime as well as playing badminton with friends. After doing some research with Jayden we have found many different facts about New Zealand's waters that we never knew about before. I am happy to have been a part of this project and I hope you learn as many new things about New Zealand as we did.
                </p>  
              </div>
            </div> 
        </div> 
        <?php include 'includes/footer.php';?>
    </body>
</html>