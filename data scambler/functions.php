<?php

function displayKey($key){
        printf("Value = '%s'", $key);
}

function encodeData($key, $data){
    $key_original = 'abcdefghijklmnopqrstuvwxyz1234567890';

    $lenght = strlen($data);
    $encryptData = '';

    for ($i=0; $i<$lenght; $i++){
        $currentCarecter = $data[$i];

      $position = strpos($key_original, $currentCarecter);

      if($position !== false){
          $encryptData .=$key[$position];
      }else{
          $encryptData .=$currentCarecter;
      }

    }

    return $encryptData;
}


function decodeData($key, $data){
    $key_original = 'abcdefghijklmnopqrstuvwxyz1234567890';

    $lenght = strlen($data);
    $encryptData = '';

    for ($i=0; $i<$lenght; $i++){
        $currentCarecter = $data[$i];

        $position = strpos($key, $currentCarecter);

        if($position !== false){
            $encryptData .=$key_original[$position];
        }else{
            $encryptData .=$currentCarecter;
        }

    }



    return $encryptData;
}