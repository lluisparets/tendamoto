<?php

include "editar.php"; 

$id = $_GET['id'];

$qry = mysqli_query($db,"select * from Proveidor where id='$id'");

$data = mysqli_fetch_array($qry); 

if(isset($_POST['update'])) 
    $Nom = $_POST['Nom'];
    $Adreca = $_POST['Adreca'];
    $Telefon = $_POST['Telefon'];
	
    $edit = mysqli_query($db,"update Proveidor set Nom='$Nom', Adreca='$Adreca' where Telefon='$Telefon'");
	
    if($edit)
    {
        mysqli_close($db);
        header("location:llista_proveidors.php");
        exit;
    }
    else
    {
        echo mysqli_error($bbdd);
    }    	
}
?>

<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="Nom" value="<?php echo $data['Nom'] ?>" placeholder="Nom del proveidor..." Required>
  <input type="text" name="Adreca" value="<?php echo $data['Adreca'] ?>" placeholder="Adreça del proveidor..." Required>
  <input type="text" name="Telefon" value="<?php echo $data['Telefon'] ?>" placeholder="Telefon del proveidor..." Required>
  <input ty