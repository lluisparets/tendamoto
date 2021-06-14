<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>
<?php require 'includes/header.php'; ?>
<h1 style="color:blue;"><?= isset($_GET['id']) ? 'ACTUALITZA' : 'INSERTA' ?> UNA MOTO</h1>


<?php
$Model = '';
$Cilindrada = '';
$Categoria = '';
$Preu = '';
if (isset($_GET['id'])) {
    $query = "SELECT * from Moto WHERE idMoto = $_GET[id]";
    $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
    $Moto = mysqli_fetch_assoc($result);
    $Marca = $Moto['Marca'];
    $Model = $Moto['Model'];
    $Cilindrada = $Moto['Cilindrada'];
    $Categoria = $Moto['Categoria'];
    $Preu = $Moto['Preu'];
}
?>


<table class="form">
    <tr>
        <td></td>
        <td><form action="<?= (isset($_GET['id'])) ? "update_api_productes.php?id=$_GET[id]" : 'insert_api_producte.php' ?>" method="POST" enctype="multipart/form-data"></td>
        
    </tr>
    <tr>
        <td><Label><b>Marca de la moto</b></Label></td>
        <td><input required name="marca" value="<?= $Marca ?>" placeholder="marca moto"> </input></td>
    </tr>
    <td><Label> <b>Model de la moto</b></Label></td>
    <td><input required name="model" value="<?= $Model ?>" placeholder="model moto"> </input></td>
    </tr>

    <tr>
        <td> <Label> <b>Cilindrada de la moto</b></Label></td>
        <td> <input required name="cilindrada" value="<?= $Cilindrada ?>" placeholder="cilindrada moto"> </input></td>
    </tr>

    <tr>
        <td><Label> <b>Categoria de la moto</b></Label></td>
        <td><input required name="categoria" value="<?= $Categoria ?>" placeholder="categoria de moto"> </input></td>
    </tr>

    <tr>
        <td><Label> <b>Preu de la moto</b></Label></td>
        <td><input required name="preu" value="<?= $Preu ?>" placeholder="preu moto"> </input></td>
    </tr>

    <tr>
        <td></td>
        <td><input name="imatgeMoto" type="file" accept="img/jpg" /></td>
    </tr>

    <tr>
        <Label> <b>Proveidor</b></label>

        <select name="fkidProveidor">
            <?php
            $query = "select idProveidor,Nom from Proveidor order by nom";
            $result = mysqli_query($bbdd, $query);
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value=\"$row[idProveidor]\"> $row[Nom]</option>";
            }
            ?>
        </select>
    </tr>
    <td></td>
    <td><button type="submit"> enviar</button></td>
    <tr>

    </tr>

    </form>


    </body>

</html>