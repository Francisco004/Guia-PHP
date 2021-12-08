<?php

include "Ejercicio19_Clase_FiguraGeometrica.php";

class Rectangulo extends FiguraGeometrica
{
    private $_ladoDos;
    private $_ladoUno;

    public function __construct($l1, $l2, $color)
    {
        parent::__construct();

        $this->_ladoUno = $l1;
        $this->_ladoDos = $l2;

        $this->SetColor($color);

        $this->CalcularDatos();
    }

    protected function CalcularDatos()
    {
        $this->_perimetro = $this->_ladoUno;
        $this->_superficie = $this->_ladoDos;
    }

    public function Dibujar()
    {
        $pruebaReXD = "";

        for($i = 0; $i < $this->_perimetro; $i++)
        {
            for($x = 0; $x < $this->_superficie; $x++)
            {
                $pruebaReXD .= "*";
            }

            $pruebaReXD .= "<br>";
        }

        return '<span style="color: ' . $this->GetColor() . '">' . $pruebaReXD . '</span>';
    }

    public function ToString()
    {
        return parent::ToString() . "<br>" . $this -> Dibujar();
    }
}

$prueba = new Rectangulo(10,50,"blue");

print($prueba ->ToString());

?>