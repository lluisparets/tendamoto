<?php 
require 'includes/head.php'; 

    echo "<p>" . $_POST['Nom'] . "</p>";
echo "<p>" . $_POST['Adreca'] . "</p>";
echo "<p>" . $_POST['Telefon'] . "</p>";

$nom = $_POST['nom'];
$adreca = $_POST['adreca'];
$telefon = $_POST['telefon'];

$query = "INSERT INTO Proveidor (Nom,Adreca,Telefon) VALUES (\"$nom\",\"$adreca\",\"$telefon\")";
echo "<p>" . $query . "</p>";

$res = mysqli_query($bbdd, $query);
if ($result) {
    header("Location: ok.php");
} else {
    $error = mysqli_error($bbdd);
    header("location: no_ok.php?error=$error");
}
