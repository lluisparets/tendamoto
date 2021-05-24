<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>

<body style="background-color: #fff59d;">
    <?php require 'includes/header.php'; ?>

    <h1 style="color:blue;">Llista Proveidors</h1>

    <form action="llista_proveidors.php" method="get" style="margin-bottom: 40px;"> 
        <Label><b>Filtrar per proveidor</b></Label>
        <select required name="proveidor">
            <option value="3">Kawasaki</option>
            <option value="2">Yamaha</option>
            <option value="6">Keeway</option>
            <option value="7">Ducati</option>
            <option value="8">Aprilia</option>
        </select>
        <button type="submit">Filtrar</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Adreca</th>
                <th>Telefon</th>
                <th>Opcions</th>
            </tr>
           
        </thead>

        <tbody>
            <?php
            $where = '';
            if(isset($_GET['proveidor'])){
                $where = " WHERE idProveidor = '$_GET[proveidor]' ";
            }
            $query = "select P.* from Proveidor as P $where";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                            <td> $row[idProveidor] </td>
                            <td> $row[Nom] </td>
                            <td> $row[Adreca] </td>
                            <td> $row[Telefon] </td>
                            <td><a href=\"delete_api_proveidors.php?id=$row[idProveidor]\">ELIMINAR</a></td>

                        </tr>";
            }
            ?>

        </tbody>
    </table>

</body>

</html>