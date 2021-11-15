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
        <title>Blue Lake New Zealand - World's Clearest Lake | Pure Water NZ</title>
        <link rel="icon" type="image/png" href="images/logoicon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
     </head>
    
    <body> 
        <?php include 'includes/navBar.php';?><br><br><br>       <br>

        <div class="article_sideBar">
          <div class="image-wrapper map-container">
            <img data-enlargable src="images/maps/blueLake.png" class="map">
            <span><p>Image Source: </p><a target="_blank" class="sourceLink" href="https://www.google.com/maps/place/Blue+Lake/@-42.0593785,172.6226732,13z/data=!4m5!3m4!1s0x6d3a938d156bf0af:0x2a00ef86ab637be0!8m2!3d-42.0591593!4d172.6581338?hl=en">https://www.google.com/maps/place/Blue+Lake/@-42.0593785,172.6226732,13z/data=!4m5!3m4!1s0x6d3a938d156bf0af:0x2a00ef86ab637be0!8m2!3d-42.0591593!4d172.6581338?hl=en</a></span>
          </div> 
        </div>

        <article>
          <br>
          <h1>Blue Lake New Zealand - World's Clearest Lake</h1>
          <p class="article-meta"><strong>Author:</strong>  Benj Baniqued and Jayden Marsden, <strong>Published:</strong> 09/06/2020</p>     

          <div class="image-wrapper">
            <img data-enlargable src="images/blueLakeThumbnail.jpg">
            <span>Image Source: https://media.newzealand.com/en/story-ideas/blue-lake,-nelson-worlds-clearest-lake/</span>
          </div> 

          <p>Voiceover is unavalible for this article...</p>  
          <audio controls>
            <source src="audio/blueLakeAudio.mp3" type="audio/mpeg">            
          </audio>

          <p>
          The blue lakes in Nelson are one of New Zealand’s national treasures and is the clearest body of freshwater in the world.
          </p>
          <p>
          Research results from NIWA say that the lake is visible for up to 80 meters and consistent at 70 meters, making it optically clear as distilled water.
          </p>
          <p>
          The lake has blue-violet hues, only seen in clear natural waters, and it wasn’t until 2011 where scientists found out about this.
          </p>
          <p>
          Nelson Lakes National park starts at the northern end of the southern alps (south island of New Zealand). A large range of mountains going down the southern island.
          </p>
          <p>
          This park covers roughly around 1020 sq km and is known to be a great place for fishing, camping and tramping.
          </p>
          <p>
          So although this lake is beautiful and is a great opportunity to see one of the clearest waters in NZ, it comes at a cost. The lake cannot be accessed by a car or by a day walk. To get there you need to take a 4-7 day hike on an advanced track. 
          </p>
          <p>
          There is one other way that may be easier but still takes up a lot of time, you can take a Jetty (Jet boat) to sabine hut from Lake Rotorua, then walk from there to the west sabine hut and then finally to the blue lake hut.
          </p>
          <p>
          It all pays off though as you get to see the world’s cleanest lake as well as accomplishing a difficult track.
          </p>
          <p>
          <b>Link to more information:</b><br>
          <a target="_blank" href="http://media.newzealand.com/en/story-ideas/blue-lake,-nelson-worlds-clearest-lake/">http://media.newzealand.com/en/story-ideas/blue-lake,-nelson-worlds-clearest-lake/</a>
          </p>
          <p>
          So If you’re up for a challenge then taking this walk would be perfect. A long and tedious tramp and a camp out for the night for the possibility of seeing one of the world's clearest waters. 
          </p>          
        </article>         
        
        <div class="container features">
          <h1>Related Articles</h1>
          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
              <a href="QueenstownBacteria.php"><h3 href="QueenstownBacteria.php" class="feature-title">Queenstown Swimmers Warned of Bacteria!</h3></a>
              <a href="QueenstownBacteria.php"><img src="images/QueenstownThumbnail.jpg" class="img-fluid"></a>
              <p><b>29/05/2020:</b> During the 2019 summer season swimmers were warned to not swim at Lake Wakatipu because of a rise in E.Coli levels, chief engineer Ulrich Glasner said that this could’ve been because of the recent high winds disrupting the lake <a href="QueenstownBacteria.php">Click here to read more...</a></p>                
            </div>
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
          </div> 
        </div>        
        <?php include 'includes/footer.php';?>
    </body>
</html>