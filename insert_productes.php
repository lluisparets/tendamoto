<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php';?>
    <body style="background-color: #fff59d;">
    <?php require 'includes/header.php';?>
        <h1>INSERTA UNA MOTO</h1>
        <form action="insert_api_producte.php" method="POST">

        <div>
            <Label><b>quina moto vols?</b></Label>
            <select required name="marca" >
                <option value="Kawasaki">Kawasaki</option>
                <option value="yamaha">yamaha</option>
                <option value="Honda">Honda</option>
                <option value="ktm">ktm</option>
                <option value="bmw">bmw</option>
            </select>
        </div>

        <div>
            <Label> <b>quin model vols</b></Label>
            <input required name="model" placeholder="model moto"> </input>
        </div>

        <div>
            <Label> <b>quina cilindrada vols</b></Label>
            <input required name="cilindrada" placeholder="cilindrada moto"> </input>
        </div>

        <div>
            <Label> <b>quina categoria vols</b></Label>
            <input required name="categoria" placeholder="categoria de moto"> </input>
        </div>

        <div>
            <Label> <b>preu</b></Label>
            <input required name="preu" placeholder="preu moto"> </input>
        </div>

        <div>
        <Label> <b>Proveidor</b></label>

        <select name="fkidProveidor">
            <?php
                $query="select idProveidor,Nom from Proveidor order by nom";
                $result = mysqli_query($bbdd,$query);
                while ($row= mysqli_fetch_assoc($result))
                {
                    echo"<option value=\"$row[idProveidor]\"> $row[Nom]</option>";

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