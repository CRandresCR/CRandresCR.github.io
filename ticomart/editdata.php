<?php

	include 'conexion.php';
	
	$id = $_POST['id'];
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

	
	$connect->query("UPDATE login SET usuario='".$usuario."', contrasena='".$contrasena." WHERE id=". $id);

?>