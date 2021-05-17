<?php 
require 'includes/head.php'; 

echo "<p>" . $_POST['firstname'] . "</p>";
echo "<p>" . $_POST['lastname'] . "</p>";
echo "<p>" . $_POST['direccio'] . "</p>";
echo "<p>" . $_POST['Email'] . "</p>";
echo "<p>" . $_POST['Numero_Telefon'] . "</p>";

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$direccio = $_POST['direccio'];
$Email = $_POST['Email'];
$Numero_Telefon = $_POST['Numero_Telefon'];

$query = "INSERT INTO Client (firstname,lastname,direccio,Email,Numero_Telefon) VALUES (\"$firstname\",\"$lastname\",\"$direccio\",\"$Email\",\"$Numero_Telefon\");";
echo "<p>" . $query . "</p>";

$res = mysqli_query($bbdd, $query);

if ($result) {
    header("Location: ok.php");
} else {
    $error = mysqli_error($bbdd);
    header("location: no_ok.php?error=$error");
}