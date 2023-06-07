<?php

echo $_POST['idOrdenadores'];

//1.Recoger todos los elementos del formulario
$datos= [$_POST['idOrdenadores'], $_POST['marca'], $_POST['modelo'], $_POST['precio']];
//Importar la clase Database.php
require_once('Database.php');
//3.Invocar la funcion save de DataBase llevandole los datos
Database::delete($datos);

//4.Retornar al index.php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenadores</title>
</head>
<body>

<form action="update.php" method="POST">
        <input type="hidden" name="idOrdenadores" value="<?php echo $datos['idOrdenadores'] ?>">
        <input type="text" name="marca" value="<?php echo $datos['marca'] ?>" placeholder="Actualiza una marca">
        <input type="text" name="modelo" value="<?php echo $datos['modelo'] ?>" placeholder="Actualiza un modelo">
        <input type="text" name="precio" value="<?php echo $datos['precio'] ?>" placeholder="Actualiza un precio">
        <input type="text" name="descripcion" value="<?php echo $datos['descripcion'] ?>" placeholder="Actualiza la descripcion">
        <button type="submit">Enviar</button>
    </form>
    
</body>
</html>