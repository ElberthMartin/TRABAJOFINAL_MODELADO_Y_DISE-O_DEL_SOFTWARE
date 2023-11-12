<?php
session_start();
session_destroy();
header("Location: http://localhost/control%20asistencia/vista/login/login.php");
exit();
?>

