<!DOCTYPE html>
<html lang="es-ES">
<?php require 'includes/head.php'; ?>

<body>
    <?php require 'includes/header.php'; ?>
    <h1>Llista productes</h1>
    <table>

        <tr>
            <td>ID</td>
            <td>Nom</td>
            <td>Codi</td>
            <td>Preu</td>
        </tr>

        <tr>
            <td>7493</td>
            <td>Kawasaki z</td>
            <td>73672</td>
            <td>10.500€</td>
        </tr>

        <tr>
            <td>83743</td>
            <td>Kawasaki ninja</td>
            <td>8304</td>
            <td>15.789'99€</td>
        </tr>

        <tr>
            <td>2943</td>
            <td>Honda cbr</td>
            <td>8304</td>
            <td>8.550€</td>
        </tr>

        <tr>
            <td>83743</td>
            <td>BMW S1000RR</td>
            <td>39483</td>
            <td>20.947€</td>
        </tr>
    </table>

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
                $query="select M.*,P.Nom AS nomProveidor from Moto as M INNER JOIN Proveidor as P ON (M.fkidProveidor = P.idProveidor)";
                $result = mysqli_query($bbdd,$query) or die(mysqli_error($bbdd));
                while ($row = mysqli_fetch_assoc($result))
                {
                    echo"<tr>
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