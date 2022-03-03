<?php
if (isset($_POST["registrar"])) {
    if (empty($POST["correo"])) {
        echo   "Favor de ingresar su correo electronico";
    }else{
        $usario = filter_var(strtolower($_POST["correo"]), FILTER_SANITIZE_EMAIL);
        $contra = (empty($_POST["contra"])) ? "1234": $_POST["contra"];
        $nombre = htmlspecialchars($_POST["nombre"]);
        $apellido = htmlspecialchars($_POST["apellido"]);
        $rol = htmlspecialchars($_POST["rol"]);

        try {
            $conexion = new PDO('mysql:host=localhost;dbname=practicapw', 'root', '');
            $insercion = $conexion->prepare('INSERT INTO usuarios')
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}


?>