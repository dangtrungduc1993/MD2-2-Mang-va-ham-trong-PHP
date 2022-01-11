<?php
function timMax($arr){
    $min = $arr[0];
    $index = 0;
    for ($i = 0; $i < count($arr);$i++){
        if ($arr[$i] < $min){
            $min = $arr[$i];
            $index = $i;
        }
    }
    return $index;
}
$arr2 = [7,2,3];
print_r(timMax($arr2));
