<?php

$impares = array();
$bandera = 0;

for($i=0; count($impares)<10 ; $i++)
{
    if($i % 2 !=0)
    {
        array_push($impares,$i);
    }
}

echo "For: <br>";

for($i = 0; $i < count($impares); $i++)
{
    echo $impares[$i] . "<br>";
}

echo "<br>Foreach: <br>";

foreach($impares as $impar)
{
    echo ("Numeros impar: $impar <br>");
}

echo "<br>While: <br>";

do
{
    echo ($impares[$xd] . "<br>");
    $bandera ++;

}while($bandera < 10)

?>