<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php';?>
    <?php require 'includes/header.php';?>
        <h1 style="color:blue;">INSERTA UNA MOTO</h1>
        <form action="insert_api_producte.php" method="POST">

<?php
    $Model = '';
    $Cilindrada = '';
    $Categoria = '';
    $Preu = '';
    if(isset($_GET['id']))
    {
        $query = "SELECT * from Moto WHERE idMoto = $_GET[id]";
        $result = mysqli_query($bbdd, $query) or die (mysqli_error($bbdd));
        $Moto = mysqli_fetch_assoc($result);
        $Model = $Moto['Model'];
        $Cilindrada = $Moto['Cilindrada'];
        $Categoria = $Moto['Categoria'];
        $Preu = $Moto['Preu'];
    }
?>

<form action="<?=(isset($_GET['id'])) ? "update_api_clients.php?idClient=$_GET[id]" : 'insert_api_client.php'?>" method="POST">

        <div>
            <Label><b>Marca de la moto</b></Label>
            <select required name="marca" >
                <option value="Kawasaki">Kawasaki</option>
                <option value="yamaha">yamaha</option>
                <option value="keeway">keeway</option>
                <option value="ducati">ducati</option>
                <option value="aprilia">aprilia</option>
            </select>
        </div>

        <div>
            <Label> <b>Model de la moto</b></Label>
            <input required name="model" value="<?=$Model?>" placeholder="model moto"> </input>
        </div>

        <div>
            <Label> <b>Cilindrada de la moto</b></Label>
            <input required name="cilindrada" value="<?=$Cilindrada?>"placeholder="cilindrada moto"> </input>
        </div>

        <div>
            <Label> <b>Categoria de la moto</b></Label>
            <input required name="categoria" value="<?=$Categoria?>" placeholder="categoria de moto"> </input>
        </div>

        <div>
            <Label> <b>Preu de la moto</b></Label>
            <input required name="preu" value="<?=$Preu?>" placeholder="preu moto"> </input>
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