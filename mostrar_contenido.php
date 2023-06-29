 <?php include("header.php")
?> 
<?php
// $usuario= "usuario";

include("conexion.php");
session_start();
if (isset($_SESSION['usuario'])) {
  $usuario = $_SESSION['usuario'];

$consulta_db = mysqli_query($conexion_db, "SELECT $usuario FROM usuarios WHERE usuario= '$usuario'");

$usuario = $consulta_db;

  echo "Bienvenido cliente DNI: " .      . ". En esta sección encontrará información sobre sus pedidos y compras.";

}

