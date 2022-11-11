<?php 

$user="root";
$password="";
$server="localhost";
$bd="comulclavercontrato";
$conexion = new mysqli($server,$user,$password,$bd);
/*
if($conexion->connect_error){
    die("La conexión ha fallado". $conexion->connect_errno );
}else{
    echo"Conexión Exitoza";
}
*/

?>