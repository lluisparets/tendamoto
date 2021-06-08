<?php

include "includes/mysql.php"; 

$updateImg = '';
if(isset($_FILES['imatgeMoto'])){
    $tmp = $_FILES['imatgeMoto']['tmp_name'];
    $path = 'imatges/productes/' . $_GET['id'] .  '.jpg';
    $m = move_uploaded_file($tmp, $path);
    if(!$m){
        echo 'imatge no pujada'; exit();
    }
    $updateImg = ", imatgeMoto = \"$_GET[id].jpg\" ";
}else{

    return"";
}

$id = $_GET['id'];
/*
$qry = mysqli_query($bbdd,"select * from Proveidor where idProveidor='$id'") or die (mysqli_error($bbdd));

$data = mysqli_fetch_assoc($qry); 
*/
if(isset($id)) 
    $Marca = $_POST['marca'];
    $Model = $_POST['model'];
    $Cilindrada = $_POST['cilindrada'];
    $Categoria = $_POST['categoria'];
    $Preu = $_POST['preu'];ps://localhost/tendamoto_git/tendamoto/llista_venta.php
    $query = "update Moto set marca='$Marca', model='$Model', cilindrada='$Cilindrada', 
    categoria='$Categoria', preu='$Preu' WHERE idMoto = $id";
    //echo $query; exit();
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
    
        