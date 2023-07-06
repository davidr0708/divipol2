<?php

if ($_POST["Delete_Asignaciones"] == "Borrar") {
        include("modelo/conexion.php");
        $sql = "DELETE FROM `asignaciones`;";
        $result = mysqli_query($conexion, $sql);

        print("Base de Datos borrada satisfactoriamente.");
}
