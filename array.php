<?php
/**
 * Created by PhpStorm.
 * User: AbFahim
 * Date: 8/26/2020
 * Time: 7:32 AM
 */

echo "<h2>Play with array</h2>";

//array_shift();
//array_unshift()
//array_push()
//array_pop()  -- it will return removed value

//-----------------------------
//Associative Array
//-----------------------------

//Associative Array with "single key single value"
$student = [
    '12' => 'Hasan',
    '13' => 'Korim',
    '20k'  => 'khairul',
];

echo $student['12']; echo '<br>';

//Associative Array with "single key Multiple value"

$foods = [
    'fruits'    => 'Mango, Banana, Orange, coconut, Papaya',
    'vegetable' => 'Brinjal, brocolli, carrot, capsicam',
];

foreach ($foods as $key=>$value){
    echo $key. '=' .  $value .'<br>';
}
var_dump(array_keys($foods));
echo '<br>';
var_dump(array_values($foods));


echo $foods['fruits'];

//-----------------------------------
// String to array & array to string
//-----------------------------------
echo '<br>';
echo '<br>';
$fruits = 'Mango, Banana, Orange,coconut, Papaya';
$fruitsToArray  = explode(', ',$fruits); // it will work only on paramenter.
print_r($fruitsToArray);echo '<br>';
$fruitsToArray  = preg_split('/(, |,)/',$fruits); // It will work maultiple parameter
print_r($fruitsToArray);echo '<br>';
var_dump(join(',', $fruitsToArray));

echo '<br>';echo '<br>';


//---------------------------------------
// Multidimensional array - nested array
//---------------------------------------

$foods = [
    'fruits'    => explode(', ','Mango, Banana, Orange, coconut, Papaya'),
    'vegetable' => array('Brinjal', 'brocolli', 'carrot', 'capsicam')
];

var_dump($foods);
echo '<br>';echo '<br>';
// nested array

$nestedArray = [
    'FirstIndex' =>[
        'SecondIndex'=>[
            'ThirdIndex'=>[
                'a',
                'b',
                'c'
            ],
            '1',
            '2',
            '3'
        ]
    ]
];
echo '<pre>';
var_dump($nestedArray);
echo '</pre>';
echo 'nested array in third index: <b>'. $nestedArray['FirstIndex']['SecondIndex']['ThirdIndex']['1'] . '</b> nested array in 2nd index: <b>'. $nestedArray['FirstIndex']['SecondIndex']['2'].'</b>';
echo '<br>';echo '<br>';
// unset fuction for remove asociative key & value
$foods = [
    'fruits'    => explode(', ','Mango, Banana, Orange, coconut, Papaya'),
    'vegetable' => array('Brinjal', 'brocolli', 'carrot', 'capsicam')
];
echo "<h4>Remove associative key with value by unset() function</h4>";
unset($foods['vegetable']);

var_dump($foods);

