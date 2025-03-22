<?php
include 'conexion.php';

$queryResult=$connect->query("SELECT c.ID_Categoria,c.Nombre,c.Descripcion,sc.ID_Subcategoria,sc.Nombre as NombreSubCategoria,sc.Descripcion as DescripcionSubcategoria FROM categoria c inner join subcategoria sc where c.ID_Categoria = sc.ID_Categoria");

$result=array();

while($fetchData=$queryResult->fetch_assoc()){
	$result[]=$fetchData;
}

echo json_encode($result);

?>
