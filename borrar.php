<?php

if ($_POST["Delete_Divipol"] == "Borrar") {
        include("modelo/conexion.php");
        $sql = "DELETE FROM `divipol`;";
        $result = mysqli_query($conexion, $sql);

        print("Base de Datos borrada satisfactoriamente.");
}
