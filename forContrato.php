<?php 
include "bd.php";

$user="root";
$password="";
$server="localhost";
$bd="comulclavercontrato";
$conexion = new mysqli($server,$user,$password,$bd);

//Información formulario Contrato
$v_idInstitucion=$_POST['idInstitucion'];
$v_nomCliente=$_POST['nomCliente'];
$v_idCliente=$_POST['idCliente'];
$v_idCiudad=$_POST['idCiudad'];
$v_barrioCliente=$_POST['barrioCliente'];
$v_dirCliente=$_POST['dirCliente'];
$v_correoCliente=$_POST['correoCliente'];
$v_telCliente=$_POST['telCliente'];
$v_celCliente=$_POST['celCliente'];
$v_nomBeneficiario=$_POST['nomBeneficiario'];
$v_tpDocumentoBen=$_POST['tpDocumentoBen'];
$v_numDocumentoBen=$_POST['numDocumentoBen'];
$v_codEstudiante=$_POST['codEstudiante'];
$v_gradoEstudiante=$_POST['gradoEstudiante'];
$v_idServicio=$_POST['idServicio'];
$v_dirRecogida=$_POST['dirRecogida'];
$v_dirEntrega=$_POST['dirEntrega'];
$v_autorizo=$_POST['autorizo'];


/*
echo "Los datos son los siguientes: <br>";
echo "$v_idCliente, $v_nomCliente, $v_idCiudad, $v_barrioCliente, $v_dirCliente, $v_correoCliente,
$v_telCliente, $v_celCliente, $v_nomBeneficiario, $v_tpDocumentoBen, $v_numDocumentoBen, $v_codEstudiante, $v_gradoEstudiante,
$v_dirRecogida, $v_dirEntrega, $v_autorizo, $v_idServicio, $v_idInstitucion";*/


$query="INSERT INTO cliente (idCliente,nomCliente,idCiudad,barrioCliente,dirCliente, correoCliente,
telCliente, celCliente, nomBeneficiario, tpDocumentoBen, numDocumentoBen,codEstudiante,gradoEstudiante,
dirRecogida,dirEntrega, autorizo,idServicio,idInstitucion) VALUES ('$v_idCliente', '$v_nomCliente', '$v_idCiudad', '$v_barrioCliente', '$v_dirCliente', '$v_correoCliente',
'$v_telCliente', '$v_celCliente', '$v_nomBeneficiario', '$v_tpDocumentoBen', '$v_numDocumentoBen', '$v_codEstudiante', '$v_gradoEstudiante',
'$v_dirRecogida','$v_dirEntrega', '$v_autorizo', '$v_idServicio', '$v_idInstitucion')";

$validarRegistro = mysqli_query($conexion, "SELECT * FROM cliente WHERE numDocumentoBen='$v_numDocumentoBen'");

if(mysqli_num_rows($validarRegistro) > 0){
    echo '
    <script>
    alert("Estudainte ya existe");
    window.location = "index.html";
    </script>';
    exit();
}



$ejecutar = mysqli_query($conexion, $query);

if($ejecutar){
    echo '
    <script>
    alert("Usuario registrado exitosamente");
    window.location = "index.html";
    </script>
    ';
    
}else{
    echo '
    <script>
    alert("Dato no guardado, intenta de nuevo");
    windows.location = "index.html);
    </script>
    ';
}

mysqli_close($conexion);

?>