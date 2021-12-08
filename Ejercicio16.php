<?php

function Invertir($cadena)
{
    $nuevaCadena = "";
    $cantidadCaracteres = strlen($cadena);
    
    for($i = 0; $i < $cantidadCaracteres; $i++)
    {
        $nuevaCadena .= $cadena[$cantidadCaracteres - ($i+1)];
    }

    return $nuevaCadena;
}

print_r(Invertir("Kevin chikito y pelado"));

?>