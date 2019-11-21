<?php

/**
 * Return boolean
 *
 */

function isEven($n){
    if($n%2==0){
        return true;
    }
    return false;
}

/**
 * Funtion return type & receive type declare
 *
 */
function returnType(int  $a, int $b):int {
    return $a*$b;
}
