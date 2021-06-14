<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>

<h1 style="color:blue;"><?= isset($_GET['id']) ? 'ACTUALITZA' : 'INSERTA' ?> UNA VENTA</h1>
<form action="<?= isset($_GET['id']) ? 'update_api_venta.php?id=' . $_GET['id'] : 'insert_api_venta.php' ?>" method="POST">

    <?php
    $Fecha = '';
    $Preu = '';
    $Compra = '';
    if (isset($_GET['id'])) {
        $query = "SELECT * from Venta WHERE idVenta = $_GET[id]";
        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
        $Venta = mysqli_fetch_assoc($result);
        $Fecha = $Venta['Fecha'];
        $Preu = $Venta['Preu'];
        $Compra = $Venta['Compra'];
    }
    ?>
    <table class="form">

        <tr>
            <td><Label><b>Data de la venta</b></Label></td>
            <td><input required name="Fecha" value="<?= $Fecha ?>" placeholder="Data..."> </input></td>
        </tr>

        <tr>

            <td><Label><b>Preu de la venta</b></Label></td>
            <td><input required name="Preu" value="<?= $Preu ?>" placeholder="Preu..."> </input></td>
        </tr>

        <tr>
            <td><Label><b>Productes comprats</b></Label></td>
            <td><input required name="Compra" value="<?= $Compra ?>" placeholder="productes..."> </input></td>
        </tr>

        <tr>
            <td><Label> <b>Client</b></label></td>

            <td><select name="fkidclient">
                    <?php
                    $query = "select idclient,firstname,lastname from Client";
                    $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value=\"$row[idclient]\">$row[firstname] $row[lastname]</option>";
                    }
                    ?>
                </select></td>
        </tr>

        <tr>
            <td><Label> <b>Moto</b></label></td>

            <td><select name="fkidmoto">
                    <?php
                    $query = "select idMoto,Marca,Model,Cilindrada from Moto";
                    $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<option value=\"$row[idMoto]\">$row[Marca] $row[Model] $row[Cilindrada]</option>";
                    }
                    ?>
                </select></td>
        </tr>

        <tr>
            <td></td>
            <td><button type="submit"> enviar</button></td>
        </tr>



        </div>

        </body>

</html>