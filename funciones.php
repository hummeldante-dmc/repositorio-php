<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones</title>
</head>
<body>
<?php
    echo "<h2> Ejercicio 1 </h2>";
    function mostrarTitulo(){
        echo "Listado de Alumnos ". "<br>";
    }

   mostrarTitulo();
   mostrarTitulo();

    function saludar($nombre){
        echo "Buenas Tardes, $nombre "."<br>";
    }

    saludar("Dante");
    saludar("Marcos");
    saludar("Lautaro");

    //primero declaro una funcion que guarde las variables de $base y $altura, luego devuelve la multiplicacion
    // despues guardo los resultados en otra variable 
    //Luego imprimo el area y por ultimo utilizo una condicional para saber si el area es mayor a 50

    echo "<h2> Ejercicio 2 </h2>";
    function calcularArea($base,$altura){
        return $base * $altura;
    }

    $areaCalculada = calcularArea(9,7);

    echo "el area es: " . $areaCalculada. "<br>";
    
    if($areaCalculada > 50){
        echo "el area es mayor a 50";
    } else{
        echo "el area no es mayor a 50";
    }


    
    

?>    
</body>
</html>