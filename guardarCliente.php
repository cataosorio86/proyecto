<?php 
include("conexion.php");
$nombre=$_POST["nombre"];
$telefono=$_POST["telefono"];
$direccion=$_POST["direccion"];


$sentencia = "insert into cliente (nombre, telefono, direccion)
values ('".$nombre."', '".$telefono."', '".$direccion."')";

$query = mysqli_query($conexion,$sentencia);

if ($query){
	echo "Cliente creado correctamente" .$placa;

}else{
	echo "No fue posible crear el cliente";
}

mysqli_close($conexion);
 ?>