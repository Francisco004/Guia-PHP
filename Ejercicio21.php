<?php

include ".\Clases\Ejercicio21_Calse_Auto.php";


$Auto1 = new Auto("Ford","Negro");
$Auto2 = new Auto("Ford","Azul");

$Auto3 = new Auto("Fiat","Gris",3420452);
$Auto4 = new Auto("Fiat","Gris",1450234);

$Auto5 = new Auto("Lamborgini","Violeta",14025487, "4/11/2042");

echo(Auto::MostrarAuto($Auto1));
echo(Auto::MostrarAuto($Auto2));
echo(Auto::MostrarAuto($Auto3));
echo(Auto::MostrarAuto($Auto4));
echo(Auto::MostrarAuto($Auto5));

echo("Le sumo 1500$ de cash<br><br>");

$Auto3->AgregarImpuestos(1500);
echo(Auto::MostrarAuto($Auto3));

$Auto4->AgregarImpuestos(1500);
echo(Auto::MostrarAuto($Auto4));

$Auto5->AgregarImpuestos(1500);
echo(Auto::MostrarAuto($Auto5));

$importeAuto1YAuto2 = Auto::Add($Auto1,$Auto2);
echo("La suma de los precios de los autos 1 y 2 es de: " . $importeAuto1YAuto2 . "<br><br>");

if($Auto1->Equals($Auto1,$Auto2))
{
    echo("<br>El auto 1 y 2 poseen la misma marca");
}
else
{
    echo("<br>El auto 1 y 2 no poseen la misma marca");
}

if($Auto1->Equals($Auto1,$Auto5))
{
    echo("<br>El auto 1 y 5 poseen la misma marca");
}
else
{
    echo("<br>El auto 1 y 5 no poseen la misma marca");
}


?>