<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombres</title>
</head>
<body>
    <?php
    echo"<h2>Ejercio 3</h2>";
    function limpiarNombre($nombre){
        return trim($nombre);
    }

    function convertirMayusculas($texto){
        return mb_strtoupper($texto, "UTF-8");
    }

    function contarCaracteres($texto){
        return mb_strlen($texto, "UTF-8");
    }

    $procesado = false;
    $original = "";
    $limpio = "";
    $mayusculas = "";
    $longitud = 0;

     if (isset($_POST["nombre"])){
        $procesado = true;
        $original = $_POST["nombre"];
        $limpio = limpiarNombre($original);
        $mayusculas = convertirMayusculas($limpio);
        $longitud = contarCaracteres($limpio);

     }

    

    ?>
</body>
</html>