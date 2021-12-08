<?php

function EsPar($numero)
{   
    $retorno = false;

    if ($numero %2 == 0)
    {
        $retorno = true;
    }
  
    return $retorno;
}

function EsIpmar($numero)
{   
    return !EsPar($numero);
}

$numerito = 56;

if(EsPar($numerito))
{
    print("El numero " . $numerito . " es par");
}
else if(EsIpmar($numerito))
{
    print("El numero " . $numerito . " es impar");
}

?>