<?php
$id_usuario= $_GET['id'];
$conexion= new mysqli("localhost", "root", "", "pelis");
$sql= "SELECT *FROM usuarios
       WHERE id_usuario= $id_usuario";
$resultado = $conexion->query($sql);
if($resultado){
	$fila = $resultado->fetch_assoc();
	$id_usuario=$fila['id_usuario'];
	$nombre= $fila['nombre'];
$apellido= $fila['apellido'];
$correo= $fila['correo'];
$contra= $fila['contra'];
$rol= $fila['rol'];
$estatus= $fila['estatus'];
}else{
	echo "Hubo un error".$conexion->error;
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Actualizar registro</title>
	<style>
		body{
			background: #c2d6d6;
		}
	</style>
</head>
<body>
	<br><br><br>
	<h1><center>Registro encontrado</center></h1>
	<form method="POST" action="actualizar_db.php">
		<div>	
		<center>ID: <input required type="text" name="id_usuario" id="id_usuario" value="<?php echo $id_usuario; ?>" readonly></center>
		<br>
		<center>Nombre: <input required type="text" name="nombre" id="nombre" value="<?php echo $nombre; ?>"></center>
		<br>
		<center>Apellido: <input required type="text" name="apellido" id="apellido" value="<?php echo $apellido; ?>"></center>
		<br>
		<center>Correo: <input required type="text" name="correo" id="correo" value="<?php echo $correo; ?>"></center>
		<br>
		<center>Rol: <select name="rol" id="rol" value="<?php echo $rol; ?>">
        <option value="0">Lector</option>
        <option value="1">Escritor de reseñas</option>
        <option value="2">Critico</option>
    </select></center><br>
		<center>Contraseña: <input required type="text" name="contra" id="contra" value="<?php echo $contra; ?>"></center>
		<br>
		<center>Estatus: <input required type="text" name="estatus" id="estatus" value="<?php echo $estatus; ?>" readonly></center>
		<br>
		<center><input type="submit" name="Actualizar" value="Actualizar"></center>
	</form>
	</div>
	<br/><br/>
</body>
</html>