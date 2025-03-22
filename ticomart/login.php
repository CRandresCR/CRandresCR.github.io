<?php

    include 'conexion.php';

    $usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

    $consultar=$connect->query("SELECT * FROM usuarios WHERE Nombre='".$usuario."' and Contraseña='".$contrasena."'");

    $resultado=array();

    while($extraerDatos=$consultar->fetch_assoc()){
        $resultado[]=$extraerDatos;
    }

    echo json_encode($resultado);

    ?>