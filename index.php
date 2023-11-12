<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>
    <div class="login-box">
 <h2>Bienvenidos, Por favor registra tu asistencia</h2>
  <h2 id="fecha"></h2>
  <form>

    <div class="user-box">
        
    <input type="txt" placeholder="DNI del estudiante" name="txtdni">
      
      <label>DNI DEL ESTUDIANTE</label>
    </div>
    
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      Entrada
    </a>
    <a href="#">
      <span></span>
      <span></span>
      <span></span>
      <span></span>
      salida
    </a>

  </form>
  <a href="">Ingresar al sistema</a>
</div>
<script>
setInterval(() => {
    let fecha = new Date();
    let fechaHora = fecha.toLocaleString();
    document.getElementById("fecha").textContent = fechaHora;

}, 1000);
</script>

</body>
</html>