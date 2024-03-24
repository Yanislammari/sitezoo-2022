<?php

$bdd = mysqli_connect("localhost","root","","zoo");
$bdd1 = mysqli_select_db($bdd, "zoo");

$sexe = "off";

$a = $_POST['nom'];
$b = $_POST['prenom'];
$c = $_POST['date'];

if(isset($_POST['H']))
{
    $sexe = "H";
}
if(isset($_POST['F']))
{ 
    $sexe = "F";
}
if(isset($_POST['H']) && isset($_POST['F']))
{
    header('location:ajouter.php?erreur=existe');
    exit();
}
if(!isset($_POST['H']) && !isset($_POST['F']))
{
    header('location:ajouter.php?erreur2=existe');
    exit();
}


$d = $_POST['fonction'];
$e = $_POST['salaire'];


 $req1 = "INSERT INTO personnels (Nom_personnel,Prenom_personnel,Date_personnel,Sexe_personnel,Fonction_personnel,Salaire_personnel) VALUES ('$a','$b','$c','$sexe','$d','$e')";
 $r1 = mysqli_query($bdd, $req1);
       
echo "<p align='center'><b><font size='7' color='#FF3399' face='Kunstler Script'> L'enregistrement a bien ete effectue </font></b></p> ";


mysqli_close($bdd)
?>