<?php
function gopMang($arr,$arr2){
    $arr3 = [];
    for ($i = 0; $i < count($arr); $i++){
        $arr3[$i] = $arr[$i];
    }
    for ($i = count($arr); $i < count($arr) + count($arr2); $i++ ){
        $arr3[$i] = $arr2[$i - count($arr)];
    }
    return $arr3;

}
$ar = [1,2,3];
$ar2 = [4,5,6];
print_r(gopMang($ar,$ar2));
