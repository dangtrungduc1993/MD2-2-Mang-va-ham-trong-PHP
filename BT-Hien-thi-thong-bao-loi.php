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
<form method="post">
    <input type="text" name="number1" placeholder="Nhap so thu nhat">
    <select name="tinhToan">
        <option>+</option>
        <option>-</option>
        <option>*</option>
        <option>/</option>
    </select>
    <input type="text" name="number2" placeholder="Nhap so thu hai">
    <button>Ket Qua</button>
</form>


<?php
function tinhToan($x, $y, $phepTinh)
{
    switch ($phepTinh) {
        case "+":
            return $x + $y;
        case "-":
            return $x - $y;
        case "*":
            return $x * $y;
        case "/":
            if (($x == 0 && $y == 0) || $y == 0) {
                throw new Exception("/ by zero");
            }
            return $x / $y;
    }
}

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number1 = $_REQUEST["number1"];
        $number2 = $_REQUEST["number2"];
        $phepTinh = $_REQUEST["tinhToan"];
    }
    ?>
    <p>Result : <?php echo tinhToan($number1, $number2, $phepTinh); ?></p>
    <?php
} catch (Exception $e) {
    echo $e->getMessage();
}

?>

</body>
</html>

