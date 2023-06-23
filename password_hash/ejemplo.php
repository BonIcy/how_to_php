<?php

$pass = 'campus2020';

echo $pass;

$hash = password_hash($pass, PASSWORD_DEFAULT);

echo "<br>";
echo $hash;

$login = 'campus2020';

if (password_verify($login, $hash)) {
    echo "<br>";
    echo "Correcto";
} else {
    echo "<br>";
    echo "Incorrecto";
}

?>