<?php

echo 'ESTAMOS EN EL DELETE.PHP';
echo 'Hemos recogido el valor del id : ' . $_GET['id'];
//1.recoger el id de la url.
//1.1 ver si existe y tal caso recogerlo
$id = $_GET['id'];

//2.IMPORTAR LA CLASE DATABASE.PHP
require_once('Database.php');

//3.Invocar la funcion delete de la clase database.php
Database::delete($id);

//4.RETORNAR AL INDEX.PHP para ver cambios
header('location: index.php');
?>