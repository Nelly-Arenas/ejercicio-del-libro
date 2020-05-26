<?php 
function conecta(){
$vServidor="localhost";
$vUsuarioBD ="root";
$vContraseniaBD ="";
$vBD ="escuela";
$errorServ ="No se puede conectar con el servidor";
$errorBD ="No se puede seleccionar la base de datos";


$conexion=mysqli_connect($vServidor,$vUsuarioBD,$vContraseniaBD,$vBD) or die ($errorServ);

return($conexion);
}
?>