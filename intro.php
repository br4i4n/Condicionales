<?php
//$var1 = "Braian";
//$var2 =  17;
//$var3 = true;
//print($var1); 
//print($var2);
//print($var3);


// Declaración de variables


// Declaración de variables
$nombre1 = "Juan";
$edad1 = 25;
$nombre2 = "María";
$edad2 = 30;
$nombre3 = "Pedro";
$edad3 = 20;

// Determinar la persona mayor
$personaMayor = $nombre1;
if ($edad2 > $edad1 && $edad2 > $edad3) {
    $personaMayor = $nombre2;
    $edadMayor = $edad2;
} elseif ($edad3 > $edad1 && $edad3 > $edad2) {
    $personaMayor = $nombre3;
    $edadMayor = $edad3;
} else {
    $edadMayor = $edad1;
}

// Determinar la persona menor
$personaMenor = $nombre1;
if ($edad2 < $edad1 && $edad2 < $edad3) {
    $personaMenor = $nombre2;
    $edadMenor = $edad2;
} elseif ($edad3 < $edad1 && $edad3 < $edad2) {
    $personaMenor = $nombre3;
    $edadMenor = $edad3;
} else {
    $edadMenor = $edad1;
}

// Calcular el año de nacimiento de la persona mayor y menor
$anioActual = 2023;
$anioNacimientoMayor = $anioActual - $edadMayor;
$anioNacimientoMenor = $anioActual - $edadMenor;

// Mostrar resultados
echo "La persona mayor es: " . $personaMayor . "<br>";
echo "Nació en el año: " . $anioNacimientoMayor . "<br>";
echo "La persona menor es: " . $personaMenor . "<br>";
echo "Nació en el año: " . $anioNacimientoMenor;
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


</body>
</html>