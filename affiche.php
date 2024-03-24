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
  <body>

  <div class="affiche">


  <div class="formulaire1">
    <form action="affiche2.php" method="post">
          <div class="divinput">  <label>Pseudo de l'animal :</label>
          <input type="text" name="nom">
          <div class="divinput"> <input type="submit" name="valid" value="RECHERCHER UN ANIMAL"></div>
    </form>
    </div>

<!-- Requête d'affichage du tableau -->  
<?php
$idc=mysqli_connect("localhost","root","");
$c=mysqli_select_db($idc,"zoo");
$requete="SELECT a.ID, a.ID_race, E.Nom_race, a.Naissance, a.Sexe, a.Pseudo, a.Commentaire FROM animaux as a INNER JOIN especes as E on a.ID_race = E.ID";
$resultat=mysqli_query($idc,$requete);
echo "Il y'a ".mysqli_num_rows($resultat)." animaux.";
?>


<TABLE border=1>
<TR>
<TD> ID </TD>
<TD> Pseudo </TD>
<TD> Race </TD>
<TD> Sexe </TD>
<TD> Commentaire </TD>
<TD> Date de naissance </TD>

</TR>
<?php while($enreg=mysqli_fetch_array($resultat))
{
?>
<TR>
<TD><?php echo $enreg['ID'];?></TD>
<TD><?php echo $enreg['Pseudo'];?></TD>
<TD><?php echo $enreg['Nom_race'];?></TD>
<TD><?php echo $enreg['Sexe'];?></TD>
<TD><?php echo $enreg['Commentaire'];?></TD>
<TD><?php echo $enreg['Naissance'];?></TD>
<?php 
echo "<td><a href='delete.php?ID=".$enreg['ID']."'>Supprimer</a></td>";
echo "<td><a href='modify.php?Pseudo=".$enreg['Pseudo']."&Commentaire=".$enreg['Commentaire']."&Sexe=".$enreg['Sexe']."&ID=".$enreg['ID']."&Naissance=".$enreg['Naissance']."'>Modifier</a></td>";
?>

</TR>
<?php }?>
</TABLE>

<a href="gestionanimaux.php">Retour a la gestion animaux</a>

<?php 
mysqli_close ($idc) ;
?>
</BODY>
</HTML>