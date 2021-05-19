<?php 
require 'includes/head.php'; 

echo "<p>" . $_POST['Fecha'] . "</p>";
echo "<p>" . $_POST['Preu'] . "</p>";
echo "<p>" . $_POST['Compra'] . "</p>";
echo "<p>" . $_POST['fkidclient'] . "</p>";
echo "<p>" . $_POST['fkidmoto'] . "</p>";

$Fecha = $_POST['Fecha'];
$Preu = $_POST['Preu'];
$Compra = $_POST['Compra'];
$fkidclient = $_POST['fkidclient'];
$fkidmoto = $_POST['fkidmoto'];

$query = "INSERT INTO Venta (Fecha,Preu,Compra,fkidclient,fkidmoto) VALUES (\"$Fecha\",\"$Preu\",\"$Compra\",\"$fkidmoto\",\"$fkidclient\")";

$res = mysqli_query($bbdd, $query);
if ($result) {
    header("Location: ok.php");
} else {
    $error = mysqli_error($bbdd);
    header("location: no_ok.php?error=$error");
}