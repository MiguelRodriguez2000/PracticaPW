<?php 
	require_once"conectpdo.php";

		$id = $_GET['id'];
		$sql = $pdo-> prepare("DELETE FROM usuarios WHERE id_usuario=:id");
		$sql -> bindParam(":id", $id);

		if($sql->execute()){
			echo "Datos eliminados correctamente... ";
			echo "<br/><br/>";
			echo "<a href='listado.php'>Ir a Lista de Usuarios </a>";
		}else{
			echo "No se ha podido eliminar el registro.. ";
			echo "<br/><br/>";
			echo "<a href='listado.php'>Ir a Lista de Usuarios </a>";
		}

?>