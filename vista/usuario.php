<?php
  session_start();
  if (empty($_SESSION['nombre']) and empty($_SESSION['apellido'])) {
      header('location:login/login.php');
  }

?>

<script>
  fuction advertencia(){
    var not=confirm("¿Estas seuro que deseas eliminar?")
    return not;
  }
</script>

<!-- primero se carga el topbar -->
<?php require('./layout/topbar.php'); ?>
<!-- luego se carga el sidebar -->
<?php require('./layout/sidebar.php'); ?>

<!-- inicio del contenido principal -->
<div class="page-content">

    <h4 class="text-center text-secondary">Lista de Usuarios</h4>
    
    <?php
include "../modelo/conexion.php";
include "../controlador/controlador_eliminar_aasistencia.php";

$sql = $conexion->query("SELECT * FROM usuario");

?>
<a href="registro_usuario.php" class='btn btn-primary btn-rounded mb-3'><i class="fa-solid fa-plus"></i> &nbsp; Registrar</a>
<table class="table table-bordered table-hover col-12" id="example">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDO</th>
      <th scope="col">USUARIO</th>
      <th></th>
    </tr>
  </thead>
  <tbody>

    <?php

    while ($datos = $sql->fetch_object()) {
    ?>

      <tr>
        <th><?php echo $datos->id_usuario; ?></th>
        <td><?php echo $datos->nombre  ?></td>
        <td><?php echo $datos->apellido; ?></td>
        <td><?php echo $datos->usuario; ?></td>
        
        <td>
          <a href="" class=" btn btn-warning "><i class="fa-solid fa-pen-to-square"></i></a>
        <a href="inicio.php?id=<?= $datos->id_usuario ?>" onclick="return confirm('Are you sure you want to delete this user?')" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
      
      </tr>

    <?php
    }
    ?>

  </tbody>
</table>


  </tbody>
</table>
</div>
</div>
<!-- fin del contenido principal -->


<!-- por ultimo se carga el footer -->
<?php require('./layout/footer.php'); ?>
