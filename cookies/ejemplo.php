<?php
setcookie("CookieExample", "Hello World");
setcookie("CookieExample2", "The One Piece is real", time() + 2500); //ESTA COOKIE EXPIRA  EN EL TIE,PO INDICADO
setcookie("CookieExample3", "Cookietiempo 🤑", strtotime('2029-07-11 03:33:33'));//SE LE PONE FECHA Y HORA EXACTA DE EXPIRACION TIEMPO EXACT

echo "Primer cookie: ".$_COOKIE["CookieExample"] . "<br>La segunda cookie es: ". $_COOKIE["CookieExample2"]. "<br>La tercer cookie es: " . $_COOKIE["CookieExample3"];
?>