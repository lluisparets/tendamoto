<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php';?>
    <body style="background-color: #fff59d;">
    <?php require 'includes/header.php';?>

    <h1>INSERTA UN PPROVEIDOR</h1>
    <form action="insert_api_proveidor.php" method="POST">
    
    <div>
        <Label><b>Nom del proveidor</b></Label>
        <input required name="Nom" placeholder="nom proveidor..."> </input>
    </div>

    <div>
            <Label> <b>Adreca del proveidor</b></Label>
            <input required name="Adreca" placeholder=" Adreca proveidor..."> </input>
    </div>

    <div>
            <Label> <b>Telefon del proveidor</b></Label>
            <input required name="Telefon" placeholder="Telefon proveidor..."> </input>
    </div>

    <div>
        <button type="submit"> enviar</button>
    </div>

    </body>

</html>
        