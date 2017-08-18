<?php
    $Order_file = fopen('files/Order_file.txt','a+');

    $orderNumber = $_POST['orderNumber'];
    $userName = strip_tags(trim($_POST['userName']));
    $userSurname = strip_tags(trim($_POST['userSurname']));
    $userEmail = strip_tags(trim($_POST['userEmail']));
    $userPhone = strip_tags(trim($_POST['userPhone']));
    $userAddress = strip_tags(trim($_POST['userAddress']));
    $userComment = strip_tags(trim($_POST['userComment']));

    $productName = $_POST['productName'];  
    $productAmount = $_POST['productAmount'];
    $productPrice = $_POST['productPrice'];



    fwrite($Order_file, "========== Заказ № " . $orderNumber . " ==========\r\n");
    fwrite($Order_file, "Имя:" . $userName . "\r\n");
    fwrite($Order_file, "Фамилия:" . $userSurname . "\r\n");
    fwrite($Order_file, "Email:" . $userEmail . "\r\n");
    fwrite($Order_file, "Телефон:" . $userPhone . "\r\n");
    fwrite($Order_file, "Адрес доставки:" . $userAddress . "\r\n");
    fwrite($Order_file, "Комментарий к заказу:" . $userComment . "\r\n");
    fwrite($Order_file, "Список товаров: \r\n");

    $countProduct = count($productName);

    for ($i=0; $i < $countProduct; $i++) {
        $numberI = $i + 1;
        fwrite($Order_file, $numberI . '. '. $productName[$i] . '- ' . $productAmount[$i] . 'шт. - '.  $productPrice[$i] ."грн. \r\n");   
    }

    setcookie("product_cart", "", time() - 3600);
    
    header("location: index.php?r=order_accepted");