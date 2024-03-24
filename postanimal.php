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

<?php

$bdd = mysqli_connect("localhost","root","","zoo");
$bdd1 = mysqli_select_db($bdd, "zoo");

$sexe = "off";

$a = $_POST['race'];
$b = $_POST['date'];

if(isset($_POST['m']))
{
    $sexe = "Male";
}
if(isset($_POST['f']))
{ 
    $sexe = "Femelle";
}
if(isset($_POST['m']) && isset($_POST['f']))
{
    header('location:ajouter.php?erreur=existe');
    exit();
}
if(!isset($_POST['m']) && !isset($_POST['f']))
{
    header('location:ajouter.php?erreur2=existe');
    exit();
}


$c = $_POST['nom'];
$d = $_POST['commentaire'];



 #$req1 = "INSERT INTO animaux (ID_race,Naissance,Sexe,Pseudo,Commentaire) VALUES ('$a','$b','$sexe','$c','$d')";
 $req1 = "INSERT INTO animaux (ID_race,Naissance,Sexe,Pseudo,Commentaire) VALUES ((SELECT ID FROM especes WHERE Nom_race = '$a'),'$b','$sexe','$c','$d')";
 $r1 = mysqli_query($bdd, $req1);
       
?>

<div class="bienvenue"><h1 align='center'><b><font size='7' color='#FF3399'> L'enregistrement a bien ete effectue </font></b></h1></div>
<br>
<a href="gestionanimaux.php">Retour a la gestion animaux</a>

<?php

mysqli_close($bdd);
?>