<?php
  session_start();

  
  if(!isset($_SESSION['userId'])){
    header("Location: index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
    <meta name="viewport" content="width=device-width, inital-scale=.0">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <title>Pollution Blamed as Christchurch Fall Short of Quality Water Standards! | Pure Water NZ</title>
        <link rel="icon" type="image/png" href="images/logoicon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
     </head>
    
    <body> 
        <?php include 'includes/navBar.php';?><br><br><br>       <br>
        
        <div class="article_sideBar">
          <div class="image-wrapper map-container">
            <img data-enlargable src="images/maps/christchurchMap.png" class="map">
            <span><p>Image Source: </p><a target="_blank" class="sourceLink" href="https://www.google.com/maps/place/Heathcote+River/@-43.5600205,172.6146514,12.5z/data=!4m5!3m4!1s0x6d322752403afba5:0x2a00ef86ab64d990!8m2!3d-43.5615032!4d172.6639644?hl=en">https://www.google.com/maps/place/Heathcote+River/@-43.5600205,172.6146514,12.5z/data=!4m5!3m4!1s0x6d322752403afba5:0x2a00ef86ab64d990!8m2!3d-43.5615032!4d172.6639644?hl=en</a></span>
          </div> 
        </div>

        <article>
          <br>
          <h1>Pollution Blamed as Christchurch Fall Short of Quality Water Standards!</h1>
          <p class="article-meta"><strong>Author:</strong> Jayden Marsden, <strong>Published:</strong> 05/06/2020</p>     

          <div class="image-wrapper">
            <img data-enlargable src="images/christchurchPic.png">
            <span>Image Source: https://www.pxfuel.com/en/free-photo-oacbe</span>
          </div> 

          <audio controls>
            <source src="audio/christchurchAudio.mp3" type="audio/mpeg">
          </audio>

          <p>
          During August 2018, scientists had discovered that christchurch's waterways weren’t up to standard due to urban pollution, one example of these waterways was Heathcote river, it was said to have the unhealthiest water in the city, this wasn’t only because of what heathcote river had picked up along the way, but also because of what flowed through the two small streams connecting two the heathcote river which heavily impacted it's health. These rivers were found to have traces of nitrogen, phosphorus, E.Coli, dissolved copper and zinc, these may sound familiar if you have studied chemistry as these are non-metals and transition metals, clearly this is not a healthy sign, let's hope that by now this problem is long gone.
          </p>
        </article>         
        
        <div class="container features">
          <h1>Related Articles</h1>
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <a href="lakeTaupoArticle.php"><h3 href="theHuttRiverArticle.php" class="feature-title">Taupo Locals to pay More to Look After Waterways?</h3></a>
              <a href="lakeTaupoArticle.php"><img src="images/lake-taupo-new-zealand-north-island-boat.jpg" class="img-fluid"></a>
              <p><b>08/03/2020:</b> Lake Taupo is a beautiful body of water where tourists might consider going on their vacation. This lake is also regarded as New Zealand's national treasure... <a href="lakeTaupoArticle.php">Click here to read more</a></p>
            </div> 
            <div class="col-lg-4 col-md-4 col-sm-12">
              <a href="theHuttRiverArticle.php"><h3 href="theHuttRiverArticle.php" class="feature-title">How Clean is Wellington's Hutt River?</h3></a>
              <a href="theHuttRiverArticle.php"><img src="images/HuttRiver.png" class="img-fluid"></a>
              <p><b>21/04/2020:</b> Many of you might have seen the hutt river. You might have driven past it, or maybe you have quite a clear view of it from where you live, but have you ever seen it up close, have you ever swam in it... <a href="theHuttRiverArticle.php">Click here to read more</a></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <a href="HavelockNorthArticle.php"><h3 href="HavelockNorthArticle.php" class="feature-title">Havelock North’s Drinking Water Outbreak</h3></a>
              <a href="HavelockNorthArticle.php"><img src="images/havelockNorthThumbnail-cropped.png" class="img-fluid"></a>
              <p><b>02/06/2020:</b> More than 5000 people were affected by the outbreak in this city. 45 were hospitalized, possibly linked to 3 deaths and with people who still continue to suffer from its effects today. A gastrointestinal outbreak hit... <a href="HavelockNorthArticle.php">Click here to read more</a></p>
            </div>     
          </div> 
        </div>        
        <?php include 'includes/footer.php';?>
    </body>
</html>