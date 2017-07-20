<?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    echo "Вывести строку Hello World! в столбец при помощи цикла for <br><br>";

    $str = "Hello World!";
    $strlen = strlen($str);

    for ($i = 0; $i < $strlen ; $i++) { 
        print $str{$i} . '<br>';
    }