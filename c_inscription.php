<?php

$idc=mysqli_connect("localhost","root","");
$c=mysqli_select_db($idc,"zoo");

$a = $_POST['pseudo'];
$b = $_POST['email'];
$c = $_POST['mdp'];
$t = $_POST['type'];


$req1 = "INSERT INTO comptes (Pseudo, mail, mdp, types) VALUES ('$a','$b','$c','$t')";
$r1 = mysqli_query($idc, $req1);

echo mysqli_error($idc);

header('Location: connexion.php');

?>