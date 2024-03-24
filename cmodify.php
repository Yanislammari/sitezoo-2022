<HTML>
</HEAD>
<BODY>
<?php
$idc=mysqli_connect("localhost","root","");
$c=mysqli_select_db($idc,"zoo");

$sexe = "off";

$a = $_POST['race'];
$b = $_POST['date'];

$ID = $_POST['ID'];

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
    header('location:modify.php?erreur=existe');
    exit();
}
if(!isset($_POST['m']) && !isset($_POST['f']))
{
    header('location:modify.php?erreur2=existe');
    exit();
}


$c = $_POST['nom'];
$d = $_POST['commentaire'];

$sql = "UPDATE animaux SET ID_Race = (SELECT ID FROM especes WHERE Nom_race = '$a'), Naissance = '$b', Sexe = '$sexe', Pseudo = '$c', Commentaire = '$d' WHERE ID = '$ID' ";
mysqli_query($idc,$sql);
header('Location:affiche.php');
    exit;

mysqli_close ($idc) ;
?>
</BODY>
</HTML>