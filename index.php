<?php

include_once "functions.php";







define('PI', 3.14);

printf(PI);

echo "<br>";

var_dump(isEven(3));
echo "<br>";

var_dump(returnType(5,2));


$student = [
  '12' => 'Hasan',
  '13' => 'Korim',
  '14' => 'Jalal',
];

//var_dump($student[12]);

$foods = [
    'vegetables' => 'capsicam, carrot, brinjal',
    'fruits' => 'orange, banana, apple',
];

//var_dump($foods['vegetables']);

foreach ($foods as $key=>$value){
    echo $key . '=' . $value . '<br>';
}











