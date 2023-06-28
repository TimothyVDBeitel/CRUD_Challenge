<?php

include 'database.php';

$name = $_POST['studentnaam'];
$klas = $_POST['klas']; 
$minuten_te_laat = $_POST['minuten_te_laat'];
$Reden_te_laat = $_POST['Reden_te_laat'];

$sql = "INSERT INTO `te_laat_meldingen`(`klas`, `minuten_te_laat`, `Reden_te_laat`, `studentnaam`) VALUES ('$klas','$minuten_te_laat','$Reden_te_laat','$name')";
echo $sql;
$exe = getData($sql ,'');

header("location:CRUD-Challenge-Timothy_van_den_Beitel.php");

?>




