<?php
require "includes/head.php";
$query="delete from Moto where idMoto=\"$_GET[id]\" ";
$result=mysqli_query($bbdd,$query);
echo $query; exit();
if($result){
    header('Location: ok.php');
}else{
    $error = mysqli_error($bbdd);
    header("Location: no_ok.php?error=$error");
}
