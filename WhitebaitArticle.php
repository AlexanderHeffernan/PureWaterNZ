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
        <title>Whitebait going extinct? | Pure Water NZ</title>
        <link rel="icon" type="image/png" href="images/logoicon.png">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
     </head>
    
    <body> 
        <?php include 'includes/navBar.php';?><br><br><br>       <br>

        <article>
          <br>
          <h1>Whitebait going extinct?</h1>
          <p class="article-meta"><strong>Author:</strong>  Benj Baniqued, <strong>Published:</strong> 05/06/2020</p>     

          <div class="image-wrapper">
            <img data-enlargable src="images/WhiteBaitPic.png">
            <span>Image Source: https://pixabay.com/photos/shirasu-whitebait-tagonoura-1404989/</span>
          </div> 

          <audio controls>
            <source src="audio/whitebaitAudio.mp3" type="audio/mpeg">
          </audio>

          <p>
          Whitebait are one of the most commonly caught fish in New Zealand but this can be quite worrying as New Zealand’s whitebait populations could be wiped out in an estimated 16 years, according to the Government. 
          </p>
          <p>
          <a href="https://www.doc.govt.nz/nature/native-animals/freshwater-fish/whitebait-migratory-galaxiids/#:~:text=Five%20of%20these%20are%20migratory,sixth%20species%20is%20common%20smelt.">Whitebait are made up of five species</a>. Four of those five are endangered and continue to decline in numbers. Because of this, conservation organisation Forest & Bird has called for a ban on commercial whitebait fishing. With hopes that this will help to fix the problem. 
          </p>
          <p>
          Whitebait are only allowed to be fished during a specific season. This ‘whitebait season’ is open from 15 August to 30 November (Prospect to change, 3/06/2020) except the West Coast of the South Island and the Chatham Islands.          
          </p>
          <p>
          All other times are prohibited when catching whitebait. Fishing is only permitted between 5am to 8pm or between 6am to 9pm when New Zealand’s daylight saving is being observed. 
          </p>
          <p>
          <b>More information in this link:</b><br>
          <a href="https://www.doc.govt.nz/parks-and-recreation/things-to-do/fishing/whitebaiting/whitebait-regulations-all-nz-except-west-coast/#:~:text=Fishing%20season,inclusive)%20in%20the%20Chatham%20Islands.">Click Here</a>
          </p>
          <p>
          Although restrictions for whitebait fishing are good, we still don’t know about the impacts that it has done. But one of the biggest reasons as to why whitebait populations are declining are the huge losses of whitebait habitats. 
          </p>
          <p>
          This is done by draining wetlands, artificially channeling small streams and removing vegetation beside streams.
          </p>
          <p>
          <b>So how can we help?</b>
          </p>
          <p>
          We should follow the whitebait fishing rules and regulations as well as keeping our catches to a minimum. Keeping farm animals away from streams can also help as it is preventing them from polluting the rivers and if you see dams or overhanging culverts then you can report it to your local DOC or regional council office.
          </p>
          <p>
          It might not be much but big changes require small steps and in the end, who would want to live in a world without whitebait foods?
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