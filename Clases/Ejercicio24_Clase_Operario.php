<?php

class Operario
{
    private $_apellido;
    private $_legajo;
    private $_nombre;
    private $_salario;

    public function __construct($Legajo, $Apellido,$Nombre, $Salario)
    {
        $this->_legajo = $Legajo;
        $this->_apellido = $Apellido;
        $this->_nombre = $Nombre;
        $this->_salario = $Salario;
    }

    public function GetSalario()
    {
        return $this -> _salario;
    }

    public function SetAumentarSalario($aumento)
    {
        $this -> _salario += (($this -> _salario * $aumento) / 100);
    }

    public function GetNombreApellido()
    {
        return  $this -> _nombre . " - " .  $this -> _apellido;
    }

    public function Mostrar()
    {
        $stringBuilder = "";

        $stringBuilder .= "Nombre y apellido : " . $this->GetNombreApellido();
        $stringBuilder .= "<br>Sueldo: " . $this->_salario;
        $stringBuilder .= "<br><br>";

        return $stringBuilder;
    }

    public static function MostrarC(Operario $op)
    {
        return $op->Mostrar();
    }

    public function Equals(Operario $op2)
    {
        $retorno = false;

        if($this->_legajo == $op2->_legajo && $this->_nombre == $op2->_nombre && $this->_apellido == $op2->_apellido)
        {
            $retorno = true;
        }

        return $retorno;
    }
}

?>