<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php';?>
    <?php require 'includes/header.php';?>

    <h1 style="color:blue;"><?=isset($_GET['id']) ? 'ACTUALITZA' : 'INSERTA'?> UNA VENTA</h1>

    <?php
    $Fecha = '';
    $Preu = '';
    $Compra = '';
    if(isset($_GET['id']))
    {
        $query = "SELECT * from Venta WHERE idVenta = $_GET[id]";
        $result = mysqli_query($bbdd, $query) or die (mysqli_error($bbdd));
        $Venta = mysqli_fetch_assoc($result);
        $Fecha = $Venta['Fecha'];
        $Preu = $Venta['Preu'];
        $Compra = $Venta['Compra'];
    }
?>
    <form action="<?=isset($_GET['id']) ? 'update_api_venta.php?idVenta='.$_GET['id'] : 'insert_api_venta.php'?>" method="POST">

    <div>
        <Label><b>Data de la venta</b></Label>
        <input required name="Fecha" values="<?=$Fecha?>" placeholder="Data..."> </input>
    </div>

    <div>

        <Label><b>Preu de la venta</b></Label>
        <input required name="Preu" values="<?=$Preu?>" placeholder="Preu..."> </input>
    </div>

    <div>
        <Label><b>Productes comprats</b></Label>
        <input required name="Compra" values="<?=$Compra?>" placeholder="productes..."> </input>
    </div>

    <div>
        <Label> <b>Client</b></label>

        <select name="fkidclient">
            <?php
                $query="select idclient,firstname,lastname from Client";
                $result = mysqli_query($bbdd,$query) or die (mysqli_error($bbdd));
                while ($row= mysqli_fetch_assoc($result))
                {
                    echo"<option value=\"$row[idclient]\">$row[firstname] $row[lastname]</option>";

                }
            ?>
            </select>
        </div>

        <div>
        <Label> <b>Moto</b></label>

        <select name="fkidmoto">
            <?php
                $query="select idMoto,Marca,Model,Cilindrada from Moto";
                $result = mysqli_query($bbdd,$query) or die (mysqli_error($bbdd));
                while ($row= mysqli_fetch_assoc($result))
                {
                    echo"<option value=\"$row[idMoto]\">$row[Marca] $row[Model] $row[Cilindrada]</option>";

                }
            ?>
            </select>
        </div>
        
        <div>
        <button type="submit"> enviar</button>
        </div>

        </select>

        </div>

    </body>
</html>