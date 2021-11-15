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
        <title>Is The Silverstream Really That Silver? | Pure Water NZ</title>
        <link rel="icon" type="image/png" href="images/logoicon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
     </head>
    
    <body> 
        <?php include 'includes/navBar.php';?><br><br><br>       <br>
        
        <div class="article_sideBar">
          <div class="image-wrapper map-container">
            <img data-enlargable src="images/maps/Silverstream.png" class="map">
            <span><p>Image Source: </p><a target="_blank" class="sourceLink" href="https://www.google.co.nz/maps/place/Silverstream,+Upper+Hutt/@-41.1404702,175.0138146,15z/data=!4m5!3m4!1s0x6d40ab663b9e534d:0x500ef6143a303b0!8m2!3d-41.1479011!4d175.0121762">https://www.google.co.nz/maps/place/Silverstream,+Upper+Hutt/@-41.1404702,175.0138146,15z/data=!4m5!3m4!1s0x6d40ab663b9e534d:0x500ef6143a303b0!8m2!3d-41.1479011!4d175.0121762</a></span>
          </div> 
        </div>

        <article>
          <div class="embed-responsive embed-responsive-16by9">
            <iframe autoplay="false" class="embed-responsive-item" src="documents/Final_Version.mp4" allowfullscreen></iframe>
          </div>

          <audio controls>
            <source src="audio/SilverstreamAudio.mp3" type="audio/mpeg">
          </audio>

          <br>
          <h1>Is The Silverstream Really That Silver?</h1>
          <p class="article-meta"><strong>Author:</strong> Benj Baniqued, <strong>Published:</strong> 29/05/2020</p>     
          <p>
          Our group was discussing how we should make our own video to add as an extra source of media and we thought that there was no better place to start than the river, down below our school field called the ‘Silver Stream’. We didn’t really expect anything at first but the further down we went the more we realised that the stream isn’t really that ‘silver’ at all. Of course it was just a name but we thought that it would at least be clear waters but that just wasn’t the case. There was algae floating at the top of various places on the river during the summer season. It wasn’t particularly ‘clean’ or ‘silver’ but simply just natural. So what made this stream so ‘silver’?
          </p>
        </article>         
        
        <div class="container features">
          <h1>Related Articles</h1>
          <div class="row">
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