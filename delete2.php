<HTML>
</HEAD>
<BODY>
<?php
$idc=mysqli_connect("localhost","root","");
$c=mysqli_select_db($idc,"zoo");

$id=$_GET['ID'];

$sql = "DELETE FROM personnels WHERE ID = $id";
mysqli_query($idc,$sql);
header('Location:affiche3.php');
    exit;

mysqli_close ($idc) ;
?>
</BODY>
</HTML>