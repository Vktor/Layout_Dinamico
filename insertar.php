<?php 
	session_start();
	include("conexion.php");
	$titulo = strip_tags($_POST["titulo"]);
	$descripcion = strip_tags($_POST["descripcion"]);
	$contenido = strip_tags($_POST["contenido"]);
	$url = $_POST["url"];

	$con = new Conexion();
	$con->insertarArticulo($titulo,$descripcion,$contenido,$url,$_SESSION["usuario"]);
	$con->cerrarConexion();	
	header("Location: index.php");
?>