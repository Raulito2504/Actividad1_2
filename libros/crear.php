<?php
$conexion = mysqli_connect('localhost', 'root', '', 'libros');

$errores = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isbn = $_POST['isbn'];
    $nombre = $_POST['nombre'];
    $autor = $_POST['autor'];
    $precio = $_POST['precio'];
    $editorial = $_POST['editorial'];
    $imagen = $_POST['imagen'];

    if ($isbn === '') {
        $errores[] = 'Debes especificar un ISBN';
    }
    if ($nombre === '') {
        $errores[] = 'Debes especificar un Nombre';
    }
    if ($autor === '') {
        $errores[] = 'Debes especificar un Autor';
    }
    if ($precio === '') {
        $errores[] = 'Debes especificar un Precio';
    }
    if ($editorial === '') {
        $errores[] = 'Debes especificar una editorial';
    }
    if ($imagen === '') {
        $errores[] = 'Debes especificar una imagen';
    }

    $peticionInsertar = "INSERT INTO libros(isbn,nombre,autor,precio,editorial)
                         VALUES ('$isbn','$nombre','$autor','$precio','$editorial')";

    if (empty($errores)) {

        if (mysqli_query($conexion, $peticionInsertar)) {
            echo 'Datos insertados correctamente';
        } else {
            echo 'Error al insertar los datos';
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
    <title>Crear un libro</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f0f0f0;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        input[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error {
            background-color: black;
            color: red;
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 3px;
        }
    </style>
</head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear un libro</title>
</head>

<body>

    <div>
        <a href="../backend/mostrar_libros_bd.php">Consultar libro </a><br>
    <div>
        <a href="../index.php">Regresar</a>
    </div>


    <div class="error-container">
        <?php foreach ($errores as $error): ?>
            <div class="error"><?php echo $error ?></div>
        <?php endforeach ?>
    </div>

    <form action="crear.php" method="POST">
        <label for="">ISBN</label>
        <input type="text" name="isbn">
        <label for="">Nombre</label>
        <input type="text" name="nombre">
        <label for="">Autor</label>
        <input type="text" name="autor">
        <label for="">Precio</label>
        <input type="number" name="precio">
        <label for="">Editorial</label>
        <input type="text" name="editorial">
        <label for="">Imagen</label>
        <input type="text" name="imagen">

        <input type="submit" value="Enviar">
    </form>

</body>

</html>