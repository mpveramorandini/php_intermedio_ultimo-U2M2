<?php
session_start();
include("header.php");
include("conexion.php");

if(isset($_SESSION['clientes'])){
  $usuario = $_SESSION['clientes'];
  $consulta_db = mysqli_query($conexion_db, "SELECT * FROM usuarios WHERE usuario = '$usuario'");
  $datos_usuario = mysqli_fetch_assoc($consulta_db);
}
else {
  header('Location: salir.php');
}

?>

<body>  
    <div class="contenido">
        <h2>bienvenido cliente DNI <?php echo $datos_usuario['usuario'];?> </h2>
        <h3>En esta sección encontrará información sobre sus pedidos y compras</h3>

        <img src="imagenes/pasted image 0.png" alt="inicio">

    </div>
    <ul class="salir">
      <li><a href="salir.php">Cerrar Sesion</a></li>
    </ul>




</body>
</html>