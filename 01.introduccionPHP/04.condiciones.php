<?php

# (|:
/*============================================
=            Condiciones y Ciclos            =
============================================*/

/*----------  Condiciones  ----------*/

$a = 5;
$b = 10;

# ]: Sentencia if
if ($a > $b) {
	
	echo "a es mayor que b";
}
else if($a == $b){
	echo "a es igual que b";
}
else {
	echo "a es menor que b";
}

echo "<br><br>";

# ]: Sentencia switch
$dia = "sabado";

switch ($dia) {
	case 'sabado':
		echo "Voy a estudiar PHP";
		break;
	
	case 'viernes':
		echo "Voy a la fiesta";
		break;

	case 'domingo':
		echo "Voy a descansar";
		break;

	default:
		echo "Voy a la universidad";
		break;
}

/*----------  Ciclos  ----------*/
echo "<br><br>";

$n = 1;

# ]: Ciclo while
while ($n < 5) {
	
	echo $n;
	$n++;
}

echo "<br><br>";

# ]: Ciclo do while
$p = 1;

do {

	echo "$p";
	$p++;

} while ($p <= 10);

echo "<br><br>";

# ]: Ciclo for
for ($i = 0; $i <= 5 ; $i++) { 
	echo "$i";
}

/*=====  End of Condiciones y Ciclos  ======*/
# ]>~