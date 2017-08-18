<?php
    if (isset($_POST['amount'])) {
        $product_id = strip_tags(trim($_POST['product_id']));
        $amount = strip_tags(trim($_POST['amount']));
    } else {
        echo "error: Введите к-во товаров.";
        exit;
    }

    $product_cart = array();
    if (isset($_COOKIE['product_cart'])) {
        $product_cart = unserialize($_COOKIE['product_cart']);
        $product_cart[$product_id] = $amount;    
    } else {
        $product_cart[$product_id] = $amount;
    }
    setcookie('product_cart', serialize($product_cart), time()+3600*24*30,'/');

    header("location: index.php?r=product&id=" . $product_id);