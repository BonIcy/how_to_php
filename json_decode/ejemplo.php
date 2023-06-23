<?php

$datosEmpleadosJSON = '
[
    {
        "nombre": "Camilo",
        "edad": 30,
        "ciudad": "Caracas"
    },
    {
        "nombre": "Leandro",
        "edad": 26,
        "ciudad": "Cali"
    },
    {
        "nombre": "Pepito",
        "edad": 79,
        "ciudad": "Bucaramanga"
    }
]
';

var_dump($datosEmpleadosJSON);

echo "<br>";

$datosNuevos = json_decode($datosEmpleadosJSON, true);

echo "<br>";

var_dump($datosNuevos);

echo "<br><br>";


foreach ($datosNuevos[0] as $key => $value) {
    echo $value;
    echo "<br>";
    
}

echo "<br><br>";

foreach ($datosNuevos as $key => $value) {
    echo $value['nombre'] . " " . $value['edad'] . " " . $value['ciudad'];
    echo "<br>";
    
}

?>