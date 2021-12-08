<?php

$lapiceras = array(	
	
	'Lapicera 1' => array(
		'Color' => "Negro",
		'Marca'  => "FaberCastell",
		'Trazo'  => "Grueso",
        'Precio'  => "555"
	),
	
	'Lapicera 2' => array(
		'Color' => "Azul",
		'Marca'  => "Bic",
		'Trazo'  => "Fino",
        'Precio'  => "8789"
    ),

    'Lapicera 3' => array(
		'Color' => "Violeta",
		'Marca'  => "Fisher ",
		'Trazo'  => "Delgado",
        'Precio'  => "100"
	)
);
 
foreach($lapiceras as $lapiceras => $contenido)
{
	echo "<h4> $lapiceras </h4>";
 
    foreach($contenido as $indice => $valor)
	{
		echo "$indice:$valor <br>";
	}
}

?>