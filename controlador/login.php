<?php
if (!empty($_POST["btningresar"])) {
    if (!empty($_POST["usuario"]) && !empty($_POST["password"])) {
        $usuario = $_POST["usuario"];
        $password = md5($_POST["password"]);

        $sql = $conexion->query("SELECT * FROM usuario WHERE usuario = '$usuario' AND password = '$password'");

        if ($sql->fetch_object()) {
            header("Location: ../inicio.php");
        } else {
            echo '<div class="alert alert-danger">El usuario no existe</div>';
        }
    } else {
        echo '<div class="alert alert-danger">Ambos campos deben estar llenos</div>';
    }
}
?>
