<?php
// controlador_registrar_usuario.php

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir el archivo de conexión a la base de datos o configurar la conexión aquí
    include_once "../modelo/conexion.php"; // Reemplaza esto con la ruta correcta

    // Obtener los datos del formulario
    $nombre = $_POST["txtnombre"];
    $apellido = $_POST["txtapellido"];
    $usuario = $_POST["txtusuario"];
    $contraseña = $_POST["txtcontraseña"];

    // Hash de la contraseña (puedes usar password_hash para un manejo seguro de contraseñas)
    $contraseña_hash = password_hash($contraseña, PASSWORD_DEFAULT);

    // Consulta SQL para insertar el nuevo usuario en la base de datos
    $consulta = "INSERT INTO usuario (nombre, apellido, usuario, password) VALUES (?, ?, ?, ?)";

    // Preparar la consulta
    $stmt = $conexion->prepare($consulta);

    // Vincular los parámetros
    $stmt->bind_param("ssss", $nombre, $apellido, $usuario, $contraseña_hash);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        // Éxito al registrar el usuario
        echo "Usuario registrado exitosamente.";
    } else {
        // Error al registrar el usuario
        echo "Error al registrar el usuario: " . $stmt->error;
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conexion->close();
}
?>
