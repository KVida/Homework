<?php 
//Задача 2: Рассчитать скорость машины и вывести ее в удобном виде
function speed($s, $t, $val)
{
    if ($val == 1) 
        $speed = $s/$t;
    else
        $speed = $s/$t/3.6;

    return $speed;
}

if (isset($_POST["s"])) {
    $s = $_POST["s"];
    $t = $_POST["t"];
    $val = $_POST["val"];

    $v = speed($s, $t, $val);
    echo "Скороть = " . $v . (($val == 1) ? " км/ч" : " м/с");
}