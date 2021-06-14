<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>

<?php require 'includes/header.php'; ?>

<h1 style="color:blue;">Llista Ventes</h1>

<form action="llista_venta.php" method="get" style="margin-bottom: 40px;">
    <Label><b>Filtrar per Venta</b></Label>
    <select required name="Venta">
        <option value="1">Venta 1</option>
    </select>
    <button type="submit">Filtrar</button>
</form>

<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Data</th>
            <th>Preu</th>
            <th>Compra</th>
            <th>Client</th>
            <th>Moto</th>
        </tr>

    </thead>

    <tbody>
        <?php
        $where = '';
        if (isset($_GET['venta'])) {
            $where = " WHERE idVenta = '$_GET[Venta]' ";
        }
        $query = "
            select V.*, M.Marca as nom_moto, C.firstname as nom_client, C.lastname as ll_client
            from Venta as V INNER JOIN Moto as M ON (M.idMoto = V.fkidmoto) 
            INNER JOIN Client as C ON (C.idclient = V.fkidclient) 
            $where";
        $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                            <td> $row[idVenta] </td>
                            <td> $row[Fecha] </td>
                            <td> $row[Preu] </td>
                            <td> $row[Compra] </td>
                            <td> $row[nom_client] $row[ll_client] </td>
                            <td> $row[nom_moto] </td>
                            <td><a href=\"delete_api_venta.php?id=$row[idVenta]\">ELIMINAR</a></td>
                            <td><a href=\"insert_venta.php?id=$row[idVenta]\">EDITAR</a></td>
                        </tr>";
        }
        ?>

    </tbody>
</table>

</body>

</html>