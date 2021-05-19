<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php';?>
    <body style="background-color: #fff59d;">
    <?php require 'includes/header.php';?>

    <h1>INSERTA UNA TENDA</h1>
    <form action="insert_api_tenda.php" method="POST">
    
    <div>
        <Label><b>direccio</b></Label>
        <input required name="direccio" placeholder="direccio..."> </input>
    </div>

    <div>
            <Label> <b>venedor</b></Label>
            <input required name="venador" placeholder=" nom venedor..."> </input>
    </div>

    <div>
            <Label> <b>Nom del la tenda</b></Label>
            <input required name="nom_tenda" placeholder="nom tenda..."> </input>
    </div>

    <div>
            <Label> <b>Telefon del la tenda</b></Label>
            <input required name="telefon" placeholder="Telefon tenda..."> </input>
    </div>

    <div>
            <Label> <b>Id de la tenda</b></Label>
            <input required name="fkidventa" placeholder="id tenda..."> </input>
    </div>

    <div>
        <button type="submit"> enviar</button>
    </div>

    </body>

</html>