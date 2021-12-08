<?php

include "Ejercicio21_Calse_Auto.php";

class Garage
{
    private $_razonSocial;
    private $_precioPorHora;
    private $_autos = array();

    public function __construct($razonSocial, $precioPorHora = 0)
    {
        $this->_razonSocial = $razonSocial;
        $this->_precioPorHora = $precioPorHora;
        $this->_autos;
    }

    public function MostrarGarage()
    {
        $stringbuilder = "";
        $stringbuilder .= "Razon social: " . $this->_razonSocial;
        $stringbuilder .= "<br>Precio por hora: " . $this->_precioPorHora;
        $stringbuilder .= "<br>";
        for($i = 0; $i < count($this->_autos); $i++)
        {
            if($this->_autos[$i] != null)
            {
                $stringbuilder .= $this->_autos[$i]->MostrarAuto($this->_autos[$i]);
            }
        }
        $stringbuilder .= "<br><br>";


        echo $stringbuilder;
    }

    public function Equals($Garaje, $Auto)
    {
        $retorno = false;

        for($i = 0; $i < count($Garaje->_autos); $i++)
        {
            if($Auto->Equals($Garaje->_autos[$i],$Auto))
            {
                $retorno = true;
            }
        }

        return $retorno;
    }

    public function Add($Auto)
    {
        $retorno = false;

        if(!$this->Equals($this, $Auto))
        {
            array_push($this->_autos, $Auto);
            $retorno = true;
        }
        else
        {
            echo("Ya se encontraba el auto en el garaje por lo que no se lo ingreso.");
        }

        return $retorno;
    }

    public function Remove($Auto)
    {
        $retorno = false;

        for($i = 0; $i<count($this->_autos); $i++)
        {
            if($Auto->Equals($this->_autos[$i],$Auto))
            {
                unset($this->_autos[$i]);
                sort($this->_autos, SORT_NATURAL | SORT_FLAG_CASE);
                $retorno = true;
            }
        }

        return $retorno;
    }
    
}

?>