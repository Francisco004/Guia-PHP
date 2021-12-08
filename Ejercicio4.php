<?php

$entero = 1;

for($i = 1; $i < 1000; $i++)
{
    if($entero + $i <= 1000)
    {
        echo "La suma de " . $entero . " + " . $i;
    
        $entero = $entero + $i;

        echo " es: " . $entero . "<br>";
    }
    else
    {
        echo "<br> La cantidad de numeros sumados fue de: " . $i;
        break;
    }
}

?>