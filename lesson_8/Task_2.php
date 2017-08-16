<?php 
    ini_set('display_errors',true);
    error_reporting(E_ALL);

    $numbers1000 = fopen('Task_2_numbers1000.txt','w+'); 
    $pairedNumber = fopen('Task_2_pairedNumber.txt','w+');
    $unpairedNumber = fopen('Task_2_unpairedNumber.txt','w+'); 
     
    $countLines = 1000;

    for ($i = 0; $i < $countLines; $i++) { 
        $number = rand(1, 500);
        fwrite($numbers1000, $number . "\r\n");  
    }

    rewind($numbers1000);

    $numberTxt = array();
    while ($numberLine = fgets($numbers1000)) {
        $numberTxt[] = (int) $numberLine;
    }
    
    $countNumberTxt = count($numberTxt);
    for ($i = 0; $i < $countNumberTxt; $i++) {
        if (($numberTxt[$i]  % 2) == 0) {
            fwrite($pairedNumber, $i . ' => ' . $numberTxt[$i] . "\r\n");
        } else {
            fwrite($unpairedNumber, $i . ' => ' . $numberTxt[$i] . "\r\n");
        }
    }