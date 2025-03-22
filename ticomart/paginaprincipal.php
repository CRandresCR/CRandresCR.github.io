<?php
include 'conexion.php';

$queryResult=$connect->query("SELECT * FROM categoria where activa_categoria = 1");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>
