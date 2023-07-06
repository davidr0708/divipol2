<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Archivo Asignación | Divipol</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/maquinawrite.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-center">
        <div class="container">
            <img src="img/logo.png" style="width: 15%;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsingNavbar3">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse w-100" id="collapsingNavbar3">
                <ul class="navbar-nav w-100 justify-content-center">
                    <li class="nav-item ">
                        <a class="nav-link" href="index.php">Divipol</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="asignaciones.php">Asignación CAD & PD</a>
                    </li>
                    <div class="dropdown">
                        <button class="btn btn-success dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Importar
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="importar_divipol.php">Divipol</a>
                            <a class="dropdown-item" href="importar_asignaciones.php">Asignacion CAD & PD</a>
                        </div>
                    </div>
                </ul>
                <ul class="nav navbar-nav ms-auto w-100 justify-content-end">

                    <li class="nav-item">
                        <a class="nav-link" href="modelo/logout.php">Salir</a>
                    </li>
                </ul>
                <i class="fa-solid fa-right-from-bracket" style="color: #1ABC9C;"></i>
            </div>
        </div>
    </nav>
<body>

<div class="container my-4">
        <div class="row">
            <div class="col-md-3" style="margin-left:80%">
                <form action="borrar-asignaciones.php" method="POST">
                    <input type="hidden" name="Delete_Asignaciones" id="delete" value="Borrar">
                    <button type="submit" class="btn btn-danger" style="cursor: pointer;">Borrar Base de Datos</button>
                </form>
            </div>
            <div class="col-md-10">
            </div>
        </div>
    <main>
        <div class="container py-4 text-center">
            <h2>BASE DE DATOS ASIGNACIÓN</h2>

            <div class="row g-4">

                <div class="col-auto">
                    <label for="num_registros" class="col-form-label">Mostrar: </label>
                </div>

                <div class="col-auto">
                    <select name="num_registros" id="num_registros" class="form-select">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>

                <div class="col-auto">
                    <label for="num_registros" class="col-form-label">registros </label>
                </div>

                <div class="col-5"></div>
                <div class="col-auto">
                    <label for="campo" class="col-form-label">Buscar: </label>
                </div>
                <div class="col-auto">
                    <input type="text" name="campo" id="campo" class="form-control">
                </div>
            </div>
            <?php
        include('config.php');
        $sqlCliente   = ("SELECT * FROM asignaciones ORDER BY id ASC ");
        $queryCliente = mysqli_query($con, $sqlCliente);
        $cantidad     = mysqli_num_rows($queryCliente);
        ?>
            <div class="row py-4">
                <div class="col">
                    <table class="table table-sm table-bordered table-striped">
                        <thead>
                        <tr style="font-size: 11px">
                        <th>DD</th>
                        <th>MM</th>
                        <th>ZZ</th>
                        <th>PP</th>
                        <th>CÓDIGO DIVIPOL</th>
                        <th>ACOPIO/PADRE</th>
                        <th>CÓDIGO DE ANEXOS</th>
                        <th>CENTRO DE ACOPIO</th>
                        <th>CÓDIGO PD/CAD</th>
                        <th>NOMBRE DEL CAD/PD PRINCIPAL</th>
                        <th>DEPARTAMENTO</th>
                        <th>MUNICIPIO</th>
                        <th>PUESTO</th>
                        <th>MUJERES</th>
                        <th>HOMBRES</th>
                        <th>TOTAL</th>
                        <th>MESAS</th>
                        <th>COMUNA</th>
                        <th>DIRECCIÓN</th>
                          </tr>
                        </thead>

                        <!-- El id del cuerpo de la tabla. -->
                        <tbody id="content">
                        <?php
                              while ($dataCliente = mysqli_fetch_array($queryCliente)) { ?>
            <tr style="font-size: 12px;">
                <td><?php echo $dataCliente['dd']?></td>
                <td><?php echo $dataCliente['mm']?></td>
                <td><?php echo $dataCliente['zz']?></td>
                <td><?php echo $dataCliente['pp']?></td>
                <td><?php echo $dataCliente['c_divipol']?></td>
                <td><?php echo $dataCliente['acopio_padre']?></td>
                <td><?php echo $dataCliente['c_anexos']?></td>
                <td><?php echo $dataCliente['tipo_acopio']?></td>
                <td><?php echo $dataCliente['codigo_pd_cad']?></td>
                <td><?php echo $dataCliente['nombre_pd_cad']?></td>
                <td><?php echo $dataCliente['departamento']?></td>
                <td><?php echo $dataCliente['municipio']?></td>
                <td><?php echo $dataCliente['puesto']?></td>
                <td><?php echo $dataCliente['mujeres']?></td>
                <td><?php echo $dataCliente['hombres']?></td>
                <td><?php echo $dataCliente['total']?></td>
                <td><?php echo $dataCliente['mesas']?></td>
                <td><?php echo $dataCliente['comuna']?></td>
                <td><?php echo $dataCliente['direccion']?></td>
            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
            </div>

            <div class="row">
                <div class="col-6">
                    <label id="lbl-total"></label>
                </div>

                <div class="col-6" id="nav-paginacion"></div>

                <input type="hidden" id="pagina" value="1">
                <input type="hidden" id="orderCol" value="0">
                <input type="hidden" id="orderType" value="asc">
            </div>
        </div>
    </main>

    <script>
        /* Llamando a la función getData() */
        getData()

        /* Escuchar un evento keyup en el campo de entrada y luego llamar a la función getData. */
        document.getElementById("campo").addEventListener("keyup", function() {
            getData()
        }, false)
        document.getElementById("num_registros").addEventListener("change", function() {
            getData()
        }, false)


        /* Peticion AJAX */
        function getData() {
            let input = document.getElementById("campo").value
            let num_registros = document.getElementById("num_registros").value
            let content = document.getElementById("content")
            let pagina = document.getElementById("pagina").value
            let orderCol = document.getElementById("orderCol").value
            let orderType = document.getElementById("orderType").value

            if (pagina == null) {
                pagina = 1
            }

            let url = "load.php"
            let formaData = new FormData()
            formaData.append('campo', input)
            formaData.append('registros', num_registros)
            formaData.append('pagina', pagina)
            formaData.append('orderCol', orderCol)
            formaData.append('orderType', orderType)

            fetch(url, {
                    method: "POST",
                    body: formaData
                }).then(response => response.json())
                .then(data => {
                    content.innerHTML = data.data
                    document.getElementById("lbl-total").innerHTML = 'Mostrando ' + data.totalFiltro +
                        ' de ' + data.totalRegistros + ' registros'
                    document.getElementById("nav-paginacion").innerHTML = data.paginacion
                }).catch(err => console.log(err))
        }

        function nextPage(pagina){
            document.getElementById('pagina').value = pagina
            getData()
        }

        let columns = document.getElementsByClassName("sort")
        let tamanio = columns.length
        for(let i = 0; i < tamanio; i++){
            columns[i].addEventListener("click", ordenar)
        }

        function ordenar(e){
            let elemento = e.target

            document.getElementById('orderCol').value = elemento.cellIndex

            if(elemento.classList.contains("asc")){
                document.getElementById("orderType").value = "asc"
                elemento.classList.remove("asc")
                elemento.classList.add("desc")
            } else {
                document.getElementById("orderType").value = "desc"
                elemento.classList.remove("desc")
                elemento.classList.add("asc")
            }

            getData()
        }

        let 
    </script>
    <script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {

        $(window).load(function() {
            $(".cargando").fadeOut(1000);
        });

//Ocultar mensaje
    setTimeout(function () {
        $("#contenMsjs").fadeOut(1000);
    }, 3000);



    $('.btnBorrar').click(function(e){
        e.preventDefault();
        var id = $(this).attr("id");

        var dataString = 'id='+ id;
        url = "recib_Delete.php";
            $.ajax({
                type: "POST",
                url: url,
                data: dataString,
                success: function(data)
                {
                  window.location.href="index.php";
                  $('#respuesta').html(data);
                }
            });
    return false;

    });


});
</script>
    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>