<?php
function timMax($arr){
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr);$i++){
        for ($j = 0; $j < count($arr[0]); $j++){
            if ($arr[$i][$j] > $max){
                $max = $arr[$i][$j];
            }

        }
    }
    return $max;
}
$arr2 = [[1,2,3],[4,5,6]];
print_r(timMax($arr2));