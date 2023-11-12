<?php
try {
    $conexion = new mysqli("localhost", "root", "", "sistema", "3306");
    $conexion->set_charset("utf8");
    date_default_timezone_set("America/Lima");
} catch (mysqli_sql_exception $e) {
    // Handle the exception
    die("Connection failed: " . $e->getMessage());
}
?>

