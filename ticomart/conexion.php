<?php
// Datos de conexión
$host = 'mysql://root:lZQUVHhUatZhUJDiPMqIQcdFTeyMriKB@yamabiko.proxy.rlwy.net:26477/railway';  // Ejemplo: 'your-database-url.railway.app'
$usuario = 'root';             // Usuario proporcionado por Railway
$contraseña = 'lZQUVHhUatZhUJDiPMqIQcdFTeyMriKB';       // Contraseña proporcionada por Railway
$base_de_datos = 'railway' // Nombre de la base de datos

// Crear la conexión
$conn = new mysqli($host, $usuario, $contraseña, $base_de_datos);

// Comprobar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos";
?>
