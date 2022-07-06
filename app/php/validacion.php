<?php
//Establecer la conexión con la BD

include_once('conexion.php');

//traer los datos del formulario
$Email = $_POST['Email'];
$Contrasena = $_POST['Contraseña'];

//validar datos
$validacion = "SELECT*FROM usuario WHERE correo = '$Email' AND clave = '$Contrasena'";

$query = mysqli_query($conection, $validacion);

$row = mysqli_fetch_array($query);

if(mysqli_num_rows($query)!=1){
    echo "<h1>Usuario y/o contraseña incorrectos.</h1>";
} else {
    header('Location:../validado.html');
}