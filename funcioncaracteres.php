<?php
function frecuenciaCaracteres($texto) {
    $frecuencia = [];

    // lectura de caracteres
    for ($i = 0; $i < strlen($texto); $i++) {
        $caracter = $texto[$i];
        if (isset($frecuencia[$caracter])) {
            $frecuencia[$caracter]++; // Incrementa el contador de los caracteres
        } else {
            $frecuencia[$caracter] = 1; 
        }
    }

    return $frecuencia;
}

// texto a leer
$texto = "Hola, mi nombre es carlos soy un joven de 23 ";
$resultado = frecuenciaCaracteres($texto);

// imprime el array
print_r($resultado);
?>
