<?php
    $Order_number = fopen('files/Order_number.txt','a+');
    rewind($Order_number);

    $numberOrder = array();
    while ($numberLine = fgets($Order_number)) {
        $numberOrder[] = (int) $numberLine;
    }

    $countNumberOrder = count($numberOrder);
?>
<p> Ващ заказ № <? echo $numberOrder[$countNumberOrder-1]; ?> принят.</p>