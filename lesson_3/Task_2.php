<?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    echo "Вывести числа в следущей последовательности: 200 199 198 … 0.<br><br>";
    for ($i = 200; $i >= 0; $i--) {
        echo $i . "<br>";
    }   