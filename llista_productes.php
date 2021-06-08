<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>

    <?php require 'includes/header.php'; ?>
    <h1 style="color:blue;">Llista productes</h1>

    <form action="llista_productes.php" method="get" style="margin-bottom: 40px;"> 
        <Label><b>Filtrar per proveidor</b></Label>
        <select required name="proveidor">
            <option value="3">Kawasaki</option>
            <option value="2">Yamaha</option>
            <option value="6">Keeway</option>
            <option value="7">Dukati</option>
            <option value="8">Aprilia</option>
        </select>
        <button type="submit">Filtrar</button>

    </form>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Marca</th>
                <th>Model</th>
                <th>Cilindrada</th>
                <th>Categoria</th>
                <th>Preu</th>
                <th>Proveidor</th>
                <th>Opcions</th>
            </tr>
           
        </thead>

        <tbody>
            <?php
            $where = '';
            if(isset($_GET['proveidor'])){
                $where = " WHERE M.fkidProveidor = '$_GET[proveidor]' ";
            }
            $query = "select M.*,P.Nom AS nomProveidor from Moto as M 
            INNER JOIN Proveidor as P ON (M.fkidProveidor = P.idProveidor) $where";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            while ($row = mysqli_fetch_assoc($result)) {
                $id=$row["idMoto"];
                echo "<tr>
                            <td> $row[idMoto] </td>
                            <td> $row[Marca] </td>
                            <td> $row[Model] </td>
                            <td> $row[Cilindrada] </td>
                            <td> $row[Categoria] </td>
                            <td> $row[Preu] </td>
                            <td> $row[nomProveidor] </td>
                            <td><a href=\"delete_api_productes.php?id=$row[idMoto]\">ELIMINAR</a></td>
                            <td><a href=\"insert_productes.php?id=$row[idMoto]\">EDITAR</a></td>
                            <td><img width=\"75\" src=\" imatges/productes/$id.jpg\">IMATGE</img></td>
                        </tr>";
            }
            ?>

        </tbody>
    </table>

</body>

</html>