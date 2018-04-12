<?php 
require_once("_db.php");
if(!isset($_POST['accion'])){
	$accion ="";
}else{
	$accion = $_POST['accion'];
}
switch ($accion) {
	case 'eliminarServicio': eliminarServicio();
	break;
	
	case 'insertar' : insertar();
	break;

	case 'consultar' : consultarServicio();
	break;

	default:
		# code...
	break;
}
function insertar(){
	global $db;
	extract($_POST);
	$db->insert("servicios",[
		"sucursales" => $sucursales,
		"experiencia" => $experiencia,
		"clientes_satisfechos" => $clientes,
		"empleados" => $empleados
	]);
	$servicio = $db->id();
	echo "Se ha registrado correctamente el servicio con ID ".$servicio;
}
function consultarServicios(){
	global $db;
	$servicio = $db->select("servicios","*");
	echo json_encode($servicios);
}
function eliminarServicios(){
	global $db;
	extract($_POST);
	$servicio = $db->delete("servicios",["id_servicios" => $usuario]);
	echo "Se ha eliminado el servicio correctamente";	
}
?>