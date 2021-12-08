<?php
require ".\Clases\Ejercicio23_Clase_Vuelo.php";

$pasajero1 = new Pasajero("Pepe","XD",7548623,true);
$pasajero2 = new Pasajero("Francisco","Rocha",3287491,false);
$pasajero3 = new Pasajero("Brian","Berrios",4872146,false);
$pasajero4 = new Pasajero("Roberto","Robertito",4684687,false);
$pasajero5 = new Pasajero("","Gangplank",468,true);
$vuelo1 = new Vuelo("VolarLindo",1000,2);
$vuelo2 = new Vuelo("FlyXD",15,4);


echo "Agrego pasajero al vuelo1: ";
$vuelo1->AgregarPasajero($pasajero1);
echo "<br>Agrego pasajero al vuelo1: ";
$vuelo1->AgregarPasajero($pasajero2);
echo "<br>Agrego pasajero al vuelo1";
$vuelo1->AgregarPasajero($pasajero3);
echo "<br>Agrego pasajero al vuelo2";
$vuelo2->AgregarPasajero($pasajero3);
echo "<br>Agrego pasajero al vuelo2";
$vuelo2->AgregarPasajero($pasajero4);
echo "<br>Agrego pasajero al vuelo2";
$vuelo2->AgregarPasajero($pasajero5);
echo "<br>Agrego pasajero al vuelo2";
$vuelo2->AgregarPasajero($pasajero2);
echo "<br>Agrego pasajero repetido al vuelo2";
$vuelo2->AgregarPasajero($pasajero4);

echo "<br><br>----------------------------------------------------------";
echo "<br><br>Muestro informacion vuelo1: <br>";
echo $vuelo1->MostrarVuelo();

echo "<br><br>----------------------------------------------------------";
echo "<br><br>Muestro informacion vuelo2 <br>";
echo $vuelo2->MostrarVuelo();

echo "<br><br>----------------------------------------------------------";
echo "<br>Muestro lo recaudado: <br>";
echo Vuelo::Add($vuelo1,$vuelo2) . "<br>";

echo "<br><br>----------------------------------------------------------";
echo "<br>Se borra un pasajero vuelo1 <br>";
Vuelo::Remove($vuelo1,$pasajero1);

echo "<br><br>----------------------------------------------------------";
echo "<br>Se vuelve a borrar el mismo pasajero de vuelo1 <br>";
Vuelo::Remove($vuelo1,$pasajero1);

echo "<br><br>----------------------------------------------------------";
echo "<br>Muestro informacion vuelo1 <br>";
echo $vuelo1->MostrarVuelo();

echo "<br><br>----------------------------------------------------------";
echo "<br>Muestro informacion vuelo2 <br>";
echo $vuelo2->MostrarVuelo();

?>