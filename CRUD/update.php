<?php

echo $_POST['marca']

//1.Recoger todos los elementos del formulario
$datos = [$_POST['id'], $_POST['marca'], $_POST['modelo'], $_POST['precio']];
//Importar la clase Database.php
require_once('Dtabase.php');
//3.Invocar la funcion save de DataBase llevandole los datos
Database::delete($idOrdenadores);

//4.Retornar al index.php
header('Location: index.php');
?>