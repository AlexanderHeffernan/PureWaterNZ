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
        <title>How Clean is Wellington's Hutt River? | Pure Water NZ</title>
        <link rel="icon" type="image/png" href="images/logoicon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
     </head>
    
    <body> 
        <?php include 'includes/navBar.php';?><br><br><br>       <br>
        
        <div class="article_sideBar">
          <div class="image-wrapper map-container">
            <img src="images/maps/HuttRiver.png" class="map">
            <span><p>Image Source: </p><a target="_blank" class="sourceLink" href="https://www.google.co.nz/maps/place/Hutt+River/@-41.1594763,174.975165,15z/data=!4m5!3m4!1s0x6d40ab333fa0aa09:0x2a00ef6165e1e6b0!8m2!3d-41.171483!4d174.9868484">https://www.google.co.nz/maps/place/Hutt+River/@-41.1594763,174.975165,15z/data=!4m5!3m4!1s0x6d40ab333fa0aa09:0x2a00ef6165e1e6b0!8m2!3d-41.171483!4d174.9868484</a></span>
          </div> 
        </div>

        <article>
          <h1>How Clean is Wellington's Hutt River?</h1>
          <p class="article-meta"><strong>Author:</strong> Benj Baniqued and Jayden Marsden, <strong>Published:</strong> 21/04/2020</p>

          <div class="image-wrapper">
            <img src="images/huttRiver.png">
            <span>Image Source: https://www.google.co.nz/maps/</span>
          </div>  

          <audio controls>
            <source src="audio/HuttRiverAudiol.mp3" type="audio/mpeg">
          </audio>

          <p>
            Many of you might have seen the hutt river. You might have driven past it, or maybe you have quite a clear view of it from where you live, but have you ever seen it up close, have you ever swam in it? Well if you did you would have seen or at least heard of the toxic algae in these waters. Toxic algae is a bacteria that isn’t directly dangerous to people but the toxins it produces are harmful to most living creatures that eat it. This can cause symptoms like diarrhea, vomiting and nausea. Another thing about the hutt river is the common use of it as a rubbish dump, most people will use the hutt river as a dump because of the fact that it is either closer or it saves you the cost of going to the dump and paying to give your waste to that company to dispose of, although because it is cheaper to dump your waste in the river doesn’t mean you should, it has an impact on the ecosystem and people who commonly swim in the hutt river but the impact on the ecosystem isn't the only problem, it's the fact that this illegal dumping is costing the government $80,000 per year to clean up, which could be used for other things that our country could benefit off. The other problem with dumping waste in the hutt river is the fact that the hutt river flows into many other streams/rivers and also flows into the ocean, causing whatever that gets dumped in the hutt river, to flow into the ocean towards the marine life. This is a problem because marine life often mistake rubbish for something edible like jelly fish or other food that they would commonly eat. 
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
              <a href="lakeTaupoArticle.php"><h3 href="theHuttRiverArticle.php" class="feature-title">Taupo Locals to pay More to Look After Waterways?</h3></a>
              <a href="lakeTaupoArticle.php"><img src="images/lake-taupo-new-zealand-north-island-boat.jpg" class="img-fluid"></a>
              <p><b>08/03/2020:</b> Lake Taupo is a beautiful body of water where tourists might consider going on their vacation. This lake is also regarded as New Zealand's national treasure... <a href="lakeTaupoArticle.php">Click here to read more</a></p>
            </div> 
            <div class="col-lg-4 col-md-4 col-sm-12">
              <a href="QueenstownBacteria.php"><h3 href="QueenstownBacteria.php" class="feature-title">Queenstown Swimmers Warned of Bacteria!</h3></a>
              <a href="QueenstownBacteria.php"><img src="images/QueenstownThumbnail.jpg" class="img-fluid"></a>
              <p><b>29/05/2020:</b> During the 2019 summer season swimmers were warned to not swim at Lake Wakatipu because of a rise in E.Coli levels, chief engineer Ulrich Glasner said that this could’ve been because of the recent high winds disrupting the lake <a href="QueenstownBacteria.php">Click here to read more...</a></p>                
            </div>
      
          </div> 
        </div>        
        <?php include 'includes/footer.php';?>
    </body>
</html>