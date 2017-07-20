<?php
    header('Content-Type: text/html; charset=utf-8');
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    echo "Создать массива из 10-ти случайных чисел и выполнить сортировку его значений пузырьковым способом. <br> <br>";

    $arr_size = 10;
    $rand_number = array();

    for ($i = 0; $i < $arr_size; $i++) { 
        $rand_number[$i] = rand(0, 255);
    }

    echo "<pre>";
    print_r($rand_number);
    echo "</pre>";

    echo "<br>";

    for ($i = 0; $i < $arr_size; $i++) { 
        for ($j = $i; $j < $arr_size; $j++) { 
            if ($rand_number[$i] >= $rand_number[$j]) {
                $variable = $rand_number[$i];
                $rand_number[$i] = $rand_number[$j];
                $rand_number[$j] = $variable;
            }
        }
    }

    for ($i = 0; $i < $arr_size; $i++) { 
        print $rand_number[$i] . '<br>';
    }
