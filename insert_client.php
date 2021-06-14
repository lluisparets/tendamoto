<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>
<h1 style="color:blue;"><?= isset($_GET['id']) ? 'ACTUALITZA' : 'INSERTA' ?>UN CLIENT</h1>

<?php
$firstname = '';
$lastname = '';
$direccio = '';
$Email = '';
$Numero_Telefon = '';

if (isset($_GET['id'])) {
    $query = "SELECT * from Client WHERE idClient = $_GET[id]";
    $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
    $Client = mysqli_fetch_assoc($result);
    $firstname = $Client['firstname'];
    $lastname = $Client['lastname'];
    $direccio = $Client['direccio'];
    $Email = $Client['Email'];
    $Numero_Telefon = $Client['Numero_Telefon'];
}
?>

<form action="<?= isset($_GET['id']) ? 'update_api_clients.php?id=' . $_GET['id'] : 'insert_api_client.php' ?>" method="POST">

    <table class="form">
        <tr>
            <td><Label><b>Nom del client</b></Label></td>
            <td><input required name="firstname" value="<?= $firstname ?>" placeholder="Nom client..."> </input></td>
        </tr>

        <tr>
            <td><Label><b>Cognom del client</b></Label></td>
            <td><input required name="lastname" value="<?= $lastname ?>" placeholder="Cognom client..."> </input></td>
        </tr>

        <tr>
            <td><Label><b>Adreça del client</b></Label></td>
            <td><input required name="direccio" value="<?= $direccio ?>" placeholder="Adreça..."> </input></td>
        </tr>

        <tr>
            <td><Label><b>Email del client</b></Label></td>
            <td><input required name="Email" value="<?= $Email ?>" placeholder="Email..."> </input></td>
        </tr>

        <tr>
            <td><Label><b>Teléfon del client</b></Label></td>
            <td><input required name="Numero_Telefon" value="<?= $Numero_Telefon ?>" placeholder="Telefon..."> </input></td>
        </tr>

        <tr>
            <td></td>
            <td><button type="submit"> enviar</button></td>
    </table>

    </body>

</html>