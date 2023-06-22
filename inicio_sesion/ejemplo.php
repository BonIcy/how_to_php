<?php
session_start();

$_SESSION['usuario'] = "Yisus";
$_SESSION["contraseña"] = "12345678";
//los datos quedan almacenados con la session y asi se borren las variables quedan guardadas
echo "usuario : ". $_SESSION['usuario'] . "<br>"; 
echo "contraseña :". $_SESSION['contraseña'];
?>