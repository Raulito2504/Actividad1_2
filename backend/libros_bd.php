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

    echo "<pre>";
    var_dump($errores);
    echo "</pre>";



    
}