<?php
$arr = [
    [1,2,3,4,5],
    [4,5,6,8,9],
    [7,8,9,8,7]
];
$sum = 0;
for($i = 0; $i < count($arr); $i++){
    for ($j = 0; $j < count($arr[0]); $j++){
        if ($j == count($arr[$i]) - 1){
            $sum += $arr[$i][$j];
        }
    }
}
echo $sum;