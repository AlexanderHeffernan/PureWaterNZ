<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, inital-scale=.0">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <title>Create | Pure Water NZ</title>
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
                    <h1>CREATE</h1>
                    <h2>Do you know something we don't? Here you can create your own article with your opinion on NZ Water.</h2>
                    <button onclick="window.location.href = 'articleCreator.php'" type="button" class="btn btn-primary headerScreenButtons">Create</button>
                  </div>
                </div>
                <p>Photo by Martin Bisof on Unsplash</p>                
              </div>
            </div>
            
          </div>                  
        </header>
        <?php include 'includes/footer.php';?>
    </body>
</html>