<?php

try
{
$db = new PDO('mysql:host=localhost;dbname=esaticforum', 'root', '');
}
catch (Exception $e)
{
die('Erreur : ' . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>ANNUAIRE</title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/animate.min.css" rel="stylesheet">
  <link href="Includes/log.css" rel="stylesheet"> 

  <link href="../css/font-awesome.min.css" rel="stylesheet">
  <link href="../css/lightbox.css" rel="stylesheet">
  <link href="../css/main.css" rel="stylesheet">
  <link id=".css-preset" href="../css/presets/preset1.css" rel="stylesheet">
  <link href=".//css/responsive.css" rel="stylesheet">

  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700' rel='stylesheet' type='text/css'>
  <link rel="shortcut icon" href="../images/favicon.ico">
</head><!--/head-->

<body>
 <header id="home">

<div class="main-nav">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">
            <h1><img class="img-responsive" src="../images/logo.png" alt="logo"></h1>
          </a>                    
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right">                 
            <li class="scroll active"><a href="other.php">Accueil</a></li>
            <li class="scroll "><a href="#services">Forum</a></li> 
            <li class="scroll "><a href="decon.php">Deconnexion</a></li>
            <!-- <li class="scroll"><a href="#about-us">About Us</a></li>                     
            <li class="scroll"><a href="#portfolio">Portfolio</a></li> -->       
          </ul>
        </div>
      </div>
    </div><!--/#main-nav-->
  </header><!--/#home-->


  <?php

  $reponse=$db->query("SELECT * FROM etudiant ");

  echo '<br><br>        
  <table class="table">
    <thead>
      <tr>
        <th>Photo</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>naissance</th>
        <th>sexe</th>
        <th>niveau</th>
        <th>specialite</th>
        <th>ecole</th>
        <th>email</th>
        <th>telephone</th>
        <th>description</th>
      </tr>
    </thead>
    <tbody>';
    while($donnees=$reponse->fetch()) {?> 

      <tr>
        <td><?php echo '<a href="avatar/'.$donnees['photo'].'"><img src="avatar/'.$donnees['photo'].'" class="img-circle"  width="150" height="150" /></a>';?></td>
        <td><?php echo $donnees['nom'] ?></td>
        <td><?php echo $donnees['prenom'] ?></td>
        <td><?php echo $donnees['date_naiss'] ?></td>
        <td><?php echo $donnees['sexe'] ?></td>
        <td><?php echo $donnees['niveau'] ?></td>
        <td><?php echo $donnees['specialite'] ?></td>
        <td><?php echo $donnees['ecole'] ?></td>
        <td><?php echo $donnees['email'] ?></td>
        <td><?php echo $donnees['tel'] ?></td>
        <td><?php echo $donnees['description'] ?></td>
      </tr>
   

<?php }
 echo ' </tbody>
  </table>
  </div>';
  ?>
  




<script type="text/javascript">

$img = $('img', $container),
    $('a:not(.brand)').mousemove(function (e) {
    $container.css({
        top: e.pageY + 10 + 'px',
        left: e.pageX + 10 + 'px'
    });

}).hover(function () {

    var link = this;
    $container.show();
    $img.load(function () {
        //$container.removeClass(s.containerLoadingClass);
        $img.addClass('img-rounded');
        $img.show();
        //s.onLoad.call($img[0], link);
    }).attr('src', $(link).prop('href'));
    //alert($(link).prop('href'));
    //s.onShow.call($container[0], link);

}, function () {

    $container.hide();
    $img.unbind('load').attr('src', '').hide();
    //s.onHide.call($container[0], this);

});
</script>
  <section id="services">
    <div class="container">
      <div class="heading wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
        <div class="row">
          <div class="text-center col-sm-8 col-sm-offset-2">
           
          </div>
        </div> 
      </div>
      <div class="text-center our-services">

      </div>
    </div>
  </section><!--/#services-->
  
  <footer id="footer">
    <div class="footer-top wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
      <div class="container text-center">
        <div class="footer-logo">
          <a href="index.html"><img class="img-responsive" src="../images/logo.png" alt=""></a>
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