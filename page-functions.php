<?php


function isChecked($inputname, $value){

    //var_dump();

    if( isset($_REQUEST[$inputname]) && is_array($_REQUEST[$inputname])  && in_array($value,$_REQUEST[$inputname]  ) ){
       echo 'checked';
    }

}