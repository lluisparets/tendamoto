<?php

include "includes/head.php"; 

$id = $_GET['id'];

$qry = mysqli_query($bbdd,"select * from Proveidor where id='$id'") or die (mysqli_error($bbdd));

$data = mysqli_fetch_assoc($qry); 

if(isset($_POST['update'])) 
    $Nom = $_POST['Nom'];
    $Adreca = $_POST['Adreca'];
    $Telefon = $_POST['Telefon'];
    $edit = mysqli_query($bbdd,"update Proveidor set Nom='$Nom', Adreca='$Adreca', Telefon='$Telefon'");
	
    if($edit)
    {
        mysqli_close($bbdd);
        header("location:llista_proveidors.php");
        exit;
    }
    else
    {
        echo mysqli_error($bbdd);
    }    	
?>


</body>

</html>