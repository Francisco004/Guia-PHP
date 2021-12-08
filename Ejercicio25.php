<?php

$Ejercicio25 = fopen("misArchivos/palabras.txt", "r");
$Palabras1 = 0;
$Palabras2 = 0;
$Palabras3 = 0;
$Palabras4 = 0;
$PalabrasMas = 0;

if ($Ejercicio25)
 {
    while (!feof($Ejercicio25)) 
    {
        $buffer = fgets($Ejercicio25);
        $ArrayPalabras = explode(" ",$buffer);
    }
}
fclose($Ejercicio25);

for($i = 0; $i < count($ArrayPalabras); $i++)
{
    if(strlen($ArrayPalabras[$i]) == 1)
    {
        $Palabras1++;
    }
    else if(strlen($ArrayPalabras[$i]) == 2)
    {
        $Palabras2++;
    }
    else if(strlen($ArrayPalabras[$i]) == 3)
    {
        $Palabras3++;
    }
    else if(strlen($ArrayPalabras[$i]) == 4)
    {
        $Palabras4++;
    }
    else if(strlen($ArrayPalabras[$i]) >= 5)
    {
        $PalabrasMas++;
    }
}

echo("Cantidad de palabras de un caracter: " . $Palabras1 . "<br>");
echo("Cantidad de palabras de dos caracteres: " . $Palabras2 . "<br>");
echo("Cantidad de palabras de tres caracteres: " . $Palabras3 . "<br>");
echo("Cantidad de palabras de cuatro caracteres: " . $Palabras4 . "<br>");
echo("Cantidad de palabras de mas de 4 caracteres: " . $PalabrasMas . "<br>");

var_dump($ArrayPalabras);
?>