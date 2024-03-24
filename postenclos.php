<?php

$bdd = mysqli_connect("localhost","root","","zoo");
$bdd1 = mysqli_select_db($bdd, "zoo");

$eau = "off";

$a = $_POST['nom'];
$b = $_POST['capacité'];
$c = $_POST['taille'];

if(isset($_POST['oui']))
{
    $eau = 1;
}
if(isset($_POST['non']))
{ 
    $eau = 0;
}
if(isset($_POST['oui']) && isset($_POST['non']))
{
    header('location:ajouter4.php?erreur=existe');
    exit();
}
if(!isset($_POST['oui']) && !isset($_POST['non']))
{
    header('location:ajouter4.php?erreur2=existe');
    exit();
}


$d = $_POST['responsable'];


 $req1 = "INSERT INTO enclos (Nom_enclos,Capacite_enclos,Taille_enclos,Eau_enclos,Responsable_enclos) VALUES ('$a','$b','$c','$eau','$d')";
 $r1 = mysqli_query($bdd, $req1);
       
echo "<p align='center'><b><font size='7' color='#FF3399' face='Kunstler Script'> L'enregistrement a bien ete effectue </font></b></p> ";


mysqli_close($bdd)
?>