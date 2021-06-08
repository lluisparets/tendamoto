<?php

include "includes/mysql.php"; 

$id = $_GET['id'];
/*
$qry = mysqli_query($bbdd,"select * from Proveidor where idProveidor='$id'") or die (mysqli_error($bbdd));

$data = mysqli_fetch_assoc($qry); 
*/
if(isset($id))  
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $direccio = $_POST['direccio'];
    $Email = $_POST['Email'];
    $Numero_Telefon = $_POST['Numero_Telefon'];
    $query = "update Client set 'firstname='$firstname', lastname='$lastname', 
    direccio='$direccio', Email='$Email', Numero_Telefon='$Numero_Telefon' WHERE idClient = $id";
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
    