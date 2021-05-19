<?php 
require 'includes/head.php'; 

echo "<p>" . $_POST['direccio'] . "</p>";
echo "<p>" . $_POST['venador'] . "</p>";
echo "<p>" . $_POST['nom_tenda'] . "</p>";
echo "<p>" . $_POST['telefon'] . "</p>";
echo "<p>" . $_POST['fkidventa'] . "</p>";

$direccio = $_POST['direccio'];
$venedor = $_POST['venador'];
$nom_tenda = $_POST['nom_tenda'];
$telefon = $_POST['telefon'];
$fkidventa = $_POST['fkidventa'];

$query = "INSERT INTO tenda (Direccio,Venedor,nom_tenda,Telefon,fkidventa) VALUES (\"$Direccio\",\"$Venedor\",\"$Nom_Tenda\",\"$Telefon\",\"$fkidventa\");";
echo "<p>" . $query . "</p>";

$res = mysqli_query($bbdd, $query);

if ($result) {
    header("Location: ok.php");
} else {
    $error = mysqli_error($bbdd);
    header("location: no_ok.php?error=$error");
}