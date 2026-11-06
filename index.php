<?php

// echo "Hola mundo;"

/* $nombre = 6;
$nombre = "3";
$nombre = ".6";
$nombre = "Leany";

$nombre = 6;
$edad = 64;
$ciudad = "Choluteca";
$frutas = ["manzana", "uvas"; "naranja"];

echo $nombre;
echo $edad;
echo $ciudad;

echo "<h1> Mis datos personales</h1>";
echo "Nombre: " . $nombre . "<br>";
echo "Edad: " . $edad . "<br>";
echo "Ciudad: " . $ciudad;

echo $frutas[1];

$numero1 = 10;
$numero2 = 2;

echo $multiplicacion = $numero1 * $numero2;
echo $multiplicacion */

//if ($edad>=18) {
//    echo "Eres mayor de edad";
//} else {
//    echo "Eres menor de edad";
//}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    echo "Hola " . htmlspecialchars($nombre) . " " . htmlspecialchars($apellido);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi primer formulario</title>
</head>
<body>
    <h1>Formulario de registro</h1>
    <form method="POST">
        <label for="">Escribe tu nombre:</label>
        <input type="text" name="nombre"><br><br>
        
        <label for="">Escribe tu apellido:</label>
        <input type="text" name="apellido"><br><br>
        
        <button type="submit">Enviar</button>
    </form>
</body>
</html>