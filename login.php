<?php
	if(isset($_SESSION["usuario"]))
	{
		echo "
		<p>Usuario: ".$_SESSION["usuario"]."</p>
		<ul id='menuUser'>
			<li><a href='index.php'>   Inicio</a></li>
			<li><a href='userpost.php'>   Mis Post</a></li>
			<li><a href='agregar.php'>   Agregar Artículo</a></li>
			<li><a href='salir.php'>   Salir</a></li>
		</ul>
		";
	}
	else
	{
		echo '<p>Login</p>
        <p><input type="Text" placeholder="User Name" id="loginUser" required=""></p>
        <p><input type="password" placeholder="Password" id="loginPass" required=""></p>
        <input type="submit" value="Entrar" id="loginEnt">';


	}
?>