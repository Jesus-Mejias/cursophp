<?php

#(|:
/*=====================================
=            Funciones PHP            =
=====================================*/

# ]: Funciones sin parametros
function saludo(){
	echo "Hola <br>";
}

# ]: Funciones con parametros
function despedida($adios){
	echo "<br>".$adios."<br>";
}

# ]: Funciones con retorno
function retorno($retornar){
	return $retornar;
}

# |~> Ejecucion de Funciones
saludo();

despedida("Adios");

echo retorno("<br>Retornar");

/*=====  End of Funciones PHP  ======*/
#]>~