<?php
$codigo_script = '<script>alert("Has pillado un virus");</script>';

//filter_var se usa para filtrar algo especifico, en este caso el filtro especificado es el de sanitize
$example_saniizted = filter_var($codigo_script, FILTER_SANITIZE_STRING);//Sanitizar una variable de texto eliminando las etiquetas html evitando la ejecucion del script malicioso
echo $example_saniizted;
?>