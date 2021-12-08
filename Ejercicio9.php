<?php

$vector = array(rand(0,10),rand(0,10),rand(0,10),rand(0,10),rand(0,10));
$resultado = 0;

for($i = 0; $i < count($vector); $i++)
{
    $resultado = $resultado + $vector[$i];
}

$resultado =  $resultado / count($vector);

if($resultado > 6)
{
    echo "El numero es mayor que 6";
}
else if($resultado < 6)
{
    echo "El numero es menor que 6";
}
else
{
    echo "El numero es igual que 6";
}

?>
