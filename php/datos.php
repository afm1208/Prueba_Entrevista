<?php 
require('conexion.php');
$continente= $_POST['pais'];

	$sql="SELECT id,
			 id_pais,
			 ciudad 
		from paises 
		where id_pais='$continente'";

	$result=mysqli_query($conexion,$sql);

	$cadena="<label>Ciudad de nacimiento</label> 
			<select id='Ciudad_nacimiento' name='Ciudad_nacimiento' class='form-control'>";

	while ($ver=mysqli_fetch_row($result)) {
		$cadena=$cadena.'<option value='.($ver[2]).' required>'.($ver[2]).' </option>';
	}

	echo  $cadena."</select>";
	

?>