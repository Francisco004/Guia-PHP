<?php

class Auto
{
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;

    public function __construct($marca, $color, $precio = 0, $fecha = "new DateTime('NOW')")
    {
        $this->_marca = $marca;
        $this->_color = $color;
        $this->_fecha = $fecha;
        $this->_precio = $precio;
    }

    public function AgregarImpuestos($suma)
    {
        $this->_precio = $this->_precio + $suma;
    }

    public static function MostrarAuto($auto)
    {
        $stringbuilder = "";
        $stringbuilder .= "Color: " . $auto->_color;
        $stringbuilder .= "<br>Precio: " . $auto->_precio;
        $stringbuilder .= "<br>Marca: " . $auto->_marca;
        $stringbuilder .= "<br>Fecha: " . $auto->_fecha;
        $stringbuilder .= "<br><br>";


        return $stringbuilder;
    }

    public function Equals($auto1, $auto2)
    {
        $retorno = false;

        if($auto1->_marca == $auto2->_marca)
        {
            $retorno = true;
        }

        return $retorno;
    }

    public static function Add($auto1, $auto2)
    {
        $retorno = 0;

        if($auto1->Equals($auto1, $auto2) && $auto1->_color == $auto2->_color)
        {
            $retorno = $auto1->_precio + $auto1->_precio;
        }
        else
        {
            echo "Los autos no tienen la misma marca y patente<br>";
        }

        return $retorno;
    }
}

?>