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
        <title>Queenstown Swimmers Warned of Bacteria! | Pure Water NZ</title>
        <link rel="icon" type="image/png" href="images/logoicon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
     </head>
    
    <body> 
        <?php include 'includes/navBar.php';?><br><br><br>       <br>
        
        <div class="article_sideBar">
          <div class="image-wrapper map-container">
            <img data-enlargable src="images/maps/Queenstown.png" class="map">
            <span><p>Image Source: </p><a target="_blank" class="sourceLink" href="https://www.google.co.nz/maps/place/Queenstown/@-45.0359886,168.6075667,12z/data=!4m5!3m4!1s0xa9d51df1d7a8de5f:0x500ef868479a600!8m2!3d-45.0311622!4d168.6626435">https://www.google.co.nz/maps/place/Queenstown/@-45.0359886,168.6075667,12z/data=!4m5!3m4!1s0xa9d51df1d7a8de5f:0x500ef868479a600!8m2!3d-45.0311622!4d168.6626435</a></span>
          </div> 
        </div>

        <article>
          <br>
          <h1>Queenstown Swimmers Warned of Bacteria!</h1>
          <p class="article-meta"><strong>Author:</strong> Jayden Marsden, <strong>Published:</strong> 29/05/2020</p>     

          <div class="image-wrapper">
            <img data-enlargable src="images/QueenstownThumbnail.jpg">
            <span>Image Source: https://www.pxfuel.com/en/free-photo-xwglx</span>
          </div> 

          <audio controls>
            <source src="audio/QueenstownAudio.mp3" type="audio/mpeg">
          </audio>

          <p>
          During the 2019 summer season swimmers were warned to not swim at Lake Wakatipu because of a rise in E.Coli levels, chief engineer Ulrich Glasner said that this could’ve been because of the recent high winds disrupting the lake but it was later found to be bird contamination that caused the high E.Coli levels. A tourist had mentioned that other tourists might be concerned about the high levels of bacteria but considering no one swims in it and it was freezing cold, they shouldn’t be too concerned. Not long after this incident, another lake was found with high levels of E.Coli, Lake Hayes, this lake was tested and the cause was found to be unknown, the Otago Regional Council did say that the cause would be difficult to determine. 
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
              <a href="theHuttRiverArticle.php"><h3 href="theHuttRiverArticle.ph" class="feature-title">How Clean is Wellington's Hutt River?</h3></a>
              <a href="theHuttRiverArticle.php"><img src="images/HuttRiver.png" class="img-fluid"></a>
              <p><b>21/04/2020:</b> Many of you might have seen the hutt river. You might have driven past it, or maybe you have quite a clear view of it from where you live, but have you ever seen it up close, have you ever swam in it... <a href="theHuttRiverArticle.ph">Click here to read more</a></p>
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