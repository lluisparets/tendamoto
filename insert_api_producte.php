<?php require 'includes/head.php';?>

<?php
    echo "<p>" . $_POST['marca'] . "</p>";
    echo "<p>" . $_POST['model'] . "</p>";
    echo "<p>" . $_POST['cilindrada'] . "</p>";
    echo "<p>" . $_POST['categoria'] . "</p>";
    echo "<p>" . $_POST['preu'] . "</p>";

    $marca = $_POST['marca'];
    $model = $_POST['model'];
    $cilindrada = $_POST['cilindrada'];
    $categoria = $_POST['categoria'];
    $preu = $_POST['preu'];

    $query ="INSERT INTO Moto (marca,model,cilindrada,categoria,preu) VALUES (\"$marca\",\"$model\",\"$cilindrada\",\"$categoria\",\"$preu\");";
    echo "<p>" .$query. "</p>";

    $res= mysqli_query($bbdd, $query);
        if(!$result)
            {
                header("Location: ok.php");
            }
        else
            {
                $error =mysqli_error($bbdd);
                header("location: no_okphp? error=$error");
            }

?>