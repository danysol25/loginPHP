<?php
$host = "localhost";
$user="root";
$bd="login_p";

$conection = mysqli_connect($host,$user,'',$bd);

//$err="Ha ocurrido un error con la base de datos.";
$go="Conexión establecida";

if($conection != true){
    mysqli_error($conection);
} 