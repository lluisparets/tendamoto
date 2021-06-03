<?php 
require 'includes/head.php'; 

echo "<p>" . $_POST['Nom'] . "</p>";
echo "<p>" . $_POST['Adreca'] . "</p>";
echo "<p>" . $_POST['Telefon'] . "</p>";

$Nom = $_POST['Nom'];
$Adreca = $_POST['Adreca'];
$Telefon = $_POST['Telefon'];

$query = "INSERT INTO Proveidor (Nom,Adreca,Telefon) VALUES (\"$Nom\",\"$Adreca\",\"$Telefon\")";
echo "<p>" . $query . "</p>";

$result = mysqli_query($bbdd, $query);
if ($result) {
    header("Location: ok.php");
} else {
    $error = mysqli_error($bbdd);
    header("location: no_ok.php?error=$error");
}
