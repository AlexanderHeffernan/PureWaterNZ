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
        <title>Lake Taupo Locals to pay More to Look After Waterways? | Pure Water NZ</title>
        <link rel="icon" type="image/png" href="images/logoicon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
     </head>
    
    <body> 
        <?php include 'includes/navBar.php';?><br><br><br>       <br>
        
        <article>
          <h1>Lake Taupo Locals Have to pay More to Look After Waterways?</h1>
          <p class="article-meta"><strong>Author:</strong> Benj Baniqued and Jayden Marsden, <strong>Published:</strong> 21/04/2020</p>

          <div class="image-wrapper">
            <img data-enlargable src="images/lake-taupo-new-zealand-north-island-boat.jpg">
            <span>Image Source: https://www.pxfuel.com/en/free-photo-jwhsm</span>
          </div>

          <audio controls>
            <source src="audio/TaupoAudio.mp3" type="audio/mpeg">
          </audio>

          <p>
            Lake Taupo is a beautiful body of water where tourists might consider going on their vacation. This lake is also regarded as New Zealand's national treasure but even with it’s clear waters, it still has its share of problems. To clean the lake it will cost $81.5 million over the next 15 years. The government has promised to pay half of the cost but, they said that taupo locals will have to cover the rest. Even after all these expenses are paid, money will still be needed to protect the lake.  Lake taupo is currently considered to be healthy but toxic algal blooms are expected to form in the future, and taking into account that there have been outbreaks of taupo's wastewater being spilled into the lake, chances are, it won't be clean anytime soon, but we can have hope for something to change in the future.

          </p>
          <p>At 3pm on Tuesday a water pipe broke open, the footpath above it had also collapsed with wastewater spilling down to the lake for an estimated time of three hours. The pipe was said to contain 70% of the CBD wastewater and that the spillage was basically a disaster. A team of people were then sent out to stop the spillage going into the lake even through bad weather. The mayor also asked the Taupo community to limit their water usage as much as possible. If these outbreaks were to continue to happen then not only will it take more time to clean the lake but it will also cost a lot more to clean it as well, with taupo residents having to pay more. </p>
        </article>  

        <div class="container features">
          <h1>Related Articles</h1>
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <a href="silverStreamArticle.php"><h3 href="silverStreamArticle.php" class="feature-title">Is The Silverstream Really That Silver?</h3></a>
              <a href="silverStreamArticle.php"><img src="images/SilverstreamThumbnail.png" class="img-fluid"></a>
              <p><b>29/05/2020:</b> Our group was discussing how we should make our own video to add as an extra source of media and we thought that there was no better place to start than the river, down below our school field called the ‘Silver Stream’. We didn’t really expect anything at first but the further down we went the more we realised... <a href="silverStreamArticle.php">Click here to read more...</a></p>                
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <a href="PureWaterArticle.php"><h3 href="PureWaterArticle.php" class="feature-title">Are NZ Waterways Really 100% Pure?</h3></a>
              <a href="PureWaterArticle.php"><img src="images/pureWaterThumbnail - Cropped.png" class="img-fluid"></a>
              <p><b>29/05/2020:</b> In 2017 a video was created to advertise New Zealand’s waters as ‘100%’ pure as a way to attract tourists. It shows a woman who had been tramping, taking a drink of water from a river. This video was shot at the Blue Pools in Haast and Over 350 000 people have watched this on youtube... <a href="PureWaterArticle.php">Click here to read more</a></p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
              <a href="theHuttRiverArticle.php"><h3 href="theHuttRiverArticle.php" class="feature-title">How Clean is Wellington's Hutt River?</h3></a>
              <a href="theHuttRiverArticle.php"><img src="images/HuttRiver.png" class="img-fluid"></a>
              <p><b>21/04/2020:</b> Many of you might have seen the hutt river. You might have driven past it, or maybe you have quite a clear view of it from where you live, but have you ever seen it up close, have you ever swam in it... <a href="theHuttRiverArticle.php">Click here to read more</a></p>
            </div>      
          </div> 
        </div>

        <?php include 'includes/footer.php';?>    
    </body>
</html>