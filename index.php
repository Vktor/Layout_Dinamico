<?php 
session_start();
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
        include("obtenerTodo.php")
    ?>
    <script src='jquery.js'></script>
    <script src="jquery-ui.js"></script>
    <script src='codigo.js'></script>
</body>
</html>