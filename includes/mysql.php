<?php
$host="localhost";
$database="test";
$user="root";
$password="";
$bbdd=mysqli_connect($host,$user,$password,$database);
if(!$bbdd){
    echo"NO HA ANAT BE ";
    print(mysqli_connect_error());
    
}
