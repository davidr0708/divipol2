
<?php
include('config.php');

$dd 	 		 = $_REQUEST['dd'];
$mm      		 = $_REQUEST['mm'];
$zz 	 		 = $_REQUEST['zz'];
$pp 	 		 = $_REQUEST['pp'];
$c_divipol 		 = $_REQUEST['c_divipol'];
$c_anexos      	 = $_REQUEST['c_anexos'];
$acopio_padre 	 = $_REQUEST['acopio_padre'];
$tipo_acopio 	 = $_REQUEST['tipo_acopio'];
$nombre_pd_cad 	 = $_REQUEST['nombre_pd_cad'];
$departamento    = $_REQUEST['departamento'];
$municipio 	 	 = $_REQUEST['municipio'];
$puesto 	  	 = $_REQUEST['puesto'];
$mujeres 		 = $_REQUEST['mujeres'];
$hombres      	 = $_REQUEST['hombres'];
$total 	 		 = $_REQUEST['total'];
$mesas 	 		 = $_REQUEST['mesas'];
$comuna 		 = $_REQUEST['comuna'];
$direccion       = $_REQUEST['direccion'];

$update = ("UPDATE divipol 
	SET 

	dd  				='" .$dd. "',
	mm  				='" .$mm. "',
	zz 					='" .$zz. "',
	pp 					='" .$pp. "',
	c_divipol  			='" .$c_divipol. "',
	c_anexos  			='" .$c_anexos. "',
	acopio_padre 		='" .$acopio_padre. "',
	tipo_acopio  		='" .$tipo_acopio. "',
	nombre_pd_cad  		='" .$nombre_pd_cad. "',
	departamento 		='" .$departamento. "',
	municipio  			='" .$municipio. "',
	puesto  			='" .$puesto. "',
	mujeres 			='" .$mujeres. "',
	hombres  			='" .$hombres. "',
	total  				='" .$total. "',
	mesas 				='" .$mesas. "',
	comuna  			='" .$comuna. "',
	direccion  			='" .$direccion. "'

");
$result_update = mysqli_query($con, $update);

echo "<script type='text/javascript'>
        window.location='index.php';
    </script>";

?>