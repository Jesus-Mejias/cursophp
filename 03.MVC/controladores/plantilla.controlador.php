<?php

# (|:

/**
 * Controlador Plantilla
 *
 * Contiene las acciones necesarias para interactuar con la plantilla
 * de las vistas.
 *
 * @package default
 * @author Jesus Mejia "Jeix T"
 **/
class ControladorPlantilla 
{

	/**
	 * ctrTraerPlantilla
	 *
	 * Manda llamar la plantilla para las vistas
	 *
	 * @return void
	 * @author Jesus Mejia "Jeix T"
	 **/
	public function ctrTraerPlantilla(){

		include 'vistas/plantilla.php';
	}

} # ]: END class ControladorPlantilla 

# ]>~