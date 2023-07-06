<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    	<title>Importar | Asignaciones</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <!-- DataTable-->
        <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css" rel="stylesheet"/>
        <link href="https://cdn.datatables.net/buttons/2.3.6/css/buttons.bootstrap5.min.css" rel="stylesheet"/>
        <!--Bootstrap-->
        <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
        <!--Font Awesome-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        
    </head>
    <body>
	<?php
		include("modelo/conexion.php");
	?>
<nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
    <div class="container">
        <img src="images/logo.png" style="width: 15%;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar3">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
            <ul class="navbar-nav w-100 justify-content-center">
                <li class="nav-item ">
                    <a class="nav-link" href="divipol.php">Divipol</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="asignacion.php">Asignación CAD & PD</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="cruce_divipol.php">Cruce Divipol</a>
                </li>
            </ul>
            <ul class="nav navbar-nav ms-auto w-100 justify-content-end">
            <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Importar
                    </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item active" href="importar_divipol.php">Divipol</a>
                            <a class="dropdown-item " href="importar_asignacion.php">Asignacion CAD & PD</a>
                        </div>
                </div>
                <li class="nav-item">
                    <a class="nav-link" href="modelo/logout.php">Salir</a>
                </li>
            </ul>
            <i class="fa-solid fa-right-from-bracket" style="color: #1ABC9C;"></i>
        </div>
    </div>
</nav>

<h1 style="margin-top:50px;">Importar <br> Asignaciones CAD & PD</h1><br><br>

<form action="procesar_asignacion.php" method="POST" enctype="multipart/form-data">
  <input type="file" name="archivo" accept=".xlsx, .xls">
  <button type="submit">Cargar archivo</button>
</form>
</div>



<style>
body {
  font-family: "Open sans", "Segoe UI", "Segoe WP", Helvetica, Arial, sans-serif;
  color: #7F8C9A;
  background: #FCFDFD;
}
h1, h2 {
  margin-bottom: 5px;
  font-weight: normal;
  text-align: center;
  color:#aaa;
}
h2 {
  margin: 5px 0 2em;
  color: #1ABC9C;
}
form {
  width: 225px;
  margin: 0 auto;
  text-align:center;
}
h2 + P {
  text-align: center;
}
.txtcenter {
  margin-top: 4em;
  font-size: .9em;
  text-align: center;
  color: #aaa;
}
.copy {
  margin-top: 2em;
}
.copy a {
  text-decoration: none;
  color: #1ABC9C;
}
.principal{
    background-color:#ededed;
    margin-top: 10px;
    margin-left: 28%;
    width: 40%;
    border-radius: 20px
}
</style>

    <!--Jquery-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <!-- DataTable-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.3.6/js/buttons.print.min.js"></script>
    <!--Bootstrap-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="js/script.js"></script>

    </body>
</html>