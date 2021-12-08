<?php

$zona_horaria = date('m-d-Y h:i:s a',time());
$mesActual = date('n');
$texto = "La estacion del Año es: ";

echo "<h2>Fecha Actual: " . $zona_horaria . "</h2>";

$primavera  = "Primavera";
$verano     = "Verano";
$otono      = "Otoño";
$invierno = "Invierno";

if($mesActual >= 1 && $mesActual <= 2 || $mesActual == 12)
{
    $texto = $texto . $invierno;
}
if($mesActual >= 3 && $mesActual <= 5)
{
    $texto = $texto . $primavera;
}
if($mesActual >= 6 && $mesActual <= 8)
{
    $texto = $texto . $verano;
}
else
{
    $texto = $texto . $otono;
}

echo "<li>" . $texto;

?>