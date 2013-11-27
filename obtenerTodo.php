<?php
	include("conexion.php");
	$con = new Conexion();
	$result = $con->obtenerTodos();
	while($row=mysqli_fetch_array($result))
	{
		echo '
			<article class="block">
				<h1>'.$row[0].'</h1>
				<figure>
				<img src="'.$row[3].'">
				</figure>
				<p>'.$row[1].'... Ver más</p>
			</article>
		';
	}
	$con->cerrarConexion();
?>