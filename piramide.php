<?php
// Altura de la pirámide
$altura = 5;

for ($i = 1; $i <= $altura; $i++) {
    // Espacios en blanco antes de los asteriscos
    for ($j = 1; $j <= $altura - $i; $j++) {
        echo " ";
    }
    // Asteriscos
    for ($k = 1; $k <= (2 * $i - 1); $k++) {
        echo "*";
    }
    // salto de linea
    echo "<br>";
}
?>
