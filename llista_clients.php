<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>

    <?php require 'includes/header.php'; ?>

    <h1 style="color:blue;">Llista Clients</h1>

    <form action="llista_clients.php" method="get" style="margin-bottom: 40px;"> 
        <Label><b>Filtrar per Nom</b></Label>
        <select required name="client">
            <option value="1">Carlos</option>
            <option value="2">Mariano</option>
            <option value="3">Laura</option>
            </select>
        <button type="submit">Filtrar</button>
    </form>

    <table>
        <thead>
            <tr>
                 <th>ID</th>
                <th>Nom</th>
                <th>Cognom</th>
                <th>Direcció</th>
                <th>Email</th>
                <th>Telèfon</th>
                <th>Opcions</th>
                <th>Editar</th>
            </tr>
           
        </thead>
        
        <tbody>
            <?php
            $where = '';
            if(isset($_GET['client'])){
                $where = " WHERE idclient = '$_GET[client]' ";
            }
            $query = "select C.* from Client as C $where";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                            <td> $row[idclient] </td>
                            <td> $row[firstname] </td>
                            <td> $row[lastname] </td>
                            <td> $row[direccio] </td>
                            <td> $row[Email] </td>
                            <td> $row[Numero_Telefon] </td>
                            <td><a href=\"delete_api_clients.php?id=$row[idclient]\">ELIMINAR</a></td>
                            <td><a href=\"insert_client.php?id=$row[idclient]\">EDITAR</a></td>

                        </tr>";
            }
            ?>

        </tbody>
    </table>

</body>

</html>