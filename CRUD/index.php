<?php

require_once('Database.php');

$database = new Database();

$resultado = $database->getAll();

?>

<!DOCTYPE html>

<html lang="en">




<head>

    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ordenadores</title>

    <link rel="stylesheet" href="style.css">

</head>


<body>
<div class="container">     
    <div class="card">
<a href="create.php">Crear</a>


    <table>
        <thead>
            

             <tr>
                <th>idOrdenadores</th>
                <th>modelo</th>
                 <th>precio</th>
                 <th>marca</th>
                 <th>descripcion</th>
             </th>    

            </thead>
        <tbody>
</div>
</div>
            <?php
            

 foreach ($resultado as $row) {
    
     echo "<tr>";
     echo "<td>". $row['idOrdenadores'] . "<td>";
    echo "<td>". $row['modelo'] . "<td>";
    echo "<td>". $row['precio'] . "<td>";
    echo "<td>". $row['marca'] . "<td>";
    echo "<td>". $row['descripcion'] . "<td>";
    echo "<td> <a href='edit.php?id=".$row['idOrdenadores']."'>Editar</a> 
<a href='delete.php?id=".$row['idOrdenadores']."'>Eliminar</a></td>";
    echo "</tr>";
 }
 ?>

        </tbody>
    </table>
</body>

</html>