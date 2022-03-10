<?php 
$conexion = new mysqli("localhost", "root", "", "pelis");
$sql = "SELECT * FROM usuarios";
$resultado=$conexion->query($sql);
$tabla='<table border="1">
        <tr>
               <th>ID</th>
					<th>Correo</th>
					<th>Contraseña</th>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Rol</th>
					<th>Estatus</th>
					<th>Acciones</th>        
					</tr>
';
if($resultado){
	while($fila = $resultado->fetch_assoc()){
		if($fila['estatus']==1){
			$a='ACTIVO';
		}
		else{
			$a='INACTIVO';
}
		
    $tabla .= '
        <tr>
               	<td>'.$fila['id_usuario'].'</td>
               	<td>'.$fila['correo'].'</td>
               	<td>'.$fila['contra'].'</td>
               	<td>'.$fila['nombre'].'</td>
               	<td>'.$fila['apellido'].'</td>
               	<td>'.$fila['rol'].'</td>
               	<td>'.$fila['estatus'].'</td>
				<td><a href="eliminar.php?id='.$fila['id_usuario'].'">ELIMINAR</a> 
				<a href="actualizar.php?id='.$fila['id_usuario'].'">EDITAR</a></td>
        </tr>
		
';
	}
		$tabla .= '</table>';
}
	echo '<h2>Listado de Materiales</h2>';
	echo $tabla;
	 ?>