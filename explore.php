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
        <title>Explore | Pure Water NZ</title>
        <link rel="icon" type="image/png" href="images/logoicon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
    </head>

    
    <body> 
      <?php include 'includes/navBar.php';?><br><br>
      <div class="container features">
        <h1>Recent Articles</h1>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <a href="QueenstownBacteria.php"><h3 href="QueenstownBacteria.php" class="feature-title">Queenstown Swimmers Warned of Bacteria!</h3></a>
            <a href="QueenstownBacteria.php"><img src="images/QueenstownThumbnail.jpg" class="img-fluid"></a>
            <p><b>29/05/2020:</b> During the 2019 summer season swimmers were warned to not swim at Lake Wakatipu because of a rise in E.Coli levels, chief engineer Ulrich Glasner said that this could’ve been because of the recent high winds disrupting the lake <a href="QueenstownBacteria.php">Click here to read more...</a></p>                
          </div>          

          <div class="col-lg-4 col-md-4 col-sm-12">
            <a href="silverStreamArticle.php"><h3 href="silverStreamArticle.php" class="feature-title">Is The Silverstream Really That Silver?</h3></a>
            <a href="silverStreamArticle.php"><img src="images/SilverstreamThumbnail.png" class="img-fluid"></a>
            <p><b>29/05/2020:</b> Our group was discussing how we should make our own video to add as an extra source of media and we thought that there was no better place to start than the river, down below our school field called the ‘Silver Stream’. We didn’t really expect anything at first but the further down we went the more we realised... <a href="silverStreamArticle.php">Click here to read more...</a></p>                
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12">
            <a href="lakeTaupoArticle.php"><h3 href="lakeTaupoArticle.php" class="feature-title">Taupo Locals to pay More to Look After Waterways?</h3></a>
            <a href="lakeTaupoArticle.php"><img src="images/lake-taupo-new-zealand-north-island-boat.jpg" class="img-fluid"></a>
            <p><b>08/03/2020:</b> Lake Taupo is a beautiful body of water where tourists might consider going on their vacation. This lake is also regarded as New Zealand's national treasure... <a href="lakeTaupoArticle.php">Click here to read more</a></p>
          </div>             
        </div> 
        <br><br>

        <h1>Top-rated Articles</h1>
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
            <a href="theHuttRiverArticle.php"><h3 href="lakeTaupoArticle.php" class="feature-title">How Clean is Wellington's Hutt River?</h3></a>
            <a href="theHuttRiverArticle.php"><img src="images/HuttRiver.png" class="img-fluid"></a>
            <p><b>21/04/2020:</b> Many of you might have seen the hutt river. You might have driven past it, or maybe you have quite a clear view of it from where you live, but have you ever seen it up close, have you ever swam in it... <a href="theHuttRiverArticle.php">Click here to read more</a></p>
          </div>              
        </div> 
        <br><br>

        <h1>Editor-chosen Articles</h1>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12">
            <a href="WhitebaitArticle.php"><h3 href="WhitebaitArticle.php" class="feature-title">Whitebait going extinct?</h3></a>
            <a href="WhitebaitArticle.php"><img src="images/WhiteBaitPic.png" class="img-fluid"></a>
            <p><b>05/06/2020:</b> Whitebait are one of the most commonly caught fish in New Zealand but this can be quite worrying as New Zealand’s whitebait populations could be wiped out in an estimated 16 years... <a href="WhitebaitArticle.php">Click here to read more...</a></p>                
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12">
            <a href="ChristchurchArticle.php"><h3 href="ChristchurchArticle.php" class="feature-title">Pollution Blamed as Christchurch Fall Short of Quality Water Standards!</h3></a>
            <a href="ChristchurchArticle.php"><img src="images/christchurchPic.png" class="img-fluid"></a>
            <p><b>05/06/2020:</b> During August 2018, scientists had discovered that christchurch's waterways weren’t up to standard due to urban pollution, one example of these waterways was Heathcote river... <a href="ChristchurchArticle.php">Click here to read more...</a></p>                
          </div>

          <div class="col-lg-4 col-md-4 col-sm-12">
            <a href="blueLakeArticle.php"><h3 href="blueLakeArticle.php" class="feature-title">Blue Lake New Zealand - World's Clearest Lake</h3></a>
            <a href="blueLakeArticle.php"><img src="images/blueLakeThumbnail.jpg" class="img-fluid"></a>
            <p><b>09/06/2020:</b> The blue lakes in Nelson are one of New Zealand’s national treasures and is the clearest body of freshwater in the world. Research results from NIWA say that the lake is visible for up to 80 meters and consistent at 70 meters, making it optically clear as distilled water... <a href="blueLakeArticle.php">Click here to read more...</a></p>                
          </div>         
        </div> 
      </div> 
        
      
      <?php include 'includes/footer.php';?>
    </body>
</html>