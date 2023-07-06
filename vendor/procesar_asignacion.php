<?php
// Archivo procesar.php

////composer install

// Configuración de conexión a la base de datos MySQL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "divipol";

// Conectarse a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Error de conexión a la base de datos: " . $conn->connect_error);
}
use \PhpOffice\PhpSpreadsheet\IOFactory;
// Verificar si se envió un archivo
if (isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] == 0) {
  $archivo = $_FILES["archivo"]["tmp_name"];

  // Cargar el archivo Excel utilizando la biblioteca PhpSpreadsheet
  require 'vendor/autoload.php'; // Asegúrate de haber instalado la biblioteca PhpSpreadsheet mediante Composer

  $reader = IOFactory::createReaderForFile($archivo);
  $spreadsheet = $reader->load($archivo);
  $sheet = $spreadsheet->getActiveSheet();
  
  // Iterar sobre las filas del archivo Excel y guardar los datos en la base de datos
  foreach ($sheet->getRowIterator() as $row) {
    // Leer los valores de cada celda en la fila
    $data = [];
    foreach ($row->getCellIterator() as $cell) {
      $data[] = $cell->getValue();
    }

    // Insertar los datos en la tabla de la base de datos
    $sql = "INSERT INTO asignaciones(c_dpto, mm, zz, pp, c_divipol, c_anexos, nro, codigo_pd_cad, departamento, municipio, puesto, mujeres, hombres, total, mesas, comuna, direccion, tipo_cad, clase, nombre_cad) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("iiiiiiissssiiiisssss", $data[0], $data[1], $data[2], $data[3], $data[4], $data[5], $data[6], $data[7],$data[8],$data[9],$data[10],$data[11],$data[12],$data[13],$data[14],$data[15],$data[16],$data[17],$data[18],$data[19]);
    $stmt->execute();
  }

  echo "Archivo cargado y datos guardados en la base de datos.";

} else {
  echo "Error al cargar el archivo.";
}

$conn->close();
?>
