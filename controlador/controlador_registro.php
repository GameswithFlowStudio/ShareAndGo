<?php 
require_once '../modelo/modelo_registro.php';
//$correo=$_POST[''];
$emailUsuario = filter_input(INPUT_POST,'Email');
$contrasenaUsuario = filter_input(INPUT_POST,'Contrasena');
$nombreUsuario = filter_input(INPUT_POST,'Nombre');
$apellidoUsuario = filter_input(INPUT_POST,'Apellido');
$municipioUsuario = (int) filter_input(INPUT_POST,'Municipio');
$telefonoUsuario = filter_input(INPUT_POST,'Telefono');
$fechaUsuario = filter_input(INPUT_POST,'Fecha');
$cont=new modelo_registro();

$datos=$cont->registrar($emailUsuario,$contrasenaUsuario,$nombreUsuario,$apellidoUsuario,$fechaUsuario,$telefonoUsuario,$municipioUsuario);

header("location: ../vista/menu_principal/menu_principal.php");


