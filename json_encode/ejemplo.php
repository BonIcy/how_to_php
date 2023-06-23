<?php

$parque = array(
    'fundador' => 'Yisuss',
    'visitantesXsemana' => 209383849394000,
    'empleados' => 9000,
    'precioEntrada' => 1000000000000,
    'rankingPais' => 5,
    'ubicacion' => 'Giron'
);

var_dump($parque);

echo "<br>";

$datosParqueJS = json_encode($parque);

var_dump($datosParqueJS);

?>