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
	<?php 
		include("obtenerElementos.php");
	?>
    <script src='jquery.js'></script>
    <script src="jquery-ui.js"></script>
    <script src='codigo.js'></script>
</body>
</html>
<?php
	}
	else
	{
		echo '<meta http-equiv="REFRESH" content="0,url=index.php">';
	}
?>