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


  <div class="formulaire">
    <form action="affiche4.php" method="post">
          <div class="divinput">  <label>Nom de l'employé :</label>
          <input type="text" name="nom">
          <div class="divinput"> <input type="submit" name="valid" value="RECHERCHER UN EMPLOYE"></div>
    </form>
    </div>

<!-- Requête d'affichage du tableau -->  
<?php
$idc=mysqli_connect("localhost","root","");
$c=mysqli_select_db($idc,"zoo");
$requete="SELECT * FROM personnels";
$resultat=mysqli_query($idc,$requete);
echo "Il y'a ".mysqli_num_rows($resultat)." employés.";
?>


<TABLE border=1>
<TR>
<TD> ID </TD>
<TD> Nom </TD>
<TD> Prénom </TD>
<TD> Date de naissance </TD>
<TD> sexe </TD>
<TD> fonction </TD>
<TD> salaire </TD>


</TR>
<?php while($enreg=mysqli_fetch_array($resultat))
{
?>
<TR>
<TD><?php echo $enreg['ID'];?></TD>
<TD><?php echo $enreg['Nom_personnel'];?></TD>
<TD><?php echo $enreg['Prenom_personnel'];?></TD>
<TD><?php echo $enreg['Date_personnel'];?></TD>
<TD><?php echo $enreg['Sexe_personnel'];?></TD>
<TD><?php echo $enreg['Fonction_personnel'];?></TD>
<TD><?php echo $enreg['Salaire_personnel'];?></TD>
<?php 
echo "<td><a href='delete2.php?ID=".$enreg['ID']."'>Supprimer</a></td>";
echo "<td><a href='modify2.php?ID=".$enreg['ID']."&Nom=".$enreg['Nom_personnel']."&Prenom=".$enreg['Prenom_personnel']."&Date=".$enreg['Date_personnel']."&Sexe=".$enreg['Sexe_personnel']."&Fonction=".$enreg['Fonction_personnel']."&Salaire=".$enreg['Salaire_personnel']."'>Modifier</a></td>";
?>

</TR>
<?php }?>
</TABLE>

<a href="gestionemploye.php">Retour a la gestion employe</a>

<?php 
mysqli_close ($idc) ;
?>
</BODY>
</HTML>