<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php';?>
    <?php require 'includes/header.php';?>ç

<?php
    $firstname = '';
    $lastname = '';
    $direccio = '';
    $Email = '';
    $Numero_Telefon = '';

    if(isset($_GET['id']))
    {
        $query = "SELECT * from Client WHERE idClient = $_GET[id]";
        $result = mysqli_query($bbdd, $query) or die (mysqli_error($bbdd));
        $Client = mysqli_fetch_assoc($result);
        $firstname = $Client['firstname'];
        $lastname = $Client['lastname'];
        $direccio = $Client['direccio'];
        $Email = $Client['Email'];
        $Numero_Telefon = $Client['Numero_Telefon'];
    }
?>

<form action="<?=(isset($_GET['id'])) ? "update_api_clients.php?idClient=$_GET[id]" : 'insert_api_client.php'?>" method="POST">

    <h1 style="color:blue;">INSERTA UN CLIENT</h1>
    <form action="insert_api_client.php" method="POST">

    <div>
        <Label><b>Nom del client</b></Label>
        <input required name="firstname" value="<?=$firstname?>" placeholder="nom client..."> </input>
    </div>

    <div>
        <Label><b>Cognom del client</b></Label>
        <input required name="lastname" value="<?=$lastname?>" placeholder="cognom client..."> </input>
    </div>

    <div>
        <Label><b>Adreça del client</b></Label>
        <input required name="direccio" value="<?=$direccio?>" placeholder="adreça..."> </input>
    </div>

    <div>
        <Label><b>Email del client</b></Label>
        <input required name="Email" value="<?=$Email?>" placeholder="email..."> </input>
    </div>

    <div>
        <Label><b>Teléfon del client</b></Label>
        <input required name="Numero_Telefon" value="<?=$Numero_Telefon?>" laceholder="Telefon client..."> </input>
    </div>

    <div>
        <button type="submit"> enviar</button>
    </div>

    </body>

</html>