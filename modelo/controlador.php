<?php
if (!empty($_POST["btningresar"])){
    if (empty($_POST["usuario"]) and empty($_POST["contraseña"])){
        echo'<div class="alert alert-danger">Los campos estan vacios</div>';
    } else {
        $usuario=$_POST["usuario"];
        $contraseña=$_POST["contraseña"];
        $sql=$conexion->query("select * from login where usuario='$usuario' and contraseña='$contraseña'");
        if ($datos=$sql->fetch_object()) {
            header("location:divipol.php");
        } else {
            echo'<div class="alert alert-danger">ACCESO DENEGADO</div>';
        }
    }
}
?>