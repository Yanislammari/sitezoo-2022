<?php

$bdd = mysqli_connect("localhost","root","","zoo");
$bdd1 = mysqli_select_db($bdd, "zoo");

?>


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

?>


<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Index Yanis</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="zooacueil.css">

</head>
<body background="fondepage2.png">
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
          <a href="description.php">Description zoo</a>
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
  <div class="bienvenue"><h1>Ajouter un enclos</h1></div>
    <div class="formulaire">
      <form action="postenclos.php" method="post">
          <label>Nom de l'enclos :</label>
            <input type="text" name="nom">
            <br>                   
          <label>Capacité maximale :</label>
            <input type="number" name="capacité">
            <br>
            <label>Taille :</label>
            <input type="numebr" name="taille">  
            <br>
            <label>Présence d'eau :</label>
            <div  class="divinput"> <label>Oui :</label>
            <input type="checkbox" name="oui"></div>
           <div class="divinput"> <label>Non :</label>
            <input type="checkbox" name="non"></div>
            <label>Responsable :</label>
            <input type="text" name="responsable">
            <input type="submit" value="ajouter">
            <a href="gestionemploye.php">Retour a la gestion employe</a>
      </form>
    </div>


<?php 
    if(isset($_GET['erreur']))
    {
        echo "<p align='center'><b><font size='7' color='#FF3399'> Erreur ! Attention deux options sont coches pour les employe </font></b></p> ";
    }
?>

<?php 
    if(isset($_GET['erreur2']))
    {
        echo "<p align='center'><b><font size='7' color='#FF3399'> Erreur ! Vous n'avez coche aucune option pour les employe </font></b></p> ";
    }
?>