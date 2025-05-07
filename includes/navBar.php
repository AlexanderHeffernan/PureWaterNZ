<nav class="navbar navbar-expand-md">
    <a class="navbar-brand" href="index.php">
        <img src="images/logo_4.png" width="auto" height="100%">
    </a>
            
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main-navigation">
        <ul class="navbar-nav">           
            <?php
                if(isset($_SESSION['userId'])){
                    echo '  <li class="nav-item">
                                <a class="nav-link" href="index.php">HOME</a>
                            </li>               
                            <li class="nav-item">
                                <a class="nav-link" href="explore.php">EXPLORE</a>
                            </li>                
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">CONTACT</a>
                            </li> 
                            <li class="nav-item">  
                                <a class="nav-link accountName" href="includes/logout.inc.php" method="post" data-hover="LOGOUT"><span>'. $_SESSION["userUid"] .'</span></a> 
                            </li>';
                }else{
                    echo '  <li class="nav-item">
                                <a class="nav-link" href="index.php">HOME</a>
                            </li>                 
                            <li class="nav-item">
                                <a class="nav-link" href="about.php">ABOUT</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="contact.php">CONTACT</a>
                            </li> 
                                
                            <li class="nav-item">
                                <form action="login.php" name="login" method="post">
                                    <button type="submit" name="logout-submit" class="nav-link btn btn-lg" id="logOutButton">Login/Signup</button>
                                </form>
                            </li>';
                }

            ?>            
        </ul>
    </div>
</nav>