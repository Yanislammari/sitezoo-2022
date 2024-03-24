<?php
if(isset($pseudo) && isset($mdp)) 
{
include 'c_connexion.php';
session_start();
}
else
{
session_start();
}
$a="fondepage2";
$b="background";

?>

<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Index Yanis</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="zooacueil.css">

</head>
<body background="
<?php 
if($_SESSION['type'] == "Admin")
{
    echo 'fondepage.png';
}
if($_SESSION['type'] == "Visiteur"){
    echo 'background.jpg';
}
?>
"
>
<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand">Site ZOO</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav navbar-right">
      <li>
          <?php if($_SESSION['type'] == "Admin")
          {
            echo '<a href="sitezooaccueil.php">Gestion</a>';
          }
          else
          {
            echo '<a href="">DEVENIR ADMIN</a>';
          }
          ?>
        </li>
        <li>
          <a href="description.php">Accueil</a>
        </li>
        <li>
            <a href="#"><?php echo $_SESSION['profil'];?></a>
        </li>
        <li class="active">
          <a href="inscription.php">Inscription</a>
        </li>
      </ul>
    </nav>
  </div>
</header>
<!-- partial -->
  <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
  <br>
  <div class="bienvenue"><h1>Bienvenue sur le site zoo !</h1></div>
  <div class="titretable"><h1>Voici les animaux que vous retrouverez dans notre zoo</h1></div>
          <br>
          <br>

<div class="tableau">        

  <div class="gestionanimaux1">
      <img src="raton.jpg" width= "100px" height= "100px">
  </div>         

  <div class="gestionanimaux2">
      <img src="5.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux3">
      <img src="unnamed.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux4">
      <img src="2.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux5">
      <img src="1.jpeg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux6">
      <img src="4.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux7">
      <img src="6.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux8">
      <img src="7.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux9">
      <img src="8.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux10">
      <img src="9.jpeg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux11">
      <img src="10.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux12">
      <img src="11.jpeg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux13">
      <img src="12.webp" width= "100px" height= "100px">
  </div>         

  <div class="gestionanimaux14">
      <img src="13.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux15">
      <img src="14.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux16">
      <img src="15.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux17">
      <img src="16.webp" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux18">
      <img src="17.jpeg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux19">
      <img src="18.png" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux20">
      <img src="19.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux21">
      <img src="20.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux22">
      <img src="21.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux23">
      <img src="22.webp" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux24">
      <img src="23.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux25">
      <img src="24.jpg" width= "100px" height= "100px">
  </div>         

  <div class="gestionanimaux26">
      <img src="25.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux27">
      <img src="26.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux28">
      <img src="27.jpeg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux29">
      <img src="28.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux30">
      <img src="29.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux31">
      <img src="30.webp" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux32">
      <img src="31.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux33">
      <img src="32.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux34">
      <img src="33.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux35">
      <img src="34.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux36">
      <img src="35.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux37">
      <img src="36.jpg" width= "100px" height= "100px">
  </div>         

  <div class="gestionanimaux38">
      <img src="37.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux39">
      <img src="38.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux40">
      <img src="39.jpeg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux41">
      <img src="40.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux42">
      <img src="41.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux43">
      <img src="42.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux44">
      <img src="43.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux45">
      <img src="44.webp" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux46">
      <img src="45.jpg" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux47">
      <img src="46.webp" width= "100px" height= "100px">
  </div> 

  <div class="gestionanimaux48">
      <img src="47.jpg" width= "100px" height= "100px">
  </div> 

</div>