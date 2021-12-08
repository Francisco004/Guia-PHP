<?php

include "Ejercicio19_Clase_FiguraGeometrica.php";

class Rectangulo extends FiguraGeometrica
{
    private $_altura;
    private $_base;

    public function __construct($b, $h, $color)
    {
        parent::__construct();

        $this->_altura = $b;
        $this->_base = $h;

        $this->SetColor($color);

        $this->CalcularDatos();
    }

    protected function CalcularDatos()
    {
        $this->_perimetro = $this->_altura;
        $this->_superficie = $this->_base;
    }

    public function Dibujar()
    {
        $string = "";

        for($i = 0; $i < $this->_base; $i++) ///Iterar la cantidad de veces la altura
        {
            if($i >= $this->_base - $this->_altura) ///Para que arranque desde la altira seleccionada
            {
                for($i1 = $this->_base - ($i+1); $i1 > 0; $i1--) 
                {
                    $string .= "+";
                }

                for($i2 = 0; $i2 < 1 + ($i*2); $i2++)
                {
                    $string .= "*";
                }

                $string .= "<br>";
            }
        }

        return '<span style="color: ' . $this->GetColor() . '">' . $string . '</span>';
    }

    public function ToString()
    {
        return parent::ToString() . "<br>" . $this -> Dibujar();
    }
}

?>