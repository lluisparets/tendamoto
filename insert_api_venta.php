<?php
require 'includes/head.php';


$Fecha = $_POST['Fecha'];
$Preu = $_POST['Preu'];
$Compra = $_POST['Compra'];
$fkidclient = $_POST['fkidclient'];
$fkidmoto = $_POST['fkidmoto'];

$query = "INSERT INTO Venta (Fecha,Preu,Compra,fkidclient,fkidmoto) VALUES (\"$Fecha\",\"$Preu\",\"$Compra\",
\"$fkidclient\", \"$fkidmoto\")";

$result = mysqli_query($bbdd, $query);
if ($result) {
    header("Location: ok.php");
} else {
    $error = mysqli_error($bbdd);
    header("location: no_ok.php?error=$error");
}
