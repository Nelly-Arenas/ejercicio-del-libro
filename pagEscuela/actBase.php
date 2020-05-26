<?php 
include("conectar.php");

$vCveEsp=$_POST['cveEspecialidad'];
$vNomEsp=$_POST['nombreEspecialidad'];
$vNomArea=$_POST['nombreArea'];
$vBoton=$_POST['boton'];
$resConectar=conecta();


if ($vBoton=="Guardar") {
	$sqlAltaEsp="INSERT INTO Especialidad VALUES('$vCveEsp','$vNomEsp','$vCveArea')";
	$guarda=mysql_query($sqlAltaEsp,$resConectar);
	if (!$guarda) {
		echo "<SCRIPT LANGUAGE='Javascript'TYPE='text/Javascript'> alert('Ocurrio un problema..Posible clave repetida') Javascript:history.back(1)</SCRIPT>";
	}
	else{
		echo "<SCRIPT LANGUAGE='Javascript' TYPE='text/Javascript'> alert('Especialidad registrada') window.location='../index.html'</SCRIPT>";
	}
}

else{
	$sqlModEsp="UPDATE ESPECIALIDAD SET vNomEsp='vNomEsp',cveArea='$vCveArea' WHERE cveEsp='$vCveEsp';";
	$modificar=mysql_query($sqlModEsp.$resConectar);
	if (!$modificar) {
		echo "<SCRIPT LANGUAGE='Javascript' TYPE='text/Javascript'>
		alert('Ocurrio un error..No se guardo el registro') Javascript:history.back(1) </SCRIPT>";
		# code...
	}
	else{
		echo "<SCRIPT LANGUAGE='Javascript' TYPE='text/Javascript'>
		alert('Especialidad modificada') window.location='consultaEspecialidad.php'</SCRIPT>";
	}
}
?>