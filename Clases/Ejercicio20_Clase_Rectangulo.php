<?php

include "Ejercicio20_Clase_Punto.php";

class Rectangulo extends Punto
{
    private $_vertice1;
    private $_vertice2;
    private $_vertice3; 
    private $_vertice4;

    public $area = 0;
    public $ladoDos = 0;
    public $ladoUno = 0;
    public $perimetro = 0;


    public function __construct($punto_v1, $punto_v3)
    {
        parent::__construct($punto_v1,$punto_v3);
    }

   public function Dibujar()
   {
        $rta = "";
        $x_dibujo = $this->get_X();
        $y_dibujo = $this->get_Y();
        $dibujo = " ";

        for($i = 1 ; $i<=$y_dibujo ; $i++)
        {                 
            for($j = 1 ; $j<=$x_dibujo; $j++)
            {
                if($i == 0 || $i <= $y_dibujo)
                {
                    $dibujo = $dibujo . "*";
                }
               
                if($j == $x_dibujo){
                    echo "<br>";
                }                
            }
            
            echo "<br>";
            
            echo($dibujo);
            $dibujo = " ";
        }

       return $rta;
   }
}
?>