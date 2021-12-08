<?php

include ".\Clases\Ejercicio22_Clase_Garaje.php";

$Garaje = new Garage("S.R.L.",250);

$Auto2 = new Auto("Ford","Azul");

$Auto3 = new Auto("Fiat","Gris",3420452);
$Auto4 = new Auto("Fiat","Gris",1450234);

$Auto5 = new Auto("Lamborgini","Violeta",14025487, "4/11/2042");

$Garaje->MostrarGarage();

$Garaje->add($Auto2);
$Garaje->add($Auto3);

$Garaje->MostrarGarage();

$Garaje->Remove($Auto3);

$Garaje->MostrarGarage();
?>