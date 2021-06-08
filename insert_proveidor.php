<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php';?>
    <?php require 'includes/header.php';?>

    <?php
    $Nom = '';
    $Adreca = '';
    $Telefon = '';
    if(isset($_GET['id']))
    {
        $query = "SELECT * from Proveidor WHERE idProveidor = $_GET[id]";
        $result = mysqli_query($bbdd, $query) or die (mysqli_error($bbdd));
        $Proveidor = mysqli_fetch_assoc($result);
        $Nom = $Proveidor['Nom'];
        $Adreca = $Proveidor['Adreca'];
        $Telefon = $Proveidor['Telefon'];
    }

?>
    <h1 style="color:blue;"><?=isset($_GET['id']) ? 'ACTUALITZA' : 'INSERTA'?> UN PPROVEIDOR</h1>
    <form action="<?=isset($_GET['id']) ? 'update_api_prov.php?id='.$_GET['id'] : 'insert_api_proveidor.php'?>" method="POST">
    
    <div>  
        <Label><b>Nom del proveidor</b></Label>
        <input required name="Nom" value="<?=$Nom?>" placeholder="nom proveidor..."> </input>
    </div>

    <div>
            <Label> <b>Adreca del proveidor</b></Label>
            <input required name="Adreca" value="<?=$Adreca?>" placeholder=" Adreca proveidor..."> </input>
    </div>

    <div>
            <Label> <b>Telefon del proveidor</b></Label>
            <input required name="Telefon" value="<?=$Telefon?>" placeholder="Telefon proveidor..."> </input>
    </div>

    <div>
        <button type="submit"> enviar</button>
    </div>

    </body>

</html>
        