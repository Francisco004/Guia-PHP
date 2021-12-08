<?php

include "Ejercicio23_Clase_Pasajero.php";

class Vuelo
{
    private $_fecha;
    private $_empresa;
    private $_precio;
    private $_listaDePasajeros;
    private $_cantMaxima;

    public function __construct($Empresa, $Precio, $CantMaxima = 5)
    {
        $this->_fecha = new DateTime('NOW');
        $this->_precio = $Precio;
        $this->_empresa = $Empresa;
        $this->_cantMaxima = $CantMaxima;
        $this->_listaDePasajeros = array();
    }

    public function GetCantidadMaxima()
    {
        return $this->_cantMaxima;
    }

    public function GetInfoVuelo()
    {
        $stringbuilder = "";
        $stringbuilder .= "Empresa: " . $this->_empresa;
        $stringbuilder .= "<br>Fecha: " . $this->_fecha->format('r');
        $stringbuilder .= "<br>Precio: " . $this->_precio;
        $stringbuilder .= "<br>Cantidad maxima de pasajeros: " . $this->_cantMaxima;

        for($i = 0; $i < count($this->_listaDePasajeros); $i++)
        {
            if($this->_listaDePasajeros[$i] != null)
            {
                $stringbuilder .= "<br>" . $this->_listaDePasajeros[$i]->GetInfoPasajero($this->_listaDePasajeros[$i]);
            }
        }

        return $stringbuilder;
    }
    
    public function AgregarPasajero($NuevoPasajero)
    {
        $bandera = 0;
        $retorno = false;

        if(count($this->_listaDePasajeros) == 0)
        {
            array_push($this->_listaDePasajeros, $NuevoPasajero);
            $retorno =  true;
        }
        else
        {
            foreach ($this->_listaDePasajeros as $Pasajero)
            {
                if($Pasajero->Equals($NuevoPasajero))
                {
                    $bandera = 1;
                    break;
                }
            }
            if((count($this->_listaDePasajeros) < $this->GetCantidadMaxima()) && $bandera == 0)
            {
                array_push($this->_listaDePasajeros, $NuevoPasajero);
                $retorno =  true;
            }
  
        }
        return $retorno;
    }

    public function MostrarVuelo()
    {
        echo ($this->GetInfoVuelo());
    }

    public static function Add(Vuelo $Vuelo1, Vuelo $Vuelo2)
    {
        $suma = 0;

        for($i = 0; $i < count($Vuelo1->_listaDePasajeros); $i++)
        {
            if($Vuelo1->_listaDePasajeros[$i]->GetEsPlus() == true)
            {
                $suma = $suma + ($Vuelo1->_precio - (($Vuelo1->_precio*20)/100));
            }
            else
            {
                $suma = $suma + $Vuelo1->_precio;
            }
        }

        for($i = 0; $i < count($Vuelo2->_listaDePasajeros); $i++)
        {
            if($Vuelo2->_listaDePasajeros[$i]->GetEsPlus() == true)
            {
                $suma = $suma + ($Vuelo2->_precio - (($Vuelo2->_precio*20)/100));
            }
            else
            {
                $suma = $suma + $Vuelo2->_precio;
            }
        }

        return $suma;
    }

    public static function Remove(Vuelo $Vuelo, Pasajero $pasajero)
    {
        for($i = 0; $i < count($Vuelo->_listaDePasajeros); $i++)
        {
            if($Vuelo->_listaDePasajeros[$i] != null && $pasajero -> Equals($Vuelo->_listaDePasajeros[$i]))
            {
                array_splice($Vuelo->_listaDePasajeros,$i,1);
                break;
            }
            else if($i == count($Vuelo->_listaDePasajeros))
            {
                echo "No se encontro el pasajero en el vuelo...<br>";
            }
        }

        return $Vuelo;
    }
}


?>