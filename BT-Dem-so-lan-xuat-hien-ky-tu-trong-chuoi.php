<?php
function demKyTu($str,$x){
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++){
        if ($str[$i] == $x){
            $count++;
        }
    }
    return $count;
}
$str2 = "aabbbbbbccc";
$x2 = "b";
echo demKyTu($str2,$x2);


