<?php

include "editar.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$qry = mysqli_query($db,"select * from Proveidor where id='$id'"); // select query

$data = mysqli_fetch_array($qry); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
    $fullname = $_POST['fullname'];
    $age = $_POST['age'];
	
    $edit = mysqli_query($db,"update Proveidor set Nom='$Nom', Adreca='$Adreca' where Telefon='$Telefon'");
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:llista_proveidors.php"); // redirects to all records page
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
  <input ty>