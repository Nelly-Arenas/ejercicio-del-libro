<!DOCTYPE html>
<html xmlns="http:www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="content-Type" content="text/html" charset="utf-8"/>
	<title>Formulrio de altas de especialidades</title>
	<link rel="stylesheet" type="text/css" href="../estilos/estilosEspecialidades.css">
</head>
<body>
<form id="form1 " name="form1" method="post" action="actBase.php">
	<p class="titulo">Altas especialidades</p><br/><br/>
	<label for="clave">Clave:</label>
	<input type="text" name="cveEspecialidad" id="claveEspecialidad" size="100px" maxlength="6"/><br/>
	<label for="area">Nombre</label>
	<input type="text" name="nombreEspecialidad" size="100" maxlength="25"/><br/>
	<label for="area">Aréa</label>
	<select name="nombreArea" id="nombreArea">
		<option value="2">FISICO-MATEMATICA</option>
 		<option value="3">XXXXX</option>
		

	</select><br/><br/>

	<input type="submit" name="boton" id="botonGuardar" value="Guardar" enabled><br/>
	<input type="reset" name="botonNuevo" id="botonNuevo" value="Nuevo" enabled ><br/>
</form>
<img src="../imagEscuela/regresar.gif" width="60" height="40" onclick="history.back()"/>
<?php
		include ("conectar.php");
		$resConectar=conecta();
		$sqlAreas=" SELECT *FROM AREA";
		$tablaArea=mysql_query($sqlAreas);
		$numfilasAreas=mysql_num_rows($tablaArea);
		for ($i=0; $i <$numfilasAreas ; $i++) { 
			$filaArea=mysql_fetch_array($tablaArea);
			echo '<option>'.$filaArea['nomArea'].'</option>';
			# code...
		}
		?>
</body>
</html>