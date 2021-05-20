<?php
require "includes/head.php";
$query="delete from Proveidor where idProveidor=\"$_GET[id]\" ";
$result=mysqli_query($bbdd,$query);

if($result){
    header('Location: ok.php');
}else{
    $error = mysqli_error($bbdd);
    header("Location: no_ok.php?error=$error");
}