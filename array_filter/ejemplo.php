<?php
$students = array(
    array("nombre" => "Yisus", "edad" => 17),
    array("nombre" => "Juan", "edad" => 19),
    array("nombre" => "Pepe", "edad" => 12),
    array("nombre" => "Kata", "edad" => 18),
    array("nombre" => "Valen", "edad" => 21),
);
//retorna otras arrays
$students_lower = array_filter($students, function ($student){
    return $student['edad'] <= 18;
});
$students_highter = array_filter($students, function ($student){
    return $student['edad'] > 18;
});

print_r($students_lower);
print_r($students_highter);
?>