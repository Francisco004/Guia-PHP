<?php

require ".\Clases\Ejercicio24_Clase_Fabrica.php";

$Operario1 = new Operario(108100,"Francisco","Rocha",100000);
$Operario2 = new Operario(87451,"Matias","Venglar",45054);
$Operario3 = new Operario(154982,"Leonardo","Carabajal",658451);
$Operario4 = new Operario(124568,"Brian","Berrios",124785);
$Operario5 = new Operario(109487,"Alan","Nieto",45125);
$Fabrica1 = new Fabrica("S.R.L.");
$Fabrica2 = new Fabrica("Comandita");


echo "Agrego un operario a Fabrica1";
$Fabrica1->Add($Operario1);
echo "<br>Agrego un operario a Fabrica1";
$Fabrica1->Add($Operario2);
echo "<br>Agrego un operario a Fabrica1";
$Fabrica1->Add($Operario3);
echo "<br>Agrego un operario a Fabrica2";
$Fabrica2->Add($Operario3);
echo "<br>Agrego un operario a Fabrica2";
$Fabrica2->Add($Operario4);
echo "<br>Agrego un operario a Fabrica2";
$Fabrica2->Add($Operario5);
echo "<br>Agrego un operario a Fabrica2";
$Fabrica2->Add($Operario2);
echo "<br>Agrego un operario repetido a Fabrica2";
$Fabrica2->Add($Operario4);

echo "<br><br>----------------------------------------------------------";
echo "<br><br>Muestro informacion vuelo1: <br>";
echo $Fabrica1->Mostrar();

echo "<br><br>----------------------------------------------------------";
echo "<br><br>Muestro informacion vuelo2 <br>";
echo $Fabrica2->Mostrar();

echo "<br><br>----------------------------------------------------------";
echo "<br>Muestro lo recaudado de Fabrica1: <br>";
echo Fabrica::MostrarCosto($Fabrica1) . "<br>";
echo "<br>Muestro lo recaudado de Fabrica2: <br>";
echo Fabrica::MostrarCosto($Fabrica2) . "<br>";

echo "<br><br>----------------------------------------------------------";
echo "<br>Se borra un Operario de Fabrica1 <br>";
$Fabrica1->Remove($Operario1);

echo "<br><br>----------------------------------------------------------";
echo "<br>Se vuelve a borrar el mismo Operario de Fabrica1 <br>";
$Fabrica1->Remove($Operario1);

echo "<br><br>----------------------------------------------------------";
echo "<br>Muestro informacion vuelo1 <br>";
echo $Fabrica1->Mostrar();

echo "<br><br>----------------------------------------------------------";
echo "<br>Muestro informacion vuelo2 <br>";
echo $Fabrica2->Mostrar();

?>