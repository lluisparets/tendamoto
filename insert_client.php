<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php';?>
    <body style="background-color: #fff59d;">
    <?php require 'includes/header.php';?>

    <h1 style="color:blue;">INSERTA UN CLIENT</h1>
    <form action="insert_api_client.php" method="POST">

    <div>
        <Label><b>Nom del client</b></Label>
        <input required name="firstname" placeholder="nom client..."> </input>
    </div>

    <div>
        <Label><b>Cognom del client</b></Label>
        <input required name="lastname" placeholder="cognom client..."> </input>
    </div>

    <div>
        <Label><b>Adreça del client</b></Label>
        <input required name="adreca" placeholder="adreça..."> </input>
    </div>

    <div>
        <Label><b>Email del client</b></Label>
        <input required name="Email" placeholder="email..."> </input>
    </div>

    <div>
        <Label><b>Teléfon del client</b></Label>
        <input required name="Numero_Telefon" placeholder="Telefon client..."> </input>
    </div>

    <div>
        <button type="submit"> enviar</button>
    </div>

    </body>

</html>