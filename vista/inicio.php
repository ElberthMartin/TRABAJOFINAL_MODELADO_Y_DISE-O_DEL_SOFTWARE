<?php
  session_start();
  if (empty($_SESSION['nombre']) and empty($_SESSION['apellido'])) {
      header('location:login/login.php');
  }

?>

<script>
  function advertencia(){
    var not = confirm("¿Estás seguro que deseas eliminar?");
    return not;
  }
</script>


<!-- primero se carga el topbar -->
<?php require('./layout/topbar.php'); ?>
<!-- luego se carga el sidebar -->
<?php require('./layout/sidebar.php'); ?>

<!-- inicio del contenido principal -->
<div class="page-content">

    <h4 class="text-center text-secondary">Asistencia de estudiante</h4>
    
    <?php
include "../modelo/conexion.php";
include "../controlador/controlador_eliminar_aasistencia.php";

$sql = $conexion->query("SELECT
asistencia.id_asistencia,
empleado.id_empleado,
asistencia.entrada,
asistencia.salida,
empleado.nombre AS nom_empleado,
empleado.apellido,
empleado.dni,
empleado.grado,
empleado.seccion,
cargo.id_cargo,
cargo.nombre AS nom_cargo
FROM
asistencia
INNER JOIN empleado ON asistencia.id_empleado = empleado.id_empleado
INNER JOIN cargo ON empleado.grado = cargo.id_cargo;");

?>

<table class="table table-bordered table-hover col-12" id="example">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">ESTUDIANTE</th>
      <th scope="col">DNI</th>
      <th scope="col">GRADO</th>
      <th scope="col">SECCION</th>
      <th scope="col">ENTRADA</th>
      <th scope="col">SALIDA</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

    <?php

    while ($datos = $sql->fetch_object()) {
    ?>

      <tr>
        <th><?php echo $datos->id_asistencia; ?></th>
        <td><?php echo $datos->nom_empleado . ' ' . $datos->apellido; ?></td>
        <td><?php echo $datos->dni; ?></td>
        <td><?php echo $datos->grado; ?></td>
        <td><?php echo $datos->seccion; ?></td>
        <td><?php echo $datos->entrada; ?></td>
        <td><?php echo $datos->salida; ?></td>
        <td><a href="inicio.php?id=<?= $datos->id_asistencia ?>" onclick="return advertencia()" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>

 
      </tr>

    <?php
    }
    ?>

  </tbody>
</table>
</div>
</div>
<!-- fin del contenido principal -->


<!-- por ultimo se carga el footer -->
<?php require('./layout/footer.php'); ?>
