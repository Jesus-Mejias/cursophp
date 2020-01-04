<?php

# (|:

# ]: Llama al metodo para invocar la plantilla
require_once 'controladores/plantilla.controlador.php';

# ]: Crea un objeto del controlador de plantilla
$plantilla = new ControladorPlantilla();
# ]: Invoca al metodo para mostrar la plantilla
$plantilla -> ctrTraerPlantilla(); 

# ]>~