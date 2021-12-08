<?php

class Pasajero
{
    private $_dni;
    private $_esPlus;
    private $_nombre;
    private $_apellido; 

    public function __construct($Apellido, $Nombre, $Dni, $EsPlus)
    {
        $this->_dni = $Dni;
        $this->_esPlus = $EsPlus;
        $this->_apellido = $Apellido;
        $this->_nombre = $Nombre;
        $this->_prec_nombreioPorHora = $Nombre;
    }

    public function GetEsPlus()
    {
        return $this->_esPlus;
    }

    public function GetInfoPasajero(Pasajero $Pasajero)
    {
        $stringbuilder = "<br>";
        $stringbuilder .= "Nombre: " . $Pasajero->_nombre;
        $stringbuilder .= "<br>Apellido: " . $Pasajero->_apellido;
        $stringbuilder .= "<br>DNI: " . $Pasajero->_dni;
        $stringbuilder .= "<br>Es plus: ";
        if($Pasajero->_esPlus)
        {
            $stringbuilder .= "si";
        }
        else
        {
            $stringbuilder .= "no";
        }

        return $stringbuilder;
    }

    public function Equals(Pasajero $P1)
    {
        $retorno = false;

        if($P1->_dni == $this->_dni)
        {
            $retorno = true;
        }

        return $retorno;
    }

    public function MostrarPasajero(Pasajero $Pasajero)
    {
        echo ($Pasajero->GetInfoPasajero($Pasajero));
    }
}

?>
