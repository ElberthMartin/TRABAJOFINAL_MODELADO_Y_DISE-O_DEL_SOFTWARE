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
    
<div class="row" >
  <form action="">
    <div class="fl-flex-label mb-4 px-2 col-12 col-md-6 ">
<input type="text" placeholder="Nombre" class="input input__text" name="txtnombre" >
</div>


<div class="fl-flex-label mb-4 px-2 col-12 col-md-6 ">
<input type="text" placeholder="Apellido" class="input input__text" name="txtapellido" >
</div>


<div class="fl-flex-label mb-4 px-2 col-12 col-md-6 ">
<input type="text" placeholder="Usuario" class="input input__text" name="txtusuario" >
</div>


<div class="fl-flex-label mb-4 px-2 col-12 col-md-6 ">
<input type="password" placeholder="Contraseña" class="input input__text" name="txtcontraseña" >
</div>


<div class="text-right p-2">
  <a href=""class="btn btn secondary btn-rounded">Atras</a>
<button type="submit" class="btn btn-primary btn-rounded">Registrarse</button>

</div>


  </form>
</div>

</div>
</div>
<!-- fin del contenido principal -->


<!-- por ultimo se carga el footer -->
<?php require('./layout/footer.php'); ?>
