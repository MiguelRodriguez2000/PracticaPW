<!DOCTYPE html>
<html>
<head>
	<title>Formulario</title>
</head>
<body background="fondo1.jpg" width="100%" height="100%">
	<br><br><br>
	<h1><center>Registro</center></h1>
	<h2><center>¡¡Bienvenido!!</center></h2>
	<h3><center>Ingrese correctamente sus datos</center></h3>
	<form method="POST" action="registro.php">
		<center>Nombre: <input required type="text" name="nombre" id="nombre"></center>
		<br>
		<center>Apellido: <input required type="text" name="apellido" id="apellido"></center>
		<br>
		<center>Correo: <input required type="text" name="correo" id="correo"></center>
		<br>
		<center>Rol: <select name="rol" id="rol" >
        <option value="0">Lector</option>
        <option value="1">Escritor de reseñas</option>
        <option value="2">Critico</option>
    </select></center>
		<center>Contraseña: <input required type="text" name="contra" id="contra"></center>
		<br>
		<center><input type="submit" name="enviar" value="Registrar"></center>
	</form>
	<br/><br/>
    <center><a href='ingresar.php'>¿Ya tienes una cuenta?</a></center>
</body>
</html>