<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$arr2 = [14,36,56,30,11,69,43,81,11,92,27,61,26,82,12,92,68,86,91,61,12,13,9,22,44,17,52,29,18,19,51,3,70,22,34,49,28,35,8,83,46,40,12,66,11,57,20,0,3,93,60,35,99,77,36,40,6,51,73,32,90,20,81,66,78,82,7,51,72,24,29,22,57,14,94,43,65,76,48,83,88,11,78,78,73,40,80,50,83,26,28,56,22,15,73,94,93,38,95,40];

?>
<form action="" method="post">
    <input type="number" name="input">
    <button type="submit" >Check</button>
</form>
<?php

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $input = $_POST["input"];
            function timGiaTriIndex($arr,$x){
            for ($i = 0; $i < count($arr); $i++){
                if ($i == $x){
                    return $arr[$i];

                }
            }
            return "Chi so vuot qua gioi han cua mang";
        }
    }
    echo timGiaTriIndex($arr2, $input);

?>


</body>
</html>

