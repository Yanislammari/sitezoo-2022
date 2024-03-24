<HTML>
</HEAD>
<BODY>
<?php
$idc=mysqli_connect("localhost","root","");
$c=mysqli_select_db($idc,"zoo");

$sexe = "off";

$ID = $_POST['ID'];
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
    header('location:modify2.php?erreur=existe');
    exit();
}
if(!isset($_POST['H']) && !isset($_POST['F']))
{
    header('location:modify2.php?erreur2=existe');
    exit();
}


$d = $_POST['fonction'];
$e = $_POST['salaire'];

$sql = "UPDATE personnels SET Nom_personnel = '$a', Prenom_personnel = '$b', Date_Personnel = '$c', Sexe_personnel = '$sexe', Fonction_personnel = '$d', Salaire_personnel = '$e' WHERE ID = '$ID' ";
mysqli_query($idc,$sql);
header('Location:affiche3.php');
    exit;

mysqli_close ($idc) ;
?>
</BODY>
</HTML>