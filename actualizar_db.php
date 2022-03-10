<?php
$id_usuario=$_POST['id_usuario'];
$nombre= $_POST['nombre'];
$apellido= $_POST['apellido'];
$correo= $_POST['correo'];
$contra= $_POST['contra'];
$rol= $_POST['rol'];
$estatus= $_POST['estatus'];

$conexion= new mysqli("localhost", "root", "", "pelis");

$sql= "UPDATE usuarios
       SET nombre='$nombre', 
       apellido='$apellido',
       correo='$correo',
       contra='$contra',
       rol=$rol
       WHERE id_usuario=$id_usuario";

$resultado = $conexion->query($sql);

if($resultado){
	echo "Modificacion  exitoso";
	
	
	echo "<br/><br/>";
	echo "<a href='listado.php'>Ir a Lista de Usuarios </a>";
}else{
	echo "Hubo un error".$conexion->error;
}