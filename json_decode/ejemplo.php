<?php
$datos = '[
{
    "nombre": "Goku",
    "edad:" 32,
    "telefono": 3166666
},
{
    "nombre": "Saitama",
    "edad:" 2,
    "telefono": 3123456
}
]';
var_dump($datos);
$nuevosDatos = json_decode($datos, true);
var_dump($nuevosDatos);
foreach ($nuevosDatos[0] as $key => $value){ //en este casi se muestran los de Goku por la posicion 0
    echo $key;
}
//asi se veria:
$nuevosDatos = array(
    0 => array{
        "nombre": "Goku",
        "edad": 32,
        "telefono": 3166666

    },
    1 => array{
        "nombre": "Saitama",
        "edad": 2,
        "telefono": 3123456

    },
)


?>