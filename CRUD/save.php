<?php

echo $_POST['idOrdenadores'];

//1.Recoger todos los elementos del formulario
$datos = [$_POST['idOrdenadores'], $_POST['marca'], $_POST['modelo'], $_POST['precio'], $_POST['descripcion']];
//Importar la clase Database.php
require_once('Database.php');
//3.Invocar la funcion save de DataBase llevandole los datos
Database::delete($idOrdenadores);

//4.Retornar al index.php
header('Location: index.php');
?>