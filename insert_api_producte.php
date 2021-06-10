<?php 
require 'includes/head.php'; 

$updateImg = '';
if(isset($_FILES['imatgeMoto'])){
    $tmp = $_FILES['imatgeMoto']['tmp_name'];
    $path = 'imatges/productes/' . $_GET['id'] .  '.jpg';
    @unlink($path);
    $m = move_uploaded_file($tmp, $path);
    if(!$m){
        echo 'imatge no pujada'; exit();
    }
    $updateImg = ", imatgeMoto = \"$_GET[id].jpg\" ";
}else{

    return"";
}

$marca = $_POST['marca'];
$model = $_POST['model'];
$cilindrada = $_POST['cilindrada'];
$categoria = $_POST['categoria'];
$preu = $_POST['preu'];
$fkidproveidor = $_POST['fkidProveidor'];
$updateImg = $_POST['updateImg'];


$query = "INSERT INTO Moto (marca,model,cilindrada,categoria,preu,fkidproveidor,updateImg) VALUES (\"$marca\",\"$model\",\"$cilindrada\"
,\"$categoria\",\"$preu\",\"$fkidproveidor\",\"$updateImg\");";
echo "<p>" . $query . "</p>";

$result = mysqli_query($bbdd, $query);
if ($result) {
    header("Location: ok.php");
} else {
    $error = mysqli_error($bbdd);
    header("Location: no_ok.php?error=$error");
}

