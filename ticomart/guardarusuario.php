<?php
include 'conexion.php';

$Nombre = $_POST['nombre'];
$Correo = $_POST['correo'];
$Contrasena = $_POST['contrasena'];
$Direccion = $_POST['direccion'];

// Verificar si el correo ya existe
$result = $connect->query("SELECT * FROM usuarios WHERE Correo = '$Correo'");

if ($result->num_rows > 0) {
    echo json_encode(["success" => false, "message" => "El correo ya está registrado."]);
} else {
    // Insertar nuevo usuario
    if ($connect->query("INSERT INTO usuarios (Nombre, Correo, Contraseña, Direccion) VALUES ('$Nombre', '$Correo', '$Contrasena', '$Direccion')")) {
        echo json_encode(["success" => true, "message" => "Usuario registrado con éxito."]);
    } else {
        echo json_encode(["success" => false, "message" => "Error al registrar el usuario: " . $connect->error]);
    }
}
?>