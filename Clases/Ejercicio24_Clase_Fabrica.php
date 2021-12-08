<?php

include "Ejercicio24_Clase_Operario.php";

class Fabrica
{
    private $_cantMaxOperarios;
    private $_operarios = array();
    private $_razonSocial;

    public function __construct($RazonSocial)
    {
        $this->_razonSocial = $RazonSocial;
        $this->_cantMaxOperarios = 5;
    }
    
    private function RetornarCostos()
    {
        $pagar = 0;

        foreach($this->_operarios as $personal)
        {
            $pagar += $personal->GetSalario();
        }

        return $pagar;
    }
        
    private function MostrarOperarios()
    {
        foreach($this->_operarios as $personal)
        {
            echo ($personal->Mostrar());
        }
    }
    
    public function Mostrar()
    {
        $stringbuilder = "";
        $stringbuilder .= "Razon social: " . $this->_razonSocial;
        $stringbuilder .= "<br>Cantidad maxima de operarios: " . $this->_cantMaxOperarios;
        $stringbuilder .= "<br><br>";

        for($i = 0; $i < count($this->_operarios); $i++)
        {
            if($this->_operarios[$i] != null)
            {
                $stringbuilder .= $this->_operarios[$i]->Mostrar();
            }
        }

        return $stringbuilder;
    }

    public static function MostrarCosto(Fabrica $Fb)
    {
        echo $Fb->RetornarCostos();
    }

    public static function Equals(Fabrica $Fb, Operario $Op)
    {
        $retorno = 0;

        foreach($Fb->_operarios as $personal)
        {
            if($personal == $Op)
            {
                $retorno = 1;
                break;
            }
        }

        return $retorno;
    }

    public function Add(Operario $Op)
    {
        $retorno = false;

        if(!($this->Equals($this,$Op)) && count($this->_operarios) < $this->_cantMaxOperarios)
        {
            array_push($this->_operarios, $Op);
            $retorno =  true;
        }
       
        return $retorno;
    }

    public function Remove(Operario $Op)
    {
        $retorno = false;

        if($this->Equals($this,$Op))
        {
            array_splice($this->_operarios, array_search($Op,$this->_operarios),1);
            $retorno =  true;
        }
       
        return $retorno;
    }
}

?>