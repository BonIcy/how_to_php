<?php


$dato = "Hello World";
//longitud de string
echo "la cantidad de caracteres de la variable dato es de " . strlen($dato);

//posicion en un string
$dato2 = "Usando array post jaja";
echo  "la posicion de la palabra 'array' es: " . strpos($dato2, "array");

//reemplazar texto
$dato3 ="Mi genero es masculino";
echo str_replace("masculino", "no binario", $dato3);

//pasar a minusculas 
$dato4 = "TeXTo EN MINUSculaS o MAyusCUlaS";
echo strtolower($dato4);

//mayuscula 
echo strtoupper($dato4);

//obtener cadena de posiciones (desde donde queremos buscar y hasta donde)
$dato5 = "Hola, esto ya no se va a ver,solo el 'Hola,'";
echo substr($dato5, 0 ,5); //se empieza en la posicion 0 y se termina en la 5 XD
?>

