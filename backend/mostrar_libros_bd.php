<?php
$inc = include("basededatos.php");// llamamos la base de datos //
    if ($inc){  // creamos condicion para seleccionar los registros//
        $consulta = "SELECT * FROM libros";
        $resultado = mysqli_query($Labase, $consulta);
        if ($resultado){
            while ($fila = $resultado->fetch_array()){ //bucle para apilar los datos en un conjunto con array y nombramos los registros con variables para poder llamarlos //
                 $Isbn = $fila['Isbn'];
                 $Nombre = $fila['Nombre'];
                 $Autor = $fila['Autor'];
                 $Precio = $fila['Precio'];
                 $editorial = $fila['editorial'];

                 ?>
                 <div> <!-- Usamos HTML en espefico div para separa los datos en bloques -->
                    <H1>Consultas de tus Libro </H1>
                 </div>
                     <h2><?php echo $Nombre; ?></h1>
                     <div>
                        <p> <!-- Imprimimos los registros de la base de datoos -->
                            <b>Isbn: </b><?php echo $Isbn; ?><br>
                            <b>Nombre: </b><?php echo $Nombre; ?><br>
                            <b>Autor: </b><?php echo $Autor; ?><br>
                            <b>Precio: </b><?php echo $Precio; ?><br>
                            <b>editorial: </b><?php echo $editorial; ?><br>
                            
                        </p>
                     </div>
                 </div>
                 <?php
            }
        }

    }


?>






<!DOCTYPE html>
<html lang="en">

<head>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar un libro</title>
    <style>
    </style>
</head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultar libro</title>
</head>

<body>
    <a href="../libros/crear.php">Aqui para registrar libros</a>
    <a href="../index.php">Regresar</a>
    <form action="mostrar_libros_bd.php" method="POST">
      
    </form>
</body>
</html>

