<?php
$conex = mysqli_connect("localhost", "root", "tu_contraseña_de_mysql");
if (!$conex) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>
