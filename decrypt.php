<?php

function binarys($string)
{
    $characters = str_split($string);
 
    $binary = [];
    foreach ($characters as $character) {
        $data = unpack('H*', $character);
        $convert = base_convert($data[1], 16, 2);
        if($convert[0] == '0'){
            $binary[] = substr($convert, 1);
        }else{   
            $binary[] = substr($convert, 0);
        }
    }
 
    return implode('', $binary);    
}

$input_nama = fopen('php://stdin','r');
$string = trim(fgets($input_nama));
echo 'STRING: '.$string.PHP_EOL;
echo 'BINARY: '.$binary = binarys($string).PHP_EOL;

?>