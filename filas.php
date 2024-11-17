

<?php

function crearPiramideConFor ($filas) {
    $cadena = null;
    for ($i = 1; $i <= $filas; $i++) {
        for ($h = $i; $h <= $i; $h++) {
            $cadena .= "*";
        }
        echo $cadena."<br />";
    }
}

function crearPiramideConWhile ($filas) {
    $cadena = null;
    while($filas){
        $cadena .= "*";
        $filas--;
        echo $cadena."<br />";
    }
    
}

?>