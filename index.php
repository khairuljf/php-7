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

$keys = array_keys($foods);

foreach ($keys as $key){
    echo '<br>'.$foods[$key];
}


$student = [
  'fname' => 'khairul',
  'lName' => 'Islam',
  'age'    => 30
];

echo '<br>';

var_dump($student);
echo '<br>';
var_dump(serialize($student));
echo '<br>';
$jsonEndocde = json_encode($student);

var_dump($jsonEndocde);
$jsonDecode = json_decode($jsonEndocde);
echo '<br>';
var_dump($jsonDecode);
$jsonDecodeWithArray = json_decode($jsonEndocde, true);
echo '<br>';
var_dump($jsonDecodeWithArray);

















