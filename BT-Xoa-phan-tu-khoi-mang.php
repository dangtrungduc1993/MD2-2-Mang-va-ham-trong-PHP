<?php
function xoaX($arr,$x){

    for ($i = 0; $i < count($arr);$i++){
        if ($arr[$i] == $x){
            unset($arr[$i]);
        }
    }
    return $arr;
}
$arr2 = [1,2,3,4,5];
$x2 = 6;
print_r(xoaX($arr2,$x2));