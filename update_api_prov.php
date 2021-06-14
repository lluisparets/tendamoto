<?php

include "includes/mysql.php";

$id = $_GET['id'];
/*
$qry = mysqli_query($bbdd,"select * from Proveidor where idProveidor='$id'") or die (mysqli_error($bbdd));

$data = mysqli_fetch_assoc($qry); 
*/
if (isset($id))
    $Nom = $_POST['Nom'];
$Adreca = $_POST['Adreca'];
$Telefon = $_POST['Telefon'];
$query = "update Proveidor set Nom='$Nom', Adreca='$Adreca', Telefon='$Telefon' WHERE idProveidor = $id";
$edit = mysqli_query($bbdd, $query);

if ($edit) {
    mysqli_close($bbdd);
    header("location:ok.php");
} else {
    $error =  mysqli_error($bbdd);
    header("location:no_ok.php?error=$error");
}
