<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php';?>
    <body style="background-color: #fff59d;">
    <?php require 'includes/header.php';?>

    <h1 style="color:blue;">INSERTA UNA VENTA</h1>
    <form action="insert_api_venta.php" method="POST">

    <div>
        <Label><b>Data de la venta</b></Label>
        <input required name="Fecha" placeholder="Data..."> </input>
    </div>

    <div>

        <Label><b>Preu de la venta</b></Label>
        <input required name="Preu" placeholder="Preu..."> </input>
    </div>

    <div>
        <Label><b>Productes comprats</b></Label>
        <input required name="Compra" placeholder="productes..."> </input>
    </div>

    <div>
            <Label><b>Client</b></Label>
            <select required name="fkidclient" >
                <option value="1">Carlos Campi</option>
                <option value="2">Mariano Salazar</option>
                <option value="3">Laura Caira</option>
            </select>
        </div>

        <div>
            <Label><b>Moto comprada</b></Label>
            <select required name="fkidmoto" >
                <option value="Kawasaki">Kawasaki</option>
                <option value="yamaha">yamaha</option>
                <option value="Honda">Honda</option>
                <option value="ktm">ktm</option>
                <option value="bmw">bmw</option>
            </select>
        </div>
        
        <button type="submit"> enviar</button>
        </div>

        </select>

        </div>

    </body>
</html>