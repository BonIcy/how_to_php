<?php
include "ejemplo2.php"; //para llamar cosas secundarias o no tan importantes
 echo "<br><br>";
 //include cuando detecta un error nos pasa un warning y require vota fatal error
 //require es mas estricto (requerido), l requiere nos detiene todo el codigo si hay error
 require "ejemplo2.php"; //para llamar algo fundamental 


 //require_once e include_once 
 include_once"ejemplo.php"; //con require e include podemos llamar ejemplo2.php varias veces
 require_once "ejemplo2.php"; //aqui solo tiene en cuenta LA PRIMER vez que se llama
?>