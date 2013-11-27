<?php 
	session_start();
	if(isset($_SESSION["usuario"]))
	{
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Post-It!</title>
	<link rel="stylesheet" href="estilo.css">
</head>
<body>
	<div id="loginCont" class="fijo">  
    <?php 
         include("login.php");
    ?>
    </div>
	<div id="contenedor2">
		<a href="index.php"><div id="atras"> </div></a>
		<div id="titu">
			<h1>Agregar Contenido</h1>
			<form action="insertar.php" method="post">
				<p>
					<label>Agregar Titulo:</label>
					<input type="text" id="titulo" name="titulo">
				</p>
				<p>
					<label>Agregar Imagen:</label>
					<input type="text" id="agreg" name="url" placeholder="Agregar url de una imagen">
				</p>
				<p>
					<label>Agregue una Breve Descripcion del Articulo:</label>
					<textarea name="descripcion" id="descrip" cols="20" rows="5"></textarea>	
				</p>
				<p>
					<label id="lblcont">Agregar Contenido:</label>
					<textarea name="contenido" id="conte" cols="30" rows="10"></textarea>	
				</p>
				<button>Agregar</button>
			</form>
		</div>
	</div>
</body>
</html>
<?php
	}
	else
	{
		echo '<meta http-equiv="REFRESH" content="0,url=index.php">';
	}
?>