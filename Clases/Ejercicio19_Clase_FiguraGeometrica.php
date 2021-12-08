<?php

abstract class FiguraGeometrica
{
    protected $_color = "xd";
    protected $_perimetro;
    protected $_superficie;

    public function __construct()
    {

    }

    public function GetColor()
    {
        return $this->_color;
    }

    public function SetColor($string)
    {
        $this->_color = $string;
    }

    public function ToString()
    {
        print("Color: " . $this->_color. "<br>Perimetro: " . $this->_perimetro . "<br>Superficie: " . $this->_superficie . "<br>");
    }

    public abstract function Dibujar();
    protected abstract function CalcularDatos();
}

?>