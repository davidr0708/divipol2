<?php
// Archivo procesar.php

////composer install

// Configuración de conexión a la base de datos MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "divipol";

use \PhpOffice\PhpSpreadsheet\IOFactory;

try {
  // Conectarse a la base de datos
  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
  }
  // Verificar si se envió un archivo
  if (isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] == 0) {
    $archivo = $_FILES["archivo"]["tmp_name"];

    // Cargar el archivo Excel utilizando la biblioteca PhpSpreadsheet
    require 'vendor/autoload.php'; // Asegúrate de haber instalado la biblioteca PhpSpreadsheet mediante Composer

    $reader = IOFactory::createReaderForFile($archivo);
    $spreadsheet = $reader->load($archivo);
    $sheet = $spreadsheet->getActiveSheet();
    $count = 0;

    // Iterar sobre las filas del archivo Excel y guardar los datos en la base de datos
    foreach ($sheet->getRowIterator() as $row) {
      if ($count > 0) {
        // Leer los valores de cada celda en la fila
        $data = [];
        foreach ($row->getCellIterator() as $cell) {
          $data[] = $cell->getValue();
        }

        // Insertar los datos en la tabla de la base de datos
        $sql = "INSERT INTO asignaciones (dd, mm, zz, pp, c_divipol, acopio_padre, c_anexos, tipo_acopio, codigo_pd_cad, nombre_pd_cad, departamento, municipio, puesto, mujeres, hombres, total, mesas, comuna, direccion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssssssssiiiiss", $data[0], $data[1], $data[2], $data[3], $data[4], $data[7], $data[8], $data[11], $data[12], $data[13], $data[15], $data[16], $data[17], $data[18], $data[19], $data[20], $data[21], $data[23], $data[24]);
        $stmt->execute();


        $queryDivipol = "UPDATE `divipol` SET `tipo_acopio`=?, `acopio_padre`=?, `nombre_pd_cad`=?, `estado`=?, `c_anexos`=? WHERE `c_divipol` = ?";
        $stmt2 = $conn->prepare($queryDivipol);
        $c_divipol = $data[4];
        $acopio_padre = $data[7];
        $c_anexos = $data[8];
        $tipo_acopio = $data[11];
        $nombre_pd_cad = $data[13];
        $estado = 2;
        $stmt2->bind_param("sssiss", $acopio_padre, $tipo_acopio, $nombre_pd_cad, $estado, $c_anexos, $c_divipol);
        $stmt2->execute();
      }

      $count++;
    }

    echo "Archivo cargado y datos guardados en la base de datos.";
  } else {
    echo "Error al cargar el archivo.";
  }

  $conn->close();
} catch (Exception $e) {
  echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
