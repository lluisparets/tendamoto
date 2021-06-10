<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>

<h1 style="color:blue;">INSERTA UNA TENDA</h1>
<form action="insert_api_tenda.php" method="POST">



        <table class="form">
                <tr>
                        <td> <Label><b>direccio:</b></Label></td>
                        <td> <input placeholder="direccio..."> </input></td>
                </tr>
                <tr>
                        <td><Label> <b>venedor:</b></Label></td>
                        <td> <input required name="venador" placeholder=" nom venedor..."> </input></td>
                </tr>
                <tr>
                        <td> <Label> <b>Nom del la tenda:</b></Label></td>
                        <td><input required name="nom_tenda" placeholder="nom tenda..."> </input></td>
                </tr>
                <tr>
                        <td> <Label> <b>Telefon del la tenda:</b></Label></td>
                        <td> <input required name="telefon" placeholder="Telefon tenda..."> </input></td>
                </tr>
                <tr>
                        <td> <Label> <b>Id de la tenda:</b></Label></td>
                        <td> <input required name="fkidventa" placeholder="id tenda..."> </input></td>
                </tr>
                <tr>
                        <td></td>
                        <td> <button type="submit"> enviar</button></td>
                </tr>
        </table>

        </body>

</html>