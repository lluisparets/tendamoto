<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>

<body>
    <?php require 'includes/header.php'; ?>
    <h1>Llista productes</h1>

    <form action="llista_productes.php" method="get" style="margin-bottom: 40px;"> 
        <Label><b>Filtrar per proveidor</b></Label>
        <select required name="proveidor">
            <option value="Kawasaki">Kawasaki</option>
            <option value="Yamaha">Yamaha</option>
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
            </tr>
        </thead>

        <tbody>
            <?php
            $query = "select M.*,P.Nom AS nomProveidor from Moto as M INNER JOIN Proveidor as P ON (M.fkidProveidor = P.idProveidor)";
            $result = mysqli_query($bbdd, $query) or die(mysqli_error($bbdd));
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                            <td> $row[idMoto] </td>
                            <td> $row[Marca] </td>
                            <td> $row[Model] </td>
                            <td> $row[Cilindrada] </td>
                            <td> $row[Categoria] </td>
                            <td> $row[Preu] </td>
                            <td> $row[nomProveidor] </td>
                        </tr>";
            }
            ?>

        </tbody>
    </table>

</body>

</html>