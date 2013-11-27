<?php
session_start();
unset($_SESSION['usuario']); 
header("Location: index.php");
session_destroy();
exit;
?>