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
    $sumMesas = 0;
    $sumPuestos = 0;

    // Iterar sobre las filas del archivo Excel y guardar los datos en la base de datos
    foreach ($sheet->getRowIterator() as $row) {
      if ($count > 0) {
        // Leer los valores de cada celda en la fila
        $data = [];
        foreach ($row->getCellIterator() as $cell) {
          $data[] = $cell->getValue();
        }

        if (intval($data[10]) > 0) {
          //Suma las mesas
          $sumMesas = intval($data[10]) + $sumMesas;
          //Suma los puestos si no vienen vacios
          if ($data[6] != null && $data[6] != "") {
            $sumPuestos++;
          }

          // Insertar los datos en la tabla de la base de datos
          $sql = "INSERT INTO divipol (dd, mm, zz, pp, c_divipol, departamento, municipio, puesto, mujeres, hombres, total, mesas, comuna, direccion) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
          $stmt = $conn->prepare($sql);
          $divipolNumber = "{$data[0]}{$data[1]}{$data[2]}{$data[3]}";
          $stmt->bind_param("ssssssssiiiiss", $data[0], $data[1], $data[2], $data[3], $divipolNumber, $data[4], $data[5], $data[6], $data[7], $data[8], $data[9], $data[10], $data[11], $data[12]);
          $stmt->execute();
        }
      }
      $count++;
    }
    echo "Archivo cargado y datos guardados en la base de datos. Hay {$sumMesas} Mesas y {$sumPuestos} puestos.";
  } else {
    echo "Error al cargar el archivo.";
  }

  $conn->close();
} catch (Exception $e) {
  echo 'Excepción capturada: ',  $e->getMessage(), "\n";
}
