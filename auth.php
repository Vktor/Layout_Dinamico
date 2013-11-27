<?php 
session_start();
include("conexion.php");
$user=$_GET['usuario'];
$pass=$_GET['password'];
$cnx = new Conexion();
$datos = $cnx->login($user,$pass);
	if($datos==1)
	{
		$_SESSION['usuario'] = $user;
		echo "
		<p>Usuario: ".$user."</p>
		<ul id='menuUser'>
			<li><a href='index.php'>Inicio</a></li>
			<li><a href='userpost.php'>Mis Post</a></li>
			<li><a href='agregar.php'>Agregar Artículo</a></li>
			<li><a href='salir.php'>   Salir</a></li>
		</ul>
		";	
	} else
	{
		echo '<p>Login</p>
        <p><input type="Text" placeholder="User Name" id="loginUser" required=""></p>
        <p><input type="password" placeholder="Password" id="loginPass" required=""></p>
        <input type="submit" value="Entrar" id="loginEnt">';
		session_destroy();
	}
$cnx->cerrarConexion();
?>
