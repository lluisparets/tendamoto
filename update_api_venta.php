<?php

include "includes/mysql.php"; 

$id = $_GET['id'];
/*
$qry = mysqli_query($bbdd,"select * from Proveidor where idProveidor='$id'") or die (mysqli_error($bbdd));

$data = mysqli_fetch_assoc($qry); 
*/
if(isset($id)) 
    $Fecha = $_POST['Fecha'];
    $Preu = $_POST['Preu'];
    $Compra = $_POST['Compra'];
    $query = "update Proveidor set Fecha='$Fecha', Preu='$Preu', Compra='$Compra' WHERE idVenta = $id";
    $edit = mysqli_query($bbdd,$query);
	
    if($edit)
    {
        mysqli_close($bbdd);
        header("location:ok.php");
    }
    else
    {
        $error =  mysqli_error($bbdd);
        header("location:no_ok.php?error=$error");
    }    
    
    