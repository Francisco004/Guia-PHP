<?php

function PerteneceKekw($palabra, $max)
{   
    $retorno = 0;
    $cantidadCaracteres = strlen($palabra);
    
    if($cantidadCaracteres < $max && $palabra == "Recuperatorio" || $palabra == "Parcial" || $palabra == "Programacion")
    {   
        $retorno = 1;
    }

    return $retorno;
}

if(PerteneceKekw("Parcial",10) == 1)
{
    print("La palabra pertecene a el listado");
}
else
{
    print("La palabra no pertecene a ningun elemento del listado");
}

?>