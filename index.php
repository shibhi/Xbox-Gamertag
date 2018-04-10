<?php
   include_once('includes/init.php'); 
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
   <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-117082126-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-117082126-1');
</script>
	  <meta name="theme-color" content="#107C10" />
      <meta charset="utf-8"/>
      <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <meta name="description" content="<?php echo $config['description']; ?>"/>
	  <meta name="keywords" content="gamertag generator,xbox gamertag,name checker,gamertag checker,xbox gamertag search,xbox 360 live,change xbox gamertag,xbox gamertag checker,change gamertag,gamertag search,gamertags,xbox gamertag generator,microsoft xbox live account,og names,xbox live gamertag,xbox live gamertag search,xbox gamertag change,gamertag availability,gamer names,xbox change gamertag,og gamertags,xbox name generator,xbox gamertags,xbox gamertag lookup,gamertag lookup,xbox gamertag availability,xbox profile search" />
	  <meta name="robots" content="index, follow">
	  <meta name="msvalidate.01" content="B0AF4A86E150BB7CF90F449058F4864B" />
      <link rel="icon" href="<?php echo $config['url']; ?>/assets/img/xbox-fav.png"/>
      <title><?php echo $config['title']; ?></title>
      <!-- Google fonts CSS -->
      <link href="https://fonts.googleapis.com/css?family=Lato:400,300,700" rel="stylesheet" type="text/css"/>
      <!-- Bootstrap core CSS -->
      <link href="<?php echo $config['url']; ?>/assets/css/bootstrap.min.css" rel="stylesheet"/>
      <!-- Animate CSS -->
      <link href="<?php echo $config['url']; ?>/assets/css/animate.css" rel="stylesheet"/>
      <!-- Ember Components CSS -->
      <link href="<?php echo $config['url']; ?>/assets/css/ember.css" rel="stylesheet"/>
   </head>
   <body>
      <nav class="navbar navbar-inverse navbar-static-top navbar-transparent navbar-fixed-top navbar-color">
         <div class="container">
            <img src="<?php echo $config['url']; ?>/assets/img/xbox-gamertag.png" alt="Xbox Gamertag Search">
         </div>
      </nav>
      <div class="hero hero-1 img-bg">
         <div class="hero-inner">
            <div class="container">
               <?php
                  if($_POST) {
                  
                  $check = checkTag(htmlentities($_POST['tag']));
                  
                  if ($check == 'false'){
                  
                  echo '<h2>'.htmlentities($_POST['tag']).' May be available!</h2><p>Make a new gamertags search</p>';
                  
                  } elseif($check == 'true') {
                  
                  echo '<h2>'.htmlentities($_POST['tag']).' doesnt seem to be available</h2><p>Make a new search below</p>';
                  
                  }
                  
                  } else {
                  
                  echo '                  <h2>Gamertag Availability Checker</h2>
                                    <p>Check to see if your gamertag is available or not</p>
                  ';
                  
                  }
                  
                  ?>
               <div class="buttons">
                  <form class="form-inline" method="post" action="">
                     <div class="form-group">
                        <input type="text" class="form-control input-lg" name="tag" placeholder="Enter Xbox gamertag..">
                        <button type="submit" name="submit" class="btn btn-lg btn-green">Check Xbox Gamertag</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      </div>
      <section id="about">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <h2>Check Xbox gamertag generator</h2>
                  <p>This tool will help you check gamertag availability for xbox live gamertag. You can also change gamertag, I mean change xbox gamertag inorder to find og names. You can also call this tool called gamertag generator, <a href="http://www.gamertags.info/">xbox gamertag</a>, gamertag checker, xbox gamertag search, gamertag search, gamertags, xbox gamertag generator, xbox live gamertag search and you can use this tool for xbox gamertag change from anywhere in the world.</p> </div>
               <div class="col-md-5">
                  <img src="<?php echo $config['url']; ?>/assets/img/Xbox-gamertag-generator.jpg" alt="Xbox Gamertag generator">
               </div>
            </div>
         </div>
      </section>
      <footer>
         <div class="container">
            <p>&copy; <?php echo $config['title']; ?> 2018.<br>
All rights reserved. GamerTags.info is not affiliated with Xbox, Xbox 360, Xbox.com, or Microsoft Corporation. Microsoft, Xbox, Xbox Live, the Xbox logos, and/or other Microsoft products referenced herein are either trademarks or registered trademarks of Microsoft Corporation.</p>
         </div>
      </footer>
      <!-- Bootstrap core JavaScript
         ================================================== -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
      <script src="<?php echo $config['url']; ?>/assets/js/bootstrap.min.js"></script>
      <script src="<?php echo $config['url']; ?>/assets/js/bootstrap.offcanvas.min.js"></script>
      <script>
         $(window).scroll(function(){
                winW = $(window).width();
         	winH = $(window).height();
         	winScrl = $(window).scrollTop();
         
         	var opacity = 1-(winScrl/winH);
         
         	opacity = opacity * 1.4;
         
         	if (opacity>=1){opacity=1;}
         
         	$('.hero-inner').css('opacity',opacity);
         
         	var heroHeight =50 + (70 * (winScrl/$('.hero').height()));	
         	$('.hero-inner').css('top', heroHeight+'%');
         });	
               
              
      </script>
   </body>
</html>