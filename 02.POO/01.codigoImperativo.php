<?php

# (|:
/*=========================================
=            Codigo Imperativo            =
=========================================*/

$automovil1 = (object)[
	"marca" 	=> "Toyota",
	"modelo"	=> "Corolla"
];

$automovil2 = (object)[
	"marca" 	=> "Hyundai",
	"modelo"	=> "Accent Vision"
];

/**
 * [mostrar] 
 * Muestra las propiedades de cada veiculo pasado como parametro
 *
 * @param $automovil object | Objeto con caracteristicas de cada vehiculo
 * @author Jeix T
 **/
function mostrar($automovil)
{
	echo "<p>Hola! soun un $automovil->marca, modelo $automovil->modelo</p>";
}

# ]: Llama la funcion para cada vehiculo
mostrar($automovil1);
mostrar($automovil2);

/*=====  End of Codigo Imperativo  ======*/
# ]>~