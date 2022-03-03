<?php
if (isset($_POST["registrar"])) {
    if (empty($POST["correo"])) {
        echo   "Favor de ingresar su correo electronico";
    }else{
        $usario = filter_var(strtolower($_POST["correo"]), FILTER_SANITIZE_EMAIL);
        $contra = (empty($_POST["contra"])) ? "1234": $_POST["contra"];

        try {
            $conexion = new PDO('mysql:host=localhost;dbname')
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}


?>