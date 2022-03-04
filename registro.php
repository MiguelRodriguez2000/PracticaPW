<?php
        $apellido = htmlspecialchars($_POST["apellido"]);
        $rol = htmlspecialchars($_POST["rol"]);
        $nombre = htmlspecialchars($_POST["nombre"]);
        $correo = htmlspecialchars($_POST["apellido"]);
        $contra = htmlspecialchars($_POST["rol"]);
    if (empty($_POST["correo"])) {
        echo   "Favor de ingresar su correo electronico";
    }else{
        $usuario = filter_var(strtolower($_POST["correo"]), FILTER_SANITIZE_EMAIL);
        $contra = (empty($_POST["contra"])) ? "1234": $_POST["contra"];

        try {
            $conexion = new PDO('mysql:host=localhost;dbname=pelis', 'root', '');
            $insercion = $conexion->prepare('INSERT INTO usuarios(nombre, apellido, correo, contra, rol) 
            values (:nombre, :apellido, :usuario, :contra, :rol)');
            $insercion -> execute(array(
                ':usuario' => $usuario,
                ':contra' => $contra,
                ':nombre' => $nombre,
                ':apellido' => $apellido,
                ':rol' => $rol
            ));
            echo "Nuevo registro realizado";
        } catch (Exception $e) {
            echo "Error: ".$e->getMessage();
        }
    }
?>