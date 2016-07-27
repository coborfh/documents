<?php /*include"include/config.php"*/ ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Xeon | OnePage Responsive Theme</title>
    <link href="css-insc/bootstrap.min.css" rel="stylesheet">
    <link href="css-insc/font-awesome.min.css" rel="stylesheet">
    <link href="css-insc/prettyPhoto.css" rel="stylesheet">
    <link href="css-insc/main.css" rel="stylesheet">
    <link href="css-insc/fond.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <script src="js/bootstrap.mini.js"></script>
    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
      <script src="js/jquery-1.12.0.js"></script>
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
    <link id=".css-preset" href="../css/presets/preset1.css" rel="stylesheet">
</head><!--/head-->

<body data-spy="scroll" data-target="#navbar" data-offset="0">
    <header id="home" >
      <div class="main-nav">
      <div class="container" style="height: 90px;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../index.php">
            <h1><img class="img-responsive" src="../images/logo.png" alt="logo"></h1>
          </a>                    
        </div>
       
      </div>
    </div><!--/#main-nav-->
    </header>
 <section id="about-us">
        <div class="container">
            <div class="box">
                <div class="center"><br/><br/><br/>

<center>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <form class="form-horizontal" role="form" action="include/var_session.php" method="post" enctype="multipart/form-data">
        
 
         
          <legend>Inscription</legend>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="nom">Nom:</label>
            <div class="col-sm-4">
              <input name="nom" id="nom" type="text" required="" placeholder="Votre nom" class="form-control">
            </div>

            <label class="col-sm-2 control-label" for="prenom" id="prenom">Prénom(s):</label>
            <div class="col-sm-4">
              <input name="prenom" id="prenom" type="text" required="" placeholder="Votre Prénom" class="form-control">
            </div>
          </div>


          <div class="form-group">
            <label class="col-sm-2 control-label" for="naissance">Naissance:</label>
            <div class="col-sm-4">
              
              <input name="naissance" class="form-control" id="naissance" required="" type="date">
            </div>

            <label class="col-sm-2 control-label" for="lieu" id="lieu">Lieu:</label>
            <div class="col-sm-4">
              <input name="lieu" id="lieu" type="text" required="" placeholder="Lieu de naissance" class="form-control">
            </div>
          </div>

          <div class="form-group">
            <label class="col-sm-2 control-label" for="mail1">E-mail</label>
            <div class="col-sm-10">
              <input name="mail1" class="form-control input-md" id="mail1" required="" type="email" placeholder="Votre email">
            </div>
          </div>

<div class="form-group">
            <label class="col-sm-2 control-label" for="mail2">Ressaisir E-mail</label>
            <div class="col-sm-10">
              <input name="mail2" class="form-control input-md" id="mail2" required="" type="email" placeholder="Ressaisir email">
            </div>
          </div>


          <div class="form-group">
            <label class="col-sm-2 control-label" for="adre">Adresse</label>
            <div class="col-sm-10">
              <input name="adre" type="text" placeholder="Votre adresse" class="form-control">
            </div>
          </div>

         
          <div class="form-group">
          <label class="col-sm-2 control-label" for="tel">Téléphone:</label>
            <div class="col-sm-4">
              <input name="tel" class="form-control input-md" id="tel" required="" type="text" placeholder="Téléphone">
            </div>

            



 <div class="form-group">
            
           <label class="col-sm-2 control-label" for="sex">Sexe:</label>
            <div class="col-sm-4">
              <label class="radio-inline" for="radios-0">
                <input name="sex" id="radios-0" type="radio" checked="checked" value="masculin">
                M
              </label> 
              <label class="radio-inline" for="radios-1">
                <input name="sex" id="radios-1" type="radio" value="feminin">
                F
              </label>
            
            </div>
          </div>

          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="pull-right">
                <button class="btn btn-default">Annuler</button>
                <a href=""><button name="suivant" id="suivant" class="btn btn-primary">Suivant</button></a>
              </div>
            </div>
          </div>

       
      </form>
    </div>
</div>
</center>

 <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms" style="width: 200px;">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="../index.php"><img class="img-responsive" src="../images/logo.png" alt=""></a>
        </div>
        <div class="social-icons">
          <ul>
            <li><a class="envelope" href="#"><i class="fa fa-envelope"></i></a></li>
            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li> 
            <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            <li><a class="tumblr" href="#"><i class="fa fa-tumblr-square"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <p>&copy; 2014 Oxygen Theme.</p>
          </div>
          <div class="col-sm-6">
            <p class="pull-right">Designed by <a href="http://www.themeum.com/">Themeum</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script type="text/javascript" src="../js/jquery.js"></script>
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script type="text/javascript" src="../js/jquery.inview.min.js"></script>
  <script type="text/javascript" src="../js/wow.min.js"></script>
  <script type="text/javascript" src="../js/mousescroll.js"></script>
  <script type="text/javascript" src="../js/smoothscroll.js"></script>
  <script type="text/javascript" src="../js/jquery.countTo.js"></script>
  <script type="text/javascript" src="../js/lightbox.min.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>
</body>
</html>