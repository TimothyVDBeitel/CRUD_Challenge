<?php
// echo $_GET['id'];
?>

<?php 
include 'database.php'; 
$verwijder_id=$_GET["id"];
$sql="DELETE FROM `te_laat_meldingen` WHERE id=$verwijder_id";

echo $sql;
$resultaat=getData($sql,"delete");
header('location:CRUD-Challenge-Timothy_van_den_Beitel.php');





?>
