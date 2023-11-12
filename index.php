<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Bienvenidos, Por favo registra tu asistencia</h1> 
   <h2 id="fecha"></h2>
<div>
    <a href="">Ingresar al sistema</a>
    <p>ingrese su dni</p>

    <form action=""><input type="Dni empleado"></form>
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