<?php

include "includes/mysql.php"; 

$id = $_GET['id'];
/*
$qry = mysqli_query($bbdd,"select * from Proveidor where idProveidor='$id'") or die (mysqli_error($bbdd));

$data = mysqli_fetch_assoc($qry); 
*/
if(isset($id)) 
    $Marca = $_POST['Marca'];
    $Model = $_POST['Model'];
    $Cilindrada = $_POST['Cilindrada'];
    $Categoria = $_POST['Categoria'];
    $Preu = $_POST['Preu'];
    $query = "update Proveidor set Marca='$Marca', Model='$Model', Cilindrada='$Cilindrada', Categoria='$Categoria', Preu='$Preu' WHERE idProveidor = $id";
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
    
        