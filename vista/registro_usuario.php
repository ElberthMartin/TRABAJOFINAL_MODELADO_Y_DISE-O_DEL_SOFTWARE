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

    <h4 class="text-center text-secondary">Registro  de Usuarios</h4>
    
<div class >


</div>

</div>
</div>
<!-- fin del contenido principal -->


<!-- por ultimo se carga el footer -->
<?php require('./layout/footer.php'); ?>
