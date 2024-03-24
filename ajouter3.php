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
  <div class="bienvenue"><h1>Ajouter un employé</h1></div>
    <div class="formulaire">
    <form action="postemploye.php" method="post">
          <label>Nom :</label>
            <input type="text" name="nom">         
          <label>Prenom :</label>
            <input type="text" name="prenom">
            <br>
            <label>Date de naissance :</label>
            <input type="date" name="date">  
            <br>
            <label>Sexe :</label>
            <div  class="divinput"> <label>HOMME :</label>
            <input type="checkbox" name="H"></div>
           <div class="divinput"> <label>FEMME :</label>
            <input type="checkbox" name="F"></div>
            <label>Fonction :</label>
            <input type="text" name="fonction">
            <br>
            <label>Salaire :</label>
            <input type="text" name="salaire">
            <div class="divinput"> <input type="submit" name="valid" value="ajouter"></div>
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