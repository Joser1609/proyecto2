<?php
// Conexión a la base de datos
$conexion = mysqli_connect("localhost", "root", "Unisalle123", "login");

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Captura de datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$correo = $_POST['correo'];
$semestre = $_POST['semestre'];

// Inserción en la tabla estudiante
$sql = "INSERT INTO estudiante (nombre, apellido, edad, correo, semestre) 
        VALUES ('$nombre', '$apellido', '$edad', '$correo', '$semestre')";

if (mysqli_query($conexion, $sql)) {
    echo "<h2>✅ Estudiante registrado correctamente.</h2>";
    echo "<a href='index.html'>Volver al formulario</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
}

mysqli_close($conexion);
?>