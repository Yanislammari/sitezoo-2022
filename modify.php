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
$idc=mysqli_connect("localhost","root","");
$c=mysqli_select_db($idc,"zoo");

$pseudo = $_GET['Pseudo'];
$com = $_GET['Commentaire'];
$sexe = $_GET['Sexe'];
$ID = $_GET['ID'];
$date = $_GET['Naissance'];

?>

<br>
<br>
<br>
<br>
<br>
<br>
<div class="formulaire">
    <form action="cmodify.php" method="post">
        <label>ID :</label>
            <input type="text", value="<?php echo $ID ?>" name="ID" readonly>
          <div class="divinput">  <label>Race :</label>

          <?php

          $query = "SELECT * FROM especes";
          $result = mysqli_query($idc,$query);
          ?>
          <select name="race" id="race" ></div>
          <?php
          while($row=mysqli_fetch_array($result, MYSQLI_ASSOC))
          {
              ?>
              <option value="<?php echo $row['Nom_race']; ?>">   <?php echo $row["Nom_race"]; ?></option>
          <?php
          }
         ?>
         </select>
          <div  class="divinput">

          <label>Date de naissance :</label>
            <input type="date" value="<?php echo $date; ?>" name="date">     
          </div>     

            <label>Sexe :</label>
            <div  class="divinput"> <label>MALE :</label>
            <?php 
            if($sexe == "Male")
            {
                ?>
                <input type="checkbox" name="m" checked></div>
                <div class="divinput"> <label>FEMELLE :</label>
                <input type="checkbox" name="f"></div>
                <?php
            }
            else
            {
                ?>
                <input type="checkbox" name="m" ></div>
                <div class="divinput"> <label>FEMELLE :</label>
                <input type="checkbox" name="f" checked></div>
                <?php
            }
            ?>

            <label>Nom/Pseudo :</label>
            <input type="text", value="<?php echo $pseudo ?>" name="nom">

            <br>
            <label>Commentaire :</label>
            <input type="text" value="<?php echo $com ?>"  name="commentaire">
            <div class="divinput"> <input type="submit" name="valid" value="Modifier l'animal"></div>
    </form>
    </div>

<?php
#$sql = "DELETE FROM animaux WHERE ID = $id";
#mysqli_query($idc,$sql);
#header('Location:affiche.php');
#    exit;

mysqli_close ($idc) ;
?>
</BODY>
</HTML>

<?php 
    if(isset($_GET['erreur']))
    {
        echo "<p align='center'><b><font size='7' color='#FF3399'> Erreur ! Attention deux options sont coches pour les animaux </font></b></p> ";
    }
?>

<?php 
    if(isset($_GET['erreur2']))
    {
        echo "<p align='center'><b><font size='7' color='#FF3399'> Erreur ! Vous n'avez coche aucune option pour les animaux </font></b></p> ";
    }
?>